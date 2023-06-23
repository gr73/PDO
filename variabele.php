<?php
session_start(); 

if (isset($_SESSION['naam']) && isset($_SESSION['email'])) {
    $naam = $_SESSION['naam'];
    $email = $_SESSION['email'];

    echo "Naam: " . $naam . "<br>";
    echo "Email: " . $email . "<br>";
} else {
    echo "sessievariabelen zijn niet leesbaar";
}

$hostname = "localhost:3307";
$username = "root";
$password = ""; 
$database = "winkel"; 


$pdo = new mysqli($hostname, $username, $password, $database);

if ($pdo->connect_error) {
    die("Connectie mislukt: " . $pdo->connect_error);
}

$sql = "SELECT * FROM producten";

$result = $pdo->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Omschrijving: " . $row['omschrijving'] . "<br>";
        echo "Prijs per stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Productcode: " . $row['product_code'] . "<br>";
        echo "Productnaam: " . $row['product_naam'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Geen gegevens gevonden.";
}
$pdo->close();
?>