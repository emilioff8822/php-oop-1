<?php

class Movie {
  public $titolo;
  public $regista;
  public $durata = 120;
  public $produttore;
  public $genere;

  function __construct($_titolo, $_regista, $_durata, $_produttore, $_genere = null) {
      $this->titolo = $_titolo;
      $this->regista = $_regista;
      $this->durata = $_durata;
      $this->produttore = $_produttore;
      $this->genere = $_genere;   
  }

  public function getGenere() {
    return $this->genere->generePrincipale ?? $this->genere->genereSecondario ?? 'N/A';
  }

  public function getFullInfo() {

      $genereInfo = $this->genere ? ' - Genere: ' . $this->getGenere() : '';
      
      return 'Titolo: ' . $this->titolo . ' - Regista: ' . $this->regista . ' - Durata: ' . $this->durata . ' minuti' . ' - Produttore: ' . $this->produttore . $genereInfo;
  }
}
