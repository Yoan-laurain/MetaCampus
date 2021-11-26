<?php

$Questions = new Formulaire('post', 'index.php', 'fQuestions', 'fQuestions','multipart/form-data');

$Questions->ajouterComposantLigne($Questions->debutDiv("BodyMonCompte"));

$Questions->ajouterComposantLigne($Questions->debutDiv("ContentMonCompteTitre"));

        $Questions->ajouterComposantLigne($Questions->creerTitre("Duel d'Arithmétiques", 1, "Titre"));    

    $Questions->ajouterComposantLigne($Questions->finDiv());

$Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestions"));

    $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsJoueur"));
        $Questions->ajouterComposantLigne($Questions->debutDiv("ContentPersoDuels"));
            $Questions->ajouterComposantLigne($Questions->creerImage("images\Friend2.png"));
            $Questions->ajouterComposantLigne($Questions->br());
            $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "Jean Sarc"));
            $Questions->ajouterComposantLigne($Questions->br());
            $Questions->ajouterComposantLigne($Questions->creerLabel("", "","Points : 7 828"));
        $Questions->ajouterComposantLigne($Questions->finDiv());
    $Questions->ajouterComposantLigne($Questions->finDiv());

    $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsAsk"));

        $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsAskTitre"));
            $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "Combien fait 3+3 ?"));      
        $Questions->ajouterComposantLigne($Questions->finDiv());

        $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsReponsesFull"));

            $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsReponses"));
                $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "A : 7"));      
            $Questions->ajouterComposantLigne($Questions->finDiv());

            $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsReponses"));
                $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "B : 6"));      
            $Questions->ajouterComposantLigne($Questions->finDiv());

            $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsReponses"));
                $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "C : 12,33"));      
            $Questions->ajouterComposantLigne($Questions->finDiv());

            $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsReponses"));
                $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "D : La réponse D"));      
            $Questions->ajouterComposantLigne($Questions->finDiv());

        $Questions->ajouterComposantLigne($Questions->finDiv());

        $Questions->ajouterComposantLigne($Questions->debutDiv("progress"));
            $Questions->ajouterComposantLigne($Questions->debutDiv("progress-value"));
            $Questions->ajouterComposantLigne($Questions->finDiv());
        $Questions->ajouterComposantLigne($Questions->finDiv());

    $Questions->ajouterComposantLigne($Questions->finDiv());

    $Questions->ajouterComposantLigne($Questions->debutDiv("ContentQuestionsJoueur"));
        $Questions->ajouterComposantLigne($Questions->debutDiv("ContentPersoDuels"));
            $Questions->ajouterComposantLigne($Questions->creerImage("images\Sim.png"));
            $Questions->ajouterComposantLigne($Questions->br());
            $Questions->ajouterComposantLigne($Questions-> creerLabel("", "", "Simon Morin"));
            $Questions->ajouterComposantLigne($Questions->br());
            $Questions->ajouterComposantLigne($Questions->creerLabel("", "","Points : 999 999"));
            
        $Questions->ajouterComposantLigne($Questions->finDiv());
    $Questions->ajouterComposantLigne($Questions->finDiv());
  
$Questions->ajouterComposantLigne($Questions->finDiv());
$Questions->ajouterComposantLigne($Questions->finDiv());

$Questions->ajouterComposantTab();
$Questions->creerFormulaire();


require_once 'vue/Eleves/vueQuestions.php' ;