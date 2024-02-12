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
	
	function getUser($iduser){
		$sql= "select * from user where id='%d'";
		$sql= sprintf($sql,$iduser);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getTeaCategoryById($id){
		$sql= "select * from teaCategory where id='%d'";
		$sql= sprintf($sql,$id);
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getAllTeaCategory($id){
		$sql= "select * from teaCategory";
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getAllParcel(){
		$sql= "select * from parcel";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getParcelById($id){
		$sql= "select * from parcel where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getAllPicker(){
		$sql= "select * from picker";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getPickerById($id){
		$sql= "select * from picker where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getAllPicking(){
		$sql= "select * from picking";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getPickingById($id){
		$sql= "select * from picking where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getSalary(){
		$sql= "select * from salary";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getCategSpent(){
		$sql= "select * from categSpent";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getCategSpentById($id){
		$sql= "select * from categSpent where name='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	
	
	function getSpent($idSpent){
		$sql= "select * from spent where id='%d'";
		$sql= sprintf($sql,$idSpent);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}

	function AjoutUser($email,$pswd,$status){
		$sql= "insert into vente values('%s',sha1('%s'),'%d')";
		$sql= sprintf($email,$pswd,$status);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}

	function AjoutTeaCategory($name,$output){
		$sql= "insert into teaCategory values('%s','%d')";
		$sql= sprintf($name,$output);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutParcel($size,$idTeaCategory){
		$sql= "insert into parcel values('%d','%d')";
		$sql= sprintf($size,$idTeaCategory);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutPicker($name){
		$sql= "insert into picker values('%s')";
		$sql= sprintf($name);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutCategSpent($name){
		$sql= "insert into categSpent values('%s')";
		$sql= sprintf($name);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutSpent($name,$idcategSpent,$spent,$theDate){
		$sql= "insert into categSpent values('%s','%d','%d','%s')";
		$sql= sprintf($name,$idcategSpent,$spent,$theDate);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}

	// function supp($id){
	// 	$sql= "delete from vente where idVente='%d'";
	// 	$sql= sprintf($sql,$id);
	// 	$connexion= dbconnect();
	// 	$req = $connexion->prepare($sql);
	// 	$req->execute();
	// }
	// function getVenteAt($id){
	// 	$sql= "select * from vente w
	// 	here idVente='%d'";
	// 	$sql= sprintf($sql,$id,$date,$produit,$quantite,$prixU,$total);
	// 	$connexion= dbconnect();
	// 	$req = $connexion->prepare($sql);
	// 	$req->execute();
	// }
	// function update($id,$date,$produit,$quantite,$prixU,$total){
	// 	$sql= "update from vente set date_vente='%s',nomProd='%s',quantite='%d',prixU='%d',total='%d'  where idVente='%d'";
	// 	$sql= sprintf($sql,$id,$date,$produit,$quantite,$prixU,$total);
	// 	$connexion= dbconnect();
	// 	$req = $connexion->prepare($sql);
	// 	$req->execute();
	// }
?>