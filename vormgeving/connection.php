
<?php 
$db = 'mysql:host=localhost;dbname=dynamische_content';
$user = 'root';
$pass = 'mysql';
try {
    $conn = new PDO($db, $user, $pass);
    echo '';
    
} catch (PDOException $e) {
    echo "failed" . $e->getMessage();
    
}

?>