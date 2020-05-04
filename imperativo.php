<?php


$color1=(object)["remera"=>"roja", "gorra"=>"Azul"];
$color2=(object)["remera"=>"negra", "gorra"=>"blanca"];



function Ropa($color){

    echo "<p> Ropa de color Remera: $color->remera, Gorra: $color->gorra</p>";
}

Ropa($color1);
echo'<br><br>';
Ropa($color2);















?>