<?php

$SuivieScolaire = new Formulaire('post', 'index.php', 'fSuivieScolaire', 'fSuivieScolaire','multipart/form-data');


$SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("BodySuivieScolaire"));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SelectSuivieScolaire"));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerLabel("AnneeUniversitaire", "AnneeUniversitaire", "Année universitaire: "));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerSelect("selectAnnee","selectAnnee",["1er année","2eme année","3eme année"],""));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SuivieScolaireDiplomes"));
        // $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("AnneeUniversitaireBlock"));
        //     $SuivieScolaire->ajouterComposantLigne($SuivieScolaire-> creerLabel("LabelDocument", "LabelDocument", "Diplome"));
        // $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());


$SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

$SuivieScolaire->ajouterComposantTab();
$SuivieScolaire->creerFormulaire();

require_once 'vue/Eleves/vueSuivieScolaire.php' ;

