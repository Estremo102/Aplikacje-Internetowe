<?php
header('Content-Type: application/json; charset=utf-8');

$i = intval($_GET['i'] ?? 0);
$src = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['src'] ?? '');

$base = __DIR__ . "/tematy/$src";

// 1. Dane wejściowe
$dane = "$base/dane/zadanie{$i}.php";
if (file_exists($dane)) {
    include $dane;
}

// 2. Kod użytkownika
ob_start();
$rozw = "$base/rozwiazania/zadanie{$i}.php";
if (file_exists($rozw)) {
    include $rozw;
}
$output = ob_get_clean();

// 3. Logika testowa
$test = "$base/testy/zadanie{$i}.php";
if (!file_exists($test)) {
    echo json_encode([
        'poprawne' => false,
        'komunikaty' => ["Brak pliku testowego"],
        'output' => $output
    ]);
    exit;
}

$wynik = include $test;

// 4. Dodaj output użytkownika
$wynik['output'] = $output;

echo json_encode($wynik, JSON_UNESCAPED_UNICODE);