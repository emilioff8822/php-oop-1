<?php

class Movie {
    public $titolo;
    public $regista;
    public $durata = 120;
    public $produttore;

    function __construct($_titolo, $_regista, $_durata, $_produttore) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->durata = $_durata;
        $this->produttore = $_produttore;   
    }

    public function getFullInfo() {
        return 'Titolo: ' . $this->titolo . ' - Regista: ' . $this->regista . '  - Durata: ' . $this->durata . ' minuti' . ' - Produttore: ' . $this->produttore;
    }
}

$onde = new Movie('Le onde del destino', 'Lars von Trier', 159, 'Zentropa');
$velluto = new Movie('Velluto Blu', 'David Lynch', 120, 'Filmauro');
$eyes = new Movie('Eyes Wide Shut', 'Stanley kubrick', 160, 'Warner Bros');

var_dump($onde->getFullInfo());

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>PHP OOP</title>
  </head>
  <body>
    <h1>ciao</h1>
  </body>
</html>
