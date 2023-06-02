<?php
class userNameController{
    private $model;
    public function __construct(){
        require_once("../model/userNameModel.php");
        $this->model = new userNameModel();
    }
    public function save($name){
        $id = $this->model->insert($name);
        return ($id!=false) ? header("location:show.php?id=".$id) : header("location:create.php");
    }
}


?>