<?php


class A 
{
    public function calcul()
    {
        return 100;
    }
}

class B extends A 
{
    public function calcul() // redéfinition de méthode
    {
        $nb = parent::calcul();
        // ici on stock le résultat de la méthode initiale avec parent::ma_methode()


        if($nb <= 100)
        {
            return "$nb est inférieur ou égal à 100<hr>";
        }
        else
        {
            return "$nb est supérieur à 100<hr>";
        }
    }

    public function autrecalcul()
    {
        $variable = parent::calcul();
    }
}

$b = new B;
echo '<pre>'; print_r(get_class_methods($b)); echo '</pre>';
echo $b->calcul() . '<hr>';

/*
    surcharge - override : une rédéfinition + surcharge cela permet de prendre en compte le comportement de la méthode d'origine afin d'y ajouter un traitement supplémentaire. C'est une amélioration de la méthode d'origine.
*/