<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $a = 5;
    $b = 5.34;
    $c = "hello";
    $d = true;
    $e = NULL;
    $f = array("Volvo", "BMW", "Toyota");
    $g = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie6.php';
    $output = ob_get_clean();
    
    // Uproszczone sprawdzenie - szukamy kluczowych elementów
    if (strpos($output, "object(stdClass)") !== false && strpos($output, "\"scalar\"") !== false) {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        if (!empty($output)) {
            $komunikaty[] = "Otrzymano: " . substr($output, 0, 100) . "...";
        }
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>