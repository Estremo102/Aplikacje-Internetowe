<?php 
include __DIR__.'\..\rozwiazania\zadanie5.php';
    $correct = true;
    if(!isset($pi, $miasto))
    {
        echo "Nie wszystkie zmienne zostały zadeklarowane.";
        $correct = false;
    }
    else
    {
        if($pi != 3.14)
        {
            $correct = false;
            echo '<br>Zmienna $pi ma niepoprawną wartość.';
        }
        if($miasto != 'Zakopane')
        {
            $correct = false;
            echo '<br>Zmienna $miasto ma niepoprawną wartość';
        }
    }
    if($correct)
    {
        $progress++;
        echo "<Script>
            if(document.querySelector('#zadanie5 .solution-container').innerText.includes('Zmienna \$pi wynosi 3.14, zmienna \$miasto ma przypisaną wartość \"Zakopane\".'))
            {
                this.document.querySelectorAll('nav ul li')[4].classList.add('done');
                document.write('<br>Zadanie wykonane poprawnie');
            }else{
                document.write('<br>Dane nie zostały wyświetlone poprawnie');
            }
        </Script>";        
    }
?>