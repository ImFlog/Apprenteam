<?php
session_start();
include("bdd_app_user_mySql.php");

function isCo(){

	if (isset($_SESSION['connected']) AND isset($_SESSION['ip'])){

		if ($_SESSION['connected']== true AND $_SESSION['ip']==$_SERVER['REMOTE_ADDR']){
			return true;
		}
	}
	return false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/Apprenteam/static/img/logo_small.png">

  <title>Apprenteam</title>

  <!-- Bootstrap -->
  <link href="static/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="static/css/perso.css" rel="stylesheet">



</head>

<body>
  <div class="masthead">
    <h1 class="mainTitle">Apprentis de l'UTC</h1>
    <div class="container">
      <div class="col-xs-12 col-sm-9">
        <div class="navbar" role="navigation" style="background : rgba(255,255,255,0.9);">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/Apprenteam/index.php" style="padding : 5px"><img src="static/img/logo_40.png" class="img-responsive" alt="Apprenteam"/></a>
              <a class="navbar-brand" href="/Apprenteam/index.php">Apprenteam</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formation<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Apprenteam/formation.php">Présentation des formations</a></li>
                    <li><a href="/Apprenteam/formationGI.php">GI - Génie Informatique</a></li>
                    <li><a href="/Apprenteam/formationGM.php">GM - Génie Mécanique</a></li>
                  </ul>
                </li>
                <li><a href="#">Informations Administratives</a></li>
                <li><a href="/Apprenteam/nosEntreprises.php">Nos Entreprises</a></li>
                <li><a href="/Apprenteam/faq.php">FAQ</a></li>
                <?php
			if(isCo()){ ?>
				<li><a href="/Apprenteam/deconnexion.php">Déconnexion</a></li>
		<?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
