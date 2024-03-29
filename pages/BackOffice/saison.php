<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TopSaison</title>
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
        <form action="traitement.php" method="POST">
          <div class="row-fluid boite">
            <div class="top-months">
              <!-- Affichage des 6 premiers mois en haut -->
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="janvier">
                    <input type="checkbox" id="janvier" name="mois[]" value="janvier">
                    Janvier
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="fevrier">
                    <input type="checkbox" id="fevrier" name="mois[]" value="fevrier">
                    Février
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="mars">
                    <input type="checkbox" id="mars" name="mois[]" value="mars">
                    Mars
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="avril">
                    <input type="checkbox" id="avril" name="mois[]" value="avril">
                    Avril
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="mai">
                    <input type="checkbox" id="mai" name="mois[]" value="mai">
                    Mai
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="juin">
                    <input type="checkbox" id="juin" name="mois[]" value="juin">
                    Juin
                  </label>
                </div>
              </div>
            </div>
            <div class="bottom-months">
              <!-- Affichage des 6 derniers mois en bas -->
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="juillet">
                    <input type="checkbox" id="juillet" name="mois[]" value="juillet">
                    Juillet
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="aout">
                    <input type="checkbox" id="aout" name="mois[]" value="aout">
                    Août
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="septembre">
                    <input type="checkbox" id="septembre" name="mois[]" value="septembre">
                    Septembre
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="octobre">
                    <input type="checkbox" id="octobre" name="mois[]" value="octobre">
                    Octobre
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="novembre">
                    <input type="checkbox" id="novembre" name="mois[]" value="novembre">
                    Novembre
                  </label>
                </div>
              </div>
              <div class="panel panel-default parcel">
                <div class="panel-body">
                  <label for="decembre">
                    <input type="checkbox" id="decembre" name="mois[]" value="decembre">
                    Décembre
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- Bouton Valider -->
          <div class="row">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-success">Valider</button>
            </div>
          </div>
        </form>
      </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
    </div>
  </div>
</body>
</html>
