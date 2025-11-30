<?php 
    $correct = true;
    if(!isset($int, $f, $inf, $nan, $number))
    {
        echo "Nie wszystkie zmienne zostały zadeklarowane.";
        $correct = false;
    }
    else
    {
        if (!is_int($int))
        {
            echo "zmienna int jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_float($f))
        {
            echo "zmienna f jest niepoprawnego typu <br>";
            $correct = false;
        }
        if (!is_infinite($inf))
        {
            echo "zmienna inf nie jest nieskończona <br>";
            $correct = false;
        }
        if (!is_nan($nan))
        {
            echo "zmienna nan jest niepoprawnego typu <br>";
            $correct = false;
        }
        if(!is_numeric($number) || is_float($number) || is_int($number))
        {
            echo "zmienna number jest niepoprawnego typu <br>";
            $correct = false;
        }
    }
    if($correct)
    {
        echo "Zadanie wykonane poprawnie" . "<Script>this.document.querySelectorAll('nav ul li')[5].classList.add('done');</Script>";        
    }
?>