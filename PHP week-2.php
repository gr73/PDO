
<?php

if (isset($_GET['submit'])) {

$gebruikersnaam = $_GET['gebruikersnaam'];
$wachtwoord = $_GET['wachtwoord'];
echo "gebruikersnaam: " . $gebruikersnaam;
echo "wachtwoord: " . $wachtwoord;




}

?>

<!DOCTYPE html>

<body>
<form method="GET">
<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam">
<input type="Password" name= "wachtwoord" placeholder="Wachtwoord">
<input type="submit" name="submit">
</form>
</body>

</html>
