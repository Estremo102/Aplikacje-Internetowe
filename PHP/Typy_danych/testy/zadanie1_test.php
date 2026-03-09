<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie1.php';
    $output = ob_get_clean();
    
    // Sprawdzenie, czy zmienne zostały zadeklarowane
    if (isset($string) && isset($integer) && isset($float) && isset($boolean) && isset($array)) {
        $poprawne = true;
        $komunikaty[] = "✓ Wszystkie zmienne zadeklarowane";
        
        if (!is_string($string)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$string jest niepoprawnego typu";
        }
        if (!is_int($integer)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$integer jest niepoprawnego typu";
        }
        if (!is_float($float)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$float jest niepoprawnego typu";
        }
        if (!is_bool($boolean)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$boolean jest niepoprawnego typu";
        }
        if (!is_array($array)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$array jest niepoprawnego typu";
        }
        
        if ($poprawne) {
            $komunikaty[] = "✓ Zadanie wykonane poprawnie";
        }
    } else {
        $komunikaty[] = "✗ Nie wszystkie zmienne zostały zadeklarowane";
        if (!isset($string)) $komunikaty[] = "  - brakuje \$string";
        if (!isset($integer)) $komunikaty[] = "  - brakuje \$integer";
        if (!isset($float)) $komunikaty[] = "  - brakuje \$float";
        if (!isset($boolean)) $komunikaty[] = "  - brakuje \$boolean";
        if (!isset($array)) $komunikaty[] = "  - brakuje \$array";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>