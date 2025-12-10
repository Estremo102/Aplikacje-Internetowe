 <?php
$progress = 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $plik = fopen($_SERVER['DOCUMENT_ROOT']."\php\polaczenie_z_baza_danych\zadanie1.php", "w");
if ($plik) {
    $user = get_current_user();
    fwrite($plik, "$user");
    fclose($plik);
}
  $progress++;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null; 
?> 