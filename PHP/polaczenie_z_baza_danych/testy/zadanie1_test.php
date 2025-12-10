 <?php
$progress = 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Nawiązano połączenie z bazą danych";
  $result = get_current_user();
  $progress++;
} catch(PDOException $e) {
  echo "Nie udało się nawiązać połączenia: " . $e->getMessage();
  $result = $e->getMessage();
}

$plik = fopen($_SERVER['DOCUMENT_ROOT']."\php\polaczenie_z_baza_danych\zadanie1.php", "w");
if ($plik) {
    fwrite($plik, "$result");
    fclose($plik);
}
$conn = null; 
?> 