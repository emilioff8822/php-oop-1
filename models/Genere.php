<?php

class Genere {
  public $generePrincipale;
  public $genereSecondario;


  function __construct($_generePrincipale, $_genereSecondario= null) {
      $this->generePrincipale = $_generePrincipale;
      $this->genereSecondario = $_genereSecondario;
  }


}
