
<?php 
include "Nav.php";
session_start();

$imagepath = 'photo/bg.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="photo/6.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
<title>ATPS-</title>
<style>
        body {
            background-image: url('<?php echo $imagepath;?>');
            background-repeat:repeat ;
            background-size: cover;
            background-attachment: fixed;
        }

        footer {
            background-color: #f8f9fa;
            padding: 2rem;
            box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
            margin-top: 1rem;
        }
    </style>
  
  

	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
		}
	</style>
</head>
<body>


</div>
 
	<h1 class="mb-3 h2" id="heading" style="text-align: center;">Pour Quoi ATPS - Advanced Transport Management System?</h1>
	<div id="content" style="text-align: center; font-size: 1.3em; color: black;">
		<p>Nous sommes ravis de vous accueillir sur notre plateforme dédiée à la gestion efficace des transports. Que vous dirigiez une entreprise cherchant à optimiser ses opérations logistiques ou que vous soyez un particulier à la recherche de moyens pratiques pour vos déplacements, ATPS offre une gamme complète de solutions pour répondre à vos besoins spécifiques.</p>
		<p>Notre mission est de simplifier et d'améliorer chaque aspect de votre expérience en matière de transport. Que ce soit pour une flotte d'entreprise ou pour vos déplacements personnels, ATPS vous offre des outils puissants et des fonctionnalités avancées pour planifier, exécuter et suivre vos trajets avec une facilité incomparable.</p>
		<p>Explorez notre site pour découvrir toutes les fonctionnalités que nous proposons, notamment la gestion de flotte, le suivi en temps réel, la planification d'itinéraires optimisés et bien plus encore. Quelle que soit la taille de votre entreprise ou la complexité de vos besoins en transport, ATPS est là pour vous accompagner à chaque étape du processus.</p>
		<p>Rejoignez-nous dès aujourd'hui sur ATPS et découvrez comment nous pouvons vous aider à rendre la gestion de transport plus simple, plus intelligente et plus efficace que jamais.</p>
	</div>

	<script>
  function goToPage2() {
    window.location = ".html";
  }
	</script>
	
	<?php 
if(isset($_SESSION['erreur'])){
  $erreur=$_SESSION['erreur'];
  unset($_SESSION['erreur']);
echo "
  <script>
  alert('$erreur');
  </script> ";
}



include "footer.php";
?> 


</body>
</html>