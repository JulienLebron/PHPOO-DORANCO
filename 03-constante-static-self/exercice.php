<?php

/*********************
---------------------       
|    Vehicule		|     
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence() |
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence() |
|donnerEssence()	|
---------------------


    1. Créer les classes (Véhicule / Pompe) // 
    2. Création d'un véhicule (objet) //
    3. Attribuer un nombre de litre d'essence au véhicule : 5 L //
    4. Afficher le nombre de litre d'essence dans le véhicule // 
    5. Création d'une pompe à essence //
    6. Attribuer un nombre de litre d'essence dans la pompe : 800L //
    7. Afficher le nombre de litre d'essence dans la pompe // 
    8. La pompe donne de l'essence à la voiture et fait le plein
    (après le passage à la pompe : 50L)
    (utiliser l'injection de dépendance) // 
    9. Afficher le nombre de litre d'essence restant dans la pompe //
    10. Afficher le nombre de litre d'essence dans la voiture // 
    11. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence //

    BONUS : 
    12. Créer une classe Camion citerne et faire le plein de la pompe lorsqu'elle est vide
    13. Améliorer la classe voiture et la classe pompe en créeant une propriété "réservoir"


    


*/


class Vehicule 
{
    private $litresEssence;
    private $reservoirMax;
    
    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }
    
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
    
    public function setReservoirMax($litres)
    {
        $this->reservoirMax = $litres;
    }
    
    public function getReservoirMax()
    {
        return $this->reservoirMax;
    }
}

class Pompe 
{
    private $litresEssence;
    private $reservoirMax;

    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function setReservoirMax($litres)
    {
        $this->reservoirMax = $litres;
    }
    
    public function getReservoirMax()
    {
        return $this->reservoirMax;
    }

    public function donnerEssence(Vehicule $v)
    {
        // $v représente l'objet véhicule reçu en paramètre
        // ici j'appel le setter de la pompe (j'appel le getter de la pompe - (50 - jappel le getter du véhicule))
        $this->setLitresEssence($this->getLitresEssence() - ($v->getReservoirMax() - $v->getLitresEssence()));
        //                              800               -  (50 - 5)
        $v->setLitresEssence($v->getLitresEssence() + ($v->getReservoirMax() - $v->getLitresEssence()));
        //                            5             +  (50 - 5)
    }
}

class Citerne
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function donnerEssence(Pompe $p)
    {
        if($p->getLitresEssence() < 100 && $this->getLitresEssence() > 0)
        {
            $this->setLitresEssence($this->getLitresEssence() - ($p->getReservoirMax() - $p->getLitresEssence()));
            //                          745             +     (800 - 745)
            $p->setLitresEssence($p->getLitresEssence() + ($p->getReservoirMax() - $p->getLitresEssence()));
        }
        else
        {
            echo "LE plein de la pompe n'a pas pu être fait car le camion citerne est en rupture d'essence !";
        }
        //                          1500                  -    (800 - 745)
    }
}


$vehicule = new Vehicule;
$vehicule->setLitresEssence(5);
$vehicule->setReservoirMax(60);
echo "Le véhicule possède : " . $vehicule->getLitresEssence() . " litres d'essence<hr>";

$pompe = new Pompe;
$pompe->setLitresEssence(200);
$pompe->setReservoirMax(800);
echo "La pompe à essence possède : " . $pompe->getLitresEssence() . " litres d'essence<hr>";

$pompe->donnerEssence($vehicule);
echo 'Après ravitaillement, le véhicule possède : ' . $vehicule->getLitresEssence() . " litres d'essence<hr>";
echo 'Après ravitaillement, la pompe possède : ' . $pompe->getLitresEssence() . " litres d'essence<hr>";

$citerne = new Citerne;
$citerne->setLitresEssence(1500);
$citerne->donnerEssence($pompe);
echo 'Après ravitaillement, la pompe possède : ' . $pompe->getLitresEssence() . " litres d'essence<hr>";
echo 'Après ravitaillement, la citerne possède : ' . $citerne->getLitresEssence() . " litres d'essence<hr>";

