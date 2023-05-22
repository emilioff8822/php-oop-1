<?php

class Genere {
  public $generePrincipale;
  public $genereSecondario;


  function __construct($_generePrincipale, $_genereSecondario) {
      $this->generePrincipale = $_generePrincipale;
      $this->genereSecondario = $_genereSecondario;
  }


}
