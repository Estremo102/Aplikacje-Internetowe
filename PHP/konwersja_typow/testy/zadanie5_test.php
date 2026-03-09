<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];

try {
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
    }
    
    $a = 5;
    $b = 5.34;
    $c = "hello";
    $d = true;
    $e = NULL;
    $f = new Car("red", "Volvo");
    
    ob_start();
    include __DIR__ . '/../rozwiazania/zadanie5.php';
    $output = ob_get_clean();
    
    // Uproszczone sprawdzenie - szukamy kluczowych elementów
    if (strpos($output, "array(1)") !== false && strpos($output, "int(5)") !== false) {
        $poprawne = true;
        $komunikaty[] = "✓ Zadanie wykonane poprawnie";
    } else {
        $komunikaty[] = "✗ Wynik niepoprawny";
        if (!empty($output)) {
            $komunikaty[] = "Otrzymano: " . substr($output, 0, 100) . "...";
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