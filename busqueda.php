<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="busqueda.css" type="text/css" media="all">
        <script src="https://kit.fontawesome.com/7d5b22ac6c.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Linguistic | Búsqueda</title>
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
                echo "<script>alert('Debe iniciar sesión para realizar una búsqueda.'); window.location.href = 'login.php';</script>";
            }    
            
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
            
            $topico = $_POST['buscar'];
            $tema = $_POST['tema'];
            
            $consulta = "SELECT * FROM contenido where topico='$topico' and tema='$tema'";
            $datos = mysqli_query($conexion,$consulta);
        ?>
        <h1>Resultados</h1>

        <div class="descripcion">
            <p>Estos son los resultados que coinciden con tu búsqueda. En el futuro, añadiremos más ejemplos para maximizar tu aprendizaje.</p>
        </div>

        <div class="contenedor">

            <div class="resultados">
                <?php
                    while($fila=mysqli_fetch_array($datos)){
                ?>
                <div>
                    <?php $ejemploespanol = $fila['ejemploespanol']; echo "$ejemploespanol";?><br>
                    <?php $ejemploingles = $fila['ejemploingles']; echo "$ejemploingles";?><br>
                    <form>
                        <button type="button" id="copiar"><i class="fas fa-copy"></i></button>
                        <button type="submit" name="guardar"><i class="far fa-star"></i></button>
                    </form>
                </div>

                <?php
                }
                ?>
        
            </div>
    
            <a href="index.php"><i class="fas fa-arrow-circle-left"></i></a>

        </div>
        
    </body>
</html>