<?php

$accueil = new Formulaire('post', 'index.php', 'fAccueil', 'fAccueil','multipart/form-data');

/////////////////////////PARTIE HAUTE/////////////////////////////////

$accueil->ajouterComposantLigne($accueil->debutDiv("topAccueil"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("TopTexte"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Campus 3.0",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Venez dans notre super campus bla bla",2,"SousTitre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Des milliers d'élèves à travers le monde, des opportunités pour tous! Rejoignez près de 10 000 étudiants en informatique et développez avec eux.",3,"SousTitre"));
            $accueil->ajouterComposantLigne($accueil->creerInputSubmit("", "bouttonAccueil", "ON SE LANCE!", ""));

        $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock1"));
        $accueil->ajouterComposantLigne($accueil->creerTitre("HOW IT WORKS",1,"Titre"));
   $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock2"));
        $accueil->ajouterComposantLigne($accueil->creerTitre("Des cours en Vr des niveau de la blohain des duels et plus encore venez découvrir notre campus et je sais pas quoi dire la.Faut que je mette du texte pas vraiment tres utilie juste pour faire une présentation sorry.",3,"SousTitre"));
    $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock3-4"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock3"));
            $accueil->ajouterComposantLigne($accueil->creerVideo("images\VrVideo.mp4"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock4"));
            $accueil->ajouterComposantLigne($accueil->creerImage("images\AccueilVr.png"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil2"));

    $accueil->ajouterComposantLigne($accueil->creerTitre("BENEFICES",1,"Titre"));
    $accueil->ajouterComposantLigne($accueil->creerTitre("Developpez vos capacitées , et je sais pas non plus me saouler pas enfaite merci les reufs.",2,"SousTitre"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("First"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block1"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\VrLogo.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Cours en VR ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block2"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Book.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Apprenez avec des pros! ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block3"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDiv("Second"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block1"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block2"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block3"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());


$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil3"));

    $accueil->ajouterComposantLigne($accueil->creerTitre("PRIX",1,"Titre"));
    $accueil->ajouterComposantLigne($accueil->creerTitre("Faut payer mon reuf 20 000€ minimum , et je sais pas non plus me saouler pas enfaite merci les reufs.",2,"SousTitre"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("TarifContent"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("PrixTarifGauche"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Mensuel",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("5000€/AN",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseItems"));

                $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  
                $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  
                $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseContent"));
                $accueil->ajouterComposantLigne($accueil->creerInputSubmit("", "bouttonAccueilBuy", "ON SE LANCE!", ""));
            $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("PrixTarifDroite"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("ACHAT",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("20000€/8 ANS",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseItems"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  
            $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  
            $accueil->ajouterComposantLigne($accueil->creerTitre("Avantages de la vie",2,"SousTitre"));  

        $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseContent"));
                $accueil->ajouterComposantLigne($accueil->creerInputSubmit("", "bouttonAccueilBuy", "ON SE LANCE!", ""));
            $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());


$accueil->ajouterComposantTab();
$accueil->creerFormulaire();

//////////////////////////////////////////fin FORPMULAIRE////////////////////////////////////////
require_once 'vue/vueAccueil.php' ;


