<?php

$BlockChain = new Formulaire('post', 'index.php', 'fBlockChain', 'fBlockChain','multipart/form-data');

/* 
 Fait ton taff ici
 Inspire toi du code de la page accueil 
 Hésite pas à me demander de l'aide 
 Tous les composants (bouton,input etc..) sont dans lib/formulaire -> tu trouvera ton bonheur
 CSS ligne 312
 Bonne chance 
*/ 

$BlockChain->ajouterComposantTab();
$BlockChain->creerFormulaire();

require_once 'vue/vueBlockChain.php' ;