<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Before | After</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/index-user.css">
	</head>
	<body>
		<header>
			<div id="mainMenu">
				<img src="../images/logo-header.png" alt="logo">
				<nav>
					<ul>
						<li><a href="#">Amis</a></li>
						<li><a href="#">Before | after</a></li>
						<li><a href="#">Profil</a></li>
					</ul>
				</nav>
			</div>
			<div id="couverture">
	
			</div>
		</header>
		<div class="tchat">
			<ul>
				<li class="menuTchat"><a href="#" class="TchatCategories">Amis</a>
					<ul>
						<li class="tchatPeople"><a href="#" class="people">Mathieu</a></li>
						<li class="tchatPeople"><a href="#" class="people">Florian</a></li>
						<li class="tchatPeople"><a href="#" class="people">Cassandra</a></li>
					</ul>
				</li>

				<li class="menuTchat"><a href="#" class="TchatCategories">Public</a></li>
			</ul>
		</div>
		<div class="container">
				<div class="content-titre">
					<h2>Les befores</h2>
				</div>
				<div id="before">
					<?php  for ($i=0; $i < 5 ; $i++) { 
						echo '<div class="before">
								<img src="../images/logo-event.jpg" alt="before">
								<h3>Nom du before</h3>
								<strong>Date et heure</strong>
							</div>';
					} ?>
					<strong></strong>
				</div>
			
				<div class="content-titre">
					<h2>Les Afters</h2>
				</div>
				<div id="after">
					<?php  for ($i=0; $i < 5 ; $i++) { 
						echo '<div class="after">
								<img src="../images/logo-event.jpg" alt="after">
								<h3>Nom du after</h3>
								<strong>Date et heure</strong>
							</div>';
					} ?>
				</div>
		</div>
		<footer>
			<i>Copyright © 2015. Tous droits réservés.</i>
			<strong>Contact</strong>
		</footer>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var widthWindow = $(window).width();
				var heightWindow = $(window).height();

				/*reglage taille ecran*/
				$('body').css('width',widthWindow);
				
			/*	$(window).scroll(function(event){
				var heightHeader = $('header').height();
				var windowScroll = $(window).scrollTop();
        		if( windowScroll >= heightHeader){
		            $('#mainMenu nav').addClass('opacity');
		        } else {
		            $('#mainMenu nav').removeClass('opacity');
		        }
			})*/
		});
		</script>
	</body>
</html>