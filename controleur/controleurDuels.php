<?php

if (isset($_POST['submitDuels']))
{
    header('location: index.php?MetaCampus=Questions'); 
    exit;
}

$Duels = new Formulaire('post', 'index.php', 'fDuels', 'fDuels','multipart/form-data');

$Duels->ajouterComposantLigne($Duels->debutDiv("BodyMonCompte"));

$Duels->ajouterComposantLigne($Duels->debutDiv("ContentMonCompteTitre"));

        $Duels->ajouterComposantLigne($Duels->creerTitre("Choix du duel", 1, "Titre"));    

    $Duels->ajouterComposantLigne($Duels->finDiv());

$Duels->ajouterComposantLigne($Duels->debutDiv("ContentDuels"));

        $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesJoueur1"));

            $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesGauche"));
                $Duels->ajouterComposantLigne($Duels->creerImage("images\Friend2.png"));
                $Duels->ajouterComposantLigne($Duels-> creerLabel("", "", "Jean Sarc"));
            $Duels->ajouterComposantLigne($Duels->finDiv());

            $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesDroite"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("DAWIN",1,"Titre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("Niveau : 98",2,"SousTitre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("Points : 7 828",2,"SousTitre"));
            $Duels->ajouterComposantLigne($Duels->finDiv());

        $Duels->ajouterComposantLigne($Duels->finDiv());

        $Duels->ajouterComposantLigne($Duels->debutDiv("ContentVS"));
            $Duels->ajouterComposantLigne($Duels->debutDiv("ContentRouge")); 
                $Duels->ajouterComposantLigne($Duels->creerTitre("Mathématiques",1,"Titre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("Arithmétiques",2,"SousTitre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("VS",1,"TitreVS"));

                $Duels->ajouterComposantLigne($Duels->debutDiv("ContentGoDuels"));
                    $Duels->ajouterComposantLigne($Duels-> creerInputSubmit('submitDuels', 'submitDuels', "LET'S GO"));
                $Duels->ajouterComposantLigne($Duels->finDiv());
            $Duels->ajouterComposantLigne($Duels->finDiv());
        $Duels->ajouterComposantLigne($Duels->finDiv());


        $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesJoueur2"));

            $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesGauche"));
                $Duels->ajouterComposantLigne($Duels->creerImage("images\Sim.png"));
                $Duels->ajouterComposantLigne($Duels-> creerLabel("", "", "Simon Morin"));
            $Duels->ajouterComposantLigne($Duels->finDiv());

            $Duels->ajouterComposantLigne($Duels->debutDiv("ContentPersonnagesDroite"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("DAGPI",1,"Titre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("Niveau : 99",2,"SousTitre"));
                $Duels->ajouterComposantLigne($Duels->creerTitre("Points : 999 999",2,"SousTitre"));
            $Duels->ajouterComposantLigne($Duels->finDiv());

        $Duels->ajouterComposantLigne($Duels->finDiv());

$Duels->ajouterComposantLigne($Duels->finDiv());

$Duels->ajouterComposantLigne($Duels->finDiv());

$Duels->ajouterComposantTab();
$Duels->creerFormulaire();


require_once 'vue/Eleves/vueDuels.php' ;