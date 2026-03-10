<?php
$files = glob('PHP/tematy/*/testy/zadanie*.php');
foreach ($files as $f) {
    $c = file_get_contents($f);
    $new = str_replace(['✓', '✗'], '', $c);
    if ($new !== $c) {
        file_put_contents($f, $new);
    }
}
echo "Done\n";
