-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 21:50:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(10) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 'La educación sentimental', 'La novela describe la vida de un joven muchacho llamado Frédéric Moreau que vive la revolución de 1848 y la fundación del Segundo Imperio francés, y su amor por una mujer mayor, Madame Arnoux. Flaubert basó buena parte de las experiencias de su protagonista (incluida la pasión romántica) en su propia vida.', '2020-11-02'),
(2, 'Romancero gitano', 'El Romancero gitano es una obra poética de Federico García Lorca, publicada en 1928. Está compuesta por dieciocho romances con temas como la noche, la muerte, el cielo, la luna. Todos los poemas tienen algo en común, tratan de la cultura gitana.', '2019-07-03'),
(1, 'La educación sentimental', 'La novela describe la vida de un joven muchacho llamado Frédéric Moreau que vive la revolución de 1848 y la fundación del Segundo Imperio francés, y su amor por una mujer mayor, Madame Arnoux. Flaubert basó buena parte de las experiencias de su protagonista (incluida la pasión romántica) en su propia vida.', '2020-11-02'),
(2, 'Romancero gitano', 'El Romancero gitano es una obra poética de Federico García Lorca, publicada en 1928. Está compuesta por dieciocho romances con temas como la noche, la muerte, el cielo, la luna. Todos los poemas tienen algo en común, tratan de la cultura gitana.', '2019-07-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
