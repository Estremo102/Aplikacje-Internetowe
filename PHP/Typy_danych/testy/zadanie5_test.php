<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie5.php';
    ob_get_clean();
    
    if (!isset($pi, $miasto)) {
        $komunikaty[] = "✗ Nie wszystkie zmienne zostały zadeklarowane";
        if (!isset($pi)) $komunikaty[] = "  - brakuje \$pi";
        if (!isset($miasto)) $komunikaty[] = "  - brakuje \$miasto";
    } else {
        $poprawne = true;
        
        if ($pi != 3.14) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$pi ma niepoprawną wartość: $pi (oczekiwano: 3.14)";
        }
        if ($miasto != 'Zakopane') {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$miasto ma niepoprawną wartość: $miasto (oczekiwano: Zakopane)";
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