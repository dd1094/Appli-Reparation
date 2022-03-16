<?php
require('ctrl-coBDD.php'); /* Fichier permettant de se connecter à la base de données*/
	
/* Si le forulaire a été envoyer*/
if(isset($_POST['tsubmit'])){
	
	$idenTech = $_POST[ 'idenTech' ] ;
	$mdpTech = $_POST[ 'mdpTech' ] ;
	
	try {
			
		$sql = 'select nomTech, prenomTech  '
			. 'from Technicien '
			. 'where idenTech = :idenTech '
			. 'and mdpTech = :mdpTech' ;
			
		$st = $bd -> prepare( $sql ) ;
		
		$st -> execute( array( 
								':idenTech' => $idenTech ,
								':mdpTech' => $mdpTech 
						) 
					) ;
		$resultat = $st -> fetchall() ;
			
		unset( $bd ) ;
		
		if( count( $resultat ) == 1 ) {
			session_start() ;
			$_SESSION[ 'idenTech' ] =  $resultat[0]['idenTech'] ;
			$_SESSION[ 'prenomTech' ] =  $resultat[0]['prenomTech'] ;
			
			header( 'Location: ../controleur/ctrl-listerInc?idEtatInc=1' ) ;
		}
		else {
			$erreur="Nom de connexion ou mot de passe incorrect.";
		}
	}
	catch( PDOException $e ){
		
		$erreur="Site momentanément indisponible." ;
	}
}

require('../vue/vue-connexion.php');

?>