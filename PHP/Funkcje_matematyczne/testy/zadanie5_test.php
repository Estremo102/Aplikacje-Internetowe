<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    
    $liczba = 21.37;
    include __DIR__ . '/../rozwiazania/zadanie5.php';
    echo '<br>';
    
    $liczba = 6.7;
    include __DIR__ . '/../rozwiazania/zadanie5.php';
    
    $output = ob_get_clean();
    $output_normalized = str_replace(["\n", "\r"], " ", $output);
    $output_normalized = trim(preg_replace('/\s+/', ' ', $output_normalized));
    
    if ($output_normalized === "Liczba 21.37 jest zaokrąglana w dół Liczba 6.7 jest zaokrąglana w górę") {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        $komunikaty[] = "Otrzymano: " . $output_normalized;
        $komunikaty[] = "Oczekiwane: Liczba 21.37 jest zaokrąglana w dół Liczba 6.7 jest zaokrąglana w górę";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>