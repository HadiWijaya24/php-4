<?php 

require 'animal.php';
require 'frog.php';
require 'ape.php';


$sheep = new Animal;
echo "<h3>Release 0</h3>";
echo $sheep->get_name();
echo "<br>". $sheep->get_legs();
echo "<br>".$sheep->get_cold_bloded();

echo "<br>";
$sungokong = new Ape;
echo "<h3>Release 1</h3>";
echo "<br>".$sungokong->get_name();
echo "<br>".$sungokong->get_legs();
echo "<br>".$sungokong->get_yell();

echo "<br>";
$kodok = new Frog;
echo "<br>";
echo "<br>".$kodok->get_name();
echo "<br>".$kodok->get_legs();
echo "<br>".$kodok->get_jump();

?>