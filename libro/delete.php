<?php
include_once('../conexion/db.php');
session_start();

    $id =$_GET['id'];

    $sql = "DELETE FROM libros WHERE id= ?";
    $resultado = $pdo->prepare($sql);
    $resultado->execute(([$id]));
    $_SESSION['message'] = "libro eliminado exitosamenente";
    header('location:index.php');
