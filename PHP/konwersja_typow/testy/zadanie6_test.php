<?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    $f = array("Volvo", "BMW", "Toyota"); // tablica indeksowana (klucze numeryczne od 0)
    $g = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // tablica asocjacyjna (klucze tekstowe/nazwane)

    include __DIR__ . '/../rozwiazania/zadanie6.php';
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