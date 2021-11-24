<?php

$EnCoursDev = new Formulaire('post', 'index.php', 'fEnCoursDev', 'fEnCoursDev','multipart/form-data');

$EnCoursDev->ajouterComposantLigne($EnCoursDev->debutDiv("EnCoursDevContent"));
    $EnCoursDev->ajouterComposantLigne($EnCoursDev->creerLabel("EnCoursDev","EnCoursDev","En cours de developpement"));

$EnCoursDev->ajouterComposantLigne($EnCoursDev->finDiv());

$EnCoursDev->ajouterComposantTab();
$EnCoursDev->creerFormulaire();

require_once 'vue/professeur/vueGererCoursProf.php' ;