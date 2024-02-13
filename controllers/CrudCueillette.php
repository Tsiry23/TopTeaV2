<?php
    include "../inc/fonction.php";
	header("Content-Type: application/json");

    $idParcel=$_POST['idParcelle'];
    $qty=$_POST['quantite'];
    $idPicker=$_POST['idPicker'];
    $theDate=$_POST['date'];

    $qttRestant=getQttRestant($idParcel,$theDate);

    if ($qty<=$qttRestant)
    {
        AjoutPicking($idParcel,$qty,$idPicker,$theDate);
        echo json_encode("Succes! reste actuel=".($qttRestant-$qty));
    }
    else 
    {
        echo json_encode("Echec! quantite restante=".$qttRestant);
    }
?>