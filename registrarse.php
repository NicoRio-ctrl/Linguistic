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
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'linguisticdb';
        try{
            $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
            } catch (PDOException $e){
            die('conexion fallida: '.$e->getMessage());
        }

        if(isset($_POST['enviar'])) {
          if($_POST['nombre'] == '' or $_POST['correo'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') {
              echo "<script>alert('Complete todos los campos e intentelo nuevamente');</script>";;
          } else {
            $correo = $_POST['correo'];
            if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
              $sql = 'SELECT correo FROM usuarios';
              $conexion = mysqli_connect($server, $username, $password, $database);
              $rec = mysqli_query($conexion,$sql);
              $verificar_usuario = 1;
              while($result = mysqli_fetch_object($rec)) {
                  if($result->correo == $_POST['correo']) {
                      $verificar_usuario = 0;
                  }
              }
              if($verificar_usuario) {
                if($_POST['password'] == $_POST['repassword']) {
                    $consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (:nombre, :correo, :contrasena)";
                    $stmt = $conn->prepare($consulta);
                    $stmt->bindParam(':nombre', $_POST['nombre']);
                    $stmt->bindParam(':correo', $_POST['correo']);
                    $stmt->bindParam(':contrasena', $_POST['password']);
                    if ($stmt->execute())
                    echo "<script>alert('Usted se ha registrado exitosamente'); window.location.href = 'login.php'; </script>";
                } else {
                    echo "<script>alert('Las contraseñas no coinciden. Intentelo nuevamente');</script>";
                }
              } else {
                  echo "<script>alert('Este usuario ha sido registrado previamente');</script>";
              }
           }else{
            echo "<script>alert('Ingrese un correo válido.');</script>";
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