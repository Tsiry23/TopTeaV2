<?php  
	
	include('connexion.php');
	
	function login ($email, $pwd) //retourne null si l'user n'existe pas
	{
		$sql="select * from user where email=? and pswd=sha1(?)";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute(array($email,$pwd));
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
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
	function getTeaCategoryById($id) {
		$sql= "select * from teaCategory where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}
	function getAllTeaCategory(){
		$sql= "select * from teaCategory";
		$connexion= dbconnect();
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
	
	function getAllSpent(){
		$sql= "select * from spent";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}

	function getSpentById($idSpent){
		$sql= "select * from spent where id='%d'";
		$sql= sprintf($sql,$idSpent);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
		$retour = $req->fetchAll(PDO::FETCH_ASSOC);
		return $retour;
	}

	function AjoutUser($email,$pswd,$status){
		$sql= "insert into user values(default,'%s',sha1('%s'),'%d')";
		$sql= sprintf($sql,$email,$pswd,$status);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}

	function AjoutTeaCategory($name,$output){
		$sql= "insert into teaCategory values(default,'%s','%d')";
		$sql= sprintf($sql,$name,$output);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutParcel($size,$idTeaCategory,$startDate){
		$sql= "insert into parcel values(default,'%d','%d','%s')";
		$sql= sprintf($sql,$size,$idTeaCategory,$startDate);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutPicker($name){
		$sql= "insert into picker values(default,'%s')";
		$sql= sprintf($sql,$name);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutPicking($idParcel,$qty,$theDate){
		$sql= "insert into picking values(default,'%d','%s','%s')";
		$sql= sprintf($sql,$idParcel,$qty,$theDate);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutCategSpent($name){
		$sql= "insert into categSpent values(default,'%s')";
		$sql= sprintf($sql,$name);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutSpent($idcategSpent,$spent,$theDate){
		$sql= "insert into spent values(default,'%d','%d','%s')";
		$sql= sprintf($sql,$idcategSpent,$spent,$theDate);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}

	function suppUser($id){
		$sql= "delete from user where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppTeaCategory($id){
		$sql= "delete from teaCategory where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppParcel($id){
		$sql= "delete from parcel where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppPicker($id){
		$sql= "delete from picker where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppPicking($id){
		$sql= "delete from picking where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppCategSpent($id){
		$sql= "delete from categSpent where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function suppSpent($id){
		$sql= "delete from Spent where id='%d'";
		$sql= sprintf($sql,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}

	function UpdateUser($id,$email,$pswd,$status){
		$sql= "update  user set email='%s',pswd=sha1('%s'),status='%d' where id='%d'";
		$sql= sprintf($sql,$email,$pswd,$status,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdateTeaCategory($id,$name,$output){
		$sql= "update  teaCategory set name='%s',output='%d' where id='%d'";
		$sql= sprintf($sql,$name,$output,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdateParcel($id,$size,$idTeaCategory){
		$sql= "update  parcel set size='%d',idTeaCategory='%d' where id='%d'";
		$sql= sprintf($sql,$size,$idTeaCategory,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdatePicker($id,$name){
		$sql= "update  picker set name='%d' where id='%d'";
		$sql= sprintf($sql,$name,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdatePicking($id,$idParcel,$qty,$theDate){
		$sql= "update  picking set idParcel='%d',qty='%d',theDate='%s' where id='%d'";
		$sql= sprintf($sql,$idParcel,$qty,$theDate,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdateCategSpent($id,$name){
		$sql= "update  categSpent set name='%s' where id='%d'";
		$sql= sprintf($sql,$name,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function UpdateSpent($id,$name,$idcategSpent,$spent,$theDate){
		$sql= "update  spent set idcategSpent='%d',spent='%d',theDate='%s' where id='%d'";
		$sql= sprintf($sql,$name,$idcategSpent,$spent,$theDate,$id);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	
	function getSalaryByDate($dateGiven) {
		// Connexion à la base de données
		$connexion = dbconnect();

		// Requête SQL pour sélectionner les données
		$sql = "SELECT * FROM salary WHERE salaryDate < :dateGiven ORDER BY salaryDate DESC LIMIT 1";

		// Préparation de la requête
		$stmt = $connexion->prepare($sql);

		// Liaison des paramètres
		$stmt->bindParam(':dateGiven', $dateGiven);

		// Exécution de la requête
		$stmt->execute();

		// Récupération des résultats
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// Retourne le résultat
		return $result;
	}
?>
