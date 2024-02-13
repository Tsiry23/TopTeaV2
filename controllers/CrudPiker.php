<?php
    include("../inc/fonction.php");

    if ($_GET["mod"]=="c")
    {
        AjoutPicker($_GET["name"],$_GET["genre"],$_GET["dtn"]);
        
    }
    else if ($_GET["mod"]=="d")
    {
        suppPicker($_GET["id"]);
    }
    header('location:../pages/BackOffice/listePiker.php');
?>