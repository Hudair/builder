<?php
	if (SUPRA !== 1) die();

	/*
	 * @autor: MultiFour
	 * @version: 1.0.0
	 *
	 * Class Section
	 */
	class Section {

		public $name = '';
		public $html = '';
		public $style = '';
		public $script = '';
		public $images = array();
		public $preview = '';

		public function __construct($sections_base, $module) {
			$this->name = $module;

			$base_module = $sections_base . "/" . $module;
			$f_name_html = $base_module . "/index.html";
			if (file_exists($f_name_html)) {
				$f_html      = fopen( $f_name_html, 'r' );
				$f_html_size = filesize( $f_name_html );
				if ( $f_html_size > 0 ) {
					$this->html = fread( $f_html, $f_html_size );
				}
			}

			$f_name_style = $base_module . "/style.css";
			if (file_exists($f_name_style)) {
				$f_style      = fopen( $f_name_style, 'r' );
				$f_style_size = filesize( $f_name_style );
				if ( $f_style_size > 0 ) {
					$this->style = fread( $f_style, $f_style_size );
				}
			}

			$f_name_script = $base_module . "/custom.js";
			if (file_exists($f_name_script)) {
				$f_script      = fopen( $f_name_script, 'r' );
				$f_script_size = filesize( $f_name_script );
				if ( $f_script_size > 0 ) {
					$this->script = fread( $f_script, $f_script_size );
				}
			}

			$module_dir = scandir($base_module);
//			$img_key = array_search('images',$module_dir);
//			if ($img_key) {
//				$this->images = scandir($base_module . "/images");
//				unset($this->images[0]);
//				unset($this->images[1]);
//			}
			$preview_key = false;
			foreach ($module_dir as $key => $value) {
				if (preg_match("/^$this->name./i", $value)) {
					$preview_key = $key;
					break;
				}
			}
			if ($preview_key) {
				$this->preview = $base_module . "/" . $module_dir[$preview_key];
			}
		}
	}