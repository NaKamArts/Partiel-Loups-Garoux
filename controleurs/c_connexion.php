﻿<?php
include("include/Erreur.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
			resetErreur();
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$type=$visiteur['type'];
			connecter($id,$nom,$prenom,$type);
			if ($type==0) include("vues/v_sommaire.php");
			if ($type==1) include("vues/v_sommaire2.php");
			
			
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>