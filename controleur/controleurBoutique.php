<?php

$boutiqueEleves = new Formulaire('post', 'index.php', 'fBoutique', 'fBoutique','multipart/form-data');

$boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BodyMonCompte"));

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ContentMonCompteTitre"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Ma Boutique / Bourse", 1, "Titre"));    

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("LaBourse"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BourseEchange"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Echanger mes Points en Coin", 3, "Titre"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("MonCompteInfo"));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Combien ?",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexte("InputPoint", "InputPoint   ", "457" , 1, "", ""));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Pour quel prix ?",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexte("InputCoin", "InputCoin", "12" , 1,"",""));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Mon taux",1,"Titre"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerInputTexteDisabled("InputTaux", "InputTaux", "38,08" , 1,"",""));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv()); 

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BourseCours"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Cours du Meta Point", 3, "Titre"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\graph_bourse.png"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
    
    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

    // Composant la boutique
    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("LaBoutique"));

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BoutiqueItem"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Acheter des objets/skins", 3, "Titre"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BoutiqueItemCard"));

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_foot.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Ballon de Foot Shiny",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("20",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_epee.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Epée en Diamant",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("50",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_chapeau.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Chapeau de paille",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("45",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_bouclier.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Bouclier de Chevalier",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("15",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_trefle.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Trèfle à 4 feuilles",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("10",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_mario.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Masque de Mario",4,"LibelleItem"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("999",4,"Prix"));
                        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BoutiqueBonAchat"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Echanger mes Meta Coins en Récompenses", 3, "Titre"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("BoutiqueBonAchatCard"));

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_netflix.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("40 % de réduction sur l’achat d’un abonnement Netflix",4,"LibelleItem"));
                
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("100",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_uber.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("25 % de réduction sur l’achat d’une commande Uber Eats",4,"LibelleItem"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("90",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_amazon.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Carte cadeau de 10 € sur Amazon.fr",4,"LibelleItem"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("115",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_cinema.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Place de cinéma gratuite",4,"LibelleItem"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("110",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_google_play_store.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Carte cadeau de 25 € sur le Google Play Store",4,"LibelleItem"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("125",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemAchat"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_steam.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("Jeu Steam offert dans une limite de 30 € maximum",4,"LibelleItem"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->debutDiv("ItemPrixComplet"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerTitre("150",4,"Prix"));
                    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->creerImage("images\icon_piece.png"));
                $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());
            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

            $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

        $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());

    $boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());


$boutiqueEleves->ajouterComposantLigne($boutiqueEleves->finDiv());


$boutiqueEleves->ajouterComposantTab();
$boutiqueEleves->creerFormulaire();

require_once 'vue/Eleves/vueBoutique.php' ;
