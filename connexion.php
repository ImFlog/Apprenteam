<?php
include("bdd_app_user_mySql.php");
$log = "";

if(isset($_POST['connexion']) AND isset($_POST['email']) AND isset($_POST['pass'])) {
	$email = $_POST['email'];
	$pass  = $_POST['pass'];
		//Check email
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// Récupération du billet
		$req = $bdd->prepare('SELECT * FROM app_user WHERE email = :email');
		$req->execute(array(':email' => $email));
		$recup = $req->fetch();
		$pass_post = hash('whirlpool',$pass);
		if($recup['email'] == $email AND $recup['pass'] == $pass_post){
			session_start();
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
	$log = "";
}

if (isset($_SESSION['ip'])) {
	header('Location: index.php');
	exit();
}
require 'header.php';
?>

<div class="container">
	<div class="row row-right">
		<div class="col-xs-12 col-sm-9">
			<div class="jumbotron">
				<form class="form-horizontal" role="form" action="connexion.php" method="POST">
					<h2>Se connecter en temps qu'administrateur</h2>
					<p class="main-content">
						<?php echo $log; ?>
					</p>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="pass" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="pass" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require 'sidebar.html';?>
	</div>
	<?php require 'footer.html';?>
