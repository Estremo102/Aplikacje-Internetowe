<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    $f = array("Volvo", "BMW", "Toyota"); // tablica indeksowana (klucze numeryczne od 0)
    $g = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // tablica asocjacyjna (klucze tekstowe/nazwane)
    include __DIR__ . '/../rozwiazania/zadanie6.php';
    echo '<script>if(document.querySelector("#zadanie6 .solution-container").innerText.replaceAll("\\n", " ") === \'object(stdClass)#1 (1) { ["scalar"]=> int(5) } object(stdClass)#6 (1) { ["scalar"]=> float(5.34) } object(stdClass)#5 (1) { ["scalar"]=> string(5) "hello" } object(stdClass)#4 (1) { ["scalar"]=> bool(true) } object(stdClass)#3 (0) { } object(stdClass)#2 (3) { ["0"]=> string(5) "Volvo" ["1"]=> string(3) "BMW" ["2"]=> string(6) "Toyota" } object(stdClass)#7 (3) { ["Peter"]=> string(2) "35" ["Ben"]=> string(2) "37" ["Joe"]=> string(2) "43" }\') { progress[5] = 1; }</script>';
    echo "<Script>
    let p = 0;
    for(let i = 0; i < progress.length; i++) {
        if(progress[i] === 1) {
            this.document.querySelectorAll('nav ul li')[i].classList.add('done');
            p++;
        }
    }
    this.document.querySelector('.navbox nav progress').value = p;
    </script>";
?>