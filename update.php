<?php 
include('db.php');

$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($query);
$usuario = $result->fetch_assoc();


if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query ="UPDATE usuarios SET usuario='$name', contraseña='$password', 
    telefono='$phone' where id=$id";

    if($conn->query($query)==TRUE){
        header('Location: index.php');
    }else{
        echo "Error de consulta";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container mt-5">
        <h1><i class="bi bi-pencil-square"></i> Editar Usuario</h1>

        <!-- agregar un formulario -->
         <form action="update.php?id=<?php echo $id; ?>" method="POST">
            <div class="mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="<?php echo $usuario['usuario']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" value="<?php echo $usuario['contraseña']; ?>" require>
            </div>

            <div class="mb-3">
                <label for="phone">Teléfono</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $usuario['telefono']; ?>"require>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Actualizar Cambios</button>


         </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>