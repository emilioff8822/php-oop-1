<?php

include_once __DIR__ .'/models/Genere.php';
include_once __DIR__ .'/models/Movie.php';

$onde = new Movie('Le onde del destino', 'Lars von Trier', 159, 'Zentropa', new Genere('Drammatico', 'Dogma95'));
$velluto = new Movie('Velluto Blu', 'David Lynch', 120, 'Filmauro',new Genere ('Drammatico', 'Thriller'));
$eyes = new Movie('Eyes Wide Shut', 'Stanley kubrick', 160, 'Warner Bros', new Genere ('Drammatico' , 'Mystery'));

var_dump($onde->getFullInfo());
var_dump($velluto->getFullInfo());
var_dump($eyes->getFullInfo());

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
