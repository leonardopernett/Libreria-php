<?php 
require_once('../conexion/db.php');
session_start();

include('../template/header.php');


$sql = "SELECT * FROM libros ";
$resp = $pdo->prepare($sql);
$resp->execute();
$libros = $resp->fetchAll();


?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
                <div class="card mt-5">
                    <div class="card-header text-white bg-dark">
                        Venta de libro
                    </div>
                    <div class="card-body">
                       
                       <?php if(isset($_SESSION['message'])){   ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <?= $_SESSION['message'];  ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <?php session_unset(); ?>
                       <?php } ?>

                        <form action="agregarVenta.php" method="post">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="nombre cliente" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="apellido" class="form-control" placeholder="apellido apellido" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="telefono"  class="form-control" placeholder=" # telefono sin espacios" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="correo" required>
                            </div>

                            <div class="form-group">
                              <select name="libro_comprado" id="" class="form-control" required>
                                 <option value=""> seleccione un libro de nuestra libreria</option>
                                 <?php foreach ($libros as $libro) { ?>
                                        <option value="<?php echo $libro['titulo']; ?>"><?php echo $libro['titulo']; ?></option>";
                                        
                                 <?php }   ?>
                              </select>
                            </div>

                            <div class="form-group">
                                <input type="date" name="fecha_compra" class="form-control" placeholder="fecha comprado" required>
                            </div>

                            <div class="form-group">
                                <input type="number" name="valor_libro" class="form-control" placeholder="valor del libro" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="empleado" class="form-control" placeholder="empleado" required>
                            </div>



                           
                            <button class="btn btn-primary btn-block mt-2">registrar</button>
                        </form>
                    </div>
                </div>
           


           
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>

  <script>
     
    $(document).ready(function(){
       function alert(){
        $('.alert').alert('close')
       }

        setInterval(alert, 4000);
    })

  </script>
  
</body>
</html>