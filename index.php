<?php


// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */

// TODO votre code ici.

$var = 0;
if (empty($var)){
    echo "vide car vaut 0";
}
else{
    echo "pas vide";
}


/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.
unset($eraseMe);
echo "<br><br>";
/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.
$array = array("pomme", "poire", "banane");
var_dump($array);

echo "<br>";

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.

print_r($array);
echo "<br>";


/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
$doNotExists = "doNotExists";
// TODO Votre code ici.
if(isset($doNotExists, $tab) === true){
    echo "Existe";
}
else{
    echo "Existe pas";
}


/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.

$booleen = true;
$nbrEntier = 25;
$nbrFloat = 36.245;
$string = "Carotte";

function maFunct ($monparam){
    if (is_bool($monparam)){
        echo "Ma variable est de type : booléen";
    }
    elseif (is_int($monparam)){
        echo "Ma varaible est de type : nombre à entier";
    }
    elseif (is_float($monparam)){
        echo "Ma variable est de type : nombre à virgule";
    }
    elseif (is_string($monparam)){
        echo "Ma varaible est de type : chaine de caractère";
    }
    echo "<br>";
}

maFunct($booleen);
maFunct($nbrEntier);
maFunct($nbrFloat);
maFunct($string);