<?php


namespace Commerce1;
class Commande
{
    public $nbCommande = 10;
}

$commande = new Commande;

namespace Commerce2;
class Commande
{
    public $nbCommande = 10;
}

namespace Commerce3;
class Panier 
{
    public $nbCommande = 2;
}

// echo __NAMESPACE__;
class Produit
{
    public $nbProduit = 580;
}



