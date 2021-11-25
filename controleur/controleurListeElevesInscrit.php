<?php

$ListeElevesInscrit = new Formulaire('post', 'index.php', 'fListEleveInscrit', 'ListEleveInscrit','multipart/form-data');

$ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("ContenuGeneral"));
    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("ContenuInterne"));
    
        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("coursEleveTitre"));
            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->creerTitre("Liste des élèves inscrits :",1,"Titre"));
        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("EnteteInfos"));
            
            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfoBulles1"));

                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosText"));
                    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", " Cours : Anglais approfondi"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfoBulles1"));

                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosText"));
                    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", "16H05 - 18H00"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfoBulles1"));

                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosText"));
                    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", "Durée : 02H05"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfoBulles1"));

                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosText"));
                    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", "Date : 29 Novembre 2021"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("SearchBar"));

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("Bar"));

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosTextSearch"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", "Recherche"));
            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("LogoRecherche"));

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("SearchLogo"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->creerImage("images\searching.png"));
            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());   


        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("ListeEleves"));

            for($i=0;$i<70;$i++){
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfoEleve"));

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("InfosText"));
                $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit-> creerLabel("NomMatiere", "NomMatiere", "Didier Drogba"));
            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

            $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());
            }


        $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());    
    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());
$ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

$ListeElevesInscrit->ajouterComposantTab();
$ListeElevesInscrit->creerFormulaire();
require_once 'vue/professeur/vueListeElevesInscrit.php';