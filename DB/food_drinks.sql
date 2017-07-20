-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2017 a las 19:45:28
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `food&drinks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id_alimento` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` double(10,2) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id_alimento`, `nombre`, `descripcion`, `precio`, `fotografia`) VALUES
(0, 'Ningún alimento', 'no requiere alimento', 0.00, 'ninguna'),
(1, 'Enchiladas Suizas Con Pollo', 'Las enchiladas son un plato que en México se elabora con tortilla de maíz bañada en alguna salsa picante utilizando chile en su preparación. Dependiendo del estilo, la enchilada puede ir acompañada o rellena de carnes —pollo, pavo, res— o queso; además de ser acompañada de alguna guarnición adicional, que generalmente consiste en cebolla fresca picada o en rodajas, lechuga, crema de leche y queso.', 60.50, '3f8a4e412c9eefcae5ab18c737711baa.jpg'),
(2, 'Pozole', 'El pozole (del náhuatl pozolli, de tlapozonalli, «hervido» o «espumoso»,1 o del cahíta posoli, «cocer maíz») es un plato de México y Centroamérica, es una especie de caldo hecho a base de granos de maíz de un tipo conocido comúnmente como cacahuazintle, a la que se agrega, según la región, carne de pollo o de cerdo como ingrediente secundario.', 45.50, 'dcc93eb77b4ba196f49ad668e9e68d7e.jpg'),
(3, 'Filete De Res', 'Un filete, bistec, bisté o bife es cualquier corte de carne roja que haya sido cortada en forma de filete para el consumo humano. La palabra «filete» proviene del francés filet mientras que las palabras «bistec» y «bife» provienen del inglés: «bistec» proviene de beef steak (''filete de carne de buey'') y «bife» proviene de beef (''carne de buey'').', 85.50, '81633b8b4b8a770e758121035e33593b.jpg'),
(4, 'Mojarra Frita', 'Pescado frito con una sabrosa vinagreta acompañado de ensalada: las mojarras fritas son muy sabrosas, y es un platillo típico de Chihuahua.', 56.00, '87430ddc54c3b03b23f517b99e92deaa.jpg'),
(5, 'Pechuga Asada', 'Pechugas de pollo marinadas en una vinagreta de limón con chile de árbol y ajo, y asadas en el asador... o la estufa.', 55.00, '3c97d94ad00cbcbf4b863f8c3852439b.jpg'),
(6, 'Sandwich De Pollo', 'El Club Sándwich es uno de los sándwiches más famosos del mundo y nosotros vamos a ver cómo se prepara paso a paso e incluso, vamos a conocer un poco más sobre su historia.', 25.50, '0947a6eae56220e46049f29859e56cd6.jpg'),
(7, 'Camarones Empanizados', 'Los camarones se sazonan, luego se empanizan con pan molido Panko®. La receta de camarones empanizados más fácil que existe.', 45.50, 'beda90afba4e4f54cff5141cdce257a7.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_sucursal_caja`
--

CREATE TABLE `asignacion_sucursal_caja` (
  `id_asignacion` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_caja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_sucursal_caja`
--

INSERT INTO `asignacion_sucursal_caja` (`id_asignacion`, `id_sucursal`, `id_caja`) VALUES
(2, 1, 1),
(3, 2, 4),
(5, 4, 2),
(7, 3, 5),
(8, 5, 3),
(9, 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_usuario_sucursal`
--

CREATE TABLE `asignacion_usuario_sucursal` (
  `id_asignacion` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_usuario_sucursal`
--

INSERT INTO `asignacion_usuario_sucursal` (`id_asignacion`, `id_sucursal`, `id_usuario`) VALUES
(12, 3, 15),
(13, 4, 17),
(14, 1, 18),
(15, 2, 19),
(16, 3, 12),
(17, 2, 11),
(18, 1, 14),
(19, 1, 16),
(20, 4, 6),
(21, 4, 5),
(22, 1, 4),
(23, 3, 3),
(24, 3, 13),
(26, 2, 7),
(27, 2, 20),
(28, 2, 21),
(30, 3, 2),
(31, 4, 8),
(32, 5, 10),
(33, 4, 22),
(34, 5, 23),
(35, 5, 24),
(36, 5, 25),
(37, 5, 26),
(38, 1, 9),
(39, 6, 27),
(40, 6, 28),
(41, 6, 29),
(42, 6, 30),
(43, 6, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id_bebida` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` double(10,2) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id_bebida`, `nombre`, `descripcion`, `precio`, `fotografia`) VALUES
(0, 'Ninguna bebida', 'no requiere bebida', 0.00, 'ninguna'),
(1, 'Coca Cola', 'Coca-Cola es una bebida gaseosa y refrescante, vendida a nivel mundial, en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es producida por The Coca-Cola Company. ', 15.00, '5b33a9b39b3da02b1cfac932d4077794.jpg'),
(2, 'Cerveza Corona', 'Corona Extra, más conocida como Corona (o Coronita en España, hasta junio de 2016) es una marca de cerveza mexicana muy popular en México y en todo el mundo,1 elaborada por el Grupo Modelo, que a su vez forma parte de la multinacional belga AB Inbev.', 18.00, '1f62e9ec5b4d217d4c1e23e69c17c1dd.jpg'),
(3, 'Refresco Sidral', 'Dral Mundet es una gaseosa mexicana carbonatada sabor manzana, producida por Sistema mexicano de Coca-Cola y distribuida en los Estados Unidos por la compañía Novamex, la cual también distribuye Jarritos y Sangría Señorial Pertenece a la compañía Coca-Col', 15.00, 'bb12a8b3fe539f62e30bca9c686c594f.jpg'),
(4, 'Vino Tinto', 'Victoria es una marca de cerveza rubia fundada en 1928 por Luis Franquelo Carrasco en la ciudad española de Málaga. Ha estado históricamente ligada a esta ciudad y su idiosincrasia, algo que queda reflejado en su eslogan “Malagueña y Exquisita”. ', 45.00, '97564508fba35363a2200168b2b06d16.jpg'),
(5, 'Copa De Vodka', 'El vodka (????? en ruso, vodka en eslovaco y checo y wódka en polaco) es una bebida destilada. Se discute el origen de la misma aunque el nombre actual es ruso. Se produce generalmente a través de la fermentación de granos y otras plantas ricas en almidón', 25.00, '07671a1b4add1d8bb53810e000c1c64b.jpg'),
(6, 'Vino Blanco', 'El vino blanco es una bebida destilada. Se discute el origen de la misma aunque el nombre actual es ruso. Se produce generalmente a través de la fermentación de granos y otras plantas ricas en almidón, como el centeno, trigo, o patata', 26.00, 'ca7027e331ae56c1b48232d408d34cf2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id_caja` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `asignacion_caja` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id_caja`, `nombre`, `asignacion_caja`) VALUES
(1, 'Caja 01', 'Realizada'),
(2, 'Caja 02', 'Realizada'),
(3, 'Caja 03', 'Realizada'),
(4, 'Caja 04', 'Realizada'),
(5, 'Caja 05', 'Realizada'),
(6, 'Caja 06', 'Realizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id_mesa` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `no_comensales` int(10) NOT NULL,
  `zona` varchar(255) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id_mesa`, `id_sucursal`, `nombre`, `no_comensales`, `zona`, `estado`) VALUES
(1, 1, 'Mesa 01', 2, 'Piso uno, entrada', 'Disponible'),
(2, 1, 'Mesa 02', 2, 'Primer nivel', 'Disponible'),
(3, 1, 'Mesa 03', 4, 'Primer nivel', 'Disponible'),
(4, 1, 'Mesa 04', 4, 'Primer nivel', 'Disponible'),
(5, 1, 'Mesa 05', 6, 'Primer nivel', 'Disponible'),
(6, 1, 'Mesa 06', 6, 'Primer nivel', 'Disponible'),
(7, 1, 'Mesa 07', 8, 'Segundo nivel', 'Disponible'),
(8, 1, 'Mesa 08', 8, 'Segundo nivel', 'Disponible'),
(9, 1, 'Mesa 09', 10, 'Segundo nivel', 'Disponible'),
(10, 1, 'Mesa 10', 10, 'Segundo nivel', 'Disponible'),
(11, 2, 'Mesa 01', 2, 'Primer nivel', 'Disponible'),
(12, 2, 'Mesa 02', 2, 'Primer nivel', 'Disponible'),
(13, 2, 'Mesa 03', 4, 'Primer nivel', 'Disponible'),
(14, 2, 'Mesa 04', 4, 'Primer nivel', 'Disponible'),
(15, 2, 'Mesa 05', 6, 'Primer nivel', 'Disponible'),
(16, 2, 'Mesa 06', 8, 'Segundo nivel', 'Disponible'),
(17, 2, 'Mesa 07', 10, 'Segundo nivel', 'Disponible'),
(18, 2, 'Mesa 08', 10, 'Segundo nivel', 'Disponible'),
(19, 2, 'Mesa 100', 4, 'Zona abierta', 'Disponible'),
(20, 2, 'Mesa 101', 4, 'Zona abierta', 'Disponible'),
(21, 2, 'Mesa 200', 10, 'Zona V.I.P', 'Disponible'),
(22, 2, 'Mesa 201', 10, 'Zona V.I.P', 'Disponible'),
(23, 3, 'Mesa 01', 2, 'Zona abierta', 'Disponible'),
(24, 3, 'Mesa 02', 2, 'Zona abierta', 'Disponible'),
(25, 3, 'Mesa 03', 2, 'Zona abierta', 'Disponible'),
(26, 3, 'Mesa 04', 6, 'Primer nivel', 'Disponible'),
(27, 3, 'Mesa 05', 6, 'Primer nivel', 'Disponible'),
(28, 3, 'Mesa 06', 10, 'Primer nivel', 'Disponible'),
(29, 3, 'Mesa 07', 10, 'Primer nivel', 'Disponible'),
(30, 4, 'Mesa 01', 6, 'Primer nivel', 'Disponible'),
(31, 4, 'Mesa 02', 6, 'Primer nivel', 'Disponible'),
(32, 4, 'Mesa 03', 6, 'Primer nivel', 'Disponible'),
(33, 4, 'Mesa 04', 6, 'Primer nivel', 'Disponible'),
(34, 5, 'Mesa 01', 4, 'Primer nivel', 'Disponible'),
(35, 5, 'Mesa 02', 6, 'Primer nivel', 'Disponible'),
(36, 5, 'Mesa 03', 8, 'Primer nivel', 'Disponible'),
(37, 5, 'Mesa 04', 10, 'Primer nivel', 'Disponible'),
(38, 5, 'Mesa 05', 10, 'Primer nivel', 'Disponible'),
(39, 6, 'Mesa 01', 2, 'Zona abierta', 'Disponible'),
(40, 6, 'Mesa 02', 4, 'Zona V.I.P', 'Disponible'),
(41, 6, 'Mesa 03', 6, 'Primer nivel', 'Disponible'),
(42, 6, 'Mesa 04', 8, 'Segundo nivel', 'Disponible'),
(43, 6, 'Mesa 05', 10, 'Zona V.I.P', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_consumo`
--

CREATE TABLE `orden_consumo` (
  `id_orden` int(11) NOT NULL,
  `no_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `no_comensal` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_alimento` int(11) DEFAULT NULL,
  `nota_alimento` varchar(255) DEFAULT NULL,
  `id_bebida` int(11) DEFAULT NULL,
  `nota_bebida` varchar(255) DEFAULT NULL,
  `id_postre` int(11) DEFAULT NULL,
  `nota_postre` varchar(255) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_consumo`
--

INSERT INTO `orden_consumo` (`id_orden`, `no_orden`, `fecha`, `id_mesa`, `no_comensal`, `nombre`, `id_alimento`, `nota_alimento`, `id_bebida`, `nota_bebida`, `id_postre`, `nota_postre`, `estado`) VALUES
(2, 1001, '2017-05-08', 1, 1, 'Martin', 2, 'Sin cebolla, sin rabanos y sin chile', 1, 'Con hielos', 1, 'Ninguna', 'Finalizado'),
(3, 1001, '2017-05-08', 1, 2, 'Karen', 1, 'Sin crema', 1, 'Ninguna', 4, 'Ninguna', 'Finalizado'),
(4, 1002, '2017-05-11', 3, 1, 'Martin muñoz', 4, 'Precosida', 2, 'Bien fria', 3, 'Sabor chocolate', 'Finalizado'),
(5, 1002, '2017-05-11', 3, 2, 'Delia chavez', 2, 'Con rabanos', 1, 'Ninguna', 6, 'Ninguna', 'Finalizado'),
(6, 1002, '2017-05-11', 3, 3, 'Martin jr', 1, 'Sin cebolla', 5, 'Con hielos', 4, 'Ninguna', 'Finalizado'),
(7, 1002, '2017-05-11', 3, 4, 'Alma delia', 5, 'Con verdura', 6, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(8, 1003, '2017-05-11', 4, 1, 'Prueba uno', 2, 'Sin cebolla', 1, 'Con hielos', 5, 'Sabor fresa', 'Finalizado'),
(9, 1003, '2017-05-11', 4, 2, 'Prubeea dos', 3, 'Ninguna', 3, 'Ninguna', 3, 'Ninguna', 'Finalizado'),
(10, 1003, '2017-05-11', 4, 3, 'Prueba tres', 1, 'Ninguna', 6, 'Ninguna', 5, 'Sabor vainilla', 'Finalizado'),
(11, 1003, '2017-05-11', 4, 4, 'Prueba cuatro', 4, 'Ninguna', 3, 'Ninguna', 4, 'Ninguna', 'Finalizado'),
(12, 1004, '2017-05-11', 1, 1, 'Luis', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(13, 1004, '2017-05-11', 1, 2, 'No vino', 0, 'Ninguna', 0, 'Ninguna', 0, 'Ninguna', 'Finalizado'),
(14, 1005, '2017-05-11', 3, 1, 'Dsgfhg', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(15, 1005, '2017-05-11', 3, 2, 'Sdfhgmh', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(16, 1005, '2017-05-11', 3, 3, 'Sfdng', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(17, 1005, '2017-05-11', 3, 4, 'Asfdghf', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(18, 1006, '2017-05-11', 7, 1, '1', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(19, 1006, '2017-05-11', 7, 2, '2', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(20, 1006, '2017-05-11', 7, 3, '3', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(21, 1006, '2017-05-11', 7, 4, '4', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(22, 1006, '2017-05-11', 7, 5, '5', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(23, 1006, '2017-05-11', 7, 6, '6', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(24, 1006, '2017-05-11', 7, 7, '7', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(25, 1006, '2017-05-11', 7, 8, '8', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(26, 1007, '2017-05-11', 6, 1, 'Uno', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(27, 1007, '2017-05-11', 6, 2, 'Dos', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(28, 1007, '2017-05-11', 6, 3, 'Tres', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(29, 1007, '2017-05-11', 6, 4, 'Cuatro', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(30, 1007, '2017-05-11', 6, 5, 'Cinco', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(31, 1007, '2017-05-11', 6, 6, 'Nadie', 0, 'No', 0, 'No', 0, 'No', 'Finalizado'),
(32, 1008, '2017-05-11', 6, 1, 'Asdas', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(33, 1008, '2017-05-11', 6, 2, 'Asdasd', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(34, 1008, '2017-05-11', 6, 3, 'Asdasd', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(35, 1008, '2017-05-11', 6, 4, 'Asdasd', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(36, 1008, '2017-05-11', 6, 5, 'Adsasd', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(37, 1008, '2017-05-11', 6, 6, 'Asdas', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(38, 1009, '2017-05-11', 6, 1, 'Uno', 4, 'Ninguna', 4, 'Ninguna', 4, 'Ninguna', 'Finalizado'),
(39, 1009, '2017-05-11', 6, 2, 'Dosss', 5, 'Ninguna', 5, 'Ninguna', 4, 'Ninguna', 'Finalizado'),
(40, 1009, '2017-05-11', 6, 3, 'Tresss', 6, 'Ninguna', 6, 'Ninguna', 2, 'Ninguna', 'Finalizado'),
(41, 1009, '2017-05-11', 6, 4, 'Cuatrooo', 4, 'Ninguna', 3, 'Ninguna', 3, 'Ninguna', 'Finalizado'),
(42, 1009, '2017-05-11', 6, 5, 'Inccc', 5, 'Ninguna', 4, 'Ninguna', 3, 'Ninguna', 'Finalizado'),
(43, 1009, '2017-05-11', 6, 6, 'Nadie', 0, 'Ninguna', 0, 'Ninguna', 0, 'Ninguna', 'Finalizado'),
(44, 1010, '2017-05-11', 9, 1, '1', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(45, 1010, '2017-05-11', 9, 2, '2', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(46, 1010, '2017-05-11', 9, 3, '3', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(47, 1010, '2017-05-11', 9, 4, '4', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(48, 1010, '2017-05-11', 9, 5, '5', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(49, 1010, '2017-05-11', 9, 6, '6', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(50, 1010, '2017-05-11', 9, 7, '7', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(51, 1010, '2017-05-11', 9, 8, '8', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(52, 1010, '2017-05-11', 9, 9, '9', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(53, 1010, '2017-05-11', 9, 10, 'Nadie', 0, 'Ninguna', 0, 'Ninguna', 0, 'Ninguna', 'Finalizado'),
(54, 1011, '2017-05-11', 2, 1, 'Mesa 2 comensal 1', 4, 'Ninguna', 4, 'Ninguna', 5, 'Ninguna', 'Finalizado'),
(55, 1011, '2017-05-11', 2, 2, 'Mesa 2 comensal 2', 2, 'Sin cebolla', 2, 'Fria', 5, 'Sabro fresa', 'Finalizado'),
(56, 1012, '2017-05-11', 3, 1, 'M3 c1', 1, 'Sin crema', 1, 'Con hielos', 1, 'Ninguna', 'Finalizado'),
(57, 1012, '2017-05-11', 3, 2, 'M3 c2', 3, 'Ninguna', 4, 'Ninguna', 4, 'Ninguna', 'Finalizado'),
(58, 1012, '2017-05-11', 3, 3, 'M3 c3', 7, 'Sin mayoneza', 2, 'Ninguna', 3, 'Sabro vainilla', 'Finalizado'),
(59, 1012, '2017-05-11', 3, 4, 'M3 c4', 5, 'Ninguna', 3, 'Al tiempo', 6, 'Ninguna', 'Finalizado'),
(60, 1013, '2017-05-12', 39, 1, 'Prueba uno', 4, 'Ninguna', 1, 'Con hielos', 2, 'Ninguna', 'Finalizado'),
(61, 1013, '2017-05-12', 39, 2, 'Prueba 02', 1, 'Sin cebolla', 3, 'Al tiempo', 6, 'Ninguna', 'Finalizado'),
(62, 1014, '2017-05-12', 39, 1, 'Pedro', 1, 'Ninguna', 1, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(63, 1014, '2017-05-12', 39, 2, 'Nadie', 0, 'No', 0, 'No', 0, 'No', 'Finalizado'),
(64, 1015, '2017-05-24', 1, 1, 'Luis', 2, 'Ninguna', 5, 'Ninguna', 0, 'Ninguna', 'Finalizado'),
(65, 1015, '2017-05-24', 1, 2, 'Carmen', 3, 'Ninguna', 0, 'Ninguna', 3, 'Ninguna', 'Finalizado'),
(66, 1016, '2017-05-24', 1, 1, 'Carlos', 2, 'Ninguna', 3, 'Ninguna', 1, 'Ninguna', 'Finalizado'),
(67, 1016, '2017-05-24', 1, 2, 'Omar', 4, 'Ninguna', 2, 'Ninguna', 2, 'Ninguna', 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_sucursal` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `no_orden` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `fecha`, `id_sucursal`, `id_mesa`, `id_caja`, `no_orden`, `total`, `estado`) VALUES
(6, '2017-05-11 18:58:39', 1, 4, 1, 1003, 418.50, 'Pagado'),
(7, '2017-05-11 19:40:11', 1, 3, 1, 1002, 401.00, 'Pagado'),
(8, '2017-05-11 19:40:18', 1, 1, 1, 1001, 186.00, 'Pagado'),
(9, '2017-05-11 19:48:38', 1, 7, 1, 1006, 804.00, 'Pagado'),
(10, '2017-05-11 19:52:02', 1, 6, 1, 1007, 502.50, 'Pagado'),
(11, '2017-05-11 20:51:45', 1, 6, 1, 1008, 603.00, 'Pagado'),
(12, '2017-05-11 20:55:18', 1, 6, 1, 1009, 528.50, 'Pagado'),
(13, '2017-05-11 21:29:40', 1, 2, 1, 1011, 214.50, 'Pagado'),
(14, '2017-05-11 21:29:52', 1, 3, 1, 1012, 439.50, 'Pagado'),
(15, '2017-05-11 21:29:57', 1, 9, 1, 1010, 904.50, 'Pagado'),
(16, '2017-05-12 18:31:50', 6, 39, 6, 1013, 196.50, 'Pagado'),
(17, '2017-05-12 18:38:47', 6, 39, 6, 1014, 100.50, 'Pagado'),
(18, '2017-05-24 23:14:53', 1, 1, 1, 1015, 181.00, 'Pagado'),
(19, '2017-05-25 00:05:51', 1, 1, 1, 1016, 184.50, 'Pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `id_postre` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` double(10,2) NOT NULL,
  `fotografia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id_postre`, `nombre`, `descripcion`, `precio`, `fotografia`) VALUES
(0, 'Ningún postre', 'no requiere postre', 0.00, 'ninguna'),
(1, 'Flan Riquelme', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, 'a728d6dfdff47e96f639c134c0f5dd40.jpg'),
(2, 'Flan Napolitano', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, 'f90fbb9fe08b31f09ec46108c2e4f75a.jpg'),
(3, 'Helado De Sabores', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, '2db96dcb3101f5f86c466219a7b7a71b.jpg'),
(4, 'Musse De Limón', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, '49e6f266d3d696974ed3a9f7873c170b.jpg'),
(5, 'Pastel Diferentes Sabores', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, '140fcda27d1b3cea0be1ee2aa8a82bae.jpg'),
(6, 'Pay De Queso', 'El postre es el plato de sabor dulce o agridulce que se toma al final de la comida. Cuando se habla de postres se entiende alguna preparación dulce, bien sean cremas, tartas, pasteles, helados, bombones, etc. Por extensión se denomina postre a cualquier comida dulce incluso si su objetivo no es ser ingerido al final de la comida. Algunos ejemplos son las galletas o magdalenas.', 25.00, '3a84a258e256e80c87e1e0a4528d5aab.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuarios`
--

CREATE TABLE `rol_usuarios` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol_usuarios`
--

INSERT INTO `rol_usuarios` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'master', 'administrador master del sistema'),
(2, 'administrador', 'administrador del sistema'),
(3, 'cocinero', 'cocinero del sistema'),
(4, 'mesero', 'mesero del sistema'),
(5, 'cantinero', 'cantinero del sistema'),
(6, 'cajero', 'cajero del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `asignacion_admin` varchar(9) NOT NULL,
  `asignacion_caja` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nombre`, `telefono`, `calle`, `numero`, `colonia`, `estado`, `asignacion_admin`, `asignacion_caja`) VALUES
(1, 'Sucursal Zaragoza', '5561415156', 'La Concha Azul', 11, 'La Esperanza', 'México', 'Realizada', 'Realizada'),
(2, 'Sor Juana', '5566978896', 'Kennedy', 289, 'Las Aguilas', 'Mexico', 'Realizada', 'Realizada'),
(3, 'Sucursal Pancho Lopez', '5568415513', 'Almeira', 25, 'La Jacaranda', 'Mexico', 'Realizada', 'Realizada'),
(4, 'Coyoacan', '4452217542', 'Simon', 45, 'San Miguel', 'Df', 'Realizada', 'Realizada'),
(5, 'Condesa', '1234567890', 'La Que Sea', 5, 'Nativitas', 'Cdmx', 'Realizada', 'Realizada'),
(6, 'Los Pepes', '5516517874', 'Adelita', 15, 'Esperanza', 'Mexico', 'Realizada', 'Realizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `paterno` varchar(25) NOT NULL,
  `materno` varchar(25) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `fotografia` varchar(50) NOT NULL,
  `telefono` decimal(10,0) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `asignacion_admin` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `nombre`, `paterno`, `materno`, `sexo`, `nacimiento`, `email`, `fotografia`, `telefono`, `usuario`, `contrasena`, `asignacion_admin`) VALUES
(1, 1, 'master', 'paterno', 'materno', 'Masculino', '2017-05-09', 'master@mail.com', '0c641b66fffbfb8e4f73e0d89dcd3a.jpg', '6141295352', 'master', 'eb0a191797624dd3a48fa681d3061212', 'Pendiente'),
(2, 2, 'Martin De Jesus', 'Chavez', 'Muñoz', 'Masculino', '1992-12-21', 'martin@mail.com.mx', '9322b57cee46af8a2d42c39c34af1091.jpg', '5518165265', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Realizada'),
(3, 3, 'Raul', 'Jimenez', 'Olvera', 'Masculino', '1992-03-11', 'cocinero@mail.com.mx', '4f06c8584d51d38f7af5914749214573.jpg', '5568435432', 'cocinero', '209398364a16235aa9df0f44569f8feb', 'Realizada'),
(4, 4, 'Cesar', 'Perez', 'Morales', 'Masculino', '1992-05-21', 'mesero@mail.com.mx', '54b2ec5a5a90f1fec7f12f16be7855c0.jpg', '5512384534', 'mesero', 'eb3ae7fb426cdc86ec02b3f63e3e7b09', 'Realizada'),
(5, 4, 'Rosa', 'Apache', 'Rodriguez', 'Femenino', '1991-04-04', 'cantinera@mail.com.mx', '2ef18cf26bdb7c4e579ff7f107cd6150.jpg', '5578465145', 'cantinera', '30f877417d46ec2f16759b7302ae91bb', 'Realizada'),
(6, 6, 'Jimena', 'Soria', 'Arizona', 'Femenino', '1992-05-03', 'cajera@mail.com.mx', '0c28bdfd098da4016b3bc48477b4653d.png', '5584654565', 'cajera', 'f5b565389d748a5bd5d589b56534ac68', 'Realizada'),
(7, 2, 'Pedro', 'Lule', 'Ortiz', 'Masculino', '2015-02-02', 'algo@mail.com', '66112be36af7b41bce7898695841aeb6.png', '5598846846', 'pedro', 'c6cc8094c2dc07b700ffcc36d64e2138', 'Realizada'),
(8, 2, 'Alberto', 'Quintero', 'Rosario', 'Masculino', '1979-12-01', 'albert@hotmail.com', '3d139fe374e5b4976bc1a46401ee6fc7.png', '5468486456', 'alberto', '177dacb14b34103960ec27ba29bd686b', 'Realizada'),
(9, 2, 'Victor', 'Dominguez', 'Pardo', 'Masculino', '2017-03-16', 'vitor@gmail.com', '85e191ccf08e8c5015dbceb8c28ed988.png', '2345678990', 'victor', 'ffc150a160d37e92012c196b6af4160d', 'Realizada'),
(10, 2, 'Roberto', 'Jimenez', 'Carcaño', 'Femenino', '2017-05-01', 'robert@gmail.com', 'f5bc3d9620223ccd5ca8aae2bb88a498.png', '1234567890', 'robert', '684c851af59965b680086b7b4896ff98', 'Realizada'),
(11, 3, 'Karen', 'Zepeda', 'Suarez', 'Femenino', '1992-03-02', 'karen@mail.com', 'b37483abe0bf9e9206e6865df6cfe948.png', '5584645413', 'karen', 'ba952731f97fb058035aa399b1cb3d5c', 'Realizada'),
(12, 5, 'Bobby', 'Larios', 'Ramirez', 'Masculino', '1998-02-02', 'bobby@mail.com', '35c2c6ce9da9fdc4c7883badcf82dd24.png', '5584651321', 'bobby', 'a9c4cef5735770e657b7c25b9dcb807b', 'Realizada'),
(13, 4, 'Ramona', 'Patiño', 'Ochoa', 'Femenino', '1991-04-02', 'ramona@mail.com.mx', 'b9186c7171f6f10d6c427b9bc97f91f2.png', '5564854534', 'ramona', '071e89d6430e8321624257dd60cf80e6', 'Realizada'),
(14, 6, 'Braulio', 'Pacheco', 'Santos', 'Masculino', '1990-10-02', 'braulio@mail.com.mx', 'da44ae070372ca2bd6d7504938e2997e.png', '5568483513', 'braulio', 'b46f8dfc0af322859cc47d7fec1d377b', 'Realizada'),
(15, 6, 'Jesus', 'Prueba', 'Hnjm', 'Masculino', '1989-09-28', 'lubeck@hotmail.com', '74bbd5f2200707c31a1e0bb3bdcb663f.png', '8465554654', 'jesus', '110d46fcd978c24f306cd7fa23464d73', 'Realizada'),
(16, 5, 'Karla', 'Mendez', 'Chavez', 'Masculino', '1983-10-27', 'mundo@mail.com', '82dc596159b55fd29878cc11d20753a1.png', '7545454254', 'karla', '5fcd162c2418ef549b7b912976468942', 'Realizada'),
(17, 5, 'Romina', 'Jerez', 'Perez', 'Femenino', '1983-10-27', 'mundo@mail.com', '0e3bb3fb9806cb56d95fe52f6dcf3b2a.png', '7545454254', 'romina', '5ca3af0fd9e5b83ccf6d56bf14e1d804', 'Realizada'),
(18, 3, 'Alma', 'Muñoz', 'Juarez', 'Femenino', '1994-04-04', 'alma@mail.com', 'c72eaa94671f78e453e50f0e6e67ab28.png', '4545456456', 'alma', 'ebbc3c26a34b609dc46f5c3378f96e08', 'Realizada'),
(19, 4, 'Luis', 'Caballero', 'Curtiz', 'Masculino', '1990-03-02', 'luis@mail.com', '68af3fa66670afee2ed83a9296ffba57.png', '5516846541', 'luis', '502ff82f7f1f8218dd41201fe4353687', 'Realizada'),
(20, 6, 'Kevin', 'Zepeda', 'Suarez', 'Masculino', '1994-03-02', 'kevin@mail.com', '41934178c0ca353de9468d16c69ecfea.jpg', '5548964541', 'kevin', '9d5e3ecdeb4cdb7acfd63075ae046672', 'Realizada'),
(21, 5, 'Brenda', 'Ortega', 'Olvera', 'Femenino', '1998-02-21', 'brenda@mail.com', '2448beb4e44ad7bbc5e0048f6a75abdd.png', '5598465314', 'brenda', 'e5e9b41c8f1ad39ffb22df4a7aa7d876', 'Realizada'),
(22, 3, 'Cinthya', 'Hernandez', 'Vazquez', 'Femenino', '2002-05-03', 'cin@mail.com', '0487f1ef7ae444cc9a90e47c86c8762e.jpg', '5468453541', 'cinthya', '48856e9ce70c3d046ebb1fd80b3ef1fe', 'Realizada'),
(23, 4, 'Paco', 'Guzman', 'Rosas', 'Masculino', '1990-05-03', 'paco@mail.com', '94420517146b709a535c18bc28f23895.png', '5594654234', 'paco', '311020666a5776c57d265ace682dc46d', 'Realizada'),
(24, 5, 'Oscar', 'Peralta', 'Ortega', 'Masculino', '2001-03-03', 'oscar@mail.com', '45369ceb7c5ed581e81a584c20cb43a1.png', '5598465432', 'oscar', 'f156e7995d521f30e6c59a3d6c75e1e5', 'Realizada'),
(25, 3, 'Elvira', 'Limon', 'Ortiz', 'Femenino', '1979-01-30', 'elvi@mail.com', '3df7ac319313401bb5443233fa6dd3fc.png', '5589465123', 'elvira', '059273779b2ffa92e46e85c25c2dc34b', 'Realizada'),
(26, 6, 'Atlantis', 'Perea', 'Tunco', 'Masculino', '1987-03-03', 'atla@mail.com', '0c5e34f5a17fd7220b04c075c8e12281.jpg', '5598784364', 'atlantis', 'cd4009a247ae8c48606e9bfd8685fabe', 'Realizada'),
(27, 2, 'Armando', 'Gonzalez', 'Manzanero', 'Masculino', '2016-12-07', 'armando@mail.com', 'a1e37ac59594dfa8e9383c9cf72ee696.png', '5196415616', 'armando', '7b64d09060db17ca6b96c0af99575903', 'Realizada'),
(28, 4, 'Aldo', 'Denigris', 'Bocanegra', 'Masculino', '2017-05-10', 'ald@mail.com', '3cbe801a8aad900583b81fb67cdd4b2e.png', '5915166521', 'ALDO', '97f9b8b5f3ff0c65246e0c2b8acfae30', 'Realizada'),
(29, 5, 'Socorro', 'Muñoz', 'Palmera', 'Femenino', '2017-05-01', 'soco@mail.com', 'e6668551d1b54fb59d5e66821fdd8247.png', '5916574156', 'socorro', '5cc00761d833fff87ff43814918412d2', 'Realizada'),
(30, 3, 'Sebastian', 'Garcia', 'Luna', 'Masculino', '2017-05-16', 'sebas@mail.com', 'eb0a82ad01239428c6fc5929c2e90e9c.png', '4515561322', 'sebastian', 'c2d628ba98ed491776c9335e988e2e3b', 'Realizada'),
(31, 6, 'Aurora', 'Cardenas', 'Mejia', 'Femenino', '1992-09-29', 'auro@mail.com', '188c3830fabda63675f6aa21d283e2d5.png', '5518964515', 'aurora', '99c8ef576f385bc322564d5694df6fc2', 'Realizada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id_alimento`);

--
-- Indices de la tabla `asignacion_sucursal_caja`
--
ALTER TABLE `asignacion_sucursal_caja`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `asignacion_usuario_sucursal`
--
ALTER TABLE `asignacion_usuario_sucursal`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `orden_consumo`
--
ALTER TABLE `orden_consumo`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `no_orden` (`no_orden`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`id_postre`);

--
-- Indices de la tabla `rol_usuarios`
--
ALTER TABLE `rol_usuarios`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id_alimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `asignacion_sucursal_caja`
--
ALTER TABLE `asignacion_sucursal_caja`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `asignacion_usuario_sucursal`
--
ALTER TABLE `asignacion_usuario_sucursal`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `orden_consumo`
--
ALTER TABLE `orden_consumo`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id_postre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `rol_usuarios`
--
ALTER TABLE `rol_usuarios`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
