<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie4.php';
    ob_get_clean();
    
    if (!isset($wynik)) {
        $komunikaty[] = "✗ Nie utworzono zmiennej \$wynik";
    } else {
        if ($wynik != 'Ma-źd') {
            $komunikaty[] = "✗ Zmienna \$wynik ma niepoprawną wartość: \"$wynik\" (oczekiwano: \"Ma-źd\")";
        } else {
            $poprawne = true;
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