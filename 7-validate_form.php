<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ValidarFormulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
</head>
  <body>

  <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Formulario de registro</h2>
                        <!--Enviar la solicitud al fichero login_post.php-->
                        <form action="7-validate_form.php" method="post">
                            <?php
                            
                            // VALIDAR DATOS DEL FORMULARIO

                            // Validar que existe una solicitud post (se valida si existe algún dato con la función isset)
                            if(isset($_POST['username'])){
                                // Capturar datos de la solicitud post
                                $username = $_POST['username'];
                                $email = $_POST['user_email'];
                                $password = $_POST['password'];

                                // Arreglo con mensajes de la validación de campos
                                $campos = array();

                                // Validar campo username
                                if($username == ""){
                                    // Añadir información al arreglo (param1(nombre_arrego), param2(valor_a_añadir))
                                    array_push($campos, "El campo de Nombre de usuario no puede estar vacío");
                                }

                                // Validar campo user_email
                                if($email == "" || strpos($email, "@") === false || strpos($email, ".") === false){
                                    // Añadir información al arreglo
                                    array_push($campos, "El campo de correo electrónico no es válido");
                                }

                                // Validar campo password
                                if($password == "" || strlen($password) < 8){
                                    // Añadir información al arreglo
                                    array_push($campos, "El campo de contraseña no puede estar vacío o ser menor a 8 caracteres");
                                }

                                // Mostrar los mensajes
                                if(count($campos) > 0){
                                    // Si hay mensajes en el arreglo entonces se mostrarán
                                    echo '<div class="alert alert-danger" role="alert">';

                                    // Recorrer los mensajes de los campos si es mayor a 0 el número de elementos
                                    for($i = 0; $i < count($campos); $i++){
                                        // Mostrar en una lista cada uno de los mensajes
                                        echo '<li>'. $campos[$i] .'</i>';
                                    }

                                }else{
                                    echo '<div class="alert alert-success" role="alert">¡Los datos son correctos!</div>';
                                }
                                echo '</div>';
                                

                            }
                            
                            ?>
                            <div class="form-group">
                                <label for="user">Nombre de usuario</label>
                                <input type="text" name="username" id="user" class="form-control" placeholder="Nombre de usuario">
                            </div>

                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" name="user_email" class="form-control" id="email" placeholder="Correo Electrónico">
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-4">Registrarse</button>
                            <br>
                            <!--Envía los datos por get(url) al fichero recibir_get.php que recibe los datos-->
                            <a class="text-center" href="?tipo_usuario=nuevo&navegador=chrome">Iniciar Sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>