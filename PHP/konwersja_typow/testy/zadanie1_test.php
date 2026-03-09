<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $x = 98765.4321;
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    ob_get_clean();
    
    if (!isset($x_converted)) {
        $komunikaty[] = "✗ Zmienna \$x_converted nie istnieje";
    } else {
        if ($x_converted == intval($x)) {
            $poprawne = true;
            $komunikaty[] = "✓ Zadanie wykonane poprawnie";
        } else {
            $komunikaty[] = "✗ Błąd konwersji. Oczekiwano: " . intval($x) . ", otrzymano: " . $x_converted;
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