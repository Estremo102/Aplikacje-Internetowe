<?php
    $aa = 5;       // Integer
    $bb = 5.34;    // Float
    $cc = 0;       // Integer
    $dd = -1;      // Integer
    $ee = 0.1;     // Float
    $ff = "hello"; // String
    $gg = "";      // String
    $hh = true;    // Boolean
    $ii = NULL;    // NULL
    include __DIR__ . '/../rozwiazania/zadanie4.php';
    echo '<script>if(document.querySelector("#zadanie4 .solution-container").innerText.replaceAll("\\n", " ") === "bool(true) bool(true) bool(false) bool(true) bool(true) bool(true) bool(false) bool(true) bool(false)") { progress[3] = 1; }</script>';
?>