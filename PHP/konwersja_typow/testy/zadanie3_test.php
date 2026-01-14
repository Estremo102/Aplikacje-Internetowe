<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 km"; // String
    $d = "km 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;
    include __DIR__ . '/../rozwiazania/zadanie3.php';
    
    'float(5) float(5.34) float(25) float(0) float(0) float(1) float(0) ';
?>