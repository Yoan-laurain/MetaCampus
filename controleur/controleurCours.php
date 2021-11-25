<?php

$ListeCoursEleve = new Formulaire('post', 'index.php', 'fListEleve', 'ListEleve','multipart/form-data');

$ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("ContentCoursEleve"));

    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("topListeCoursEleve"));
    
        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("coursEleveTitre"));
            $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerTitre("Liste des cours (Optionnels)",1,"Titre"));
        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("DivListe"));

            $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("SubTitle"));

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerTitre("M'inscrire dans un cours supplémentaire",1,"Titre"));

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionel"));

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage0"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\langue.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage1"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve-> creerLabel("NomMatiere", "NomMatiere", " Cours d'anglais approfondies"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage3"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\plusCours.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionel"));

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage0"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\maths.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage1"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve-> creerLabel("NomMatiere", "NomMatiere", "Maths des chantiers"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage3"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\plusCours.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());


                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionel"));

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage0"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\progg.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage1"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve-> creerLabel("NomMatiere", "NomMatiere", "Programmation WEB"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage3"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\plusCours.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionel"));

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage0"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\cahier.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage1"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve-> creerLabel("NomMatiere", "NomMatiere", "Français"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage3"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\plusCours.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionel"));

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage0"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\Wallet.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage1"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve-> creerLabel("NomMatiere", "NomMatiere", "Latin"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("CoursBlockOptionelStage3"));
                        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerImage("images\plusCours.png"));
                    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

                $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

            
            $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());
    $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());
$ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

$ListeCoursEleve->ajouterComposantTab();
$ListeCoursEleve->creerFormulaire();
require_once 'vue/Eleves/vueCours.php';