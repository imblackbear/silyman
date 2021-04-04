-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2021 a las 02:39:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silyman_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `No. Calle` varchar(20) NOT NULL,
  `Entre cales` varchar(70) NOT NULL,
  `Colonia` varchar(45) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombre`, `Apellido`, `No. Calle`, `Entre cales`, `Colonia`, `Ciudad`, `Correo`, `Contraseña`, `Telefono`) VALUES
(1, 'Raul Abraham barron garza', 'barron garza', '213', 'Remigio', 'ebanos', 'MONTERREY', 'raulhbg@gmail.com', '121212', '12321312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_has_tipo_servicio`
--

CREATE TABLE `cliente_has_tipo_servicio` (
  `Cliente_idCliente` int(11) NOT NULL,
  `Cliente_Cotizacion_idCotizacion` int(11) NOT NULL,
  `Tipo_servicio_idTipo_servicio` int(11) NOT NULL,
  `Cotizacion_idCotizacion` int(11) NOT NULL,
  `Cotizacion_Tipo_servicio_idTipo_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idCotizacion` int(11) NOT NULL,
  `Tipo_insecto` varchar(45) NOT NULL,
  `Metros` varchar(45) NOT NULL,
  `Comentarios` varchar(45) NOT NULL,
  `Tipo_servicio_idTipo_servicio` int(11) NOT NULL,
  `fecha_consulta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `idTipo_servicio` int(11) NOT NULL,
  `metro_inicial` varchar(45) NOT NULL,
  `metro_final` varchar(45) NOT NULL,
  `precio_moscas` int(11) NOT NULL,
  `precio_cucarachas` int(11) NOT NULL,
  `precio_avispas` int(11) NOT NULL,
  `precio_alacranes` int(11) NOT NULL,
  `precio_ratones` int(11) NOT NULL,
  `precio_hormigas` int(11) NOT NULL,
  `precio_termitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `cliente_has_tipo_servicio`
--
ALTER TABLE `cliente_has_tipo_servicio`
  ADD PRIMARY KEY (`Cliente_idCliente`,`Cliente_Cotizacion_idCotizacion`,`Tipo_servicio_idTipo_servicio`,`Cotizacion_idCotizacion`,`Cotizacion_Tipo_servicio_idTipo_servicio`),
  ADD KEY `fk_Cliente_has_Tipo_servicio_Tipo_servicio1_idx` (`Tipo_servicio_idTipo_servicio`),
  ADD KEY `fk_Cliente_has_Tipo_servicio_Cliente1_idx` (`Cliente_idCliente`,`Cliente_Cotizacion_idCotizacion`),
  ADD KEY `fk_Cliente_has_Tipo_servicio_Cotizacion1_idx` (`Cotizacion_idCotizacion`,`Cotizacion_Tipo_servicio_idTipo_servicio`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idCotizacion`,`Tipo_servicio_idTipo_servicio`),
  ADD KEY `fk_Cotizacion_Tipo_servicio1_idx` (`Tipo_servicio_idTipo_servicio`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`idTipo_servicio`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Cotizacion` FOREIGN KEY (`Cotizacion_idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente_has_tipo_servicio`
--
ALTER TABLE `cliente_has_tipo_servicio`
  ADD CONSTRAINT `fk_Cliente_has_Tipo_servicio_Cliente1` FOREIGN KEY (`Cliente_idCliente`,`Cliente_Cotizacion_idCotizacion`) REFERENCES `cliente` (`idCliente`, `Cotizacion_idCotizacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cliente_has_Tipo_servicio_Cotizacion1` FOREIGN KEY (`Cotizacion_idCotizacion`,`Cotizacion_Tipo_servicio_idTipo_servicio`) REFERENCES `cotizacion` (`idCotizacion`, `Tipo_servicio_idTipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cliente_has_Tipo_servicio_Tipo_servicio1` FOREIGN KEY (`Tipo_servicio_idTipo_servicio`) REFERENCES `tipo_servicio` (`idTipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_Cotizacion_Tipo_servicio1` FOREIGN KEY (`Tipo_servicio_idTipo_servicio`) REFERENCES `tipo_servicio` (`idTipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
