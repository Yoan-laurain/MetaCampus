<?php

$coursChoisi = new Formulaire('post', 'index.php', 'fCoursChoisi', 'fAccueil','multipart/form-data');

//titre//

$coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("topCours"));

    $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("topTitle"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->creerTitre("Cours de Mathématiques",1,"Titre"));

    $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

$coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

$coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

$coursChoisi->ajouterComposantTab();

//contenu//

$coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("Content"));

    $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("leftSide"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("prof"));

            $coursChoisi->ajouterComposantLigne($coursChoisi->creerTitre("Mr Wonka",2,"SousTitre"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

        /////////////////////////////////////////////////

        $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("pieceJointes"));

            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Calcul mental"));
            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Nombres Complexes"));
            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Suites"));
            
            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Algèbre de Bool"));
            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Cours"));
            $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("pieceJ", "pieceJ", "Exercices"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

    $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("rightSide"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("video"));

            $coursChoisi->ajouterComposantLigne($coursChoisi->creerVideo("images\LE COURS  Les nombres complexes - Terminale - Maths expertes.mp4"));

        $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

        $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("tchat"));

            $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("recu"));

                $coursChoisi->ajouterComposantLigne($coursChoisi->creerlabel("textRecu", "textRecu1","Tim : désolé je suis un peu en retard" ));

            $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());
            
            $coursChoisi->ajouterComposantLigne($coursChoisi->debutDiv("envoie"));

                $coursChoisi->ajouterComposantLigne($coursChoisi->creerInputTexte("textEnvoi", "textEnvoi","","","Ecrire un message ...",""));
                $coursChoisi->ajouterComposantLigne($coursChoisi->creerInputSubmit("btnEnvoi","btnEnvoie","",""));

            $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());


        $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());


    $coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

$coursChoisi->ajouterComposantLigne($coursChoisi->finDiv());

$coursChoisi->ajouterComposantTab();


$coursChoisi->creerFormulaire();


require_once 'vue/vueCoursChoisi.php';