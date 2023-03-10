-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2023 at 11:43 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unasalud`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nombre_cat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nombre_cat`) VALUES
(1, 'Charlas'),
(2, 'Conversatorios');

-- --------------------------------------------------------

--
-- Table structure for table `categorias_2`
--

CREATE TABLE `categorias_2` (
  `id_cat_2` int(11) NOT NULL,
  `nombre_cat_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias_2`
--

INSERT INTO `categorias_2` (`id_cat_2`, `nombre_cat_2`) VALUES
(3, 'Salud Humana'),
(4, 'Salud Animal'),
(5, 'Medio Ambiente'),
(6, 'Alimentos');

-- --------------------------------------------------------

--
-- Table structure for table `charlas`
--

CREATE TABLE `charlas` (
  `id_char` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_categoria_2` int(11) NOT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `charlas`
--

INSERT INTO `charlas` (`id_char`, `nombre`, `descripcion`, `link_video`, `create_at`, `id_usuario`, `id_categoria`, `id_categoria_2`, `autor`, `correo`) VALUES
(55, 'La necesidad de desarrollar nuevos antibacterianos', 'CICLO DE WEBINAR: Proyecto aplicaci??n de estrategias One Health; lecciones aprendidas en los sectores de salud, alimentos y medioambiente y su contribuci??n en el cumplimiento de los Objetivos de Desarrollo Sostenible 2030.', 'Z_srrmbPAYw', '2022-06-18 19:33:46', 13, 1, 3, 'Dr. Javier Campanini', 'javier.campanini@uss.cl'),
(56, 'Conectando la salud humana, animal y ambiental', 'Paola Olmos\r\nFernando ??vila\r\nGustavo Marin', '2vupU_1xd48', '2022-06-18 19:36:55', 13, 2, 3, 'Paola Olmos- Fernando ??vila - Gustavo Marin', ''),
(57, 'Vigilancia molecular de comunidades microbianas ambientales', 'CICLO DE WEBINAR: Proyecto aplicaci??n de estrategias One Health; lecciones aprendidas en los sectores de salud, alimentos y medioambiente y su contribuci??n en el cumplimiento de los Objetivos de Desarrollo Sostenible 2030.', 'mtixAApPZac', '2022-06-18 19:35:08', 13, 1, 3, 'Dr. Daniel Medina', 'daniel.medina@uss.cl'),
(58, 'Efectos de contaminantes ambientales de origen antropog??nico sobre zebrafish', 'CICLO DE WEBINAR: Proyecto aplicaci??n de estrategias One Health; lecciones aprendidas en los sectores de salud, alimentos y medioambiente y su contribuci??n en el cumplimiento de los Objetivos de Desarrollo Sostenible 2030.', 'zh3foHVRxuk', '2022-06-18 19:35:21', 13, 1, 3, 'Ang??lica Guerrero-Castilla', 'angelica.guerrero@uss.cl'),
(59, 'Produccio??n de Girgolas sobre Residuos Agroindustriales', 'CICLO DE WEBINAR: Proyecto aplicaci??n de estrategias One Health; lecciones aprendidas en los sectores de salud, alimentos y medioambiente y su contribuci??n en el cumplimiento de los Objetivos de Desarrollo Sostenible 2030.', 'Li7hDGFSEzQ', '2022-12-16 12:21:28', 13, 1, 3, 'Dra. Marcela Filipi', 'mfilippi@unrn.edu.ar'),
(60, 'Pleurotina para alimentacio??n animal', 'CICLO DE WEBINAR: Proyecto aplicaci??n de estrategias One Health; lecciones aprendidas en los sectores de salud, alimentos y medioambiente y su contribuci??n en el cumplimiento de los Objetivos de Desarrollo Sostenible 2030.', '63tiDvFVZgU', '2022-12-16 12:18:36', 13, 1, 3, 'Dra. Mar??a Bel??n Buglione', 'contacto@unasalud.cl');

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE `documentos` (
  `id_doc` int(11) NOT NULL,
  `nombre_doc` varchar(255) NOT NULL,
  `ruta_doc` varchar(255) NOT NULL,
  `id_charla_doc` int(11) DEFAULT NULL,
  `id_procedimiento_doc` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`id_doc`, `nombre_doc`, `ruta_doc`, `id_charla_doc`, `id_procedimiento_doc`, `create_at`, `autor`) VALUES
(1, 'Prueba Archivo 01', 'admin/Layout/assets/archivos/Certificado_UNO.pdf', NULL, NULL, '2023-02-28 23:22:48', 'Edgardo Ruotolo'),
(2, 'Prueba Archivo 02', 'admin/Layout/assets/archivos/Certificado_UNO-2.pdf', NULL, NULL, '2023-02-28 23:23:20', 'Edgardo Ruotolo');

-- --------------------------------------------------------

--
-- Table structure for table `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `page` varchar(45) DEFAULT '#',
  `descripcion` varchar(255) NOT NULL,
  `icono` varchar(70) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '1',
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `paginas`
--

INSERT INTO `paginas` (`id`, `menu_id`, `titulo`, `page`, `descripcion`, `icono`, `activo`, `creado`, `actualizado`) VALUES
(1, NULL, 'Perfil', 'perfil', 'Informacion general del usuario', 'fa fa-cogs', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(2, NULL, 'Dashboard', 'dashboard', 'Informacion general del sistema', 'fa fa-laptop', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(3, NULL, 'Usuarios', 'usuarios', 'Administraci??n de usuarios', 'fa fa-users', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(4, NULL, 'Roles', 'roles', 'Informacion general de los roles de usuarios', 'fa fa-key', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(5, NULL, 'Productos', '#', 'Informacion de todos los productos', 'fa fa-product-hunt', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(6, NULL, 'Categorias', 'categorias', 'Informacion general de categorias', '', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(7, 5, 'Lista', 'productos', 'Crear nuevo producto', 'fa fa-list', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(8, NULL, 'Documentos', 'documentos', 'Aqui los documentos', 'fa fa-file', 1, '2022-05-18 10:17:45', '2022-05-18 10:18:33'),
(9, NULL, 'Charlas', 'charlas', 'Aqui las charlas', 'fa fa-commenting', 1, '2022-05-18 10:18:39', '2022-05-18 10:19:22'),
(10, NULL, 'Procedimientos', 'procedimientos', 'Aqui los procedimientos', 'fa fa-tasks', 1, '2022-05-18 10:18:39', '2022-05-18 10:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `c` int(11) NOT NULL DEFAULT '0',
  `r` int(11) NOT NULL DEFAULT '0',
  `u` int(11) NOT NULL DEFAULT '0',
  `d` int(11) NOT NULL DEFAULT '0',
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`id`, `id_rol`, `id_pagina`, `c`, `r`, `u`, `d`, `creado`, `actualizado`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(2, 1, 2, 0, 0, 0, 0, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(3, 1, 3, 1, 1, 1, 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(12, 1, 2, 1, 1, 1, 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(13, 3, 9, 1, 1, 1, 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(14, 3, 8, 1, 1, 1, 1, '2022-05-18 10:20:47', '2022-05-18 10:21:22'),
(15, 3, 10, 1, 1, 1, 1, '2022-05-18 10:21:23', '2022-05-18 10:21:32'),
(16, 1, 9, 1, 1, 1, 1, '2022-05-18 12:00:58', '2022-05-18 12:01:28'),
(17, 1, 8, 1, 1, 1, 1, '2022-05-18 12:00:58', '2022-05-18 12:01:28'),
(18, 1, 10, 1, 1, 1, 1, '2022-05-18 12:01:52', '2022-05-18 12:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `procedimientos`
--

CREATE TABLE `procedimientos` (
  `id_proc` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `procedimientos`
--

INSERT INTO `procedimientos` (`id_proc`, `nombre`, `descripcion`, `link_video`, `create_at`, `id_usuario`, `id_categoria`, `autor`, `correo`) VALUES
(1, 'ProcedimientoProtocolo y validaci??n de extracci??n de ??cidos nucleicos', 'Procedimiento desarrollado para el proyecto Una Salud.', 'FxkKKm-aqeQ', '2022-12-16 12:15:13', 13, 1, 'Daniel Medina', 'daniel.medina@uss.cl');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT '1',
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `activo`, `creado`, `actualizado`) VALUES
(1, 'Administrador', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43'),
(3, 'Editor', 1, '2022-05-18 23:10:43', '2022-05-18 23:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_activo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_rol`, `nombre_usuario`, `email`, `password`, `is_activo`) VALUES
(13, 1, 'Una Salud', 'admin@unasalud.cl', 'Admin2022@', 1),
(14, 1, 'Edgardo', 'edgardo@indaga.cl', 'Guns026772', 1),
(15, 3, 'Jorge', 'jorge@editor.cl', 'jorge2022', 1),
(16, 3, 'Daniel', 'daniel.medina@uss.cl', 'daniel2022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`) USING BTREE;

--
-- Indexes for table `categorias_2`
--
ALTER TABLE `categorias_2`
  ADD PRIMARY KEY (`id_cat_2`);

--
-- Indexes for table `charlas`
--
ALTER TABLE `charlas`
  ADD PRIMARY KEY (`id_char`),
  ADD KEY `id_usuario` (`id_usuario`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_categoria_2` (`id_categoria_2`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `id_charla_doc` (`id_charla_doc`,`id_procedimiento_doc`),
  ADD KEY `id_procedimiento_doc` (`id_procedimiento_doc`);

--
-- Indexes for table `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pagina_subpagina` (`menu_id`) USING BTREE;

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `permisos_rol` (`id_rol`) USING BTREE,
  ADD KEY `permisos_pagina` (`id_pagina`) USING BTREE,
  ADD KEY `id_pagina` (`id_pagina`) USING BTREE;

--
-- Indexes for table `procedimientos`
--
ALTER TABLE `procedimientos`
  ADD PRIMARY KEY (`id_proc`),
  ADD KEY `id_usuario` (`id_usuario`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`) USING BTREE,
  ADD KEY `usuarios_roles` (`id_rol`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorias_2`
--
ALTER TABLE `categorias_2`
  MODIFY `id_cat_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `charlas`
--
ALTER TABLE `charlas`
  MODIFY `id_char` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `procedimientos`
--
ALTER TABLE `procedimientos`
  MODIFY `id_proc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charlas`
--
ALTER TABLE `charlas`
  ADD CONSTRAINT `charlas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `charlas_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `charlas_ibfk_3` FOREIGN KEY (`id_categoria_2`) REFERENCES `categorias_2` (`id_cat_2`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`id_procedimiento_doc`) REFERENCES `procedimientos` (`id_proc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `documentos_ibfk_3` FOREIGN KEY (`id_charla_doc`) REFERENCES `charlas` (`id_char`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `paginas`
--
ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `paginas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`id_pagina`) REFERENCES `paginas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `procedimientos`
--
ALTER TABLE `procedimientos`
  ADD CONSTRAINT `procedimientos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `procedimientos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
