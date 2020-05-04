<?php


class color {


    public $remera;
    public $gorra;



public function Ropa(){

    echo"<p> Ropa de color Remera: $this->remera, Gorra: $this->gorra</p>";
}



}



$a= new color();
$a -> remera ="roja";
$a -> gorra = "Azul";
$a -> Ropa();

$b= new color();
$b -> remera ="Negro";
$b -> gorra = "Amarrillito";
$b -> Ropa();




?>