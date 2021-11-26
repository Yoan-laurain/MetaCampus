<?php

$accueilProf = new Formulaire('post', 'index.php', 'faccueilProf', 'faccueilProf','multipart/form-data');


$accueilProf->ajouterComposantLigne($accueilProf->debutDiv("BodyAccueilProf"));

    $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("ContentAccueilProfTitre"));
        $accueilProf->ajouterComposantLigne($accueilProf->creerTitre("Planning",1,"Titre"));
    $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

    $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("ContentAccueilProfCours"));

        $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("ContentAccueilProfCoursGauche"));

            $accueilProf->ajouterComposantLigne($accueilProf->creerTitre("Vendredi 26 Novembre 2021",1,"Titre"));

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlock"));

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage1"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "8H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfGererCours", "ProfGererCours","index.php?MetaCampus=EnCoursDev", "Gerer","",""));

                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage2"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("MatieresCours", "MatieresCours", "1er année A"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage3"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "10H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfInscritCours", "ProfInscritCours","index.php?MetaCampus=ListeElevesInscrit", "Voir inscrit","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlock"));

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage1"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "10H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfGererCours", "ProfGererCours","index.php?MetaCampus=EnCoursDev", "Gerer","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage2"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("MatieresCours", "MatieresCours", "2eme année B"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage3"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "12H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfInscritCours", "ProfInscritCours","index.php?MetaCampus=ListeElevesInscrit", "Voir inscrit","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlock"));

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage1"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "14H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfGererCours", "ProfGererCours","index.php?MetaCampus=EnCoursDev", "Gerer","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage2"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("MatieresCours", "MatieresCours", "Master 2"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage3"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "16H"));
                    
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfInscritCours", "ProfInscritCours","index.php?MetaCampus=ListeElevesInscrit", "Voir inscrit","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlock"));

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage1"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "16H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfGererCours", "ProfGererCours","index.php?MetaCampus=EnCoursDev", "Gerer","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage2"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("MatieresCours", "MatieresCours", "Master 1"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("CoursBlockStage3"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("HeureCours", "HeureCours", "18H"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabelLink("ProfInscritCours", "ProfInscritCours","index.php?MetaCampus=ListeElevesInscrit", "Voir inscrit","",""));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

        $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

        $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("ContentAccueilProfCoursDroite"));

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationsBlock"));

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationTitre"));
                $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("", "", "Notifications"));
            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotifBlock"));

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationBlockImage"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerImage("images\Friend.png"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationBlockTexte"));
                    $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationBlockTexteStage1"));
                        $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("NomNotif", "NomNotif", "Tim"));
                        $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("ObjetNotif", "ObjetNotif", "Vous a envoyé un message"));
                    $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                    $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationBlockTexteStage2"));
                        $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("ContentNotif", "ContentNotif", "Salut ça va?"));
                    $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                    $accueilProf->ajouterComposantLigne($accueilProf->debutDiv("NotificationBlockTexteStage3"));
                    $accueilProf->ajouterComposantLigne($accueilProf-> creerLabel("TimeNotif", "TimeNotif", "Il y a 2 heures"));
                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

                $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

            $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

        $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

    $accueilProf->ajouterComposantLigne($accueilProf->finDiv());

$accueilProf->ajouterComposantLigne($accueilProf->finDiv());

$accueilProf->ajouterComposantTab();
$accueilProf->creerFormulaire();

require_once 'vue/professeur/vueAccueilProf.php' ;

