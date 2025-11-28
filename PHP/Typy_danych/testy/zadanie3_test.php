<?php
    $correct = true;

    if (!isset($palindromy)) {
        echo 'Nie utworzono zmiennej palindromy';
        $correct = false;
    } else {
        if (!is_array($palindromy)) {
            echo 'zmienna palindromy nie jest tablicą <br>';
            $correct = false;
        } else {
            if (count($palindromy) != 7) {
                echo 'Tablica palindromy ma niepoprawną liczbę elementów (oczekiwano 7).<br>';
                $correct = false;
            } else {
                if( $palindromy[0] != 'KAMILśLIMAK' ||
                    $palindromy[1] != 'KAJAK' ||
                    $palindromy[2] != 'A KANAPA PANA KOTA' ||
                    $palindromy[3] != 'KOBYłA MA MAłY BOK' ||
                    $palindromy[4] != 'MOżE JUTRO TA DAMA SAMA DA TORTU JEżOM' ||
                    $palindromy[5] != 'AKTA GENERAłA MA MAłA RENEGATKA' ||
                    $palindromy[6] != 'ŁAPAł ZA KRAN, A KANARKA ZłAPAł')
                {
                    echo 'Dane w tablicy są niepoprawne';
                    $correct = false;
                }
            }
        }
    }

    if ($correct) {
        echo 'Zadanie wykonane poprawnie' . "<Script>this.document.querySelectorAll('nav ul li')[2].classList.add('done');</Script>";
    }
?>