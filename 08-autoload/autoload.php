<?php


abstract class Autoload
{
    public static function inclusionAutomatique($nomDeLaClasse)
    {
        require_once($nomDeLaClasse . '.class.php');
        echo "On passe dans la méthode inclusionAutomatique ! <br>";
        echo "require_once($nomDeLaClasse.class.php)<br>";
    }
}
spl_autoload_register(array('Autoload', 'inclusionAutomatique'));
/*
    spl_autoload_register : permet d'exécuter une fonction lorsque l'interpréteur voit passer le mot clé "new" dans le code. 
    Le nom à coté du mot clé 'new' est récupérer et transmis automatiquement à la méthode inclusionAutomatique()

    L'autoload permet d'automatiser l'inclusion des fichiers contenant les classes
    Plus besoin de faire 50 require pour importer 50 classes, c'est l'autoload qui se charge de le faire à notre place
*/


$a = new A;
$d = new D;

