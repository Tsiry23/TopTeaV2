
<!DOCTYPE html>
<html>
<head>
	<title>TopTea</title>
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<link href="../../assets/css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="icon" href="img/logo.png">

  <link href="../../assets/" rel="stylesheet">
  <link href="../../assets//fa/css/all.css" rel="stylesheet">
</head>
<style type="text/css">
  body{
    background: url("../../assets/img/s1.jpg");
    background-size: cover;   
    /*background: grey;*/
  }
  .parcel{
    background: rgba(240,240,240,0.7); 
    border: none; 
    
  }
  .facture{
    background: white;  
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
          <li role="presentation"><a class="btn btn-default" id="mn" href="accueil.php"><i class="fa fa-home"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="cueillette.php"><i class="fa fa-database"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="listePiker.php"><i class="fa fa-list-alt"></i></a></li>
          <li role="presentation"><a class="btn btn-default" id="mn" href="GSDepense.php"><i class="fa fa-database"></i></a></li>
      </ul>
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
              <a style="color: white;" class="navbar-brand logo" href="#"><img width="40" height="40" src="../../assets/logo2.png"></a>
            </div>
          </div>
        </nav><br>
        <div class="row-fluid boite">
            <div class="panel panel-default parcel">
               
            </div> 
        </div>
      </div>
      <div class="row-fluid text-center" style="width: 100%;bottom:0;position: fixed;">
        <p>ETU002719 - ETU002575 - ETU002363</p>
      </div>
  	</div>
  </div>
</body>
</html>