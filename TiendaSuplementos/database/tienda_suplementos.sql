-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2017 a las 22:58:26
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

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
(4, 'Ganador de peso', 'Es sumamente similar a un suplemento de proteína en polvo con la diferencia de que los ganadores de peso, además de proteína, traen una cantidad bastante elevada de hidratos de carbono, y por ende, de calorías. La finalidad de esto es ayudar a las personas que se quejan de no poder subir de peso, los que muchos conocen como ectomorfos o hard gainers en inglés, puedan aumentar sus kilogramos en báscula de una manera un poco más sencilla.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
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

INSERT INTO `producto` (`id`, `id_categoria`, `nombre`, `descripcion`, `images`, `precio`, `peso`) VALUES
(1, 1, 'Proteína Whey X Pro por 1 Kilo\r\n', 'Proteína todo en uno de Ena Sport. Contiene proteína de suero de leche + Creatina + Aminoácidos + Taurina + Glutamina.', '../images/Proteinas/WheyXPro.jpg', '$560', '1000grs'),
(3, 1, 'Proteína Whey Nox Ena Sport x1 kg\r\n', 'La nueva proteína de ENA Sport aporta aminoácidos ramificados, arginina y ceto glutarato, ácido y glutámico y beta -alanina.', '../images/Proteinas/WheyNox.jpg', '$584', '1000grs'),
(7, 1, 'Proteína Syntha-6 de BSN x2.25 Kilos', 'Ninguna otra proteína es igual a Syntha-6 de BSN. Se asimila progresivamente y tus músculos están recibiendo nutrientes constantemente.', '../images/Proteinas/Syntha1.jpg', '$2300', '2.225grs'),
(9, 1, 'Proteína Nitro-Tech x4 Libras de Muscletech', '¡Científicamente superior a Whey Protein! Nitro-Tech Hardcore Pro Series de 4 Libras es el resultado de una investigación de años para desarrollar una fórmula que ayude a la construcción muscular', '../images/Proteinas/NitroTech.jpg', '$ 2,304', '1.800grs'),
(10, 1, 'Whey Gold por 2 kilos de Optimum Nutrition', '5 Libras (2 Kilos) Proteína de suero de leche de Optimum Nutition, importada de USA.', '../images/Proteinas/WheyGold.jpg', '$ 2,385', '2.000grs'),
(11, 1, 'Anabolic Halo de Muscletech x 1.1 kilos', 'Es una proteína combinada con creatina, glutamina y aminoácidos de tipo BCAA. Todo lo que tu cuerpo necesita para aumentar la masa muscular.', '../images/Proteinas/AnabolicHalo.jpg', '$1800', '1.100grs'),
(12, 2, 'Creatina x300 grs Universal Nutrition 300 gramos de pura creatina - Forma clínicamente comprobada es el polvo de monohidrato de creatina.', '300 gramos de pura creatina - Forma clínicamente comprobada es el polvo de monohidrato de creatina.', '../images/Creatinas/CreatinaUniversal.jpg', '$ 395', '0.300grs'),
(13, 2, 'Creatina x 300 grs Ultimate Nutrition', 'La creatina por 300 gramos de Ultimate Nutrition provee del más puro monohidrato de creatina.', '../images/Creatinas/CreatinaUltimate.jpg', '$ 327', '0.300grs'),
(14, 2, 'Cell Max de ENA por 1 Kilo', 'Creatina, taurina, ácido lipoico. Suplemento de fórmula avanzada para maximizar la absorción de creatina.', '../images/Creatinas/CellMaxENA.jpg', '$ 420', '1.000grs'),
(15, 2, 'Creatina DNA x 309 g. BSN', 'Recuperación, rendimiento y aumento de masa muscular.', '../images/Creatinas/CreatinaDNA.jpg', '$ 420', '0.309grs'),
(16, 2, 'Creatina Pura 100% Pulver x300 grs', 'Creatina Pulver 100% apta para celiacos, sin gluten. Excelente calidad. Masa muscular. Rendimiento.', '../images/Creatinas/CreatinaPulver.jpg', '$ 210', '0.300grs'),
(17, 2, 'Creatina 300 Gramos Fireforce Nutrition', 'Nueva Marca de Creatina. 300 gramos. Antes de entrenar previene la fatiga muscular. Luego del entrenamiento fomenta una más rápida recuperación.\r\n\r\n', '../images/Creatinas/CreatinaFireforce.jpg', '$ 230', '0.300grs'),
(18, 3, 'Pre Xplode de Ena Sport 675 Grs', 'Pre Xplode: Favorece la concentración.', '../images/PreEntrenos/PreXplodeENA.jpg', '$ 499', '0.675grs'),
(19, 3, 'Pump 3D de Star Nutrition 250 Grs', 'Pump 3D es un poderoso Pre-entrenamiento Ultra micronizado.', '../images/PreEntrenos/Pump3DStarNutrition.jpg', '$ 360', '0.250grs'),
(20, 3, 'Pre Workout Mervick 900 Grs', 'Lo nuevo de Mervick en pre entrenos', '../images/PreEntrenos/PreWorkoutMervick.jpg', '$ 432', '0.900grs'),
(21, 3, 'Max Xplode de 250 Grs Fireforce Nutrition', 'Transporte de nutrientes hacia la fibra muscular y aumento muscular. Energía ilimitada durante el entrenamiento.', '../images/PreEntrenos/MaxXplodeFireforceNutrition.jpg', '$ 495', '0.250grs'),
(22, 3, 'Pre Entreno Flash 5D x320 Grs de Hoch Sport', 'Aumenta la fuerza muscular y el rendimiento físico. Favorece el desarrollo muscular, la hidratación y el volumen celular. Favorece la quema de masa grasa y la atención durante los entrenamientos.', '../images/PreEntrenos/Flash5DHochSport.jpg', '$ 475', '0.320grs'),
(23, 3, 'Beta Xplode de HTN x 210 grs', 'Favorece la concentración. Aumenta la energía, la fuerza y el tamaño muscular. Favorece la recuperación.', '../images/PreEntrenos/BetaXplode.jpg', '$ 320', '0.210grs'),
(24, 4, 'Ena Ultra Mass por 1.5 Kilos', 'Excelente ganador de masa muscular a base de carbohidratos y proteínas de suero de leche. Industria Argentina. Envase de 1.5 kilos.', '../images/Ganadores/UltraMassENA.jpg', '$ 449', '1.500grs'),
(25, 4, 'Gainer Complex de Mervick x 2 kilos', 'Mezcla de aminoácidos, carbohidratos, vitaminas, minerales y proteínas. Ideal para ganar masa muscular.', '../images/Ganadores/GainerMervick.jpg', '$ 448', '2.000grs'),
(26, 4, 'Serious Mass de Optimum Nutrition de 6 Libras (3 Kilos)', 'Un excelente ganador de masa muscular (Ganador de Peso). Ideal para todo tipo de personas que quieren incrementar su volumen muscular al máximo.', '../images/Ganadores/SeriousMassON.jpg', '$ 1,395', '3.000grs'),
(27, 4, 'Mass Builder por 1.6 kilos de Nutrilab', 'Professional MASS BUILDER por 1.6 kilos Aporta un constante suministro de enegía y proteínas al organismo, ya que los carbohidratos que contiene son de diferentes velocidades de asimilación.', '../images/Ganadores/MassBuilderNutriLab.jpg', '$ 280', '1.600grs'),
(28, 4, 'Muscle Gain por 1.6 Kilos de Muscle Conceptk', 'MUSCLE GAIN Concept por 1.6 kilos es una mezcla de carbohidratos, proteínas, vitaminas y aminoácidos adicionados, diseñada eficazmente para mantener y mejorar el aporte calórico.', '../images/Ganadores/MuscleGainMuscleConcept.jpg', '$ 828', '1.600grs'),
(29, 4, 'Real Gain de Universal Nutricion por 3.8 Libras (1.7 Kilos)', 'Las proteínas que se utilizan en la fórmula de Real Gains de Universal son las de mejor calidad que se pueden encontrar en el mercado.', '../images/ganadores/RealGainUniversal.jpg', '$ 990', '1.700grs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'car@los.com', '$2y$10$2UqBxZtoJsLMg/FY00xVfOV7Wx5NroAzMn.dxp7QDhpYnGXwSGAfu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
