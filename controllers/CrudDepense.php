<?php
    include('../inc/fonction.php');
    $delete=$_GET['mode'];
    $id=$_GET['id'];

    
    
    if(isset($delete)) {
        suppSpent($id);
    }
    else {
        $spent=$_GET['spent'];
        $theDate=$_GET['theDate'];
        $categories=$_GET['categories'];
        AjoutSpent($categories,$spent,$theDate);
    }

    header('Location:../pages/GSDepense.php');
?>