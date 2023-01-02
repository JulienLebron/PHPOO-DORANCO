<?php

class Panier
{
    public $nbProduit;
    protected $prenom;
    private $mdp;

    public function ajouterArticle()
    {
        return 'L\'article à bien été ajouté<hr>';
    }
    protected function retirerArticle()
    {
        return 'L\'article à bien été retirer<hr>';
    }
    private function affichageArticle()
    {
        return 'Voici les articles<hr>';
    }
}

$panier = new Panier;
echo '<pre>'; print_r($panier); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($panier)); echo '</pre>';

$panier->nbProduit = 10;
echo '<pre>'; print_r($panier); echo '</pre>';
echo 'Nombre de produit(s) : ' . $panier->nbProduit . '<hr>';

echo $panier->ajouterArticle();
// echo $panier->retirerArticle(); ⚠ Ne fonctionne pas car la méthode est protected
// echo $panier->affichageArticle(); ⚠ Ne fonctionne pas car la méthode est private


/*
    Une class est un plan de construction, un modèle qui nous permet de regrouper des données, des informations sur un même sujet.
    Pour exploiter ce qui est déclaré dans la classe, nous devons créer une instance, un objet issu de la classe grâce au mot clé "new"

    Niveau de visibilité : 
        - public : accessible de partout, dans la classe, dans les classes héritières et depuis l'extérieur de la classe (depuis l'objet)
        - protected : accessible dans la classe ou cela à été déclaré et aussi dans les classes héritières
        - private : accessible uniquement dans la classe ou cela à été déclaré
    
    Les niveaux de visibilité permettent de protéger les données des classes, et de ne pas pouvoir injecter n'importe quelle données directement dans les propriétées et les méthodes des classes.
*/