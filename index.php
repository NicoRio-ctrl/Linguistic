<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="index.css" type="text/css" media="all">
        <script src="https://kit.fontawesome.com/7d5b22ac6c.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Linguistic | Inicio</title>
    </head>
    <body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
                } // End if
            });
            });
        </script>

        <?php
            session_start();

            $conexion = mysqli_connect("localhost", "root", "", "linguisticdb");
        ?>

        <nav class="options">

            <div class="user" id="enlace1">
                <i class="fas fa-user-circle" id="user-logo"></i><p><?php 
                if(isset($_SESSION['nombre'])){
                    echo $_SESSION['nombre'];
                }else{
                    echo 'Usuario';
                }
                ?></p><p><a href="login.php"><i class="fas fa-sign-in-alt" id="logout-logo" href="login.php"></i></a></p>
                
            </div>

            <div class="nav">
                <a href="#enlace1">Inicio</a>
                <a href="#enlace2">Información</a>
                <a href="#enlace3">Gramática</a>
                <a href="#enlace3">Vocabulario</a>
                <a href="#enlace3">Escritos</a>
                <a href="#enlace4">Cuestionario</a>
            </div>
            
        </nav>

        <nav class="welcome">

            <h1>¡Bienvenido a Linguistic!</h1>

            <div>
                <p>Somos un sitio web cuyo objetivo es brindar una manera sencilla de aprender inglés. Ofreciendo información variada sobre gramática, vocabulario 
                y, además, contando con una interfaz amigable a todo tipo de usuarios, facilitando el aprendizaje ¿Qué esperas para probar nuestros servicios?</p>
            </div>
            
            <a href="registrarse.php">Suscribirse</a>

        </nav>

        <div class="gram-vocab-writt" id="enlace3">

            <h1>Aprendizaje</h1>
            <p>¡Selecciona el tópico que desees o pierdete por el camino del saber!</p>

            <div class="contenedor-temas">
                <div class="contenido">
                    <h2>Vocabulario</h2>

                    <center>
                        <div class="input-contenedor-temas">
                            <form method="POST" action="busqueda.php">
                                <select class="input" name="tema" id="tipo" required>
                                    <option selected="select" value="none">Tema</option>
                                    <option value="Ciencia"id="Ciencia">Ciencia</option>
                                    <option value="Clima"id="Clima">Clima</option>
                                    <option value="Deportes"id="Deportes">Deportes</option>
                                    <option value="Edad"id="Edad">Edad</option>
                                    <option value="Habitaciones"id="Habitaciones">Habitaciones</option>
                                    <option value="Salud"id="Salud">Salud</option>
                                    <option value="Sentidos"id="Sentidos">Sentidos</option>
                                    <option value="Tiempo"id="Tiempo">Tiempo</option>
                                    <option value="Trabajo"id="Trabajo">Trabajo</option>
                                    <option value="Viaje"id="Viajes">Viajes</option>
                                </select>
                        </div>
                            <button type="submit" name="buscar" value="Vocabulario">Buscar</button>&nbsp;
                            <button type="submit" name="aleatorio" value="Vocabulario">Aleatorio</button>
                        </form>
                    </center>
                </div>
                
    
                <div class="contenido">
                    <h2>Gramática</h2>

                    <center>
                        <div class="input-contenedor-temas">

                            <form method="POST" action="busqueda.php">
                            <select class="input" name="tema" id="tipo" required>
                                <option selected="select" value="none">Tema</option>
                                <option value="Clausulas relativas"id="Clausulas relativas">Cláusulas relativas</option>
                                <option value="Comparacion"id="Comparacion">Comparaciones</option>
                                <option value="Contables"id="Contables">Contables</option>
                                <option value="Gerundios"id="Gerundios">Gerundios</option>
                                <option value="Incontables"id="Incontables">Incontables</option>
                                <option value="Infinitivos"id="Infinitivos">Infinitivos</option>
                                <option value="Pasado"id="Pasado">Pasado</option>
                                <option value="Presente"id="Presente">Presente</option>
                                <option value="Verbos modales"id="Verbos modales">Verbos modales</option>
                            </select>
                        </div>
                            <button type="submit" name="buscar" value="Gramatica">Buscar</button>&nbsp;
                            <button type="submit" name="aleatorio" value="Gramatica">Aleatorio</button>
                        </form>
                    </center>
                </div>
                
    
                <div class="contenido">
                    <h2>Escritos</h2>

                    <center>
                        <div class="input-contenedor-temas">

                            <form method="POST" action="busqueda.php">
                            <select class="input" name="tema" id="tipo" required>
                                <option selected="select" value="none">Tema</option>
                                <option value="Ensayo"id="Ensayo">Ensayo</option>
                                <option value="Articulo"id="Articulo">Articulo</option>
                                <option value="Resenia"id="Resenia">Reseña</option>
                                <option value="Carta"id="Carta">Carta</option>
                                <option value="Reporte"id="Reporte">Reporte</option>
                            </select>
                        </div>
                            <button type="submit" name="buscar" value="Escrito">Buscar</button>&nbsp;
                            <button type="submit" name="aleatorio" value="Escrito">Aleatorio</button>
                        </form>
                    </center>
                </div>
            </div>
            
        </div>

        <div class="cuestionario" id="enlace4">

            <h1>Un momento...</h1>
            <div>
                <p>En Linguistic, nos preocupamos por brindar la mejor experiencia de usuario posible. 
                Por tal motivo, te pedimos, amablemente, que te detengas unos minutos para responder una 
                breve encuesta que contribuirá al desarrollo de la página.</p>
            </div>

            <form method="POST" action="formulario.php">
                <center><div class="preguntas">

                    <div class="pre-izquierda">
                        <h2>¿Cuántos años llevas estudiando?</h2>
                        <ul>
                            <li type="none"><label><input type="radio" name="anios" value="1">&nbsp;No estudio inglés</label></li>
                            <li type="none"><label><input type="radio" name="anios" value="2">&nbsp;Menos de un año</label></li>
                            <li type="none"><label><input type="radio" name="anios" value="3">&nbsp;De uno a tres años</label></li>
                            <li type="none"><label><input type="radio" name="anios" value="4">&nbsp;De tres a seis años</label></li>
                            <li type="none"><label><input type="radio" name="anios" value="5">&nbsp;Más de seis años</label></li>
                        </ul>
                        <br>
                        <br>

                        <h2>Consideras que tienes un conocimiento del idioma...</h2>
                        <ul>
                            <li type="none"><label><input type="radio" name="nivel" value="1">&nbsp;Básico</label></li>
                            <li type="none"><label><input type="radio" name="nivel" value="2">&nbsp;Intermedio</label></li>
                            <li type="none"><label><input type="radio" name="nivel" value="3">&nbsp;Avanzado</label></li>
                        </ul>
                        <br>
                        <br>

                        <h2>¿Dónde estudias?</h2>
                        <ul>
                            <li type="none"><label><input type="radio" name="lugar" value="En el colegio">&nbsp;En el colegio</label></li>
                            <li type="none"><label><input type="radio" name="lugar" value="En un instituto">&nbsp;En un instituto</label></li>
                            <li type="none"><label><input type="radio" name="lugar" value="En casa (Autodidacta)">&nbsp;En casa (Autodidacta)</label></li>
                            <li type="none"><label><input type="radio" name="lugar" value="No estudio en ningún lugar">&nbsp;No estudio en ningún lugar</label></li>
                            <li type="none"><label><input type="radio" name="lugar" value="Otro">&nbsp;Otro</label></li>
                        </ul>
                    </div>

                    <div class="pre-derecha">
                        <h2>¿Cuáles de los siguientes exámenes rendiste?</h2>
                        <ul>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="CPE">&nbsp;Certificate of Proficiency in English (CPE)</label></li>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="CAE">&nbsp;Certificate in Advance English (CAE)</label></li>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="FCE">&nbsp;First Certificate English (FCE)</label></li>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="PET">&nbsp;Preliminary English Test (PET)</label></li>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="KET">&nbsp;Key English Test (KET)</label></li>
                            <li type="none"><label><input type="checkbox" name="examenes[]" value="Otro">&nbsp;Otro</label></li>
                        </ul>
                        <br>
                        <br>

                        <h2>Además del inglés y/o tu lengua materna, ¿Manejas otros idiomas?</h2>
                        <ul>
                            <li type="none"><label><input type="radio" name="otros_i" value="1">&nbsp;Sí</label></li>
                            <li type="none"><label><input type="radio" name="otros_i" value="0">&nbsp;No</label></li>
                        </ul>
                    </div>

                    </div>

                    <br>
                    <br>
                    <?php 
                        if(isset($_SESSION['usuario'])){
                    ?>
                        <input type="submit" value="Enviar" class="boton-cuestionario">
                    <?php
                        }else{
                    ?>
                        <input type="submit" value="Enviar" class="boton-cuestionario2" disabled>
                    <?php
                        }
                    ?>
                    
                </div></center>
            </form>
           
        </div>

        <div class="nosotros" id="enlace2">

            <h1>Estadísticas</h1>
            <div class="descripcion">
                <p>Queremos destacar que nos encanta manetener a nuestros usuarios informados sobre el estado de la página, de ahí deriva el porqué esta sección existe, ¡Tomá asiento y veamos subir los números juntos!</p>
            </div>
            

            <div class="superior">

                <div class="usuario-temas">
                    <h2>Usuarios</h2>
                    <p><?php
                        $consulta = "SELECT * FROM usuarios";
                        $usuarios = mysqli_query($conexion, $consulta);
                          
                        $u = 0;
                        while(mysqli_fetch_array($usuarios)){
                            $u++;
                        }
                                                  
                        echo "$u";
                    ?></p>
                </div>
    
                <div class="usuario-temas">
                    <h2>Nivel</h2>
                    <p><?php
                        $consulta = "SELECT AVG(nivel) AS prom FROM cuestionario";
                        $res = mysqli_query($conexion, $consulta);
                        $row = mysqli_fetch_array($res);
                        $prom = $row['prom'];

                        if($prom >= 1 && $prom <= 1.99){
                            echo 'Básico';
                        }else if($prom >= 2 && $prom <= 2.99){
                            echo 'Intermedio';
                        }else{
                            echo 'Avanzado';
                        }       
                    ?></p>
                </div>
    
                <div class="usuario-temas">
                    <h2>Estudiando...</h2>
                    <p><?php
                        $consulta = "SELECT AVG(anios) AS prom FROM cuestionario";
                        $res = mysqli_query($conexion, $consulta);
                        $row = mysqli_fetch_array($res);
                        $prom = $row['prom'];
                                   
                        if($prom >= 1 && $prom <= 1.99){
                            echo 'No estudian';
                        }else if($prom >= 2 && $prom <= 2.99){
                            echo 'Por menos de 1 año';
                        }else if($prom >= 3 && $prom <= 3.99){
                            echo 'De 1 a 3 años';
                        }else if($prom >= 4 && $prom <= 4.99){
                            echo 'De 3 a 6 años';
                        }else{
                            echo 'Por más de 6 años';
                        }
                    ?></p>
                </div>

            </div>

            <div class="inferior">

                <div class="usuario-temas">
                    <h2>Definiciones</h2>
                    <p><?php
                    $consulta = "SELECT * FROM contenido WHERE topico = 'Vocabulario'";
                    $definiciones = mysqli_query($conexion, $consulta);
                      
                    $d = 0;
                    while(mysqli_fetch_array($definiciones)){
                        $d++;
                    }
                                              
                    echo "$d";
                        
                    ?></p>
                </div>

                <div class="usuario-temas">
                    <h2>Temas</h2>
                    <p><?php
                    $consulta = "SELECT * FROM contenido WHERE topico = 'Gramatica'";
                    $temas = mysqli_query($conexion, $consulta);
                      
                    $t = 0;
                    while(mysqli_fetch_array($temas)){
                        $t++;
                    }
                                              
                    echo "$t";
                        
                    ?></p>
                </div>

                <div class="usuario-temas">
                    <h2>Textos</h2>
                    <p><?php
                    $consulta = "SELECT * FROM contenido WHERE topico = 'Escrito'";
                    $textos = mysqli_query($conexion, $consulta);
                      
                    $te = 0;
                    while(mysqli_fetch_array($textos)){
                        $te++;
                    }
                                              
                    echo "$te";
                        
                    ?></p>
                </div>

            </div>

        </div>

    </body>
</html>