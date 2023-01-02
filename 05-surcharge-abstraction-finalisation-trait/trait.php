<?php


trait Tpanier
{
    public $nbProduit = 5;

    public function affichageProduits()
    {
        return "Affichage des produits";
    }
}

trait Tmembre
{
    public function affichageMembre()
    {
        return "Affichage des membres";
    }
}

class Site
{
    use Tpanier, Tmembre;
}

$site = new Site;
echo '<pre>'; print_r($site); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($site)); echo '</pre>';

echo $site->affichageMembre() . '<hr>';
echo $site->affichageProduits() . '<hr>';

/*
    Les traits ont été inventés pour repousser les limites de l'héritage.
    Une class ne peut héritée que d'une seule classe.
    En revanche elle peut importer plusieurs traits en même temps.
    Un trait c'est un regroupement de méthodes et de propriétés pouvant être importés dans une classe.
*/