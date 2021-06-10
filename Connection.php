
<?php

// credentials for connecting to the mysql database

$dsn = "mysql:host=studmysql01.fhict.local;dbname=dbi334459";
$user = "dbi334459";
$pass = "1daboy";
try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$email = $_POST['input'];
$sql = "insert into newsletter (Email) values('$email')";
$rows=$conn->query($sql);
?>
