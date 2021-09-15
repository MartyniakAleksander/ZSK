<?php

echo "zsk<br>";
echo "zsk<br>";

$name="Janusz";
echo 'Imię: $name <br>'; //imie:$name
echo "Imię: $name<br>"; //imie:Janusz

echo "text1"."text2<br>";
echo "text1","text2<br>";

//typy danych
//całkowity

$całkowita=10; //nie zapisujemy nazwy zmienych z polskimi znakami
$bin=01011; //11
$oct=010; //8
$hex=0x10; //16

//zmiennoprzecinkowe
$x=10.5;
//logiczne
$prawda=true; //wyswietli 1
$falsz=false; // wyswietli nic
echo $prawda;

echo <<< ETYKIETA
  <hr>Imię:$name<br>
  Poznań<br>
ETYKIETA;

$text = <<< ETYKIETA
  <hr>Imię:$name<br>
  Poznań<br>
ETYKIETA;
echo $text;

echo <<< 'ETYKIETA'
  <hr>Imię:$name<br>
  Poznań<br>
ETYKIETA;

echo "Nazwa zmiennej"


?>
