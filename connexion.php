<?php
require 'header.php';

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
				$_SESSION['connected'] = true;
				$_SESSION['ip']  = $_SERVER['REMOTE_ADDR'];
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
<?php 
	require 'sidebar.html';
	require 'footer.html';
?>
