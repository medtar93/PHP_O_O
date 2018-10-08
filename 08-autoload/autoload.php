<?php
//08-autoload
    //autoload.php

function inclusion_automatique($className){
    //$className contiendra le nom de la classe instanciée
    //exemple : Membre

    require 'classe' . $className . '.php';
    //  require 'classMembre.php'7

    echo 'On passe dans l\'autoload <br>';
    echo 'on fait un require "classe'. $className.'php";<br>';
}









//------------------------
spl_autoload_register('inclusion_automatique');
//--------------------------

/* 
    spl_autoload_register:
        -Est une fonction super pratique.
        -Elle va s'éxécuter à chaque fois que l'interpreteur voit passer le mot 'new'
        -Elle va éxécuter une fonction dont on lui a transmis le nom en argument.
        -Elle va apporter en argument de notre fonction, le mot qu'elle trouve après 'new' (sous entendu le nom de la classe)
*/