<?php
//Deel1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = 'boot';
foreach ($myArray as $value) {
echo $value . "\n";}

//Deel2
$aantalElementen = count($myArray);
echo "Het array heeft " . $aantalElementen . " elementen.";
$myArray[] = 'boot';
$aantalElementen = count($myArray);
echo "Het array heeft " . $aantalElementen . " elementen.";

//Deel3
#Bar
#4
#Toyota
#Cars
# Laatste element van array

//Deel4A
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);
echo "Gemiddelde is: " . $gemiddelde;

//Deel4B
//Ik denk dat het beter is om de regels samen te voegen, omdat het dan makkelijker te lezen is en is dan makkelijker te begrijpen.

?>