<?php

$MonCompte = new Formulaire('post', 'index.php', 'fMonCompte', 'fMonCompte','multipart/form-data');

$MonCompte->ajouterComposantLigne($MonCompte->debutDiv("BodyMonCompte"));

    $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("ContentMonCompteTitre"));
        $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Mon Compte",1,"Titre"));
    $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

    $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteContent"));
        $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Simon MORIN",1,"Titre"));
    $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

    $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteStage2"));

        $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInfo"));

            $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Pseudo :",1,"Titre"));
            $MonCompte->ajouterComposantLigne($MonCompte->creerInputTexte("InputPseudo", "InputPseudo", (isset($_SESSION['identification']) ? $_SESSION['identification']->getPseudo(): ""), 1,"",""));

            $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Email :",1,"Titre"));
            $MonCompte->ajouterComposantLigne($MonCompte->creerInputTexte("InputEmail", "InputEmail", (isset($_SESSION['identification']) ? $_SESSION['identification']->getMail():"") , 1,"",""));


            $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Téléphone :",1,"Titre"));
            $MonCompte->ajouterComposantLigne($MonCompte->creerInputTexte("InputTel", "InputTel",(isset($_SESSION['identification']) ?  $_SESSION['identification']->getTelephone() :"") , 1,"",""));

        $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

        $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteCarac"));

            $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Caractéristiques :",1,"TitreCarac"));

            $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteCaraStage1"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Niveau :",1,"Titre"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerLabel("InputLvl", "InputLvl","98"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Star2.png"));
            $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

            $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteCaraStage2"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Méta Coins :",1,"Titre"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerLabel("InputLvl", "InputLvl","45"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Coin2.png"));
            $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

            $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteCaraStage3"));
            $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Méta Points :",1,"Titre"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerLabel("InputLvl", "InputLvl","7828"));
                $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Fever2.png"));
            $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

        $MonCompte->ajouterComposantLigne($MonCompte->finDiv());
    
    $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

    $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaire"));

        $MonCompte->ajouterComposantLigne($MonCompte->creerTitre("Inventaire ",1,"Titre"));

        $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireContent"));

            $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireTabFull"));
                $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireTab"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Wallet.png"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Hat.png"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\SkateBoard.png"));
                $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

                $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireTab2"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Sword.png"));
                $MonCompte->ajouterComposantLigne($MonCompte->finDiv());
            $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

            $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireBouton"));

                $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireBoutonAchat"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Wallet.png"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerInputSubmit("AchatInventaire", "AchatInventaire", "Bourse et Boutique", ""));
                $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

                $MonCompte->ajouterComposantLigne($MonCompte->debutDiv("MonCompteInventaireBoutonVente"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerImage("images\Sell.png"));
                    $MonCompte->ajouterComposantLigne($MonCompte->creerInputSubmit("VenteInventaire", "VenteInventaire", "Vendre", ""));
                $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

            $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

        $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

    $MonCompte->ajouterComposantLigne($MonCompte->finDiv());

$MonCompte->ajouterComposantLigne($MonCompte->finDiv());

$MonCompte->ajouterComposantTab();
$MonCompte->creerFormulaire();


require_once 'vue/Eleves/vueMonCompte.php' ;
