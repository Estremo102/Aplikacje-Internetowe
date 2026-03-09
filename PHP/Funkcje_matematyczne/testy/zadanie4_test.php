<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $a = 3;
    $b = 4;
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie4.php';
    ob_get_clean();
    
    if (isset($c)) {
        if ($c == 5) {
            $a = 8;
            $b = 15;
            
            ob_start();
            include __DIR__ . '/../rozwiazania/zadanie4.php';
            ob_get_clean();
            
            if ($c == 17) {
                $poprawne = true;
                $komunikaty[] = "✓ Zadanie wykonane poprawnie";
                $komunikaty[] = "Test 1 (3, 4): c = 5 ✓";
                $komunikaty[] = "Test 2 (8, 15): c = 17 ✓";
            } else {
                $komunikaty[] = "✗ Test 2 niepoprawny (8, 15)";
                $komunikaty[] = "Oczekiwane: c = 17, Otrzymane: c = " . $c;
            }
        } else {
            $komunikaty[] = "✗ Test 1 niepoprawny (3, 4)";
            $komunikaty[] = "Oczekiwane: c = 5, Otrzymane: c = " . $c;
        }
    } else {
        $komunikaty[] = "✗ Nie utworzono zmiennej \$c";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>