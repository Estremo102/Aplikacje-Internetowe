<?php
    $correct = true;

    if (!isset($wynik)) {
        echo 'Nie utworzono zmiennej wynik';
        $correct = false;
    } else {
        if($wynik != 'Ma-źd')
        {
            echo 'Niepoprawny wynik';
            $correct = false;
        }
    }

    if ($correct) {
        echo 'Zadanie wykonane poprawnie' . "<Script>this.document.querySelectorAll('nav ul li')[3].classList.add('done');</Script>";
    }
?>