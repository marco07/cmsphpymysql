-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 11:19:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `Categoria` varchar(200) NOT NULL,
  `Imagen` varchar(200) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `Categoria`, `Imagen`, `FechaRegistro`) VALUES
(1, 'Bebidas', '', '2024-01-09 02:08:33'),
(2, 'Carnes', '', '2024-01-09 02:08:33'),
(3, 'Mariscos', '', '2024-01-09 02:08:47'),
(4, 'Ensaladas', '', '2024-01-09 02:08:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo`
--

CREATE TABLE `combo` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `url` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `combo`
--

INSERT INTO `combo` (`id`, `titulo`, `precio`, `descripcion`, `url`, `fechaRegistro`) VALUES
(1, 'Paradise Combo', 600, '                                             2 platos de tu elección\r\nPostres\r\nBebidas ilimintado\r\nUna ensalada                                       ', '#', '2023-12-21 02:06:16'),
(2, 'Paradise Familiar', 1200, '               4 platos de tu elección\r\nPostres\r\nBebidas ilimintado\r\nDos ensaladas             ', '#', '2023-12-21 02:05:34'),
(3, 'Paradise', 500, '               Comida Buffet\r\nPostres ilimitados\r\nBebidas ilimintado\r\nEnsaladas ilimitadas             ', '#', '2023-12-21 02:05:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `imagen` varchar(15) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `titulo`, `descripcion`, `imagen`, `fechaRegistro`) VALUES
(1, 'Paradise Lobster & Steakhouse', 'En Paradise mantenemos cada día el compromiso de servir y preparar cada plato con calidad excepcional y ofrecer a cada uno de nuestros huéspedes un servicio personalizado que ha situado a Paradise en una categoría de primer nivel por su amplio menú internacional donde encontrarás los mejores Cortes de Carne, Langosta Importada, así como otros exclusivos y frescos frutos del Mar, que junto con sus exclusivas Cremas y Entradas Internacionales hacen del menú de Paradise un verdadero deleite para gustos exigentes.', 'destacado.jpg', '2023-12-26 01:52:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegacion`
--

CREATE TABLE `navegacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `opcion` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icono` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `navegacion`
--

INSERT INTO `navegacion` (`id`, `opcion`, `url`, `icono`, `fechaRegistro`) VALUES
(1, 'Inicio', 'index.php', 'glyphicon glyphicon-home', '2023-12-18 03:23:11'),
(2, 'Menu', '#', 'glyphicon glyphicon-list-alt', '2019-02-11 18:09:46'),
(3, 'Promociones', '#', 'glyphicon glyphicon-gift', '2019-02-11 18:10:56'),
(4, 'Bebidas', '#', 'glyphicon glyphicon-credit-card', '2019-02-11 18:10:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(10) UNSIGNED NOT NULL,
  `NombrePlato` varchar(200) NOT NULL,
  `imagen` varchar(15) NOT NULL,
  `detalle` varchar(200) NOT NULL,
  `urlDetalle` varchar(50) NOT NULL,
  `urlReservar` varchar(50) NOT NULL,
  `tiempoPreparacion` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `NombrePlato`, `imagen`, `detalle`, `urlDetalle`, `urlReservar`, `tiempoPreparacion`, `idCategoria`, `Precio`, `fechaRegistro`) VALUES
(1, 'Carne Asada', 'carne.jpg', 'Frescos trozos de carnes, vegetales, vino y camarones, mezclados en perfecta armonía.', '#detalle', '#', 30, 2, 20, '2024-01-09 02:12:55'),
(2, 'Pollo a la plancha', 'pasta.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#detalle', '#', 20, 2, 15, '2024-01-09 02:13:02'),
(3, 'Filete de pescado', 'filetepollo.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#detalle', '#', 25, 3, 17, '2024-01-09 02:13:10'),
(4, 'Ensalada', 'carne.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#detalle', '#', 20, 4, 0, '2024-01-09 02:24:44'),
(5, 'Vino', 'pasta.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#detalle', '#', 15, 1, 0, '2024-01-09 02:25:07'),
(6, 'Pescado', 'filetepollo.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#detalle', '#', 45, 3, 0, '2024-01-09 02:25:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` varchar(15) NOT NULL,
  `clase` varchar(50) NOT NULL,
  `textoBoton` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `activado` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `descripcion`, `imagen`, `clase`, `textoBoton`, `url`, `activado`, `fechaRegistro`) VALUES
(1, 'Excelentes Bebidas.', 'Enamorate de nuestras bebidas preparadas con ingredientes de la mejor calidad para clientes exlusivos como tu.', 'slide1.jpg', 'first-slide', 'Comprar ahora mismo!', '#', '', '2023-12-24 04:33:24'),
(2, 'Carnes y filetes', 'Restaurante abrió sus puertas en 1983 en El Salvador. Desde el inicio de nuestro servicio ha sido inigualable.', 'slide2.jpg', 'second-slide', 'Reserva ahora !', '#', '', '2023-12-24 04:34:14'),
(3, 'Las mejores comidas', 'Amamos las buenas hamburguesas, y nos fascina lo que produce: las pláticas, las ideas, los lazos y los momentos', 'slide3.jpg', 'third-slide', 'Comprar ahora !', '#', 'active', '2023-12-24 04:34:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `name`, `email`, `fechaRegistro`) VALUES
(1, 'paradise', '123', 'Marco Andrade Guerrero', 'marco@marco.com', '2023-12-15 02:12:18'),
(2, 'marco', '321', 'Antonio Guerrero', 'antonio@marco.com', '2019-02-10 18:35:31'),
(3, 'jose lopez', '123', 'Jose Lopez', 'jose@lopez.com', '2023-12-15 02:13:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `navegacion`
--
ALTER TABLE `navegacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `navegacion`
--
ALTER TABLE `navegacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
