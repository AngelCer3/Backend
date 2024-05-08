-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2024 a las 23:44:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `back`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos`
--

CREATE TABLE `t_alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellidoMaterno` varchar(200) DEFAULT NULL,
  `apellidoPaterno` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_alumnos`
--

INSERT INTO `t_alumnos` (`id_alumno`, `nombre`, `apellidoMaterno`, `apellidoPaterno`, `edad`, `sexo`) VALUES
(1, 'Angel', 'Texocotitla', 'Cerezo', 23, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_animales`
--

CREATE TABLE `t_animales` (
  `id_animal` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `raza` varchar(200) DEFAULT NULL,
  `especie` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `habitat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_carros`
--

CREATE TABLE `t_carros` (
  `id_carro` int(11) NOT NULL,
  `marca` varchar(200) DEFAULT NULL,
  `modelo` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `placa` varchar(200) DEFAULT NULL,
  `kilometraje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_personas`
--

CREATE TABLE `t_personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellidoPaterno` varchar(200) DEFAULT NULL,
  `apellidoMaterno` varchar(200) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_personas`
--

INSERT INTO `t_personas` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `correo`) VALUES
(1, 'Angel', 'Cerezo', 'Texocotitla', 'angel@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_productos`
--

CREATE TABLE `t_productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `tipo` varchar(250) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_productos`
--

INSERT INTO `t_productos` (`id_producto`, `nombre`, `tipo`, `precio`, `cantidad`) VALUES
(1, 'Nike Pegasus 40 Premium', 'Calzado', 2709.12, 3),
(2, 'Levi\'s Vaqueros Jeans Slim 511 para Hombre Azul Claro ', 'Jeans', 604.03, 4),
(4, 'SWORDSMAN', 'Playera corta sin mangas', 99.99, 6),
(5, 'Wilson,Tin para Hombre, Afelpado', 'Calcetin', 114.9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellidoPaterno` varchar(200) DEFAULT NULL,
  `apellidoMaterno` varchar(200) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `correo`, `pass`) VALUES
(3, 'Angel', 'Cerezo', 'Texocotitla12', 'angel123@mail.com', '$2y$10$ezeGvwGtOqk93cqO6uje6eFZS9w1gCyzlJbpVLYktDlXAV4YKjICy'),
(4, 'Salvador', 'Mendiola ', 'Talavera', 'pancri12@mail.com', '$2y$10$xGt55dBAqCVFbvoz.Ey0E.ikgKVR6PEOEjk2ESo5skWnRhPgyxSpm'),
(5, 'Diego', 'Bollas', 'Paredes', 'yaku89@mail.com', '$2y$10$u79POZSSJs3LYU5renn/m.yWRdvdLgXsai1fRJWPDcZ5EO0JBQtXm'),
(6, 'Lisandro', 'Solis', 'Ramirez', 'Liandro@mail.com', '$2y$10$//1lfDOhy86Hain1oAC1SuQSxVNyYbXT/U67QXYY.niw7N2mbJGte'),
(7, 'Bernardo', 'Cerezo', 'Arrioja', 'berny45@mail.com', '$2y$10$/mVT4Ab8OJEXzfcP.y0gIuf/yOznbq1xF.Lu3zY1r4qflnv.CnxkO'),
(9, 'ratata', 'Castroso', 'sensible', 'rataMeada@mail.com', '$2y$10$scTtXLjBbVQVBC3zYxA/IupGXJTYoKZgLfmQ6H6YHCOdYWfteDBlm'),
(10, 'test', 'test', 'test', 'test@mail.com', '$2y$10$u8HZo7Adi4C4iLPfgNGjru4yG6GMLP0Z9npMmdb3o7hFL9OKmpUhG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_persona`, `nombre`, `edad`, `sexo`) VALUES
(9, 'Cristo', 24, 'Masculino'),
(10, 'Cristo', 23, 'Binario'),
(11, 'Angel', 26, 'Femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `t_animales`
--
ALTER TABLE `t_animales`
  ADD PRIMARY KEY (`id_animal`);

--
-- Indices de la tabla `t_carros`
--
ALTER TABLE `t_carros`
  ADD PRIMARY KEY (`id_carro`);

--
-- Indices de la tabla `t_personas`
--
ALTER TABLE `t_personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_animales`
--
ALTER TABLE `t_animales`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t_carros`
--
ALTER TABLE `t_carros`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t_personas`
--
ALTER TABLE `t_personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
