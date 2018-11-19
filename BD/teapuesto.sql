-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-11-2018 a las 23:56:22
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teapuesto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_13_000000_create_users_table', 1),
(2, '2018_11_13_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_correo_index` (`correo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

DROP TABLE IF EXISTS `prueba`;
CREATE TABLE IF NOT EXISTS `prueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ci` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `nombre`, `ci`) VALUES
(1, 'gonzalo', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ci` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_ci_unique` (`ci`),
  UNIQUE KEY `usuario_correo_unique` (`correo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `ci`, `nombre`, `apellido`, `correo`, `alias`, `password`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123456', 'gonzalo', 'aguilar', 'gonzalo@gmail.com', 'gonza', '$2y$10$p70wiFN/l1vR7xrcTtDJr.Z7STsJt0neSlIlIo..FCkFqaRWPG19S', '1', 'D57Ah6WF873oc67VrsahbkTSuNSIgw1zCXwzTfnSwYdePplS0ZN7abnejxH0', '2018-11-13 19:43:24', '2018-11-13 19:43:24'),
(2, '45s', 'sd', 'sd', 'sd@gmail.com', 'sd', '$2y$10$xyLt/Nr.JZRFg0MxIQ0DjeH0QxMu1wpLapBRcbkix3FOcgmicEuy.', '1', 'fGPYGaNoaUExHA6iWoKkrtSqE8dMA7iiR2vzYS85MazOZRffTi9yqltYf4vK', '2018-11-13 19:50:53', '2018-11-13 19:50:53'),
(3, '123', 's', 's', 's@gmail.com', 'gonzalo', '123', '1', NULL, '2018-11-19 18:42:25', '2018-11-19 18:42:25'),
(4, '1236', 'gonza', 'ar', 'aguilar@gmail.com', 'gonzalo', 'eyJpdiI6Iml5dmdLd3hUczZuK0hCc3VJSTB2Q3c9PSIsInZhbHVlIjoiTkpJelZPTlJ1RUVWWkNUMmlrejhUdz09IiwibWFjIjoiZWY4ZTQyNWFmNGU4MDk3ZmRmZmM0NThhZGFhNjk3YjgzNTI0MDRjZWI0YWRhMTMzNjcyOTQ3NDhmYTZkYmVkYiJ9', '1', NULL, '2018-11-19 18:46:47', '2018-11-19 18:46:47'),
(5, '789', 'pablo', 'emilio', 'escobar@gmail.com', 'gab', '$2y$10$zwscBYm1AGUaVctpgJIFLOdlumgDJXhL7cORQDlRBbJ0TDtWKeYda', '1', NULL, '2018-11-20 03:52:45', '2018-11-20 03:52:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
