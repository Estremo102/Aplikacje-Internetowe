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
                <!-- Tutaj umieść rozwiązanie zadania 1 -->
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
                <!-- Tutaj umieść rozwiązanie zadania 2 -->
            <?php include 'testy/zadanie2_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie3">
            <h2>Zadanie 3</h2>
            <div class="solution-container">
            </div>
        </section>
        
        <section id="zadanie4">
            <h2>Zadanie 4</h2>
            <div class="solution-container">
            </div>
        </section>
        
        <section id="zadanie5">
            <h2>Zadanie 5</h2>
            <div class="solution-container">
            </div>
        </section>
        
        <section id="zadanie6">
            <h2>Zadanie 6</h2>
            <div class="solution-container">
            </div>
        </section>
    </main>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>