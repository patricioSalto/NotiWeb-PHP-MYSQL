-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 08:11:26
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notiweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `texto_principal` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta_imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `id_usuario`, `titulo`, `id_categoria`, `texto_principal`, `descripcion`, `ruta_imagen`) VALUES
(21, 3, 'Coronavirus en Argentina', 5, 'El Ministerio de Salud de la Nación informó este sábado que durante las últimas 24 horas se registraron 44 muertes y 2.590 nuevos casos positivos por coronavirus. Con estos datos, el total de infectados en todo el país asciende a 75.376 y las víctimas fatales suman 1.481.\r\n\r\nDel total de esos casos, 1.069 (1,4%) son importados, 26.548 (35,2%) son contactos estrechos de casos confirmados, 35.186 (46,7%) son casos de circulación comunitaria y el resto se encuentra en investigación epidemiológica.\r\n\r\nEn el reporte matutino se registraron 16 nuevas muertes. 10 hombres, 6 de 67, 76, 73, 82, 76 y 48 años, de la provincia de Buenos Aires; 3 de 73, 61 y 82 años, de la ciudad de Buenos Aires; uno de 72 años, de Neuquén; y 6 mujeres, 4 de 85, 56, 88 y 75 años, también de la provincia de Buenos Aires; dos de 97 y 90 años, de Capital Federal.', 'El Ministerio de Salud de la Nación informó este sábado que durante las últimas 24 horas se registraron 44 muertes y 2.590 nuevos casos positivos por coronavirus. Con estos datos, el total de infectados en todo el país asciende a 75.376 y las víctimas fatales suman 1.481.', 'imagenes/3/DYZJF3H5MNAJRBNWKTHZCBN2ZE.jpg'),
(22, 1, 'La Juventus aplastó a Torino en el Derby della Mole', 2, 'El norte de Italia estuvo paralizado por unas horas debido a una nueva edición del Derby della Mole, enfrentamiento que puso cara a cara a dos de los clubes con más historia del país: Juventus se impuso por 4-1 al Torino en su estadio y cosechó una importante victoria para afianzarse en lo más alto de la tabla de posiciones.\r\n\r\nEl duelo comenzó de forma inmejorable para la Juve, que en su primer avance logró ponerse en ventaja en el marcador. El argentino Paulo Dybala fue el autor del 1-0 en solamente 2 minutos de juego, anotando así su undécimo tanto en este certamen, el quinto gol consecutivo (ha anotado en todos los partidos de liga desde el regreso del fútbol en Italia).\r\n\r\nAntes de cumplirse la media hora, con la Vecchia Signora cediendo el control a su rival pero siendo superior en duelos individuales y más consistente en sus ataques, llegó un contragolpe perfecto encabezado por Cristiano Ronaldo y que terminó con gol del colombiano Juan Guillermo Cuadrado.\r\n\r\n', 'El norte de Italia estuvo paralizado por unas horas debido a una nueva edición del Derby della Mole. Juventus se impuso por 4-1 al Torino en su estadio.', 'imagenes/1/GRPCTKVRPW5EVIDI2SLVMDTTI4.jpg'),
(23, 3, '“Solo una vacuna puede parar esta pandemia”, afirman los científicos de la UBA', 5, 'Trabajan junto a la Universidad de Winconsin en Estados Unidos en un desarrollo similar al que erradicó la viruela de la faz del planeta.\r\nEn el listado de los casi 200 proyectos de vacunas que existen en desarrollo hoy en el mundo y que comunica la Organización Mundial de la Salud (OMS), no existe uno similar al que están avanzando científicos de la Universidad de Buenos Aires (UBA) junto a sus pares de la Universidad de Wisconsin en Estados Unidos.\r\n\r\nA principio de la pandemia por la aparición del virus SARS-CoV-2 que genera la enfermedad COVID-19, Ubatec, que es la Agencia de vinculación tecnológica de la UBA, firmó un convenio con la universidad estadounidense para participar del proyecto de desarrollo de una vacuna eficaz contra el coronavirus.\r\n\r\nY se trata de un desarrollo único en el mundo porque en ningún país está registrado un proyecto similar, basado en una plataforma de vacuna ya probada contra la varicela, única enfermedad hasta ahora erradicada en el mundo.\r\n\r\n', 'Los investigadores Silvia Colavecchia, Silvia Mundo y Gabriel Capitelli son la cabeza del proyecto argentino de vacuna más avanzado en el país. ', 'imagenes/3/WJWDXXN42NBRBCLPPU2PMONFLM.jpg'),
(24, 3, 'Los gremios docentes ponen reparos a la vuelta a las escuelas en agosto', 4, 'Los gremios docentes con representación nacional ponen reparos a la intención oficial. Consideran que muchos edificios escolares no están en condiciones de cumplir con el protocolo sanitario que se elaboró en el Ministerio de Educación, que para ello debería aumentarse la inversión de tal modo que permita que durante julio, el mes que queda, se reacondicionen los establecimientos y se los abastezca de los insumos necesarios.\r\n\r\nSergio Romero, secretario general de UDA, aseguró que hay “serias dificultades” para que las clases presenciales vuelvan en agosto. “Las escuelas no están bien y tienen serias falencias a nivel de infraestructura que no son nuevas. El interior del país es muy distinto a la Capital Federal. Si se pretende que las clases comiencen en las escuelas que no tengan dificultades, no empezarán nunca porque están saturadas de dificultades”, subrayó.\r\n\r\nLos sindicatos remarcan las diferencias entre las realidades de las distintas provincias. De acuerdo a las últimas declaraciones del ministro de Educación Nicolás Trotta, el esquema de regreso de agosto dejará afuera al Área Metropolitana de Buenos Aires (AMBA) y Chaco por sus altos niveles de contagio. Del mismo modo, las provincias patagónicas, por el frío extremo que atraviesan, deberán aguardar dos o tres semanas más.', 'Ya falta un mes para la fecha que el Gobierno marca como la de regreso a las clases presenciales en casi todo el país.', 'imagenes/3/TPB5VIN4VFDAVB6LOCOTRHZ4CU.jpg'),
(30, 1, 'El funcionario del Ministerio de Seguridad contrajo coronavirus', 1, 'El secretario de Seguridad, Eduardo Villalba, se sumó a la lista de los dirigentes políticos contagiados de coronavirus. La ministra del área, Sabina Frederic, informó hoy en radio La Red que el funcionario se realizó un hisopado con resultado positivo luego de comprobarse un caso en uno de sus custodios, y señaló que se encuentra asintomático, aislado y trabajando desde la casa.\r\n\r\nMinutos más tarde, el propio Villalba confirmó el diagnóstico en sus redes sociales: “Me confirmaron positivo Covid-19 asintomático. Estoy bien y estoy trabajando desde mi casa con acceso a las informaciones para monitorear todas las acciones que conducimos en el Ministerio. Trabajar en todos los territorios del país supone este riesgo e impone este nuevo esfuerzo”, indicó.\r\n\r\nY agregó: “Debemos cuidarnos y ser solidarios para terminar cuanto antes con esta pandemia. La cuarentena es, además de una obligación, una necesidad que requiere del esfuerzo de todas y todos. Para poder salir, debemos quedarnos en casa”.\r\n\r\nLa semana pasada, Villalba mantuvo un fuerte cruce con el ministro de Seguridad bonaerense, Sergio Berni, por sus críticas al operativo policial en Puente La Noria. En el primer día de la nueva cuarentena estricta, el funcionario bonaerense llegó en su moto hasta un retén dispuesto por la policía federal e hizo visibles sus críticas.', 'Es Eduardo Villalba, secretario de Seguridad, que la semana pasada mantuvo un fuerte cruce con el ministro bonaerense por sus críticas al operativo policial en Puente La Noria.', 'imagenes/1/ONTWIXCU7JACNIX6CIX5P3WPGI.jpg'),
(31, 1, 'Alerta en River: la millonaria oferta de un club extranjero por Juanfer Quintero', 2, 'Desde el entorno del jugador informaron que desde Qatar les llegó una propuesta económica que parece irresistible, no solo para el jugador sino también para el Millonario, ya que desde Medio Oriente estarían dispuestos a pagar una cifra superior a 8 millones de dólares por el mediocampista ofensivo colombiano. Además, anticiparon que el llamado oficial llegará al club en unos días.\r\n\r\nCabe recordar que a principios de 2019, luego de ser el autor de un golazo en la Superfinal de la Copa Libertadores ante Boca en Madrid, desde la entidad de Núñez le renovaron el contrato a Juanfer hasta junio de 2022 y establecieron una cláusula de salida por 15 millones de dólares. Sin embargo, el mal momento económico que atraviesa el fútbol argentino en general podría favorecer a que la Banda sea más permisiva con la cotización del futbolista ante el monto ofrecido.\r\n\r\nClaro que aún no hay nada decidido, desde la dirigencia esperarán la oferta formal para luego consultarlo con el entrenador Marcelo Gallardo, mientras que desde el lado de Quintero, pese a que el salario a percibir suena más que seductor, informan que no lo es tanto el proyecto y el nivel futbolístico de la liga qatarí, efecto que estaría haciendo dudar al cafetero.\r\n\r\nDesde su explosión en el Millonario, Juanfer no solo demostró tener talento suficiente como para recalar en la élite europea, sino que además se convirtió en una fija en el seleccionado de Colombia. Su posible llegada a Qatar, una liga de visibilidad menor, podría hacerle perder terreno, sobre todo de cara a lo que será el Mundial de 2022.', 'Desde el entorno del colombiano informaron que llegó una importante propuesta desde Qatar y que el llamado oficial llegará en los próximos días al Millonario.', 'imagenes/1/BPAXME327RCURHUQAZODH626FM.jpg'),
(32, 1, 'La Conmebol confirmó la fecha de reanudación de la Copa Libertadores', 2, 'Luego de la interrupción de las competencias por la pandemia de coronavirus, la Copa Libertadores y la Copa Sudamericana ya tienen fecha para su regreso. La Conmebol dispuso hoy la reanudación de ambos certámenes, que se disputarán bajo estrictos protocolos y medidas de prevención.\r\n\r\nDe esta manera, la Copa Libertadores volverá al ruedo el próximo martes 15 de septiembre, mientras que la Sudamericana regresará el martes 27 de octubre. Ambos certámenes terminarán en el 2021, aunque no aún no hay fecha cierta para las respectivas finales únicas.\r\n\r\nEn el caso de la Libertadores, entre septiembre y octubre se disputarán las semanas tres, cuatro, cinco y seis de la Fase de Grupos (la una y la dos ya se jugaron a principios de marzo). Luego se realizará el sorteo de los octavos de final, que serán a fines de noviembre y principios de diciembre. Los cuartos de final se desarrollarán en el último mes del 2020, mientras que las semifinales serán en enero de 2021.\r\n\r\nLa Sudamericana, en tanto, regresará con la disputa de la segunda fase y las siguientes instancias coincidirán con las fechas de la Libertadores.', 'El organismo dispuso el regreso de las máximas competencias de clubes continentales bajo estrictos protocolos para la prevención del Covid-19', 'imagenes/1/GQJFXI2OVFDU5MM5T4K6HHSUE4.jpg'),
(33, 1, 'Bale deja el Real Madrid para sumarse al Tottenham', 2, '¡Basta! ¡Basta! ¡Basta! gritaba la turba enfurecida\r\n¡sangre! ¡sangre! ¡sangre! pedía la jauría sin cesar\r\n¡dame, ay, dame algo! \r\npedía el mendigo en la esquina\r\n¡chusma! ¡chusma! ¡chusma! \r\naullaba la vecina sin parar.', '¡Basta! ¡Basta! ¡Basta! gritaba la turba enfurecida\r\n¡sangre! ¡sangre! ¡sangre! pedía la jauría', 'imagenes//1600537425_178519_1600537842_album_grande.jpg'),
(35, 1, 'Patricio Rey y sus Redonditos de ricota', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', 'imagenes//oktubre_0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Politica'),
(2, 'Deporte'),
(3, 'Sociedad'),
(4, 'Educacion'),
(5, 'Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_articulo`
--

CREATE TABLE `cu_articulo` (
  `id_cuArticulo` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hora` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cu_articulo`
--

INSERT INTO `cu_articulo` (`id_cuArticulo`, `id_articulo`, `id_usuario`, `hora`, `fecha`, `accion`) VALUES
(1, 31, 1, '9:46 PM', '10-07-2020', 'Modificado'),
(2, 32, 1, '10:23 PM', '10-07-2020', 'Creado'),
(3, 22, 1, '10:50 PM', '10-07-2020', 'Modificado'),
(4, 23, 3, '11:07 PM', '10-07-2020', 'Modificado'),
(5, 33, 1, '5:38 PM', '05-10-2020', 'Creado'),
(11, 35, 1, '1:59 AM', '08-10-2020', 'Creado'),
(12, 35, 1, '2:23 AM', '08-10-2020', 'Modificado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_sesion`
--

CREATE TABLE `datos_sesion` (
  `id_datoSesion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hora` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_sesion`
--

INSERT INTO `datos_sesion` (`id_datoSesion`, `id_usuario`, `hora`, `fecha`, `accion`) VALUES
(1, 1, '6:31 PM', '01-07-2020', 'Inicio'),
(2, 1, '6:32 PM', '01-07-2020', 'Cierre'),
(3, 1, '7:33 PM', '01-07-2020', 'Inicio'),
(4, 3, '7:38 PM', '01-07-2020', 'Cierre'),
(5, 3, '8:07 PM', '01-07-2020', 'Cierre'),
(6, 3, '8:08 PM', '01-07-2020', 'Cierre'),
(7, 3, '8:08 PM', '01-07-2020', 'Inicio'),
(8, 3, '8:08 PM', '01-07-2020', 'Cierre'),
(9, 1, '8:08 PM', '01-07-2020', 'Inicio'),
(10, 1, '8:09 PM', '01-07-2020', 'Cierre'),
(11, 3, '8:09 PM', '01-07-2020', 'Inicio'),
(12, 3, '8:09 PM', '01-07-2020', 'Cierre'),
(13, 1, '8:15 PM', '01-07-2020', 'Inicio'),
(14, 1, '8:39 PM', '01-07-2020', 'Cierre'),
(15, 3, '8:39 PM', '01-07-2020', 'Inicio'),
(16, 3, '9:03 PM', '01-07-2020', 'Cierre'),
(17, 1, '5:32 PM', '03-07-2020', 'Inicio'),
(18, 1, '10:29 PM', '03-07-2020', 'Cierre'),
(19, 3, '10:30 PM', '03-07-2020', 'Inicio'),
(20, 3, '10:33 PM', '03-07-2020', 'Cierre'),
(21, 1, '10:38 PM', '03-07-2020', 'Inicio'),
(22, 1, '10:46 PM', '03-07-2020', 'Cierre'),
(23, 1, '4:16 PM', '04-07-2020', 'Inicio'),
(24, 1, '5:24 PM', '04-07-2020', 'Inicio'),
(25, 1, '5:26 PM', '04-07-2020', 'Cierre'),
(26, 1, '5:27 PM', '04-07-2020', 'Inicio'),
(27, 1, '5:28 PM', '04-07-2020', 'Inicio'),
(28, 1, '5:33 PM', '04-07-2020', 'Inicio'),
(29, 1, '5:38 PM', '04-07-2020', 'Cierre'),
(30, 3, '5:38 PM', '04-07-2020', 'Inicio'),
(31, 3, '7:06 PM', '04-07-2020', 'Cierre'),
(32, 1, '7:06 PM', '04-07-2020', 'Inicio'),
(33, 1, '7:14 PM', '04-07-2020', 'Cierre'),
(34, 3, '7:15 PM', '04-07-2020', 'Inicio'),
(35, 3, '7:20 PM', '04-07-2020', 'Cierre'),
(36, 1, '7:30 PM', '04-07-2020', 'Inicio'),
(37, 1, '7:39 PM', '04-07-2020', 'Cierre'),
(38, 3, '7:39 PM', '04-07-2020', 'Inicio'),
(39, 3, '8:22 PM', '04-07-2020', 'Cierre'),
(40, 1, '7:08 PM', '06-07-2020', 'Inicio'),
(41, 1, '10:38 PM', '06-07-2020', 'Cierre'),
(42, 3, '10:38 PM', '06-07-2020', 'Inicio'),
(43, 3, '10:44 PM', '06-07-2020', 'Cierre'),
(44, 1, '10:44 PM', '06-07-2020', 'Inicio'),
(45, 1, '11:43 PM', '06-07-2020', 'Cierre'),
(46, 1, '7:10 PM', '10-07-2020', 'Inicio'),
(47, 1, '11:06 PM', '10-07-2020', 'Cierre'),
(48, 3, '11:06 PM', '10-07-2020', 'Inicio'),
(49, 3, '11:16 PM', '10-07-2020', 'Cierre'),
(50, 1, '4:38 PM', '11-07-2020', 'Inicio'),
(51, 1, '4:45 PM', '04-10-2020', 'Inicio'),
(52, 1, '6:20 PM', '04-10-2020', 'Cierre'),
(53, 1, '5:25 PM', '05-10-2020', 'Inicio'),
(54, 1, '6:35 PM', '05-10-2020', 'Cierre'),
(55, 1, '9:16 PM', '05-10-2020', 'Inicio'),
(56, 1, '9:18 PM', '05-10-2020', 'Cierre'),
(57, 1, '9:26 PM', '05-10-2020', 'Inicio'),
(58, 1, '9:27 PM', '05-10-2020', 'Cierre'),
(73, 1, '12:08 AM', '08-10-2020', 'Inicio'),
(74, 1, '12:08 AM', '08-10-2020', 'Cierre'),
(75, 1, '12:42 AM', '08-10-2020', 'Inicio'),
(76, 1, '2:28 AM', '08-10-2020', 'Cierre'),
(77, 1, '2:33 AM', '08-10-2020', 'Inicio'),
(78, 1, '2:34 AM', '08-10-2020', 'Cierre'),
(79, 1, '2:35 AM', '08-10-2020', 'Inicio'),
(80, 1, '3:07 AM', '08-10-2020', 'Cierre'),
(81, 1, '3:07 AM', '08-10-2020', 'Inicio'),
(82, 1, '3:08 AM', '08-10-2020', 'Cierre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contrasenia`) VALUES
(1, 'Patricio', 'Luzbelito', 'patricio.patricio@gmail.com', '12345'),
(3, 'Homero', 'Simpson', 'Homero@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `categoria` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cu_articulo`
--
ALTER TABLE `cu_articulo`
  ADD PRIMARY KEY (`id_cuArticulo`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `datos_sesion`
--
ALTER TABLE `datos_sesion`
  ADD PRIMARY KEY (`id_datoSesion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cu_articulo`
--
ALTER TABLE `cu_articulo`
  MODIFY `id_cuArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `datos_sesion`
--
ALTER TABLE `datos_sesion`
  MODIFY `id_datoSesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `cu_articulo`
--
ALTER TABLE `cu_articulo`
  ADD CONSTRAINT `cu_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`),
  ADD CONSTRAINT `cu_articulo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `datos_sesion`
--
ALTER TABLE `datos_sesion`
  ADD CONSTRAINT `datos_sesion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
