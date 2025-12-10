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
            <h3>PHP + MySQL</h3>
            <p>Za pomocą języka PHP możesz wysyłać do bazy danych zapytania w języku SQL. Aby połączyć się z bazą danych potrzebujesz w pakiecie xampp uruchomić usługę MySQL</p>
            <p>Twoim zadaniem jest uruchomienie pakietów potrzebnych do nawiązania połączenia z bazą danych</p>
            <div class="solution-container">
                <?php include 'testy/zadanie1_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie2">
            <h2>Zadanie 2</h2>
            <h3>PDO</h3>
            <p>PDO w PHP to skrót od PHP Data Objects - rozszerzenie wbudowane w PHP, które zapewnia abstrakcyjny interfejs do obsługi różnych baz danych z jednego kodu źródłowego.</p>
            <pre><code class="language-php">&lt;?php
$servername = "localhost"; // Nazwa serwera, na potrzeby zajęć nie potrzeba zmieniać.
$username = "username"; // Nazwa użytkownika, domyślny użytkownik w xamppie to root.
$password = "password"; // Hasło, domyślne w xamppie jest puste.
$dbname = "myDB"; // Nazwa bazy danych z którą chcemy się połączyć.

try {
    // Tworzymy nowe połączenie z bazą danych
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Ustawiamy by w przypadku błędu został wyrzucony wyjątek
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Udało się nawiązać połączenie";
} catch(PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}
?&gt;</code></pre>
            <p>Twoim zadaniem jest w pliku zadanie2.php stworzyć nowe połączenie z bazą danych. Skorzystaj z powyższego kodu, modyfikując odpowiednie fragmenty.</p>
            <div class="solution-container">
            <?php include 'testy/zadanie2_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie3">
            <h2>Zadanie 3</h2>
            <h3>Zamykanie połączenia</h3>
            <p>Aby zakończyć połaczenie z bazą danych wystarczy do odpowiedniej zmiennej przypisać wartość null</p>
            <p>Twoim zadaniem jest zamknięcie połączenia z bazą danych istniejącego w zmiennej $conn. Rozwiązanie umieść w zadanie3.php</p>
            <div class="solution-container">
            <?php include 'testy/zadanie3_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie4">
            <h2>Zadanie 4</h2>
            <h3>Tworzenie bazy danych</h3>
            <p>Aby utworzyć bazę danych można nawiązać połaczenie bez ustawiania wartości dbname, a następnie wysłania kwerendy CREATE</p>
            <pre><code class="language-php">&lt;?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // w przypadku błędu został wyrzucony wyjątek
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Zmienna z zapytaniem do bazy danych
  $sql = "CREATE DATABASE myDBPDO";
  // exec() służy do wysyłania zapytań nie zwracających wyników
  $conn->exec($sql);
  echo "Pomyślnie utworzono bazę danych";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?&gt; </code></pre>
            <p>Twoim zadaniem jest utworzenie bazy danych. Jej nazwę zapisz w zmiennej $dbname, jako zapytanie najlepiej użyj "DROP DATABASE IF EXISTS $dbname; CREATE DATABASE $dbname" aby usunąć bazę danych jeśli już istnieje i uniknąć błędów.</p>
            <div class="solution-container">
            <?php include 'testy/zadanie4_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie5">
            <h2>Zadanie 5</h2>
            <h3>Tworzenie tabeli</h3>
            <p>Utworzenie tabeli wygląda bardzo podobnie.</p>
            <pre><code class="language-php">&lt;?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // zapytanie tworzące tabelę
  $sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  $conn->exec($sql);
  echo "Tabelę MyGuests utworzono pomyślnie";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?&gt; </code></pre>
            <?php 
                if(isset($dbname)) {
                echo "<p>W poprzednim zadaniu została utworzona baza $dbname, teraz pora dodać do niej tabelę. Stwórz tabelę User z polami: ID INT AUTOINCREMENT, login VARCHAR (20) oraz age INT</p>";
            } else {
                echo "<p>Najpierw wykonaj poprzednie zadanie, żeby utowrzyć bazę danych do której dodasz tabelę</p>";
            }
            ?>
            <div class="solution-container">
                <?php include 'testy/zadanie5_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie6">
            <h2>Zadanie 6</h2>
            <h3>Dodawanie danych</h3>
            <p>Dodawanie danych również jak dwie poprzednie operacje jest zapytaniem nie zwracającym wyników, a więc po raz kolejny zapytanie wysyłamy za pomocą funkcji exec()</p>
            <pre><code class="language-php">&lt;?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  $conn->exec($sql);
  echo "Nowy rekord utworzony pomyślnie";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?&gt; </code></pre>
            <?php 
                if(isset($dbname)) {
                echo "<p>W poprzednim zadaniu została dodana tabela do bazy $dbname, teraz pora uzupełnić ją danymi. Dodaj do bazy przykładowe dane.</p>";
            } else {
                echo "<p>Najpierw wykonaj poprzednie dwa zadania, żeby utowrzyć bazę danych i tabelę do której dodasz dane</p>";
            }
            ?>
            <div class="solution-container">
                <?php include 'testy/zadanie6_test.php'; ?>
            </div>
        </section>
    </main>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>