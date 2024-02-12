<?php
function dbconnect(){
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=TopTea','root','');
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
    return $connexion;
}
?>