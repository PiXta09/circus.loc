<?php
$driver='mysql';
$host='localhost';
$db_name='mybase';
$user='Pixta';
$password='%Mq$h9+5Gi-R@Ny';
$charset='utf8';
$options= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $user, $password, $options);
}
catch(PDOException $e)
{
    die("Шота не так");
}
$pdo->prepare('SET NAMES utf8')->execute();
?>