-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2017 at 10:56 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example99`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(1, 'Ciencias Sociales y Jurídicas'),
(2, 'Ciencias Experimentales'),
(3, 'Ciencias de la Salud'),
(4, 'Enseñanzas Técnicas');

-- --------------------------------------------------------

--
-- Table structure for table `area_rama`
--

CREATE TABLE `area_rama` (
  `area_id` int(11) NOT NULL,
  `rama_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area_rama`
--

INSERT INTO `area_rama` (`area_id`, `rama_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(3, 36),
(3, 52),
(3, 53),
(3, 54),
(3, 55),
(3, 56),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 62),
(3, 63),
(3, 64),
(3, 65),
(3, 66),
(3, 67),
(3, 68),
(3, 69),
(3, 71),
(3, 72),
(3, 73),
(4, 77),
(4, 78),
(4, 79),
(4, 80),
(4, 81),
(4, 82),
(4, 95);

-- --------------------------------------------------------

--
-- Table structure for table `Comentario`
--

CREATE TABLE `Comentario` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Comentario`
--

INSERT INTO `Comentario` (`id`, `autor`, `fecha`, `contenido`) VALUES
(7, 'pedro@correo.ugr.es', '2017-08-13 00:00:00', 'sfAF');

-- --------------------------------------------------------

--
-- Table structure for table `demanda`
--

CREATE TABLE `demanda` (
  `id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `rama_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `condiciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `contacto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brochure` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demanda`
--

INSERT INTO `demanda` (`id`, `area_id`, `rama_id`, `disciplina_id`, `tipo_id`, `nombre`, `autor`, `descripcion`, `condiciones`, `fechaInicio`, `fechaFin`, `contacto`, `brochure`) VALUES
(1, 1, 1, NULL, NULL, 'fff', 'adminuser', 'fff', 'fff', '2017-08-13 22:44:00', '2017-08-17 22:45:00', 'lorenmanu@correo.ugr.es', 'fff.png');

-- --------------------------------------------------------

--
-- Table structure for table `demanda_comentario`
--

CREATE TABLE `demanda_comentario` (
  `demanda_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`id`, `nombre`) VALUES
(1, 'Derecho Administrativo'),
(2, 'Derecho Civil'),
(3, 'Derecho Constitucional'),
(4, 'Derecho del Trabajo y Seguridad Social'),
(5, 'Derecho Eclesiástico del Estado'),
(6, 'Derecho Financiero y Tributario'),
(7, 'Derecho Internacional Privado'),
(8, 'Derecho Internacional Público y Relaciones Internacionales'),
(9, 'Derecho Mercantil'),
(10, 'Derecho Penal'),
(11, 'Derecho Procesal'),
(12, 'Derecho Romano'),
(13, 'Didáctica de la Expresión'),
(14, 'DIdáctica de la Expresión Musical'),
(15, 'Didáctica de la Expresión Plástica'),
(16, 'Didáctica de la Lengua y Literatura'),
(17, 'Didáctica de la Matemática'),
(18, 'Didáctica y Ciencias Experimentales'),
(19, 'Didáctica y Ciencias Solciales'),
(20, 'Didáctica y Organización Escolar'),
(21, 'Economía Aplicada'),
(22, 'Economía Financiera y Contabilidad'),
(23, 'Economía Soiología y Política Agraria'),
(24, 'Historia Derecho y las Instituciones'),
(25, 'Historia Pensamiento y de los Movimientos Sociales y Políticos'),
(26, 'Psicología Básica'),
(27, 'Psicología Evolutiva'),
(28, 'Psicología Social'),
(29, 'Física Aplicada'),
(30, 'Física Atómica, Molecular y Nuclear'),
(31, 'Física Material Condensada'),
(34, 'Física De la Tierra'),
(35, 'Geodinámica Externa'),
(36, 'Geodinámica Interna'),
(37, 'Química Analítica'),
(38, 'Química Física'),
(39, 'Inorgánica'),
(40, 'Química Orgánica'),
(41, 'Anatomía Patológica '),
(42, 'Anatomía y Patológica Comparadas'),
(43, 'Anatomía y Embriología Humana'),
(44, 'Medicina Legal y Forense'),
(45, 'Medicina Preventiva y Salud Pública'),
(46, 'Medicina Cirugía Animal'),
(47, 'COnstrucciones Arquitectónicas'),
(48, 'Construcciones Navales'),
(49, 'Filología Alemana'),
(50, 'Filología Catalana'),
(51, 'Filología Eslava'),
(52, 'Filología Francesa'),
(53, 'Filología Griega'),
(54, 'Filología Inglesa'),
(55, 'Filología Italiana'),
(56, 'Filología Latina'),
(57, 'Filología Romántica'),
(58, 'Filología Vasca'),
(59, 'Filología Gallega y Portuguesa'),
(60, 'Historia Antigua'),
(61, 'Historia Contemporánea'),
(62, 'Historia Americana'),
(64, 'Historia de la Ciencia'),
(65, 'Historia del Arte'),
(66, 'Historia Medieval'),
(67, 'Historia Moderna'),
(68, 'Ingienería Aeroespacial'),
(69, 'Ingeniería Agroforestal'),
(70, 'Ingenería de la Construcción'),
(71, 'Ingenería de los procesos de Fabricación'),
(72, 'Ingenería de Sistemas y Automática'),
(73, 'Ingenería de Terreno'),
(74, 'Ingenería e Infraestructuras de los Transportes'),
(75, 'Ingenería Eléctrica'),
(76, 'Ingenería Hidráulica'),
(77, 'Ingenería Mecánica'),
(78, 'Ingenería Nuclear'),
(79, 'Ingenería Química'),
(80, 'Ingenería Telemática'),
(81, 'Ingenería Textil y Papelera'),
(82, 'Producción Animal'),
(83, 'Producción Vegetal');

-- --------------------------------------------------------

--
-- Table structure for table `Oferta`
--

CREATE TABLE `Oferta` (
  `id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `rama_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `condiciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `contacto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brochure` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oferta_comentario`
--

CREATE TABLE `oferta_comentario` (
  `oferta_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oferta_visitasanio`
--

CREATE TABLE `oferta_visitasanio` (
  `oferta_id` int(11) NOT NULL,
  `visitasanio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oferta_visitasdia`
--

CREATE TABLE `oferta_visitasdia` (
  `oferta_id` int(11) NOT NULL,
  `visitasdia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oferta_visitasmes`
--

CREATE TABLE `oferta_visitasmes` (
  `oferta_id` int(11) NOT NULL,
  `visitasmes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PalabrasClaveOferta`
--

CREATE TABLE `PalabrasClaveOferta` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `palabrasClave` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palabras_clave_demanda`
--

CREATE TABLE `palabras_clave_demanda` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `palabrasClave` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rama`
--

CREATE TABLE `rama` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rama`
--

INSERT INTO `rama` (`id`, `nombre`) VALUES
(1, 'Antropología Social'),
(2, 'Biblioteconomía y Documentación'),
(3, 'Ciencia Política y de la Administración'),
(4, 'Comercialización e Investigación de los Mercados'),
(5, 'Comunicación Audiovisual y Publicidad'),
(7, 'Derecho'),
(8, 'Didáctica'),
(9, 'Economía'),
(10, 'Historia'),
(11, 'Educación Física y Deportiva'),
(12, 'Filosofía del Derecho'),
(13, 'Fundamentos del Análisis Económico'),
(14, 'Metodología de las Ciencias y del Comportmiento'),
(15, 'Métodos de Investigación y Diagnóstico en Educación'),
(16, 'Organización de Empresas'),
(17, 'Periodismo'),
(18, 'Personalidad, Evaluación, y Tratamiento Psicológico'),
(19, 'Psicobiología'),
(20, 'Sociología'),
(21, 'Teoría e Historia de la Educación'),
(22, 'Trabajo Social y Servicios Sociales'),
(23, 'Algebra'),
(24, 'Análisis Matemático'),
(25, 'Astronomía y Astrofísica'),
(26, 'Biología Celular'),
(27, 'Bioquímica y Biología Molecular'),
(28, 'Botánica'),
(29, 'Cristalografía y Mineralogía'),
(30, 'Ecología'),
(31, 'Edafología y Química Agrícola'),
(32, 'Eectromagnetismo'),
(33, 'Estadística e Investigación OPerativ'),
(34, 'Estadística e Investigación Operativa'),
(35, 'Estratigrafía'),
(36, 'Farmacología'),
(37, 'Física'),
(38, 'Fisiología Vegetal'),
(39, 'Genética'),
(40, 'Geodinámica'),
(41, 'Geografía Física'),
(42, 'Geometría y Topología'),
(43, 'Matemática Aplicada'),
(44, 'Microbiología'),
(45, 'Óptica'),
(46, 'Paleontología'),
(47, 'Parasitología'),
(48, 'Petrología y Geoquímica'),
(49, 'Química'),
(50, 'Tecnologías del Medio Ambiente'),
(51, 'Zoología'),
(52, 'Anatomía'),
(53, 'Antropología Física'),
(54, 'Cirugía'),
(55, 'Dermatología'),
(56, 'Enfermería'),
(57, 'Estomatología'),
(58, 'Farmacia y Tecnología Farmacéutica'),
(59, 'Farmacología'),
(60, 'Fisiología'),
(61, 'Fisioterapia'),
(62, 'Histología'),
(63, 'Inmulogía'),
(64, 'Medicina'),
(65, 'Nutrición y Bromatología'),
(66, 'Obstetricia y Ginecología'),
(67, 'Oftalmología'),
(68, 'Otorrinolaringología'),
(69, 'Pediatría'),
(70, 'Psiquiatría'),
(71, 'Radiología y Medicina Física'),
(72, 'Sanidad Animal'),
(73, 'Toxicología'),
(77, 'Arquitectura y Tecnología de Computadores'),
(78, 'Ciencias de los Materiales e Ingienería Metalúrgica'),
(79, 'Ciencias de la Computación e Inteligencia Artificial'),
(80, 'CIencias y Técnicas de la Navegación'),
(81, 'Composición Aquitectónica'),
(82, 'Electrónica'),
(83, 'Lenguages y Sistemas Informáticos'),
(84, 'Máquinas y Motores Térmicos'),
(85, 'Mecánica de Fluidos'),
(86, 'Mecánica de Medios Continuos y Teoría de Estructuras'),
(87, 'Producción'),
(88, 'Prospeccion e Investigación Minera'),
(89, 'Proyectos Arquitectónicos'),
(90, 'Proyectos e Ingienería'),
(91, 'Tecnología de Alimentos'),
(92, 'Tecnología Electrónica'),
(93, 'Teoría de la Señal y Comunicaciones'),
(94, 'Urbanística y Ordenación del Territorio'),
(95, 'Ingeniería');

-- --------------------------------------------------------

--
-- Table structure for table `rama_disciplina`
--

CREATE TABLE `rama_disciplina` (
  `rama_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rama_disciplina`
--

INSERT INTO `rama_disciplina` (`rama_id`, `disciplina_id`) VALUES
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(7, 12),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(8, 18),
(8, 19),
(8, 20),
(9, 21),
(9, 22),
(9, 23),
(10, 24),
(10, 25),
(37, 29),
(37, 30),
(37, 31),
(37, 34),
(40, 35),
(40, 36),
(49, 37),
(49, 38),
(49, 40),
(52, 41),
(52, 42),
(52, 43),
(87, 82),
(87, 83),
(95, 68),
(95, 69),
(95, 70),
(95, 71),
(95, 72),
(95, 73),
(95, 74),
(95, 75),
(95, 76),
(95, 77),
(95, 78),
(95, 79),
(95, 80),
(95, 81);

-- --------------------------------------------------------

--
-- Table structure for table `RegistroOfertasDemandas`
--

CREATE TABLE `RegistroOfertasDemandas` (
  `id` int(11) NOT NULL,
  `ofertasResueltas` int(11) NOT NULL,
  `demandasResueltas` int(11) NOT NULL,
  `ofertasNoResueltas` int(11) NOT NULL,
  `demandasNoResueltas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `RegistroOfertasDemandas`
--

INSERT INTO `RegistroOfertasDemandas` (`id`, `ofertasResueltas`, `demandasResueltas`, `ofertasNoResueltas`, `demandasNoResueltas`) VALUES
(1, 3, 5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasdemanda_visitasanio`
--

CREATE TABLE `registrovisitasdemanda_visitasanio` (
  `registrovisitasdemanda_id` int(11) NOT NULL,
  `visitasanio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasdemanda_visitasdia`
--

CREATE TABLE `registrovisitasdemanda_visitasdia` (
  `registrovisitasdemanda_id` int(11) NOT NULL,
  `visitasdia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasdemanda_visitasmes`
--

CREATE TABLE `registrovisitasdemanda_visitasmes` (
  `registrovisitasdemanda_id` int(11) NOT NULL,
  `visitasmes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `RegistroVisitasOferta`
--

CREATE TABLE `RegistroVisitasOferta` (
  `id` int(11) NOT NULL,
  `oferta_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasoferta_visitasanio`
--

CREATE TABLE `registrovisitasoferta_visitasanio` (
  `registrovisitasoferta_id` int(11) NOT NULL,
  `visitasanio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasoferta_visitasdia`
--

CREATE TABLE `registrovisitasoferta_visitasdia` (
  `registrovisitasoferta_id` int(11) NOT NULL,
  `visitasdia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasoferta_visitasmes`
--

CREATE TABLE `registrovisitasoferta_visitasmes` (
  `registrovisitasoferta_id` int(11) NOT NULL,
  `visitasmes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `RegistroVisitasUsuario`
--

CREATE TABLE `RegistroVisitasUsuario` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `RegistroVisitasUsuario`
--

INSERT INTO `RegistroVisitasUsuario` (`id`, `usuario_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasusuario_visitasanio`
--

CREATE TABLE `registrovisitasusuario_visitasanio` (
  `registrovisitasusuario_id` int(11) NOT NULL,
  `visitasanio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovisitasusuario_visitasanio`
--

INSERT INTO `registrovisitasusuario_visitasanio` (`registrovisitasusuario_id`, `visitasanio_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasusuario_visitasdia`
--

CREATE TABLE `registrovisitasusuario_visitasdia` (
  `registrovisitasusuario_id` int(11) NOT NULL,
  `visitasdia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovisitasusuario_visitasdia`
--

INSERT INTO `registrovisitasusuario_visitasdia` (`registrovisitasusuario_id`, `visitasdia_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167),
(1, 168),
(1, 169),
(1, 170),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178),
(1, 179),
(1, 180),
(1, 181),
(1, 182),
(1, 183),
(1, 184),
(1, 185),
(1, 186),
(1, 187),
(1, 188),
(1, 189),
(1, 190),
(1, 191),
(1, 192),
(1, 193),
(1, 194),
(1, 195),
(1, 196),
(1, 197),
(1, 198),
(1, 199),
(1, 200),
(1, 201),
(1, 202),
(1, 203),
(1, 204),
(1, 205),
(1, 206),
(1, 207),
(1, 208),
(1, 209),
(1, 210),
(1, 211),
(1, 212),
(1, 213),
(1, 214),
(1, 215),
(1, 216),
(1, 217),
(1, 218),
(1, 219),
(1, 220),
(1, 221),
(1, 222),
(1, 223),
(1, 224),
(1, 225),
(1, 226),
(1, 227),
(1, 228),
(1, 229),
(1, 230),
(1, 231),
(1, 232),
(1, 233),
(1, 234),
(1, 235),
(1, 236),
(1, 237),
(1, 238),
(1, 239),
(1, 240),
(1, 241),
(1, 242),
(1, 243),
(1, 244),
(1, 245),
(1, 246),
(1, 247),
(1, 248),
(1, 249),
(1, 250),
(1, 251),
(1, 252),
(1, 253),
(1, 254),
(1, 255),
(1, 256),
(1, 257),
(1, 258),
(1, 259),
(1, 260),
(1, 261),
(1, 262),
(1, 263),
(1, 264),
(1, 265),
(1, 266),
(1, 267),
(1, 268),
(1, 269),
(1, 270),
(1, 271),
(1, 272),
(1, 273),
(1, 274),
(1, 275),
(1, 276),
(1, 277),
(1, 278),
(1, 279),
(1, 280),
(1, 281),
(1, 282),
(1, 283),
(1, 284),
(1, 285),
(1, 286),
(1, 287),
(1, 288),
(1, 289),
(1, 290),
(1, 291),
(1, 292),
(1, 293),
(1, 294),
(1, 295),
(1, 296),
(1, 297),
(1, 298),
(1, 299),
(1, 300),
(1, 301),
(1, 302),
(1, 303),
(1, 304),
(1, 305),
(1, 306),
(1, 307),
(1, 308),
(1, 309),
(1, 310),
(1, 311),
(1, 312),
(1, 313),
(1, 314),
(1, 315),
(1, 316),
(1, 317),
(1, 318),
(1, 319),
(1, 320),
(1, 321),
(1, 322),
(1, 323),
(1, 324),
(1, 325),
(1, 326),
(1, 327),
(1, 328),
(1, 329),
(1, 330),
(1, 331),
(1, 332),
(1, 333),
(1, 334),
(1, 335),
(1, 336),
(1, 337),
(1, 338),
(1, 339),
(1, 340),
(1, 341),
(1, 342),
(1, 343),
(1, 344),
(1, 345),
(1, 346),
(1, 347),
(1, 348),
(1, 349),
(1, 350),
(1, 351),
(1, 352),
(1, 353),
(1, 354),
(1, 355),
(1, 356),
(1, 357),
(1, 358),
(1, 359),
(1, 360),
(1, 361),
(1, 362),
(1, 363),
(1, 364),
(1, 365),
(1, 366),
(1, 367),
(1, 368),
(1, 369),
(1, 370),
(1, 371),
(1, 372),
(1, 373),
(1, 374),
(1, 375),
(1, 376),
(1, 377),
(1, 378),
(1, 379),
(1, 380),
(1, 381),
(1, 382),
(1, 383),
(1, 384),
(1, 385),
(1, 386),
(1, 387),
(1, 388),
(1, 389),
(1, 390),
(1, 391),
(1, 392),
(1, 393),
(1, 394),
(1, 395),
(1, 396),
(1, 397),
(1, 398),
(1, 399),
(1, 400),
(1, 401),
(1, 402),
(1, 403),
(1, 404),
(1, 405),
(1, 406),
(1, 407),
(1, 408),
(1, 409),
(1, 410),
(1, 411),
(1, 412),
(1, 413),
(1, 414),
(1, 415),
(1, 416),
(1, 417),
(1, 418),
(1, 419),
(1, 420),
(1, 421),
(1, 422),
(1, 423),
(1, 424),
(1, 425),
(1, 426),
(1, 427),
(1, 428),
(1, 429),
(1, 430),
(1, 431),
(1, 432),
(1, 433),
(1, 434),
(1, 435),
(1, 436),
(1, 437),
(1, 438),
(1, 439),
(1, 440),
(1, 441),
(1, 442),
(1, 443),
(1, 444),
(1, 445),
(1, 446),
(1, 447),
(1, 448),
(1, 449),
(1, 450),
(1, 451),
(1, 452),
(1, 453),
(1, 454),
(1, 455),
(1, 456),
(1, 457),
(1, 458),
(1, 459),
(1, 460),
(1, 461),
(1, 462),
(1, 463),
(1, 464),
(1, 465),
(1, 466),
(1, 467),
(1, 468),
(1, 469),
(1, 470),
(1, 471),
(1, 472),
(1, 473),
(1, 474),
(1, 475),
(1, 476),
(1, 477),
(1, 478),
(1, 479),
(1, 480),
(1, 481),
(1, 482),
(1, 483),
(1, 484),
(1, 485),
(1, 486),
(1, 487),
(1, 488),
(1, 489),
(1, 490),
(1, 491),
(1, 492),
(1, 493),
(1, 494),
(1, 495),
(1, 496),
(1, 497),
(1, 498),
(1, 499),
(1, 500),
(1, 501),
(1, 502),
(1, 503),
(1, 504),
(1, 505),
(1, 506),
(1, 507),
(1, 508),
(1, 509),
(1, 510),
(1, 511),
(1, 512),
(1, 513),
(1, 514),
(1, 515),
(1, 516),
(1, 517),
(1, 518),
(1, 519),
(1, 520),
(1, 521),
(1, 522),
(1, 523),
(1, 524),
(1, 525),
(1, 526),
(1, 527),
(1, 528),
(1, 529),
(1, 530),
(1, 531),
(1, 532),
(1, 533),
(1, 534),
(1, 535),
(1, 536),
(1, 537),
(1, 538),
(1, 539),
(1, 540),
(1, 541),
(1, 542),
(1, 543),
(1, 544),
(1, 545),
(1, 546),
(1, 547),
(1, 548),
(1, 549),
(1, 550),
(1, 551),
(1, 552),
(1, 553),
(1, 554),
(1, 555),
(1, 556),
(1, 557),
(1, 558),
(1, 559),
(1, 560),
(1, 561),
(1, 562),
(1, 563),
(1, 564),
(1, 565),
(1, 566),
(1, 567),
(1, 568),
(1, 569),
(1, 570),
(1, 571),
(1, 572),
(1, 573),
(1, 574),
(1, 575),
(1, 576),
(1, 577),
(1, 578),
(1, 579),
(1, 580),
(1, 581),
(1, 582),
(1, 583),
(1, 584),
(1, 585),
(1, 586),
(1, 587),
(1, 588),
(1, 589),
(1, 590),
(1, 591),
(1, 592),
(1, 593),
(1, 594),
(1, 595),
(1, 596),
(1, 597),
(1, 598),
(1, 599),
(1, 600),
(1, 601),
(1, 602),
(1, 603),
(1, 604),
(1, 605),
(1, 606),
(1, 607),
(1, 608),
(1, 609),
(1, 610),
(1, 611),
(1, 612),
(1, 613),
(1, 614),
(1, 615),
(1, 616),
(1, 617),
(1, 618),
(1, 619),
(1, 620),
(1, 621),
(1, 622),
(1, 623),
(1, 624),
(1, 625),
(1, 626),
(1, 627),
(1, 628),
(1, 629),
(1, 630),
(1, 631),
(1, 632),
(1, 633),
(1, 634),
(1, 635),
(1, 636),
(1, 637),
(1, 638),
(1, 639),
(1, 640),
(1, 641),
(1, 642),
(1, 643),
(1, 644),
(1, 645),
(1, 646),
(1, 647),
(1, 648),
(1, 649),
(1, 650),
(1, 651),
(1, 652),
(1, 653),
(1, 654),
(1, 655),
(1, 656),
(1, 657),
(1, 658),
(1, 659),
(1, 660),
(1, 661),
(1, 662),
(1, 663),
(1, 664),
(1, 665),
(1, 666),
(1, 667),
(1, 668),
(1, 669),
(1, 670),
(1, 671),
(1, 672),
(1, 673),
(1, 674),
(1, 675),
(1, 676),
(1, 677),
(1, 678),
(1, 679),
(1, 680),
(1, 681),
(1, 682),
(1, 683),
(1, 684),
(1, 685),
(1, 686),
(1, 687),
(1, 688),
(1, 689),
(1, 690),
(1, 691),
(1, 692),
(1, 693),
(1, 694),
(1, 695),
(1, 696),
(1, 697),
(1, 698),
(1, 699),
(1, 700),
(1, 701),
(1, 702),
(1, 703),
(1, 704),
(1, 705),
(1, 706),
(1, 707),
(1, 708),
(1, 709),
(1, 710),
(1, 711),
(1, 712),
(1, 713),
(1, 714),
(1, 715),
(1, 716),
(1, 717),
(1, 718),
(1, 719),
(1, 720),
(1, 721),
(1, 722),
(1, 723),
(1, 724),
(1, 725),
(1, 726),
(1, 727),
(1, 728),
(1, 729),
(1, 730),
(1, 731),
(1, 732),
(1, 733),
(1, 734),
(1, 735),
(1, 736),
(1, 737),
(1, 738);

-- --------------------------------------------------------

--
-- Table structure for table `registrovisitasusuario_visitasmes`
--

CREATE TABLE `registrovisitasusuario_visitasmes` (
  `registrovisitasusuario_id` int(11) NOT NULL,
  `visitasmes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrovisitasusuario_visitasmes`
--

INSERT INTO `registrovisitasusuario_visitasmes` (`registrovisitasusuario_id`, `visitasmes_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `registro_visitas_demanda`
--

CREATE TABLE `registro_visitas_demanda` (
  `id` int(11) NOT NULL,
  `demanda_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Tipo`
--

CREATE TABLE `Tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'adminuser', 'adminuser', 'pedro@correo.ugr.es', 'pedro@correo.ugr.es', 1, NULL, '$2y$13$RLrMHcOQ/Ri5kfS5lzPEJegexgFjIEmTXx8zHk4dZtLY3EICV9fsO', '2017-08-13 22:53:52', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}');

-- --------------------------------------------------------

--
-- Table structure for table `VisitasAnio`
--

CREATE TABLE `VisitasAnio` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `VisitasAnio`
--

INSERT INTO `VisitasAnio` (`id`, `anio`, `visitas`) VALUES
(1, 2017, 630),
(2, 2018, 1639),
(3, 2019, 1052),
(4, 2017, 47),
(5, 2018, 122),
(6, 2019, 98),
(7, 2017, 47),
(8, 2018, 122),
(9, 2019, 98),
(10, 2017, 47),
(11, 2018, 122),
(12, 2019, 98),
(13, 2017, 47),
(14, 2018, 122),
(15, 2019, 98);

-- --------------------------------------------------------

--
-- Table structure for table `VisitasDia`
--

CREATE TABLE `VisitasDia` (
  `id` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `visitasMes_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `VisitasDia`
--

INSERT INTO `VisitasDia` (`id`, `dia`, `visitas`, `visitasMes_id`) VALUES
(1, 14, 1, 1),
(2, 16, 1, 1),
(3, 18, 1, 1),
(4, 20, 1, 1),
(5, 22, 1, 1),
(6, 24, 1, 1),
(7, 26, 1, 1),
(8, 28, 1, 1),
(9, 30, 1, 1),
(10, 1, 1, 2),
(11, 3, 1, 2),
(12, 5, 1, 2),
(13, 7, 1, 2),
(14, 9, 1, 2),
(15, 11, 1, 2),
(16, 13, 1, 2),
(17, 15, 1, 2),
(18, 17, 1, 2),
(19, 19, 1, 2),
(20, 21, 1, 2),
(21, 23, 1, 2),
(22, 25, 1, 2),
(23, 27, 1, 2),
(24, 29, 1, 2),
(25, 1, 1, 3),
(26, 3, 1, 3),
(27, 5, 1, 3),
(28, 7, 1, 3),
(29, 9, 1, 3),
(30, 11, 1, 3),
(31, 13, 1, 3),
(32, 15, 1, 3),
(33, 17, 1, 3),
(34, 19, 1, 3),
(35, 21, 1, 3),
(36, 23, 1, 3),
(37, 25, 1, 3),
(38, 27, 1, 3),
(39, 29, 1, 3),
(40, 31, 1, 3),
(41, 2, 1, 4),
(42, 4, 1, 4),
(43, 6, 1, 4),
(44, 8, 1, 4),
(45, 10, 1, 4),
(46, 12, 1, 4),
(47, 14, 1, 4),
(48, 16, 1, 4),
(49, 18, 1, 4),
(50, 20, 1, 4),
(51, 22, 1, 4),
(52, 24, 1, 4),
(53, 26, 1, 4),
(54, 28, 1, 4),
(55, 30, 1, 4),
(56, 2, 1, 5),
(57, 4, 1, 5),
(58, 6, 1, 5),
(59, 8, 1, 5),
(60, 10, 1, 5),
(61, 12, 1, 5),
(62, 14, 1, 5),
(63, 16, 1, 5),
(64, 18, 1, 5),
(65, 20, 1, 5),
(66, 22, 1, 5),
(67, 24, 1, 5),
(68, 26, 1, 5),
(69, 28, 1, 5),
(70, 30, 1, 5),
(71, 1, 1, 6),
(72, 3, 1, 6),
(73, 5, 1, 6),
(74, 7, 1, 6),
(75, 9, 1, 6),
(76, 11, 1, 6),
(77, 13, 1, 6),
(78, 15, 1, 6),
(79, 17, 1, 6),
(80, 19, 1, 6),
(81, 21, 1, 6),
(82, 23, 1, 6),
(83, 25, 1, 6),
(84, 27, 1, 6),
(85, 29, 1, 6),
(86, 31, 1, 6),
(87, 2, 1, 7),
(88, 4, 1, 7),
(89, 6, 1, 7),
(90, 8, 1, 7),
(91, 10, 1, 7),
(92, 12, 1, 7),
(93, 14, 1, 7),
(94, 16, 1, 7),
(95, 18, 1, 7),
(96, 20, 1, 7),
(97, 22, 1, 7),
(98, 24, 1, 7),
(99, 26, 1, 7),
(100, 28, 1, 7),
(101, 2, 1, 8),
(102, 4, 1, 8),
(103, 6, 1, 8),
(104, 8, 1, 8),
(105, 10, 1, 8),
(106, 12, 1, 8),
(107, 14, 1, 8),
(108, 16, 1, 8),
(109, 18, 1, 8),
(110, 20, 1, 8),
(111, 22, 1, 8),
(112, 24, 1, 8),
(113, 26, 1, 8),
(114, 28, 1, 8),
(115, 30, 1, 8),
(116, 1, 1, 9),
(117, 3, 1, 9),
(118, 5, 1, 9),
(119, 7, 1, 9),
(120, 9, 1, 9),
(121, 11, 1, 9),
(122, 13, 1, 9),
(123, 15, 1, 9),
(124, 17, 1, 9),
(125, 19, 1, 9),
(126, 21, 1, 9),
(127, 23, 1, 9),
(128, 25, 1, 9),
(129, 27, 1, 9),
(130, 29, 1, 9),
(131, 1, 1, 10),
(132, 3, 1, 10),
(133, 5, 1, 10),
(134, 7, 1, 10),
(135, 9, 1, 10),
(136, 11, 1, 10),
(137, 13, 1, 10),
(138, 15, 1, 10),
(139, 17, 1, 10),
(140, 19, 1, 10),
(141, 21, 1, 10),
(142, 23, 1, 10),
(143, 25, 1, 10),
(144, 27, 1, 10),
(145, 29, 1, 10),
(146, 31, 1, 10),
(147, 2, 1, 11),
(148, 4, 1, 11),
(149, 6, 1, 11),
(150, 8, 1, 11),
(151, 10, 1, 11),
(152, 12, 1, 11),
(153, 14, 1, 11),
(154, 16, 1, 11),
(155, 18, 1, 11),
(156, 20, 1, 11),
(157, 22, 1, 11),
(158, 24, 1, 11),
(159, 26, 1, 11),
(160, 28, 1, 11),
(161, 30, 1, 11),
(162, 2, 1, 12),
(163, 4, 1, 12),
(164, 6, 1, 12),
(165, 8, 1, 12),
(166, 10, 1, 12),
(167, 12, 1, 12),
(168, 14, 1, 12),
(169, 16, 1, 12),
(170, 18, 1, 12),
(171, 20, 1, 12),
(172, 22, 1, 12),
(173, 24, 1, 12),
(174, 26, 1, 12),
(175, 28, 1, 12),
(176, 30, 1, 12),
(177, 1, 1, 13),
(178, 3, 1, 13),
(179, 5, 1, 13),
(180, 7, 1, 13),
(181, 9, 1, 13),
(182, 11, 1, 13),
(183, 13, 1, 13),
(184, 15, 1, 13),
(185, 17, 1, 13),
(186, 19, 1, 13),
(187, 21, 1, 13),
(188, 23, 1, 13),
(189, 25, 1, 13),
(190, 27, 1, 13),
(191, 29, 1, 13),
(192, 31, 1, 13),
(193, 2, 1, 14),
(194, 4, 1, 14),
(195, 6, 1, 14),
(196, 8, 1, 14),
(197, 10, 1, 14),
(198, 12, 1, 14),
(199, 14, 1, 14),
(200, 16, 1, 14),
(201, 18, 1, 14),
(202, 20, 1, 14),
(203, 22, 1, 14),
(204, 24, 1, 14),
(205, 26, 1, 14),
(206, 28, 1, 14),
(207, 30, 1, 14),
(208, 2, 1, 15),
(209, 4, 1, 15),
(210, 6, 1, 15),
(211, 8, 1, 15),
(212, 10, 1, 15),
(213, 12, 1, 15),
(214, 14, 1, 15),
(215, 16, 1, 15),
(216, 18, 1, 15),
(217, 20, 1, 15),
(218, 22, 1, 15),
(219, 24, 1, 15),
(220, 26, 1, 15),
(221, 28, 1, 15),
(222, 30, 1, 15),
(223, 1, 1, 16),
(224, 3, 1, 16),
(225, 5, 1, 16),
(226, 7, 1, 16),
(227, 9, 1, 16),
(228, 11, 1, 16),
(229, 13, 1, 16),
(230, 15, 1, 16),
(231, 17, 1, 16),
(232, 19, 1, 16),
(233, 21, 1, 16),
(234, 23, 1, 16),
(235, 25, 1, 16),
(236, 27, 1, 16),
(237, 29, 1, 16),
(238, 1, 1, 17),
(239, 3, 1, 17),
(240, 5, 1, 17),
(241, 7, 1, 17),
(242, 9, 1, 17),
(243, 11, 1, 17),
(244, 13, 1, 17),
(245, 15, 1, 17),
(246, 17, 1, 17),
(247, 19, 1, 17),
(248, 21, 1, 17),
(249, 23, 1, 17),
(250, 25, 1, 17),
(251, 27, 1, 17),
(252, 29, 1, 17),
(253, 31, 1, 17),
(254, 2, 1, 18),
(255, 4, 1, 18),
(256, 6, 1, 18),
(257, 8, 1, 18),
(258, 10, 1, 18),
(259, 12, 1, 18),
(260, 14, 1, 18),
(261, 16, 1, 18),
(262, 18, 1, 18),
(263, 20, 1, 18),
(264, 22, 1, 18),
(265, 24, 1, 18),
(266, 26, 1, 18),
(267, 28, 1, 18),
(268, 30, 1, 18),
(269, 1, 1, 19),
(270, 3, 1, 19),
(271, 5, 1, 19),
(272, 7, 1, 19),
(273, 9, 1, 19),
(274, 11, 1, 19),
(275, 13, 1, 19),
(276, 15, 1, 19),
(277, 17, 1, 19),
(278, 19, 1, 19),
(279, 21, 1, 19),
(280, 23, 1, 19),
(281, 25, 1, 19),
(282, 27, 1, 19),
(283, 1, 1, 20),
(284, 3, 1, 20),
(285, 5, 1, 20),
(286, 7, 1, 20),
(287, 9, 1, 20),
(288, 11, 1, 20),
(289, 13, 1, 20),
(290, 15, 1, 20),
(291, 17, 1, 20),
(292, 19, 1, 20),
(293, 21, 1, 20),
(294, 23, 1, 20),
(295, 25, 1, 20),
(296, 27, 1, 20),
(297, 29, 1, 20),
(298, 31, 1, 20),
(299, 2, 1, 21),
(300, 4, 1, 21),
(301, 6, 1, 21),
(302, 8, 1, 21),
(303, 10, 1, 21),
(304, 12, 1, 21),
(305, 14, 1, 21),
(306, 16, 1, 21),
(307, 18, 1, 21),
(308, 20, 1, 21),
(309, 22, 1, 21),
(310, 24, 1, 21),
(311, 26, 1, 21),
(312, 28, 1, 21),
(313, 30, 1, 21),
(314, 2, 1, 22),
(315, 4, 1, 22),
(316, 6, 1, 22),
(317, 8, 1, 22),
(318, 10, 1, 22),
(319, 12, 1, 22),
(320, 14, 1, 22),
(321, 16, 1, 22),
(322, 18, 1, 22),
(323, 20, 1, 22),
(324, 22, 1, 22),
(325, 24, 1, 22),
(326, 26, 1, 22),
(327, 28, 1, 22),
(328, 30, 1, 22),
(329, 1, 1, 23),
(330, 3, 1, 23),
(331, 5, 1, 23),
(332, 7, 1, 23),
(333, 9, 1, 23),
(334, 11, 1, 23),
(335, 13, 1, 23),
(336, 15, 1, 23),
(337, 17, 1, 23),
(338, 19, 1, 23),
(339, 21, 1, 23),
(340, 23, 1, 23),
(341, 25, 1, 23),
(342, 27, 1, 23),
(343, 29, 1, 23),
(344, 1, 1, 24),
(345, 3, 1, 24),
(346, 5, 1, 24),
(347, 7, 1, 24),
(348, 9, 1, 24),
(349, 11, 1, 24),
(350, 13, 1, 24),
(351, 15, 1, 24),
(352, 17, 1, 24),
(353, 19, 1, 24),
(354, 21, 1, 24),
(355, 23, 1, 24),
(356, 25, 1, 24),
(357, 27, 1, 24),
(358, 29, 1, 24),
(359, 31, 1, 24),
(360, 2, 1, 25),
(361, 4, 1, 25),
(362, 6, 1, 25),
(363, 8, 1, 25),
(364, 10, 1, 25),
(365, 12, 1, 25),
(366, 14, 1, 25),
(367, 16, 1, 25),
(368, 18, 1, 25),
(369, 20, 1, 25),
(370, 15, 8, 1),
(371, 17, 8, 1),
(372, 19, 8, 1),
(373, 21, 8, 1),
(374, 23, 8, 1),
(375, 25, 8, 1),
(376, 27, 8, 1),
(377, 29, 8, 1),
(378, 31, 8, 1),
(379, 2, 8, 2),
(380, 4, 8, 2),
(381, 6, 8, 2),
(382, 8, 8, 2),
(383, 10, 8, 2),
(384, 12, 8, 2),
(385, 14, 8, 2),
(386, 16, 8, 2),
(387, 18, 8, 2),
(388, 20, 8, 2),
(389, 22, 8, 2),
(390, 24, 8, 2),
(391, 26, 8, 2),
(392, 28, 8, 2),
(393, 30, 8, 2),
(394, 2, 8, 3),
(395, 4, 8, 3),
(396, 6, 8, 3),
(397, 8, 8, 3),
(398, 10, 8, 3),
(399, 12, 8, 3),
(400, 14, 8, 3),
(401, 16, 8, 3),
(402, 18, 8, 3),
(403, 20, 8, 3),
(404, 22, 8, 3),
(405, 24, 8, 3),
(406, 26, 8, 3),
(407, 28, 8, 3),
(408, 30, 8, 3),
(409, 1, 8, 4),
(410, 3, 8, 4),
(411, 5, 8, 4),
(412, 7, 8, 4),
(413, 9, 8, 4),
(414, 11, 8, 4),
(415, 13, 8, 4),
(416, 15, 8, 4),
(417, 17, 8, 4),
(418, 19, 8, 4),
(419, 21, 8, 4),
(420, 23, 8, 4),
(421, 25, 8, 4),
(422, 27, 8, 4),
(423, 29, 8, 4),
(424, 1, 8, 5),
(425, 3, 8, 5),
(426, 5, 8, 5),
(427, 7, 8, 5),
(428, 9, 8, 5),
(429, 11, 8, 5),
(430, 13, 8, 5),
(431, 15, 8, 5),
(432, 17, 8, 5),
(433, 19, 8, 5),
(434, 21, 8, 5),
(435, 23, 8, 5),
(436, 25, 8, 5),
(437, 27, 8, 5),
(438, 29, 8, 5),
(439, 31, 8, 5),
(440, 2, 8, 6),
(441, 4, 8, 6),
(442, 6, 8, 6),
(443, 8, 8, 6),
(444, 10, 8, 6),
(445, 12, 8, 6),
(446, 14, 8, 6),
(447, 16, 8, 6),
(448, 18, 8, 6),
(449, 20, 8, 6),
(450, 22, 8, 6),
(451, 24, 8, 6),
(452, 26, 8, 6),
(453, 28, 8, 6),
(454, 30, 8, 6),
(455, 1, 8, 7),
(456, 3, 8, 7),
(457, 5, 8, 7),
(458, 7, 8, 7),
(459, 9, 8, 7),
(460, 11, 8, 7),
(461, 13, 8, 7),
(462, 15, 8, 7),
(463, 17, 8, 7),
(464, 19, 8, 7),
(465, 21, 8, 7),
(466, 23, 8, 7),
(467, 25, 8, 7),
(468, 27, 8, 7),
(469, 1, 8, 8),
(470, 3, 8, 8),
(471, 5, 8, 8),
(472, 7, 8, 8),
(473, 9, 8, 8),
(474, 11, 8, 8),
(475, 13, 8, 8),
(476, 15, 8, 8),
(477, 17, 8, 8),
(478, 19, 8, 8),
(479, 21, 8, 8),
(480, 23, 8, 8),
(481, 25, 8, 8),
(482, 27, 8, 8),
(483, 29, 8, 8),
(484, 31, 8, 8),
(485, 2, 8, 9),
(486, 4, 8, 9),
(487, 6, 8, 9),
(488, 8, 8, 9),
(489, 10, 8, 9),
(490, 12, 8, 9),
(491, 14, 8, 9),
(492, 16, 8, 9),
(493, 18, 8, 9),
(494, 20, 8, 9),
(495, 22, 8, 9),
(496, 24, 8, 9),
(497, 26, 8, 9),
(498, 28, 8, 9),
(499, 30, 8, 9),
(500, 2, 8, 10),
(501, 4, 8, 10),
(502, 6, 8, 10),
(503, 8, 8, 10),
(504, 10, 8, 10),
(505, 12, 8, 10),
(506, 14, 8, 10),
(507, 16, 8, 10),
(508, 18, 8, 10),
(509, 20, 8, 10),
(510, 22, 8, 10),
(511, 24, 8, 10),
(512, 26, 8, 10),
(513, 28, 8, 10),
(514, 30, 8, 10),
(515, 1, 8, 11),
(516, 3, 8, 11),
(517, 5, 8, 11),
(518, 7, 8, 11),
(519, 9, 8, 11),
(520, 11, 8, 11),
(521, 13, 8, 11),
(522, 15, 8, 11),
(523, 17, 8, 11),
(524, 19, 8, 11),
(525, 21, 8, 11),
(526, 23, 8, 11),
(527, 25, 8, 11),
(528, 27, 8, 11),
(529, 29, 8, 11),
(530, 1, 8, 12),
(531, 3, 8, 12),
(532, 5, 8, 12),
(533, 7, 8, 12),
(534, 9, 8, 12),
(535, 11, 8, 12),
(536, 13, 8, 12),
(537, 15, 8, 12),
(538, 17, 8, 12),
(539, 19, 8, 12),
(540, 21, 8, 12),
(541, 23, 8, 12),
(542, 25, 8, 12),
(543, 27, 8, 12),
(544, 29, 8, 12),
(545, 31, 8, 12),
(546, 2, 8, 13),
(547, 4, 8, 13),
(548, 6, 8, 13),
(549, 8, 8, 13),
(550, 10, 8, 13),
(551, 12, 8, 13),
(552, 14, 8, 13),
(553, 16, 8, 13),
(554, 18, 8, 13),
(555, 20, 8, 13),
(556, 22, 8, 13),
(557, 24, 8, 13),
(558, 26, 8, 13),
(559, 28, 8, 13),
(560, 30, 8, 13),
(561, 1, 8, 14),
(562, 3, 8, 14),
(563, 5, 8, 14),
(564, 7, 8, 14),
(565, 9, 8, 14),
(566, 11, 8, 14),
(567, 13, 8, 14),
(568, 15, 8, 14),
(569, 17, 8, 14),
(570, 19, 8, 14),
(571, 21, 8, 14),
(572, 23, 8, 14),
(573, 25, 8, 14),
(574, 27, 8, 14),
(575, 29, 8, 14),
(576, 1, 8, 15),
(577, 3, 8, 15),
(578, 5, 8, 15),
(579, 7, 8, 15),
(580, 9, 8, 15),
(581, 11, 8, 15),
(582, 13, 8, 15),
(583, 15, 8, 15),
(584, 17, 8, 15),
(585, 19, 8, 15),
(586, 21, 8, 15),
(587, 23, 8, 15),
(588, 25, 8, 15),
(589, 27, 8, 15),
(590, 29, 8, 15),
(591, 31, 8, 15),
(592, 2, 8, 16),
(593, 4, 8, 16),
(594, 6, 8, 16),
(595, 8, 8, 16),
(596, 10, 8, 16),
(597, 12, 8, 16),
(598, 14, 8, 16),
(599, 16, 8, 16),
(600, 18, 8, 16),
(601, 20, 8, 16),
(602, 22, 8, 16),
(603, 24, 8, 16),
(604, 26, 8, 16),
(605, 28, 8, 16),
(606, 30, 8, 16),
(607, 2, 8, 17),
(608, 4, 8, 17),
(609, 6, 8, 17),
(610, 8, 8, 17),
(611, 10, 8, 17),
(612, 12, 8, 17),
(613, 14, 8, 17),
(614, 16, 8, 17),
(615, 18, 8, 17),
(616, 20, 8, 17),
(617, 22, 8, 17),
(618, 24, 8, 17),
(619, 26, 8, 17),
(620, 28, 8, 17),
(621, 30, 8, 17),
(622, 1, 8, 18),
(623, 3, 8, 18),
(624, 5, 8, 18),
(625, 7, 8, 18),
(626, 9, 8, 18),
(627, 11, 8, 18),
(628, 13, 8, 18),
(629, 15, 8, 18),
(630, 17, 8, 18),
(631, 19, 8, 18),
(632, 21, 8, 18),
(633, 23, 8, 18),
(634, 25, 8, 18),
(635, 27, 8, 18),
(636, 29, 8, 18),
(637, 31, 8, 18),
(638, 2, 8, 19),
(639, 4, 8, 19),
(640, 6, 8, 19),
(641, 8, 8, 19),
(642, 10, 8, 19),
(643, 12, 8, 19),
(644, 14, 8, 19),
(645, 16, 8, 19),
(646, 18, 8, 19),
(647, 20, 8, 19),
(648, 22, 8, 19),
(649, 24, 8, 19),
(650, 26, 8, 19),
(651, 28, 8, 19),
(652, 2, 8, 20),
(653, 4, 8, 20),
(654, 6, 8, 20),
(655, 8, 8, 20),
(656, 10, 8, 20),
(657, 12, 8, 20),
(658, 14, 8, 20),
(659, 16, 8, 20),
(660, 18, 8, 20),
(661, 20, 8, 20),
(662, 22, 8, 20),
(663, 24, 8, 20),
(664, 26, 8, 20),
(665, 28, 8, 20),
(666, 30, 8, 20),
(667, 1, 8, 21),
(668, 3, 8, 21),
(669, 5, 8, 21),
(670, 7, 8, 21),
(671, 9, 8, 21),
(672, 11, 8, 21),
(673, 13, 8, 21),
(674, 15, 8, 21),
(675, 17, 8, 21),
(676, 19, 8, 21),
(677, 21, 8, 21),
(678, 23, 8, 21),
(679, 25, 8, 21),
(680, 27, 8, 21),
(681, 29, 8, 21),
(682, 1, 8, 22),
(683, 3, 8, 22),
(684, 5, 8, 22),
(685, 7, 8, 22),
(686, 9, 8, 22),
(687, 11, 8, 22),
(688, 13, 8, 22),
(689, 15, 8, 22),
(690, 17, 8, 22),
(691, 19, 8, 22),
(692, 21, 8, 22),
(693, 23, 8, 22),
(694, 25, 8, 22),
(695, 27, 8, 22),
(696, 29, 8, 22),
(697, 31, 8, 22),
(698, 2, 8, 23),
(699, 4, 8, 23),
(700, 6, 8, 23),
(701, 8, 8, 23),
(702, 10, 8, 23),
(703, 12, 8, 23),
(704, 14, 8, 23),
(705, 16, 8, 23),
(706, 18, 8, 23),
(707, 20, 8, 23),
(708, 22, 8, 23),
(709, 24, 8, 23),
(710, 26, 8, 23),
(711, 28, 8, 23),
(712, 30, 8, 23),
(713, 2, 8, 24),
(714, 4, 8, 24),
(715, 6, 8, 24),
(716, 8, 8, 24),
(717, 10, 8, 24),
(718, 12, 8, 24),
(719, 14, 8, 24),
(720, 16, 8, 24),
(721, 18, 8, 24),
(722, 20, 8, 24),
(723, 22, 8, 24),
(724, 24, 8, 24),
(725, 26, 8, 24),
(726, 28, 8, 24),
(727, 30, 8, 24),
(728, 1, 8, 25),
(729, 3, 8, 25),
(730, 5, 8, 25),
(731, 7, 8, 25),
(732, 9, 8, 25),
(733, 11, 8, 25),
(734, 13, 8, 25),
(735, 15, 8, 25),
(736, 17, 8, 25),
(737, 19, 8, 25),
(738, 21, 8, 25),
(739, 13, 1, 26),
(740, 16, 1, 26),
(741, 19, 1, 26),
(742, 22, 1, 26),
(743, 25, 1, 26),
(744, 28, 1, 26),
(745, 31, 1, 26),
(746, 3, 1, 27),
(747, 6, 1, 27),
(748, 9, 1, 27),
(749, 12, 1, 27),
(750, 15, 1, 27),
(751, 18, 1, 27),
(752, 21, 1, 27),
(753, 24, 1, 27),
(754, 27, 1, 27),
(755, 30, 1, 27),
(756, 3, 1, 28),
(757, 6, 1, 28),
(758, 9, 1, 28),
(759, 12, 1, 28),
(760, 15, 1, 28),
(761, 18, 1, 28),
(762, 21, 1, 28),
(763, 24, 1, 28),
(764, 27, 1, 28),
(765, 30, 1, 28),
(766, 2, 1, 29),
(767, 5, 1, 29),
(768, 8, 1, 29),
(769, 11, 1, 29),
(770, 14, 1, 29),
(771, 17, 1, 29),
(772, 20, 1, 29),
(773, 23, 1, 29),
(774, 26, 1, 29),
(775, 29, 1, 29),
(776, 2, 1, 30),
(777, 5, 1, 30),
(778, 8, 1, 30),
(779, 11, 1, 30),
(780, 14, 1, 30),
(781, 17, 1, 30),
(782, 20, 1, 30),
(783, 23, 1, 30),
(784, 26, 1, 30),
(785, 29, 1, 30),
(786, 1, 1, 31),
(787, 4, 1, 31),
(788, 7, 1, 31),
(789, 10, 1, 31),
(790, 13, 1, 31),
(791, 16, 1, 31),
(792, 19, 1, 31),
(793, 22, 1, 31),
(794, 25, 1, 31),
(795, 28, 1, 31),
(796, 31, 1, 31),
(797, 3, 1, 32),
(798, 6, 1, 32),
(799, 9, 1, 32),
(800, 12, 1, 32),
(801, 15, 1, 32),
(802, 18, 1, 32),
(803, 21, 1, 32),
(804, 24, 1, 32),
(805, 27, 1, 32),
(806, 2, 1, 33),
(807, 5, 1, 33),
(808, 8, 1, 33),
(809, 11, 1, 33),
(810, 14, 1, 33),
(811, 17, 1, 33),
(812, 20, 1, 33),
(813, 23, 1, 33),
(814, 26, 1, 33),
(815, 29, 1, 33),
(816, 1, 1, 34),
(817, 4, 1, 34),
(818, 7, 1, 34),
(819, 10, 1, 34),
(820, 13, 1, 34),
(821, 16, 1, 34),
(822, 19, 1, 34),
(823, 22, 1, 34),
(824, 25, 1, 34),
(825, 28, 1, 34),
(826, 1, 1, 35),
(827, 4, 1, 35),
(828, 7, 1, 35),
(829, 10, 1, 35),
(830, 13, 1, 35),
(831, 16, 1, 35),
(832, 19, 1, 35),
(833, 22, 1, 35),
(834, 25, 1, 35),
(835, 28, 1, 35),
(836, 31, 1, 35),
(837, 3, 1, 36),
(838, 6, 1, 36),
(839, 9, 1, 36),
(840, 12, 1, 36),
(841, 15, 1, 36),
(842, 18, 1, 36),
(843, 21, 1, 36),
(844, 24, 1, 36),
(845, 27, 1, 36),
(846, 30, 1, 36),
(847, 3, 1, 37),
(848, 6, 1, 37),
(849, 9, 1, 37),
(850, 12, 1, 37),
(851, 15, 1, 37),
(852, 18, 1, 37),
(853, 21, 1, 37),
(854, 24, 1, 37),
(855, 27, 1, 37),
(856, 30, 1, 37),
(857, 2, 1, 38),
(858, 5, 1, 38),
(859, 8, 1, 38),
(860, 11, 1, 38),
(861, 14, 1, 38),
(862, 17, 1, 38),
(863, 20, 1, 38),
(864, 23, 1, 38),
(865, 26, 1, 38),
(866, 29, 1, 38),
(867, 1, 1, 39),
(868, 4, 1, 39),
(869, 7, 1, 39),
(870, 10, 1, 39),
(871, 13, 1, 39),
(872, 16, 1, 39),
(873, 19, 1, 39),
(874, 22, 1, 39),
(875, 25, 1, 39),
(876, 28, 1, 39),
(877, 1, 1, 40),
(878, 4, 1, 40),
(879, 7, 1, 40),
(880, 10, 1, 40),
(881, 13, 1, 40),
(882, 16, 1, 40),
(883, 19, 1, 40),
(884, 22, 1, 40),
(885, 25, 1, 40),
(886, 28, 1, 40),
(887, 31, 1, 40),
(888, 3, 1, 41),
(889, 6, 1, 41),
(890, 9, 1, 41),
(891, 12, 1, 41),
(892, 15, 1, 41),
(893, 18, 1, 41),
(894, 21, 1, 41),
(895, 24, 1, 41),
(896, 27, 1, 41),
(897, 30, 1, 41),
(898, 3, 1, 42),
(899, 6, 1, 42),
(900, 9, 1, 42),
(901, 12, 1, 42),
(902, 15, 1, 42),
(903, 18, 1, 42),
(904, 21, 1, 42),
(905, 24, 1, 42),
(906, 27, 1, 42),
(907, 30, 1, 42),
(908, 2, 1, 43),
(909, 5, 1, 43),
(910, 8, 1, 43),
(911, 11, 1, 43),
(912, 14, 1, 43),
(913, 17, 1, 43),
(914, 20, 1, 43),
(915, 23, 1, 43),
(916, 26, 1, 43),
(917, 29, 1, 43),
(918, 1, 1, 44),
(919, 4, 1, 44),
(920, 7, 1, 44),
(921, 10, 1, 44),
(922, 13, 1, 44),
(923, 16, 1, 44),
(924, 19, 1, 44),
(925, 22, 1, 44),
(926, 25, 1, 44),
(927, 28, 1, 44),
(928, 3, 1, 45),
(929, 6, 1, 45),
(930, 9, 1, 45),
(931, 12, 1, 45),
(932, 15, 1, 45),
(933, 18, 1, 45),
(934, 21, 1, 45),
(935, 24, 1, 45),
(936, 27, 1, 45),
(937, 30, 1, 45),
(938, 2, 1, 46),
(939, 5, 1, 46),
(940, 8, 1, 46),
(941, 11, 1, 46),
(942, 14, 1, 46),
(943, 17, 1, 46),
(944, 20, 1, 46),
(945, 23, 1, 46),
(946, 26, 1, 46),
(947, 29, 1, 46),
(948, 2, 1, 47),
(949, 5, 1, 47),
(950, 8, 1, 47),
(951, 11, 1, 47),
(952, 14, 1, 47),
(953, 17, 1, 47),
(954, 20, 1, 47),
(955, 23, 1, 47),
(956, 26, 1, 47),
(957, 29, 1, 47),
(958, 1, 1, 48),
(959, 4, 1, 48),
(960, 7, 1, 48),
(961, 10, 1, 48),
(962, 13, 1, 48),
(963, 16, 1, 48),
(964, 19, 1, 48),
(965, 22, 1, 48),
(966, 25, 1, 48),
(967, 28, 1, 48),
(968, 1, 1, 49),
(969, 4, 1, 49),
(970, 7, 1, 49),
(971, 10, 1, 49),
(972, 13, 1, 49),
(973, 16, 1, 49),
(974, 19, 1, 49),
(975, 22, 1, 49),
(976, 25, 1, 49),
(977, 28, 1, 49),
(978, 31, 1, 49),
(979, 3, 1, 50),
(980, 6, 1, 50),
(981, 9, 1, 50),
(982, 12, 1, 50),
(983, 15, 1, 50),
(984, 18, 1, 50),
(985, 21, 1, 50),
(986, 24, 1, 50),
(987, 27, 1, 50),
(988, 30, 1, 50),
(989, 2, 1, 51),
(990, 5, 1, 51),
(991, 8, 1, 51),
(992, 11, 1, 51),
(993, 14, 1, 51),
(994, 17, 1, 51),
(995, 20, 1, 51),
(996, 23, 1, 51),
(997, 26, 1, 51),
(998, 29, 1, 51),
(999, 2, 1, 52),
(1000, 5, 1, 52),
(1001, 8, 1, 52),
(1002, 11, 1, 52),
(1003, 14, 1, 52),
(1004, 17, 1, 52),
(1005, 20, 1, 52),
(1006, 13, 1, 53),
(1007, 16, 1, 53),
(1008, 19, 1, 53),
(1009, 22, 1, 53),
(1010, 25, 1, 53),
(1011, 28, 1, 53),
(1012, 31, 1, 53),
(1013, 3, 1, 54),
(1014, 6, 1, 54),
(1015, 9, 1, 54),
(1016, 12, 1, 54),
(1017, 15, 1, 54),
(1018, 18, 1, 54),
(1019, 21, 1, 54),
(1020, 24, 1, 54),
(1021, 27, 1, 54),
(1022, 30, 1, 54),
(1023, 3, 1, 55),
(1024, 6, 1, 55),
(1025, 9, 1, 55),
(1026, 12, 1, 55),
(1027, 15, 1, 55),
(1028, 18, 1, 55),
(1029, 21, 1, 55),
(1030, 24, 1, 55),
(1031, 27, 1, 55),
(1032, 30, 1, 55),
(1033, 2, 1, 56),
(1034, 5, 1, 56),
(1035, 8, 1, 56),
(1036, 11, 1, 56),
(1037, 14, 1, 56),
(1038, 17, 1, 56),
(1039, 20, 1, 56),
(1040, 23, 1, 56),
(1041, 26, 1, 56),
(1042, 29, 1, 56),
(1043, 2, 1, 57),
(1044, 5, 1, 57),
(1045, 8, 1, 57),
(1046, 11, 1, 57),
(1047, 14, 1, 57),
(1048, 17, 1, 57),
(1049, 20, 1, 57),
(1050, 23, 1, 57),
(1051, 26, 1, 57),
(1052, 29, 1, 57),
(1053, 1, 1, 58),
(1054, 4, 1, 58),
(1055, 7, 1, 58),
(1056, 10, 1, 58),
(1057, 13, 1, 58),
(1058, 16, 1, 58),
(1059, 19, 1, 58),
(1060, 22, 1, 58),
(1061, 25, 1, 58),
(1062, 28, 1, 58),
(1063, 31, 1, 58),
(1064, 3, 1, 59),
(1065, 6, 1, 59),
(1066, 9, 1, 59),
(1067, 12, 1, 59),
(1068, 15, 1, 59),
(1069, 18, 1, 59),
(1070, 21, 1, 59),
(1071, 24, 1, 59),
(1072, 27, 1, 59),
(1073, 2, 1, 60),
(1074, 5, 1, 60),
(1075, 8, 1, 60),
(1076, 11, 1, 60),
(1077, 14, 1, 60),
(1078, 17, 1, 60),
(1079, 20, 1, 60),
(1080, 23, 1, 60),
(1081, 26, 1, 60),
(1082, 29, 1, 60),
(1083, 1, 1, 61),
(1084, 4, 1, 61),
(1085, 7, 1, 61),
(1086, 10, 1, 61),
(1087, 13, 1, 61),
(1088, 16, 1, 61),
(1089, 19, 1, 61),
(1090, 22, 1, 61),
(1091, 25, 1, 61),
(1092, 28, 1, 61),
(1093, 1, 1, 62),
(1094, 4, 1, 62),
(1095, 7, 1, 62),
(1096, 10, 1, 62),
(1097, 13, 1, 62),
(1098, 16, 1, 62),
(1099, 19, 1, 62),
(1100, 22, 1, 62),
(1101, 25, 1, 62),
(1102, 28, 1, 62),
(1103, 31, 1, 62),
(1104, 3, 1, 63),
(1105, 6, 1, 63),
(1106, 9, 1, 63),
(1107, 12, 1, 63),
(1108, 15, 1, 63),
(1109, 18, 1, 63),
(1110, 21, 1, 63),
(1111, 24, 1, 63),
(1112, 27, 1, 63),
(1113, 30, 1, 63),
(1114, 3, 1, 64),
(1115, 6, 1, 64),
(1116, 9, 1, 64),
(1117, 12, 1, 64),
(1118, 15, 1, 64),
(1119, 18, 1, 64),
(1120, 21, 1, 64),
(1121, 24, 1, 64),
(1122, 27, 1, 64),
(1123, 30, 1, 64),
(1124, 2, 1, 65),
(1125, 5, 1, 65),
(1126, 8, 1, 65),
(1127, 11, 1, 65),
(1128, 14, 1, 65),
(1129, 17, 1, 65),
(1130, 20, 1, 65),
(1131, 23, 1, 65),
(1132, 26, 1, 65),
(1133, 29, 1, 65),
(1134, 1, 1, 66),
(1135, 4, 1, 66),
(1136, 7, 1, 66),
(1137, 10, 1, 66),
(1138, 13, 1, 66),
(1139, 16, 1, 66),
(1140, 19, 1, 66),
(1141, 22, 1, 66),
(1142, 25, 1, 66),
(1143, 28, 1, 66),
(1144, 1, 1, 67),
(1145, 4, 1, 67),
(1146, 7, 1, 67),
(1147, 10, 1, 67),
(1148, 13, 1, 67),
(1149, 16, 1, 67),
(1150, 19, 1, 67),
(1151, 22, 1, 67),
(1152, 25, 1, 67),
(1153, 28, 1, 67),
(1154, 31, 1, 67),
(1155, 3, 1, 68),
(1156, 6, 1, 68),
(1157, 9, 1, 68),
(1158, 12, 1, 68),
(1159, 15, 1, 68),
(1160, 18, 1, 68),
(1161, 21, 1, 68),
(1162, 24, 1, 68),
(1163, 27, 1, 68),
(1164, 30, 1, 68),
(1165, 3, 1, 69),
(1166, 6, 1, 69),
(1167, 9, 1, 69),
(1168, 12, 1, 69),
(1169, 15, 1, 69),
(1170, 18, 1, 69),
(1171, 21, 1, 69),
(1172, 24, 1, 69),
(1173, 27, 1, 69),
(1174, 30, 1, 69),
(1175, 2, 1, 70),
(1176, 5, 1, 70),
(1177, 8, 1, 70),
(1178, 11, 1, 70),
(1179, 14, 1, 70),
(1180, 17, 1, 70),
(1181, 20, 1, 70),
(1182, 23, 1, 70),
(1183, 26, 1, 70),
(1184, 29, 1, 70),
(1185, 1, 1, 71),
(1186, 4, 1, 71),
(1187, 7, 1, 71),
(1188, 10, 1, 71),
(1189, 13, 1, 71),
(1190, 16, 1, 71),
(1191, 19, 1, 71),
(1192, 22, 1, 71),
(1193, 25, 1, 71),
(1194, 28, 1, 71),
(1195, 3, 1, 72),
(1196, 6, 1, 72),
(1197, 9, 1, 72),
(1198, 12, 1, 72),
(1199, 15, 1, 72),
(1200, 18, 1, 72),
(1201, 21, 1, 72),
(1202, 24, 1, 72),
(1203, 27, 1, 72),
(1204, 30, 1, 72),
(1205, 2, 1, 73),
(1206, 5, 1, 73),
(1207, 8, 1, 73),
(1208, 11, 1, 73),
(1209, 14, 1, 73),
(1210, 17, 1, 73),
(1211, 20, 1, 73),
(1212, 23, 1, 73),
(1213, 26, 1, 73),
(1214, 29, 1, 73),
(1215, 2, 1, 74),
(1216, 5, 1, 74),
(1217, 8, 1, 74),
(1218, 11, 1, 74),
(1219, 14, 1, 74),
(1220, 17, 1, 74),
(1221, 20, 1, 74),
(1222, 23, 1, 74),
(1223, 26, 1, 74),
(1224, 29, 1, 74),
(1225, 1, 1, 75),
(1226, 4, 1, 75),
(1227, 7, 1, 75),
(1228, 10, 1, 75),
(1229, 13, 1, 75),
(1230, 16, 1, 75),
(1231, 19, 1, 75),
(1232, 22, 1, 75),
(1233, 25, 1, 75),
(1234, 28, 1, 75),
(1235, 1, 1, 76),
(1236, 4, 1, 76),
(1237, 7, 1, 76),
(1238, 10, 1, 76),
(1239, 13, 1, 76),
(1240, 16, 1, 76),
(1241, 19, 1, 76),
(1242, 22, 1, 76),
(1243, 25, 1, 76),
(1244, 28, 1, 76),
(1245, 31, 1, 76),
(1246, 3, 1, 77),
(1247, 6, 1, 77),
(1248, 9, 1, 77),
(1249, 12, 1, 77),
(1250, 15, 1, 77),
(1251, 18, 1, 77),
(1252, 21, 1, 77),
(1253, 24, 1, 77),
(1254, 27, 1, 77),
(1255, 30, 1, 77),
(1256, 2, 1, 78),
(1257, 5, 1, 78),
(1258, 8, 1, 78),
(1259, 11, 1, 78),
(1260, 14, 1, 78),
(1261, 17, 1, 78),
(1262, 20, 1, 78),
(1263, 23, 1, 78),
(1264, 26, 1, 78),
(1265, 29, 1, 78),
(1266, 2, 1, 79),
(1267, 5, 1, 79),
(1268, 8, 1, 79),
(1269, 11, 1, 79),
(1270, 14, 1, 79),
(1271, 17, 1, 79),
(1272, 20, 1, 79),
(1273, 13, 1, 80),
(1274, 16, 1, 80),
(1275, 19, 1, 80),
(1276, 22, 1, 80),
(1277, 25, 1, 80),
(1278, 28, 1, 80),
(1279, 31, 1, 80),
(1280, 3, 1, 81),
(1281, 6, 1, 81),
(1282, 9, 1, 81),
(1283, 12, 1, 81),
(1284, 15, 1, 81),
(1285, 18, 1, 81),
(1286, 21, 1, 81),
(1287, 24, 1, 81),
(1288, 27, 1, 81),
(1289, 30, 1, 81),
(1290, 3, 1, 82),
(1291, 6, 1, 82),
(1292, 9, 1, 82),
(1293, 12, 1, 82),
(1294, 15, 1, 82),
(1295, 18, 1, 82),
(1296, 21, 1, 82),
(1297, 24, 1, 82),
(1298, 27, 1, 82),
(1299, 30, 1, 82),
(1300, 2, 1, 83),
(1301, 5, 1, 83),
(1302, 8, 1, 83),
(1303, 11, 1, 83),
(1304, 14, 1, 83),
(1305, 17, 1, 83),
(1306, 20, 1, 83),
(1307, 23, 1, 83),
(1308, 26, 1, 83),
(1309, 29, 1, 83),
(1310, 2, 1, 84),
(1311, 5, 1, 84),
(1312, 8, 1, 84),
(1313, 11, 1, 84),
(1314, 14, 1, 84),
(1315, 17, 1, 84),
(1316, 20, 1, 84),
(1317, 23, 1, 84),
(1318, 26, 1, 84),
(1319, 29, 1, 84),
(1320, 1, 1, 85),
(1321, 4, 1, 85),
(1322, 7, 1, 85),
(1323, 10, 1, 85),
(1324, 13, 1, 85),
(1325, 16, 1, 85),
(1326, 19, 1, 85),
(1327, 22, 1, 85),
(1328, 25, 1, 85),
(1329, 28, 1, 85),
(1330, 31, 1, 85),
(1331, 3, 1, 86),
(1332, 6, 1, 86),
(1333, 9, 1, 86),
(1334, 12, 1, 86),
(1335, 15, 1, 86),
(1336, 18, 1, 86),
(1337, 21, 1, 86),
(1338, 24, 1, 86),
(1339, 27, 1, 86),
(1340, 2, 1, 87),
(1341, 5, 1, 87),
(1342, 8, 1, 87),
(1343, 11, 1, 87),
(1344, 14, 1, 87),
(1345, 17, 1, 87),
(1346, 20, 1, 87),
(1347, 23, 1, 87),
(1348, 26, 1, 87),
(1349, 29, 1, 87),
(1350, 1, 1, 88),
(1351, 4, 1, 88),
(1352, 7, 1, 88),
(1353, 10, 1, 88),
(1354, 13, 1, 88),
(1355, 16, 1, 88),
(1356, 19, 1, 88),
(1357, 22, 1, 88),
(1358, 25, 1, 88),
(1359, 28, 1, 88),
(1360, 1, 1, 89),
(1361, 4, 1, 89),
(1362, 7, 1, 89),
(1363, 10, 1, 89),
(1364, 13, 1, 89),
(1365, 16, 1, 89),
(1366, 19, 1, 89),
(1367, 22, 1, 89),
(1368, 25, 1, 89),
(1369, 28, 1, 89),
(1370, 31, 1, 89),
(1371, 3, 1, 90),
(1372, 6, 1, 90),
(1373, 9, 1, 90),
(1374, 12, 1, 90),
(1375, 15, 1, 90),
(1376, 18, 1, 90),
(1377, 21, 1, 90),
(1378, 24, 1, 90),
(1379, 27, 1, 90),
(1380, 30, 1, 90),
(1381, 3, 1, 91),
(1382, 6, 1, 91),
(1383, 9, 1, 91),
(1384, 12, 1, 91),
(1385, 15, 1, 91),
(1386, 18, 1, 91),
(1387, 21, 1, 91),
(1388, 24, 1, 91),
(1389, 27, 1, 91),
(1390, 30, 1, 91),
(1391, 2, 1, 92),
(1392, 5, 1, 92),
(1393, 8, 1, 92),
(1394, 11, 1, 92),
(1395, 14, 1, 92),
(1396, 17, 1, 92),
(1397, 20, 1, 92),
(1398, 23, 1, 92),
(1399, 26, 1, 92),
(1400, 29, 1, 92),
(1401, 1, 1, 93),
(1402, 4, 1, 93),
(1403, 7, 1, 93),
(1404, 10, 1, 93),
(1405, 13, 1, 93),
(1406, 16, 1, 93),
(1407, 19, 1, 93),
(1408, 22, 1, 93),
(1409, 25, 1, 93),
(1410, 28, 1, 93),
(1411, 1, 1, 94),
(1412, 4, 1, 94),
(1413, 7, 1, 94),
(1414, 10, 1, 94),
(1415, 13, 1, 94),
(1416, 16, 1, 94),
(1417, 19, 1, 94),
(1418, 22, 1, 94),
(1419, 25, 1, 94),
(1420, 28, 1, 94),
(1421, 31, 1, 94),
(1422, 3, 1, 95),
(1423, 6, 1, 95),
(1424, 9, 1, 95),
(1425, 12, 1, 95),
(1426, 15, 1, 95),
(1427, 18, 1, 95),
(1428, 21, 1, 95),
(1429, 24, 1, 95),
(1430, 27, 1, 95),
(1431, 30, 1, 95),
(1432, 3, 1, 96),
(1433, 6, 1, 96),
(1434, 9, 1, 96),
(1435, 12, 1, 96),
(1436, 15, 1, 96),
(1437, 18, 1, 96),
(1438, 21, 1, 96),
(1439, 24, 1, 96),
(1440, 27, 1, 96),
(1441, 30, 1, 96),
(1442, 2, 1, 97),
(1443, 5, 1, 97),
(1444, 8, 1, 97),
(1445, 11, 1, 97),
(1446, 14, 1, 97),
(1447, 17, 1, 97),
(1448, 20, 1, 97),
(1449, 23, 1, 97),
(1450, 26, 1, 97),
(1451, 29, 1, 97),
(1452, 1, 1, 98),
(1453, 4, 1, 98),
(1454, 7, 1, 98),
(1455, 10, 1, 98),
(1456, 13, 1, 98),
(1457, 16, 1, 98),
(1458, 19, 1, 98),
(1459, 22, 1, 98),
(1460, 25, 1, 98),
(1461, 28, 1, 98),
(1462, 3, 1, 99),
(1463, 6, 1, 99),
(1464, 9, 1, 99),
(1465, 12, 1, 99),
(1466, 15, 1, 99),
(1467, 18, 1, 99),
(1468, 21, 1, 99),
(1469, 24, 1, 99),
(1470, 27, 1, 99),
(1471, 30, 1, 99),
(1472, 2, 1, 100),
(1473, 5, 1, 100),
(1474, 8, 1, 100),
(1475, 11, 1, 100),
(1476, 14, 1, 100),
(1477, 17, 1, 100),
(1478, 20, 1, 100),
(1479, 23, 1, 100),
(1480, 26, 1, 100),
(1481, 29, 1, 100),
(1482, 2, 1, 101),
(1483, 5, 1, 101),
(1484, 8, 1, 101),
(1485, 11, 1, 101),
(1486, 14, 1, 101),
(1487, 17, 1, 101),
(1488, 20, 1, 101),
(1489, 23, 1, 101),
(1490, 26, 1, 101),
(1491, 29, 1, 101),
(1492, 1, 1, 102),
(1493, 4, 1, 102),
(1494, 7, 1, 102),
(1495, 10, 1, 102),
(1496, 13, 1, 102),
(1497, 16, 1, 102),
(1498, 19, 1, 102),
(1499, 22, 1, 102),
(1500, 25, 1, 102),
(1501, 28, 1, 102),
(1502, 1, 1, 103),
(1503, 4, 1, 103),
(1504, 7, 1, 103),
(1505, 10, 1, 103),
(1506, 13, 1, 103),
(1507, 16, 1, 103),
(1508, 19, 1, 103),
(1509, 22, 1, 103),
(1510, 25, 1, 103),
(1511, 28, 1, 103),
(1512, 31, 1, 103),
(1513, 3, 1, 104),
(1514, 6, 1, 104),
(1515, 9, 1, 104),
(1516, 12, 1, 104),
(1517, 15, 1, 104),
(1518, 18, 1, 104),
(1519, 21, 1, 104),
(1520, 24, 1, 104),
(1521, 27, 1, 104),
(1522, 30, 1, 104),
(1523, 2, 1, 105),
(1524, 5, 1, 105),
(1525, 8, 1, 105),
(1526, 11, 1, 105),
(1527, 14, 1, 105),
(1528, 17, 1, 105),
(1529, 20, 1, 105),
(1530, 23, 1, 105),
(1531, 26, 1, 105),
(1532, 29, 1, 105),
(1533, 2, 1, 106),
(1534, 5, 1, 106),
(1535, 8, 1, 106),
(1536, 11, 1, 106),
(1537, 14, 1, 106),
(1538, 17, 1, 106),
(1539, 20, 1, 106),
(1540, 13, 1, 107),
(1541, 16, 1, 107),
(1542, 19, 1, 107),
(1543, 22, 1, 107),
(1544, 25, 1, 107),
(1545, 28, 1, 107),
(1546, 31, 1, 107),
(1547, 3, 1, 108),
(1548, 6, 1, 108),
(1549, 9, 1, 108),
(1550, 12, 1, 108),
(1551, 15, 1, 108),
(1552, 18, 1, 108),
(1553, 21, 1, 108),
(1554, 24, 1, 108),
(1555, 27, 1, 108),
(1556, 30, 1, 108),
(1557, 3, 1, 109),
(1558, 6, 1, 109),
(1559, 9, 1, 109),
(1560, 12, 1, 109),
(1561, 15, 1, 109),
(1562, 18, 1, 109),
(1563, 21, 1, 109),
(1564, 24, 1, 109),
(1565, 27, 1, 109),
(1566, 30, 1, 109),
(1567, 2, 1, 110),
(1568, 5, 1, 110),
(1569, 8, 1, 110),
(1570, 11, 1, 110),
(1571, 14, 1, 110),
(1572, 17, 1, 110),
(1573, 20, 1, 110),
(1574, 23, 1, 110),
(1575, 26, 1, 110),
(1576, 29, 1, 110),
(1577, 2, 1, 111),
(1578, 5, 1, 111),
(1579, 8, 1, 111),
(1580, 11, 1, 111),
(1581, 14, 1, 111),
(1582, 17, 1, 111),
(1583, 20, 1, 111),
(1584, 23, 1, 111),
(1585, 26, 1, 111),
(1586, 29, 1, 111),
(1587, 1, 1, 112),
(1588, 4, 1, 112),
(1589, 7, 1, 112),
(1590, 10, 1, 112),
(1591, 13, 1, 112),
(1592, 16, 1, 112),
(1593, 19, 1, 112),
(1594, 22, 1, 112),
(1595, 25, 1, 112),
(1596, 28, 1, 112),
(1597, 31, 1, 112),
(1598, 3, 1, 113),
(1599, 6, 1, 113),
(1600, 9, 1, 113),
(1601, 12, 1, 113),
(1602, 15, 1, 113),
(1603, 18, 1, 113),
(1604, 21, 1, 113),
(1605, 24, 1, 113),
(1606, 27, 1, 113),
(1607, 2, 1, 114),
(1608, 5, 1, 114),
(1609, 8, 1, 114),
(1610, 11, 1, 114),
(1611, 14, 1, 114),
(1612, 17, 1, 114),
(1613, 20, 1, 114),
(1614, 23, 1, 114),
(1615, 26, 1, 114),
(1616, 29, 1, 114),
(1617, 1, 1, 115),
(1618, 4, 1, 115),
(1619, 7, 1, 115),
(1620, 10, 1, 115),
(1621, 13, 1, 115),
(1622, 16, 1, 115),
(1623, 19, 1, 115),
(1624, 22, 1, 115),
(1625, 25, 1, 115),
(1626, 28, 1, 115),
(1627, 1, 1, 116),
(1628, 4, 1, 116),
(1629, 7, 1, 116),
(1630, 10, 1, 116),
(1631, 13, 1, 116),
(1632, 16, 1, 116),
(1633, 19, 1, 116),
(1634, 22, 1, 116),
(1635, 25, 1, 116),
(1636, 28, 1, 116),
(1637, 31, 1, 116),
(1638, 3, 1, 117),
(1639, 6, 1, 117),
(1640, 9, 1, 117),
(1641, 12, 1, 117),
(1642, 15, 1, 117),
(1643, 18, 1, 117),
(1644, 21, 1, 117),
(1645, 24, 1, 117),
(1646, 27, 1, 117),
(1647, 30, 1, 117),
(1648, 3, 1, 118),
(1649, 6, 1, 118),
(1650, 9, 1, 118),
(1651, 12, 1, 118),
(1652, 15, 1, 118),
(1653, 18, 1, 118),
(1654, 21, 1, 118),
(1655, 24, 1, 118),
(1656, 27, 1, 118),
(1657, 30, 1, 118),
(1658, 2, 1, 119),
(1659, 5, 1, 119),
(1660, 8, 1, 119),
(1661, 11, 1, 119),
(1662, 14, 1, 119),
(1663, 17, 1, 119),
(1664, 20, 1, 119),
(1665, 23, 1, 119),
(1666, 26, 1, 119),
(1667, 29, 1, 119),
(1668, 1, 1, 120),
(1669, 4, 1, 120),
(1670, 7, 1, 120),
(1671, 10, 1, 120),
(1672, 13, 1, 120),
(1673, 16, 1, 120),
(1674, 19, 1, 120),
(1675, 22, 1, 120),
(1676, 25, 1, 120),
(1677, 28, 1, 120),
(1678, 1, 1, 121),
(1679, 4, 1, 121),
(1680, 7, 1, 121),
(1681, 10, 1, 121),
(1682, 13, 1, 121),
(1683, 16, 1, 121),
(1684, 19, 1, 121),
(1685, 22, 1, 121),
(1686, 25, 1, 121),
(1687, 28, 1, 121),
(1688, 31, 1, 121),
(1689, 3, 1, 122),
(1690, 6, 1, 122),
(1691, 9, 1, 122),
(1692, 12, 1, 122),
(1693, 15, 1, 122),
(1694, 18, 1, 122),
(1695, 21, 1, 122),
(1696, 24, 1, 122),
(1697, 27, 1, 122),
(1698, 30, 1, 122),
(1699, 3, 1, 123),
(1700, 6, 1, 123),
(1701, 9, 1, 123),
(1702, 12, 1, 123),
(1703, 15, 1, 123),
(1704, 18, 1, 123),
(1705, 21, 1, 123),
(1706, 24, 1, 123),
(1707, 27, 1, 123),
(1708, 30, 1, 123),
(1709, 2, 1, 124),
(1710, 5, 1, 124),
(1711, 8, 1, 124),
(1712, 11, 1, 124),
(1713, 14, 1, 124),
(1714, 17, 1, 124),
(1715, 20, 1, 124),
(1716, 23, 1, 124),
(1717, 26, 1, 124),
(1718, 29, 1, 124),
(1719, 1, 1, 125),
(1720, 4, 1, 125),
(1721, 7, 1, 125),
(1722, 10, 1, 125),
(1723, 13, 1, 125),
(1724, 16, 1, 125),
(1725, 19, 1, 125),
(1726, 22, 1, 125),
(1727, 25, 1, 125),
(1728, 28, 1, 125),
(1729, 3, 1, 126),
(1730, 6, 1, 126),
(1731, 9, 1, 126),
(1732, 12, 1, 126),
(1733, 15, 1, 126),
(1734, 18, 1, 126),
(1735, 21, 1, 126),
(1736, 24, 1, 126),
(1737, 27, 1, 126),
(1738, 30, 1, 126),
(1739, 2, 1, 127),
(1740, 5, 1, 127),
(1741, 8, 1, 127),
(1742, 11, 1, 127),
(1743, 14, 1, 127),
(1744, 17, 1, 127),
(1745, 20, 1, 127),
(1746, 23, 1, 127),
(1747, 26, 1, 127),
(1748, 29, 1, 127),
(1749, 2, 1, 128),
(1750, 5, 1, 128),
(1751, 8, 1, 128),
(1752, 11, 1, 128),
(1753, 14, 1, 128),
(1754, 17, 1, 128),
(1755, 20, 1, 128),
(1756, 23, 1, 128),
(1757, 26, 1, 128),
(1758, 29, 1, 128),
(1759, 1, 1, 129),
(1760, 4, 1, 129),
(1761, 7, 1, 129),
(1762, 10, 1, 129),
(1763, 13, 1, 129),
(1764, 16, 1, 129),
(1765, 19, 1, 129),
(1766, 22, 1, 129),
(1767, 25, 1, 129),
(1768, 28, 1, 129),
(1769, 1, 1, 130),
(1770, 4, 1, 130),
(1771, 7, 1, 130),
(1772, 10, 1, 130),
(1773, 13, 1, 130),
(1774, 16, 1, 130),
(1775, 19, 1, 130),
(1776, 22, 1, 130),
(1777, 25, 1, 130),
(1778, 28, 1, 130),
(1779, 31, 1, 130),
(1780, 3, 1, 131),
(1781, 6, 1, 131),
(1782, 9, 1, 131),
(1783, 12, 1, 131),
(1784, 15, 1, 131),
(1785, 18, 1, 131),
(1786, 21, 1, 131),
(1787, 24, 1, 131),
(1788, 27, 1, 131),
(1789, 30, 1, 131),
(1790, 2, 1, 132),
(1791, 5, 1, 132),
(1792, 8, 1, 132),
(1793, 11, 1, 132),
(1794, 14, 1, 132),
(1795, 17, 1, 132),
(1796, 20, 1, 132),
(1797, 23, 1, 132),
(1798, 26, 1, 132),
(1799, 29, 1, 132),
(1800, 2, 1, 133),
(1801, 5, 1, 133),
(1802, 8, 1, 133),
(1803, 11, 1, 133),
(1804, 14, 1, 133),
(1805, 17, 1, 133),
(1806, 20, 1, 133);

-- --------------------------------------------------------

--
-- Table structure for table `VisitasMes`
--

CREATE TABLE `VisitasMes` (
  `id` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `visitasAnio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `VisitasMes`
--

INSERT INTO `VisitasMes` (`id`, `mes`, `visitas`, `visitasAnio_id`) VALUES
(1, 8, 81, 1),
(2, 9, 135, 1),
(3, 10, 136, 1),
(4, 11, 135, 1),
(5, 12, 143, 1),
(6, 1, 136, 2),
(7, 2, 126, 2),
(8, 3, 143, 2),
(9, 4, 135, 2),
(10, 5, 136, 2),
(11, 6, 135, 2),
(12, 7, 143, 2),
(13, 8, 136, 2),
(14, 9, 135, 2),
(15, 10, 143, 2),
(16, 11, 135, 2),
(17, 12, 136, 2),
(18, 1, 143, 3),
(19, 2, 126, 3),
(20, 3, 136, 3),
(21, 4, 135, 3),
(22, 5, 143, 3),
(23, 6, 135, 3),
(24, 7, 136, 3),
(25, 8, 98, 3),
(26, 8, 7, 4),
(27, 9, 10, 4),
(28, 10, 10, 4),
(29, 11, 10, 4),
(30, 12, 10, 4),
(31, 1, 11, 5),
(32, 2, 9, 5),
(33, 3, 10, 5),
(34, 4, 10, 5),
(35, 5, 11, 5),
(36, 6, 10, 5),
(37, 7, 10, 5),
(38, 8, 10, 5),
(39, 9, 10, 5),
(40, 10, 11, 5),
(41, 11, 10, 5),
(42, 12, 10, 5),
(43, 1, 10, 6),
(44, 2, 10, 6),
(45, 3, 10, 6),
(46, 4, 10, 6),
(47, 5, 10, 6),
(48, 6, 10, 6),
(49, 7, 11, 6),
(50, 8, 10, 6),
(51, 9, 10, 6),
(52, 10, 7, 6),
(53, 8, 7, 7),
(54, 9, 10, 7),
(55, 10, 10, 7),
(56, 11, 10, 7),
(57, 12, 10, 7),
(58, 1, 11, 8),
(59, 2, 9, 8),
(60, 3, 10, 8),
(61, 4, 10, 8),
(62, 5, 11, 8),
(63, 6, 10, 8),
(64, 7, 10, 8),
(65, 8, 10, 8),
(66, 9, 10, 8),
(67, 10, 11, 8),
(68, 11, 10, 8),
(69, 12, 10, 8),
(70, 1, 10, 9),
(71, 2, 10, 9),
(72, 3, 10, 9),
(73, 4, 10, 9),
(74, 5, 10, 9),
(75, 6, 10, 9),
(76, 7, 11, 9),
(77, 8, 10, 9),
(78, 9, 10, 9),
(79, 10, 7, 9),
(80, 8, 7, 10),
(81, 9, 10, 10),
(82, 10, 10, 10),
(83, 11, 10, 10),
(84, 12, 10, 10),
(85, 1, 11, 11),
(86, 2, 9, 11),
(87, 3, 10, 11),
(88, 4, 10, 11),
(89, 5, 11, 11),
(90, 6, 10, 11),
(91, 7, 10, 11),
(92, 8, 10, 11),
(93, 9, 10, 11),
(94, 10, 11, 11),
(95, 11, 10, 11),
(96, 12, 10, 11),
(97, 1, 10, 12),
(98, 2, 10, 12),
(99, 3, 10, 12),
(100, 4, 10, 12),
(101, 5, 10, 12),
(102, 6, 10, 12),
(103, 7, 11, 12),
(104, 8, 10, 12),
(105, 9, 10, 12),
(106, 10, 7, 12),
(107, 8, 7, 13),
(108, 9, 10, 13),
(109, 10, 10, 13),
(110, 11, 10, 13),
(111, 12, 10, 13),
(112, 1, 11, 14),
(113, 2, 9, 14),
(114, 3, 10, 14),
(115, 4, 10, 14),
(116, 5, 11, 14),
(117, 6, 10, 14),
(118, 7, 10, 14),
(119, 8, 10, 14),
(120, 9, 10, 14),
(121, 10, 11, 14),
(122, 11, 10, 14),
(123, 12, 10, 14),
(124, 1, 10, 15),
(125, 2, 10, 15),
(126, 3, 10, 15),
(127, 4, 10, 15),
(128, 5, 10, 15),
(129, 6, 10, 15),
(130, 7, 11, 15),
(131, 8, 10, 15),
(132, 9, 10, 15),
(133, 10, 7, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_rama`
--
ALTER TABLE `area_rama`
  ADD PRIMARY KEY (`area_id`,`rama_id`),
  ADD KEY `IDX_81C47D27BD0F409C` (`area_id`),
  ADD KEY `IDX_81C47D275E0BFD3B` (`rama_id`);

--
-- Indexes for table `Comentario`
--
ALTER TABLE `Comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demanda`
--
ALTER TABLE `demanda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_21F913BC3A909126` (`nombre`),
  ADD KEY `IDX_21F913BCBD0F409C` (`area_id`),
  ADD KEY `IDX_21F913BC5E0BFD3B` (`rama_id`),
  ADD KEY `IDX_21F913BC2A30B056` (`disciplina_id`),
  ADD KEY `IDX_21F913BCA9276E6C` (`tipo_id`);

--
-- Indexes for table `demanda_comentario`
--
ALTER TABLE `demanda_comentario`
  ADD PRIMARY KEY (`demanda_id`,`comentario_id`),
  ADD KEY `IDX_BE5BD6DCF8BC94F` (`demanda_id`),
  ADD KEY `IDX_BE5BD6DCF3F2D7EC` (`comentario_id`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Oferta`
--
ALTER TABLE `Oferta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_73D5CDC43A909126` (`nombre`),
  ADD KEY `IDX_73D5CDC4BD0F409C` (`area_id`),
  ADD KEY `IDX_73D5CDC45E0BFD3B` (`rama_id`),
  ADD KEY `IDX_73D5CDC42A30B056` (`disciplina_id`),
  ADD KEY `IDX_73D5CDC4A9276E6C` (`tipo_id`);

--
-- Indexes for table `oferta_comentario`
--
ALTER TABLE `oferta_comentario`
  ADD PRIMARY KEY (`oferta_id`,`comentario_id`),
  ADD KEY `IDX_E6076D66FAFBF624` (`oferta_id`),
  ADD KEY `IDX_E6076D66F3F2D7EC` (`comentario_id`);

--
-- Indexes for table `oferta_visitasanio`
--
ALTER TABLE `oferta_visitasanio`
  ADD PRIMARY KEY (`oferta_id`,`visitasanio_id`),
  ADD KEY `IDX_D106191EFAFBF624` (`oferta_id`),
  ADD KEY `IDX_D106191ED5004B7D` (`visitasanio_id`);

--
-- Indexes for table `oferta_visitasdia`
--
ALTER TABLE `oferta_visitasdia`
  ADD PRIMARY KEY (`oferta_id`,`visitasdia_id`),
  ADD KEY `IDX_F54543F3FAFBF624` (`oferta_id`),
  ADD KEY `IDX_F54543F39BFF8474` (`visitasdia_id`);

--
-- Indexes for table `oferta_visitasmes`
--
ALTER TABLE `oferta_visitasmes`
  ADD PRIMARY KEY (`oferta_id`,`visitasmes_id`),
  ADD KEY `IDX_A5984638FAFBF624` (`oferta_id`),
  ADD KEY `IDX_A59846388310A7A9` (`visitasmes_id`);

--
-- Indexes for table `PalabrasClaveOferta`
--
ALTER TABLE `PalabrasClaveOferta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_22C80935DB38439E` (`usuario_id`);

--
-- Indexes for table `palabras_clave_demanda`
--
ALTER TABLE `palabras_clave_demanda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8EAB9A32DB38439E` (`usuario_id`);

--
-- Indexes for table `rama`
--
ALTER TABLE `rama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rama_disciplina`
--
ALTER TABLE `rama_disciplina`
  ADD PRIMARY KEY (`rama_id`,`disciplina_id`),
  ADD KEY `IDX_E8ECF7705E0BFD3B` (`rama_id`),
  ADD KEY `IDX_E8ECF7702A30B056` (`disciplina_id`);

--
-- Indexes for table `RegistroOfertasDemandas`
--
ALTER TABLE `RegistroOfertasDemandas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrovisitasdemanda_visitasanio`
--
ALTER TABLE `registrovisitasdemanda_visitasanio`
  ADD PRIMARY KEY (`registrovisitasdemanda_id`,`visitasanio_id`),
  ADD UNIQUE KEY `UNIQ_E745FEDFD5004B7D` (`visitasanio_id`),
  ADD KEY `IDX_E745FEDF18E14174` (`registrovisitasdemanda_id`);

--
-- Indexes for table `registrovisitasdemanda_visitasdia`
--
ALTER TABLE `registrovisitasdemanda_visitasdia`
  ADD PRIMARY KEY (`registrovisitasdemanda_id`,`visitasdia_id`),
  ADD UNIQUE KEY `UNIQ_B5E874599BFF8474` (`visitasdia_id`),
  ADD KEY `IDX_B5E8745918E14174` (`registrovisitasdemanda_id`);

--
-- Indexes for table `registrovisitasdemanda_visitasmes`
--
ALTER TABLE `registrovisitasdemanda_visitasmes`
  ADD PRIMARY KEY (`registrovisitasdemanda_id`,`visitasmes_id`),
  ADD UNIQUE KEY `UNIQ_E53571928310A7A9` (`visitasmes_id`),
  ADD KEY `IDX_E535719218E14174` (`registrovisitasdemanda_id`);

--
-- Indexes for table `RegistroVisitasOferta`
--
ALTER TABLE `RegistroVisitasOferta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_90E471F8FAFBF624` (`oferta_id`);

--
-- Indexes for table `registrovisitasoferta_visitasanio`
--
ALTER TABLE `registrovisitasoferta_visitasanio`
  ADD PRIMARY KEY (`registrovisitasoferta_id`,`visitasanio_id`),
  ADD UNIQUE KEY `UNIQ_C9F7950ED5004B7D` (`visitasanio_id`),
  ADD KEY `IDX_C9F7950E27CD8EBA` (`registrovisitasoferta_id`);

--
-- Indexes for table `registrovisitasoferta_visitasdia`
--
ALTER TABLE `registrovisitasoferta_visitasdia`
  ADD PRIMARY KEY (`registrovisitasoferta_id`,`visitasdia_id`),
  ADD UNIQUE KEY `UNIQ_B38E24249BFF8474` (`visitasdia_id`),
  ADD KEY `IDX_B38E242427CD8EBA` (`registrovisitasoferta_id`);

--
-- Indexes for table `registrovisitasoferta_visitasmes`
--
ALTER TABLE `registrovisitasoferta_visitasmes`
  ADD PRIMARY KEY (`registrovisitasoferta_id`,`visitasmes_id`),
  ADD UNIQUE KEY `UNIQ_E35321EF8310A7A9` (`visitasmes_id`),
  ADD KEY `IDX_E35321EF27CD8EBA` (`registrovisitasoferta_id`);

--
-- Indexes for table `RegistroVisitasUsuario`
--
ALTER TABLE `RegistroVisitasUsuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C254C4FADB38439E` (`usuario_id`);

--
-- Indexes for table `registrovisitasusuario_visitasanio`
--
ALTER TABLE `registrovisitasusuario_visitasanio`
  ADD PRIMARY KEY (`registrovisitasusuario_id`,`visitasanio_id`),
  ADD UNIQUE KEY `UNIQ_BEF039B3D5004B7D` (`visitasanio_id`),
  ADD KEY `IDX_BEF039B3CC52CBA5` (`registrovisitasusuario_id`);

--
-- Indexes for table `registrovisitasusuario_visitasdia`
--
ALTER TABLE `registrovisitasusuario_visitasdia`
  ADD PRIMARY KEY (`registrovisitasusuario_id`,`visitasdia_id`),
  ADD UNIQUE KEY `UNIQ_B3120F259BFF8474` (`visitasdia_id`),
  ADD KEY `IDX_B3120F25CC52CBA5` (`registrovisitasusuario_id`);

--
-- Indexes for table `registrovisitasusuario_visitasmes`
--
ALTER TABLE `registrovisitasusuario_visitasmes`
  ADD PRIMARY KEY (`registrovisitasusuario_id`,`visitasmes_id`),
  ADD UNIQUE KEY `UNIQ_E3CF0AEE8310A7A9` (`visitasmes_id`),
  ADD KEY `IDX_E3CF0AEECC52CBA5` (`registrovisitasusuario_id`);

--
-- Indexes for table `registro_visitas_demanda`
--
ALTER TABLE `registro_visitas_demanda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4CBC64BCF8BC94F` (`demanda_id`);

--
-- Indexes for table `Tipo`
--
ALTER TABLE `Tipo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D01FB2793A909126` (`nombre`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_2DA17977C05FB297` (`confirmation_token`);

--
-- Indexes for table `VisitasAnio`
--
ALTER TABLE `VisitasAnio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `VisitasDia`
--
ALTER TABLE `VisitasDia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2FC38CA784BCA29F` (`visitasMes_id`);

--
-- Indexes for table `VisitasMes`
--
ALTER TABLE `VisitasMes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7F1E896C1ABD72E1` (`visitasAnio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Comentario`
--
ALTER TABLE `Comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `demanda`
--
ALTER TABLE `demanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `Oferta`
--
ALTER TABLE `Oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `PalabrasClaveOferta`
--
ALTER TABLE `PalabrasClaveOferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `palabras_clave_demanda`
--
ALTER TABLE `palabras_clave_demanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rama`
--
ALTER TABLE `rama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `RegistroOfertasDemandas`
--
ALTER TABLE `RegistroOfertasDemandas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `RegistroVisitasOferta`
--
ALTER TABLE `RegistroVisitasOferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `RegistroVisitasUsuario`
--
ALTER TABLE `RegistroVisitasUsuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registro_visitas_demanda`
--
ALTER TABLE `registro_visitas_demanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Tipo`
--
ALTER TABLE `Tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `VisitasAnio`
--
ALTER TABLE `VisitasAnio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `VisitasDia`
--
ALTER TABLE `VisitasDia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1807;
--
-- AUTO_INCREMENT for table `VisitasMes`
--
ALTER TABLE `VisitasMes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area_rama`
--
ALTER TABLE `area_rama`
  ADD CONSTRAINT `FK_81C47D275E0BFD3B` FOREIGN KEY (`rama_id`) REFERENCES `rama` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_81C47D27BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `demanda`
--
ALTER TABLE `demanda`
  ADD CONSTRAINT `FK_21F913BC2A30B056` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `FK_21F913BC5E0BFD3B` FOREIGN KEY (`rama_id`) REFERENCES `rama` (`id`),
  ADD CONSTRAINT `FK_21F913BCA9276E6C` FOREIGN KEY (`tipo_id`) REFERENCES `Tipo` (`id`),
  ADD CONSTRAINT `FK_21F913BCBD0F409C` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

--
-- Constraints for table `demanda_comentario`
--
ALTER TABLE `demanda_comentario`
  ADD CONSTRAINT `FK_BE5BD6DCF3F2D7EC` FOREIGN KEY (`comentario_id`) REFERENCES `Comentario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BE5BD6DCF8BC94F` FOREIGN KEY (`demanda_id`) REFERENCES `demanda` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Oferta`
--
ALTER TABLE `Oferta`
  ADD CONSTRAINT `FK_73D5CDC42A30B056` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `FK_73D5CDC45E0BFD3B` FOREIGN KEY (`rama_id`) REFERENCES `rama` (`id`),
  ADD CONSTRAINT `FK_73D5CDC4A9276E6C` FOREIGN KEY (`tipo_id`) REFERENCES `Tipo` (`id`),
  ADD CONSTRAINT `FK_73D5CDC4BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

--
-- Constraints for table `oferta_comentario`
--
ALTER TABLE `oferta_comentario`
  ADD CONSTRAINT `FK_E6076D66F3F2D7EC` FOREIGN KEY (`comentario_id`) REFERENCES `Comentario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E6076D66FAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `Oferta` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oferta_visitasanio`
--
ALTER TABLE `oferta_visitasanio`
  ADD CONSTRAINT `FK_D106191ED5004B7D` FOREIGN KEY (`visitasanio_id`) REFERENCES `VisitasAnio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D106191EFAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `Oferta` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oferta_visitasdia`
--
ALTER TABLE `oferta_visitasdia`
  ADD CONSTRAINT `FK_F54543F39BFF8474` FOREIGN KEY (`visitasdia_id`) REFERENCES `VisitasDia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F54543F3FAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `Oferta` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `oferta_visitasmes`
--
ALTER TABLE `oferta_visitasmes`
  ADD CONSTRAINT `FK_A59846388310A7A9` FOREIGN KEY (`visitasmes_id`) REFERENCES `VisitasMes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A5984638FAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `Oferta` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `PalabrasClaveOferta`
--
ALTER TABLE `PalabrasClaveOferta`
  ADD CONSTRAINT `FK_22C80935DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `User` (`id`);

--
-- Constraints for table `palabras_clave_demanda`
--
ALTER TABLE `palabras_clave_demanda`
  ADD CONSTRAINT `FK_8EAB9A32DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `User` (`id`);

--
-- Constraints for table `rama_disciplina`
--
ALTER TABLE `rama_disciplina`
  ADD CONSTRAINT `FK_E8ECF7702A30B056` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E8ECF7705E0BFD3B` FOREIGN KEY (`rama_id`) REFERENCES `rama` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrovisitasdemanda_visitasanio`
--
ALTER TABLE `registrovisitasdemanda_visitasanio`
  ADD CONSTRAINT `FK_E745FEDF18E14174` FOREIGN KEY (`registrovisitasdemanda_id`) REFERENCES `registro_visitas_demanda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E745FEDFD5004B7D` FOREIGN KEY (`visitasanio_id`) REFERENCES `VisitasAnio` (`id`);

--
-- Constraints for table `registrovisitasdemanda_visitasdia`
--
ALTER TABLE `registrovisitasdemanda_visitasdia`
  ADD CONSTRAINT `FK_B5E8745918E14174` FOREIGN KEY (`registrovisitasdemanda_id`) REFERENCES `registro_visitas_demanda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B5E874599BFF8474` FOREIGN KEY (`visitasdia_id`) REFERENCES `VisitasDia` (`id`);

--
-- Constraints for table `registrovisitasdemanda_visitasmes`
--
ALTER TABLE `registrovisitasdemanda_visitasmes`
  ADD CONSTRAINT `FK_E535719218E14174` FOREIGN KEY (`registrovisitasdemanda_id`) REFERENCES `registro_visitas_demanda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E53571928310A7A9` FOREIGN KEY (`visitasmes_id`) REFERENCES `VisitasMes` (`id`);

--
-- Constraints for table `RegistroVisitasOferta`
--
ALTER TABLE `RegistroVisitasOferta`
  ADD CONSTRAINT `FK_90E471F8FAFBF624` FOREIGN KEY (`oferta_id`) REFERENCES `Oferta` (`id`);

--
-- Constraints for table `registrovisitasoferta_visitasanio`
--
ALTER TABLE `registrovisitasoferta_visitasanio`
  ADD CONSTRAINT `FK_C9F7950E27CD8EBA` FOREIGN KEY (`registrovisitasoferta_id`) REFERENCES `RegistroVisitasOferta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C9F7950ED5004B7D` FOREIGN KEY (`visitasanio_id`) REFERENCES `VisitasAnio` (`id`);

--
-- Constraints for table `registrovisitasoferta_visitasdia`
--
ALTER TABLE `registrovisitasoferta_visitasdia`
  ADD CONSTRAINT `FK_B38E242427CD8EBA` FOREIGN KEY (`registrovisitasoferta_id`) REFERENCES `RegistroVisitasOferta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B38E24249BFF8474` FOREIGN KEY (`visitasdia_id`) REFERENCES `VisitasDia` (`id`);

--
-- Constraints for table `registrovisitasoferta_visitasmes`
--
ALTER TABLE `registrovisitasoferta_visitasmes`
  ADD CONSTRAINT `FK_E35321EF27CD8EBA` FOREIGN KEY (`registrovisitasoferta_id`) REFERENCES `RegistroVisitasOferta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E35321EF8310A7A9` FOREIGN KEY (`visitasmes_id`) REFERENCES `VisitasMes` (`id`);

--
-- Constraints for table `RegistroVisitasUsuario`
--
ALTER TABLE `RegistroVisitasUsuario`
  ADD CONSTRAINT `FK_C254C4FADB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `User` (`id`);

--
-- Constraints for table `registrovisitasusuario_visitasanio`
--
ALTER TABLE `registrovisitasusuario_visitasanio`
  ADD CONSTRAINT `FK_BEF039B3CC52CBA5` FOREIGN KEY (`registrovisitasusuario_id`) REFERENCES `RegistroVisitasUsuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BEF039B3D5004B7D` FOREIGN KEY (`visitasanio_id`) REFERENCES `VisitasAnio` (`id`);

--
-- Constraints for table `registrovisitasusuario_visitasdia`
--
ALTER TABLE `registrovisitasusuario_visitasdia`
  ADD CONSTRAINT `FK_B3120F259BFF8474` FOREIGN KEY (`visitasdia_id`) REFERENCES `VisitasDia` (`id`),
  ADD CONSTRAINT `FK_B3120F25CC52CBA5` FOREIGN KEY (`registrovisitasusuario_id`) REFERENCES `RegistroVisitasUsuario` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrovisitasusuario_visitasmes`
--
ALTER TABLE `registrovisitasusuario_visitasmes`
  ADD CONSTRAINT `FK_E3CF0AEE8310A7A9` FOREIGN KEY (`visitasmes_id`) REFERENCES `VisitasMes` (`id`),
  ADD CONSTRAINT `FK_E3CF0AEECC52CBA5` FOREIGN KEY (`registrovisitasusuario_id`) REFERENCES `RegistroVisitasUsuario` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registro_visitas_demanda`
--
ALTER TABLE `registro_visitas_demanda`
  ADD CONSTRAINT `FK_4CBC64BCF8BC94F` FOREIGN KEY (`demanda_id`) REFERENCES `demanda` (`id`);

--
-- Constraints for table `VisitasDia`
--
ALTER TABLE `VisitasDia`
  ADD CONSTRAINT `FK_2FC38CA784BCA29F` FOREIGN KEY (`visitasMes_id`) REFERENCES `VisitasMes` (`id`);

--
-- Constraints for table `VisitasMes`
--
ALTER TABLE `VisitasMes`
  ADD CONSTRAINT `FK_7F1E896C1ABD72E1` FOREIGN KEY (`visitasAnio_id`) REFERENCES `VisitasAnio` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
