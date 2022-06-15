-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para pertec
CREATE DATABASE IF NOT EXISTS `pertec` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pertec`;

-- Volcando estructura para tabla pertec.carusels
CREATE TABLE IF NOT EXISTS `carusels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sub_titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_icono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pertec.carusels: ~3 rows (aproximadamente)
DELETE FROM `carusels`;
/*!40000 ALTER TABLE `carusels` DISABLE KEYS */;
INSERT INTO `carusels` (`id`, `titulo`, `sub_titulo`, `imagen`, `imagen_icono`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(22, 'PERTEC SRL', 'LÍDERES EN ELEMENTOS DE SUJECIÓN', 'images/carusel/4-125643-6.jpg', 'images/carusel/8-125643-8.png', '2022-05-30 12:56:27', '2022-05-30 12:56:27', NULL),
	(23, 'CALIDAD PREMIUM', 'ES NUESTRO ESTÁNDAR', 'images/carusel/10-125940-8.jpg', 'images/carusel/6-125940-0.png', '2022-05-30 12:57:31', '2022-05-30 12:57:31', NULL),
	(24, 'PRECIOS COMPETITIVOS', 'Y DISPONIBILIDAD DE STOCK', 'images/carusel/9-010045-1.jpg', 'images/carusel/2-010045-4.png', '2022-05-30 12:58:05', '2022-05-30 12:58:05', NULL);
/*!40000 ALTER TABLE `carusels` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.migrations: ~11 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2017_04_10_000000_create_users_table', 1),
	(2, '2017_04_10_000001_create_password_resets_table', 1),
	(3, '2017_04_10_000002_create_social_accounts_table', 1),
	(4, '2017_04_10_000003_create_roles_table', 1),
	(5, '2017_04_10_000004_create_users_roles_table', 1),
	(6, '2017_06_16_000005_create_protection_validations_table', 1),
	(7, '2017_06_16_000006_create_protection_shop_tokens_table', 1),
	(8, '2019_10_31_152451_add_last_login_to_users', 1),
	(9, '2022_04_14_202313_create_productos_table', 1),
	(10, '2022_04_25_145948_create_tiendas_table', 1),
	(11, '2022_04_26_152631_create_vendedors_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.modal_popups
CREATE TABLE IF NOT EXISTS `modal_popups` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla pertec.modal_popups: ~1 rows (aproximadamente)
DELETE FROM `modal_popups`;
/*!40000 ALTER TABLE `modal_popups` DISABLE KEYS */;
INSERT INTO `modal_popups` (`id`, `imagen`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 'images/pop/10-085102-0.png', 'ghgfhfghfg', '2022-06-03 20:51:02', '2022-06-03 20:51:02', NULL);
/*!40000 ALTER TABLE `modal_popups` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denominacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_matriz` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acabado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rosca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resistencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tratamiento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_promocion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_novedad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sae` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promocion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novedad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.productos: ~159 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre_producto`, `denominacion`, `categoria`, `inox`, `imagen`, `imagen_matriz`, `material`, `acabado`, `rosca`, `resistencia`, `tratamiento`, `descripcion_promocion`, `descripcion_novedad`, `sae`, `zb`, `zam`, `promocion`, `tipo`, `novedad`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(19, 'perno con tuerca hexagonal grado 2 rosca ordinaria (kilo)', 'per hex g2 c/tue', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/6-093840-0.jpg', 'images/productos/matrices/5-121018-5.jpg', 'acero 1008/1020', 'pulido', 'unc', '52/42 kg/mm2', NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, 'no', NULL, '2022-04-29 12:41:36', '2022-06-06 20:45:00'),
	(20, 'perno carrocero unc rosca fondo', 'rof-car', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/1-093556-5.jpg', 'images/productos/matrices/9-123017-8.jpg', 'acero 1008/1012', NULL, 'unc', NULL, NULL, NULL, NULL, 'si', 'no', 'no', 'no', NULL, NULL, NULL, '2022-04-29 12:52:21', '2022-06-06 12:30:17'),
	(21, 'Arandela plana normada', 'AK-nor', 'Arandelas Planas', 'no', 'images/productos/0-093512-8.jpg', 'images/productos/matrices/10-124357-3.jpg', 'acero 1008/1020', 'natural', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-04-29 12:55:55', '2022-06-06 12:43:57'),
	(22, 'arandela de presión sae pesada', 'pp', 'Arandelas Planas', 'no', 'images/productos/5-093411-5.jpg', 'images/productos/matrices/6-125043-9.jpg', 'acero 1045', NULL, NULL, NULL, 'templado negro', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-04-29 13:03:14', '2022-06-06 12:50:43'),
	(23, 'remache ciego "pop"', 'pop', 'Remache Pop', 'no', 'images/productos/6-093310-10.jpg', 'images/productos/matrices/3-012310-0.jpg', 'aluminio', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-04-29 13:51:17', '2022-06-06 13:23:10'),
	(24, 'inox perno hexagonal unc', 'inx hx', 'Inoxidable SAE AISI 304', 'si', 'images/productos/10-093243-4.jpg', 'images/productos/matrices/0-063545-1.jpg', 'acero inox. aisi 304', NULL, NULL, '70 kg/mm2', NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-03 18:58:44', '2022-06-06 18:35:45'),
	(25, 'inox perno cab. cilind c/hueco hex unc (p/ llave allen)', 'inx cil', 'Inoxidable SAE AISI 304', 'si', 'images/productos/4-093143-8.jpg', 'images/productos/matrices/2-063802-10.jpg', 'acero inox. aisi 304', NULL, NULL, 'clase 70 (70 kg/mm2)', NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-03 19:03:39', '2022-06-06 18:38:02'),
	(26, 'perno hex c/arandela cl 8.8 cte zam c/sello neoprene (p/silo)', 'per hx c/ara. c/sello neopr.', 'Agricultura', 'no', 'images/productos/8-034152-10.jpg', 'images/productos/matrices/3-034213-3.jpg', NULL, 'cincado amarillo', NULL, '80 kgs/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-03 19:14:44', '2022-06-06 15:42:13'),
	(27, 'perno zapata grado 9 unf', 'zapata', 'Automotriz', 'no', 'images/productos/7-092800-2.jpg', 'images/productos/matrices/7-081912-0.jpg', NULL, 'templado negro', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-03 19:19:55', '2022-06-06 20:19:34'),
	(28, 'inox tornillo roscalata cabeza pan', 'inx pan', 'Inoxidable SAE AISI 304', 'si', 'images/productos/4-092700-0.jpg', 'images/productos/matrices/2-063944-10.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, 'prueba descrip novedad :d', 'si', 'no', 'no', NULL, NULL, 'si', NULL, '2022-05-03 19:27:34', '2022-06-06 18:40:25'),
	(29, 'inox tirafondo cabeza hexagonal', 'inx tir', 'Inoxidable SAE AISI 304', 'si', 'images/productos/3-092616-3.jpg', 'images/productos/matrices/1-064132-5.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-03 19:30:42', '2022-06-06 18:41:32'),
	(31, 'broca para concreto y piedra métrica origen: alemania', 'brc concreto y piedra', 'Brocas y Anclajes', 'no', 'images/productos/7-092506-1.jpg', 'images/productos/matrices/4-015918-4.jpg', NULL, NULL, NULL, NULL, NULL, 'prueba descrip promo', NULL, 'no', 'no', 'no', 'si', NULL, NULL, NULL, '2022-05-06 19:56:47', '2022-06-06 13:59:18'),
	(32, 'tornillo roscalata zb cabeza hexagonal', 'rohex', 'Tornillo Roscalata', 'no', 'images/productos/9-092415-4.jpg', 'images/productos/matrices/7-012407-3.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-18 15:40:36', '2022-06-06 13:24:07'),
	(33, 'tornillo roscalata zb cabeza plana', 'tor pla', 'Tornillo Roscalata', 'no', 'images/productos/9-092342-5.jpg', 'images/productos/matrices/8-012203-7.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-18 15:48:13', '2022-06-06 13:22:03'),
	(34, 'tuerca hexagonal grado 2 rosca ordinaria (kilo)', 'tnc2', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/6-092235-6.jpg', 'images/productos/matrices/2-121416-9.jpg', 'acero 1008/1020', 'pulido', 'unc y bsw', NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 15:59:33', '2022-06-06 12:14:45'),
	(35, 'perno hexagonal grado 2 rosca fondo', 'rof-2', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/10-092151-9.jpg', 'images/productos/matrices/0-122621-7.jpg', 'acero 1008/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:05:27', '2022-06-06 12:26:21'),
	(36, 'perno carrocero con tuerca hexagonal unc cabeza redonda cuello cuadrado (kilo)', 'per carr unc c/tue', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/5-092038-0.jpg', 'images/productos/matrices/3-122839-4.jpg', 'acero 1008/1012', 'pulido', 'unc', '42 kg/mm2', NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:15:49', '2022-06-06 12:28:39'),
	(37, 'arandela plana nacional gruesa', 'kruesa', 'Arandelas Planas', 'no', 'images/productos/0-091746-1.jpg', 'images/productos/matrices/5-123117-5.jpg', 'acero 1008/1020', 'natural', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:24:27', '2022-06-06 12:31:17'),
	(38, 'arandela plana importada', 'a-imp k', 'Arandelas Planas', 'no', 'images/productos/2-091640-5.jpg', 'images/productos/matrices/2-124054-10.jpg', 'acero 1008/1020', 'natural', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:34:44', '2022-06-06 12:40:54'),
	(39, 'arandela plana ancha', 'a ancha', 'Arandelas Planas', 'no', 'images/productos/9-091555-2.jpg', 'images/productos/matrices/8-124847-3.jpg', 'acero 1008/1020', 'natural', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:40:17', '2022-06-06 12:48:47'),
	(40, 'arandela plana importada gruesa', 'a grue', 'Arandelas Planas', 'no', 'images/productos/0-091512-1.jpg', 'images/productos/matrices/8-125149-4.jpg', 'acero 1008/1020', 'natural', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:47:09', '2022-06-06 12:51:49'),
	(41, 'arandela de presión métrica', 'sn', 'Arandelas Planas', 'no', 'images/productos/6-091421-2.jpg', 'images/productos/matrices/4-125833-7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 18:58:09', '2022-06-06 12:58:33'),
	(42, 'perno hexagonal grado 2 unc zb', 'nc2 zb', 'Cincados', 'no', 'images/productos/0-085835-8.jpg', 'images/productos/matrices/5-010445-5.jpg', NULL, 'cincado blanco', NULL, '52/42 kg/mm2', NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:02:18', '2022-06-06 13:04:45'),
	(43, 'tuerca hexagonal grado 2 unc zb', 'sn', 'Cincados', 'no', 'images/productos/3-085806-10.jpg', 'images/productos/matrices/2-010634-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:04:16', '2022-06-06 13:06:34'),
	(44, 'arandela de presión pesada zb', 'pp zb', 'Cincados', 'no', 'images/productos/8-085723-3.jpg', 'images/productos/matrices/4-010724-9.jpg', 'acero 1045', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:07:03', '2022-06-06 13:07:24'),
	(45, 'arandela plana zb', 'ara zb', 'Cincados', 'no', 'images/productos/7-085643-2.jpg', 'images/productos/matrices/5-010807-3.jpg', 'acero 1008/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:11:48', '2022-06-06 13:08:07'),
	(46, 'arandela plana ancha zb', 'a ancha zb', 'Cincados', 'no', 'images/productos/3-085611-6.jpg', 'images/productos/matrices/8-010946-1.jpg', 'acero 1008/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:14:08', '2022-06-06 13:09:46'),
	(47, 'VARILLA ROSCADA UNC ZB', 'VAR ZB', 'Varrilla Roscada SAE y Metricas', 'no', 'images/productos/9-085510-0.jpg', 'images/productos/matrices/0-011029-2.jpg', 'acero 1010/1020', NULL, 'unc y bsw', NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:24:54', '2022-06-06 13:10:29'),
	(48, 'VARILLA ROSCADA UNC', 'VAR NC', 'Varrilla Roscada SAE y Metricas', 'no', 'images/productos/0-085426-4.jpg', 'images/productos/matrices/3-011147-8.jpg', 'acero 1010/1020', 'pulido', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:26:59', '2022-06-06 13:11:47'),
	(49, 'VARILLA ROSCADA MM CTE ZB', 'VAR MM', 'Varrilla Roscada SAE y Metricas', 'no', 'images/productos/5-085335-8.jpg', 'images/productos/matrices/6-011257-3.jpg', 'CLASE 4.8', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:27:59', '2022-06-06 13:12:57'),
	(50, 'PERNO MÁQUINA CABEZA REDONDA UNC ZB DOBLE RANURA', 'MQ RED', 'Pernos Maquina', 'no', 'images/productos/8-085227-0.jpg', 'images/productos/matrices/7-011403-7.jpg', 'acero 1010/1020', 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:36:28', '2022-06-06 13:14:03'),
	(51, 'PERNO CABEZA LENTEJA C/TUE CUADRADA ZB DOBLE RANURA', 'LEN C/T', 'Pernos Maquina', 'no', 'images/productos/0-085123-8.jpg', 'images/productos/matrices/7-011816-10.jpg', 'acero 1010/1020', 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:40:01', '2022-06-06 13:18:16'),
	(52, 'PERNO MÁQUINA CABEZA PLANA UNC ZB (PHILLIPS)', 'MQ PLA', 'Pernos Maquina', 'no', 'images/productos/4-084946-1.jpg', 'images/productos/matrices/9-011719-0.jpg', 'acero 1010/1020', 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:42:15', '2022-06-06 13:17:19'),
	(53, 'PERNO MÁQUINA MÉTRICO CABEZA PAN CTE ZAM (PHILLIPS)', 'MM PAN', 'Pernos Maquina', 'no', 'images/productos/9-084842-8.jpg', 'images/productos/matrices/1-011634-4.jpg', 'acero 1010/1020', 'cincado amarillo', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-19 19:46:20', '2022-06-06 13:16:34'),
	(54, 'PERNO MÁQUINA MÉTRICO CABEZA PLANA CTE ZAM (PHILLIPS)', 'MM PLA', 'Pernos Maquina', 'no', 'images/productos/7-084755-4.jpg', 'images/productos/matrices/5-011903-7.jpg', 'acero 1010/1020', 'cincado amarillo', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-19 19:48:54', '2022-06-06 13:19:03'),
	(55, 'TUERCA MÉTRICA CTE ZAM', 'SN', 'Pernos Maquina', 'no', 'images/productos/2-084655-5.jpg', 'images/productos/matrices/5-011946-7.jpg', NULL, 'cincado amarillo', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-19 19:51:11', '2022-06-06 13:19:46'),
	(56, 'TUERCA HEXAGONAL MÁQUINA UNC ZB', 'SN', 'Pernos Maquina', 'no', 'images/productos/7-084550-3.jpg', 'images/productos/matrices/9-011550-7.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 19:53:51', '2022-06-06 13:15:50'),
	(57, 'TORNILLO ROSCALATA CABEZA PAN ZB DOBLE RANURA', 'tor pan', 'Tornillo Roscalata', 'no', 'images/productos/7-084440-4.jpg', 'images/productos/matrices/6-012027-8.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:00:53', '2022-06-06 13:20:27'),
	(58, 'tornillo p/ madera chipboard cabeza plana (zam) pozidrive /phillips', 'chipb', 'Madera', 'no', 'images/productos/4-084338-10.jpg', 'images/productos/matrices/8-012501-6.jpg', NULL, 'cincado amarillo', 'autoroscante tipo chipboard', NULL, 'cementado y templado', NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-19 20:10:11', '2022-06-06 13:25:01'),
	(59, 'tirafondo cabeza hexagonal zb', 'tir hx', 'Madera', 'no', 'images/productos/5-084214-9.jpg', 'images/productos/matrices/7-012823-5.jpg', 'acero 1010/1020', 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:11:39', '2022-06-06 13:28:23'),
	(60, 'tornillo cabeza arandelada punta aguja', 'dw tor ara aguja', 'Fijación Placas de Yeso', 'no', 'images/productos/7-084123-8.jpg', 'images/productos/matrices/0-013052-2.jpg', NULL, 'cincado blanco', NULL, NULL, 'cementado y templado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:16:25', '2022-06-06 13:30:52'),
	(61, 'tornillo cabeza arandelada autoperforante', 'dw tor ara autop', 'Fijación Placas de Yeso', 'no', 'images/productos/10-084044-5.jpg', 'images/productos/matrices/5-013137-0.jpg', NULL, 'cincado blanco', NULL, NULL, 'cementado y templado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:17:38', '2022-06-06 13:31:37'),
	(62, 'tornillo cabeza plana dentada autoperforante c/alas', 'dw tor pla autop c/alas', 'Fijación Placas de Yeso', 'no', 'images/productos/3-083202-7.jpg', 'images/productos/matrices/10-013209-5.jpg', NULL, 'cincado blanco', NULL, NULL, 'cementado, templado y revenido', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:19:22', '2022-06-06 13:32:09'),
	(63, 'tornillo cabeza trompeta punta aguja', 'dw tor tromp aguda', 'Fijación Placas de Yeso', 'no', 'images/productos/1-083112-5.jpg', 'images/productos/matrices/9-013250-1.jpg', NULL, 'fosfatizado', NULL, NULL, 'cementado y templado', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:20:38', '2022-06-06 13:32:50'),
	(64, 'tornillo cabeza trompeta autoperforante', 'dw tor tromp autoperf', 'Fijación Placas de Yeso', 'no', 'images/productos/9-083032-6.jpg', 'images/productos/matrices/7-013402-10.jpg', NULL, 'fosfatizado', NULL, NULL, 'cementado y templado', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:21:49', '2022-06-06 13:34:02'),
	(65, 'tornillo autoperforante zb con arandela zb y goma', 'tor autoperf zb', 'Sujeción Techos', 'no', 'images/productos/2-082859-3.jpg', 'images/productos/matrices/10-013439-4.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:41:06', '2022-06-06 13:34:39'),
	(66, 'tornillo autoperforante c/ara incorporada zb & pvc (brazil)', 'tor ara inc: pvc', 'Sujeción Techos', 'no', 'images/productos/1-082749-0.jpg', 'images/productos/matrices/2-013651-2.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 20:49:44', '2022-06-06 13:36:51'),
	(67, 'tirafondo zb cabeza cuadrada p/techo fibrocemento con ara. zb y capuch pvc', 'tifibro cuadr', 'Sujeción Techos', 'no', 'images/productos/8-082650-9.jpg', 'images/productos/matrices/10-014102-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:01:22', '2022-06-06 13:41:02'),
	(68, 'tirafondo zb cabeza hexagonal p/techo fibrocemento con ara. zb y capuch pvc', 'tifibro hex', 'Sujeción Techos', 'no', 'images/productos/8-082613-6.jpg', 'images/productos/matrices/3-014137-0.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:02:34', '2022-06-06 13:41:37'),
	(69, 'gancho jota c/tue zb ara cóncava zb y capuchón de goma', 'jga cap', 'Accesorios Sujeción Techos', 'no', 'images/productos/1-082514-9.jpg', 'images/productos/matrices/10-015145-2.jpg', 'acero 1010/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:25:03', '2022-06-06 13:51:45'),
	(70, 'gancho jota c/tue zb ara cóncava zb y arandela de goma', 'jga ara', 'Accesorios Sujeción Techos', 'no', 'images/productos/9-082428-3.jpg', 'images/productos/matrices/8-015222-8.jpg', 'acero 1010/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:26:44', '2022-06-06 13:52:22'),
	(71, 'gancho jota c/tue zb ara cóncava zb y capuchón pvc', 'jga cap', 'Accesorios Sujeción Techos', 'no', 'images/productos/10-082321-2.jpg', 'images/productos/matrices/10-015303-5.jpg', 'acero 1010/1020', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:27:38', '2022-06-06 13:53:03'),
	(72, 'broca alta velocidad métrica (hss) origen alemania', 'brc mm', 'Brocas y Anclajes', 'no', 'images/productos/3-082003-1.jpg', 'images/productos/matrices/5-015432-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:42:27', '2022-06-06 13:54:32'),
	(73, 'broca alta velocidad sae (hss) origen: alemania', 'brc sae', 'Brocas y Anclajes', 'no', 'images/productos/0-081929-1.jpg', 'images/productos/matrices/9-015534-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:47:10', '2022-06-06 13:55:34'),
	(74, 'broca con cobalto (métrica) origen: alemania', 'brc cobalto mm', 'Brocas y Anclajes', 'no', 'images/productos/7-081813-0.jpg', 'images/productos/matrices/6-015652-8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:49:00', '2022-06-06 13:56:52'),
	(75, 'broca con cobalto (pulgada) origen: alemania', 'brc cobalto sae', 'Brocas y Anclajes', 'no', 'images/productos/0-081719-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:49:43', '2022-05-31 20:17:19'),
	(76, 'tarugo plástico', 'tarugo plástico', 'Brocas y Anclajes', 'no', 'images/productos/10-081354-7.jpg', 'images/productos/matrices/9-020200-3.jpg', 'plástico (polietileno de alta densidad)', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 21:54:16', '2022-06-06 14:02:00'),
	(77, 'perno de expansión pesado tipo "t" zam', 'sn', 'Brocas y Anclajes', 'no', 'images/productos/9-081326-1.jpg', 'images/productos/matrices/0-020038-0.jpg', 'q195', 'cincado amarillo', 'métrica cte', NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-19 21:57:11', '2022-06-06 14:00:38'),
	(78, 'tarugo metálico de expansión', 'sn', 'Brocas y Anclajes', 'no', 'images/productos/7-081229-7.jpg', 'images/productos/matrices/6-020236-3.jpg', NULL, 'zam y zb', 'unc', NULL, NULL, NULL, NULL, 'si', 'si', 'si', NULL, NULL, NULL, NULL, '2022-05-19 21:59:38', '2022-06-06 14:02:36'),
	(79, 'perno hexagonal grado 5 rosca unc', 'nc5 hx', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/2-081102-4.jpg', 'images/productos/matrices/4-021136-5.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, '84 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 22:10:13', '2022-06-06 14:11:36'),
	(80, 'tuerca hexagonal grado 5 rosca unc', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/4-080937-4.jpg', 'images/productos/matrices/8-021238-1.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 22:12:08', '2022-06-06 14:12:38'),
	(81, 'perno hexagonal grado 5 rosca unf', 'nf5 hx', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/9-080837-4.jpg', 'images/productos/matrices/0-021310-9.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, '84 kgs/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 22:13:42', '2022-06-06 14:13:10'),
	(82, 'tuerca hexagonal grado 5 rosca unf', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/9-080317-7.jpg', 'images/productos/matrices/9-021445-5.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-19 22:14:48', '2022-06-06 14:14:45'),
	(83, 'perno hexagonal grado 8 rosca unc', 'nc8 hx', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/1-080053-9.jpg', 'images/productos/matrices/5-021545-10.jpg', 'acero 1045 y acero aleado', NULL, NULL, '105 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 12:33:43', '2022-06-06 14:15:45'),
	(84, 'tuerca hexagonal grado 8 rosca unc', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/0-075732-7.jpg', 'images/productos/matrices/7-021617-7.jpg', 'acero 1045 y acero aleado', NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 12:56:20', '2022-06-06 14:16:17'),
	(85, 'perno hexagonal grado 8 rosca unf', 'nf8 hx', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/6-075540-1.jpg', 'images/productos/matrices/6-021656-8.jpg', 'acero 1045 y acero aleado', NULL, NULL, '105 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 12:58:16', '2022-06-06 14:16:56'),
	(86, 'tuerca hexagonal grado 8 rosca unf', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/9-075407-10.jpg', 'images/productos/matrices/9-021729-7.jpg', 'acero 1045 y acero aleado', NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 12:59:55', '2022-06-06 14:17:29'),
	(87, 'perno hexagonal grado 5 unc', 'nc5 hx', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/7-075251-7.jpg', 'images/productos/matrices/1-021810-9.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, '84 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 13:12:06', '2022-06-06 14:18:10'),
	(88, 'tuerca hexagonal grado 5 unc', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/0-075137-0.jpg', 'images/productos/matrices/9-021841-5.jpg', 'acero 1038/1045 (alta resistencia)', NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 13:13:37', '2022-06-06 14:18:41'),
	(89, 'perno hexagonal c/arandela cl 8.8* cte (acero de alta resistencia) zam', 'per hx c/arand', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/1-075017-3.jpg', 'images/productos/matrices/9-022013-7.jpg', NULL, NULL, NULL, '80 kgs/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-20 13:21:43', '2022-06-06 14:20:13'),
	(90, 'tuerca hexagonal c/arand cl 8 cte zam', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/0-074209-0.jpg', 'images/productos/matrices/3-022137-0.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-20 13:34:15', '2022-06-06 14:21:37'),
	(91, 'perno hex c/aran. cl 8.8* fina (acero alta resistencia) zam', 'per hx c/arand', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/3-074102-9.jpg', 'images/productos/matrices/5-022213-9.jpg', NULL, NULL, NULL, '80 kgs/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-20 13:36:34', '2022-06-06 14:22:13'),
	(92, 'tuerca hexagonal c/arand cl 8 fina zam', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/8-073849-4.jpg', 'images/productos/matrices/0-022253-3.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'si', 'no', 'si', NULL, NULL, NULL, NULL, '2022-05-20 13:37:48', '2022-06-06 14:22:53'),
	(93, 'PERNO HEXAGONAL CLASE 8.8 CTE (ACERO DE ALTA RESISTENCIA)', '8.8 cte', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/7-073727-2.jpg', 'images/productos/matrices/0-023220-9.jpg', NULL, NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:12:46', '2022-06-06 14:32:20'),
	(94, 'tuerca hexagonal clase 8 cte', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/7-073356-10.jpg', 'images/productos/matrices/8-023300-2.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:16:09', '2022-06-06 14:33:00'),
	(95, 'PERNO HEXAGONAL CLASE 8.8 fina (ACERO DE ALTA RESISTENCIA)', '8.8 fi *', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/6-073704-5.jpg', 'images/productos/matrices/5-023346-9.jpg', NULL, NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:17:24', '2022-06-06 14:33:46'),
	(96, 'tuerca hexagonal clase 8 fina', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/9-073334-9.jpg', 'images/productos/matrices/10-023448-5.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:18:21', '2022-06-06 14:34:48'),
	(97, 'PERNO HEXAGONAL CLASE 8.8 extra fina (ACERO DE ALTA RESISTENCIA)', '8.8 ext*', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/9-073635-0.jpg', 'images/productos/matrices/5-023545-9.jpg', NULL, NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:19:33', '2022-06-06 14:35:45'),
	(98, 'tuerca hexagonal clase 8 extra fina', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/0-073313-5.jpg', 'images/productos/matrices/8-023613-7.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:20:21', '2022-06-06 14:36:13'),
	(99, 'perno hexagonal rosca fondo clase 8.8 cte', 'rof-mm', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/5-073151-0.jpg', 'images/productos/matrices/6-023656-7.jpg', NULL, NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:36:58', '2022-06-06 14:36:56'),
	(100, 'perno hexagonal clase 10.9 cte (acero de alta resistencia)', '10.9 cte', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/10-073056-8.jpg', 'images/productos/matrices/2-023800-6.jpg', NULL, NULL, NULL, '100 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:40:32', '2022-06-06 14:38:00'),
	(101, 'tuerca hexagonal clase 10 cte', 'sn', 'Pernos y Tuercas de Acero Alta Resistencia Metricos', 'no', 'images/productos/5-072805-4.jpg', 'images/productos/matrices/8-023840-1.jpg', NULL, NULL, NULL, NULL, 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-05-20 14:43:01', '2022-06-06 14:38:40'),
	(102, 'perno carrocero con tuerca hexagonal unc cabeza redonda cuello cuadrado (piezas)', 'per carr unc c/tue', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/0-124731-5.jpg', 'images/productos/matrices/6-124741-8.jpg', 'acero 1008/1012', 'pulido', NULL, '42 kg/mm2', NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 12:47:31', '2022-06-06 12:47:41'),
	(103, 'tornillo autoperforante c/ara incorporada zb & pvc (chino)', 'tor ara inc: pvc', 'Sujeción Techos', 'no', 'images/productos/5-013909-2.jpg', 'images/productos/matrices/3-013924-10.jpg', NULL, NULL, NULL, NULL, 'templado y cementado', NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:39:09', '2022-06-06 13:39:24'),
	(104, 'arandela cóncava zb', 'arandela cóncava zb', 'Accesorios Sujeción Techos', 'no', 'images/productos/8-014334-3.jpg', 'images/productos/matrices/6-014347-2.jpg', 'plancha zb', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:43:34', '2022-06-06 13:45:18'),
	(105, 'arandela de goma', 'arandela de goma', 'Accesorios Sujeción Techos', 'no', 'images/productos/5-014443-6.jpg', 'images/productos/matrices/6-014453-4.jpg', 'goma', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:44:43', '2022-06-06 13:44:53'),
	(106, 'capuchón de goma', 'capuchón de goma', 'Accesorios Sujeción Techos', 'no', 'images/productos/2-014610-10.jpg', 'images/productos/matrices/4-014627-4.jpg', 'goma', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:46:10', '2022-06-06 13:46:27'),
	(107, 'arandela cóncava zb para pvc', 'sn', 'Accesorios Sujeción Techos', 'no', 'images/productos/1-014733-4.jpg', 'images/productos/matrices/5-014750-0.jpg', 'plancha zb', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:47:33', '2022-06-06 13:47:50'),
	(108, 'capuchón pvc', 'capuchón pvc', 'Accesorios Sujeción Techos', 'no', 'images/productos/2-014852-8.jpg', NULL, 'goma', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:48:52', '2022-06-06 13:48:52'),
	(109, 'arandela sellante zb', 'arandela sellante zb', 'Accesorios Sujeción Techos', 'no', 'images/productos/4-014958-4.jpg', 'images/productos/matrices/4-015007-6.jpg', 'plancha galvanizada con sello neopreno', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 13:49:58', '2022-06-06 13:50:07'),
	(110, 'perno de expansión liviano unc zb', 'sn', 'Brocas y Anclajes', 'no', 'images/productos/1-020425-2.jpg', 'images/productos/matrices/9-020438-8.jpg', NULL, 'cincado blanco', 'unc', NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:04:25', '2022-06-06 14:04:38'),
	(111, 'tarugo nylon p/ ladrillo huevo', 'sn', 'Brocas y Anclajes', 'no', 'images/productos/2-020532-3.jpg', 'images/productos/matrices/3-020545-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:05:32', '2022-06-06 14:05:45'),
	(112, 'perno cabeza cilíndrica c/hueco hexagonal grado 8 unc (p/llave allen)', 'all nc', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/8-024609-10.jpg', 'images/productos/matrices/7-024628-3.jpg', 'acero aleado', NULL, NULL, '105 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:46:09', '2022-06-06 14:46:28'),
	(113, 'prisionero con hueco hex y punta de copa grado 8 unc (p/llave allen)', 'nccopa', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/8-024836-3.jpg', 'images/productos/matrices/9-024848-0.jpg', 'acero aleado', NULL, NULL, '105 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:48:36', '2022-06-06 14:48:48'),
	(114, 'perno cabeza plana c/hueco hexagonal grado 8 unc (p/llave allen)', 'allp nc', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/5-025033-8.jpg', 'images/productos/matrices/8-025042-8.jpg', 'acero aleado', NULL, NULL, '105 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:50:33', '2022-06-06 14:50:42'),
	(115, 'perno cabeza cilíndrica mm. c/hueco hexagonal clase 8.8 cte (p/llave allen)', 'all mm', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/2-025316-1.jpg', 'images/productos/matrices/7-025304-3.jpg', 'acero aleado', NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:52:51', '2022-06-06 14:58:01'),
	(116, 'prisionero con hueco hex mm. y punta de copa cl. 10.9 cte (p/llave allen)', 'mm copa', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/5-025735-1.jpg', 'images/productos/matrices/7-025742-2.jpg', 'acero aleado', NULL, NULL, '100 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 14:57:35', '2022-06-06 14:57:42'),
	(117, 'perno cabeza abombada mm. c/hueco hexagonal cl. 10.9 cte (p/llave allen)', 'all abom mm', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/5-030011-0.jpg', 'images/productos/matrices/7-030021-3.jpg', 'acero aleado', NULL, NULL, '100 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:00:11', '2022-06-06 15:00:21'),
	(118, 'perno cabeza plana mm. c/hueco hexagonal cl. 10.9 cte (p/llave allen)', 'allp mm', 'Pernos Allen SAE - Metricos', 'no', 'images/productos/10-030200-1.jpg', 'images/productos/matrices/3-030209-0.jpg', 'acero aleado', NULL, NULL, '100 kg/mm2', 'templado y revenido', NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:02:00', '2022-06-06 15:02:09'),
	(119, 'galvanizado perno hexagonal ASTM a325 UNC', 'galv per astm 325', 'Galvanizados en Caliente', 'no', 'images/productos/10-030711-7.jpg', 'images/productos/matrices/5-030720-8.jpg', NULL, 'galvanizado en caliente', NULL, '84 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:07:11', '2022-06-06 15:07:20'),
	(120, 'galvanizado tuerca hexagonal astm a194 2h unc (pesada)', 'galv tue a194 2h', 'Galvanizados en Caliente', 'no', 'images/productos/6-031121-7.jpg', 'images/productos/matrices/5-031109-10.jpg', 'acero medio carbono', 'galvanizado en caliente', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:10:57', '2022-06-06 15:11:21'),
	(121, 'galvanizado arandela plana astm f-436 tipo 1', 'galv a f436', 'Galvanizados en Caliente', 'no', 'images/productos/3-031411-7.jpg', 'images/productos/matrices/8-031438-9.jpg', 'acero medio carbono', 'galvanizado en caliente', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:14:11', '2022-06-06 15:14:38'),
	(122, 'varilla roscada unc ASTM a193 b7 zb', 'zb var a193 b7', 'Petroquimicos y Construcción Civil', 'no', 'images/productos/8-032701-4.jpg', NULL, 'acero aleado', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:27:01', '2022-06-06 15:27:01'),
	(123, 'tuerca hexagonal unc ASTM a194 2h (pesada)', 'tue a194 2h', 'Petroquimicos y Construcción Civil', 'no', 'images/productos/1-032852-3.jpg', 'images/productos/matrices/1-032900-8.jpg', 'acero medio carbono', NULL, NULL, NULL, 'templado', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:28:52', '2022-06-06 15:29:00'),
	(124, 'varilla roscada unc ASTM a193 b7', 'var a193 b7', 'Petroquimicos y Construcción Civil', 'no', 'images/productos/3-033020-9.jpg', 'images/productos/matrices/4-033029-9.jpg', 'acero aleado', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:30:20', '2022-06-06 15:30:29'),
	(125, 'tuerca hexagonal unc ASTM a194 2h zb (pesada)', 'zb tue a194 2h', 'Petroquimicos y Construcción Civil', 'no', 'images/productos/1-033222-4.jpg', NULL, 'acero medio carbono', 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:32:22', '2022-06-06 15:32:22'),
	(126, 'perno carrocero cl. 8.8 rosca cte zam (cabeza redonda cuello cuadrado)', '8.8 carr', 'Agricultura', 'no', 'images/productos/5-034028-1.jpg', 'images/productos/matrices/0-034037-2.jpg', NULL, 'cincado amarillo', NULL, '80 kg/mm2', NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-06-06 15:40:28', '2022-06-06 15:40:37'),
	(127, 'tuerca métrica clase 8 cte zam', 'sn', 'Agricultura', 'no', 'images/productos/5-034357-2.jpg', 'images/productos/matrices/2-034407-8.jpg', NULL, 'cincado amarillo', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-06-06 15:43:57', '2022-06-06 15:44:07'),
	(128, 'perno arado c/tue hexagonal rosca ordinaria', 'arado', 'Agricultura', 'no', 'images/productos/10-034546-1.jpg', 'images/productos/matrices/7-034554-7.jpg', NULL, 'natural', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:45:46', '2022-06-06 15:45:54'),
	(129, 'perno para correa elevadora con tuerca hexagonal unc', 'correa', 'Agricultura', 'no', 'images/productos/2-034758-3.jpg', 'images/productos/matrices/8-034807-4.jpg', NULL, 'natural', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:47:58', '2022-06-06 15:48:07'),
	(130, 'perno para correa elevadora pesado con tuerca hexagonal unc', 'correa', 'Agricultura', 'no', 'images/productos/8-034923-10.jpg', 'images/productos/matrices/8-034931-1.jpg', NULL, 'natural', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:49:23', '2022-06-06 15:49:31'),
	(131, 'bisagras para puertas y ventanas metálicas', 'bi port', 'Varios', 'no', 'images/productos/1-035049-1.jpg', 'images/productos/matrices/5-035103-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:50:49', '2022-06-06 15:51:59'),
	(132, 'tuerca mariposa unc zb (maciza)', 'tmar nc', 'Tuercas SAE Metricas', 'no', 'images/productos/6-035633-3.jpg', 'images/productos/matrices/2-035644-6.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:56:33', '2022-06-06 15:56:44'),
	(133, 'tuerca mariposa métrica cte zb (maciza)', 'tmar m', 'Tuercas SAE Metricas', 'no', 'images/productos/1-035749-10.jpg', 'images/productos/matrices/1-035800-2.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 15:57:49', '2022-06-06 15:58:00'),
	(134, 'tuerca ciega unc zb', 'tciega', 'Tuercas SAE Metricas', 'Elige', 'images/productos/4-040008-7.jpg', 'images/productos/matrices/6-040020-2.jpg', NULL, 'zb / niquelado', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 16:00:08', '2022-06-06 16:00:20'),
	(135, 'tuerca ciega métrica cte zb', 'tciega m', 'Tuercas SAE Metricas', 'no', 'images/productos/3-061455-5.jpg', 'images/productos/matrices/4-061503-10.jpg', NULL, 'zb / niquelado', NULL, NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:14:55', '2022-06-06 18:15:03'),
	(136, 'tuerca hexagonal c/arand mm cl 8.8 cte zam', 'sn', 'Tuercas SAE Metricas', 'no', 'images/productos/0-061906-1.jpg', 'images/productos/matrices/7-061917-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'si', NULL, NULL, NULL, NULL, '2022-06-06 18:19:06', '2022-06-06 18:19:17'),
	(137, 'tuerca especial unc', 'tnc esp', 'Tuercas SAE Metricas', 'no', 'images/productos/7-062134-2.jpg', 'images/productos/matrices/7-062147-10.jpg', 'acero 1010/20', 'pulido', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:21:34', '2022-06-06 18:21:47'),
	(138, 'tuerca especial mm. clase 8 cte', 'tmm esp', 'Tuercas SAE Metricas', 'no', 'images/productos/4-062344-2.jpg', 'images/productos/matrices/6-062356-7.jpg', NULL, 'templado', NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:23:44', '2022-06-06 18:23:56'),
	(139, 'inox tuerca hexagonal unc aisi 304', 'sn', 'Inoxidable SAE AISI 304', 'si', 'images/productos/8-064701-9.jpg', 'images/productos/matrices/3-064725-4.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:47:01', '2022-06-06 18:47:25'),
	(140, 'inox perno máquina cabeza red. unc', 'inx maq red', 'Inoxidable SAE AISI 304', 'si', 'images/productos/3-065017-4.jpg', 'images/productos/matrices/7-065029-1.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:50:17', '2022-06-06 18:50:29'),
	(141, 'inox perno máquina cabeza plana unc', 'inx maq pla', 'Inoxidable SAE AISI 304', 'si', 'images/productos/7-065214-0.jpg', 'images/productos/matrices/3-065223-6.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:52:14', '2022-06-06 18:52:23'),
	(142, 'inox arandela plana', 'inx ara', 'Inoxidable SAE AISI 304', 'si', 'images/productos/7-065347-8.jpg', 'images/productos/matrices/7-065402-2.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:53:47', '2022-06-06 18:54:02'),
	(143, 'inox arandela presión', 'inx pp', 'Inoxidable SAE AISI 304', 'si', 'images/productos/5-065543-7.jpg', 'images/productos/matrices/9-065553-1.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:55:43', '2022-06-06 18:55:53'),
	(144, 'inox varilla roscada unc', 'inox var nc', 'Inoxidable SAE AISI 304', 'si', 'images/productos/4-065711-9.jpg', 'images/productos/matrices/6-065722-10.jpg', 'acero inox. aisi 304', NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 18:57:11', '2022-06-06 18:57:22'),
	(145, 'inox perno hexagonal mm cte', 'ixm hx', 'Inoxidable Metricos A2', 'si', 'images/productos/4-070004-5.jpg', 'images/productos/matrices/0-070026-1.jpg', 'acero inox. a2', NULL, NULL, 'clase 70 (70 kg/mm2)', NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:00:04', '2022-06-06 19:00:26'),
	(146, 'inox tuerca hexagonal mm cte', 'sn', 'Inoxidable Metricos A2', 'si', 'images/productos/8-070144-3.jpg', 'images/productos/matrices/6-070152-6.jpg', 'acero inox. a2', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:01:44', '2022-06-06 19:01:52'),
	(147, 'inox perno máquina cabeza plana mm cte (phillips)', 'inox mm pla', 'Inoxidable Metricos A2', 'si', 'images/productos/4-070326-5.jpg', 'images/productos/matrices/6-070334-8.jpg', 'acero inox. a2', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:03:26', '2022-06-06 19:03:34'),
	(148, 'inox perno máquina cabeza pan mm cte (phillips)', 'inox mm pan', 'Inoxidable Metricos A2', 'si', 'images/productos/10-070526-5.jpg', 'images/productos/matrices/0-070544-10.jpg', 'acero inox. a2', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:05:26', '2022-06-06 19:05:44'),
	(149, 'inox perno cabeza cilind. c/hueco hexagonal mm cte (p/llave allen)', 'ixm cil', 'Inoxidable Metricos A2', 'si', 'images/productos/7-070734-5.jpg', 'images/productos/matrices/3-070742-0.jpg', 'acero inox. a2', NULL, NULL, 'clase 70 (70 kg/mm2)', NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:07:34', '2022-06-06 19:07:42'),
	(150, 'inox a2 var. roscada mm cte', 'var mm inox', 'Inoxidable Metricos A2', 'si', 'images/productos/1-070907-1.jpg', 'images/productos/matrices/5-070919-10.jpg', 'acero inox. a2', NULL, NULL, 'clase 70 (70 kg/mm2)', NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:09:07', '2022-06-06 19:09:19'),
	(151, 'pernos de rueda - auto toyota', 'sn', 'Automotriz', 'no', 'images/productos/4-072808-4.jpg', 'images/productos/matrices/4-072819-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:28:08', '2022-06-06 19:30:10'),
	(152, 'pernos de rueda - camión volvo', 'sn', 'Automotriz', 'no', 'images/productos/6-072957-6.jpg', 'images/productos/matrices/10-073019-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:29:57', '2022-06-06 19:30:19'),
	(153, 'tuerca alta unc', 't alt unc', 'Automotriz', 'no', 'images/productos/9-073206-2.jpg', 'images/productos/matrices/2-073225-9.jpg', 'acero 1010/1020', 'pulida/negra', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:32:06', '2022-06-06 19:32:25'),
	(154, 'tuerca alta unf', 't alt unf', 'Automotriz', 'no', 'images/productos/0-073338-10.jpg', 'images/productos/matrices/7-073346-2.jpg', 'acero 1010/1020', 'pulida/negra', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:33:38', '2022-06-06 19:33:46'),
	(155, 'tuerca alta mm', 't alt mm', 'Automotriz', 'no', 'images/productos/1-073516-6.jpg', 'images/productos/matrices/2-073525-5.jpg', 'acero 1010/1020', 'pulida/negra', 'corriente, fina y extra fina', NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:35:16', '2022-06-06 19:35:25'),
	(156, 'tuerca de rueda con arandela flotante', 'sn', 'Automotriz', 'no', 'images/productos/4-073841-8.jpg', 'images/productos/matrices/9-073850-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:38:41', '2022-06-06 19:42:37'),
	(157, 'tuerca de rueda cónica mm', 'sn', 'Automotriz', 'no', 'images/productos/5-074035-5.jpg', 'images/productos/matrices/1-074046-3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:40:35', '2022-06-06 19:44:31'),
	(158, 'tuerca de rueda con arandela plana', 'sn', 'Automotriz', 'no', 'images/productos/3-074159-1.jpg', 'images/productos/matrices/5-074248-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:41:59', '2022-06-06 19:42:48'),
	(159, 'tuerca de rueda cónica unf', 'sn', 'Automotriz', 'no', 'images/productos/6-074420-2.jpg', 'images/productos/matrices/3-074444-4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:44:20', '2022-06-06 19:44:44'),
	(160, 'perno central grado 5 unf cabeza normal', 'cent g5', 'Automotriz', 'no', 'images/productos/3-074646-10.jpg', 'images/productos/matrices/4-074654-1.jpg', 'acero 1038/1045', NULL, NULL, '80 kg/mm2', 'templado y revenido', NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:46:46', '2022-06-06 19:46:54'),
	(161, 'chaveta partida zb', 'chav', 'Automotriz', 'no', 'images/productos/7-074828-2.jpg', 'images/productos/matrices/5-074844-7.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:48:28', '2022-06-06 19:48:44'),
	(162, 'tuerca autofrenante unc zb', 't aut nc', 'Automotriz', 'no', 'images/productos/5-075021-9.jpg', 'images/productos/matrices/9-075033-6.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:50:21', '2022-06-06 19:50:33'),
	(163, 'tuerca autofrenante unf zb', 't aut nf', 'Automotriz', 'no', 'images/productos/10-075202-10.jpg', 'images/productos/matrices/0-075212-0.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:52:02', '2022-06-06 19:52:12'),
	(164, 'tuerca autofrenante clase 8 métrica zb', 't aut mm', 'Automotriz', 'no', 'images/productos/3-075339-4.jpg', 'images/productos/matrices/7-075351-9.jpg', NULL, 'cincado blanco', 'corriente, fina y extra fina', NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:53:39', '2022-06-06 19:53:51'),
	(165, 'tuerca castillo unf', 'tcast nf', 'Automotriz', 'no', 'images/productos/0-075540-8.jpg', 'images/productos/matrices/2-075550-9.jpg', NULL, 'negreado', 'unf y uns (fina)', NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:55:40', '2022-06-06 19:55:50'),
	(166, 'tuerca castillo métrica', 'tcast mm', 'Automotriz', 'no', 'images/productos/8-075713-0.jpg', 'images/productos/matrices/3-075721-8.jpg', NULL, 'fosfatizado', 'fina y extra fina', NULL, NULL, NULL, NULL, 'no', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:57:13', '2022-06-06 19:57:21'),
	(167, 'tuerca torque grado 5 unc zb', 'torq unc', 'Automotriz', 'no', 'images/productos/9-075840-8.jpg', 'images/productos/matrices/1-075848-4.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 19:58:40', '2022-06-06 19:58:48'),
	(168, 'tuerca torque clase 8 mm zb', 'torq mm', 'Automotriz', 'no', 'images/productos/10-080035-5.jpg', 'images/productos/matrices/10-080043-5.jpg', NULL, 'cincado blanco', 'cte, fina y extra fina', NULL, NULL, NULL, NULL, 'no', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:00:35', '2022-06-06 20:00:43'),
	(169, 'tuerca torque grado 5 unf zb', 'torq unf', 'Automotriz', 'no', 'images/productos/2-080153-10.jpg', 'images/productos/matrices/1-080206-1.jpg', NULL, 'cincado blanco', NULL, NULL, NULL, NULL, NULL, 'si', 'si', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:01:53', '2022-06-06 20:02:06'),
	(170, 'perno cuchilla grado 9 unc', 'cuchill', 'Automotriz', 'no', 'images/productos/4-081621-2.jpg', 'images/productos/matrices/4-081631-8.jpg', NULL, 'templado negro', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:16:21', '2022-06-06 20:16:31'),
	(171, 'tuerca cuadrada zapata grado 8 unf', 'tzap cu', 'Automotriz', 'no', 'images/productos/9-082043-8.jpg', 'images/productos/matrices/6-082051-0.jpg', NULL, 'templado negro', NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:20:43', '2022-06-06 20:20:51'),
	(172, 'grampas de muelle modelo b', 'sn', 'Automotriz', 'no', 'images/productos/1-082333-1.jpg', 'images/productos/matrices/9-082347-4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:23:33', '2022-06-06 20:23:47'),
	(173, 'grampas de muelle modelo c', 'sn', 'Automotriz', 'no', 'images/productos/9-082454-8.jpg', 'images/productos/matrices/5-082505-6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:24:54', '2022-06-06 20:25:05'),
	(174, 'grampas de muelle modelo d', 'sn', 'Automotriz', 'no', 'images/productos/8-082622-5.jpg', 'images/productos/matrices/9-082631-4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:26:22', '2022-06-06 20:26:31'),
	(175, 'grampas de muelle modelo ba', 'sn', 'Automotriz', 'no', 'images/productos/5-082752-0.jpg', 'images/productos/matrices/5-082806-10.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:27:52', '2022-06-06 20:28:06'),
	(176, 'grampas de muelle modelo ca', 'sn', 'Automotriz', 'no', 'images/productos/7-082905-1.jpg', 'images/productos/matrices/9-082914-8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:29:05', '2022-06-06 20:29:14'),
	(177, 'perno con tuerca hexagonal grado 2 rosca ordinaria (piezas)', 'per hex g2 c/tue', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/10-084433-3.jpg', 'images/productos/matrices/7-084442-2.jpg', 'acero 1008/1020', 'pulido', 'unc', '52/42 kg/mm2', NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:44:33', '2022-06-06 20:44:42'),
	(178, 'tuerca hexagonal grado 2 rosca ordinaria (piezas)', 'tnc2', 'Pernos y Tuercas de Acero Alta Resistencia SAE', 'no', 'images/productos/2-085434-5.jpg', 'images/productos/matrices/3-085450-5.jpg', 'acero 1008/1020', 'pulido', 'unc y bsw', NULL, NULL, NULL, NULL, 'si', 'no', 'no', NULL, NULL, NULL, NULL, '2022-06-06 20:54:34', '2022-06-06 20:54:50');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.protection_shop_tokens
CREATE TABLE IF NOT EXISTS `protection_shop_tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires` timestamp NOT NULL,
  `success_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_url_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel_url_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pst_unique_user` (`user_id`),
  KEY `protection_shop_tokens_number_index` (`number`),
  KEY `protection_shop_tokens_expires_index` (`expires`),
  CONSTRAINT `pst_foreign_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.protection_shop_tokens: ~0 rows (aproximadamente)
DELETE FROM `protection_shop_tokens`;
/*!40000 ALTER TABLE `protection_shop_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `protection_shop_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.protection_validations
CREATE TABLE IF NOT EXISTS `protection_validations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ttl` timestamp NOT NULL,
  `validation_result` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_user` (`user_id`),
  KEY `protection_validations_ttl_index` (`ttl`),
  CONSTRAINT `pv_foreign_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.protection_validations: ~0 rows (aproximadamente)
DELETE FROM `protection_validations`;
/*!40000 ALTER TABLE `protection_validations` DISABLE KEYS */;
/*!40000 ALTER TABLE `protection_validations` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.roles: ~2 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `weight`) VALUES
	(1, 'administrator', 0),
	(2, 'authenticated', 0);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.social_accounts
CREATE TABLE IF NOT EXISTS `social_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_accounts_user_id_provider_provider_id_index` (`user_id`,`provider`,`provider_id`),
  CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.social_accounts: ~0 rows (aproximadamente)
DELETE FROM `social_accounts`;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.tiendas
CREATE TABLE IF NOT EXISTS `tiendas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_tienda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encargado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitud` longtext COLLATE utf8mb4_unicode_ci,
  `longitud` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.tiendas: ~10 rows (aproximadamente)
DELETE FROM `tiendas`;
/*!40000 ALTER TABLE `tiendas` DISABLE KEYS */;
INSERT INTO `tiendas` (`id`, `nombre_tienda`, `telefono`, `celular`, `whatsapp`, `direccion`, `ciudad`, `correo_electronico`, `encargado`, `imagen`, `tipo`, `latitud`, `longitud`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, '321', '4259660', '72230028', '72230028', 'gral acha n° 330 entre tumusla y hamiraya', 'Cochabamba', 'tienda321@pertec.com.bo', 'emilio castillo', 'images/tiendas/8-122501-5.jpeg', 'oficina', '-17.393872245548646', '-66.1612600837307', NULL, '2022-04-27 18:18:30', '2022-05-13 12:25:01'),
	(3, '831', '3540159', '72105564', '72105564', 'av. roque aguilera esq. nuno de la vega n°3130 (3er. anillo interno)', 'Santa Cruz', 'tienda831@pertec.com', 'juanito', 'images/tiendas/9-124403-7.png', 'tienda', '-17.812041169843507', '-63.18794761825634', NULL, '2022-04-27 19:39:37', '2022-05-13 12:50:14'),
	(4, '421', '2484808', '72039953', '72039953', 'calle heroes del acre n° 1577 esq. otero de la vega', 'La Paz', 'tienda421@pertec.com', 'sn', 'images/tiendas/9-123629-4.jpg', 'tienda', '-16.50410645300749', '-68.13538757132987', NULL, '2022-04-27 19:43:18', '2022-05-13 12:36:29'),
	(5, '441', '2815426', '68580333', '68580333', 'av. 6 de marzo n° 335 villa bolivar e (pasando el regimiento ingavi, frente a campero)', 'La Paz', 'tienda441@pertec.com', 'ivan torrez', 'images/tiendas/9-123301-5.jpg', 'tienda', '-16.531367472455866', '-68.17177272621811', NULL, '2022-05-04 14:41:36', '2022-05-13 13:18:44'),
	(6, '821', '3425605', '72105563', '72105563', 'av. cristo redentor n°2450 esq. calle chuchio (entre 2do. y 3er. anillo)(av. banzer)', 'Santa Cruz', 'tienda821@pertec.com', 'sn', 'images/tiendas/0-124905-5.png', 'tienda', '-17.765740360782086', '-63.18125607186325', NULL, '2022-05-13 12:49:05', '2022-05-13 12:49:05'),
	(7, '841', '3578782', '71743431', '71743431', 'av. grigota frente al supermercado hiperplaza n°2314', 'Santa Cruz', 'tienda841@pertec.com', 'sn', 'images/tiendas/2-125329-1.png', 'tienda', '-17.800958104165275', '-63.196366339867325', NULL, '2022-05-13 12:53:29', '2022-05-13 13:01:49'),
	(8, '331', '4253841', '71726182', '71726182', 'av. blanco galindo n°214 esq. pacheco', 'Cochabamba', 'tienda331@pertec.com', 'sn', 'images/tiendas/9-010058-6.jpeg', 'tienda', '-17.394078275026054', '-66.27862272403546', NULL, '2022-05-13 13:00:58', '2022-05-13 13:00:58'),
	(9, '341', '4250800', '68580332', '68580332', 'entrada a la urbanización hamancayas km 5 1/2 acera norte', 'Cochabamba', 'tienda341@pertec.com', 'sn', 'images/tiendas/9-010648-4.png', 'tienda', '-17.386577011384606', '-66.09404413948425', NULL, '2022-05-13 13:06:48', '2022-05-13 13:06:48'),
	(10, '431', '2822588', '72038854', '72038854', 'av. 6 de marzo n°370 entre calle 3 y 4', 'La Paz', 'tienda431@pertec.com', 'sn', 'images/tiendas/10-011508-9.jpg', 'tienda', '-16.507933778157472', '-68.16386166043281', NULL, '2022-05-13 13:15:08', '2022-05-13 13:15:08'),
	(11, '451', '2846649', '72202392', '72202392', 'av. juan pablo II n°3082 entre c/ ugarte y fourier', 'La Paz', 'tienda451@pertec.com', 'sn', 'images/tiendas/7-013448-8.jpg', NULL, '-16.499434', '-68.176106', NULL, '2022-05-13 13:34:48', '2022-05-13 13:34:48');
/*!40000 ALTER TABLE `tiendas` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `confirmation_code` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.users: ~4 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `apellido`, `ciudad`, `celular`, `nit`, `rol`, `active`, `confirmation_code`, `confirmed`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`, `deleted_at`, `last_login`) VALUES
	(1, 'Admin', 'admin.laravel@pertec.com.bo', '$2y$10$qFXbynK6ngz6Fb7V0mEI9eHMmqHOL7ABrfDC8nGr/om.hlurGM1/O', '', '', '', '', '', 1, '20b30b06-eb19-4452-b36c-9a455d2e8cd0', 1, NULL, '2022-05-04 16:07:01', '2022-04-27 18:12:33', '2022-06-06 12:06:43', NULL, '2022-06-06 12:06:43'),
	(2, 'Demo', 'demo.laravel@pertec.com.bo', '$2y$10$VEYQyz.mb3DYzqznuJnr5.EwG7vaoiFcIJiiGMMVCiyule4WY/msS', '', '', '', '', '', 1, '72dad024-2628-4094-8107-285d54b5d68c', 1, NULL, '2022-05-04 16:07:02', '2022-04-27 18:12:33', '2022-04-27 18:12:33', NULL, NULL),
	(3, 'marvinero', 'marvinero@gmail.com', '$2y$10$YYbm409TlFLd9piARCZAz.0S4oTIljcl8r8/h61F0Nl0y/7Hit4di', 'nero', 'Cochabamba', '76964607', '9506285', 'usuario', 1, '29d091d2-223d-487b-8684-4af6ffe085ef', 1, NULL, NULL, '2022-05-27 15:20:46', '2022-05-27 15:28:07', NULL, '2022-05-27 15:28:07'),
	(4, 'Rodrigo', 'asd@gmail.com', '$2y$10$FiTl/.IDfVXneiczsA0lzu9QS95gFOVN5gZXfBPj91/niPzNPAyWa', 'Machaca', 'Cochabamba', '77777777', '78787878', 'usuario', 1, '9819bf60-175a-4d7f-8170-7642a8cbfbfc', 1, 'C0xOSWQromtDpNvsaCcPcRufnQK3Fg7dY86exVeo0udgk1K35TRyC7ZROILX', NULL, '2022-05-27 18:20:30', '2022-06-08 13:38:28', NULL, '2022-06-08 13:38:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.users_roles
CREATE TABLE IF NOT EXISTS `users_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `users_roles_user_id_role_id_unique` (`user_id`,`role_id`),
  KEY `foreign_role` (`role_id`),
  CONSTRAINT `foreign_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `foreign_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.users_roles: ~5 rows (aproximadamente)
DELETE FROM `users_roles`;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;

-- Volcando estructura para tabla pertec.vendedors
CREATE TABLE IF NOT EXISTS `vendedors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_vendedor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_electronico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pertec.vendedors: ~16 rows (aproximadamente)
DELETE FROM `vendedors`;
/*!40000 ALTER TABLE `vendedors` DISABLE KEYS */;
INSERT INTO `vendedors` (`id`, `nombre_vendedor`, `apellido`, `celular`, `whatsapp`, `ciudad`, `correo_electronico`, `imagen`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(4, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(5, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(6, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(7, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(8, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(9, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(10, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(11, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(12, 'jaimito', 'Perez', '66546546', '456546', 'Cochabamba', 'pepito@gmail.com', 'images/vendedors/4-061902-1.jpg', NULL, '2022-04-27 18:19:02', '2022-04-27 18:19:02'),
	(13, 'juanito', 'lopez', '79452236', '9999', 'La Paz', 'juanitolopez@pertec.com', 'images/vendedors/5-065236-9.jpg', NULL, '2022-04-27 18:52:36', '2022-05-10 19:05:16'),
	(14, 'juanito', 'lopez', '79452236', '9999', 'Santa Cruz', 'juanitolopez@pertec.com', 'images/vendedors/5-065236-9.jpg', NULL, '2022-04-27 18:52:36', '2022-05-10 19:05:08'),
	(15, 'juanito', 'lopez', '79452236', '9999', 'La Paz', 'juanitolopez@pertec.com', 'images/vendedors/5-065236-9.jpg', NULL, '2022-04-27 18:52:36', '2022-05-10 19:04:59'),
	(16, 'denis', 'guzman', '71722383', '71722383', 'Cochabamba', 'denisguzman@pertec.com', 'images/vendedors/7-074546-4.jpg', NULL, '2022-04-27 19:45:46', '2022-04-27 19:45:46'),
	(17, 'jhonny', 'conde', '71560904', '7787878787', 'Santa Cruz', 'jhonnyconde@gmail.com', 'images/vendedors/1-074718-4.jpg', NULL, '2022-04-27 19:47:18', '2022-05-10 19:05:32'),
	(19, 'samuel l', 'jackson', '11111111', '22222222', 'Elige', 'samjackson@pertec.com', 'images/vendedors/1-075051-7.jpg', NULL, '2022-04-27 19:50:51', '2022-05-10 19:06:58'),
	(20, 'pruebaSSSS', 'pruebaSSSS', '77777771222', '777777710222', 'Santa Cruz', 'prueba@pertec.com.bo', 'images/vendedors/1-021935-10.jpg', NULL, '2022-05-07 14:19:35', '2022-05-10 19:05:21');
/*!40000 ALTER TABLE `vendedors` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
