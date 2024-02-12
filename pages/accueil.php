<?php
    include("../inc/fonction.php");
    $listCatTea=getAllTeaCategory();
?>
<!DOCTYPE html>
<html>
<head>
	<title>IkAly</title>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="icon" href="img/logo.png">

  <link href="../assets/" rel="stylesheet">
  <link href="../assets//fa/css/all.css" rel="stylesheet">
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
    
  }
  .facture{
    background: #2F2F2F12;
    height: 100vh;overflow: auto;
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
    height: 60vh;overflow: hidden;
    overflow-y: auto;
  }
</style>
<body>
  <div class="container-fluid">
  	<div class="row">
      <div class="col-md-1 facture"><br>
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation"><a class="btn btn-default" id="mn" href="accueil.html"><i class="fa fa-home"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="listePiker.html"><i class="fa fa-list-alt"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="GSDepense.html"><i class="fa fa-database"></i></a></li>
      </ul>
      </div>
      <div class="col-md-8">s 
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
              <button type="button" class="navbar navbar-right btn btn-info" data-toggle="modal" data-target="#ins">+ Add</button>

            <!-- Modal -->
              <div class="modal fade" id="ins" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    
                  <div class="modal-header">  
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h3 class="myModalLabel">Ajout Parcelle</h3>
                  </div>
                  <div class="modal-body">
                  <?php if (!isset($_GET["mod"])) { 
                        $parcel=getParcelById($_GET["id"])[0];
                    ?>
                    <form action="../controllers/CrudParcelle.php" method="get">
                          <input type="hidden" name="mod" value="u">
                          <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                        <div class="form-group">
                          <input class="form-control" placeholder="size" type="text" name="size" value="<?php echo $parcel["size"]; ?>">
                        </div>
                        <span for="">Date :</span>
                    <div class="modal-body text-center">
                        <div class="form-group">
                          <input class="form-control" type="date" placeholder="labelle" name="date" value="<?php echo $parcel["startDate"]; ?>">
                        </div>
                        <span for="">Categorie :</span>
                        <div class="form-group">
                          <select class="form-control" name="teaCategory">
                            <?php for ($i=0; $i!=count($listCatTea); $i++) { ?>
                                <?php if ($listCatTea[$i]["id"]==$parcel["idTeaCategory"]) { ?>
                                    <option value="<?php echo $listCatTea[$i]["id"]; ?>" selected><?php echo $listCatTea[$i]["name"]; ?></option>
                                <?php } else { ?>
                                <option value="<?php echo $listCatTea[$i]["id"]; ?>" selected><?php echo $listCatTea[$i]["name"]; ?></option>
                            <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default">valider</button>
                    </div>
                  </form>
                  <?php } else { ?>
                    <form action="../controllers/CrudParcelle.php" method="get">
                          <input type="hidden" name="mod" value="u">
                        <div class="form-group">
                          <input class="form-control" placeholder="size" type="text" name="size">
                        </div>
                        <span for="">Date :</span>
                    <div class="modal-body text-center">
                        <div class="form-group">
                          <input class="form-control" type="date" placeholder="labelle" name="date">
                        </div>
                        <span for="">Categorie :</span>
                        <div class="form-group">
                          <select class="form-control" name="teaCategory">
                            <?php for ($i=0; $i!=count($listCatTea); $i++) { ?>
                              <option value="<?php echo $listCatTea[$i]["id"]; ?>"><?php echo $listCatTea[$i]["name"]; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default">valider</button>
                    </div>
                  </form>
                <?php } ?>
                  </div>
                </div>
              </div>
            <!-- Modal -->  
            </div>
          </div>
        </nav><br>
        <div class="row-fluid boite">
          <!-- a boucler -->
            <?php for ($i=0; $i!=count($listParcel); $i++) { ?>
            <div class="panel panel-default parcel">
                <div class="panel-body" >
                <div class="form-group">
                    <p>Taille: <?php echo $listParcel[$i]["size"] ?></p>
                </div>
                <div class="form-group">
                    <p>Début plantation: <?php echo $listParcel[$i]["startDate"] ?></p>
                </div>
                <div class="form-group">
                    <p>Type de plantation: <?php echo getTeaCategoryById($listParcel[$i]["idTeaCategory"])[0]["name"]; ?></p>
                </div>
                <div class="form-group">
                    <a href="accueil.php?mod=u&id=<?php echo $listParcel[$i]["id"] ?>" class="btn btn-default">Modifier</a>
                </div>
                </div>
            </div> 
            <?php } ?>
         
        </div>
      </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
  	</div>
  </div>
</body>
</html>