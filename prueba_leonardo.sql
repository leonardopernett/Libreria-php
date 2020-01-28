-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-01-2020 a las 15:20:39
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_leonardo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `libro_comprado` varchar(255) NOT NULL,
  `fecha_compra` date NOT NULL,
  `valor_libro` int(11) NOT NULL,
  `empleado` varchar(50) NOT NULL,
  `libro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `libro_comprado`, `fecha_compra`, `valor_libro`, `empleado`, `libro_id`) VALUES
(1, 'milena', 'perez gutierrez', 3103434987, 'milena@gmail.com', 'La isla misteriosa', '2020-01-11', 35000, 'carlos herrera', NULL),
(2, 'rosa ', 'sequeda ', 3215603421, 'rosa@gmail.com', 'Yo robot', '2020-01-22', 74000, 'luisa fernanda', NULL),
(3, 'leonardo', 'pernett jimenez', 3006152538, 'pernettleonaro@gmail.com', 'La isla del tesoro', '2020-01-14', 40000, 'luisa fernanda', NULL),
(4, 'pedro', 'perez gutierrez', 3104325334, 'pedro@gmail.com', 'De la tierra a la luna', '2020-01-11', 24000, 'carlos herrera', NULL),
(5, 'Diana', 'fernandez ochoa', 3150493843, 'diana_13@hotmail.com', 'Mientras llueve', '2020-01-02', 26000, 'carlos herrera', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `edicion` varchar(255) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio_minorista` int(11) NOT NULL,
  `valoracion` varchar(255) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editor`, `fecha_publicacion`, `edicion`, `costo`, `precio_minorista`, `valoracion`, `descripcion`) VALUES
(1, 'Cien aÃ±os de soledad ', 'Gabriel Garcia MArquez', ' Editorial Planeta', '1967-07-13', 'especial', 62000, 40000, 'bueno', 'el libro esta bien cuidado'),
(2, 'Yo robot', 'Isaac Asimov', 'Gnome Press', '1950-12-02', 'limitada', 74000, 25000, 'Extraordinario', 'el libro esta en perfecto estado fisico'),
(3, 'De la tierra a la luna', 'Julio Verne', 'Pierre-Jules Hetzel', '1865-10-14', 'especial', 45000, 24000, 'daÃ±ado', 'el libro esta en mal condiciones'),
(4, 'Mientras llueve', 'Fernando Soto Aparicio', 'Norma', '1966-08-14', 'ilustrada', 45000, 26000, 'Excelente', 'lo mejor'),
(5, 'La isla del tesoro', 'Robert Louis Stevenson', 'Cassell', '1883-07-04', 'gold', 40000, 26500, 'bueno', 'el libro esta bien en perfecta condiciones'),
(6, 'La isla misteriosa', 'Julio Verne', 'Pierre-Jules Hetzel', '1874-01-01', 'General', 88000, 35000, 'Extraordinario', 'el libro esta en buen estado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libro_id` (`libro_comprado`),
  ADD KEY `libro_id_2` (`libro_comprado`),
  ADD KEY `libro_id_3` (`libro_id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`libro_id`) REFERENCES `libros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
