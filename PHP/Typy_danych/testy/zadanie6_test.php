<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie6.php';
    ob_get_clean();
    
    if (!isset($int, $f, $inf, $nan, $number)) {
        $komunikaty[] = "✗ Nie wszystkie zmienne zostały zadeklarowane";
        if (!isset($int)) $komunikaty[] = "  - brakuje \$int";
        if (!isset($f)) $komunikaty[] = "  - brakuje \$f";
        if (!isset($inf)) $komunikaty[] = "  - brakuje \$inf";
        if (!isset($nan)) $komunikaty[] = "  - brakuje \$nan";
        if (!isset($number)) $komunikaty[] = "  - brakuje \$number";
    } else {
        $poprawne = true;
        
        if (!is_int($int)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$int nie jest typu int";
        }
        if (!is_float($f)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$f nie jest typu float";
        }
        if (!is_infinite($inf)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$inf nie jest nieskończona";
        }
        if (!is_nan($nan)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$nan nie jest NaN";
        }
        if (!is_numeric($number) || is_float($number) || is_int($number)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$number jest niepoprawnego typu (powinna być string numeryczny)";
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