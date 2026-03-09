<?php
header('Content-Type: application/json; charset=utf-8');

$poprawne = false;
$komunikaty = [];
$dbname_global = null;

try {
    if(!isset($dbname_global)) {
        $komunikaty[] = "✗ Najpierw wykonaj zadanie 4";
    } else {
        ob_start();
        include __DIR__ . '/../zadanie5.php';
        ob_get_clean();
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname_global", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "SHOW TABLES LIKE 'User'";
            $result = $conn->query($sql);
            $tableExists = $result->rowCount() > 0;
            
            if(!$tableExists) {
                $komunikaty[] = "✗ Tabela User nie została utworzona";
            } else {
                $sql = "DESCRIBE User";
                $result = $conn->query($sql);
                $columns = $result->fetchAll(PDO::FETCH_COLUMN, 0);
                
                if(!in_array('ID', $columns) || !in_array('login', $columns) || !in_array('age', $columns)) {
                    $komunikaty[] = "✗ Tabela User nie ma wymaganych kolumn (ID, login, age)";
                } else {
                    $poprawne = true;
                    $komunikaty[] = "✓ Tabela User została utworzona poprawnie";
                }
            }
            
            $conn = null;
        } catch(PDOException $e) {
            $komunikaty[] = "✗ Błąd połączenia: " . $e->getMessage();
        }
    }
} catch (Exception $e) {
    $komunikaty[] = "✗ Błąd: " . $e->getMessage();
}

echo json_encode([
    'poprawne' => $poprawne,
    'komunikaty' => $komunikaty
], JSON_UNESCAPED_UNICODE);
?>