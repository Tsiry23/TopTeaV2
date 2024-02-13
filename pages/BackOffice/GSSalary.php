<?php
    session_start();
    if(!isset($_SESSION['user'])){
      header('location:index.php');
    }
    include("../../inc/fonction.php");
    $user= $_SESSION['user'];

    $listCatTea=getAllTeaCategory();
    $listParcel=getAllParcel();
?>
<!DOCTYPE html>
<html>
<head>
	<title>IkAly</title>
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<link href="../../assets/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="icon" href="img/logo.png">

  <link href="../../assets/" rel="stylesheet">
  <link href="../../assets//fa/css/all.css" rel="stylesheet">
</head>
<style type="text/css">
  body{
    /*background: url("img/pdc.jpg");*/
    background-size: cover;   
    /*background: grey;*/
  }
  .parcel{
    width:250px;
  }
  .facture{
    background: #2F2F2F12;
    height: 100vh;
    box-shadow: 0px 0px 20px 0px grey;
  }
  .logo{
    font-size: 40px;
  }

  .boite{
    display: flex;
    flex-direction: row;
    padding: 5px;
    column-gap: 1em;
    height: 60vh;overflow: hidden;
    overflow-y: auto;
  }
</style>
<body>
  <div class="container-fluid">
  	<div class="row">
      <div class="col-md-2 facture"><br>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a class="btn btn-default" id="mn" href="accueil.php"><i class="fa fa-home"></i> Parcelle</a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="listePiker.php"><i class="fa fa-list-alt"></i> Cueilleur</a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="GSDepense.php"><i class="fa fa-database"></i> Depense</a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="saison.php"><i class="fa fa-database"></i> Saison</a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="GSSalary.php"><i class="fa fa-database"></i> salaire</a></li>
      </ul>
      <a class="btn btn-default" href="../../controllers/deconnection.php" style="zindex:1;bottom:20px;position: fixed;"><i class="fa fa-door-open"></i></a>
      </div>
      <div class="col-md-10">
        <nav class="navbar navbar">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a style="color: grey;" class="navbar-brand logo" href="#">TopTea</a>
            </div>
          </div>
        </nav><br>
        <div class="row-fluid">
            <form action="../../controllers/CrudParcelle.php" method="get"">
                <div class="form-group">
                    <label for="">salaire :</label>
                    <input class="form-control" type="text" name="salaire">
                </div>

                <div class="form-group">
                    <label for="">quota :</label>
                    <input class="form-control" type="text" name="quota">
                </div>

                <div class="form-group">
                    <label for="">mallus :</label>
                    <input class="form-control" type="text" name="mallus">
                </div>

                <div class="form-group">
                    <label for="">bonus :</label>
                    <input class="form-control" type="text" name="bonus">
                </div>
                <button class="btn btn-success" type="submit">Valider</button>
            </form>
        </div>
      </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
  	</div>
  </div>
</body>
</html>