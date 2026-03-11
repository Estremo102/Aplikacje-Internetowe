<?php
$poprawne = strtolower($output) == "hello world!";
$komunikaty = $poprawne ? ['Zadanie wykonane'] : ['Zadanie niewykonane'];
return [
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
];


?>


