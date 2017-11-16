-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 03:49:51
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_suplementos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Proteina', 'Suplementos para definición muscular. La proteína de suero aislada es también extraída del suero de la leche al igual que la whey protein que hemos visto más arriba, pero la aislada ofrece un mayor aporte de proteínas (un 90% aproximadamente) y además no contiene prácticamente grasas ni hidratos de carbono.'),
(2, 'Creatina', 'La creatina se acumula básicamente en los músculos esqueléticos (aproximadamente un 98 %) en forma de creatina libre unida a una molécula de fosfato (PCr o fosfocreatina). La PCr sirve como fuente inmediata de energía para la contracción muscular, algo especialmente importante durante los ejercicios de breve duración, alta intensidad y carácter anaerobico. Otra función vital de la creatina es su capacidad para detener o rechazar los iones de hidrogeno, responsables de la bajada del pH del músculo y su conversión en mas acidico, un factor que contribuye a la fatiga muscular.'),
(3, 'Pre Entreno', 'Contiene aminoácidos tales como la arginina, para estimular los bombeos musculares y la producción hormonal, así como estimulantes del SNC. Además, no tiene aporte calórico, por lo que constituye un buen producto para la fase de definición muscular.'),
(4, 'Ganador de peso', 'Es sumamente similar a un suplemento de proteína en polvo con la diferencia de que los ganadores de peso, además de proteína, traen una cantidad bastante elevada de hidratos de carbono, y por ende, de calorías. La finalidad de esto es ayudar a las personas que se quejan de no poder subir de peso, los que muchos conocen como ectomorfos o hard gainers en inglés, puedan aumentar sus kilogramos en báscula de una manera un poco más sencilla.'),
(6, 'deprueba', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `fk_id_usuario`, `id_producto`, `descripcion`, `calificacion`) VALUES
(1, 1, 13, 'esta creatina es buenisima ', 5),
(2, 1, 7, 'buenisimaaaaa', 4),
(4, 1, 13, '5', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `fk_id_producto` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `fk_id_producto`, `path`) VALUES
(1, 16, '../images/Creatinas/CreatinaPulver.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre_categoria` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `precio` varchar(30) NOT NULL,
  `peso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_categoria`, `id_categoria`, `nombre`, `descripcion`, `images`, `precio`, `peso`) VALUES
(7, 'Proteina', 1, 'Proteína Syntha-6 de BSN x2.25 Kilos', 'Ninguna otra proteína es igual a Syntha-6 de BSN. Se asimila progresivamente y tus músculos están recibiendo nutrientes constantemente.', '../images/Proteinas/Syntha1.jpg', '$2300', '2.225grs'),
(10, 'Proteina', 1, 'Whey Gold por 2 kilos de Optimum Nutrition', '5 Libras (2 Kilos) Proteína de suero de leche de Optimum Nutition, importada de USA.', '../images/Proteinas/WheyGold.jpg', '$ 2,385', '2.000grs'),
(13, 'Creatina', 2, 'Creatina x 300 grs Ultimate Nutrition', 'La creatina por 300 gramos de Ultimate Nutrition provee del más puro monohidrato de creatina.', '../images/Creatinas/CreatinaUltimate.jpg', '$ 327', '0.300grs'),
(16, 'Creatina', 2, 'Creatina Pura 100% Pulver x300 grs', 'Creatina Pulver 100% apta para celiacos, sin gluten. Excelente calidad. Masa muscular. Rendimiento.', '../images/Creatinas/CreatinaUltimate.jpg', '$ 210', '0.300grs'),
(18, 'Pre Entreno', 3, 'Pre Xplode de Ena Sport 675 Grs', 'Pre Xplode: Favorece la concentración.', '../images/PreEntrenos/PreXplodeENA.jpg', '$ 499', '0.675grs'),
(19, 'Pre Entreno', 3, 'Pump 3D de Star Nutrition 250 Grs', 'Pump 3D es un poderoso Pre-entrenamiento Ultra micronizado.', '../images/PreEntrenos/Pump3DStarNutrition.jpg', '$ 360', '0.250grs'),
(20, 'Pre Entreno', 3, 'Pre Workout Mervick 900 Grs', 'Lo nuevo de Mervick en pre entrenos', '../images/PreEntrenos/PreWorkoutMervick.jpg', '$ 432', '0.900grs'),
(21, 'Pre Entreno', 3, 'Max Xplode de 250 Grs Fireforce Nutrition', 'Transporte de nutrientes hacia la fibra muscular y aumento muscular. Energía ilimitada durante el entrenamiento.', '../images/PreEntrenos/MaxXplodeFireforceNutrition.jpg', '$ 495', '0.250grs'),
(22, 'Pre Entreno', 3, 'Pre Entreno Flash 5D x320 Grs de Hoch Sport', 'Aumenta la fuerza muscular y el rendimiento físico. Favorece el desarrollo muscular, la hidratación y el volumen celular. Favorece la quema de masa grasa y la atención durante los entrenamientos.', '../images/PreEntrenos/Flash5DHochSport.jpg', '$ 475', '0.320grs'),
(23, 'Pre Entreno', 3, 'Beta Xplode de HTN x 210 grs', 'Favorece la concentración. Aumenta la energía, la fuerza y el tamaño muscular. Favorece la recuperación.', '../images/PreEntrenos/BetaXplode.jpg', '$ 320', '0.210grs'),
(24, 'Ganador de peso', 4, 'Ena Ultra Mass por 1.5 Kilos', 'Excelente ganador de masa muscular a base de carbohidratos y proteínas de suero de leche. Industria Argentina. Envase de 1.5 kilos.', '../images/Ganadores/UltraMassENA.jpg', '$ 449', '1.500grs'),
(25, 'Ganador de peso', 4, 'Gainer Complex de Mervick x 2 kilos', 'Mezcla de aminoácidos, carbohidratos, vitaminas, minerales y proteínas. Ideal para ganar masa muscular.', '../images/Ganadores/GainerMervick.jpg', '$ 448', '2.000grs'),
(26, 'Ganador de peso', 4, 'Serious Mass de Optimum Nutrition de 6 Libras (3 Kilos)', 'Un excelente ganador de masa muscular (Ganador de Peso). Ideal para todo tipo de personas que quieren incrementar su volumen muscular al máximo.', '../images/Ganadores/SeriousMassON.jpg', '$ 1,395', '3.000grs'),
(27, 'Ganador de peso', 4, 'Mass Builder por 1.6 kilos de Nutrilab', 'Professional MASS BUILDER por 1.6 kilos Aporta un constante suministro de enegía y proteínas al organismo, ya que los carbohidratos que contiene son de diferentes velocidades de asimilación.', '../images/Ganadores/MassBuilderNutriLab.jpg', '$ 280', '1.600grs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `tipo_usuario`) VALUES
(1, 'car@los.com', '$2y$10$2UqBxZtoJsLMg/FY00xVfOV7Wx5NroAzMn.dxp7QDhpYnGXwSGAfu', 'administrador'),
(2, 'juan@carlos.com', '$2y$10$KglD9wPiLw1u.EAhLqw14OIt8mU8ACj0vDc.S28tj9us9tWn5kCXa\r\n', 'usuario'),
(3, 'juan@pedro.com', '12', 'usuario'),
(4, 'proba@do.com', '12', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_producto` (`fk_id_producto`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fk_id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
