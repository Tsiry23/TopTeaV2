<?php
    include('../inc/fonction.php');
    $idParcel=$_GET['idParcelle'];
    $qty=$_GET['quantite'];
    $idPicker=$_GET['idPicker'];
    $theDate=$_GET['date'];


    AjoutPicking($idParcel,$qty,$idPicker,$theDate);
    
    header('Location:../pages/cueillette.php'); 

?>