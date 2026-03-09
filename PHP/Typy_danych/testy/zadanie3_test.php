<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    ob_get_clean();
    
    if (!isset($palindromy)) {
        $komunikaty[] = "✗ Nie utworzono zmiennej \$palindromy";
    } else {
        $poprawne = true;
        
        if (!is_array($palindromy)) {
            $poprawne = false;
            $komunikaty[] = "✗ Zmienna \$palindromy nie jest tablicą";
        } else {
            if (count($palindromy) != 7) {
                $poprawne = false;
                $komunikaty[] = "✗ Tablica \$palindromy ma niepoprawną liczbę elementów: " . count($palindromy) . " (oczekiwano: 7)";
            } else {
                $expected = [
                    'KAMILśLIMAK',
                    'KAJAK',
                    'A KANAPA PANA KOTA',
                    'KOBYłA MA MAłY BOK',
                    'MOżE JUTRO TA DAMA SAMA DA TORTU JEżOM',
                    'AKTA GENERAłA MA MAłA RENEGATKA',
                    'ŁAPAł ZA KRAN, A KANARKA ZłAPAł'
                ];
                
                for ($i = 0; $i < 7; $i++) {
                    if ($palindromy[$i] != $expected[$i]) {
                        $poprawne = false;
                        $komunikaty[] = "✗ Element $i tablicy jest niepoprawny";
                    }
                }
                
                if ($poprawne) {
                    $komunikaty[] = "✓ Zadanie wykonane poprawnie";
                }
            }
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