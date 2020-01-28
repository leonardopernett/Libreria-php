<?php

$user='root';
$password='Admin09';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=prueba_leonardo', $user, $password);

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
