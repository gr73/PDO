<?php
//Deel 1
$tijd = date("H:i");
if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

//Deel 2
function berekenGemiddelde($getal1, $getal2)
{
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}
berekenGemiddelde(4, 8); 

//Deel 3
function dagenTotEindeJaar()
{
    $huidigeDatum = date_create();
    $eindeJaar = date_create(date("Y") . "-12-31");
    $verschil = date_diff($huidigeDatum, $eindeJaar);
    $dagen = $verschil->format("%a");
    echo "Aantal dagen tot het einde van het jaar: " . $dagen;
}
dagenTotEindeJaar(); 

//Deel4
function berekenTotaleLengte($strings)
{
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}
$progameertalen = array("PHP", "HTML", "JAVASCRIPT", "JAVA", "C#", "LUA");
echo "Totale lengte van de strings: " . berekenTotaleLengte($progameertalen);
?>

