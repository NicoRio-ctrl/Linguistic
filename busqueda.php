<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="busqueda.css" type="text/css" media="all">
        <script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
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
            $password = "";
            $database = "linguisticdb";
    
            $conexion = mysqli_connect($servername, $username,$password,$database);
    
            if($conexion){
    
                //echo "<p>Conexión exitosa.</p>";
            }else{
                echo "<p>No se ha podido conectar con la base de datos.</p>";
            }

            if(isset($_POST['buscar'])){

                $topico = $_POST['buscar'];
                $tema = $_POST['tema'];
                $consulta = "SELECT * FROM contenido where topico='$topico' and tema='$tema'";

            }else if(isset($_POST['aleatorio'])){

                $topico = $_POST['aleatorio'];
                if($topico == 'Vocabulario'){
                    $consulta = "SELECT * FROM contenido WHERE topico='$topico' ORDER BY RAND() LIMIT 20";
                }else if($topico == 'Gramatica'){
                    $consulta = "SELECT * FROM contenido WHERE topico='$topico' ORDER BY RAND() LIMIT 5";
                }else{
                    $consulta = "SELECT * FROM contenido WHERE topico='$topico' ORDER BY RAND() LIMIT 1";
                }
                
            }
            $datos = mysqli_query($conexion,$consulta);
        ?>

        <script>
            var clipboard = new Clipboard('.copiar');
        </script>

        <h1>Resultados</h1>

        <div class="descripcion">
            <p>Estos son los resultados que coinciden con tu búsqueda. En el futuro, añadiremos más ejemplos para maximizar tu aprendizaje.</p>
        </div>

        <div class="contenedor"> 

            <div class="resultados">
                <?php
                    $id;
                    $band= 0;
                    while($fila=mysqli_fetch_array($datos)){
                        if($band==0){
                            $id=0;
                            $band=1;
                        }
                ?>
                <div>
                    <form id="texto">
                        <span><p>Tema<button type="button" class="copiar" data-clipboard-target="#txt<?php echo $id ?>"><i class="fas fa-copy"></i></button></p></span><span id="txt<?php echo $id ?>"><?php $ejemploespanol = $fila['ejemploespanol']; echo "$ejemploespanol";?><br>
                        <?php $ejemploingles = $fila['ejemploingles']; echo "$ejemploingles";?></span>
                    </form>
                </div>

                <?php
                    $id++;
                }
                ?>
        
            </div>
    
            <a href="index.php"><i class="fas fa-arrow-circle-left"></i></a>

        </div>
        
    </body>
</html>