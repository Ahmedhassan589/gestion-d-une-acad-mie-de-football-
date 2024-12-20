<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alxamdulilah</title>
	<link rel="stylesheet" type="text/css" href="login12.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php 
	error_reporting(0);
	require_once("etudl.php");
	if ($num_err!= null) {
		?> <style>.a_err{display: block;}</style><?php
	}
	if ($nom_err!= null) {
		?> <style>.p_err{display: block;}</style><?php
	}
	?>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="inner-box" id="card">
				<div class="card-front">
					<h2>conexion(e)</h2>
					<form method="POST" action="" >
					<input type="text" class="input-box" placeholder="Adresse" name="numero" required>
						<input type="password" class="input-box" placeholder="Mot de passe" name="mot_passe_jou" required>
                        
						<button type="submit" class="submit-btn" name="Connexion">Connexion</button>
						<div  class="oui">
						
							<p>
								<?php 
								echo "$Id_jou"; 
								?>
							</p> 
						</div>
					</form>
					<button type="button" class="btn" onclick="openRegistre()"> Mot-de-passe oublie</button>
				</div>
				<div class="card-back">
				<h2>Modifier Votre Mdp</h2>
					<form  method="POST" action="">
						<input type="text" class="input-box" placeholder="Id_jou" name="Id_jou" required>
						<input type="password" class="input-box" placeholder="Nouveau le mot de passe" name="password" required>
						<input type="password" class="input-box" placeholder="confirmer le mot de passe" name="password1" required>
						<button type="submit" name="Enregistrer" class="submit-btn">Enregistrer</button>
						<div  class="oui">
							<p>
								<?php echo $vide1 ?>
							</p> 
						</div>
					</form>
					<button type="button" class="btn" onclick="openLogin()">Se Connecter </button>

			</div>
		</div>
	</div>
	</div>
	<script>
		var card=document.getElementById("card");
		function openRegistre() {
			card.style.transform = "rotateY(-180deg)";
		}
		function openLogin() {
			card.style.transform = "rotateY(0deg)";
		}
	</script>
</body>
</html> 

