<?php
    include("../inc/fonction.php");

    if ($_GET["mod"]=="c")
    {
        AjoutParcel($_GET["size"],$_GET["teaCategory"],$_GET["date"]);
    }
    header("Location:../pages/accueil.php")
?>