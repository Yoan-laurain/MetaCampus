<?php

$SuivieScolaire = new Formulaire('post', 'index.php', 'fSuivieScolaire', 'fSuivieScolaire','multipart/form-data');


$SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("BodySuivieScolaire"));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SelectSuivieScolaire"));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerLabel("AnneeUniversitaire", "AnneeUniversitaire", "Année universitaire: "));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerSelect("selectAnnee","selectAnnee",["3eme année","1er année","2eme année"],""));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SuivieScolaireDiplomes"));
        // $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerLabel("DiplômeUniversitaire", "DiplômeUniversitaire", "Selectionnez le document que vous voulez: "));
        // $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerSelect("selectAnnee","selectAnnee",["Diplôme","Bulletin 1er semestre","Bulletin 2eme semestre"],""));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerInputSubmit("semestre1", "semestre1", "1er semestre", ""));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerInputSubmit("semestre2", "semestre2", "2eme semestre", ""));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerInputSubmit("diplome", "diplome", "Diplôme", ""));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SuivieScolaireDocument"));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerImage("images\Diplome-licence-france.png"));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->debutDiv("SuivieScolaireTelecharger"));
        $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->creerInputSubmit("TelechargerDocument", "TelechargerDocument", "Telecharger le document", ""));
    $SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

$SuivieScolaire->ajouterComposantLigne($SuivieScolaire->finDiv());

$SuivieScolaire->ajouterComposantTab();
$SuivieScolaire->creerFormulaire();

require_once 'vue/Eleves/vueSuivieScolaire.php' ;

