-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 21:11:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `linguisticdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `topico` varchar(12) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tema` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejemploespanol` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejemploingles` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`topico`, `tema`, `ejemploespanol`, `ejemploingles`) VALUES
('Vocabulario', 'Clima', 'Lluvia', 'Rain'),
('Vocabulario', 'Clima', 'Arcoiris', 'Rainbow'),
('Vocabulario', 'Clima', 'Temperatura', 'Temperature'),
('Vocabulario', 'Clima', 'Presion', 'Pressure'),
('Vocabulario', 'Clima', 'Amanecer', 'Sunrise'),
('Vocabulario', 'Clima', 'Tornado', 'Tornado'),
('Vocabulario', 'Clima', 'Atardecer', 'Sunset'),
('Vocabulario', 'Clima', 'Humedad', 'Humidity'),
('Vocabulario', 'Clima', 'Frio', 'Cold'),
('Vocabulario', 'Clima', 'Viento', 'Wind'),
('Vocabulario', 'Deportes', 'Atleta', 'Athlete'),
('Vocabulario', 'Deportes', 'Premio', 'Award'),
('Vocabulario', 'Deportes', 'Entrenador', 'Coach'),
('Vocabulario', 'Deportes', 'Cancha', 'Court'),
('Vocabulario', 'Deportes', 'Copa', 'Cup'),
('Vocabulario', 'Deportes', 'Gimnasio', 'Gym / Gymnasium'),
('Vocabulario', 'Deportes', 'Liga', 'League'),
('Vocabulario', 'Deportes', 'Penalizacion', 'Penalty'),
('Vocabulario', 'Deportes', 'Estadio', 'Stadium'),
('Vocabulario', 'Deportes', 'Torneo', 'Tournament'),
('Vocabulario', 'Salud', 'Alergia', 'Allergy'),
('Vocabulario', 'Salud', 'Ambulancia', 'Ambulance'),
('Vocabulario', 'Salud', 'Antibioticos', 'Antibiotics'),
('Vocabulario', 'Salud', 'Bacteria', 'Bacteria'),
('Vocabulario', 'Salud', 'Diagnosis', 'Diagnostico'),
('Vocabulario', 'Salud', 'Fiebre', 'Fever'),
('Vocabulario', 'Salud', 'Germen', 'Germ'),
('Vocabulario', 'Salud', 'Paciente', 'Patient'),
('Vocabulario', 'Salud', 'Farmacia', 'Pharmacy'),
('Vocabulario', 'Salud', 'Prescripcion', 'Prescription'),
('Vocabulario', 'Viaje', 'Viaje', 'Travel'),
('Vocabulario', 'Viaje', 'Autopista', 'Highway'),
('Vocabulario', 'Viaje', 'Aeropuerto', 'Airport'),
('Vocabulario', 'Viaje', 'Pasaporte', 'Passport'),
('Vocabulario', 'Viaje', 'Vuelo', 'Flight'),
('Vocabulario', 'Viaje', 'Avion', 'Plane'),
('Vocabulario', 'Viaje', 'Auto', 'Car'),
('Vocabulario', 'Viaje', 'Barco', 'Boat'),
('Vocabulario', 'Viaje', 'Bicicleta', 'Bicycle'),
('Vocabulario', 'Viaje', 'Motocicleta', 'Motorbike'),
('Vocabulario', 'Tiempo', 'Calendario', 'Calendar'),
('Vocabulario', 'Tiempo', 'Reloj', 'Clock'),
('Vocabulario', 'Tiempo', 'Dia', 'Day'),
('Vocabulario', 'Tiempo', 'Segundo', 'Second'),
('Vocabulario', 'Tiempo', 'Minuto', 'Minute'),
('Vocabulario', 'Tiempo', 'Hora', 'Hour'),
('Vocabulario', 'Tiempo', 'Milisegundo', 'Millisecond'),
('Vocabulario', 'Tiempo', 'Mediodia', 'Noon'),
('Vocabulario', 'Tiempo', 'Tarde', 'Afternoon'),
('Vocabulario', 'Tiempo', 'Microsegundo', 'Microsecond'),
('Gramatica', 'Presente', 'Simple: Eventos que suceden regularmente', '(Persona gramatical) + (Verbo)'),
('Gramatica', 'Presente', 'Continuo: Eventos que estan sucediendo en el momento', '(Persona gramatical) + am / are / is + (Verbo con sufijo \"-ing\")'),
('Gramatica', 'Presente', 'Perfecto: Eventos que estaban sucediendo y terminaron', '(Persona gramatical) + has / have + (Verbo con sufijo \"-ed\")'),
('Gramatica', 'Presente', 'Perfecto continuo: Eventos que estaban sucediendo y lo siguen haciendo', '(Persona gramatical) + has / have + been + (Verbo con sufijo \"-ing\")'),
('Gramatica', 'Pasado', 'Simple: Eventos que sucedieron en el pasado', '(Persona gramatical) + (Verbo con sufijo \"-ed\")'),
('Gramatica', 'Pasado', 'Continuo: Eventos que estaban sucediendo en el pasado y terminaron', '(Persona gramatical) + was / were + (Verbo con sufijo \"-ing\")'),
('Gramatica', 'Pasado', 'Perfecto: Eventos que sucedieron y terminaron en el pasado', '(Persona gramatical) + had + (Verbo con sufijo \"-ed\")'),
('Gramatica', 'Pasado', 'Perfecto continuo: Eventos que sucedieron en el pasado y continuaron hasta un punto en particular', '(Persona gramatical) + had been + (Verbo con sufijo \"-ing\")'),
('Gramatica', 'Comparacion', 'Estructura \"than\": Se usa para remarcar algo sobre otro sujeto', 'Example: Anna is taller than Maria.'),
('Gramatica', 'Comparacion', 'Estructura \"as\": Se usa para comparar algo equitativamente con otro sujeto', 'Example: Anna is as tall as Maria.'),
('Gramatica', 'Comparacion', 'Adjetivo comparativo: Mejor', 'Better'),
('Gramatica', 'Comparacion', 'Adjetivo comparativo: Peor', 'Worse'),
('Gramatica', 'Comparacion', 'Adjetivo comparativo: Mas lejos', 'Farther'),
('Gramatica', 'Comparacion', 'Adjetivo comparativo: Menos (descriptivo)', 'Less'),
('Gramatica', 'Comparacion', 'Adjetivo comparativo: Menos (cantidad)', 'Fewer'),
('Gramatica', 'Verbos modales', 'Can: Se usa para referir a una habilidad.', 'Example: She can read.'),
('Gramatica', 'Verbos modales', 'Could: Se usa para referir a una habilidad en un sentido hipotetico.', 'Example: She could read.'),
('Gramatica', 'Verbos modales', 'Must: Se usa para referirse a un deber.', 'Example: He must do his homework.'),
('Gramatica', 'Verbos modales', 'Should: Se usa para referirse a una accion que deberia llevarse a cabo, pero no es mandatorio.', 'Example: He should read more often.'),
('Gramatica', 'Verbos modales', 'Will: Se usa para referirse a un evento que se sabe que sucedera.', 'Example: The forecast said tomorrow will rain.'),
('Gramatica', 'Verbos modales', 'Would: Se usa para referirse a un evento que solia suceder en el pasado.', 'Example: I would often go out on weekends during summer.'),
('Escrito', 'Ensayo', 'Un ensayo consiste de un texto formal dividido en tres partes importantes: un párrafo introductorio, el cuerpo principal del ensayo, y un párrafo de conclusión.', ' '),
('Escrito', 'Articulo', 'Un articulo tiene el fin de entretener al lector mediante la diseccion de un topico con el que el escritor este familiarizado, con el fin de aprovechar la oportunidad para recomendar (o no) dicho topico. A un nivel academico, la estructura es muy similar a la del ensayo.', ' '),
('Escrito', 'Resenia', 'Un resenia es similar al articulo en el sentido de que se enfoca en un topico en particular y le da a saber al lector si es recomendable o no. Sin embargo, en la resenia no es necesario mantener un nivel de formalidad muy alto porque el escritor debe entrar mas en detalle sobre sus opiniones personales sobre el topico en cuestion.', ' '),
('Escrito', 'Carta', 'Una carta es probablemente el formato de escrito mas personal, puesto que el escritor le esta escribiendo directamente a otra persona. Mientras que es necesario respetar el orden de los parrafos como en los escritos previos, es posible utilizar un vocabulario mucho mas casual en comparacion a aquellos.', ' '),
('Escrito', 'Reporte', 'Un reporte busca informar al lector sobre un evento en particular, y por lo tanto, se debe mantener un tono sumamente formal y se deben evitar reflexiones personales, dado que la objetividad es la parte mas importante.', ' '),
('Vocabulario', 'Edad', 'Adolescente', 'Adolescent'),
('Vocabulario', 'Edad', 'Adolescencia', 'Adolescence'),
('Vocabulario', 'Edad', 'Joven', 'Teenager'),
('Vocabulario', 'Edad', 'Juventud', 'Youth'),
('Vocabulario', 'Edad', 'Adulto', 'Adult'),
('Vocabulario', 'Edad', 'Adultez', 'Adulthood'),
('Vocabulario', 'Edad', 'Edad media', 'Middle age'),
('Vocabulario', 'Edad', 'Anciano', 'Elderly'),
('Vocabulario', 'Edad', 'Vejez', 'Old age'),
('Vocabulario', 'Edad', 'Edad', 'Age'),
('Vocabulario', 'Sentidos', 'Vista', 'Sight'),
('Vocabulario', 'Sentidos', 'Oido', 'Hearing'),
('Vocabulario', 'Sentidos', 'Olfato', 'Smell'),
('Vocabulario', 'Sentidos', 'Gusto', 'Taste'),
('Vocabulario', 'Sentidos', 'Tacto', 'Touch'),
('Vocabulario', 'Habitaciones', 'Atico', 'Attic'),
('Vocabulario', 'Habitaciones', 'Cuarto', 'Bedroom'),
('Vocabulario', 'Habitaciones', 'Cocina', 'Kitchen'),
('Vocabulario', 'Habitaciones', 'Comedor', 'Dining room'),
('Vocabulario', 'Habitaciones', 'Sala de estar', 'Living room'),
('Vocabulario', 'Trabajo', 'Empleado', 'Employee'),
('Vocabulario', 'Trabajo', 'Empleador', 'Employer'),
('Vocabulario', 'Trabajo', 'Empleo', 'Job'),
('Vocabulario', 'Trabajo', 'Ocupacion', 'Occupation'),
('Vocabulario', 'Trabajo', 'Profesion', 'Profession'),
('Vocabulario', 'Trabajo', 'Trabajador', 'Worker'),
('Vocabulario', 'Trabajo', 'Jornada completa', 'Full-time'),
('Vocabulario', 'Trabajo', 'Jornada parcial', 'Part-time'),
('Vocabulario', 'Trabajo', 'Desempleo', 'Unemployment'),
('Vocabulario', 'Trabajo', 'Vacante', 'Vacancy'),
('Vocabulario', 'Ciencia', 'Astronomia', 'Astronomy'),
('Vocabulario', 'Ciencia', 'Bioquimica', 'Biochemistry'),
('Vocabulario', 'Ciencia', 'Biologia', 'Biology'),
('Vocabulario', 'Ciencia', 'Quimica', 'Chemistry'),
('Vocabulario', 'Ciencia', 'Geologia', 'Geology'),
('Vocabulario', 'Ciencia', 'Inmunologia', 'Immunology'),
('Vocabulario', 'Ciencia', 'Microbiologia', 'Microbiology'),
('Vocabulario', 'Ciencia', 'Meteorologia', 'Meteorology'),
('Vocabulario', 'Ciencia', 'Paleontologia', 'Paleontology'),
('Vocabulario', 'Ciencia', 'Zoologia', 'Zoology'),
('Gramatica', 'Gerundios', 'Un gerundio es un verbo con sufijo \"-ing\" que actua como un sustantivo.', 'Example: He likes her singing.'),
('Gramatica', 'Infinitivos', 'El uso del infinitivo varia dependiendo del contexto, y por lo tanto es dificl traducirlo directamente. Sin embargo, la estructura siempre se mantiene igual.', 'to + (Verbo)'),
('Gramatica', 'Clausulas relativas', 'Quien', 'Who'),
('Gramatica', 'Clausulas relativas', 'Cual', 'Which'),
('Gramatica', 'Clausulas relativas', 'Donde', 'Where'),
('Gramatica', 'Clausulas relativas', 'Cuando', 'When'),
('Gramatica', 'Clausulas relativas', 'Cuyo', 'Whose'),
('Gramatica', 'Contables', 'Los sustantivos contables son aquellos a los que se puede referir como individual o plural.', 'Example: She likes apples. / She wants an apple.'),
('Gramatica', 'Incontables', 'Los sustantivos incontables son aquellos que no se pueden contar con numeros pero si mediante el uso de cuantificadores.', 'Example: She would like some food.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `mail` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `anios` int(1) NOT NULL,
  `nivel` int(1) NOT NULL,
  `examenes` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lugar` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `otros_i` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`mail`, `anios`, `nivel`, `examenes`, `lugar`, `otros_i`) VALUES
('test1@gmail.com', 3, 2, 'PET KET', 'En el colegio', 1),
('test10@gmail.com', 1, 1, 'Otro', 'No estudio en ningún lugar', 1),
('test11@gmail.com', 1, 1, '', 'No estudio en ningún lugar', 0),
('test12@gmail.com', 5, 3, 'FCE', 'En un instituto', 0),
('test13@gmail.com', 2, 2, 'PET KET', 'En un instituto', 1),
('test14@gmail.com', 3, 2, 'FCE', 'En casa (Autodidacta)', 1),
('test15@gmail.com', 2, 1, 'Otro', 'En el colegio', 1),
('test16@gmail.com', 5, 3, 'FCE', 'Otro', 0),
('test17@gmail.com', 4, 1, 'PET', 'En el colegio', 1),
('test18@gmail.com', 5, 1, '', 'En el colegio', 0),
('test19@gmail.com', 5, 3, 'CPE CAE FCE PET KET Otro', 'En casa (Autodidacta)', 1),
('test2@gmail.com', 4, 1, 'PET Otro', 'En el colegio', 0),
('test20@gmail.com', 4, 2, 'FCE', 'En el colegio', 1),
('test21@gmail.com', 5, 3, 'CAE', 'En casa (Autodidacta)', 0),
('test22@gmail.com', 4, 3, 'CPE CAE', 'En un instituto', 0),
('test23@gmail.com', 4, 1, 'KET Otro', 'En el colegio', 1),
('test24@gmail.com', 4, 2, 'FCE', 'En un instituto', 0),
('test25@gmail.com', 5, 3, 'CPE FCE', 'En un instituto', 0),
('test26@gmail.com', 1, 1, '', 'No estudio en ningún lugar', 0),
('test27@gmail.com', 4, 2, 'FCE PET KET', 'En casa (Autodidacta)', 0),
('test28@gmail.com', 1, 1, 'Otro', 'No estudio en ningún lugar', 1),
('test29@gmail.com', 3, 2, 'FCE PET', 'En un instituto', 0),
('test3@gmail.com', 4, 2, 'FCE', 'En casa (Autodidacta)', 0),
('test30@gmail.com', 5, 3, 'CPE FCE', 'En un instituto', 1),
('test4@gmail.com', 5, 3, 'CAE FCE', 'En un instituto', 0),
('test5@gmail.com', 5, 1, '', 'En el colegio', 0),
('test6@gmail.com', 2, 1, '', 'En casa (Autodidacta)', 0),
('test7@gmail.com', 5, 3, 'CPE Otro', 'En casa (Autodidacta)', 1),
('test8@gmail.com', 5, 3, 'FCE', 'En un instituto', 0),
('test9@gmail.com', 4, 2, 'Otro', 'En el colegio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contrasena`, `correo`) VALUES
('Carlos', 'test1', 'test1@gmail.com'),
('María', 'test10', 'test10@gmail.com'),
('Jorge', 'test11', 'test11@gmail.com'),
('Nicolás', 'test12', 'test12@gmail.com'),
('Naju', 'test13', 'test13@gmail.com'),
('Horacio', 'test14', 'test14@gmail.com'),
('Daniel', 'test15', 'test15@gmail.com'),
('Iván', 'test16', 'test16@gmail.com'),
('Saúl', 'test17', 'test17@gmail.com'),
('Raúl', 'test18', 'test18@gmail.com'),
('William', 'test19', 'test19@gmail.com'),
('Andrea', 'test2', 'test2@gmail.com'),
('Nélida', 'test20', 'test20@gmail.com'),
('Bruno', 'test21', 'test21@gmail.com'),
('Facundo', 'test22', 'test22@gmail.com'),
('Alejandro', 'test23', 'test23@gmail.com'),
('Román', 'test24', 'test24@gmail.com'),
('Brenda', 'test25', 'test25@gmail.com'),
('Melina', 'test26', 'test26@gmail.com'),
('Jazmín', 'test27', 'test27@gmail.com'),
('Rubén', 'test28', 'test28@gmail.com'),
('Luis', 'test29', 'test29@gmail.com'),
('Nahuel', 'test3', 'test3@gmail.com'),
('Camila', 'test30', 'test30@gmail.com'),
('Federico', 'test4', 'test4@gmail.com'),
('Francisco', 'test5', 'test5@gmail.com'),
('Sofia', 'test6', 'test6@gmail.com'),
('Franco', 'test7', 'test7@gmail.com'),
('Santiago', 'test8', 'test8@gmail.com'),
('Abril', 'test9', 'test9@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`mail`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
