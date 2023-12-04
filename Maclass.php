<?php 
class Maclass
{
    //visible à l'exterieur de la class (pour l'attribue public)
    
   public $attribut;
   public $couleur = 'vert';
   public $age = 54;
   //un attribut peut être privée (il faut mettre un enderscore devant EX:private $_attributPrivate) 
    //quand il est privée il faut utiliser des méthode pour le récupérer
   private $_attributPrivate;
   private $_nom = 'Michel PLIK';

   
}
//création d'objet
$obj = new Maclass();
//quand on fait appel à un attribut on n'utilise pas le $
echo 'Couleur: ' . $obj->couleur . '<br>';
echo 'Age: '. $obj-> age . '<br>';
//cela ne fonctionne pas car on ne peiut accéder à un attribut privée
// echo 'Nom: '. $obj-> _nom . '<br>';


