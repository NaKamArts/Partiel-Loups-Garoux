<?php
include("include/Erreur.php");

$action = $_REQUEST['action'];
switch($action){
	case 'connexion':{
			include("vues/v_connexion.php");		
		break;
	}
	case 'inscription':{
		include("vues/v_inscription.php");
		break;
	}
	case 'valideConnexion':{
		$pseudo= $_REQUEST["pseudo"];
		$mdp= $_REQUEST["mdp"];
		$joueur=connexion($pseudo,$mdp);
		if(!is_array( $joueur)){
			//ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			echo"Connexion réussi";
		}
		break;
	}
	case 'valideInscription':{
		$pseudo= $_REQUEST["Pseudo"];
		$email= $_REQUEST["mail"];
		$mdp= $_REQUEST["mdp"];
		$valideMailPseudo= verifieEmailPseudo($email,$pseudo);
		if ($valideMailPseudo) {
			confirmeInscription($pseudo,$email,$mdp);
			include("vues/v_connexion.php");	
		}
		break;
	}
}
?>