<?php  

	//include('connexion.php');
	include('connectionForDeploiement.php');
	
	function login ($email, $pwd) //retourne un array vide si inexistant
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
	function getAllPickingBetween ($dateDebut, $dateFin) {
		$sql= "select * from picking where theDate between :debut and :fin";
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->bindValue(':debut',$dateDebut);
		$req->bindValue(':fin',$dateFin);
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
		$sql= "select * from categSpent where id='%d'";
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

	function getAllSpent(){
		$sql= "select * from spent";
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
	function AjoutPicker($name,$genre,$dtn){
		$sql= "insert into picker values(default,'%s','%s','%s')";
		$sql= sprintf($sql,$name,$genre,$dtn);
		$connexion= dbconnect();
		$req = $connexion->prepare($sql);
		$req->execute();
	}
	function AjoutPicking($idParcel,$qty,$idPicker,$theDate){
		$sql= "insert into picking values(default,%d,%d,%d,'%s')";
		$sql= sprintf($sql,$idParcel,$qty,$idPicker,$theDate);
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
	
	function getSalaryByDate ($dateGiven) {
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

	// Fonction pour calculer la quantité (qty) depuis la table picking où la date est comprise entre deux dates données
	function calculateQtyBy2Date($startDate, $endDate) {
		// Connexion à la base de données
		$connexion = dbconnect();

		// Requête SQL pour calculer la somme de la quantité (qty) entre deux dates données
		$sql = "SELECT SUM(qty) AS totalQty FROM picking WHERE theDate BETWEEN :startDate AND :endDate";

		// Préparation de la requête
		$stmt = $connexion->prepare($sql);

		// Liaison des paramètres
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':endDate', $endDate);

		// Exécution de la requête
		$stmt->execute();

		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// Retourne le total de la quantité (qty)
		return $result['totalQty'];
	}

	// Fonction pour calculer la quantité (qty) depuis la table picking où la date est comprise entre deux dates données avec idParcel
	function calculateQtyBy2DateAndIdParcel ($idParcel ,$startDate, $endDate) {
		// Connexion à la base de données
		$connexion = dbconnect();

		// Requête SQL pour calculer la somme de la quantité (qty) entre deux dates données
		$sql = "SELECT SUM(qty) AS totalQty FROM picking WHERE idParcel=:idParcel AND theDate BETWEEN :startDate AND :endDate";

		// Préparation de la requête
		$stmt = $connexion->prepare($sql);

		// Liaison des paramètres
		$stmt->bindParam(':idParcel', $idParcel);
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':endDate', $endDate);

		// Exécution de la requête
		$stmt->execute();

		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// Retourne le total de la quantité (qty)
		return $result['totalQty'];
	}

	function calculateQtyGroupByIdParcel() {
		// Connexion à la base de données
		$connexion = dbconnect();

		// Requête SQL pour calculer la somme de la quantité (qty) entre deux dates données
		$sql = "SELECT SUM(qty) AS totalQty FROM picking group by idParcel ";

		// Préparation de la requête
		$stmt = $connexion->prepare($sql);

		// Exécution de la requête
		$stmt->execute();

		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// Retourne le total de la quantité (qty)
		return $result['totalQty'];
	}

	function calculateQtyByIdParcel($id) {
		// Connexion à la base de données
		$connexion = dbconnect();

		// Requête SQL pour calculer la somme de la quantité (qty) entre deux dates données
		$sql = "SELECT SUM(qty) AS totalQty FROM picking idParcel =".$id;

		// Préparation de la requête
		$stmt = $connexion->prepare($sql);

		// Exécution de la requête
		$stmt->execute();

		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// Retourne le total de la quantité (qty)
		return $result['totalQty'];
	}

	
	// Fonction pour calculer la somme de tous les montants dépensés (spent)
	function calculateTotalSpent() {
		// Connexion à la base de données
		$connexion = dbconnect();
	
		// Requête SQL pour calculer la somme de tous les montants dépensés (spent)
		$sql = "SELECT SUM(spent) AS totalSpent FROM spent";
	
		// Préparation de la requête
		$stmt = $connexion->prepare($sql);
	
		// Exécution de la requête
		$stmt->execute();
	
		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
		// Retourne le total des montants dépensés (spent)
		return $result['totalSpent'];
	}	

	function getPlantedQuantity ($idParcel)
	{
		$parcel=getParcelById($idParcel)[0];
		$teaCategory=getTeaCategoryById($parcel["idTeaCategory"])[0];

		$nbPieds=(int)($parcel["size"]/$teaCategory["space"]);

		return $nbPieds;
	}
	function getDiffInMonth ($debut,$fin)
	{
		$dateDebut=new DateTime($debut);
		$dateFin=new DateTime($fin);

		$interval = $dateDebut->diff($dateFin);
		$nombreDeJours = $interval->days;

		$nbMonth=(int)($nombreDeJours/30);

		return $nbMonth;
	}

	function getProductedQuantity ($idParcel,$debut,$fin)
	{
		$parcel=getParcelById($idParcel)[0];
		$teaCategory=getTeaCategoryById($parcel["idTeaCategory"])[0];

		$debutExploitation=new DateTime($parcel["startDate"]);
		$debutStats=new DateTime($debut);
		$finStats=new DateTime($fin);

		$productedQuantity=0;

		if ($debutStats<$debutExploitation)
		{
			return 0;
		}
		else 
		{
			// Calcul de la différence en mois avec précision sur les jours
			//Le récent indrindra no entre parenthèse
			$interval = $debutStats->diff($finStats);
			
			// Calcul du total des mois en prenant en compte les jours
			$totalMonths = ($interval->y * 12) + $interval->m;
			$productedQuantity=$teaCategory["output"]*$totalMonths*getPlantedQuantity($idParcel);
		}

		return $productedQuantity;
	}
	function getTotalProd ($debut,$fin)
	{
		$listParcel=getAllParcel();

		$total=0;

		for ($i=0; $i!=count($listParcel); $i++)
		{
			$total+=getProductedQuantity($listParcel[$i]["id"],$debut,$fin);
		}

		return $total;
	}
	//Donne le mallus à retirer d'une cueuillette
	function getMallus ($idPicking)
	{
		$picking=getPickingById($idPicking)[0];
		$salary=getSalary()[0];

		$salaryAmount=$picking["qty"]*$salary["salary"];

		$mallus=0;
		
		if ($picking["qty"]<$salary["quotaMin"])
		{
			$mallus=$salaryAmount*$salary["mallus"];
		}
		
		return $mallus;
	}
	function getBonus ($idPicking)
	{
		$picking=getPickingById($idPicking)[0];
		$salary=getSalary()[0];

		$salaryAmount=$picking["qty"]*$salary["salary"];

		$bonus=0;
		
		if ($picking["qty"]>$salary["quotaMin"])
		{
			$bonus=$salaryAmount*$salary["bonus"];
		}
		
		return $bonus;
	}
	function getSalaryAmount ($idPicking)
	{
		$picking=getPickingById($idPicking)[0];
		$salary=getSalary()[0];

		$salaryAmount=$picking["qty"]*$salary["salary"];

		$salaryAmount-=getMallus($idPicking);
		$salaryAmount+=getBonus($idPicking);

		return $salaryAmount;
	}
	function getTotalSalaire ($debut,$fin)
	{
		$allPicking=getAllPickingBetween($debut,$fin);
		$total=0;

		for ($i=0; $i!=count($allPicking); $i++)
		{
			$total+=getSalaryAmount($allPicking[$i]["id"]);
		}

		return $total;
	}
	function getQttRestant ($idParcel,$pickingDate)
	{
		$parcel=getParcelById($idParcel)[0];
		$debutExploitation=$parcel["startDate"];
		
		$quantiteRestant=getProductedQuantity($idParcel,$debutExploitation,$pickingDate)-calculateQtyBy2DateAndIdParcel($idParcel,$debutExploitation,$pickingDate);
		return $quantiteRestant;
	}
	// Fonction pour calculer la somme de tous les montants dépensés (spent)
	function calculateTotalSpentBetween ($debut,$fin) {
		// Connexion à la base de données
		$connexion = dbconnect();
	
		// Requête SQL pour calculer la somme de tous les montants dépensés (spent)
		$sql = "SELECT SUM(spent) AS totalSpent FROM spent WHERE theDate BETWEEN :debut AND :fin";
	
		// Préparation de la requête
		$stmt = $connexion->prepare($sql);
	
		$stmt->bindParam(':debut', $debut);
		$stmt->bindParam(':fin', $fin);

		// Exécution de la requête
		$stmt->execute();
	
		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
		// Retourne le total des montants dépensés (spent)
		return $result['totalSpent'];
	}	
	function calculateTotalSellBetween ($debut,$fin) {
		// Connexion à la base de données
		$connexion = dbconnect();
	
		// Requête SQL pour calculer la somme de tous les montants dépensés (spent)
		$sql = "SELECT SUM(prixVente*qtt) AS totalSell FROM vente WHERE theDate BETWEEN :debut AND :fin";
	
		// Préparation de la requête
		$stmt = $connexion->prepare($sql);
	
		$stmt->bindParam(':debut', $debut);
		$stmt->bindParam(':fin', $fin);

		// Exécution de la requête
		$stmt->execute();
	
		// Récupération du résultat
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
		// Retourne le total des montants dépensés (spent)
		return $result['totalSell'];
	}	
	function getTotalDepense ($dateDebut,$dateFin)
	{
		$total=getTotalSalaire($dateDebut,$dateFin)+calculateTotalSpentBetween($dateDebut,$dateFin);

		return $total;
	}
	function getCoutRevientParKilo ($dateDebut,$dateFin)
	{
		if (getTotalProd($dateDebut,$dateFin)==0) {
			return 0;
		}
		else {
			$coutRevient=getTotalDepense($dateDebut,$dateFin)/getTotalProd($dateDebut,$dateFin);
		}

		return $coutRevient;
	}
	function updateAllSalary ($newSalary,$newQuota,$bonus,$mallus)
	{
		$connection=dbconnect();
		$sql="update salary set salary=:newValue,quotaMin=:newQuota,bonus=:bonus,mallus=:mallus";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':newValue', $newSalary);
		$stmt->bindParam(':newQuota', $newQuota);
		$stmt->bindParam(':bonus', $bonus);
		$stmt->bindParam(':mallus', $mallus);
		$stmt->execute();
	}
	function updateSalary ($newSalary)
	{
		$connection=dbconnect();
		$sql="update salary set salary=:newValue";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':newValue', $newSalary);
		$stmt->execute();
	}
	function updateQuotaMin ($newQuota)
	{
		$connection=dbconnect();
		$sql="update salary set quotaMin=:newQuota";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':newQuota', $newQuota);
		$stmt->execute();
	}
	function updateBonus ($bonus)
	{
		$connection=dbconnect();
		$sql="update salary set bonus=:bonus";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':bonus', $bonus);
		$stmt->execute();
	}
	function updateMallus ($mallus)
	{
		$connection=dbconnect();
		$sql="update salary set mallus=:mallus";
		$stmt = $connection->prepare($sql);
		$stmt->bindParam(':mallus', $mallus);
		$stmt->execute();
	}
?>
