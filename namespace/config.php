<?php

spl_autoload_register(function($nameClasse){

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR ."$nameClasse".".php";


    if (file_exists($filename)){

        require_once("$filename");
    }


});


?>