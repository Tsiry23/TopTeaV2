<?php
    include("../inc/fonction.php");

    $mail=$_POST["mail"];
    $pwd=$_POST["pwd"];

    $user=login($mail,$pwd)[0];

    var_dump($user);

    echo count($user);

    if (count($user)!=0)
    {
        session_start();
        $_SESSION['user']= $user;
        header("Location:../pages/BackOffice/accueil.php");
    }
    else {
        header("Location:../pages/BackOffice/index.php?error=Login ou mot de passe");
    }
?>