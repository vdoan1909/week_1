<?php
require_once './abstracts/DatabaseConnection.php';

class MySQLConnection extends DatabaseConnection
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "okoko";
            // return $this->pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    // public function __destruct()
    // {
    //     self::disconnect();
    // }

    public function disconnect()
    {
        $this->pdo = null;
        echo 'huy ket noi csdl';
    }
}