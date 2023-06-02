<?php
class userNameModel{
    private $PDO;
    public function __construct()
    {
        require_once("../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function insert($name){
        $stament = $this->PDO->prepare("INSERT INTO userName VALUES(null,:name)");
        $stament->bindParam(":name", $name);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
}

?>