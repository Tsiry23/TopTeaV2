<?php
    include('../inc/fonction.php');
    $delete=$_GET['mod'];
    $id=$_GET['id'];
    
    if(isset($delete)) {
        suppCategSpent($id);
    }
    else {
        $name=$_GET["name"];
        AjoutCategSpent($name);
    }

    header('Location:../pages/BackOffice/GSDepense.php');                         
?>