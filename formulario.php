<html>
    <head>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "linguisticdb";

            $conexion = mysqli_connect($servername, $username,$password,$database);

            error_reporting(0);
    
            if($conexion){
    
                //echo "<p>Conexión exitosa.</p>";
            }else{
                echo "<p>No se ha podido conectar con la base de datos.</p>";
            }

            session_start();


            if($_POST['anios'] == "" or $_POST['nivel'] == "" or $_POST['lugar'] == "" or $_POST['otros_i'] == ""){

                echo "<script>alert('Complete todos los campos e intentelo nuevamente'); window.location.href='index.php';</script>";

            }else{

                $consulta = "SELECT * FROM cuestionario";
                $datos = mysqli_query($conexion,$consulta);


                $mail = $_SESSION['usuario'];
                $anios = $_POST['anios'];
                $nivel = $_POST['nivel'];
                $lugar = $_POST['lugar'];
                $otros_i = $_POST['otros_i'];
                if(isset($_POST['examenes'])){
                    $examenes = implode(' ',$_POST['examenes']);

                    $consulta = "INSERT INTO cuestionario(mail, anios, nivel, examenes, lugar, otros_i) VALUES('$mail', '$anios', '$nivel', '$lugar', '$examenes', '$otros_i')";
                }
                
                
                $consulta = "INSERT INTO cuestionario(mail, anios, nivel, lugar, otros_i) VALUES('$mail', '$anios', '$nivel', '$lugar', '$otros_i')";
                mysqli_query($conexion,$consulta);

            
                if($datos != ""){

                    $consulta = "UPDATE cuestionario SET anios = '$anios', nivel = '$nivel', lugar = '$lugar', examenes = '$examenes', otros_i = '$otros_i' WHERE mail = '$mail'";
                    mysqli_query($conexion,$consulta);

                }

                echo "<script>alert('Hemos cargado sus respuestas en nuestra base de datos.'); window.location.href='index.php';</script>";

            }
        ?>
    </body>
</html>





