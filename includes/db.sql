-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla basex.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_venta` int(10) NOT NULL,
  `id_almacen` int(10) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `fecha` date NOT NULL,
  `valor_total` int(100) NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.admin: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Volcando estructura para tabla basex.almacen
CREATE TABLE IF NOT EXISTS `almacen` (
  `id` int(11) NOT NULL,
  `id_producto` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.almacen: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `almacen` DISABLE KEYS */;
/*!40000 ALTER TABLE `almacen` ENABLE KEYS */;

-- Volcando estructura para tabla basex.auditoria_producto
CREATE TABLE IF NOT EXISTS `auditoria_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_categoria_producto` int(10) NOT NULL,
  `valor` int(225) NOT NULL,
  `unidades` int(10) NOT NULL,
  `especificacion` varchar(2250) NOT NULL,
  `imagen` longblob,
  `id_usuarios` int(225) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `accion` varchar(50) DEFAULT NULL,
  `Fecha-Accion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.auditoria_producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `auditoria_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria_producto` ENABLE KEYS */;

-- Volcando estructura para tabla basex.auditoria_usuarios
CREATE TABLE IF NOT EXISTS `auditoria_usuarios` (
  `id_audit` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `nombre_aud` varchar(50) NOT NULL,
  `email_aud` varchar(50) NOT NULL,
  `password_aud` varchar(50) NOT NULL,
  `celular_aud` varchar(50) NOT NULL,
  `whatsapp_aud` varchar(50) NOT NULL,
  `direccion_aud` varchar(50) NOT NULL,
  `ciudad_aud` varchar(50) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `img` longblob,
  `fecha_system` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proceso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_audit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla basex.auditoria_usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `auditoria_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla basex.categoria_producto
CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.categoria_producto: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_producto` DISABLE KEYS */;
INSERT INTO `categoria_producto` (`id`, `nombre`) VALUES
	(1, 'vehiculos'),
	(2, 'Tecnologia'),
	(3, 'Hogar y Electrodomesticos'),
	(4, 'Deportes'),
	(5, 'Belleza y Cuidado Personal'),
	(6, 'Accesorios'),
	(7, 'Juguetes'),
	(8, 'Herramientas'),
	(9, 'Instrumentos Musicales'),
	(10, 'Moda'),
	(11, 'Inmuebles');
/*!40000 ALTER TABLE `categoria_producto` ENABLE KEYS */;

-- Volcando estructura para tabla basex.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `id_categoria_producto` int(10) NOT NULL,
  `valor` int(225) NOT NULL,
  `unidades` int(10) NOT NULL,
  `especificacion` varchar(2250) NOT NULL,
  `imagen` longblob,
  `id_usuarios` int(225) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios` (`id_usuarios`),
  KEY `id_categoria_producto` (`id_categoria_producto`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categoria_producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla basex.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `celular` varchar(225) NOT NULL,
  `whatsapp` varchar(225) NOT NULL,
  `direccion` varchar(225) NOT NULL,
  `ciudad` varchar(225) NOT NULL,
  `img` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla basex.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para disparador union.producto_after_insert
CREATE DEFINER=`root`@`localhost` TRIGGER `producto_after_insert` AFTER INSERT ON `producto` FOR EACH ROW BEGIN

			
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (new.id,new.nombre,new.id_categoria_producto,new.valor,new.unidades,new.especificacion,new.imagen,new.id_usuarios,new.estado,user(),'INSERT');
END;

-- Volcando estructura para disparador union.producto_after_update
CREATE DEFINER=`root`@`localhost` TRIGGER `producto_after_update` AFTER UPDATE ON `producto` FOR EACH ROW BEGIN


	
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (NEW.id,new.nombre,NEW.id_categoria_producto,NEW.valor,NEW.unidades,NEW.especificacion,NEW.imagen,NEW.id_usuarios,NEW.estado,user(),'UPDATE');
END;

-- Volcando estructura para disparador union.producto_before_delete
CREATE DEFINER=`root`@`localhost` TRIGGER `producto_before_delete` BEFORE DELETE ON `producto` FOR EACH ROW BEGIN
	
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (OLD.id,OLD.nombre,OLD.id_categoria_producto,OLD.valor,OLD.unidades,OLD.especificacion,OLD.imagen,OLD.id_usuarios,OLD.estado,user(),'DELETE');
END;

-- Volcando estructura para disparador union.usuarios_after_insert
CREATE DEFINER=`root`@`localhost` TRIGGER `usuarios_after_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN

			
			insert into auditoria_usuarios (id_usuario,nombre_aud,email_aud,password_aud,celular_aud,whatsapp_aud,direccion_aud,ciudad_aud,usuario,proceso)
			values (new.id,new.nombre,new.email,new.password,new.celular,new.whatsapp,new.direccion,new.ciudad,user(),'INSERT');
END;

-- Volcando estructura para disparador union.usuarios_after_update
CREATE DEFINER=`root`@`localhost` TRIGGER `usuarios_after_update` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
	
			insert into auditoria_usuarios (id_usuario,nombre_aud,email_aud,password_aud,celular_aud,whatsapp_aud,direccion_aud,ciudad_aud,usuario,proceso)
			values (NEW.id,NEW.nombre,NEW.email,NEW.password,NEW.celular,NEW.whatsapp,NEW.direccion,NEW.ciudad,user(),'UPDATE');
END;

-- Volcando estructura para disparador union.usuarios_before_delete
CREATE DEFINER=`root`@`localhost` TRIGGER `usuarios_before_delete` BEFORE DELETE ON `usuarios` FOR EACH ROW BEGIN
	
			insert into auditoria_usuarios (id_usuario,nombre_aud,email_aud,password_aud,celular_aud,whatsapp_aud,direccion_aud,ciudad_aud,usuario,proceso)
			values (OLD.id,OLD.nombre,OLD.email,OLD.password,OLD.celular,OLD.whatsapp,OLD.direccion,OLD.ciudad,user(),'DELET');
END;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
