<?php
$host = 'mysql';
$db = 'relojdb';
$user = 'relojuser';
$pass = 'relojpass';

date_default_timezone_set('America/Bogota');
$hora = date('H:i:s');

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO horas (hora) VALUES ('$hora')";
    $conn->exec($sql);

    echo "Hora guardada: $hora";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>