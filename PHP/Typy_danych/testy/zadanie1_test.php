<?php 
include __DIR__.'\..\rozwiazania\zadanie1.php';
    $correct = true;
    $progress = 0;
    if(!isset($string, $integer, $float, $boolean, $array))
    {
        echo "Nie wszystkie zmienne zostały zadeklarowane.";
        $correct = false;
    }
    else
    {
        if (!is_string($string))
        {
            echo "zmienna string jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_int($integer))
        {
            echo "zmienna integer jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_float($float))
        {
            echo "zmienna float jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_bool($boolean))
        {
            echo "zmienna boolean jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_array($array))
        {
            echo "zmienna array jest niepoprawnego typu <br>";
            $correct = false;
        }
    }
    if($correct)
    {
        $progress++;
        echo "Zadanie wykonane poprawnie" . "<Script>this.document.querySelectorAll('nav ul li')[0].classList.add('done');</Script>";        
    }
?>