<?php
    include("../inc/fonction.php");

    if ($_GET["mod"]=="c")
    {
        AjoutParcel($_GET["size"],$_GET["teaCategory"],$_GET["date"]);
    }
    else if ($_GET["mod"]=="u")
    {

    }
    else if ($_GET["mod"]=="d")
    {
        
    }
?>