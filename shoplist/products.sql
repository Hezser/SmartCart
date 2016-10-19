-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 05:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplist`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(20) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_popularity` int(100) NOT NULL,
  `prod_category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_popularity`, `prod_category`) VALUES
(120, 'COMPANGO ASTURIANO', 19.05, 4, 'charcuterie'),
(119, 'SAL FINA MESA CARR', 0.4, 2, 'ingredients'),
(118, 'SETAS 200 GR BANDE', 1, 1, 'vegetables'),
(117, 'NAVAJAS LAS RIAS', 4.59, 1, 'fish'),
(116, 'ENDIVIAS BANDEJA', 1, 1, 'precooked'),
(115, 'AZAFRÁN MOLIDO', 3.38, 2, 'ingredients'),
(114, 'AZAFRÁN CARMENCITA', 1.74, 1, 'ingredients'),
(113, 'PAN BIMBO CORTEZA', 1.65, 1, 'ingredients'),
(112, 'CERVEZA MAHOU 5 *', 12.58, 1, 'alcohol drinks'),
(84, 'LACON EXTRA ASADO', 1.6, 1, 'charcuterie'),
(111, 'J.WALKER ETIQUETA', 12.25, 1, 'drinks alcohol'),
(110, 'ACEITE OLIVA LA ES', 4.49, 1, 'ingredients'),
(109, 'PACHARAN ZOCO 1 LI', 9.2, 1, 'drinks alcohol'),
(108, 'PISTACHOS TOSTADO', 3.2, 1, 'nuts snacks'),
(107, 'GEL ALOE VERA', 3.28, 2, 'others'),
(106, 'DENTIFRICO 2EN1 JUNI', 4.05, 3, 'others'),
(105, 'NATA SPRAY CENTRAL', 1.55, 1, 'ingredients'),
(104, 'PATATAS FRITAS LAY', 2.33, 2, 'snacks'),
(103, 'POPITAS MICRO BORG', 4.44, 2, 'snacks'),
(102, 'SPAGHETTI 3 GALLO', 1.22, 1, 'pasta'),
(101, 'FRESON SELECCIÓN 1K', 4.5, 1, 'fruits desserts'),
(100, 'COCA COLA LATA 33C', 13.45, 1, 'drinks'),
(99, 'CHAMPU MENTHOL H&S', 11.98, 2, 'others'),
(98, 'MANTEQUILLA FACIL', 1.16, 1, 'ingredients'),
(97, 'DESECHABLES GILLET', 7.3, 1, 'others'),
(96, 'SOLOMILLO DE AÑOJO', 14.06, 1, 'charcuterie'),
(95, 'CARACOLAS 4 UND', 2.95, 1, 'fish'),
(94, 'ESPARRAGO VERDE', 4.5, 1, 'vegetables'),
(93, 'QUESO PROVOLONE', 6, 2, 'cheese'),
(92, 'TOMATE ENSALADA', 3.5, 1, 'vegetables'),
(90, 'RIBERA DUERO MAYOR', 16.2, 3, 'drinks alcohol'),
(89, 'PANTALON  5B SRA', 5.99, 1, 'others'),
(88, 'GEL QUITAMANCHAS', 1.36, 1, 'others'),
(87, 'MASA BRISA CARREFOUR', 1.11, 1, 'ingredients'),
(86, 'ROSCON GRANDE SIN RE', 9.99, 1, 'desserts sweets'),
(85, 'JAMON COCIDO EXTRA', 1.6, 1, 'charcuterie'),
(83, 'JAMON SIERRA', 30, 1, 'charcuterie'),
(82, 'LEJIA LAVADORA ACE', 26.5, 10, 'others'),
(81, 'ARIEL POLVO ACTILI', 59.76, 3, 'others'),
(121, 'FABES ASTURIANAS SAC', 24.75, 3, 'precooked'),
(122, 'COLINES NORMALES', 0.84, 2, 'snacks'),
(123, 'CEBOLLA DULCE PELA', 4.5, 2, 'vegetables'),
(124, 'LIMON CARREFOUR 750G', 1.29, 1, 'fruits'),
(125, 'COGOLLOS 3 PIEZAS', 1, 1, 'vegetables'),
(126, 'NARANJA SACO 6KG', 4.5, 1, 'fruits'),
(127, 'DESODORANTE DUPLO', 6.76, 2, 'others'),
(128, 'DIAMANT FINAS LONCHA', 6, 6, 'charcuterie'),
(129, 'BANANA GRANEL', 1.28, 1, 'fruits sweets'),
(130, 'MANZANA ROYAL GALA', 1.06, 1, 'fruits'),
(131, 'KIWI GALICIA GORDO', 8.23, 1, 'fruits'),
(132, 'PIMIENTO VERDE CAM', 1.05, 1, 'vegetables'),
(133, 'PEDIGREE 2,5 KG', 6.3, 1, 'pets'),
(134, 'MASA PIZZA CARREFOUR', 2.6, 2, 'ingredients'),
(135, 'EMMENTAL RALLADO', 1.12, 1, 'cheese'),
(136, 'PALOMITAS SAL CARR', 1.48, 1, 'preecooked snacks'),
(137, 'CEREALES TRIGO 500GR', 1.5, 1, 'snacks'),
(138, 'ESPIRALES CARREFOUR', 0.5, 1, 'pasta'),
(139, 'MACARRONES CARREFOUR', 0.5, 1, 'pasta'),
(140, 'CAFE SOLUBLE EXPRE', 1.85, 1, 'drinks'),
(141, 'ZUMO NARANJA PULPA', 4, 4, 'drinks'),
(142, 'FRUITOPOLIS FRESA', 2.75, 1, 'desserts sweets'),
(143, 'FRUITOPOLIS LIGHT X4', 2.75, 1, 'desserts sweets'),
(144, 'DUPLO LICOR POLO', 1.49, 1, 'others'),
(145, 'TROZOS ATUN CALRO X3', 3, 3, 'fish'),
(146, 'MAYONESA YBARRA', 1, 1, 'ingredients'),
(147, 'FRISKIES GOLD 85GR', 1.16, 2, 'pets'),
(148, 'CREMA MANOS OLIVA', 1, 1, 'others'),
(149, 'GARBANZOS COCIDO', 1, 2, 'nuts'),
(150, 'LECHE SEMI. CARREF', 3.6, 6, 'drinks'),
(151, 'PIZZA JAMÓN/QUESO', 1.99, 1, 'precooked'),
(152, 'CEBOLLA CARREFOUR', 1.05, 1, 'vegetables'),
(153, 'NARANJA ZUMO CARRE', 3.8, 1, 'drinks'),
(154, 'PECHUGA PAVO LONCH', 1.34, 1, 'charcuterie'),
(155, 'PIZZA BARBACOA', 1.99, 1, 'precooked'),
(156, 'PATATA LAVADA CARR', 3.25, 1, 'vegetables'),
(157, 'MANDARINA', 3.58, 2, 'fruits'),
(158, 'JAMON PAVO FINAS170G', 4.35, 3, 'charcuterie'),
(159, 'LOMO EMBUCHADO LON', 3.75, 2, 'charcuterie'),
(160, 'CORAZON LECHUGA', 1.39, 1, 'vegetables'),
(161, 'PIMIENTO ITALIANO', 0.89, 1, 'vegetables'),
(162, 'DENTIFRICO MAX', 5.25, 2, 'others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
