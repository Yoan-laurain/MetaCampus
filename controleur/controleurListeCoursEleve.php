<?php

$ListeCoursEleve = new Formulaire('post', 'index.php', 'fListEleve', 'ListEleve','multipart/form-data');

$ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("topListeCoursEleve"));

        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->debutDiv("TopTitle"));

            $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->creerTitre("Liste des cours (Optionnels)",1,"Titre"));

        $ListeCoursEleve->ajouterComposantLigne($ListeCoursEleve->finDiv());

$ListeCoursEleve->ajouterComposantTab();
$ListeCoursEleve->creerFormulaire();
require_once 'vue/vueListeCoursEleve.php';