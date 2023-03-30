<?php
 require_once('/var/www/html/MYSITE/app/config/config.php');
    class Database{
    private $_connexion=null;
    private $statement=null;
    
    public function __construct(){
        try{
            $this->_connexion=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
        }
        catch(PDOException $exception){
            echo "Err : ".$exception->getMessage();
        }
    }
    public function prepare($sql){
        $this->statement=$this->_connexion->prepare($sql);
    }
    public function execute(){
        $this->statement->execute();
    }
    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
    public function resultSet(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function rowCount(){
        $this->execute();
        return $this->statement->rowCount();
    }
   
}




?>