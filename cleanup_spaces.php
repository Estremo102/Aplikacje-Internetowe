<?php
$files = glob('PHP/tematy/*/testy/zadanie*.php');
foreach ($files as $f) {
    $c = file_get_contents($f);
    // remove leading spaces inside quoted strings
    $new = preg_replace('/"\s+/', '"', $c);
    if ($new !== $c) {
        file_put_contents($f, $new);
    }
}
echo "Spaces cleaned\n";
