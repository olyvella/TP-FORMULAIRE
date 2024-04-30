<!DOCTYPE html>

<?php
		
	$nom = ucfirst( $_POST[ 'nom' ] ) ;
	$prenom = ucfirst( $_POST[ 'prenom' ] ) ;
	$telephone = ucfirst( $_POST[ 'telephone"' ] ) ;
	$email = ucfirst( $_POST[ 'email' ] ) ;
	


?>
<html lang="fr">
    <head>
        <title>Sanaya</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
	
		<?php if( $_SERVER["REQUEST_METHOD"] == "POST") { ?>
			
			<?php if( empty($_POST["nom"])){ 
				echo " Veuillez remplir ce champ. " ;  
			} else { ?>
			<?php } ?>
			
			<?php if( empty($_POST["prenom"])){ 
				echo " Veuillez remplir ce champ. " ;  
			} else { ?>
			
			<?php if( empty($_POST["telephone"])){ 
				echo " Veuillez remplir ce champ. " ;  
			} else { ?>
			
			<?php if( empty($_POST["email"])){ 
				echo " Veuillez remplir ce champ. " ;  
			} else { ?>
				
			
		<?php } ?>
		
		
	</body>
</html>


