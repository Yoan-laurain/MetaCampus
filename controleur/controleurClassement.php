<?php

$leaderBoards = new Formulaire('post', 'index.php', 'fLeaderBoards', 'fAccueil','multipart/form-data');

$leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("topleaderBoards"));

    $leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("TopTitle"));

        $leaderBoards->ajouterComposantLigne($leaderBoards->creerTitre("Leader Boards",1,"Titre"));

    $leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());
    
$leaderBoards->ajouterComposantLigne($leaderBoards->creerlabel("eleve", "eleve", "ELEVE"));

$leaderBoards->ajouterComposantLigne($leaderBoards->creerlabel("prof", "prof", "PROFESSEUR"));
$leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());


$leaderBoards->ajouterComposantTab();


$leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("tabs"));

    $leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("leftTabLB"));

        $leaderBoards->ajouterComposantLigne($leaderBoards->creerTableUtilisateurE());
        

    $leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());

    $leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("rightTabLB"));

        $leaderBoards->ajouterComposantLigne($leaderBoards->creerTableUtilisateurP());
    $leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());


$leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());

$leaderBoards->ajouterComposantTab();


$leaderBoards->creerFormulaire();
require_once 'vue/vueClassement.php';