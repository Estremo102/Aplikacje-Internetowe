<?php include $_SERVER['DOCUMENT_ROOT'].'/php/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navbox.php'; ?>
<div class="content">
    <aside>
        <ul>

        </ul>
    </aside>
    <main>
        <section id="zadanie1">
            <h2>Zadanie 1</h2>
            <h3>Rodzaje typów danych</h3>
            <p>PHP obsługuje następujące typy danych:
                <ul>
                    <li>
                        String - ciąg znaków, np. "Hello world!" <br>
                        Ciąg może być dowolnym tekstem w cudzysłowie. Możesz użyć pojedynczych lub podwójnych cudzysłowów
                    </li>
                    <li>
                        Integer - liczba całkowita, to liczba niedziesiętna z zakresu od -2 147 483 648 do 2 147 483 647.
                        <ul>
                            Zasady dotyczące liczb całkowitych:
                            <li>Liczba całkowita musi mieć co najmniej jedną cyfrę.</li>
                            <li>Liczba całkowita nie może mieć przecinka dziesiętnego.</li>
                            <li>Liczba całkowita może być dodatnia lub ujemna.</li>
                            <li>Liczby całkowite można określać w notacji: dziesiętnej (o podstawie 10), szesnastkowej (o podstawie 16), ósemkowej (o podstawie 8) lub binarnej (o podstawie 2).</li>
                        </ul>
                    </li>
                    <li>Float - liczba zmiennoprzecinkowa, np. 3.14 to liczba z przecinkiem dziesiętnym lub liczba w formie wykładniczej.</li>
                    <li>Boolean - wartość logiczna, true lub false</li>
                    <li>Array - tablica, przechowuje wiele wartości w jednej zmiennej np. ["Jabłko", "Banan", "Gruszka"]</li>
                    <li>Object - obiekt, np. instancja klasy</li>
                    <li>NULL - specjalna wartość oznaczająca brak wartości</li>
                    <li>Resource - specjalna zmienna, zawierająca referencję do zasobu zewnętrznego. </li>
                </ul>
            </p>
            <p>Twoim zadaniem jest utworzenie zmiennych o nazwach string, integer, float, boolean i array oraz przypisanie im danych odpowiedniego typu</p>
            <div class="solution-container">
                <!-- Tutaj umieść rozwiązanie -->
                <?php include 'testy/zadanie1_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie2">
            <h2>Zadanie 2</h2>
            <h3>Ciągi znaków</h3>
            <p>Ciągi znaków w PHP są ujęte w podwójne lub pojedyncze cudzysłowy. W PHP istnieje duża różnica między cudzysłowami podwójnymi a pojedynczymi. Podwójne cudzysłowy przetwarzają znaki specjalne, a pojedyncze nie.</p>
            <p>Możesz używać podwójnych lub pojedynczych cudzysłowów, ale powinieneś być świadomy różnic między nimi. Ciągi znaków w podwójnych cudzysłowach wykonują operacje na znakach specjalnych. Np. gdy w ciągu znajduje się zmienna, funkcja zwraca wartość tej zmiennej:</p>
            <pre><code>$cena = 21;
echo "Produkt kosztuje $cena złotych";</code></pre>
            <p>Ciągi znaków w pojedynczych cudzysłowach nie wykonują takich akcji, zwracają ciąg znaków tak, jak został napisany, z nazwą zmiennej. Dzięki temu jest wydajniejszy od podwójnego cudzysłowia.</p>
            <p>
                Funkcja PHP strlen('tekst') zwraca długość ciągu znaków. <br>
                Funkcja PHP str_word_count('tekst') zlicza liczbę słów w ciągu znaków. <br>
                Funkcja PHP strpos('tekst', 'poszukiwany tekst') wyszukuje określony tekst w ciągu znaków. <br>
                W przypadku znalezienia dopasowania funkcja zwraca pozycję znaku pierwszego dopasowania. W przypadku braku dopasowania zwróci FALSE.
            </p>
            <p>
                Twoim zadaniem jest sprawdzenie długość tekstu, ilość słów oraz pozycję słowa "że" w tekście: "Nie wiadomo czy ta historia jest prawdziwa. Sam Herodot zastrzega się, że usłyszał ją od  egipskich kapłanów, ale jej echo do dziś pobrzmiewa w nazwie geometria." <br>
                Wyniki zapisz kolejno w zmiennych: len, words, pos. Wypisz zmienne oddzielone spacjami
            </p>
            <div class="solution-container">
                <!-- Tutaj umieść rozwiązanie -->
            <?php include 'testy/zadanie2_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie3">
            <h2>Zadanie 3</h2>
            <h3>Edycja ciągów znaków</h3>
            <p>PHP ma zestaw wbudowanych funkcji, których można używać do modyfikacji ciągów znaków.</p>
            <p>
                <ul>
                    <li>Funkcja strtoupper('tekst') zwraca ciąg znaków zapisany wielkimi literami.</li>
                    <li>Funkcja strtolower('TEKST') zwraca ciąg znaków zapisany małymi literami.</li>
                    <li>Funkcja str_replace('stary tekst', 'nowy tekst', 'tekst do zmiany') zastępuje niektóre znaki w ciągu znaków innymi znakami.</li>
                    <li>Funkcja strrev('kajak') odwraca ciąg znaków.</li>
                    <li>Funkcja trim(' tekst ') usuwa wszelkie odstępy na początku lub na końcu tekstu. <br> (Spacja to odstęp przed i/lub po tekście, który bardzo często chcemy usunąć.)</li>
                    <li>Funkcja explode('separator', 'tekst') dzieli ciąg znaków na tablicę.</li>
                </ul>
            </p>
            <p>Dana jest zmienna input. Znajdują sięw niej palindromy oddzielone średnikami. Twoim zadaniem jest zmodyfikowanie jej tak by była napisana z samych wielkich liter, bez spacji na końcu i początku tekstu, a następnie utwórz zmienną palindromy w której znajdzie się tablica z osobnymi palindromami.</p>
            <div class="solution-container">
                <?php 
                    $input = ' KaMiLśLiMaK;kajak;a kanapa pana kota;Kobyła ma mały bok;Może jutro ta dama sama da tortu jeżom;Akta generała ma mała renegatka;Łapał za kran, a kanarka złapał ';
                    //Tutaj umieść rozwiązanie
                ?>
            <?php include 'testy/zadanie3_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie4">
            <h2>Zadanie 4</h2>
            <h3>łączenie i wydzielanie ciągów znaków</h3>
            <p>Aby połączyć dwa ciągi znaków, możesz użyć operatora . lub interpolować zmienne wewnątrz podwójnego cudzysłowia "" wewnątrz którego wstawisz zmienne przykładowo "$x $y" lub $x . ' ' . $y</p>
            <p>Z kolei funkcja substr() służy do wyodrębniania części ciągu znaków. wydzielanie ciągu znaków można zrobić na kilka sposobów</p>
            <p>
                <ul>
                    <li>
                        substr(string, start, długość); <br>
                        np: substr($x, 6, 4); <br>
                        Pierwsza wartość to tekst, druga to litera od której zaczyna się wydzielany fragment tekstu, a trzecia określa długość wydzielanego ciągu znaków.
                    </li>
                    <li>
                        substr(string, start); <br>
                        substr($x, 6); <br>
                        Pominięcie trzeciej wartości spowoduje wydzielenie tekstu do końca głównego ciągu znaków.
                    </li>
                    <li>
                        substr(string, -start, długość); <br>
                        echo substr($x, -5, 3); <br>
                        Jeśli druga wartość jest ujemna, wtedy liczenie znaków zaczyna się od końca
                    </li>
                    <li>
                        substr(string, start, -długość); <br>
                        substr($x, 5, -3); <br>
                        Jeśli trzecia wartość jest ujemna, określa ona ile ostatnich znaków zostanie pominiętych.
                    </li>
                </ul>
                Funkcja substr ma problem z polskimi znakami, jeśli potrzebujesz obsługiwać znaki diakrytyczne użyj metody mb_substr();.
            </p>
            <p>Dane są zmienne imie i nazwisko, Twoim zadaniem jest wydzielenie 2 pierwszych liter z imienia, a z nazwiska dwie przedostatnie litery. Wydzielone ciągi znaków złącz w jeden ze znakiem - pomiędzy wydzielonymi ciągami znaków. Rezultat zapisz do zmiennej wynik.</p>
            <div class="solution-container">
                <?php 
                $imie = 'Mariusz';
                $nazwisko = 'Gwóźdź';
                //Tutaj umieść rozwiązanie
                ?>
            <?php include 'testy/zadanie4_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie5">
            <h2>Zadanie 5</h2>
            <h3>Znak ucieczki</h3>
            <p>Aby wstawić znaki niedozwolone w ciągu znaków, użyj znaku ucieczki. Znak ucieczki to ukośnik odwrotny \, po którym następuje znak, który chcesz wstawić. Przykładem niedozwolonego znaku jest cudzysłów w ciągu znaków, który jest ujęty w cudzysłów. Znak ucieczki działa tylko w podwójnym cudzysłowie ""</p>
            <p>
                <ul>
                    <li>\' Pojedynczy cudzysłów</li>
                    <li>\" Podwójny cudzysłów</li>
                    <li>\$ Zmienne PHP</li>
                    <li>\n Nowy wiersz</li>
                    <li>\r Powrót karetki</li>
                    <li>\t Tabulator</li>
                    <li>\f Przesunięcie strony</li>
                    <li>\ooo Wartość ósemkowa</li>
                    <li>\xhh Wartość szesnastkowa</li>
                </ul>
            </p>
            <p>Innym sposobem na wstawienie cudzysłowia jest wstawienie pojedynczego wewnątrz podwójnego i odwrotnie.</p>
            <p>
                Twoim zadaniem jest utworzenie zmiennych pi = 3.14 i miasto = Zakopane, a następnie wyświetlenie tekstu: <br>
                Zmienna $pi wynosi 3.14, zmienna $miasto ma przypisaną wartość "Zakopane". 
                Użyj znaku podwójnego cudzysłowia, interpolacji i znaku ucieczki.
            </p>
            <div class="solution-container">
                <!-- Tutaj umieść rozwiązanie  -->
                <?php include 'testy/zadanie5_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie6">
            <h2>Zadanie 6</h2>
            <h3>Liczby</h3>
            <p>W PHP istnieją trzy główne typy liczbowe: Integer (np. 21), Float (np. 3.7) i Number Strings (np. "2"), a także dwa dodatkowe typy danych używane dla liczb: Infinity i NaN.</p>
            <h3>Integer</h3>
            <p>Liczba całkowita to liczba bez części dziesiętnej, z zakresu od -2147483648 do 2147483647 w systemach 32-bitowych oraz od -9223372036854775808 do 9223372036854775807 w systemach 64-bitowych. Wartość spoza tego zakresu zostanie zapisana jako liczba zmiennoprzecinkowa, ponieważ przekracza limit liczby całkowitej. Funkcja is_int() służy do sprawdzania, czy zmienna jest typu całkowitego.</p>
            <h3>Float</h3>
            <p>Zmienna typu float to liczba z przecinkiem dziesiętnym lub liczba w postaci wykładniczej np.: 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 to zmiennoprzecinkowe. Typ danych float zazwyczaj może przechowywać wartość do 1.7976931348623E+308 (w zależności od platformy) i ma maksymalną precyzję 14 cyfr. Funkcja is_float() służy do sprawdzania, czy zmienna jest typu float.</p>
            <p>
                PHP ma następujące predefiniowane stałe dla liczb zmiennoprzecinkowych (od PHP 7.2):
                <ul>
                    <li>PHP_FLOAT_MAX - największa reprezentowalna liczba zmiennoprzecinkowa</li>
                    <li>PHP_FLOAT_MIN - najmniejsza reprezentowalna dodatnia liczba zmiennoprzecinkowa</li>
                    <li>PHP_FLOAT_DIG - liczba cyfr dziesiętnych, które można zaokrąglić do liczby zmiennoprzecinkowej i z powrotem bez utraty precyzji</li>
                    <li>PHP_FLOAT_EPSILON - najmniejsza reprezentowalna dodatnia liczba x, taka że x + 1,0 != 1,0</li>
                </ul>
            </p>
            <h3>Infinity</h3>
            <p>Wartość jest nieskończona, jeśli znajduje się poza dozwolonym zakresem dla typu float PHP na tej platformie. Funkcja is_finite() zwraca prawdę jeśli wartość jest skończona, a funkcja is_infinite() zwraca prawdę jeśli wartość jest nieskończona.</p>
            <h3>NaN</h3>
            <p>NaN oznacza Not a Number (nie liczba). NaN jest używane w przypadku niewykonalnych operacji matematycznych. Np: pierwiastek z -1 wynosi i czyli liczbę spoza zbioru liczb rzeczywistych, więc sqrt(-1) zwróci NaN. Funkcja is_nan() służy do sprawdzania, czy wartość nie jest liczbą.</p>
            <h3>Number String</h3>
            <p>Ciągi liczbowe w PHP to zmienne typu string które można przekonwertować na typ liczbowy. Funkcja is_numeric() zwraca wartość true, jeśli zmienna jest liczbą lub ciągiem liczbowym.</p>
            <h3>Zadanie</h3>
            <p>Twoim zadaniem jest utworzenie zmiennych int, f, inf, nan i number i przypisanie im wartości wyżej opisywanych typów danych.</p>
            <div class="solution-container">
                <!-- Tutaj umieść rozwiązanie -->
                <?php include 'testy/zadanie6_test.php'; ?>
            </div>
        </section>
    </main>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>