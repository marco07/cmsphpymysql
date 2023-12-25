-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-02-2019 a las 20:20:49
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paradise`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo`
--

DROP TABLE IF EXISTS `combo`;
CREATE TABLE IF NOT EXISTS `combo` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `url` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `combo`
--

INSERT INTO `combo` (`id`, `titulo`, `precio`, `descripcion`, `url`, `fechaRegistro`) VALUES
(1, 'Paradise Combo', 60, '2 platos de tu elección\r\nPostres\r\nBebidas ilimintado\r\nUna ensalada', '#', '2019-02-11 18:27:49'),
(2, 'Paradise Familiar', 120, '4 platos de tu elección\r\nPostres\r\nBebidas ilimintado\r\nDos ensaladas', '#', '2019-02-11 18:29:23'),
(3, 'Paradise', 250, 'Comida Buffet\r\nPostres ilimitados\r\nBebidas ilimintado\r\nEnsaladas ilimitadas', '#', '2019-02-11 18:29:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `imagen` varchar(15) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `titulo`, `descripcion`, `imagen`, `fechaRegistro`) VALUES
(1, 'Paradise Lobster & Steakhouse', 'En Paradise mantenemos cada día el compromiso de servir y preparar cada plato con calidad excepcional y ofrecer a cada uno de nuestros huéspedes un servicio personalizado que ha situado a Paradise en una categoría de primer nivel por su amplio menú internacional donde encontrarás los mejores Cortes de Carne, Langosta Importada, así como otros exclusivos y frescos frutos del Mar, que junto con sus exclusivas Cremas y Entradas Internacionales hacen del menú de Paradise un verdadero deleite para gustos exigentes.', 'destacado.jpg', '2019-02-11 18:22:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegacion`
--

DROP TABLE IF EXISTS `navegacion`;
CREATE TABLE IF NOT EXISTS `navegacion` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `opcion` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icono` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `navegacion`
--

INSERT INTO `navegacion` (`id`, `opcion`, `url`, `icono`, `fechaRegistro`) VALUES
(1, 'Inicio', '#', 'glyphicon glyphicon-home', '2019-02-11 18:09:46'),
(2, 'Menu', '#', 'glyphicon glyphicon-list-alt', '2019-02-11 18:09:46'),
(3, 'Promociones', '#', 'glyphicon glyphicon-gift', '2019-02-11 18:10:56'),
(4, 'Bebidas', '#', 'glyphicon glyphicon-credit-card', '2019-02-11 18:10:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

DROP TABLE IF EXISTS `platos`;
CREATE TABLE IF NOT EXISTS `platos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imagen` varchar(15) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `urlDetalle` varchar(50) NOT NULL,
  `urlReservar` varchar(50) NOT NULL,
  `tiempoPreparacion` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `imagen`, `detalle`, `urlDetalle`, `urlReservar`, `tiempoPreparacion`, `fechaRegistro`) VALUES
(1, 'carne.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 30, '2019-02-11 18:02:09'),
(2, 'pasta.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 20, '2019-02-11 18:02:09'),
(3, 'filetepollo.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 25, '2019-02-11 18:05:39'),
(4, 'carne.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 20, '2019-02-11 18:05:55'),
(5, 'pasta.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 15, '2019-02-11 18:07:23'),
(6, 'filetepollo.jpg', 'Frescos trozos de langosta, almejas, róbalo y camarones, mezclados en perfecta armonía.', '#', '#', 45, '2019-02-11 18:07:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` varchar(15) NOT NULL,
  `clase` varchar(50) NOT NULL,
  `textoBoton` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `activado` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `descripcion`, `imagen`, `clase`, `textoBoton`, `url`, `activado`, `fechaRegistro`) VALUES
(1, 'Excelentes Bebidas.', 'Enamorate de nuestras bebidas preparadas con ingredientes de la mejor calidad para clientes exlusivos como tu.', 'slide1.jpg', 'first-slide', 'Comprar ahora!', '#', 'active', '2019-02-11 19:22:56'),
(2, 'Carnes y filetes', 'Restaurante abrió sus puertas en 1983 en El Salvador. Desde el inicio de nuestro servicio ha sido inigualable.', 'slide2.jpg', 'second-slide', 'Reserva ahora !', '#', '', '2019-02-11 17:53:17'),
(3, 'Las mejores comidas', 'Amamos las buenas hamburguesas, y nos fascina lo que produce: las pláticas, las ideas, los lazos y los momentos', 'slide3.jpg', 'third-slide', 'Comprar ahora !', '#', '', '2019-02-11 17:53:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `name`, `email`, `fechaRegistro`) VALUES
(1, 'paradise', '123', 'Marco Andrade', 'marco@marco.com', '2019-02-10 18:35:31'),
(2, 'marco', '321', 'Antonio Guerrero', 'antonio@marco.com', '2019-02-10 18:35:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
