<?php

abstract class Joueur
{
    protected $ageJoueur;

    public function setAgeJoueur($age)
    {
        $this->ageJoueur = $age;
    }

    public function getAgeJoueur()
    {
        return $this->ageJoueur;
    }

    public function seConnecter()
    {
        if($this->getAgeJoueur() < $this->etreMajeur())
        {
            return "🛑 Vous avez " . $this->getAgeJoueur() . " ans<br>💬 Vous devez être majeur pour jouer à ce jeux ! <br>💬 Age requis : " . $this->etreMajeur() . " ans";
        }
        else
        {
            return "✅ Vous êtes connecter au serveur de jeux !";
        }
    }

    abstract public function etreMajeur();
    abstract public function devise();
}

class JoueurFr extends Joueur 
{
    public function etreMajeur()
    {
        return 18;
    }

    public function devise()
    {
        return '€';
    }
}

class JoueurUsa extends Joueur 
{
    public function etreMajeur()
    {
        return 21;
    }
    
    public function devise()
    {
        return '$';
    }
}

// $joueur = new Joueur; // ⚠ Une classe abstraite n'est pas instanciable
$joueurFr = new JoueurFr;
echo '<pre>'; print_r($joueurFr); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($joueurFr)); echo '</pre>';

$joueurFr->setAgeJoueur(20);
echo $joueurFr->seConnecter() . '<hr>';

$joueurUsa = new JoueurUsa;
$joueurUsa->setAgeJoueur(20);
echo $joueurUsa->seConnecter() . '<hr>';


/*
    Une class abstraite n'est pas instanciable
    Les méthodes abstraites n'ont pas de contenu (elles sont dite no-body)
    Lorsque l'on hérite de méthodes abstraites, nous sommes obligé de les redéfinir
    Pour avoir des méthodes abstraites il est nécessaire que la classe qui les contient soit elle-même abstraite
    Une classe abstraite peut contenir des méthodes normale

    Le développeur qui écrit une classe abstraite est au coeur de l'application.
    Il va obliger les autres développeur à redéfinir la méthode etreMajeur() et devise().
    Il impose une bonne contrainte.
*/