<?php
    include("../inc/fonction.php");

    $mail=$_POST["mail"];
    $pwd=$_POST["pwd"];

    $user=login($mail,$pwd);

    echo count($user);

    if (count($user)!=0)
    {
        header("Location:accueil.php");
    }
    else {
        header("Location:../pages/index.php?error=Login ou mot de passe");
    }
?>