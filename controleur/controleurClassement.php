<?php

$leaderBoards = new Formulaire('post', 'index.php', 'fLeaderBoards', 'fAccueil','multipart/form-data');

$leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("topleaderBoards"));

        $leaderBoards->ajouterComposantLigne($leaderBoards->debutDiv("TopTitle"));

            $leaderBoards->ajouterComposantLigne($leaderBoards->creerTitre("Leader Boards",1,"Titre"));

        $leaderBoards->ajouterComposantLigne($leaderBoards->finDiv());

$leaderBoards->ajouterComposantTab();
$leaderBoards->creerFormulaire();
require_once 'vue/vueClassement.php';