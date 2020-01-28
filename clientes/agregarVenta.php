<?php
include_once('../conexion/db.php');
session_start();

if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $libro_comprado = $_POST['libro_comprado'];
    $fecha_compra= $_POST['fecha_compra'];
    $valor_libro= $_POST['valor_libro'];
    $empleado= $_POST['empleado'];

    $sql = "INSERT INTO clientes (nombre, apellido, telefono, correo, libro_comprado, fecha_compra, valor_libro, empleado) VALUES(?,?,?,?,?,?,?,?)";
    $resultado = $pdo->prepare($sql);
    $resultado->execute(([$nombre, $apellido,$telefono,$correo,$libro_comprado,$fecha_compra,$valor_libro,$empleado]));
    

    $_SESSION['message'] = "Venta Realizada exitosamenente";
    header('location:index.php');
  
}
