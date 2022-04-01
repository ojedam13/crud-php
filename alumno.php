<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Página Alumno</title>
</head>

<body>
    
    <div class="conteiner mt-5">
        <div class="row">
            <div class="col-md-4 p-4">
                <h2>Ingresar Datos</h2>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Código">
                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

                    <input type="submit" class="btn btn-primary" name="">
                </form>
            </div>
            <div class="col-md-7">
               <table class="col-md-8 table">
                   <thead class="table-success table-striped">
                    <tr>
                        <th>Código</th>
                        <th>Dni</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th></th>
                        <th></th>
                    </tr>
                   </thead>

                   <tbody>
                       <?php               
                       while($row=mysqli_fetch_array($query)){
                       ?>
                       <tr>
                           <th><?php echo $row['cod_estudiante'] ?></th>
                           <th><?php echo $row['dni'] ?></th>
                           <th><?php echo $row['nombres'] ?></th>
                           <th><?php echo $row['apellidos'] ?></th>
                           <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                           <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                           
                       </tr>
                       <?php } ?>
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</body>

</html>