<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./../Content/sinscrire.css" />
		<title> Ludema </title>
		<meta charset="utf-8"/>
	</head>


	<body>
  		<header>
    			<a href="view_accueil.html"><img id="logo" src=".\..\Content\image_site/LudemaLogo.png" alt="Logo de Ludema"/></a>
  					<ul id="onglets">
    					<li><a href="view_accueil.php"> Accueil </a></li>
    					<li><a href=""> Réservation </a></li>
    					<li><a href=""> À-Propos </a></li>
    					<li><a class="active" href="view_sinscrire.php"> S'inscrire </a></li>
    					<li><a href=""> Se connecter </a></li>
  					</ul>

  		</header>

			<form action="">
		  <div class="container">

		    <h1>S'inscrire</h1>
				</br>
		    <p>Veuillez fournir les informations suivantes afin de vous inscrire.</p>
				</br>

				<label for="nom"><b>Nom</b></label>
		    <input type="text" placeholder="Nom" name="nom" required>
				</br>
				</br>

		    <label for="prenom"><b>Prénom</b></label>
		    <input type="text" placeholder="Prénom" name="prenom" required>
				</br>
				</br>

				<label for="email"><b>Email</b></label>
		    <input type="text" placeholder="Email" name="email" required>
				</br>
				</br>

		    <label for="mdp"><b>Mot de passe</b></label>
		    <input type="password" placeholder="Mot de passe" name="mdp" required>
				</br>
				</br>

		    <label for="mdp-confirm"><b>Confirmer Mot de passe</b></label>
		    <input type="password" placeholder="Mot de passe" name="mdp-confirm" required>
				</br>
				</br>

		    <p>En créant un compte vous acceptez nos <a href="#">Conditions générales d'utilisation</a>.</p>
				<p>Vous avez déjà un compte ? <a href="#">Se connecter</a>.</p>
				</br>


		    <button type="submit" class="register">S'enregistrer</button>
		  </div>

		</form>





      <footer>
  			<a href= "https://www.facebook.com/centre.ludema"><img class='logo' src=".\..\Content\image_site/Facebook.png"></a>
  			<a href= "https://twitter.com/centre_ludema"><img class='logo' src=".\..\Content\image_site/Twitter.png"></a>
  			<a href= "https://www.instagram.com/centre_ludema/"><img class='logo' src=".\..\Content\image_site/Instagram.png"></a>
  			<a href= "https://www.linkedin.com/company/ludema"><img class='logo' id="In" src=".\..\Content\image_site/In.png"></a>
  	</footer>
  	<script>
  		window.onscroll = function() {myFunction()};

  		var navbar = document.getElementById("onglets");
  		var sticky = navbar.offsetTop;

  		function myFunction() {
    	if (window.pageYOffset >= sticky) {
      	navbar.classList.add("sticky");
    	}
  		else {
      	navbar.classList.remove("sticky");
    	}
  		}
  </script>
  	</body>

  </html>
