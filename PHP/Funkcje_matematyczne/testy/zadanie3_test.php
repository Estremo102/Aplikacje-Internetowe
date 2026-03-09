<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    $user_a = 76;
    $user_b = 9;
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    $output = ob_get_clean();
    
    if (isset($roznica_wieku)) {
        if (abs($user_a - $user_b) == $roznica_wieku) {
            $user_a = 21;
            $user_b = 37;
            
            ob_start();
            include __DIR__ . '/../rozwiazania/zadanie3.php';
            $output2 = ob_get_clean();
            
            if (abs($user_a - $user_b) == $roznica_wieku) {
                $poprawne = true;
                $komunikaty[] = "✓ Zadanie wykonane poprawnie";
            } else {
                $komunikaty[] = "✗ Funkcja abs() nie została użyta prawidłowo";
            }
        } else {
            $komunikaty[] = "✗ Wynik niepoprawny dla pierwszego testu (76, 9)";
            $komunikaty[] = "Oczekiwane: " . abs($user_a - $user_b) . ", Otrzymane: " . $roznica_wieku;
        }
    } else {
        $komunikaty[] = "✗ Nie utworzono zmiennej \$roznica_wieku";
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>