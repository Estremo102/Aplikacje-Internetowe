<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - wprowadzenie
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>PHP wprowadzenie</h1>
    </header>
    <div class="navbox">
        <nav>
            <ul>
                <li><a href="#zadanie1">Zadanie 1</a></li>
                <li><a href="#zadanie2">Zadanie 2</a></li>
                <li><a href="#zadanie3">Zadanie 3</a></li>
                <li><a href="#zadanie4">Zadanie 4</a></li>
                <li><a href="#zadanie5">Zadanie 5</a></li>
                <li><a href="#zadanie6">Zadanie 6</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <aside>
            <div>
                Postaraj się wykonać zadania samodzielnie bez pomocy AI. Jeśli nad czymś utkniesz śmiało zadawaj pytania, a spróbuję Cię naprowadzić na rozwiązanie. <br><br>
                Rozwiązania zadań umieść w &ltdiv class="solution-container"> &lt/div&gt a następnie odśwież stronę by zobaczyć czy zadanie wykonano poprawnie. <br><br>
                Poprawnie wykonane zadania spowodują zaznaczenie na zielono przycisku nawigacyjnego.
            </div>
        </aside>
        <main>
            <section id="zadanie1">
                <h2>Zadanie 1</h2>
                <p>Początek każdego kursu programowania jest w zwyczaju zaczynać od Hello world!. Aby napisać kod php należy użyć znacznika <pre><code>&lt?php tu umieszczasz kod php ?&gt</code></pre></p>
                <p>Wyświetlanie danych na stronie odbywa się za pomocą komendy <pre><code>echo "treść do wyświetlenia";</code></pre></p>
                <p>Twoim zadaniem jest wyświetlenie na stronie tekstu "Hello world!" używając do tego języka PHP.</p>
                <div class="solution-container">

                </div>
            </section>
            <section id="zadanie2">
                <h2>Zadanie 2</h2>
                <p>komentarze w php można tworzyć na kilka sposobów <pre><code>&lt?php
    #Komentarz jednolinijkowy
    //Komentarz jednolinijkowy
    /*Komentarz
    wielolinijkowy*/
    echo /*21 + */ 3 * 7; //Komentarz jednolinijkowy można umieszczać również na końcu linii, a wielolinijkowy w dowolnym miejscu kodu
?&gt</code></pre></p>
                <p>Twoim zadaniem jest dodanie lub usunięcie komentarzy w poniższym kodzie</p>
                <div class="solution-container">
                    <?php 
                        echo "Zakomentuj linijkę kodu która wyświetla ten tekst. za pomocą komentarza jednolinijkowego.<br>";
                        echo "Tą linijkę kodu również zakomentuj używając komentarza wielolinijkowego. Użyj jednak innego stylu komentarza niż w poprzednim przypadku.<br>";
                        //Poniżej znajduje się zakomentowany kod w bloku wielolinijkowym, odkomentuj go
                        /*
                        $wynik = 3 * 7;
                        echo $wynik . " = 3 • 7";
                        */
                    ?>
                </div>
            </section>
            <section id="zadanie3">
                <h2>Zadanie 3</h2>
                <p>W PHP zmienne zaczynają się od znaku $. W przeciwieństwie do innych języków programowania, PHP nie posiada polecenia deklarowania zmiennej. Jest ona tworzona w momencie pierwszego przypisania jej wartości. Operatorem przypisania jest znak =</p>
                <pre><code>$x = 2;
$y = "Jan";</code></pre>
                <p>Zmienna zaczyna się od znaku $, po którym następuje jej nazwa. Nazwa zmiennej musi zaczynać się od litery lub znaku podkreślenia. Nazwa zmiennej nie może zaczynać się od cyfry. Nazwa zmiennej może zawierać wyłącznie znaki alfanumeryczne i znaki podkreślenia (A-z, 0-9 i _). W nazwach zmiennych rozróżniana jest wielkość liter ($age i $AGE to dwie różne zmienne).</p>
                <p>PHP to język dynamicznie typowany. W powyższym przykładzie zauważ, że nie musieliśmy podawać PHP typu danych zmiennej. PHP automatycznie przypisuje typ danych do zmiennej, w zależności od jej wartości. Ponieważ typy danych nie są definiowane w ścisłym sensie, można wykonywać takie czynności, jak dodawanie ciągu znaków do liczby całkowitej bez powodowania błędu.</p>
                <p>W tym zadaniu porównaj wyniki działania 2 + "2" - 2 w językach PHP i js. zadeklaruj zmienne x  = 2 i y = "2", a następnie wyświetl wynik x + y - 2.</p>
                <div class="solution-container">
                    <script>
                        //zmienne deklarujemy za pomocą słowa kluczowego let, const lub var
                        //aby napisać wynik na stronie można użyć funkcji document.write();
                    </script>
                    <?php
                    ?>
            </section>
            <section id="zadanie4">
                <h2>Zadanie 4</h2>
                <p>PHP obsługuje następujące typy danych:
                    <ul>
                        <li>String - ciąg znaków, np. "Hello world!"</li>
                        <li>Integer - liczba całkowita, np. 42</li>
                        <li>Float - liczba zmiennoprzecinkowa, np. 3.14</li>
                        <li>Boolean - wartość logiczna, true lub false</li>
                        <li>Array - tablica, np. array("jabłko", "banan", "gruszka")</li>
                        <li>Object - obiekt, np. instancja klasy</li>
                        <li>NULL - specjalna wartość oznaczająca brak wartości</li>
                        <li>Resource - specjalna zmienna, zawierająca referencję do zasobu zewnętrznego. </li>
                    </ul>
                </p>
                <p>Aby uzyskać typ danych zmiennej, należy użyć funkcji var_dump().</p>
                <pre><code>&lt?php
    var_dump(5) . "&ltbr&gt";
    var_dump("John") . "&ltbr&gt";
    var_dump(3.14) . "&ltbr&gt";
    var_dump(true) . "&ltbr&gt";
    var_dump([2, 3, 56]) . "&ltbr&gt";
    var_dump(NULL) . "&ltbr&gt";
?&gt</code></pre>
                <p>wynik działania powyższego kodu:</p>
                <pre><?php
                        var_dump(5) . "<br>";
                        var_dump("John") . "<br>";
                        var_dump(3.14) . "<br>";
                        var_dump(true) . "<br>";
                        var_dump([2, 3, 56]) . "<br>";
                        var_dump(NULL) . "<br>";
                    ?>
                </pre>
                <p>Twoim zadaniem jest wyświetlenie typu danych tablicy która będzie zawierać wszystkie zmienne z powyższego przykładu z pominięciem tablicy</p>
                <div class="solution-container">
                    <?php
                    ?>
                </div>
            </section>
            <section id="zadanie5">
                <h2>Zadanie 5</h2>
                
            </section>
            <section id="zadanie6">
                <h2>Zadanie 6</h2>
                
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; 2025</p>
    </footer>
</body>
</html>