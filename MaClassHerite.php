<?php

//extends permet d'hérité (ex: dans ce cas hériter de Maclass)
class MaClassHerite extends MaClassTest
{
  
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getVariableProtected()
    {
        return $this->varProtected;
    }

    public function setVariableProtected($value)
    {
        $this->varProtected = $value;
    }
}

