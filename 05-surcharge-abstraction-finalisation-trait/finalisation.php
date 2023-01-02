<?php

final class Application
{
    public function lancementApplication()
    {
        return "L'application se lance correctement";
    }
}

$application = new Application;
echo $application->lancementApplication();

// class Test extends Application 
// {
//     public function lancement()
//     {
//         return "Je me lance";
//     }
// }

// 🛑 Cela donne une erreur, car on ne peut pas hérité d'une classe 'final'

class Application2
{
    final public function lancementApplication()
    {
        return "L'application 2 se lance correctement";
    }
}

class Extension extends Application2
{
    // public function lancementApplication() redéfinition
    // {

    // }

    // ⚠ On hérite bien de la méthode lancementApplication()
    // Je ne peux pas la surcharger car elle est final dans la classe mère

}

$ext = new Extension;
echo '<pre>'; print_r(get_class_methods($ext)); echo '</pre>';


/*
    Une classe "final" ne peut pas être héritée
    Une classe "final" reste instanciable
    Une méthode "final" peut être présente dans une classe normale
    L'intérêt de mettre le mot clé "final" sur une méthode est de vérrouiller afin d'empêcher toute sous-méthode de la redéfinir et de modifier son comportement
    (quand nous vonlons être sur que le comportement d'une méthode soit préservé durant l'héritage)

*/

