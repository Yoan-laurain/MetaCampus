<?php

// Recupere dans l'url le menu ou en defini un si existe pas

if(isset($_GET['AlternaDom'])){
	$_SESSION['AlternaDom'] = $_GET['AlternaDom'];
}
else
{
	if(!isset($_SESSION['AlternaDom'])){
		$_SESSION['AlternaDom'] = "accueil";
	}
}

// Menu de navigation

$menuNavHaut = new Menu("menuNav");

	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page1", "Page",False,False));
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page2", "Page",False,False));
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page3", "Page",False,False));
	$menuNavHaut->ajouterComposant($menuNavHaut->creerItemLien("page4", "Page",False,False));

$menuNavHaut->creerMenu($_SESSION['AlternaDom'], 'AlternaDom');

// ####################################################################################################
// Footer

$formFooter = new Formulaire('post', 'index.php', 'fFooter', 'fFooter');

$formFooter->ajouterComposantLigne($formFooter->debutDiv("footerdown"));
	$formFooter->ajouterComposantLigne($formFooter->creerLabel("", "","© 2020, LAURAIN Yoan (alias Veroz). Tous droits réservés."));
$formFooter->ajouterComposantLigne($formFooter->finDiv());

$formFooter->ajouterComposantTab();
$formFooter->creerFormulaire();
// ####################################################################################################

// Dispatch
require_once dispatcher::dispatch($_SESSION['AlternaDom']);