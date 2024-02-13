<?php 
  include("../../inc/fonction.php");
  $dateDebut=$_GET['dateDebut'];
  $dateFin=$_GET['dateFin'];
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
    <style type="text/css">
        body{
            /*background: url("img/pdc.jpg");*/
            background-size: cover;   
            /*background: grey;*/
        }
        .parcel{
            background: rgba(240,240,240,0.7); 
            border: none; 
        }
        .facture{
            background: #2F2F2F12;
            height: 100vh;
            overflow: auto;
            box-shadow: 0px 0px 30px 0px grey;
        }
        .logo{
            font-size: 40px;
        }

        .boite{
            display: flex;
            flex-direction: row;
            padding: 5px;
            column-gap: 1em;
            height: 60vh;
            overflow: hidden;
            overflow-y: auto;
        }
        /* Ajout de style pour diviser les mois en deux colonnes */
        .top-months, .bottom-months {
            display: flex;
            flex-wrap: wrap;
        }
        .panel {
            flex-basis: calc(50% - 10px); /* Moitié de la largeur - espace entre les éléments */
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1 facture"><br>
      <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a class="btn btn-default" id="mn" href="accueil.php"><i class="fa fa-home"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="cueillette.php"><i class="fa fa-database"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="listePaiements1.php"><i class="fa fa-list-alt"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="result1.php"><i class="fa fa-database"></i></a></li>
      </ul>
      <a class="btn btn-default" href="../../controllers/deconnection.php" style="zindex:1;bottom:20px;position: fixed;"><i class="fa fa-door-open"></i></a>
      </div>
      <div class="col-md-8">
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
        <!-- Formulaire -->
        <div class="row-fluid">
            <p><?php echo 'Date debut :'.$dateDebut ;?></p>
            <p><?php echo 'Date fin :'.$dateFin ;?></p>
            <table class="table">
              <br>
              <?php 
                $AllPickingBetween=getAllPickingBetween($dateDebut,$dateFin);
              ?>
                <tr>
                    <td >Date</td>
                    <td >NomCueilleur</td>
                    <td>Poids</td>
                    <td>Montant total</td>
                    <td>Bonus</td>
                    <td>Malus</td>
                </tr>
                <?php for ($i=0; $i < count($AllPickingBetween); $i++) { ?>
                    <tr>
                        <td ><?php echo $AllPickingBetween[$i]['theDate']; ?></td>
                        <td ><?php echo getPickerById($AllPickingBetween[$i]['idPicker'])[0]['name']?></td>
                        <td ><?php echo $AllPickingBetween[$i]['qty']; ?></td>
                        <td ><?php echo getSalaryAmount(getPickerById($AllPickingBetween[$i]['idPicker'])[0]['id']); ?></td>
                        <td ><?php echo getBonus(getPickerById($AllPickingBetween[$i]['idPicker'])[0]['id']); ?></td>
                        <td ><?php echo getMallus(getPickerById($AllPickingBetween[$i]['idPicker'])[0]['id']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
    </div>
  </div>
</body>
</html>