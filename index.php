<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Before | After</title>
		<link rel="stylesheet" href="vue/css/index.css">
	</head>
	<body>
		<header>
			<div id="mainMenu">
				<img src="vue/images/logo-header.png" alt="logo">
				<form>
					<input type="email" placeholder="Votre email" name="login_email">
					<input type="password" placeholder="Votre mot de passe" name="login_password">
					<button type="button">Connexion</button>
					<a href="#">Mot de passe oublié ?</a>
				</form>
			</div>
		</header>
		<div class="content">
			<div id="register">
				<img src="vue/images/logo-register.png" alt="Inscription">
				<form>
					<input type="text" placeholder="Votre nom" name="register_name" id="register_name">
					<input type="text" placeholder="Votre prenom" name="register_firstname" id="register_firstname">
					<input type="text" placeholder="Votre ville" name="register_city" id="register_city">
					<input type="email" placeholder="Votre email" name="register_email" id="register_email">
					<input type="password" placeholder="Votre mot de passe" name="register_password" id="register_password">
					<input type="password" placeholder="Retaper votre mot de passe" name="register_repass" id="register_repass">
					<button type="button" id="envoyer">S'inscrire</button>
					<div id="infoForm"></div>
				</form>
			</div>
			<div id="event">
				<div id="before">
					<?php  for ($i=0; $i < 3 ; $i++) { 
						echo '<div class="before">
								<img src="vue/images/logo-event.jpg" alt="before">
								<h3>Nom du before</h3>
								<strong>Date et heure</strong>
							</div>';
					} ?>
				</div>
				<div id="after">
					<?php  for ($i=0; $i < 3 ; $i++) { 
						echo '<div class="after">
								<img src="vue/images/logo-event.jpg" alt="after">
								<h3>Nom du after</h3>
								<strong>Date et heure</strong>
							</div>';
					} ?>
				</div>
			</div>
		</div>
		<footer>
			
		</footer>
		<script type="text/javascript" src="vue/js/jquery.js"></script>
	<script type="text/javascript" src="vue/js/register.js"></script>
	</body>
</html>