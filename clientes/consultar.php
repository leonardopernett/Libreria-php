<?php
require_once('../conexion/db.php');
session_start();


$sql = "SELECT * FROM clientes";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$rows = $resultado->fetchAll();

include('../template/header.php');



?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h3 class="lead text-center"><strong>Ventas de Libros</strong> </h3>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nombre cliente</th>
                        <th scope="col">apellido cliente</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Libro comprado</th>
                        <th scope="col">fecha de la compra</th>
                        <th scope="col">Valor de la Compra</th>
                        <th scope="col">Empleado Quien lo atendio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['apellido'] ?></td>
                            <td><?= $row['telefono'] ?></td>
                            <td><?= $row['correo'] ?></td>
                            <td><?= $row['libro_comprado'] ?></td>
                            <td><?= $row['fecha_compra'] ?></td>
                            <td><?= $row['valor_libro'] ?></td>
                            <td><?= $row['empleado'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include('../template/footer.php'); ?>

<script>
   $(document).ready( function () {
    $('#myTable').DataTable({
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
    });
} );
</script>

</body>

</html>