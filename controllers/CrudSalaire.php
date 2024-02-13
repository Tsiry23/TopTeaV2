<?php
    include('../inc/fonction.php');
    $salaire=$_GET['salaire'];
    $quota=$_GET['quota'];
    $mallus=$_GET['mallus'];
    $bonus=$_GET['bonus'];

    updateAllSalary($salaire,$quota,$bonus,$mallus);
    header('Location:../pages/BackOffice/GSSalary.php'); 
?>