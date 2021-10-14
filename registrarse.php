<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="registrarse.css" type="text/css" media="all">
        <script src="https://kit.fontawesome.com/7d5b22ac6c.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Linguistic | Registrarse</title>
    </head>

    <?php

        $servername = "localhost";
        $username = "root";
        $password = "lab02";
        $database = "linguisticdb";

        $conexion = mysqli_connect($servername, $username,$password,$database);

        if($conexion){

            //echo "<p>Conexión exitosa.</p>";
        }else{
            echo "<p>No se ha podido conectar con la base de datos.</p>";
        }

        if(isset($_POST['enviar'])) {
          if($_POST['nombre'] == '' or $_POST['correo'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') {
              echo "<script>alert('Complete todos los campos e intentelo nuevamente');</script>";;
          } else {
              $sql = 'SELECT * FROM usuarios';
              $rec = mysqli_query($conexion,$sql);
              $verificar_usuario = 1;
              while($result = mysqli_fetch_object($rec)) {
                  if($result->email == $_POST['correo']) {
                      $verificar_usuario = 0;
                  }
              }
              if($verificar_usuario) {
                  if($_POST['password'] == $_POST['repassword']) {
                      $nombre = $_POST['nombre'];
                      $usuario = $_POST['correo'];
                      $password = $_POST['password'];
                      $consulta = "INSERT INTO usuarios (nombre,contrasena,correo) VALUES ('$nombre','$password','$usuario')";
                      mysqli_query($conexion, $consulta);
                      echo "<script>alert('Usted se ha registrado exitosamente'); window.location.href = 'login.php'; </script>";
                  } else {
                      echo "<script>alert('Las contraseñas no coinciden. Intentelo nuevamente');</script>";
                  }
              } else {
                  echo "<script>alert('Este usuario ha sido registrado previamente');</script>";
              }
           }
        }
    ?>

    <body>

        <div class="registro">

            <h1>Registrarse</h1>

            <form action="registrarse.php" method="POST" class="cont-inputs">
                
                <input type="text" placeholder="Correo" class="inputs" name="correo">
                <input type="text" placeholder="Nombre" class="inputs" name="nombre">
                <input type="password" placeholder="Contraseña" class="inputs" name="password">
                <input type="password" placeholder="Confirmación" class="inputs" name="repassword">

                <input type="submit" value="Continuar" class="boton" name="enviar">
                    
                <div>
                    <p>¿Ya tiene una cuenta? <a href="login.php">Iniciar Sesión</a></p>
                </div>
                     
            </form>

        </div>
        
    </body>
</html>