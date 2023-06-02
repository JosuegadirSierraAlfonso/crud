<?php
ini_set('display_errors',1);
ini_set('display_status_errors',1);
error_reporting(E_ALL);



if (isset($_POST['guardar'])) {
    require_once("../../config/config.php");
    $config= new Config();

    $config->setName($_POST['name']);
    $config->insertData();

    echo "<script>alert('los datos se guardaron');document.location='create.php'</script>";



}


