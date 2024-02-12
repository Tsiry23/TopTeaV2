<?php
    include("../inc/fonction.php");

    if ($_GET["mod"]=="c")
    {
        AjoutPicker($_GET["name"]);
    }
    else if ($_GET["mod"]=="d")
    {
        suppPicker($_GET["id"]);
    }
    header('location:../pages/listePiker.php');
?>