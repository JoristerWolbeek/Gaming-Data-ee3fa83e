<?php
$games = array
(
array("Rayman","platformer",39.49),
array("Persona 5","RPG",60),
array("Rocket League","Hotwheels soccer", 20.49),
array("Overwatch","FPS", 39.99)
);
echo var_dump($games);
$temp =array();
$temp2 = array();


foreach($games as $games){
    array_push($temp, $games[2]);
    array_push($temp2, strlen($games[1]));
}
echo("de gemiddelde prijs is: ". array_sum($temp)/count($temp).PHP_EOL);
echo("de gemiddelde lengte van een titel is: ". array_sum($temp2)/count($temp2));
