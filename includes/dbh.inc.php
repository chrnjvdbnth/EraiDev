<?php

$dsn = "mysql:host=localhost;dbname=eraiDatabase";
$dbusername = "chiranjeev";
$dbpassword = "Whatsapp@9833";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed ". $e->getMessage(); 
}