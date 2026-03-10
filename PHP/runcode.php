<?php
exec("$php $src\\testy\\zadanie${i}_test.php", $lines, $exitCode);
$output = implode("\n", $lines);
switch ($exitCode) {
    case 0:
        echo $output;
        break;
    case 255:
        echo "<span class=\"error\">BŁĄD KRYTYCZNY 255:</span> " . $output;
        break;
    default:
        echo "NIEZNANY BŁĄD $exitCode: " . $output;
        break;
}
?>