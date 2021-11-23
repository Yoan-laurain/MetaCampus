<?php

$BlockChain = new Formulaire('post', 'index.php', 'fBlockChain', 'fBlockChain','multipart/form-data');

$BlockChain->ajouterComposantLigne($BlockChain->debutDiv("BlockChainContent"));

    $BlockChain->ajouterComposantLigne($BlockChain->debutDiv("topBlockChain"));

        $BlockChain->ajouterComposantLigne($BlockChain->creerTitre("Diplômes dans la blockChain",1,"Titre"));
        $BlockChain->ajouterComposantLigne($BlockChain->creerTitre("La blockchain permet d'enregistrer et de sécuriser les diplômes et les bulletins de nos étudiants. Grâce à celle-ci la falsification devient impossible!",2,"SousTitre"));

    $BlockChain->ajouterComposantLigne($BlockChain->finDiv());

    $BlockChain->ajouterComposantLigne($BlockChain->debutDiv("SearchContent"));

        $BlockChain->ajouterComposantLigne($BlockChain->creerResearch());

    $BlockChain->ajouterComposantLigne($BlockChain->debutDiv("DiplomesContent"));
        $BlockChain->ajouterComposantLigne($BlockChain->creerImage("images\Diplomes.png"));  
    $BlockChain->ajouterComposantLigne($BlockChain->finDiv());

    $BlockChain->ajouterComposantLigne($BlockChain->finDiv());

$BlockChain->ajouterComposantLigne($BlockChain->finDiv());


$BlockChain->ajouterComposantLigne($BlockChain->finDiv());

$BlockChain->ajouterComposantTab();
$BlockChain->creerFormulaire();

require_once 'vue/vueBlockChain.php' ;