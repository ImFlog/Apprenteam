<?php
session_start();

include("bdd_app_user_mySql.php");
	$log = "";
	
	if(isset($_POST['connexion']) AND isset($_POST['email']) AND isset($_POST['pass'])){
		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		//Check email
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			// Récupération du billet
			$req = $bdd->prepare('SELECT * FROM app_user WHERE email = ?');
			$req->execute(array($email));
			$recup = $req->fetch();
			$pass_post = hash('whirlpool',$pass);
			if($recup['email'] == $email AND $recup['pass'] == $pass_post){
				$_SESSION['email'] = $email;
				$_SESSION['pass']  = $pass_post;
			}
			else{
				$log = "Email ou mot de passe invalide";
			}
		}
		else{
			$log = "Entrez un email valide";
		}
	}
	else{
		$log = "Veuillez entrez votre email et votre mot de passe administrateur";
	}
	
	if ($log == ""){
		header('Location: index.php');
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
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Apprenteam</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/perso.css" rel="stylesheet">

  </head>

  <body>
	<div class="masthead">

	<h1 class="mainTitle" style="">Apprentis de l'UTC</h1>

  <div class="container">
	<div class="navbar" role="navigation" style="background : rgba(255,255,255,0.9);">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand" href="#" style="padding : 5px"><img src="static/img/logo_40.png" class="img-responsive" alt="Apprenteam" style=""/></a>
          <a class="navbar-brand" href="#">Apprenteam</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li><a href="#">Actu</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formation<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">GI - Génie Informatique</a></li>
                <li><a href="#">GM - Génie Mécanique</a></li>
              </ul>
            </li>
            <li><a href="#">Informations Administratives</a></li>
            <li><a href="#">Nos Entreprises</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Rechercher">
            </div>
            <button type="submit" class="btn btn-default">OK</button>
          </form>
        </div><!-- /.nav-collapse -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->

	</div>
    
    <div class="container">
	
      <div class="row row-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<form class="navbar-form" action="connexion.php" method="POST">
				<h2>Se connecter en temps d'administrateur</h2>
				<?php
					echo $log;
				?>
				<div class="form-group-center">
					<input type="text" class="form-control" name="email" placeholder="Email">
					<input type="password" class="form-control" name="pass" placeholder="Password">
					<button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
				</div>
			</form>
          </div>
        </div>

		<div class="col-md-3">
          <div class="bs-docs-sidebar hidden-print" role="complementary">
			<h3><span class="label label-default">Sites relatifs</span></h3>
            <ul class="nav bs-docs-sidenav">
                <li>
					<li><a href="http://www.utc.fr/" > Site de l'UTC Apprentissage</a></li>
					<li><a href="http://www.irfa-apisup.fr/">Site du CFA IRFA API-SUP</a></li>
					<li><a href="http://www.education.gouv.fr/cid155/se-former-par-l-apprentissage.html">Ministère de l'éducation</a></li>
					<li><a href="http://www.utc.fr/" >Catalogue des UVs de l'UTC 2013/2014</a></li>
				</li>
			</ul>
			</div>
			</div>
		
      </div><!--/row-->

      <hr>

      <footer>
        <p>Apprenteam &copy; Company 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/perso.js"></script>
  </body>
</html>
