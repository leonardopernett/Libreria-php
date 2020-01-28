<?php include('../template/header.php');
include_once('../conexion/db.php');
session_start();
 
$id = $_GET['id'];

$sql = "SELECT * FROM libros WHERE id = ?";
$resultado = $pdo->prepare($sql);
$resultado->execute(([$id])); 
$row = $resultado->fetch();

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
        <?php if ($_GET) {   ?>
                <div class="card mt-5">
                    <div class="card-header text-white bg-dark">
                        Editar libro
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="GET">
                            <div class="form-group">
                                <input type="text" value="<?= $row['titulo'];  ?>" name="titulo" class="form-control" placeholder="titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= $row['autor'];  ?>" name="autor" class="form-control" placeholder="autor">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= $row['editor'];  ?>" name="editor" class="form-control" placeholder="editor">
                            </div>
                            <div class="form-group">
                                <input type="date" value="<?= $row['fecha_publicacion'];  ?>" name="fecha_publicacion" class="form-control" placeholder="fecha">
                            </div>

                            <div class="form-group">
                                <input type="text" value="<?= $row['edicion'];  ?>" name="edicion" class="form-control" placeholder="edicion">
                            </div>

                            <div class="form-group">
                                <input type="number" value="<?= $row['costo'];  ?>" min="1000" name="costo" class="form-control" placeholder="costo">
                            </div>
                            <div class="form-group">
                                <input type="number" value="<?= $row['precio_minorista'];  ?>" min="1000" name="precio_minorista" class="form-control" placeholder="precio minorista">
                            </div>

                            <div class="form-group">
                                <input type="text" value="<?= $row['valoracion'];  ?>" min="1000" name="valoracion" class="form-control" placeholder="valoracion">
                            </div>

                            <div class="form-group">
                                <textarea name="descripcion"  rows="2" class="form-control" placeholder="description"><?= $row['descripcion'];  ?></textarea>
                                <small class="float-right">opcional</small>
                            </div>
                            <input type="hidden" name="id" value="<?= $row['id'];  ?>">
                            <button class="btn btn-success btn-block mt-2">Editar Libro</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>


  
</body>
</html>