<?php
namespace App\Utilities\Builder;
/*
 * @autor: MultiFour
 * @version: 1.0.0
 *
 * Class ftpUploading
 */

class Ftpuploading {
    private $ftp = null;

    private $path = '';
    private $destPath = '';

    private $ftp_server = "";
    private $ftp_user_name = "";
    private $ftp_user_pass = '';

    public function __construct($pathToSite, $access) {
        $this->path = $pathToSite;
        $this->destPath = $access['dir'];
        $this->ftp_server = $access['host'];
        $this->ftp_user_name = $access['user'];
        $this->ftp_user_pass = $access['pass'];

        switch ($access['type']) {
            case 'ftp':
                $this->ftp = new \App\Utilities\Builder\Ftp([
                    'ftp_server' => $this->ftp_server,
                    'ftp_user_name' => $this->ftp_user_name,
                    'ftp_user_pass' => $this->ftp_user_pass
                ]);
                break;
            case 'ftps':
                $this->ftp = new \App\Utilities\Builder\Ftps([
                    'ftp_server' => $this->ftp_server,
                    'ftp_mode' => $access['mode'],
                    'ftp_user_name' => $this->ftp_user_name,
                    'ftp_user_pass' => $this->ftp_user_pass
                ]);
                break;
            case 'sftp':
                $this->ftp = new \App\Utilities\Builder\Sftp([
                    'ftp_server' => 'ec2-54-71-93-27.us-west-2.compute.amazonaws.com',
                    'ftp_user_name' => 'ec2-user',
                    'ftp_user_pass' => '',
                    'ftp_logon_type' => 'key',
                    'ftp_keypub' => '',
                    'ftp_keypriv' => ''
                ]);
                break;
        }
    }

    public function doIt() {
        $this->readSiteFilesAndUploadThem();
        $this->ftp->close();
    }

    private function readSiteFilesAndUploadThem() {
        $this->ftp->mkDir($this->destPath);
        $site = scandir($this->path);
        if (count($site) > 2) {
            for ( $i = 2; $i < count( $site ); $i ++ ) {
                if ( is_file( $this->path . '/' . $site[ $i ] )) {
                    $this->ftp->upload($this->path . '/' . $site[ $i ]
                        , $this->destPath . '/', $site[ $i ]);
                } else if ( is_dir( $this->path . '/' . $site[ $i ] ) ) {
                    $this->recursiveDirectoryIterrator($this->path . '/' . $site[ $i ]
                        , $site[ $i ]);
                }
            }
        }
    }

    private function recursiveDirectoryIterrator($path, $relativePath) {
        $innerSource = scandir($path);
        for ( $i = 2; $i < count( $innerSource ); $i ++ ) {
            $innerPath = $path . '/' . $innerSource[ $i ];
            if ( is_file( $innerPath )) {
                $this->ftp->upload($innerPath
                    , $this->destPath . '/' . $relativePath . '/'
                    , $innerSource[ $i ]
                );
            } else if ( is_dir( $innerPath ) ) {
                $this->ftp->mkDir($this->destPath . '/' . $relativePath);
                $this->recursiveDirectoryIterrator($innerPath
                    , $relativePath . '/' . $innerSource[ $i ]
                );
            }
        }
    }
}
