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
        ?>

        <nav class="options">

            <div class="user" id="enlace1">
                <i class="fas fa-user-circle" id="user-logo"></i><p><?php 
                if(isset($_SESSION['nombre'])){
                    echo $_SESSION['nombre'];
                }else{
                    echo 'Usuario';
                }
                ?>&nbsp;&nbsp;&nbsp;<a href="login.php"><i class="fas fa-sign-in-alt" id="logout-logo" href="login.php"></i></a></p>
                
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
                                <select class="input" name="vocabulario" id="tipo">
                                    <option selected="select" id="none">Tema</option>
                                    <option value="1"id="Clima">Ciencia</option>
                                    <option value="2"id="Deportes">Clima</option>
                                    <option value="3"id="Vacaciones">Deportes</option>
                                    <option value="4"id="Viajes">Edad</option>
                                    <option value="5"id="Tiempo">Habitaciones</option>
                                    <option value="6"id="Edad">Tiempo</option>
                                    <option value="7"id="Sentidos">Trabajo</option>
                                    <option value="8"id="Habitaciones">Sentidos</option>
                                    <option value="9"id="Trabajo">Viajes</option>
                                    <option value="10"id="Ciencia">Vacaciones</option>
                                </select>
                        </div>
                            <input type="submit" name="vocabulario" value="Buscar">&nbsp;
                            <input type="submit" name="vocabulario" value="Aleatorio">
                        </form>
                    </center>
                </div>
                
    
                <div class="contenido">
                    <h2>Gramática</h2>

                    <center>
                        <div class="input-contenedor-temas">

                            <form method="POST" action="busqueda.php">
                            <select class="input" name="gramatica" id="tipo">
                                <option selected="select" id="none">Tema</option>
                                <option value="1"id="Presente-Simple">Presente Simple</option>
                                <option value="2"id="Pasado-Simple">Pasado Simple</option>
                                <option value="3"id="Comparaciones">Comparaciones</option>
                                <option value="4"id="Verbos-Modales">Verbos Modales</option>
                                <option value="5"id="Cláusulas-Relativas">Cláusulas Relativas</option>
                                <option value="6"id="Gerundios">Gerundios</option>
                                <option value="7"id="Infinitivos">Infinitivos</option>
                                <option value="8"id="Habla-Indirecta">Habla Indirecta</option>
                                <option value="9"id="Contables">Contables</option>
                                <option value="10"id="Incontables">Incontables</option>
                            </select>
                        </div>
                            <input type="submit" name="gramatica" value="Buscar">&nbsp;
                            <input type="submit" name="gramatica" value="Aleatorio">
                        </form>
                    </center>
                </div>
                
    
                <div class="contenido">
                    <h2>Escritos</h2>

                    <center>
                        <div class="input-contenedor-temas">

                            <form method="POST" action="busqueda.php">
                            <select class="input" name="escritos" id="tipo">
                                <option selected="select" id="none">Tema</option>
                                <option value="1"id="Ensayo">Ensayo</option>
                                <option value="2"id="Artículo">Articulo</option>
                                <option value="3"id="Reseña">Reseña</option>
                                <option value="4"id="Carta">Carta</option>
                                <option value="5"id="Reporte">Reporte</option>
                            </select>
                        </div>
                            <input type="submit" name="escritos" value="Buscar">&nbsp;
                            <input type="submit" name="escritos" value="Aleatorio">
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
            
            <div class="preguntas">

                <div class="pre-izquierda">
                    <h2>¿Cuántos años llevas estudiando?</h2>
                    <ul>
                        <li type="none"><label><input type="radio" name="años">&nbsp;No estudio inglés</label></li>
                        <li type="none"><label><input type="radio" name="años">&nbsp;Menos de un año</label></li>
                        <li type="none"><label><input type="radio" name="años">&nbsp;De uno a tres años</label></li>
                        <li type="none"><label><input type="radio" name="años">&nbsp;De tres a seis años</label></li>
                        <li type="none"><label><input type="radio" name="años">&nbsp;Más de seis años</label></li>
                    </ul>
                    <br>
                    <br>

                    <h2>Consideras que tienes un conocimiento del idioma...</h2>
                    <ul>
                        <li type="none"><label><input type="radio" name="nivel">&nbsp;Básico</label></li>
                        <li type="none"><label><input type="radio" name="nivel">&nbsp;Intermedio</label></li>
                        <li type="none"><label><input type="radio" name="nivel">&nbsp;Avanzado</label></li>
                    </ul>
                    <br>
                    <br>

                    <h2>¿Dónde estudias?</h2>
                    <ul>
                        <li type="none"><label><input type="radio" name="ingles">&nbsp;En el colegio</label></li>
                        <li type="none"><label><input type="radio" name="ingles">&nbsp;En un instituto</label></li>
                        <li type="none"><label><input type="radio" name="ingles">&nbsp;En casa (Autodidacta)</label></li>
                        <li type="none"><label><input type="radio" name="ingles">&nbsp;No estudio en ningún lugar</label></li>
                        <li type="none"><label><input type="radio" name="ingles">&nbsp;Otro</label></li>
                    </ul>
                </div>
                
                <div class="pre-derecha">
                    <h2>¿Cuáles de los siguientes exámenes rendiste?</h2>
                    <ul>
                        <li type="none"><label><input type="checkbox">&nbsp;Certificate of Proficiency in English (CPE)</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;Certificate in Advance English (CAE)</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;First Certificate English (FCE)</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;Preliminary English Test (PET)</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;Key English Test (KET)</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;No rendí ningún exámen</label></li>
                        <li type="none"><label><input type="checkbox">&nbsp;Otro</label></li>
                    </ul>
                    <br>
                    <br>
               
                    <h2>Además del inglés y/o tu lengua materna, ¿Manejas otros idiomas?</h2>
                    <ul>
                        <li type="none"><label><input type="radio" name="otro">&nbsp;Sí</label></li>
                        <li type="none"><label><input type="radio" name="otro">&nbsp;No</label></li>
                    </ul>
                </div>
            
            </div>
            
            <br>
            <br>
            <input type="button" value="Enviar">
            
        </div>

        <div class="nosotros" id="enlace2">

            <h1>Estadísticas</h1>
            <div class="descripcion">
                <p>Queremos destacar que nos encanta manetener a nuestros usuarios informados sobre el estado de la página, de ahí deriva el porqué esta sección existe, ¡Tomá asiento y veamos subir los números juntos!</p>
            </div>
            

            <div class="superior">

                <div class="usuario-temas">
                    <h2>Usuarios</h2>
                    <p>00</p>
                </div>
    
                <div class="usuario-temas">
                    <h2>Nivel</h2>
                    <p>Example</p>
                </div>
    
                <div class="usuario-temas">
                    <h2>Estudiando...</h2>
                    <p>Example</p>
                </div>

            </div>

            <div class="inferior">

                <div class="usuario-temas">
                    <h2>Definiciones</h2>
                    <p>000</p>
                </div>

                <div class="usuario-temas">
                    <h2>Temas</h2>
                    <p>00</p>
                </div>

                <div class="usuario-temas">
                    <h2>Textos</h2>
                    <p>0</p>
                </div>

            </div>

        </div>

    </body>
</html>