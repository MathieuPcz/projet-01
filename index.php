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
					<input type="email" placeholder="Votre email" name="login-email">
					<input type="password" placeholder="Votre mot de passe" name="login-password">
					<button type="button">Connexion</button>
					<a href="#">Mot de passe oublié ?</a>
				</form>
			</div>
		</header>
		<div class="content">
			<div id="register">
				<img src="vue/images/logo-register.png" alt="Inscription">
				<form>
					<input type="text" placeholder="Votre nom" name="register-name">
					<input type="text" placeholder="Votre prenom" name="register-firstname">
					<input type="text" placeholder="Votre ville" name="register-city">
					<input type="email" placeholder="Votre email" name="register-email">
					<input type="password" placeholder="Votre mot de passe" name="register-password">
					<input type="password" placeholder="Retaper votre mot de passe" name="register-repass">
					<button type="button">S'inscrire</button>
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
	</body>
</html>