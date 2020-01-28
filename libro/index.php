<?php include('../template/header.php') ?>

<?php
session_start();
include_once('../conexion/db.php');

$sql = "SELECT * FROM libros";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$rows = $resultado->fetchAll();

?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 mt-5 ">
            <h3 class="text-center">LIsta de LIbros </h3>

            <div class="col-md-5 mx-auto">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo  $_SESSION['message'];  ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php session_unset();  ?>
                <?php }  ?>
            </div>

            <table class="table table-hover mt-5" id="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">titulo</th>
                        <th scope="col">autor</th>
                        <th scope="col">editor</th>
                        <th scope="col">fecha de publicacion</th>
                        <th scope="col">edicion</th>
                        <th scope="col">costo</th>
                        <th scope="col">precio minorista</th>
                        <th scope="col">valoracion</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) :  ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['titulo']; ?></td>
                            <td><?= $row['autor']; ?></td>
                            <td><?= $row['editor']; ?></td>
                            <td><?= $row['fecha_publicacion']; ?></td>
                            <td><?= $row['edicion']; ?></td>
                            <td><?= $row['costo']; ?></td>
                            <td><?= $row['precio_minorista']; ?></td>
                            <td><?= $row['valoracion']; ?></td>
                            <td><?= $row['descripcion']; ?></td>
                            <td class="d-flex justify-content-end">
                                <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm mx-2"><i class="fa fa-pencil"></i></a>
                                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include('../template/footer.php'); ?>

<script>
    $(document).ready(function() {
        function alert() {
            $('.alert').alert('close')
        }

        setInterval(alert, 3000);
    })
</script>

</body>

</html>