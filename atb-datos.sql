-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 17:36:26
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atb-datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_actividad`
--

CREATE TABLE `tbl_actividad` (
  `id` int(11) NOT NULL,
  `idPersonal` int(11) DEFAULT NULL,
  `asunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detalles` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_actividad`
--

INSERT INTO `tbl_actividad` (`id`, `idPersonal`, `asunto`, `detalles`, `fecha`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'CAMBIO DE TECLADO', 'SE REPORTÓ EL TECLADO DAÑADO, PORQUE LE CAYÓ LÍQUIDO.', '2019-10-22 16:41:37', 1, '2019-10-22 16:41:37', '2019-10-23 16:41:21'),
(2, 2, 'CAMBIO DE TINTA A IMPRESORA EPSON L50', 'Se hizo el cambio de tinta y se comprobó el correcto funcionamiento.', '2019-10-22 21:05:22', 0, '2019-10-23 01:05:22', '2019-10-23 02:41:03'),
(3, 4, 'AYUDA CON EL TERMINAL', 'SE CONFIGURÓ EL TERMINAL, YA QUE ESTE SE DESCONECTABA CONSTANTEMENTE', '2019-10-23 12:40:03', 1, '2019-10-23 16:40:03', '2019-10-23 16:40:03'),
(4, 2, 'RECUPERACION DE DATOS DE USB', 'USB (FLASH) ESTABA CON VIRUS, SE DESINFECTÓ Y RECUPERÓ TODA LA INFORMACIÓN', '2019-11-13 13:11:00', 1, '2019-11-13 17:11:00', '2019-11-13 17:11:00'),
(5, NULL, 'ACTUALIZACION DE ANTIVIRUS', 'SE ACTUALIZÓ LA BASE DE DATOS ANTIVIRUS EN LOS EQUIPOS DEL AREA DE PRENSA', '2019-11-13 13:19:00', 1, '2019-11-13 17:19:00', '2019-11-13 17:19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_area`
--

CREATE TABLE `tbl_area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_area`
--

INSERT INTO `tbl_area` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRACION', 1, '2019-10-21 16:55:13', '2019-11-15 20:18:09'),
(2, 'COMERCIAL', 1, '2019-10-21 16:55:22', '2019-11-15 20:18:14'),
(3, 'OPERACIONES', 1, '2019-11-15 18:04:31', '2019-11-15 20:18:20'),
(4, 'SISTEMAS', 1, '2019-11-15 18:05:30', '2019-11-15 20:18:27'),
(6, 'PRODUCCION', 1, '2019-11-15 18:27:12', '2019-11-15 20:18:32'),
(7, 'POST PRODUCCION', 1, '2019-11-15 20:17:54', '2019-11-15 20:17:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_baja_recurso`
--

CREATE TABLE `tbl_baja_recurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `asunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detalles` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_baja_recurso`
--

INSERT INTO `tbl_baja_recurso` (`id`, `idRecurso`, `asunto`, `detalles`, `estado`, `created_at`, `updated_at`) VALUES
(1, 3, 'MOUSE CLICK DERECHO NO FUNCIONA', 'EL CLICK DERECHO DEL MOUSE NO RESPONDE', 0, '2019-10-27 18:15:26', '2019-10-27 18:15:29'),
(2, 3, 'DISCO DAÑADO', 'DEBIDO A UN CORTE DE ENERGÍA EL DISCO QUEDÓ DAÑADO Y SIN REPARACIÓN', 0, '2019-10-27 18:15:47', '2019-10-27 18:16:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compra`
--

CREATE TABLE `tbl_compra` (
  `id` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `detalles` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` decimal(10,0) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_compra`
--

INSERT INTO `tbl_compra` (`id`, `idProveedor`, `fecha`, `detalles`, `total`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-08 00:00:00', 'COMPRA DE DISCOS SSD', '2850', 1, '2019-11-08 18:44:14', '2019-11-08 18:44:14'),
(2, 2, '2019-11-09 00:00:00', 'COMPRA DE MONITORES', '0', 1, '2019-11-08 18:44:14', '2019-11-08 18:44:14'),
(3, 1, '2019-11-13 00:00:00', 'COMPRA DE MEMORIAS RAM', '240', 1, '2019-11-13 21:07:42', '2019-11-13 21:07:42'),
(4, 1, '2019-11-13 00:00:00', 'COMPRA DE MEMORIAS RAM', '240', 1, '2019-11-13 21:08:37', '2019-11-13 21:08:37'),
(5, 2, '2019-11-13 00:00:00', 'COMPRA DE DISCOS HDD', '1200', 1, '2019-11-13 21:44:57', '2019-11-13 21:44:57'),
(6, 2, '2019-11-13 00:00:00', 'COMPRA DE DISCOS HDD', '1200', 1, '2019-11-13 21:46:06', '2019-11-13 21:46:06'),
(7, 1, '2019-11-13 00:00:00', 'COMPRA DE MEMORIAS RAM', '150', 1, '2019-11-13 22:01:19', '2019-11-13 22:01:19'),
(8, 1, '2019-11-13 00:00:00', 'COMPRA DE PROCESADORES', '300', 1, '2019-11-14 00:21:30', '2019-11-14 00:21:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_compra`
--

CREATE TABLE `tbl_detalle_compra` (
  `id` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` decimal(10,0) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_detalle_compra`
--

INSERT INTO `tbl_detalle_compra` (`id`, `idCompra`, `idProducto`, `cantidad`, `precioUnitario`, `subtotal`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, '250', '2500', 1, '2019-11-08 18:48:10', '2019-11-08 18:48:10'),
(2, 1, 3, 5, '70', '350', 1, '2019-11-08 18:48:10', '2019-11-08 18:48:10'),
(3, 6, 1, 3, '400', '1200', 1, '2019-11-13 21:46:06', '2019-11-13 21:46:06'),
(4, 7, 3, 1, '150', '150', 1, '2019-11-13 22:01:19', '2019-11-13 22:01:19'),
(5, 8, 4, 1, '300', '300', 1, '2019-11-14 00:21:30', '2019-11-14 00:21:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formulario`
--

CREATE TABLE `tbl_formulario` (
  `id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `fechaEmision` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `razonSocial` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `serie` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`id`, `idProducto`, `serie`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'DELL-2019-OK', 1, '2019-10-25 19:43:03', '2019-10-25 19:43:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_marca`
--

CREATE TABLE `tbl_marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_marca`
--

INSERT INTO `tbl_marca` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'DELL Inc.', 1, '2019-10-22 06:00:46', '2019-11-15 20:17:25'),
(2, 'GENIUS', 1, '2019-10-22 06:00:46', '2019-10-22 06:00:46'),
(3, 'HP', 1, '2019-10-22 06:01:06', '2019-10-22 06:01:06'),
(4, 'TOSHIBA', 1, '2019-10-22 06:01:06', '2019-10-22 06:01:06'),
(5, 'DELUX', 1, '2019-10-22 06:01:22', '2019-10-22 06:01:22'),
(6, 'KINGSTON', 1, '2019-10-22 06:01:22', '2019-10-22 06:01:22'),
(7, 'SEAGATE', 1, '2019-11-13 12:55:04', '2019-11-13 12:55:04'),
(8, 'GENERICA', 1, '2019-11-13 13:00:07', '2019-11-13 13:00:07'),
(9, 'INTEL', 1, '2019-11-14 00:18:27', '2019-11-14 00:18:27'),
(10, 'AMD', 1, '2019-11-14 00:18:33', '2019-11-14 00:18:33'),
(11, 'CORSAIR', 1, '2019-11-14 00:18:40', '2019-11-14 00:18:40'),
(12, 'GIGABYTE', 1, '2019-11-14 00:18:47', '2019-11-14 00:18:47'),
(13, 'SAMSUNG', 1, '2019-11-14 00:19:37', '2019-11-14 00:19:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apPaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apMaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ci` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`id`, `nombres`, `apPaterno`, `apMaterno`, `ci`, `genero`, `direccion`, `telefono`, `correo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'HUVER DANIEL', 'MONTOYA', 'CALDERON', '8235144', 'MASCULINO', 'BARRIO PANTANAL C/ LOS CLAVELES S/N', '75033598', 'dmontoya3090@gmail.com', 1, '2019-10-20 19:15:42', '2019-10-21 08:05:02'),
(2, 'FATIMA', 'CHAMO', 'MASAI', '7893414', 'FEMENINO', 'AV. TRES PASOS AL FRENTE', '3452000', 'fatima@gmail.com', 1, '2019-10-20 19:31:02', '2019-10-20 19:31:02'),
(4, 'ALFREDO', 'MONTOYA', 'CALDERON', '8235141', 'FEMENINO', 'AV. TRES PASOS AL FRENTE, CUARTO ANILLO', '75033589', 'amontoya@gmail.com', 1, '2019-10-20 20:13:47', '2019-10-21 08:06:42'),
(5, 'GUSTAVO', 'PEDRAZA', 'ARAUZ', '9081235', 'MASCULINO', 'BARRIO LA COLORADA N2', '4578231', 'gustavo3090@hotmail.com', 1, '2019-10-21 08:01:16', '2019-10-21 08:06:39'),
(6, 'MILTON', 'BARRIO', 'CARVAJAL', '1234567', 'MASCULINO', 'MONTERO', '89123884', 'MILTON@GMAIL.COM', 1, '2019-10-23 17:33:27', '2019-11-15 18:33:11'),
(7, 'LILIANA', 'MELGAR', 'MELGAR', '13245678', 'FEMENINO', 'BARRIO EL KIOR', '34453230', 'NO TIENE', 1, '2019-10-23 17:48:27', '2019-11-15 18:33:58'),
(8, 'JAIME', 'VARGAS', 'GALINDO', '10457181', 'MASCULINO', 'MERCADO ABASTO 3ER. ANILLO', '65248910', 'JAIME@GMAIL.COM', 1, '2019-11-15 17:53:00', '2019-11-15 17:53:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE `tbl_personal` (
  `id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idArea` int(11) NOT NULL,
  `puesto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id`, `idPersona`, `idArea`, `puesto`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ASISTENTE', 1, '2019-10-21 08:31:57', '2019-10-21 08:31:57'),
(2, 2, 2, 'JEFE DE AREA', 1, '2019-10-21 08:38:14', '2019-10-21 09:03:28'),
(3, 4, 2, 'ASISTENTE', 1, '2019-10-22 06:23:50', '2019-10-22 06:23:50'),
(4, 5, 1, 'ASISTENTE', 1, '2019-10-22 08:38:21', '2019-10-22 08:38:21'),
(5, 6, 4, 'ASISTENTE', 1, '2019-11-15 19:28:44', '2019-11-15 19:28:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_privilegio`
--

CREATE TABLE `tbl_privilegio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_privilegio`
--

INSERT INTO `tbl_privilegio` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', 1, '2019-10-27 19:44:13', '2019-10-27 19:44:13'),
(2, 'USUARIO RESTRINGIDO', 1, '2019-10-27 19:44:22', '2019-10-27 19:44:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `id` int(11) NOT NULL,
  `idTipoProducto` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idMarca` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`id`, `idTipoProducto`, `descripcion`, `idMarca`, `estado`, `created_at`, `updated_at`) VALUES
(1, 3, 'Teclado Inalambrico DELL', 1, 1, '2019-10-30 18:30:17', '2019-10-30 18:30:17'),
(2, 2, 'DDR 3 - 4GB - 1333 GHZ', 6, 1, '2019-11-13 19:33:17', '2019-11-13 19:33:17'),
(3, 2, 'DDR4 - 8GB 1600 GHZ', 8, 1, '2019-11-13 19:38:04', '2019-11-13 19:38:04'),
(4, 4, 'CORE I5 3337U 1.80 GHZ', 9, 1, '2019-11-14 00:20:35', '2019-11-14 00:20:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

CREATE TABLE `tbl_proveedor` (
  `id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `razonSocial` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`id`, `idPersona`, `razonSocial`, `nit`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'DATACOM SRL', '1036403022', 1, '2019-11-08 18:43:00', '2019-11-08 18:43:00'),
(2, 2, 'DMC', '1036403021', 1, '2019-11-08 18:43:00', '2019-11-08 18:43:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recurso`
--

CREATE TABLE `tbl_recurso` (
  `id` int(11) NOT NULL,
  `idTipoRecurso` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `serie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_recurso`
--

INSERT INTO `tbl_recurso` (`id`, `idTipoRecurso`, `idMarca`, `serie`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'SSD 120GB', 'SSD 120 GB DISCO INTERNO', 1, '2019-10-22 06:28:17', '2019-11-13 16:56:48'),
(2, 2, 5, 'GENERICA', 'TECLADO SURE K578', 1, '2019-10-22 18:41:33', '2019-11-13 16:58:16'),
(3, 3, 1, 'DELL-1234', 'MOUSE INALAMBRICO BLUETHOOT', 1, '2019-10-22 19:08:38', '2019-10-27 18:16:21'),
(4, 4, 7, 'NAAD37KJ', 'HDD 1TB DISCO PORTABLE', 1, '2019-11-13 16:56:12', '2019-11-13 16:56:12'),
(5, 5, 8, 'X13995', 'DDR-400 512GB', 1, '2019-11-13 17:01:07', '2019-11-13 17:01:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ASISTENTE DE SISTEMAS', 1, '2019-10-27 19:43:40', '2019-10-27 19:43:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol_privilegio`
--

CREATE TABLE `tbl_rol_privilegio` (
  `id_rol` int(11) NOT NULL,
  `id_privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_soporte`
--

CREATE TABLE `tbl_soporte` (
  `id` int(11) NOT NULL,
  `idPersonal` int(11) NOT NULL,
  `idTipoSoporte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `asunto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `procesos` text COLLATE utf8_unicode_ci NOT NULL,
  `resolucion` text COLLATE utf8_unicode_ci NOT NULL,
  `recomendacion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_soporte`
--

INSERT INTO `tbl_soporte` (`id`, `idPersonal`, `idTipoSoporte`, `fecha`, `asunto`, `procesos`, `resolucion`, `recomendacion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-10-24', 'RECUPERACION DE INFORMACION DE FLASH', 'SE FORMATEO Y SE PROCEDIO A RECUPERAR LA INFORMCION CON EL PROGRAMA RECUVA', 'SE LOGRÓ RECUPERAR UN 70% DE INFORMACION', 'NO HAY', 1, '2019-10-24 04:32:33', '2019-10-24 04:32:33'),
(2, 1, 1, '2019-10-25', 'CONFIGURACION DE IMPRESORA EPSON L50', 'Se instaló los driver\r\ny configuró la impresora', 'Se entregó con todas sus funcionalidades al ususario', '--', 1, '2019-10-25 20:58:51', '2019-10-25 20:58:51'),
(3, 1, 1, '2019-10-25', 'CAMBIO DE CABLE DE RED', 'Se procedió al cambio de cable de red, ya que el que tenía tenía humedad y se desconectaba constantemente de la red.', 'Reemplazo de cable', '--', 1, '2019-10-25 22:09:15', '2019-10-25 22:09:15'),
(4, 1, 1, '2019-11-15', 'CAMBIO DE CABLE UTP', 'SE VERIFICÓ EL ESTADO DEL CABLE UTP.\r\nSE ENCONTRÓ HUMEDAD EN EL CABLE.', 'SE INSTALÓ UN NUEVO CABLE UTP Y VERIFICÓ LA VELOCIDAD DE TRANSFERENCIA.', 'EVITAR LA HUMEDAD EN LA OFICINA Y EN PARTICULAR EN ESE PUNTO', 1, '2019-11-15 20:31:50', '2019-11-15 20:31:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_producto`
--

CREATE TABLE `tbl_tipo_producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_producto`
--

INSERT INTO `tbl_tipo_producto` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'DISCOS SSD', 'Todos los Disco SSD', 1, '2019-10-30 17:55:55', '2019-10-30 17:55:55'),
(2, 'MEMORIAS RAM', 'Todas las Memorias RAM', 1, '2019-10-30 17:56:24', '2019-10-30 17:56:24'),
(3, 'TECLADOS', 'todos los teclados', 1, '2019-10-30 17:56:45', '2019-10-30 17:56:45'),
(4, 'PROCESADOR', 'TODOS LOS PROCESADORES', 1, '2019-11-14 00:17:34', '2019-11-14 00:17:34'),
(5, 'MONITOR', 'TODOS LOS MONITORES', 1, '2019-11-14 00:17:50', '2019-11-14 00:17:50'),
(6, 'PARLANTE', '--', 1, '2019-11-14 00:18:06', '2019-11-14 00:18:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_recurso`
--

CREATE TABLE `tbl_tipo_recurso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_recurso`
--

INSERT INTO `tbl_tipo_recurso` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'PANTALLAS', 1, '2019-10-22 09:44:05', '2019-10-22 09:44:05'),
(2, 'TECLADOS', 1, '2019-10-22 09:44:15', '2019-10-22 09:44:15'),
(3, 'MOUSE', 1, '2019-10-22 09:44:23', '2019-10-22 09:44:23'),
(4, 'DISCOS', 1, '2019-10-22 09:44:30', '2019-10-22 09:49:09'),
(5, 'MEMORIA', 1, '2019-11-13 16:42:31', '2019-11-13 16:42:31'),
(6, 'PROCESADOR', 1, '2019-11-13 16:42:44', '2019-11-13 16:42:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_soporte`
--

CREATE TABLE `tbl_tipo_soporte` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_soporte`
--

INSERT INTO `tbl_tipo_soporte` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'REDES', 1, '2019-10-23 20:47:44', '2019-10-23 20:47:44'),
(2, 'SISTEMAS INFORMATICOS', 1, '2019-10-23 20:47:44', '2019-11-13 17:16:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `contrasenha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `idPersona`, `contrasenha`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'daniel123', 1, '2019-10-27 20:40:55', '2019-10-27 20:40:55'),
(2, 2, 'fatima123', 1, '2019-10-27 20:45:12', '2019-10-27 20:45:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_rol`
--

CREATE TABLE `tbl_usuario_rol` (
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_baja_recurso`
--
ALTER TABLE `tbl_baja_recurso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_compra`
--
ALTER TABLE `tbl_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_detalle_compra`
--
ALTER TABLE `tbl_detalle_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_formulario`
--
ALTER TABLE `tbl_formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_marca`
--
ALTER TABLE `tbl_marca`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_privilegio`
--
ALTER TABLE `tbl_privilegio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serie` (`serie`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_soporte`
--
ALTER TABLE `tbl_soporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_tipo_recurso`
--
ALTER TABLE `tbl_tipo_recurso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tbl_tipo_soporte`
--
ALTER TABLE `tbl_tipo_soporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_baja_recurso`
--
ALTER TABLE `tbl_baja_recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_compra`
--
ALTER TABLE `tbl_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_compra`
--
ALTER TABLE `tbl_detalle_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_formulario`
--
ALTER TABLE `tbl_formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_marca`
--
ALTER TABLE `tbl_marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_personal`
--
ALTER TABLE `tbl_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_privilegio`
--
ALTER TABLE `tbl_privilegio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_soporte`
--
ALTER TABLE `tbl_soporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_recurso`
--
ALTER TABLE `tbl_tipo_recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_soporte`
--
ALTER TABLE `tbl_tipo_soporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
