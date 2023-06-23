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

   
   
   
    $stmt = $pdo->prepare("SELECT * FROM producten ORDER BY product_naam ASC");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    echo "<h2>Producten</h2>";
    echo "<ul>";
    foreach ($result as $row) {
        echo "<li>".$row['product_naam']."</li>";
    }
    echo "</ul>";
    echo '<a href="delete.php?product_code=2">Verwijder product 2</a>';

$pdo = null;
?>
