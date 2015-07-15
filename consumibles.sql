-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2015 a las 10:49:40
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8
=======
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2015 a las 23:47:07
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `consumibles`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(10) unsigned NOT NULL,
  `nombre_categoria` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cateproduc`
--

CREATE TABLE IF NOT EXISTS `cateproduc` (
  `id_producto` int(10) unsigned NOT NULL,
  `id_categoria` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_07_10_203714_create_productos_table', 1),
<<<<<<< HEAD
('2015_07_10_203724_create_ventas_table', 1);
=======
('2015_07_10_203724_create_ventas_table', 1),
('2015_07_13_000000_create_ventas_realizadas_table', 1),
('2015_07_14_211715_create_categorias_table', 1),
('2015_07_14_212800_create_cateproduc_table', 2);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
<<<<<<< HEAD
  `id_producto` int(10) unsigned NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
=======
`id` int(10) unsigned NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
  `precio` int(11) NOT NULL,
  `disponible` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `categoria`, `precio`, `disponible`, `created_at`, `updated_at`) VALUES
(1, 'HP All In One J2900 Intel Pentium RAM 4GB DD 500GB', 'pcescritorio', 8400, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Computadora Lenovo M7 SFF,Ram 4GB ,Disco Duro 320GB,Quemador DVD, Monitor Led 19"', 'pcescritorio', 2860, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Computadora CPU Gamer FX6 (21.0 GHZ) DD 1TB + (60 SSD) RAM 8GB 2GB VIDEO DEDICADO + MONITO 23"', 'pcescritorio', 10990, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Computadora Quad Core Ultron APU AMD Athlon 5150 8GB RAM 1TB DD + LED 19.5”', 'pcescritorio', 5400, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Computadoras HP Elite Core I3 4gb de Ram 250gb disco duro Lcd de 19" teclado mouse HP 8100 elite', 'pcescritorio', 10000, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'iMac Apple MF883E/A Intel core i5 RAM 8GB DD 500GB Mac OS X 10.9 Mavericks 21.5''''-Plata', 'pcescritorio', 20000, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CAJA DE CARTUCHO', 'consumibles', 1, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'CAJA DE TONNER', 'consumibles', 1, 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CAJA DE TONNER GRANDE', 'consumibles', 1, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'DRUMS CANON-PC 330', 'consumibles', 1, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'DRUMS EPSON 6200', 'consumibles', 1, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'DRUMS/CILINDRO PARA HP 1215/2025/1515/2020', 'consumibles', 1, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Cartucho Toner Kyocera Tk-1112/1112/1110 Compatible Nuevo Ge', 'consumibles', 450, 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Laptop Asus R510CA-SS51 Intel Core i5-3337U 1.8Ghz RAM 6GB DD 750GB Windows 8 15.6"', 'laptops', 8000, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Laptop Acer E-11 WIN 8.1, 250GB, 2GB Color Rosa', 'laptops', 3800, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Notebook Lenovo G40-30 N2840 4Gb Ram 500Gb Windows 8.1 14"-roja.', 'laptops', 4800, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Apple MacBook Pro Intel Core i5 2.5Ghz RAM 4GB DD 500GB 13.3"-Plateado', 'laptops', 16000, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'HP 14-r016la 14'''', Intel Celeron N2840 2.16GHz, 4GB, 500GB, Windows 8.1 64-bit, Negro', 'laptops', 5300, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Mouse MICROSOFT U7Z-00008 1850 Inalambrico-Negro', 'accesorios', 189, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Mouse Logitech MX Master Inalámbrico - Negro', 'accesorios', 2400, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Track Mouse PERFECT CHOICE Inalambrico NEGRO PC-044178', 'accesorios', 289, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Kit con Teclado y Ratón Acteck UETE-162-Negro', 'accesorios', 130, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Teclado Microsoft Natural Ergonomic 4000 B2M-00016', 'accesorios', 740, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Kit de teclado y mouse inalambricos perfect choice pc-200925', 'accesorios', 200, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Memoria RAM HyperX Fury Kingston HX318C10FB/8 8GB-Negro', 'accesorios', 1100, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Memoria RAM Kingston HyperX Fury HX316C10FR/4 4GB DDR3-Rojo', 'accesorios', 560, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Memoria RAM DDR2 2GB Adata AD2U800B2G6-S Premier 800Mhz', 'accesorios', 550, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Memoria Ram para computadora 4GB DDR3 CPU PC 1333 Mhz.', 'accesorios', 640, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Tarjeta de video MSI GTX 980 GAMING 4G NVIDIA Geforce GTX 980 ', 'accesorios', 11000, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Headset Razer Tiamat Over Ear 7.1 Canales Gamer-Negro', 'accesorios', 3300, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Tarjeta de Video Asus STRIX-GTX750TI-OC-2GD5 Nvidia Geforce STRIX GTX 750TI OC 2GB DDR5', 'accesorios', 3500, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'EVGA SuperNOVA 850G2 80PLUS Gold Certified ATX12V/EPS12V 850W Power Supply', 'accesorios', 3300, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
=======
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
<<<<<<< HEAD
  `id` int(10) unsigned NOT NULL,
=======
`id` int(10) unsigned NOT NULL,
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
=======
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
<<<<<<< HEAD
  `id_ventas` int(10) unsigned NOT NULL,
  `id_usuarios` int(10) unsigned NOT NULL,
=======
`id_ventas` int(10) unsigned NOT NULL,
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
  `id_producto` int(10) unsigned NOT NULL,
  `num_compras` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
=======
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasrealizadas`
--

CREATE TABLE IF NOT EXISTS `ventasrealizadas` (
`id_venta` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

--
-- Índices para tablas volcadas
--

--
<<<<<<< HEAD
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);
=======
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cateproduc`
--
ALTER TABLE `cateproduc`
 ADD KEY `cateproduc_id_producto_foreign` (`id_producto`), ADD KEY `cateproduc_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id_producto`);
=======
 ADD PRIMARY KEY (`id`);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);
=======
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id_ventas`), ADD KEY `ventas_id_usuarios_foreign` (`id_usuarios`), ADD KEY `ventas_id_producto_foreign` (`id_producto`);
=======
 ADD PRIMARY KEY (`id_ventas`), ADD KEY `ventas_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `ventasrealizadas`
--
ALTER TABLE `ventasrealizadas`
 ADD PRIMARY KEY (`id_venta`);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
=======
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
=======
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
<<<<<<< HEAD
  MODIFY `id_ventas` int(10) unsigned NOT NULL AUTO_INCREMENT;
=======
MODIFY `id_ventas` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventasrealizadas`
--
ALTER TABLE `ventasrealizadas`
MODIFY `id_venta` int(10) unsigned NOT NULL AUTO_INCREMENT;
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140
--
-- Restricciones para tablas volcadas
--

--
<<<<<<< HEAD
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
ADD CONSTRAINT `ventas_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
ADD CONSTRAINT `ventas_id_usuarios_foreign` FOREIGN KEY (`id_usuarios`) REFERENCES `users` (`id`);
=======
-- Filtros para la tabla `cateproduc`
--
ALTER TABLE `cateproduc`
ADD CONSTRAINT `cateproduc_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
ADD CONSTRAINT `cateproduc_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
ADD CONSTRAINT `ventas_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
>>>>>>> 4899844ad8a6709c6f333482a9e3c1a2a7aba140

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
