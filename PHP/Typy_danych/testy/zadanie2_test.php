<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie2.php';
    ob_get_clean();
    
    if (!isset($len, $words, $pos)) {
        $komunikaty[] = "✗ Nie wszystkie zmienne zostały zadeklarowane";
        if (!isset($len)) $komunikaty[] = "  - brakuje \$len";
        if (!isset($words)) $komunikaty[] = "  - brakuje \$words";
        if (!isset($pos)) $komunikaty[] = "  - brakuje \$pos";
    } else {
        $poprawne = true;
        
        if ($len != 168) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$len ma niepoprawną wartość: $len (oczekiwano: 168)";
        }
        if ($words != 29) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$words ma niepoprawną wartość: $words (oczekiwano: 29)";
        }
        if ($pos != 72) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$pos ma niepoprawną wartość: $pos (oczekiwano: 72)";
        }
        
        if ($poprawne) {
            $komunikaty[] = "✓ Zadanie wykonane poprawnie";
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