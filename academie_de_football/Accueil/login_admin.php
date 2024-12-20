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
	require_once("adminl.php");
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
					<h2>Administrateur</h2>
					<form method="POST" action="" >
					<input type="Email" class="input-box" placeholder="Email Administrateur" name="num_admin" required>
						<input type="password" class="input-box" placeholder="Mot de passe" name="mot_passe_admin" required>
                        
						<button type="submit" class="submit-btn" name="Connexion">Connexion</button>
						
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
