<?php

$accueilEleves = new Formulaire('post', 'index.php', 'faccueilEleves', 'faccueilEleves','multipart/form-data');


$accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("BodyAccueilEleves"));

    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("ContentAccueilElevesTitre"));
        $accueilEleves->ajouterComposantLigne($accueilEleves->creerTitre("Planning",1,"Titre"));
    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("ContentAccueilElevesCours"));

        $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("ContentAccueilElevesCoursGauche"));

            $accueilEleves->ajouterComposantLigne($accueilEleves->creerTitre("Vendredi 26 Novembre 2021",1,"Titre"));

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlock"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->debutA("index.php?MetaCampus=CoursChoisi"));

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage1"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "8H"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage2"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("MatieresCours", "MatieresCours", "Mathematiques"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage3"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "10H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ProfCours", "ProfCours", "Mr Wonka"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                $accueilEleves->ajouterComposantLigne($accueilEleves->finA());
            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlock"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->debutA(""));

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage1"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "10H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves->toggleSwitch());
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage2"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("MatieresCours", "MatieresCours", "Travaux Manuels"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage3"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "12H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ProfCours", "ProfCours", "Mr Gard"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                $accueilEleves->ajouterComposantLigne($accueilEleves->finA());
            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlock"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->debutA(""));

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage1"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "14H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves->toggleSwitch());
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage2"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("MatieresCours", "MatieresCours", "Programmation"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage3"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "16H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ProfCours", "ProfCours", "Mme Abury"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());
                $accueilEleves->ajouterComposantLigne($accueilEleves->finA());
            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlock"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->debutA(""));

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage1"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "16H"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage2"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("MatieresCours", "MatieresCours", "Anglais"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("CoursBlockStage3"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("HeureCours", "HeureCours", "18H"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ProfCours", "ProfCours", "Mme Pouvert"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                $accueilEleves->ajouterComposantLigne($accueilEleves->finA());
            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

        $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

        $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("ContentAccueilElevesCoursDroite"));

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationsBlock"));

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationTitre"));
                $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("", "", "Notifications"));
            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotifBlock"));

                $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationBlockImage"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves-> creerImage("images\Friend.png"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationBlockTexte"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationBlockTexteStage1"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("NomNotif", "NomNotif", "Tim"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ObjetNotif", "ObjetNotif", "Vous a envoyé un message"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationBlockTexteStage2"));
                        $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("ContentNotif", "ContentNotif", "Salut ça va?"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                    $accueilEleves->ajouterComposantLigne($accueilEleves->debutDiv("NotificationBlockTexteStage3"));
                    $accueilEleves->ajouterComposantLigne($accueilEleves-> creerLabel("TimeNotif", "TimeNotif", "Il y a 2 heures"));
                $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

                $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

            $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

        $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

    $accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

$accueilEleves->ajouterComposantLigne($accueilEleves->finDiv());

$accueilEleves->ajouterComposantTab();
$accueilEleves->creerFormulaire();

require_once 'vue/Eleves/vueAccueilEleves.php' ;

