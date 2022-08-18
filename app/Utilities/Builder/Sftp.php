<?php
namespace App\Utilities\Builder;
/*
 * @autor: MultiFour
 * @version: 1.0.0
 *
 * Class ftpUploading
 */

 class Sftp {
    private $conn_id = null;

    private $ftp_server = "";
    private $ftp_user_name = "";
    private $ftp_user_pass = '';
    private $ftp_logon_type = '';
    private $ftp_keypub = '';
    private $ftp_keypriv = '';

    public function __construct($access) {
        $this->ftp_server = $access['ftp_server'];
        $this->ftp_user_name = $access['ftp_user_name'];
        $this->ftp_user_pass = $access['ftp_user_pass'];
        $this->ftp_logon_type = $access['ftp_logon_type'];
        $this->ftp_keypub = $access['ftp_keypub'];
        $this->ftp_keypriv = $access['ftp_keypriv'];

        $this->connect();
    }

    public function mkDir($destPath) {
        if (!ftp_nlist($this->conn_id, $destPath))
            ftp_mkdir($this->conn_id, $destPath);
    }

    private function connect() {
        if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");

        if(!($this->conn_id = ssh2_connect($this->ftp_server, 22))){
            echo "fail: unable to establish connection\n";
        } else if ($this->ftp_logon_type === 'pass') {

            // try to authenticate with username root, password secretpassword
            if(!ssh2_auth_password($this->conn_id, $this->ftp_user_name, $this->ftp_user_pass)) {
                echo "fail: unable to authenticate\n";
            } else {
                // allright, we're in!
                echo "okay: logged in...\n";

                // execute a command
                if (!($stream = ssh2_exec($this->conn_id, "ls -al" ))) {
                    echo "fail: unable to execute command\n";
                } else {
                    // collect returning data from command
                    stream_set_blocking($stream, true);
                    $data = "";
                    while ($buf = fread($stream,4096)) {
                        $data .= $buf;
                    }
                    fclose($stream);
                }
            }
        } else if ($this->ftp_logon_type === 'key') {
            if(!ssh2_auth_pubkey_file(
                $this->conn_id
                , $this->ftp_user_name
                , $this->ftp_keypub
                , $this->ftp_keypriv
            )) {
                echo "fail: unable to authenticate\n";
            } else {
                // allright, we're in!
                echo "okay: logged in...\n";

                // execute a command
                if (!($stream = ssh2_exec($this->conn_id, "ls -al" ))) {
                    echo "fail: unable to execute command\n";
                } else {
                    // collect returning data from command
                    stream_set_blocking($stream, true);
                    $data = "";
                    while ($buf = fread($stream,4096)) {
                        $data .= $buf;
                    }
                    fclose($stream);
                }
            }
        }

        if ((!$this->conn_id) || (!$stream))
            return false;

        return true;
    }

    public function upload($file, $destPath, $destName) {
        if ( is_array(ftp_nlist($this->conn_id, ".")) ) {
            $this->connect();
        }
        $this->mkDir($destPath);
        $upload = ftp_put($this->conn_id, $destPath . $destName, $file, FTP_BINARY);  // upload the file
        if (!$upload)
            return false;

        return true;
    }

    public function close() {
        ftp_close($this->conn_id);
    }
 }
