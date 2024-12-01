<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="container mt-5">
            <h1><i class="bi bi-person-vcard"></i> Control de Usuarios</h1>

            <!-- Boton de referencia para crear usuarios -->
             <a href="create.php" class="btn btn-primary mb-3">Agregar Usuario</a>

             <!-- Tabla de usuarios -->
              <table class="table table-bordered">
                <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th style="text-align:center;">Acciones</th>
                      </tr>  
                </thead>

                <tbody>
                    <?php 
                    $query = "SELECT * FROM usuarios";
                    $result= $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                    ?>    
                
                    <tr>
                        <!-- pendiente para asignar variables -->
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Actualizar</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php } ?>    

                </tbody>
              </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>