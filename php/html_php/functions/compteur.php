<?php

function ajouter_vue(){
    // verifier si le fichier compteur existe
    //Si oui incremente
    // Sinon creer le fichier avec 1
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur'; 
    $fichier_journalier =$fichier.'-'.date('Y-m-d');
    write_file($fichier);
    write_file($fichier_journalier);
    }

function write_file( $fic){
    if (file_exists($fic)){
        $compteur= (int)file_get_contents($fic);
        $compteur++;
        file_put_contents($fic,$compteur);
    }else{
        file_put_contents($fic,'1');
    }
}

function afficher_vue(){
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur'; 
    return file_get_contents($fichier); 
}