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


    
    if (isset($_GET['product_code'])) {
        $product_code = $_GET['product_code'];
        $stmt = $pdo->prepare("DELETE FROM producten WHERE product_code = :product_code");
        $stmt->bindParam(':product_code', $product_code);
        $stmt->execute();
        echo "Product met product_code $product_code is verwijderd.";
    } else {
        echo "Geen product_code opgegeven.";
    }
$pdo = null;
?>
