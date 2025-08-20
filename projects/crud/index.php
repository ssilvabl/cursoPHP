<?php

// Incluir el archivo de la conexión con la DB
include_once 'connection.php';

echo '<br/>';

// ## LISTAR TAREAS ##
// Obtener todos los datos de la DB
$sql_read = 'SELECT * FROM tasks';

// Obtener la conexión de la DB y preparar la sentencia SQL
$conn_query_read = $pdo->prepare($sql_read);
// Ejecutar la conexión y consulta SQL
$conn_query_read->execute();

// Devolver array con el resultado
$result = $conn_query_read->fetchAll();

// ## AGREGAR TAREAS ##
// Validar si los datos del formulario se están enviando por POST
if($_POST) {
    // Guardar datos del formulario
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Enviar datos a la DB
    // Consulta SQL para añadir datos
    $sql_add = 'INSERT INTO tasks (title, description) VALUES (?, ?)';

    // Obtener la conexión con la DB y preparar sentencia SQL
    $conn_query_add = $pdo->prepare($sql_add);

    // Ejecutar la conexión con la DB y la consulta SQL (con los placeholders)
    $conn_query_add->execute(array($title, $description));

    // Cerrar conexión con la DB
    $pdo = null;
    $conn_query_add = null;

    // Redirigir a una página
    header('location:index.php');
}

// ## EDITAR TAREAS ##
// Validar si los datos del formulario se están eniado por GET
if($_GET) {
    $id = $_GET['id'];
    // Obtener solo los datos de un id
    $sql_edit = 'SELECT * FROM tasks WHERE id = ?';
    // Obtener la conexión con la DB y prepara la sentencia SQL
    $conn_query_edit = $pdo->prepare($sql_edit);
    // Ejecutar la conexión con la DB y la sentencia SQL
    $conn_query_edit->execute(array($id));
    // Guardar el array con el resultado
    $result_id = $conn_query_edit->fetch();
}


?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/671bee8504.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Aplicación de Tareas</h1>

    <div class="container">
        <div class="row">
            <!--Listar tareas-->
            <div class="col-md-6">

                <?php foreach($result as $data): ?>

                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">ID <?php echo $data['id'] ?></div>
                        <div class="card-body text-success">
                            <h5 class="card-title text-center"><?php echo $data['title'] ?></h5>
                            <p class="card-text text-center"><?php echo $data['description'] ?></p>
                        </div>
                    <div class="card-footer bg-transparent border-success text-center"><?php echo $data['date'] ?></div>
                    <div class="card-footer bg-transparent border-success">Acciones: 
                        <a href="index.php?id=<?php echo $data['id'] ?>" class="m-4">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $data['id'] ?>">
                        <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>

                <?php endforeach ?>

            </div>
            
            <!--Controles para las tareas-->
            <div class="col-md-6">
                <!--Validar el tipo de método a utilizar-->
                <?php if(!$_GET): ?>
                <form method="POST">
                    <h2>Nueva Tarea</h2>
                    <input type="text" class="form-control" name="title">
                    <input type="text" class="form-control mt-3" name="description">
                    <button class="btn btn-primary mt-3">Agregar</button>
                <?php endif ?>
                </form>

                <!--Validar el tipo de método a utilizar-->
                <?php if($_GET): ?>
                <form method="GET" action="edit.php">
                    <h2>Editar Tarea</h2>
                    <input type="hidden" value="<?php echo $result_id['id'] ?>" name="id">
                    <input type="text" class="form-control" name="title" value="<?php echo $result_id['title'] ?>">
                    <input type="text" class="form-control mt-3" name="description" value="<?php echo $result_id['description'] ?>">
                    <button class="btn btn-primary mt-3">Actualizar</button>
                <?php endif ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <?php $pdo = null; $conn_query_read = null; ?>
  </body>
</html>