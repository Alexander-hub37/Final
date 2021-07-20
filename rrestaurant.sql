-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2021 a las 16:28:42
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rrestaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(1, 'Rodrigo', 0, 'rofrigo@gmail.com', '2021-07-15', 'Allowed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Kanojo, Okarishimasu', 'ds', 'ds'),
(2, 'ds', 'sds', 'sds'),
(3, 'one piece', 'dsad', 'man');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Alexander', 'La fe', 'PRIMERA PLANTA', 'MESA CUADRADA', 4, '2021-07-17', 320.00, 428.80, 102.40, 'Ceviche', 6.40, 0),
(3, 'Paola', 'Ponce', 'SEGUNDA PLANTA', 'MESA CUADRADA', 3, '2021-07-18', 220.00, 277.20, 52.80, 'Ceviche', 4.40, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `idUser` int(11) NOT NULL,
  `usname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`idUser`, `usname`, `pass`) VALUES
(1, 'alex1.0', 'alexander'),
(2, 'pedro1.0', 'pedro'),
(3, 'paola1.0', 'paola'),
(4, 'Daniel', 'daniel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(50) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'PRIMERA PLANTA', 'MESA REDONDA', 'Free', NULL),
(2, 'PRIMERA PLANTA', 'MESA CUADRADA', 'Free', 0),
(3, 'PRIMERA PLANTA', 'MESA OVALADA', 'Free', NULL),
(4, 'BALCON', 'MESA RECTANGULAR', 'Free', NULL),
(5, 'PRIMERA PLANTA', 'MESA RECTANGULAR', 'Free', NULL),
(6, 'SEGUNDA PLANTA', 'MESA REDONDA', 'Free', NULL),
(7, 'SEGUNDA PLANTA', 'MESA CUADRADA', 'NotFree', 3),
(8, 'SEGUNDA PLANTA', 'MESA OVALADA', 'Free', NULL),
(9, 'SEGUNDA PLANTA', 'MESA RECTANGULAR', 'Free', NULL),
(10, 'TERRAZA', 'MESA REDONDA', 'Free', NULL),
(11, 'TERRAZA', 'MESA CUADRADA', 'Free', NULL),
(12, 'TERRAZA', 'MESA RECTANGULAR', 'Free', NULL),
(13, 'BALCON', 'MESA REDONDA', 'Free', NULL),
(14, 'BALCON', 'MESA CUADRADA', 'Free', NULL),
(15, 'BALCON', 'MESA OVALADA', 'Free', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(20) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(30) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roombook`
--

INSERT INTO `roombook` (`id`, `FName`, `LName`, `Email`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `stat`) VALUES
(2, 'Alexander', 'La fe', 'axel@gmail.com', 'Algeria', '986286965', 'PRIMERA PLANTA', 'MESA CUADRADA', '4', 'Ceviche', '2021-07-17', 'Conform'),
(3, 'Paola', 'Ponce', 'passla@gmail.com', 'Albania', '948362925', 'SEGUNDA PLANTA', 'MESA CUADRADA', '3', 'Ceviche', '2021-07-18', 'Conform'),
(4, 'Daniel', 'Alfaro', 'daniel@gmail.com', 'Mauritius', '98653214', 'SEGUNDA PLANTA', 'MESA OVALADA', '3', 'Pizza Napolitana', '2021-07-20', 'No Confirmado'),
(5, 'Otto', 'Mamani', 'otto@gmail.com', 'Barbados', '34569823', 'SEGUNDA PLANTA', 'MESA OVALADA', '4', 'Khachapuri', '2021-07-21', 'No Confirmado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`idUser`);

--
-- Indices de la tabla `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
