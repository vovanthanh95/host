<?php

class DB
{
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "qti";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        if ($this->conn==null) {
            echo "kết nối lỗi";
        }
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }
}
?>
