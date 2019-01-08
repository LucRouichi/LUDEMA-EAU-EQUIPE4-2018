<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./../Content/accueil.css" />
		<title> Ludema </title>
		<meta charset="utf-8"/>
	</head>


	<body>
  		<header>
    			<a href="view_accueil.html"><img id="logo" src=".\..\Content\image_site/LudemaLogo.png" alt="Logo de Ludema"/></a>
  					<ul id="onglets">
    					<li><a class="active" href="view_accueil.php"> Accueil </a></li>
    					<li><a href=""> Réservation </a></li>
    					<li><a href="https://centreludema.fr"> À-Propos </a></li>
    					<li><a href="view_sinscrire.php"> S'inscrire </a></li>
    					<li><a href="view_seConnecter.php"> Se connecter </a></li>
  					</ul>

  		</header>



		<div id="blocppl">

    		<table id="cases" cellspacing="15" >
    			<tr>
       				<td>LUDEMA c’est la combinaison d’un accompagnement basé sur les derniers niveaux de preuves en lien avec les bénéfices d’une activité physique et le plaisir de pratiquer selon ses capacités et ses envies.</br></br><strong>Vous voulez pratiquer une activité physique mais vous voulez plus de renseignements ?</strong></td>
							<td>LUDEMA ce sont des moments ludiques d’activités physiques adaptées dans un lieu accessible où le pratiquant est placé au centre des attentions pour un accompagnement individualisé.</br></br><strong>Vous voulez pratiquer une activité physique avec </br> un professionnel dans les prochains jours ?</strong></td>
  				</tr>
  			</table>
				<a href="www.twitter.com"><button type="button" class="boutonC1">Cliquez ici</button></a>
				<a href="www.twitter.com"><button type="button" class="boutonC2">Cliquez ici</button></a>
		</div>


		<div id="imgAccueil">
			<img id="imgAccueil" src=".\..\Content\image_site\LudemaAccueil.png">

		</div>


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
