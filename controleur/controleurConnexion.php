<?php

$messageErreurConnexion="";

///////////////////////////////////////////Si il veut se connecter//////////////////////////////////////////////////////////

if (isset($_POST['submitConnex'])) 
{    	
	//Vérifie l'identité de l'utilisateur//

	$var=UtilisateurDAO::verification($_POST['login'], $_POST['mdp'] . UtilisateurDAO::sel($_POST['login']));

	//Est authentifié//

	if (!empty($var)) 
	{
		$_SESSION['identification'] = UtilisateurDAO::lire($var);

		//Si il a coché le bouton se souvenir//

		if(isset($_POST['SeSouvenir']))
		{
			setcookie('jeton',$var,time()+365*24*3600,null,null,false,true);
		}

		if( $_SESSION['identification']->getProf() == 1 )
		{
			header('location: index.php?MetaCampus=Accueil'); 
			exit;
		}
		else
		{
			header('location: index.php?MetaCampus=AccueilEleves'); 
			exit;
		}
	}
	else 
	{
		$message = "Identifiant ou mot de passe incorrect !";
	}
}


//Affiche le formulaire de connexion//

if(!isset($_SESSION['identification']) || !$_SESSION['identification'])
{
	$formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', 'fConnexion');
	
									//Partie fauche du formualire//

	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("MidConnexion"));

		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("GaucheConnexion"));	
		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());

									//Partie droite du formulaire//

		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("DroiteConnexion"));

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerTitre("SIGN UP NOW"));

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("","",'<h2>Identifiant :</h2>'));		
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('login', 'login', '', 1, 'Entrez votre identifiant', ''));

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("","",'<h2>Mot de Passe :</h2>'));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputMdp('mdp', 'mdp',  1, 'Entrez votre mot de passe', ''));

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("Remember"));
				$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputCheck("SeSouvenir","SeSouvenir","",""));
				$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel("RememberMe","RememberMe",'Se souvenir de moi'));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->debutDiv("ContentSubmitConnexion"));
				$formulaireConnexion->ajouterComposantLigne($formulaireConnexion-> creerInputSubmit('submitConnex', 'submitConnex', "LET'S GO"));
			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());

			$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerMessage($messageErreurConnexion));

		$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());
			
	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->finDiv());

	$formulaireConnexion->ajouterComposantTab();
	$formulaireConnexion->creerFormulaire();

	require_once 'vue/vueConnexion.php' ;
}
else
{
	$_SESSION['identification']=[];
	setcookie('jeton','',time()-3600);
	$_SESSION['MetaCampus']="accueil";
	header('location: index.php');
}