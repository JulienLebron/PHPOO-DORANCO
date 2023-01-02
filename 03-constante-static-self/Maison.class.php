<?php


class Maison 
{
    public $couleur = 'blanc';                  // propriété qui appartient à l'objet
    public static $espaceTerrain = '3000m2';    // propriété qui appartient à la classe
    private static $nbPiece = 7;                // propriété qui appartient à la classe
    private $nbPorte = 20;                      // propriété qui appartient à la classe
    const HAUTEUR = '10m';                      // propriété qui appartient à la classe

    public static function getNbPiece()         
    {
        // self représente la classe à l'intérieur d'elle-même
        return self::$nbPiece;
    }

    public function getNbPorte()
    {
        // $this représente l'objet en cours à l'intérieur de la classe
        return $this->nbPorte;
    }
}


$maison = new Maison;
echo "Couleur de la maison : " . $maison->couleur . '<hr>';
echo "Nombre de portes dans la maison : " . $maison->getNbPorte() . '<hr>';
echo "Terrain disponible  : " . Maison::$espaceTerrain . '<hr>';
echo "Hauteur de la maison : " . Maison::HAUTEUR . '<hr>'; 
echo "Nombre de piece(s) de la maison : " . Maison::getNbPiece() . '<hr>';

$maison2 = new Maison;
$maison2->couleur = 'Rouge';

/*
    $object->element // objet à l'extérieur de la classe
    $this->element   // objet à l'intérieur de la classe
    class::$element  // classe à l'extérieur de la classe
    self::element    // classe à l'intérieur de la classe

    static indique qu'un élément appartient à la classe dans le cadre d'une propriété la valeur est variable
    const indique qu'un élément appartient à la classe dans le cadre d'une constante la valeur est constante
    self représente la classe à l'interieur d'elle même
    $this représente l'objet en cours à l'intérieur de la classe
*/



