<?php

ini_set('display_errors',1);
ini_set('display_status_errors',1);
error_reporting(E_ALL);

require_once ("db.php");

class Config{
    private $id;
    private $name;

    protected $dbCnx;
    

    public function __construct($id=0, $name=""){
            $this->id = $id;
            $this->name = $name;
            $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

        }

        public function setId($id){
            $this->id=$id;
        }
        public function gettId($id){
            return $this->id;

        }

        public function setName($name){
            $this->name=$name;
        }
        public function getName($name){
            return $this->name;

        }


        public function insertData(){
            try {
                $stmt = $this->dbCnx->prepare("INSERT INTO userName (name) VALUES(?)");
                $stmt->execute([$this->name]);
            } catch (Exception $e) {
                return $e->getMessage();
        }
}
}