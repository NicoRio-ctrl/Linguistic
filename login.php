<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="login.css" type="text/css" media="all">
        <script src="https://kit.fontawesome.com/7d5b22ac6c.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Linguistic | Iniciar Sesión</title>
    </head>

    <?php
      session_start();
      if(isset($_SESSION['usuario'])){
        session_unset();
        session_destroy();
      }
      function connectDB(){
          $enlace = mysqli_connect("localhost","root","","linguisticdb");
          return $enlace; 
      }

      function disconnectDB($conexion){
          $close= mysqli_close($conexion);
      }

      function validar($nombre, $contra){
        $conexion = connectDB();
        $sql = "SELECT * FROM usuarios";
        mysqli_set_charset($conexion, "utf8"); 
        if(!$result = mysqli_query($conexion, $sql)) die();
        while($row = mysqli_fetch_array($result)) 
        { 
            $usuario=$row['correo'];
            //$ct=password_verify($contra, $row['password']);
            $ct=$row['contrasena'];
            if($usuario == $nombre && $contra == $ct){
                session_start();
                $nombre=$row['nombre'];
                $_SESSION['usuario'] = $usuario;
                $_SESSION['nombre'] = $nombre;
                header('Location: index.php');
                return;
            }else if ($usuario == $nombre && $contra != $ct) {
                echo "<script>alert('Contraseña incorrecta. Intente nuevamente.');</script>";
                disconnectDB($conexion);
                return;
            }
        }
        disconnectDB($conexion);
        echo "<script>alert('Usuario no registrado.');</script>";
        return;
      }
      if(isset($_POST["enviar"])){
      $nombre = $_POST["correo"];
      $contra = $_POST["contrasena"];
      validar($nombre, $contra);
      }
      
    ?>

    <body>
        <div class="login">

            <h1>Iniciar Sesión</h1>

            <form action="login.php" method="POST" class="cont-inputs">
                
                <input type="text" placeholder="Correo" class="inputs" name="correo">
                <input type="password" placeholder="Contraseña" class="inputs" name="contrasena">

                <input type="submit" value="Continuar" class="boton" name="enviar">
                
                <div>
                    <p>¿No tienes una cuenta? <a href="registrarse.php">Registrarse</a></p>
                </div>
                
            </form>
            
    </body>
</head>