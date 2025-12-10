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
            <pre><code class="language-php"> &lt;?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?&gt;
            </code></pre>

            <div class="solution-container">
            <?php include 'testy/zadanie2_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie3">
            <h2>Zadanie 3</h2>
            <h3>Edycja ciągów znaków</h3>
            
            <div class="solution-container">

            <?php include 'testy/zadanie3_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie4">
            <h2>Zadanie 4</h2>
            <h3>łączenie i wydzielanie ciągów znaków</h3>
            
            <div class="solution-container">

            <?php include 'testy/zadanie4_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie5">
            <h2>Zadanie 5</h2>
            <h3>Znak ucieczki</h3>
            
            <div class="solution-container">
                
                <?php include 'testy/zadanie5_test.php'; ?>
            </div>
        </section>
        
        <section id="zadanie6">
            <h2>Zadanie 6</h2>
            <h3>Liczby</h3>

            <div class="solution-container">
                
                <?php include 'testy/zadanie6_test.php'; ?>
            </div>
        </section>
    </main>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/foot.php'; ?>