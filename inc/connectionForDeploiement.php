<?php
function dbconnect(){
    try {
        $connexion = new PDO('mysql:host=172.20.0.167;dbname=db_p16_ETU002519','ETU002519','kMN3AgRkIL7d');
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
    return $connexion;
}
?>