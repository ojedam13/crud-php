<?php
include('conexion.php');
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumno WHERE cod_estudiante='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Actualizar</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Actualizar Datos</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante'] ?>">
            <input type="text" class="form-control mb-3" name="dni" value="<?php echo $row['dni'] ?>" placeholder="Dni">
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres'] ?>">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>">

            <input type="submit" class="btn btn-primary btn-block" name="" value="Actualizar">
        </form>
</body>