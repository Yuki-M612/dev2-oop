<?php
class Database {
    private $host = "localhost";      // ホスト名（MAMPのときは localhost）
    private $db_name = "sales_oop";   // データベース名
    private $username = "root";       // ユーザー名（MAMPは usually "root"）
    private $password = "root";       // パスワード（MAMPの初期設定では "root"）

    public function connect() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8", 
                            $this->username, 
                            $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>