<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        ob_start();
        include __DIR__ . '/../zadanie1.php';
        ob_get_clean();
        
        $poprawne = true;
        $komunikaty[] = "✓ Nawiązano połączenie z bazą danych";
        $conn = null;
    } catch(PDOException $e) {
        $komunikaty[] = "✗ Nie udało się nawiązać połączenia: " . $e->getMessage();
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>