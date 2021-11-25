<?php

$ListeElevesInscrit = new Formulaire('post', 'index.php', 'fListEleveInscrit', 'ListEleveInscrit','multipart/form-data');

$ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("ContenuGeneral"));
    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->debutDiv("topListeCoursEleve"));
    
    
    $ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

$ListeElevesInscrit->ajouterComposantLigne($ListeElevesInscrit->finDiv());

$ListeElevesInscrit->ajouterComposantTab();
$ListeElevesInscrit->creerFormulaire();
require_once 'vue/professeur/vueListeElevesInscrit.php';