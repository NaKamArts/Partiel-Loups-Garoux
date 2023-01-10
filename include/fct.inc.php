<?php

/** 
 * Fonctions pour l'application GSB
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 */
 /**
 * Teste si un quelconque visiteur est connecté
 * @return vrai ou faux 
 */
function estConnecte(){
  return isset($_SESSION['idVisiteur']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 
 * @param $id 
 * @param $nom
 * @param $prenom
 */
function connecter($id,$nom,$prenom,$type){
	$_SESSION['idVisiteur']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
	$_SESSION['type']= $type;
}

function verifieEmailPseudo($email,$pseudo){
	$error="";
	echo $email;
	$sql="Select Email From joueur Where Email='$email'";
	$sql2="Select pseudo From joueur Where pseudo='$pseudo'";
	$rs1 = PdoGsb::get_monPdo()->prepare($sql);
	$rs2 = PdoGsb::get_monPdo()->prepare($sql2);
	$ligne1 = $rs1->fetch();
	$ligne2 = $rs2->fetch();
	echo $ligne1;
	if ($ligne1==null && $ligne2==null) {
		return true;
	}
	if ($ligne1!=null) {$error+="Email déjà utilisé.";}
	if ($ligne2!=null) {$error+= "Pseudo déjà utilisé.";}
	return $error;
}


function confirmeInscription($pseudo,$email,$mdp){
	//$mdp = md5($mdp);
	$sql="Insert into joueur(pseudo,email,mdp) VALUES('$pseudo','$email','$mdp')";
	PdoGsb::get_monPdo()->exec($sql);
}

function connexion($pseudo,$mdp){
	$sql="Select id,pseudo,email,mdp From joueur where pseudo='$pseudo' AND Mdp='$mdp'";
	$rs = PdoGsb::get_monPdo()->prepare($sql);
	$ligne = $rs->fetch();
	return $ligne;
}
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}

?>