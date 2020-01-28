<?php
include_once('../conexion/db.php');

if(isset($_POST)){
    $titulo = $_POST['titulo'];
    $autor= $_POST['autor'];
    $editor= $_POST['editor'];
    $fecha_publicacion= $_POST['fecha_publicacion'];
    $edicion = $_POST['edicion'];
    $costo= $_POST['costo'];
    $precio_minorista= $_POST['precio_minorista'];
    $valoracion= $_POST['valoracion'];
    $descripcion= $_POST['descripcion'];  

    $sql = "INSERT INTO libros (titulo, autor, editor, fecha_publicacion, edicion,costo, precio_minorista, valoracion, descripcion) VALUES(?,?,?,?,?,?,?,?,?)";
    $resultado = $pdo->prepare($sql);
    $resultado->execute(([$titulo, $autor,$editor,$fecha_publicacion,$edicion,$costo,$precio_minorista,$valoracion,$descripcion]));

    header('location:index.php');
}
