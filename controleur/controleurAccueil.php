<?php

$accueil = new Formulaire('post', 'index.php', 'fAccueil', 'fAccueil','multipart/form-data');

/////////////////////////PARTIE HAUTE/////////////////////////////////

$accueil->ajouterComposantLigne($accueil->debutDiv("topAccueil"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("TopTexte"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Meta Campus",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Le Campus 3.0 qui vous fais envie",2,"SousTitre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Des milliers d'élèves à travers le monde, des opportunités pour tous! Rejoignez près de 10 000 étudiants en informatique et développez avec eux.",3,"SousTitre"));
            $accueil->ajouterComposantLigne($accueil->creerInputSubmit("", "bouttonAccueil", "ON SE LANCE!", ""));

        $accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock1"));
        $accueil->ajouterComposantLigne($accueil->creerTitre("HOW IT WORKS",1,"Titre"));
   $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->debutDiv("AccueilBlock2"));
        $accueil->ajouterComposantLigne($accueil->creerTitre("Des cours en réalité virtuelle, des diplômes reconnu et unique certifié par notre blockchain, un système de personnage style RPG avec des duels, un classement et bien plus encore...",3,"SousTitre"));
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
    $accueil->ajouterComposantLigne($accueil->creerTitre("Developpez vos capacitées, vos connaissances et votre esprit de camaraderie.",2,"SousTitre"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("First"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block1"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\VrLogo.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Cours en VR ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Nous proposons des cours en réalité virtuelle n'est-ce pas génial ?!",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block2"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Book.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Apprenez avec des pros!",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Nos professeurs et intervenants sont sélectionner selon des critères spécifiques et leur humour",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("First-Block3"));

            $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("Grâce à notre platforme style RPG, ayez accès à des duels, un classement et même une super boutique",2,"SousTitre"));

        $accueil->ajouterComposantLigne($accueil->finDiv());

    $accueil->ajouterComposantLigne($accueil->finDiv());

   // $accueil->ajouterComposantLigne($accueil->debutDiv("Second"));

     //   $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block1"));

       //     $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
       //     $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
       //     $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

      //  $accueil->ajouterComposantLigne($accueil->finDiv());

      //  $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block2"));

        //    $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
        //    $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
        //    $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

     //   $accueil->ajouterComposantLigne($accueil->finDiv());

//        $accueil->ajouterComposantLigne($accueil->debutDiv("Second-Block3"));

  //          $accueil->ajouterComposantLigne($accueil->creerImage("images\Planning.png"));
    //        $accueil->ajouterComposantLigne($accueil->creerTitre("Defiez vos camarades ",1,"Titre"));
     //       $accueil->ajouterComposantLigne($accueil->creerTitre("Ouh les copains je ne vous oublierai jamais c'est faux",2,"SousTitre"));

     //   $accueil->ajouterComposantLigne($accueil->finDiv());

    // $accueil->ajouterComposantLigne($accueil->finDiv());


$accueil->ajouterComposantLigne($accueil->finDiv());

$accueil->ajouterComposantLigne($accueil->debutDiv("bodyAccueil3"));

    $accueil->ajouterComposantLigne($accueil->creerTitre("PRIX",1,"Titre"));
    $accueil->ajouterComposantLigne($accueil->creerTitre("Chaque année au sein de notre campus vous coûtera 8000 euros. Si peu pour bien réussir",2,"SousTitre"));

    $accueil->ajouterComposantLigne($accueil->debutDiv("TarifContent"));

        $accueil->ajouterComposantLigne($accueil->debutDiv("PrixTarifGauche"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Mensuel",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("670€/mois",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseItems"));

                $accueil->ajouterComposantLigne($accueil->creerTitre("Frais de dossier inclus",2,"SousTitre"));  
                $accueil->ajouterComposantLigne($accueil->creerTitre("Pour les bourses plus modeste",2,"SousTitre"));  
                $accueil->ajouterComposantLigne($accueil->creerTitre("Eligible bourse académique",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->finDiv());

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseContent"));
                $accueil->ajouterComposantLigne($accueil->creerInputSubmit("", "bouttonAccueilBuy", "ON SE LANCE!", ""));
            $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->finDiv());

        $accueil->ajouterComposantLigne($accueil->debutDiv("PrixTarifDroite"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Annuel",1,"Titre"));
            $accueil->ajouterComposantLigne($accueil->creerTitre("8000€/ans",2,"SousTitre"));  

            $accueil->ajouterComposantLigne($accueil->debutDiv("PurchaseItems"));

            $accueil->ajouterComposantLigne($accueil->creerTitre("Frais de dossier inclus",2,"SousTitre"));  
            $accueil->ajouterComposantLigne($accueil->creerTitre("Pour les fils & fille à Papa",2,"SousTitre"));  
            $accueil->ajouterComposantLigne($accueil->creerTitre("Eligible bourse académique",2,"SousTitre"));  

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


