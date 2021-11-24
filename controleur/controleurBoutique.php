<?php

$boutiqueEleves = new Formulaire('post', 'index.php', 'fBoutique', 'fBoutique','multipart/form-data');

$boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BodyMonCompte"));

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ContentMonCompteTitre"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Ma Boutique", 1, "Titre"));    

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BoutiqueBourse"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("Bourse2"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Echanger mes Points en Coin", 2, "Titre"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("MonCompteInfo"));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Combien ?",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexte("InputCoin", "InputCoin", "12" , 1,"",""));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Pour quel prix ?",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexte("InputPoint", "InputPoint", "457" , 1,"",""));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Mon taux",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexteDisabled("InputTaux", "InputTaux", "38,08" , 1,"",""));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv()); 

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("CoursBourse"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Cours du Meta Point",2,"TitreCarac"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\graph_bourse.png"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
    
    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

$boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());


$boutiqueEleves->ajouterComposantTab();
$boutiqueEleves->creerFormulaire();

require_once 'vue/Eleves/vueBoutique.php' ;
