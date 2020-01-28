<?php include('../template/header.php');
include_once('../conexion/db.php');
session_start();

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php if (!$_GET) {   ?>
                <div class="card mt-5">
                    <div class="card-header text-white bg-dark">
                        Regitrar libro
                    </div>
                    <div class="card-body">
                        <form action="agregar.php" method="post">
                            <div class="form-group">
                                <input type="text" name="titulo" class="form-control" placeholder="titulo" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="autor" class="form-control" placeholder="autor" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="editor" class="form-control" placeholder="editor" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="fecha_publicacion" class="form-control" placeholder="fecha" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="edicion" class="form-control" placeholder="edicion" required>
                            </div>

                            <div class="form-group">
                                <input type="number" min="1000" name="costo" class="form-control" placeholder="costo" required>
                            </div>
                            <div class="form-group">
                                <input type="number" min="1000" name="precio_minorista" class="form-control" placeholder="precio minorista" required>
                            </div>

                            <div class="form-group">
                                <select name="valoracion" class="form-control" required>
                                    <option selected value="">Estado del Libro</option>
                                    <option value="Extraordinario">Extraordinario</option>
                                    <option value="Excelente">Excelente</option>
                                    <option value="bueno">bueno</option>
                                    <option value="dañadp">dañado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea name="descripcion" rows="2" class="form-control" placeholder="description"></textarea>
                                <small class="float-right">opcional</small>
                            </div>

                            <button class="btn btn-primary btn-block mt-2">registrar</button>
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