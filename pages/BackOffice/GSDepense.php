<?php 
  include('../../inc/fonction.php');
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
    background: rgba(240,240,240,0.7); 
    border: none; 
    border-bottom-right-radius: 50px ;
  }
  .facture{
    background: #2F2F2F12;
    height: 100vh;overflow: auto;
    box-shadow: 0px 0px 50px 0px grey;
  }
  .logo{
    font-size: 40px;
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
        <div class="row-fluid boite">
          <h3>Liste catégories dépense</h3>
          <table class="table" style="width: 100%;">
            <tr>
              <th>id</th>
              <th>Nom categorie</th>

              <th><button type="button" class="navbar-right btn btn-info" data-toggle="modal" data-target="#ins">+ Add</button></th>
                <!-- Modal -->
                  <div class="modal fade" id="ins" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        
                      <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h3 class="myModalLabel">Depense</h3>
                      </div>
                      <div class="modal-body text-center">
                        <form action="../../controllers/CrudGSDepense.php" method="get">
                          <div class="form-group">
                            <input class="form-control" placeholder="spent" type="text" name="name">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default">valider</button>
                      </div>
                    </form>
                      </div>
                    </div>
                  </div>
                <!-- Modal -->  
            </tr>
            <?php 
              $AllCatDepense=getCategSpent();
              for ($i=0; $i < count($AllCatDepense); $i++) { ?>
              <tr>
                <td><?php echo $AllCatDepense[$i]["id"]?></td>
                <td><?php echo $AllCatDepense[$i]["name"]?></td>
                <td><a class="btn btn-danger" href="../../controllers/CrudGSDepense.php?mod=d&id=<?php echo $AllCatDepense[$i]['id']?>">Delete</a></td>  
              </tr>
              <?php } ?>
          </table>
        </div>
      </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
  	</div>
  </div>
</body>
</html>