<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sanaya</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
		
		
		<?php
			$connexionOk = FALSE ;
			$nomConnexion = ($_POST['nomConnexion']);
			$motDePasse = ($_POST['motDePasse']);
			
			if( $nomConnexion == "sanaya" && $motDePasse == "bio" ){
				$connexionOk = TRUE ;
			}
		
		?>
		
		<h5>
			<?php
				if( $connexionOk ){
					echo "Administrateur connecté." ;
				}
				else {
					echo "Connexion refusée." ;
					echo " Merci de repartir sur la page d\'accueil ";
				}
			
			?>
		</h5>
		
		<a href="authentification.html">
		<?php
		
			if( $connexionOk ){
				echo "Déconnexion" ;
			}
		
		?>
		</a>
		
	</body>

</html>	
