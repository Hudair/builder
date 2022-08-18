<?php
	/*
	 * @autor: MultiFour
	 * @version: 1.0.0
	 *
	 * Class Request
	 */
	class Request {
		protected $_base_path = null;
		protected $_images = array();
		protected $_videos = array();
		protected $_file_error = '';

		public function __construct() {
			$this->_base_path = SUPRA_BASE_PATH;
		}

		/**
		 * @param $haystack {array|string}
		 * @param $needles {array}
		 * @param $offset {int}
		 * @return bool|int
		 */
		protected function _strposa($haystack, $needles, $offset = 0) {
			if (is_array($needles)) {
				foreach ($needles as $needle) {
					$pos = $this->_strposa($haystack, $needle);
					if ($pos !== false) {
					    if ($pos === 0) $pos = true;
						return $pos;
					}
				}
				return false;
			} else {
				return strpos($haystack, $needles, $offset);
			}
		}

		/**
		 * @param $val {variable}
		 * @param $type {string}
		 * @return bool|int
		 */
		protected function _validation(&$val, $type) {
			switch ($type) {
				case 'string':
					return preg_match('/^[0-9a-zа-яё.()@_ -]*$/i', $val);
					break;
				case 'email':
					$arr = explode(',', $val);
					$result = array();
					if (is_array($arr)) {
						foreach($arr as $value) {
							if (preg_match('/^[a-z0-9._-]+[^.]+@[^@]+[a-z_-]+\.[a-z]+$/i', trim($value)))
								array_push($result, $value);
						}
						$val = implode(',', $result);
						return true;
					} else {
						return preg_match( '/^[a-z0-9._-]+[^.]+@[^@]+[a-z_-]+\.[a-z]+$/i', $val );
					}
					break;
				case 'url':
					return preg_match('/^[0-9a-z.:\/_-]*$/i', $val);
					break;
				case 'file':
					if ($val['error'] > 0) {
						$this->_check_file_error($val['error']);
						return false;
					}
					return true;
			}

			return false;
		}

		/**
		 * @param $error {int}
		 */
		protected function _check_file_error($error) {
			switch ($error) {
				case 1:
				case 2:
					$max_file_size = ini_get('upload_max_filesize');
					$this->_file_error = 'The uploaded file exceeds the max filesize (' . $max_file_size . ')';
					break;
				case 3:
					$this->_file_error = 'The uploaded file was only partially uploaded';
					break;
				case 4:
					$this->_file_error = 'No file was uploaded';
					break;
				case 6:
					$this->_file_error = 'Missing a temporary folder';
					break;
				case 7:
					$this->_file_error = 'Failed to write file to disk';
					break;
				case 8:
				default:
					$this->_file_error = 'Error upload file';
					break;
			}
		}

		/**
		 * @param $path {string}
		 * @param $arr {array}
		 * @param $mode {string}
		 */
		protected function _upload_file($path, $arr, $mode,$userId,$project_id) {
			$file_name = $_POST['name_file'];
			$sub_folder = isset($_POST['sub_folder']) ? $_POST['sub_folder'] : '';
			if ($this->_validation($file_name, 'string')) {
				if ( $this->_strposa( strtolower($file_name), $arr ) ) {
					if ($this->_validation($_FILES['data'], 'file')) {
						if ( move_uploaded_file( $_FILES['data']['tmp_name'],
							$path . $sub_folder . $file_name ) ) {

							if ($mode === 'addgallery') {
								echo json_encode( array( 'fileName' => '/images/gallery/' . $sub_folder . $file_name ) );
							} else if ($mode === 'addgalleryvideo') {
								echo json_encode( array( 'fileName' => '/video/gallery/' . $file_name ) );
							} else if ($mode === 'import') {
								$zip = new ZipArchive();
								$file_name = 'tmp/'.$userId.'/'.$project_id.'/' . $file_name;
								if (preg_match('/.*\.zip/i', $file_name)) {
									if ( $zip->open( $file_name ) ) {
										$zip->extractTo( 'tmp/'.$userId.'/'.$project_id.'/' );
										$zip->close();
										unlink( $file_name );

										$this->_readFileProject('tmp/'.$userId.'/'.$project_id.'/project.supra');
									}
								} else if (preg_match('/.*\.supra/i', $file_name)) {
									$this->_readFileProject($file_name);
									unlink( $file_name );
								}
							}

							exit();
						} else {
							echo json_encode( array( 'error' => 'file not was uploaded' ) );
							exit();
						}
					} else {
						echo json_encode( array( 'error' => $this->_file_error ) );
						exit();
					}
				}
			} else {
				echo json_encode(array('error' => 'this file name invalid'));
				exit();
			}
			echo json_encode(array('error' => 'this extension file not supported'));
			exit();
		}

		/**
		 * @param $f_name_project {string}
		 */
		protected function _readFileProject($f_name_project) {
			$file_project   = fopen( $f_name_project, 'r' );
			if ( $file_project ) {
				$f_size  = filesize( $f_name_project );
				$content = fread( $file_project, $f_size );

				fclose( $file_project );
				unlink( $f_name_project );

				echo $content;
				exit();
			}
		}

		/**
		 * Calling from ajax to add the gallery new an image
		 */
		public function Addgallery() {
			$this->_upload_file($this->_base_path .'/images/gallery/', array( '.png', '.jpg', '.jpeg', '.gif', '.svg' ), 'addgallery',$_POST['userId'],$_POST['project_id']);
		}

		/**
		 * Calling from ajax to add the gallery new an image
		 */
		public function Addgalleryvideo() {
			$this->_upload_file($this->_base_path .'/video/gallery/', array( '.mp4', '.ogv', '.jpg' ), 'addgalleryvideo',$_POST['userId'],$_POST['project_id']);
		}

        /**
         * Calling from ajax to add the gallery new an image
         */
        public function FtpUpload() {
            $this->_clearTmp();

            $mode = ini_get('magic_quotes_gpc');
            $dataPost = $_POST['data'];
            if ($mode) {
                $dataPost = stripslashes($dataPost);
            }

            $file_name = $this->saveSiteToTmp($dataPost);

            $zip = new ZipArchive();

            if ($this->_strposa($_POST['type'], ['ftp', 'ftps'])) {
                if (
                    $_POST['host'] === ''
                    || $_POST['dir'] === ''
                    || $_POST['user'] === ''
                    || $_POST['pass'] === ''
                    || !$this->_validation($_POST['host'], 'string')
                    || !$this->_validation($_POST['dir'], 'url')
                    || !$this->_validation($_POST['user'], 'string')
                ) {
                    echo json_encode([
                        'status' => 500,
                        'message' => 'Check please the parameters: host, dirname, user, password.'
                    ]);
                    exit;
                }

                $output_dir ='tmp/' . preg_replace('#\.zip#' , '', $file_name);

                try {
                    if ($zip->open('tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . $file_name)) {
                        $zip->extractTo($output_dir);
                        $zip->close();
                        unlink('tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . $file_name);
                    }

                    $ftp = new ftpUploading(
                        'tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . preg_replace('#\.zip#', '', $file_name)
                        , [
                            'type' => $_POST['type'],
                            'mode' => $_POST['mode'],
                            'host' => $_POST['host'],
                            'dir' => $_POST['dir'],
                            'user' => $_POST['user'],
                            'pass' => $_POST['pass'],
                        ]
                    );
                    $ftp->doIt();

                    $it = new RecursiveDirectoryIterator($output_dir, RecursiveDirectoryIterator::SKIP_DOTS);
                    $files = new RecursiveIteratorIterator($it,
                        RecursiveIteratorIterator::CHILD_FIRST);
                    foreach ($files as $file) {
                        if ($file->isDir()) {
                            rmdir($file->getRealPath());
                        } else {
                            unlink($file->getRealPath());
                        }
                    }
                    rmdir($output_dir);

                    echo json_encode([
                        'status' => 200,
                        'message' => 'Uploaded successfully'
                    ]);

                } catch (Exception $e) {
                    echo json_encode([
                        'status' => 500,
                        'message' => $e->getMessage()
                    ]);
                }

            } else if ($_POST['type'] === 'local') {
                if ( $_POST['dir'] === '' || !$this->_validation($_POST['dir'], 'url') ) {
                    echo json_encode([
                        'status' => 500,
                        'message' => 'Set a dir path in options.js'
                    ]);
                    exit;
                }

                $output_dir = dirname(__FILE__) . $_POST['dir'];

                try {
                    if (!file_exists($output_dir)) {
                        mkdir($output_dir, 0777, true);
                        chmod($output_dir, 0777);
                    } else {
                        $it = new RecursiveDirectoryIterator($output_dir, RecursiveDirectoryIterator::SKIP_DOTS);
                        $files = new RecursiveIteratorIterator($it,
                            RecursiveIteratorIterator::CHILD_FIRST);
                        foreach($files as $file) {
                            if ($file->isDir()){
                                rmdir($file->getRealPath());
                            } else {
                                unlink($file->getRealPath());
                            }
                        }
                    }

                    if ($zip->open('tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . $file_name)) {
                        $zip->extractTo($output_dir . '/');
                        $zip->close();
                        unlink('tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . $file_name);
                    }
                    echo json_encode([
                        'status' => 200,
                        'url' => $_POST['dir'] . '/'
                    ]);
                } catch (Exception $e) {
                    echo json_encode([
                        'status' => 500,
                        'message' => 'The site can\'t be show'
                    ]);
                }
            }
        }

		/**
		 * Calling from ajax to recive account credentials
		 */
		public function Getawebercredentials() {
			$consumerKey    = "Ak48wjRm2ynLzEWlfu1wTWv1";
			$consumerSecret = "PrJWMR4ggpMT4oInOlxt5b91IkkRJ7K9otLEprc4";

			$aweber = new AWeberAPI($consumerKey, $consumerSecret);

			if (empty($_COOKIE['accessToken'])) {
				if (empty($_GET['oauth_token'])) {
					$callbackUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					list($requestToken, $requestTokenSecret) = $aweber->getRequestToken($callbackUrl);
					setcookie('requestTokenSecret', $requestTokenSecret);
					setcookie('callbackUrl', $callbackUrl);
					header("Location: {$aweber->getAuthorizeUrl()}");
					exit();
				}

				$aweber->user->tokenSecret = $_COOKIE['requestTokenSecret'];
				$aweber->user->requestToken = $_GET['oauth_token'];
				$aweber->user->verifier = $_GET['oauth_verifier'];
				list($accessToken, $accessTokenSecret) = $aweber->getAccessToken();
				setcookie('accessToken', $accessToken);
				setcookie('accessTokenSecret', $accessTokenSecret);
				header('Location: '.$_COOKIE['callbackUrl']);
				exit();
			}

			# set this to true to view the actual api request and response
			$aweber->adapter->debug = false;

			$account = $aweber->getAccount($_COOKIE['accessToken'], $_COOKIE['accessTokenSecret']);

			$content = '';
			foreach($account->lists as $offset => $list) {
				$content .= "<h2>List name: $list->name</h1>"
						. "<h3>List ID: $list->id</h3>";
			}

			$response = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AWeber verification account</title>
  <link type="text/css" rel="stylesheet" href="css/main.css" />
<body>
	$content
<body>
</html>
EOT;
			echo $response;
			exit();
		}

        /**
		 * Calling from ajax to get the images collection
		 */
		public function Getgallery() {
			$type = $_POST['type'];
			$base_path = $this->_base_path.'/images/gallery';

			$this->_images = scandir($base_path);
			unset($this->_images[0]);
			unset($this->_images[1]);

			$response = array();
            $response['general'] = array();
			foreach ($this->_images as $image) {
                if (preg_match('#\.ds_store#i', $image)) {
                    continue;
                }
				if (is_file($base_path. '/' .$image)) {
					if ($type === 'retina') {
						$size       = getimagesize( $base_path . '/' . $image );
                        $response['general'][] = array(
							'name'   => $image . '?t=' . time(),
                            'path'   => './images/gallery/' . $image
						,	'width'  => $size[0]
						,	'height' => $size[1]
						);
					} else if ($type === 'normal') {
						$size       = getimagesize( $base_path . '/' . $image );
						$srcset = '';
						if (preg_match('/([^.]*)(\..*)/', $image, $match)) {
							$srcset = $match[1] . '@2x' . $match[2];
							if (!is_file($base_path. '/' .$srcset))
								$srcset = '';
						}
                        $response['general'][] = array(
							'name'   => $image . '?t=' . time(),
                            'path'   => './images/gallery/' . $image
						,   'srcset' => $srcset
						,	'width'  => $size[0]
						,	'height' => $size[1]
						);
					}
				} else {
				    $innerImage = scandir($base_path. '/' .$image);
                    unset($innerImage[0]);
                    unset($innerImage[1]);

                    $response[$image] = array();

                    foreach ($innerImage as $imageL2) {
                        if (preg_match('#\.ds_store#i', $imageL2)) {
                            continue;
                        }
                        if (is_file($base_path. '/' . $image . '/' . $imageL2)) {
                            if ($type === 'retina') {
                                $size       = getimagesize( $base_path . '/' . $image . '/' . $imageL2 );
                                $response[$image][] = array(
                                    'name'   => $imageL2 . '?t=' . time(),
                                    'path'   => './images/gallery/' . $image . '/' . $imageL2
                                ,	'width'  => $size[0]
                                ,	'height' => $size[1]
                                );
                            } else if ($type === 'normal') {
                                $size       = getimagesize( $base_path . '/' . $image . '/' . $imageL2 );
                                $srcset = '';
                                if (preg_match('/([^.]*)(\..*)/', $imageL2, $match)) {
                                    $srcset = $match[1] . '@2x' . $match[2];
                                    if (!is_file($base_path. '/' .$srcset))
                                        $srcset = '';
                                }
                                $response[$image][] = array(
                                    'name'   => $imageL2 . '?t=' . time(),
                                    'path'   => './images/gallery/' . $image . '/' . $imageL2
                                ,   'srcset' => $srcset
                                ,	'width'  => $size[0]
                                ,	'height' => $size[1]
                                );
                            }
                        }
                    }
                }
			}

			echo json_encode(array('gallery' => $response));
			exit();
		}
        
        /**
		 * Calling from ajax to get the video collection
		 */
        public function Getgalleryvideo() {
			$base_path = $this->_base_path.'/video/gallery';
            $mode = ini_get('magic_quotes_gpc');
			$data = $_POST['data'];
            if ($mode) {
				$data = stripslashes($data);
			}

			$this->_videos = scandir($base_path);
			unset($this->_videos[0]);
			unset($this->_videos[1]);

			$response = array();
			foreach ($this->_videos as $video) {
				if (is_file($base_path. '/' .$video)
					&& $this->_strposa( strtolower($video), array('.' . $data) )
					&& $data !== 'jpg'
				) {
					preg_match('/[^.]*/i', $video, $poster);
					$size = null;
					if (is_file($base_path. '/' . $poster[0]. '.jpg'))
						$size = getimagesize($base_path. '/' . $poster[0]. '.jpg');
					$response[] = array('name' => $video
						, 'width' => $size ? $size[0] : ''
						, 'height' => $size ? $size[1] : ''
					);
				} else if($this->_strposa( strtolower($video), array('.' . $data))) {
					$size = getimagesize($base_path. '/' .$video);
					$response[] = array('name' => $video
					, 'width' => $size[0]
					, 'height' => $size[1]
					);
				}
			}

			echo json_encode(array('gallery' => $response));
			exit();
		}

		/**
		 * Calling from ajax to get the icons collection
		 */
		public function Geticonsgallery() {
			$base_path = 'css/icons.css';

			$css_icons = file_get_contents($base_path);

			$match = preg_match_all('/\.icon-[^:]*/im', $css_icons, $response);

			if ($match) {
				echo json_encode(array('iconsGallery' => $response));
				exit();
			}
			echo json_encode(array('error' => 'Icons not exist'));
			exit();
		}

		/**
		 * Calling from ajax to get a file that contains intermediate work of the project
		 */
		public function Export() {
			$this->_clearTmp();
			$mode = ini_get('magic_quotes_gpc');
			$data = $_POST['data'];
			if ($mode) {
				$data = stripslashes($data);
			}

			$filename = 'tmp/'.$_POST['userId'].'/'.$_POST['project_id'].'/' . uniqid() . "_project.zip";
			$zip = new ZipArchive();
			$zip->open($filename, ZipArchive::CREATE);

			$zip->addFromString('project.supra',$data);

			$zip->close();

			$file_name = basename($filename);

			echo json_encode(array('file' => $file_name));
			exit();
		}

		/**
		 * Calling from ajax to upload a file that contains intermediate work of the project
		 */
		public function Import() {
			$this->_upload_file($this->_base_path .'/tmp/', array( '.zip', '.supra' ), 'import',$_POST['userId'],$_POST['project_id']);
		}

		/**
		 * @param $baseFiles {array}
		 * @param $js_plugins {string}
		 */
		protected function _add_video_bg(&$baseFiles) {
			array_push($baseFiles['js'], 'jquery.vide.min.js');
//			$baseFiles = array_merge($baseFiles, array(
//					'video' => array(
//						'video_bg.mp4'
//					, 'video_bg.ogv'
//					, 'video_bg.jpg'
//					)
//				)
//			);
		}

		/**
		 * @param $baseFiles {array}
		 * @param $js_plugins {string}
		 * @param $style_gallery {string}
		 */
		protected function _add_gallery(&$baseFiles) {
			array_push($baseFiles['css'], 'owl.carousel.css');
			array_push($baseFiles['js'], 'owl.carousel.js');
		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_datepicker(&$baseFiles) {
			array_push($baseFiles['css'], 'bootstrap-datepicker.css');
			array_push($baseFiles['js'], 'bootstrap-datepicker.min.js');
		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_filefield(&$baseFiles, &$zip) {
			array_push($baseFiles['js'], 'jquery.custom-file-input.js');

			$zip->addEmptyDir('tmp');
		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_magnific(&$baseFiles) {
			array_push($baseFiles['css'], 'magnific-popup.css');
			array_push($baseFiles['js'], 'jquery.magnific-popup.min.js');
		}

		/**
		 * @param $baseFiles
		 * @param $data
		 * @param $zip
		 */
		protected function _add_form_section(&$baseFiles, &$data, &$zip) {
			array_push($baseFiles['js'], 'jquery.validate.min.js');

			$path = 'scripts/request.php';

			$content = "<?php\n";

			foreach ($data->forms as $form) {
				$mailer = new Mailer($form, $zip);
                $modeType = isset($form->sendMode) ? $form->sendMode : null;
				$content .= $mailer->Get_sanding_mail_code($modeType);
			}

			$zip->addFromString(
				$path
				, $content
			);

		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_smooth(&$baseFiles) {
			array_push($baseFiles['js'], 'jquery.smooth-scroll.min.js');
		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_parallax(&$baseFiles) {
			array_push($baseFiles['js'], 'rellax.min.js');
		}

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_countup(&$baseFiles) {
			array_push($baseFiles['js'], 'jquery.waypoints.min.js');
			array_push($baseFiles['js'], 'countUp-jquery.js');
		}

        /**
         * @param $baseFiles {array}
         */
        protected function _add_instafeed(&$baseFiles) {
            array_push($baseFiles['js'], 'instafeed.min.js');
        }

        /**
         * @param $baseFiles {array}
         */
        protected function _add_twitterfetcher(&$baseFiles) {
            array_push($baseFiles['js'], 'twitterFetcher.js');
        }

		/**
		 * @param $baseFiles {array}
		 */
		protected function _add_countdown(&$baseFiles) {
			array_push($baseFiles['js'], 'jquery.countdown.js');
		}

        /**
         * @param $baseFiles {array}
         */
        protected function _add_masonry_filter(&$baseFiles) {
            array_push($baseFiles['css'], 'masonryfilter.css');
            array_push($baseFiles['js'], 'jquery.masonryfilter.js');
        }

		/**
		 * @param $data {object}
		 * @param $zip {object}
		 * @param $fonts {string}
		 */
		protected function _add_fonts(&$data, &$zip, &$fonts) {
//			$fonts_path = 'js/fonts.js';
//			$content = '';
//			$fonts_content = file_get_contents($fonts_path);
//			foreach ($data->fonts_project as $value) {
//				$font_name = str_replace(' ', '\+', $value);
//				preg_match('/[^:]*/i',$font_name, $font_name_two);
////				preg_match_all('/.*(?:'.$font_name.'|'.$font_name_two[0].'(?!\:)).*/i', $fonts_content, $fonts_fdg);
//				preg_match_all('/.*(?:'.$font_name.').*/i', $fonts_content, $fonts_fdg);
//				$content .= $fonts_fdg[0][0]."\n";
//			}
//			$content = "\"use strict\";\n\nWebFont.load({
//    google: {
//        families: [
//".$content."        ]
//    }
//});";
//			$zip->addFromString( 'js/fonts.js', $content);
//			$fonts .= "\n\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js\"></script>";
//			$fonts .= "\n\t\t<script src=\"js/fonts.js\"></script>";
            $fonts_to_download = new FontsToDownload($data->style, $zip);

            $fonts .= "\n\t\t<link rel=\"stylesheet\" href=\"css/fonts.css\" />";

            return $fonts_to_download;
		}
		/**
		 * @param $baseFiles {array}
		 * @param $js_plugins {string}
		 * @param $style_magnific {string}
		 */
		protected function _add_aos(&$baseFiles) {
			array_push($baseFiles['css'], 'aos.css');
			array_push($baseFiles['js'], 'aos.js');
		}

		/**
		 * @param $data {object}
		 * @param $overall_js {string}
		 * @param $zip {object}
		 * @param $fonts {string}
		 * @param $default_css {string}
		 * @param $style_gallery {string}
		 * @param $style_magnific {string}
		 * @param $default_js {string}
		 * @param $js_plugins {string}
		 */
		protected function _add_page(&$data, &$overall_js, &$zip, &$fonts, &$default_css, &$style_gallery,
			&$style_magnific, &$default_js, &$js_plugins, &$fonts_to_download) {
			$uniqueJs = array();

			foreach ($data->pages as $page) {
				foreach($page->sections as $group_name => $sections) {
					if (file_exists('sections/' . $group_name . '/overall.js')
					    && !in_array($group_name, $uniqueJs)
					) {
						$overall_js .= file_get_contents('sections/' . $group_name . '/overall.js')."\n";
						array_push($uniqueJs, $group_name);
					}
//					foreach($sections as $section) {
//						$images  = scandir( 'sections/' . $group_name . '/' . $section . '/images' );
//						unset( $images[0] );
//						unset( $images[1] );
//						foreach ( $images as $image ) {
//							preg_match( "/^([^.]*)./i", $image, $res );
//							if ( $res[1] !== $section ) {
//								$default_images[$image] = 'sections/' . $group_name . '/' . $section . '/images/' . $image;
////								$zip->addFile(
////									'sections/' . $group_name . '/' . $section . '/images/' . $image
////									, 'images/' . $image
////								);
//							}
//						}
//					}
				}

				$includePajeStyle = '';
				if ($page->style !== '') {
                    $page_style = preg_replace('#\?t=[0-9]*#im', '', $page->style);
                    
					preg_match_all('#(/)?images/gallery/([^"\')&]*)#i', $page_style, $customImages);
					if (!empty($customImages[2]) && count($customImages[2]) > 0) {
						foreach($customImages[2] as $image) {
							if (file_exists('images/gallery/'. $image)) {
								$zip->addFile( 'images/gallery/'. $image, 'images/' . $image );
							}
						}
					}

					preg_match_all('#sections/[\w/_()-]*/images/([^"\')&]*)#i', $page_style, $defaultImages);
					if (!empty($defaultImages[0]) && count($defaultImages[0]) > 0) {
						foreach($defaultImages[0] as $key => $image) {
							if (file_exists($image)) {
								$zip->addFile( $image, 'images/' . $defaultImages[1][$key] );
							}
						}
					}

					$page_style = preg_replace('#(\./)?(sections/[\w/_()-]*/images|images/gallery)#im', '../images', $page_style);
                    
					$zip->addFromString(
						'css/' . $page->page_name . '.css'
						, $page_style
					);
					$includePajeStyle .= "\n\t\t<link rel=\"stylesheet\" href=\"css/".$page->page_name.".css\" />";
				}

				$includePajeJs = '';
				if ($page->js !== '') {
					$zip->addFromString(
						'js/' . $page->page_name . '.js'
						, $page->js
					);
					$includePajeJs .= "\n\t\t<script src=\"js/".$page->page_name.".js\"></script>";
				}

				$preloader = '';
				$preloader_css = '';
				if ($page->preloader !== '') {
					$zip->addFile( 'css/preloader.css', 'css/preloader.css' );
					$preloader = "\n\t".$page->preloader;
					$preloader_css = "\n\t\t<link rel=\"stylesheet\" href=\"css/preloader.css\" />";
				}
				preg_match_all('#(/)?images/gallery/([^"\'\s]*)#i', $preloader, $customImages);
				if (!empty($customImages[2]) && count($customImages[2]) > 0) {
					foreach($customImages[2] as $image) {
						$zip->addFile( 'images/gallery/'. $image, 'images/' . $image );
					}
				}
				$preloader = preg_replace('#(http.*)?(\./)?(sections/[\w/_()-]*/images|images/gallery)#i', 'images', $preloader);

				preg_match('#(/)?images/gallery/(.*)#i', $page->favicon, $favicon);
				$link_favicon = "";
				if (!empty($favicon) && file_exists('images/gallery/' . $favicon[2])) {
					$link_favicon = "\n<link rel=\"icon\" href=\"images/$favicon[2]\" type=\"image/x-icon\">";
					$zip->addFile( 'images/gallery/' . $favicon[2], 'images/' . $favicon[2] );
				}
				
				$head = "\t<head>
		<meta charset=\"UTF-8\">
		<title>$page->title</title>
		$link_favicon
		<meta name=\"keywords\" content=\"$page->meta_keywords\" />
		<meta name=\"description\" content=\"$page->meta_description\" />
		<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,viewport-fit=cover\">$fonts".''."$default_css".''."$style_gallery".''."$style_magnific
		<link rel=\"stylesheet\" href=\"css/custom.css\" />".''."$includePajeStyle".''."$preloader_css
		
	</head>
    <body class=\"".$page->style_options."\">$preloader";

				$custom_js = '';
				if (preg_match('/\w/', $overall_js) || preg_match('/\w/', $data->js_over_all)) {
					$custom_js = "\n\t\t<script src=\"js/custom.js\"></script>";
				}
				$end = "$js_plugins".''."$default_js".''.$custom_js.''."$includePajeJs";

                $content = preg_replace('#\?t=[0-9]*#im', '', $page->content);
                
				preg_match_all('#(/)?images/gallery/([^"\'\)&]*)#i', $content, $customImages);
				if (!empty($customImages[2]) && count($customImages[2]) > 0) {
					foreach($customImages[2] as $image) {
						if (preg_match('/(.*)\s2x/i',$image,$img)) {
							$zip->addFile( 'images/gallery/' . $img[1], 'images/' . $img[1] );
						} else {
							$zip->addFile( 'images/gallery/' . $image, 'images/' . $image );
						}
					}
				}
				preg_match_all('#sections/[\w/_()-]*/images/([^"\')&]*)#i', $content, $defaultImages);
				if (!empty($defaultImages[0]) && count($defaultImages[0]) > 0) {
					foreach($defaultImages[0] as $key => $image) {
						if (preg_match('/(.*)\s2x/i',$image,$img)) {
							$url = preg_replace('/\s2x/', '', $image);
							$name = preg_replace('/\s2x/', '', $defaultImages[1][$key]);
							$zip->addFile( $url, 'images/' . $name );
						} else {
							$zip->addFile( $image, 'images/' . $defaultImages[1][$key] );
						}
					}
				}
				$content = preg_replace('#(http.*)?(\./)?(sections/[\w/_()-]*/images|images/gallery)#im', 'images', $content);

				preg_match_all('#(mp4|ogv|jpg).*?(/)?(video/(?:gallery/)?)([^"\',&]*)#i', $page->content, $customVideo);
				$trigger_video_deflt = false;
//				var_dump($customVideo);die;
				if (!empty($customVideo[4]) && count($customVideo[4]) > 0) {
					foreach ( $customVideo[4] as $key => $video ) {
						if ($customVideo[3][$key] === 'video/' && !$trigger_video_deflt) {
							$zip->addFile( 'video/video_bg.mp4', 'video/video_bg.mp4' );
							$zip->addFile( 'video/video_bg.ogv', 'video/video_bg.ogv' );
							$zip->addFile( 'video/video_bg.jpg', 'video/video_bg.jpg' );
							$trigger_video_deflt = true;
						} else if ($customVideo[4][$key] !== 'video/') {
							preg_match('/\..+/', $video, $type);
							if (empty($type)) {
								$type = '.' . $customVideo[1][$key];
								$zip->addFile( 'video/gallery/' . $video . $type, 'video/' . $video . $type );
//								var_dump('video/gallery/' . $video . $type);die;
							} else {
								$zip->addFile( 'video/gallery/' . $video, 'video/' . $video );
							}
						}
					}
				}
				$content = preg_replace('#(\./)?(video/gallery)#im', 'video', $content);
				$content = preg_replace('#(\sclass="spr-option-[^"&]*"|spr-option-[^"&]*)#im', '', $content);

                $fonts_to_download->matchFonts($content);

				$zip->addFromString(
					$page->page_name . '.html'
					, "<!DOCTYPE html>\n<html lang=\"en\">\n" .$head ."\n". $content ."". $end . "\n\t</body>\n</html>"
				);
			}
		}

		/**
		 * Calling from ajax to get a file that contains website
		 */
		public function Download() {
			$this->_clearTmp();

            $mode = ini_get('magic_quotes_gpc');
            $dataPost = $_POST['data'];
            if ($mode) {
                $dataPost = stripslashes($dataPost);
            }

            $file_name = $this->saveSiteToTmp($dataPost);

			echo json_encode(array('file' => $file_name));
			exit();
		}

		private function saveSiteToTmp($dataPost) {
            $data = json_decode($dataPost);
            $baseFiles = (array) $data->baseFilesForProject;

            $style_gallery = '';
            $style_magnific = '';

            $fonts = '';
            $default_css = '';
            $default_js = '';

            $js_plugins = '';


            $filename = "tmp/" . uniqid() . "_website.zip";

            $zip = new ZipArchive();
            $zip->open($filename, ZipArchive::CREATE);

            if ($data->video_bg) {
                $this->_add_video_bg($baseFiles);
            }

            if ($data->gallery) {
                $this->_add_gallery($baseFiles);
            }

            if ($data->magnific) {
                $this->_add_magnific($baseFiles);
            }

            if ($data->form_section) {
                $this->_add_form_section($baseFiles, $data, $zip);
            }

            if ($data->smooth) {
                $this->_add_smooth($baseFiles);
            }

            if ($data->parallax) {
                $this->_add_parallax($baseFiles);
            }

            if ($data->datepicker) {
                $this->_add_datepicker($baseFiles);
            }

            if ($data->filefield) {
                $this->_add_filefield($baseFiles, $zip);
            }

            if ($data->countup) {
                $this->_add_countup($baseFiles);
            }

            if ($data->instafeed) {
                $this->_add_instafeed($baseFiles);
            }

            if ($data->twitterfeed) {
                $this->_add_twitterfetcher($baseFiles);
            }

            if ($data->masonry_filter) {
                $this->_add_masonry_filter($baseFiles);
            }

            if ($data->countdown) {
                $this->_add_countdown($baseFiles);
            }

            $fonts_to_download =$this->_add_fonts($data, $zip, $fonts);

            if ($data->aos) {
                $this->_add_aos($baseFiles);
            }

            foreach ($baseFiles as $key => $value) {
                if ($key !== 'plugins') {
                    if ( is_array( $value ) ) {
                        foreach ( $value as $fileN ) {
                            $zip->addFile( $key . '/lib/' . $fileN, $key . '/' . $fileN );
                            if ($key === 'css') {
                                $default_css .= "\n\t\t<link rel=\"stylesheet\" href=\"$key/$fileN\" />";
                            } elseif ($key === 'js') {
                                $cookie_accepted = '';
                                if (
                                preg_match('#instafeed|twitterFetcher#', $fileN)
                                && !$data->withoutCookieDependent
                                ) {
                                    $cookie_accepted = ' type="text/plain" data-cookiescript="accepted"';
                                }
                                $default_js .= "\n\t\t<script$cookie_accepted src=\"$key/$fileN\"></script>";
                            }
                        }
                    }
                } else {
                    if ( is_array( $value ) ) {
                        foreach ( $value as $plug_path ) {
                            $cookie_accepted = '';
                            if (
                            preg_match('#maps.googleapis.com#', $plug_path)
                            && !$data->withoutCookieDependent
                            ) {
                                $cookie_accepted = ' type="text/plain" data-cookiescript="accepted"';
                            }
                            $js_plugins .= "\n\t\t<script$cookie_accepted src=\"$plug_path\"></script>";
                        }
                    }
                }
            }

            preg_match_all('#(/)?images/gallery/([^"\')&]*)#i', $data->style, $customImages);
            if (!empty($customImages[2]) && count($customImages[2]) > 0) {
                foreach($customImages[2] as $image) {
                    if (file_exists('images/gallery/'. $image)) {
                        $zip->addFile( 'images/gallery/'. $image, 'images/' . $image );
                    }
                }
            }

            $custom_style = preg_replace('#(\./)?(sections/[\w/_()-]*/images|images/gallery)#im', '../images', $data->style);
            $custom_style = preg_replace('#.font-style-supra (?:\/\*)?(\w*)(?:\*\/)?#im', '$1', $custom_style);
            $zip->addFromString( 'css/custom.css', $custom_style);

            $overall_js = "";

            $this->_add_page($data, $overall_js, $zip, $fonts, $default_css, $style_gallery,
                $style_magnific, $default_js, $js_plugins, $fonts_to_download);

            if (preg_match('/\w/', $overall_js)) {
                preg_match_all('#\/\/cookie-dependent-start([\s\S]*?)\/\/cookie-dependent-end#im', $overall_js, $cookieDependentArr);

                $overall_js_content = preg_replace('#\/\/cookie-dependent-start[\s\S]*?\/\/cookie-dependent-end#im', '', $overall_js);

                $overall_js = "\"use strict\";\n\n";

                if (isset($cookieDependentArr)) {
                    foreach ($cookieDependentArr[1] as $cd) {
                        $overall_js .= $cd . "\n\n";
                    }
                }
                $overall_js .= "window.addEventListener('load', function() {\n".$overall_js_content ."\n});";
            }

            if ( preg_match('/\w/', $data->js_over_all) ) {
                $overall_js .= "\n".$data->js_over_all;
            }

            if (preg_match('/\w/', $overall_js)) {
                $zip->addFromString(
                    'js/custom.js'
                    , $overall_js
                );
            }

            $fonts_to_download->getIncludeFonts();

            $zip->close();

            $file_name = basename($filename);

            return $file_name;
        }

		/**
		 * Calling from ajax to clear folder of tmp
		 */
		public function Delete() {
			$data = $_POST['data'];
			if (preg_match('/[a-z0-9]*_(project|website)\.zip/i', $data)) {
				//Auth::user()->id
				unlink($this->_base_path.'/tmp/'.$data);
			}
			exit();
		}

		/**
		 * Clearing folder of tmp
		 */
		protected function _clearTmp() {
			$tmp = scandir('tmp/');
			for ( $j = 2; $j < count( $tmp ); $j ++ ) {
				if (preg_match('/[a-z0-9]*_(project|website)\.zip/i', $tmp[ $j ])) {
					unlink('tmp/'.$tmp[ $j ]);
				}
			}
		}
	}

	include_once 'include/modal/mailer.php';
    include_once 'include/modal/fonts.php';
    include_once 'include/modal/fontsToDownload.php';
    include_once 'include/modal/ftpuploading.php';
	include_once 'include/common/aweber_api/aweber_api.php';
	include_once 'include/common/ftp/ftp.php';
	include_once 'include/common/sftp/sftp.php';
	include_once 'include/common/ftps/ftps.php';

	header('Access-Control-Allow-Origin: *');
	define('SUPRA_BASE_PATH', __DIR__);
	$ajax = new Request();
	if (preg_match('/[a-z]+/i', $_GET['mode'])) {
		$function = $_GET['mode'];
		if (method_exists($ajax, ucfirst($function))) {
			$ajax->{ucfirst($function)}();
		}
	}