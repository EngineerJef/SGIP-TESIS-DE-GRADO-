-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2018 a las 02:58:08
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgip`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `fotografias` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_historico` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_actual` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `latitud` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `longitud` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nomenclatura` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nucleo_familiar` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipologia_arquitectonica` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `altura_inmueble` int(50) NOT NULL,
  `uso_suelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estilo_arquitectonico` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado_conservacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_inmueble` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`fotografias`, `nombre_historico`, `nombre_actual`, `latitud`, `longitud`, `nomenclatura`, `nucleo_familiar`, `tipologia_arquitectonica`, `altura_inmueble`, `uso_suelo`, `estilo_arquitectonico`, `estado_conservacion`, `numero_inmueble`) VALUES
('https://cdn.pixabay.com/photo/2018/09/12/00/07/heritage-3670999_960_720.jpg', 'Ladeuth', 'Ladeuth', '9,3665833', '-75.6822417', 'Car2#1-154', 'Monoparental', 'Nivel de planta: Forma de H, De acuerdo a la agrupacion: Casa aislada/villa', 1, 'Residencial', 'Eclectico', 'Mal estado', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/09/heritage-3671012_960_720.jpg', 'Zuberia', 'Zuberia', '9,3661139', '-75,6824333', 'Car2#2-37', 'Deshabitado', 'Nivel de planta: Patio en C,  De acuerdo a la agrupacion: Casa aislada/villa', 1, 'Residencial', 'Eclectico', 'Mal estado', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/09/heritage-3671011_960_720.jpg', 'Iglesia Sagrado CorazÃ²n de JesÃ¹s ', 'Iglesia Sagrado CorazÃ²n de JesÃ¹s ', '9,4033056', '-75,6834', 'Car2conCalle3#6', '', 'Nivel de planta: Lineal, De acuerdo a la agrupacion: Casa aislada/villa', 1, 'Institucional religioso', 'TransiciÃ²n', 'Buen Estado ', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/07/covenas-3671001_960_720.jpg', 'Diaz gaspar', 'Diaz gaspar', '9,8888', '-75.5655', 'Car3BCalle1B-99', 'Extensa o consanguinea', 'Nivel de planta: Lineal, De acuerdo a la agrupacion: Casa aislada/villa', 1, 'Residencial', 'Eclectico', 'Mal Estado ', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/11/heritage-3671016_960_720.jpg', 'Casa de los Capataces # 23', 'Palacios Yepes', '9,4060222', '-75.6832083', 'Casa#23', 'Extensa o ConsanguÃ­nea', 'Nivel de planta: Lineal, De acuerdo con la alineacion de las edificaciones : lineal', 1, 'Residencial', 'Eclectico', 'Buen Estado ', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/10/heritage-3671015_960_720.jpg', 'Casa de los Capataces # 24', 'Capilla de las Hermanas Misioneras de Santa rosa d', '9,4059111', '-75,6829917', 'Casa#24', 'Nuclear o Elemental', 'Nivel de planta: en L, De acuerdo con la alineacion de las edificaciones : lineal ', 1, 'Residencial', 'Eclectico', 'Buen Estado ', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/10/heritage-3671014_960_720.jpg', 'Casa de los Capataces # 25', 'Bello Llorente ', '9,4057778', '-75,6827972', 'Casa#25', ' Monoparental', 'Nivel de planta: Lineal, De acuerdo con la alineacion de las edificaciones : lineal ', 1, 'Residencial', 'Eclectico', 'Buen Estado ', 1),
('https://cdn.pixabay.com/photo/2018/09/12/00/08/heritage-3671006_960_720.jpg', 'La Mayoria', 'La Mayoria', '9,3764806', '-75.6553472', 'torrente', 'Nuclear o Elemental', 'Nivel de planta: Lineal, De acuerdo a la agrupacion: Casa aislada/villa', 1, 'Residencial', 'Eclectico', 'Mal estado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombres` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `cedula` int(50) NOT NULL,
  `telefono` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_usuario` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombres`, `apellidos`, `cedula`, `telefono`, `contrasena`, `tipo_usuario`) VALUES
('jefersson andres', 'bedoya giraldo', 1102859940, '+573007076311', '123456', 'ADMINISTRADOR'),
('prueba', 'registro', 123, '8888', '123', 'ADMINISTRADOR'),
('prueba guardado', 'registro', 321, '8888', '123', 'NORMAL'),
('Sergio Luis', 'Florez Pineda', 1102867939, '+573043982511', '123456', 'NORMAL'),
('alonso', 'andres', 123456, '8888', '123', 'NORMAL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`nomenclatura`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
