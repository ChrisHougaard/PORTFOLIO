<?php

//Hey! Nice that you're reading my script.
//This program is made for the Waukee Apex program.
//Made by Christian Hougaard-Enevoldsen

$name = readline("Hey. What's your name?\n \n");
echo "\n \n Hey $name\n \n";
while ($figurename !== "exit")  {
  echo "I can calculate\n \n";
  echo "+----------------------------------------------------+\n";
  echo "|-Rectangle                                          |\n";
  echo "|-Triangle                                           |\n";
  echo "|-Circle                                             |\n";
  echo "|-Box                                                |\n";
  echo "|Make sure it is all written in small caps.          |\n";
  echo "|Type exit to exit this program                      |\n";
  echo "|If you want a representation of the shapes, type rep|\n";
  echo "|You cannot repeat commands, or the program will die.|\n";
  echo "+----------------------------------------------------+\n\n";
$figurename = readline($name . ", What shape do you want me to calculate? \n \n");

if ($figurename == "rectangle") {
  function rectangle($rectanglewlength, $rectanglewidth) {
  return $rectanglelength * $rectanglewidth;
}
$rectanglelength = readline("What is the lenght of the rectangle?\n\n");
echo "The length of the rectangle is : $rectanglelength  \n \n";
$rectanglewidth = readline("\n \nWhat is the width of the rectangle?\n\n" );
echo "The width of the rectangle is: " . $rectanglewidth;
echo "\n\nThe area of your rectangle is :" . $rectanglewidth * $rectanglelength ;
echo "\n \n";
}elseif($figurename == "circle") {
function circle($pi, $radius) {
  return $pi * $radius;
}
$pi = M_PI;
$radius = readline("What is the diameter of the circle?\n\n");
echo "The area of the circle is :" . $radius * $radius * $pi;
echo "\n \n";
}elseif ($figurename == "box") {
function box($boxwidth, $boxlength, $boxheight) {
  return $boxwidth * $boxlength * $boxheight;
}


$boxwidth = readline("\nWhat is the width of the box? \n \n");
echo "\n The number you choose was: " . $boxwidth;
$boxlength = readline("\nWhat is the length of the box? \n \n");
echo "\n The number you choose was " . $boxlength;
$boxheight = readline("\nWhat is the height of the box? \n \n");


echo "The area of the box is : " . $boxwidth * $boxlength * $boxheight ;
echo "\n \n";
var_dump((unset) $boxwidth, $boxlength, $boxheight);
}elseif ($figurename == "triangle") {
  function triangle($triangleheight, $trianglebaseline, $triangledivision){
  return $triangleheight * $trianglebaseline * $triangledivision;
}
$triangleheight = readline("\nWhat is the height of the triangle? \n \n");
echo "\nThe height of the triangle is : $triangleheight";
$trianglebaseline = readline("\nWhat is the baseline of the triangle? \n \n");
echo "\n The baseline of the triangle is $trianglebaseline\n \n";
$triangledivision = 0.5;

echo "The area of the triangle is : " . $triangleheight * $trianglebaseline * $triangledivision;
echo "\n \n";
}elseif ($figurename == "rep") {
  echo "\n\n - Box \n ";
  echo "In the box,you have to find the the height, width, and length\n\n";
 echo"     +-----------------+\n";
echo "    /                 /|\n";
echo "   /________________ / | <- heigth\n";
echo "  |                 |  |\n";
echo "  |                 | / <- width \n";
echo "  +-----------------+/ <- length \n";
echo "\n---------------------------\n\n";
echo "This is a triangle\n\n";
echo "In the triangle, you gotta find the baseline (the horizontal line)\n";
echo "And you gotta find the height of the triangle (the vertical line)\n\n";
echo "      /|\ \n";
echo "     / | \ \n";
echo "    /  |  \ \n";
echo "   /   |   \ \n";
echo "  /    | <- \ \n";
echo " /_____|_____\ <-\n";
echo "\n---------------------------\n\n";
echo "This is a rectangle\n";
echo "In the rectangle you have to find the length of both sides\n\n";
echo "+-------------------+ <- the length of the rectangle\n";
echo "|                   | <- the width of the rectangle\n";
echo "|                   |\n";
echo "+-------------------+\n";

echo "\n---------------------------\n\n";
echo "\n\nThis is a circle\n\n";
echo "On the circle, you have to find the radius\n\n";
echo "    ---  \n";
echo "  -  | <-- \n";
echo " -   X    - \n";
echo "  -      - \n ";
echo "  ----- \n";
echo "\n---------------------------\n\n";
}
else {
  echo "Shape invalid. Please choose one of these shapes instead : \n Rectangle \n Triangle \n Circle \n Box ";
}
}

echo "\n \n Thank you for using my calculator. Hope you enjoyed it.\n \n";


echo "{o,o}\n";
echo "|)__)\n";
echo "-##--\n";

echo "This owl is happy that you used my program.\n This owl thanks you.\n \n";

?>
