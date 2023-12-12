<?php
include 'MaClass.php';
include 'MaClassHerite.php';

// $obj = new MaClass();
// //quand on fait appel à un attribut on n'utilise pas le $
// // echo 'Couleur: ' . $obj->couleur . '<br>';
// // echo 'Age: '. $obj-> age . '<br>';
// // //cela ne fonctionne pas car on ne peiut accéder à un attribut privée
// // // echo 'Nom: '. $obj-> _nom . '<br>';
// //$obj->prenom = ' Bill';

// // //Methode 1
// // //si echo de pas mettre echo devant
// // //si return mettre un echo devant
// // echo $obj->displayMethode('');

// // //Methode 2
// // $obj->rayon = 5;
// // echo $obj->calculCercleAire() . ' cm2 ';

// // echo $obj->calculCercleAire2(5) . ' cm2';

// echo MaClass::$varStatic;
// echo MaClass::staticFunc();

//Appel la class MaClassHerite
//$objHerite = new MaClassHerite();

//echo $objHerite->getCouleur();

//echo $objHerite->getVariableProtected();

// $obj2 = new MaClass;
// //ici exemple de ce qui ne fonctionne pas 
// // echo $obj2->varProtected;
// //modification des infos dans la variable
// $obj2->setNom('Micheline PILOCKE');
// echo $obj2->getNom();

// $personne2 = new MaClassHerite();
// $personne2->setVariableProtected('Une chaine de caractere');
// echo $personne2->getVariableProtected();