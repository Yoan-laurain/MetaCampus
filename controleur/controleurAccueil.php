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

        $accueil->ajouterComposantLigne($accueil->debutDiv("TopGif"));
            $accueil->ajouterComposantLigne($accueil->creerImage("images\Crypto.gif"));
        $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil"));

$accueil->ajouterComposantLigne($accueil->finDiv());


$accueil->ajouterComposantTab();
$accueil->creerFormulaire();

//////////////////////////////////////////fin FORPMULAIRE////////////////////////////////////////
require_once 'vue/vueAccueil.php' ;


