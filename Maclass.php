<?php 
class Maclass
{
    //visible à l'exterieur de la class (pour l'attribue public)
    
   public string $attributPublic;
   public string $couleur = 'vert';
   public int $age = 54;
   public string $nom;
   public string $prenom;
   //en PHP les constante sont toujour en majuscule
   public const PI=3.14;
   public int $rayon;
   //un attribut peut être privée (il faut mettre un enderscore devant EX:private $_attributPrivate) 
    //quand il est privée il faut utiliser des méthode pour le récupérer
   private string $_attributPrivate;
   private string $_nom = 'Michel PLIK';


   public function __construct($nom,$prenom)
   {
       $this->nom = $nom;
       $this->prenom =$prenom;
   }

   public function affichePerson()
   {
    return $this->nom . ' ' . $this->prenom;
   }
}
//    //Méthode
//    //Méthode Public
//    //Methode 1
//    public function displayMethode($value)
//    {
//     //deux possibilité echo ou return
// // echo 'Jesuis une Methode qui affiche ' . $value;
// return $this->prenom . 'aime la couleur ' . $this->couleur .' '. $value;
//    }

//    //Methode 2
// public function calculCercleAire(): float|int
// {
//     //self permet (mot cles) de representer la class dans laquelle tu te trouve et va chercher les infos dans cette classe
//     //echo self::PI;
//     return self::PI * $this->rayon * $this->rayon;
// }
   
// public function calculCercleAire2(float|int $rayonParam) : float|int
// {
//     return self::PI * $rayonParam * $rayonParam;
// }
   
// }
// //création d'objet
// $obj = new Maclass();
// //quand on fait appel à un attribut on n'utilise pas le $
// // echo 'Couleur: ' . $obj->couleur . '<br>';
// // echo 'Age: '. $obj-> age . '<br>';
// //cela ne fonctionne pas car on ne peiut accéder à un attribut privée
// // echo 'Nom: '. $obj-> _nom . '<br>';
// $obj->prenom = 'Bill ';

// //Methode 1
// //si echo de pas mettre echo devant
// //si return mettre un echo devant
// echo $obj->displayMethode('');

// //Methode 2
// $obj->rayon = 5;
// echo $obj->calculCercleAire() . ' cm2 ';

// echo $obj->calculCercleAire2(5) . ' cm2';

$person = new MaClass('jon','doe');
echo $person->affichePerson();