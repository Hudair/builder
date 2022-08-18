<?php
/**
 * Created by PhpStorm.
 * User: thinkanddo
 * Date: 04.07.18
 * Time: 11:57
 */
class Ftp {
    private $conn_id = null;

    private $ftp_server = "";
    private $ftp_user_name = "";
    private $ftp_user_pass = '';

    public function __construct($access) {
        $this->ftp_server = $access['ftp_server'];
        $this->ftp_user_name = $access['ftp_user_name'];
        $this->ftp_user_pass = $access['ftp_user_pass'];

        $this->connect();
    }

    public function mkDir($destPath) {
        if (!ftp_nlist($this->conn_id, $destPath))
            ftp_mkdir($this->conn_id, $destPath);
    }

    private function connect() {
        $this->conn_id = ftp_connect($this->ftp_server);
        if (!$this->conn_id)
            throw new Exception("<span style='color:#FF0000'>Couldn't connect to $this->ftp_server</span>");
        $login_result = ftp_login($this->conn_id, $this->ftp_user_name, $this->ftp_user_pass);
        if (!$login_result)
            throw new Exception("<span style='color:#FF0000'>You do not have access to this ftp server!</span>");

        if ((!$this->conn_id) || (!$login_result))
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