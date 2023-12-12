<?php
class MaClass
{
    //visible à l'exterieur de la class (pour l'attribue public)
    //Variable Public
    public string $attributPublic;
    public string $couleur = 'vert ';
    public int $age = 54;
    public string $prenom;
    //en PHP les constante sont toujour en majuscule
    public const PI = 3.14;
    public int $rayon;
    //un attribut peut être privée (il faut mettre un enderscore devant EX:private $_attributPrivate) 
    //quand il est privée il faut utiliser des méthode pour le récupérer
    //Variable Privée
    private string $_attributPrivate;
    private string $_nom = 'Michel PLIK';
    //V ariable Static
    static string $varStatic = 'Je suis une variable statique ';

    //une variable protected permet d'accés directement depuis l'index avec un echo ex(echo $objHerite->varProtected;)
    protected string $varProtected = 'Je suis une variable protected';


    //ce met généralement en haut de la classe 
    //il ne peut y avoir qu'une fonction __construct par classe
    //    public function __construct()
    //    //ici . __CLASS__ . représenta la classe utiliser
    //    {
    //     //echo 'Je suis une  methode magique ! ? ' . __CLASS__ . '<br>';
    //    }

    //    public function __destruct()
    //    //ici . __CLASS__ . représenta la classe utiliser
    //    {
    //     //echo 'Je suis une  methode magique de la  ! ? ' . __CLASS__ . '<br>';
    //    }


    //Méthode
    //Méthode Public
    //Methode 1
    //    public function displayMethode($value)
    //    {
    //     //deux possibilité echo ou return
    // // echo 'Jesuis une Methode qui affiche ' . $value;
    // return $this->prenom . 'aime la couleur ' . $this->couleur .' '. $value;
    //    }

    //Methode 2
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
    //fonction static et methode statiue 
    // static function staticFunc()
    // {
    //     return 'Methode statique qui affiche une variable statique ' . self::$varStatic;
    // }

    //Methode pour afficher les variable privée 
    //Methode 1
    //appel d'un get à l'interieur de la variable pour l'appeler après
    public function getNom()
    {
        return $this->_nom;
    }
    //Methode 2
    //pour changer la variable
    public function setNom($nom)
    {
        //on récupére la variable privée 
        //on crer une fonction setNom pour pouvoir changer sa valeur
        $this->_nom = $nom;
    }
}
