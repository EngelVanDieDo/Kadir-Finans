<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=yorum-ajax;charset=utf8mb4';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
);
$pdo = new PDO($dsn, $username, $password, $options);

$query = "SELECT * FROM tb_upload ORDER BY ID DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();

$images = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $images[] = $row['image'];
}

$_SESSION['images'] = $images;
?>
