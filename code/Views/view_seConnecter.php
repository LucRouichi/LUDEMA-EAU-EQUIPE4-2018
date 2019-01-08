<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./../Content/seConnecter.css" />
		<title> Ludema </title>
		<meta charset="utf-8"/>
	</head>


	<body>
  		<header>
    			<a href="view_accueil.html"><img id="logo" src=".\..\Content\image_site/LudemaLogo.png" alt="Logo de Ludema"/></a>
  					<ul id="onglets">
    					<li><a href="view_accueil.php"> Accueil </a></li>
    					<li><a href=""> Réservation </a></li>
    					<li><a href="https://centreludema.fr"> À-Propos </a></li>
    					<li><a href="view_sinscrire.php"> S'inscrire </a></li>
    					<li><a class="active" href="view_seConnecter.php"> Se connecter </a></li>
  					</ul>

  		</header>

			<form action="">
		  <div class="container">

		    <h1>Se Connecter</h1>
        </br>
        </br>

        <div class= 'formu'>
				<label for="email"><b>Email</b></label>
		    <input type="text" placeholder="Email" name="email" required>
				</br>
				</br>

		    <label for="mdp"><b>Mot de passe</b></label>
		    <input type="password" placeholder="Mot de passe" name="mdp" required>
        <p class="MDPoubli">Mdp oublié ? Cliquer <a href="#">ici</a>.</p>
				</br>
				</br>
        </div>
				<p>Pas encore de compte ? Inscrivez vous ! <a href="#">S'inscrire</a>.</p>
				</br>


		    <button type="submit" class="register">Connexion</button>
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
