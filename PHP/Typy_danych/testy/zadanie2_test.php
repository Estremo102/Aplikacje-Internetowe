<?php 
    $correct = true;
    if(!isset($len, $words, $pos))
    {
        echo "Nie wszystkie zmienne zostały zadeklarowane.";
        $correct = false;
    }
    else
    {
        if($len != 168)
        {
            $correct = false;
            echo '<br>Zmienna $len ma niepoprawną wartość, upewnij się, że sprawdzasz długość tekstu bez cudzysłowia';
        }
        if($words != 29)
        {
            $correct = false;
            echo '<br>Zmienna $words ma niepoprawną wartość, niepoprawna ilość słów';
        }
        if($pos != 72)
        {
            $correct = false;
            echo '<br>Zmienna $pos ma niepoprawną wartość';
        }
    }
    if($correct)
    {
        echo "<Script>
            if(document.querySelector('#zadanie2 .solution-container').innerText.includes('168 29 72'))
            {
                this.document.querySelectorAll('nav ul li')[1].classList.add('done');
                document.write('<br>Zadanie wykonane poprawnie');
            }else{
                document.write('<br>Dane nie zostały wyświetlone poprawnie');
            }
        </Script>";        
    }
?>