<?php

// Incluir el archivo de la conexión con la DB
include_once 'connection.php';

echo '<br/>';

// Obtener todos los datos de la DB
$sql_read = 'SELECT * FROM tasks';

// Obtener la conexión de la DB y preparar la sentencia SQL
$conn_query = $pdo->prepare($sql_read);
// Ejecutar la conexión y consulta SQL
$conn_query->execute();

// Devolver array con el resultado
$result = $conn_query->fetchAll();

var_dump($result);

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <?php foreach($result as $data): ?>

                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">ID <?php echo $data['id'] ?></div>
                        <div class="card-body text-success">
                            <h5 class="card-title"><?php echo $data['title'] ?></h5>
                            <p class="card-text"><?php echo $data['description'] ?></p>
                        </div>
                    <div class="card-footer bg-transparent border-success"><?php echo $data['date'] ?></div>
                </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>