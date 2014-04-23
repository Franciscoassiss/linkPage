<?php
/**
*This class just make de conection with de database
*/
class Database
{
    private $host;
    private $dbname;
    private $user;
    private $pass;
    public $pdo;

    function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'linkpage';
        $this->user = 'root';
        $this->pass =  'root';
        
        try{
            $this->pdo = new PDO('mysql:host='.$this->host.';'.'dbname='.$this->dbname.';', $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function query($sql = null)
    {
        if (isset($sql)) {
            return $this->pdo->query($sql);
        }
        throw new Exception("Empty sql");
        return false;
    }
}
