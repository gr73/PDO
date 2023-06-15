<?php
$host = 'localhost:3307';
$db = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected to " . $db;
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_POST['submit'])) {

    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $sql = "UPDATE producten SET product_naam = :product_naam, prijs_per_stuk = :prijs_per_stuk, omschrijving = :omschrijving WHERE product_code     = 2";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":product_naam", $product_naam);
    $stmt->bindParam(":prijs_per_stuk", $prijs_per_stuk);
    $stmt->bindParam(":omschrijving", $omschrijving);
    
    try {
        $stmt->execute();
        echo "Product succesvol bijgewerkt.";
    } catch (PDOException $e) {
        echo "Fout bij het bijwerken van het product: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product bijwerken</title>
</head>
<body>
    <h2>Product bijwerken</h2>
    <form method="POST" action="">
        <label for="product_naam">Productnaam:</label><br>
        <input type="text" id="product_naam" name="product_naam" required><br><br>
        
        <label for="prijs_per_stuk">Prijs per stuk:</label><br>
        <input type="text" id="prijs_per_stuk" name="prijs_per_stuk" required><br><br>
        
        <label for="omschrijving">Omschrijving:</label><br>
        <textarea id="omschrijving" name="omschrijving" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Bijwerken">
    </form>
</body>
</html>
