<?php

// Recupere dans l'url le menu ou en defini un si existe pas

if(isset($_GET['MetaCampus'])){
	$_SESSION['MetaCampus'] = $_GET['MetaCampus'];
}
else
{
	if(!isset($_SESSION['MetaCampus'])){
		$_SESSION['MetaCampus'] = "accueil";
	}
}

//Pour se connecter automatiquement grâce au cookies//

if(!isset($_SESSION['identification']) && isset($_COOKIE['jeton']))
{
	$_SESSION['identification'] = UtilisateurDAO::lire($_COOKIE['jeton']);
	
	if(!$_SESSION['identification'])
	{
		unset($_SESSION['identification']);
		$messageErreurConnexion="La session a expiré";
		$_SESSION['MetaCampus'] = "connexion";
	}
}

// Menu de navigation

$menuNavHaut = new Menu("menuNav");

//Si il est authentifie //
if (isset($_SESSION['identification']) && $_SESSION['identification']) 
{	
	//Prof
	if ( $_SESSION['identification']->getProf() == 1 )
	{
		$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page", "Prof",False,False));
	}
	else
	{
		$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page", "Eleve",False,False));
	}
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("connexion", "",False,False));
}
else
{
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("accueil", "Accueil",False,False));
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("BlockChain", "BlockChain",False,False));
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("connexion", "",False,False));
}

$menuNavHaut->creerMenu($_SESSION['MetaCampus'], 'MetaCampus');

// Menu de navigation lattéral

$menuNavLeft = new Menu("menuNavLeft");

if(isset($_SESSION['identification']) && $_SESSION['identification']){

	

	$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("MetaCampus", "Meta Campus",False,False));
	
	if ($_SESSION['identification']->getProf() == 0){

		$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("planning", "Planning",False,False));
		$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("cours", "Cours",False,False));
		$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("classement", "Classement",False,False));
		$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("diplomes", "Diplomes",False,False));
		$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("compte", "Mon Compte",False,False));

	}

	
	$menuNavLeft->ajouterComposant($menuNavLeft->creerItemLien("connexion", "se déconnecter",False,False));
}


$menuNavLeft->creerMenu($_SESSION['MetaCampus'], 'MetaCampus');



// ####################################################################################################
// Footer

$formFooter = new Formulaire('post', 'index.php', 'fFooter', 'fFooter');

$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerdown"));
	$formFooter->ajouterComposantLigne($formFooter->creerLabel("", "","© 2021, METACAMPUS. Tous droits réservés."));
$formFooter->ajouterComposantLigne($formFooter->finDiv());

$formFooter->ajouterComposantTab();
$formFooter->creerFormulaire();
// ####################################################################################################

// Dispatch
require_once dispatcher::dispatch($_SESSION['MetaCampus']);