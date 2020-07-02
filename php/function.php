<?php
/*
function bonjour($nom = null){
    if ($nom !== null)
    return 'Bonjour '.$nom. "\n";
    else return "Bonjour \n";
}

$salutation = bonjour('Laisco');
//bonjour('Marion');
echo $salutation;
*/

function repondre_oui_non($phrase){
    while(true){

        $reponse = readline($phrase . " - (o)ui/(n)on \t");
        if($reponse === 'o'){
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
}

function demander_creneau($phrase = 'Entrez un creneau'){
    echo $phrase . "\n";
    while(true){
        $ouverture = readline("Heure d'ouverture: ");
        if($ouverture >= 0 && $ouverture<= 23) {
            break;
        }
    }
    while(true){
        $fermeture = readline("Heure de Fermeture: ");
        if( $fermeture >=0 && $fermeture <=23 && $fermeture > $ouverture){
            break;
        }
    }

    return [$ouverture,$fermeture];
}

/*$resultat = repondre_oui_non('Voulez vous continuer??');

var_dump($resultat);*/

$creneau = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer un creneau');

var_dump($creneau,$creneau2);


/**
 * Faire une fonction qui demande plusieurs creneau
 * pour ensuite les stocker dans un tableau et de les retourner
 * utiliser la fonction repondre oui ou non pour gerer la fin d'execution
 */

?>