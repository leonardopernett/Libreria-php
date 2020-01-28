<?php
include_once('../conexion/db.php');
session_start();

if ($_GET) {

    $id = $_GET['id'];
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $editor = $_GET['editor'];
    $fecha_publicacion = $_GET['fecha_publicacion'];
    $edicion = $_GET['edicion'];
    $costo = $_GET['costo'];
    $precio_minorista = $_GET['precio_minorista'];
    $valoracion = $_GET['valoracion'];
    $descripcion = $_GET['descripcion'];

    $sql = "UPDATE libros SET titulo = ?, autor=?, editor=?, fecha_publicacion=?, edicion=?,costo=?, precio_minorista=?, valoracion=?, descripcion=? WHERE id=?";
    $resultado = $pdo->prepare($sql);
    $resultado->execute(([$titulo, $autor, $editor, $fecha_publicacion, $edicion, $costo, $precio_minorista, $valoracion, $descripcion, $id]));

    header('location:index.php');
}
