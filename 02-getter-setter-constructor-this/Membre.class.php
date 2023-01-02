<?php

/*
    1- Créer un propriété private nom // 
    2- Créer le setter et le getter pour cette prorpiété nom // 
    3- Vérifier si le nom fourni est bien une chaine de caractère sinon erreur // 
    4- Tester (enregistrement et affichage) // 
*/

class Membre 
{
    private $prenom;
    private $nom;

    public function setPrenom($newPrenom)
    {
        if(is_string($newPrenom))
        {
            $this->prenom = $newPrenom;
        }
        else
        {
            trigger_error("Veuillez indiquer un prénom ne contenant que des lettres", E_USER_ERROR);
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($newNom)
    {
        if(is_string($newNom))
        {
            $this->nom = $newNom;
        }
        else
        {
            trigger_error("Veuillez indiquer un nom ne contenant que des lettres", E_USER_ERROR);
        }
    }

    public function getNom()
    {
        return $this->nom;
    }
}

$membre = new Membre;
echo '<pre>'; print_r(get_class_methods($membre)); echo '</pre>';
// $membre->prenom = 'Julien';
$membre->setPrenom('Julien');
$membre->setNom('Lebron');
echo 'Prénom contenu dans $membre : ' . $membre->getPrenom() . '<hr>';
echo 'Nom contenu dans $membre : ' . $membre->getNom() . '<hr>';

/* 
    Les getters / setters permettent de contrôler l'intégralité des données.
    Si nous devons contrôler les données saisie dans un formulaire, chaque donnée devra être transmise à une méthode qui permettra de contrôler la validité de la donnée.

    setter = contrôler les données
    getter = permet de voir / d'exploiter les données finale, données controlées.

    $this représente l'objet en cours à l'intérieur de la classe

    Mettre les propriétées en private permet d'éviter qu'elles ne soient modifiées dans le code, nous sommes obligés de passer par les setters.
*/


