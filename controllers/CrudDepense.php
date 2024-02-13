<?php
    include('../inc/fonction.php');
    $idcategSpent=$_GET['idParcelle'];
    $spent=$_GET['val'];
    $theDate=$_GET['date'];


    AjoutSpent($idcategSpent,$spent,$theDate);
    header('Location:../pages/depense.php'); 

?>