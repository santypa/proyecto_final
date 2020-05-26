-- --------------------------------------------------------
-- Host:                         
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla proyecto.auditoria_producto
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto.auditoria_producto: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `auditoria_producto` DISABLE KEYS */;
INSERT INTO `auditoria_producto` (`id`, `id_producto`, `nombre`, `id_categoria_producto`, `valor`, `unidades`, `especificacion`, `imagen`, `id_usuarios`, `estado`, `usuario`, `accion`, `Fecha-Accion`) VALUES
	(1, 1, 'carro', 1, 32000000, 4, 'Tenemos los mejores planes financieros para que adquiera este vehiculo, recibimos su usado en parte de pago de todas las marcas con la mayor garantia de el mercado, permitanos asesorarle en todo el proceso y ofrecemos:\r\n\r\n-plan tradicional con plazos hasta 72 meses\r\n-14 cuotas\r\n-periodos de gracia\r\n-leasing\r\n-sumando ingresos\r\n-reportados con paz y salvos\r\n-50-50 y muchos mas\r\n\r\nKia Plaza s.a\r\nAsesor Comercial\r\nAndres Caceres', _binary 0x696D6167656E2F636172726F2E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:36:20'),
	(2, 2, 'Motorola', 2, 1200000, 6, 'compatible con lg k20 v | lg k20 plus | lg grace | lg k10 2017 | lg v5\r\n* diseÃ±o de doble capa nuestro cinturÃ³n funda hÃ­brida tiene un interior de silicona suave que envuelve tu telÃ©fono y proporciona para agarre de nuestro exterior de plÃ¡stico duro una protecciÃ³n resistente de caÃ­das y golpes\r\n* construido en funciÃ³n una caracterÃ­stica adicional que facilita la multitarea mientras que usted ve sus programas favoritos o media\r\n* diseÃ±os Ãºnicos muestre su telÃ©fono con uno de estos diseÃ±os ideal para niÃ±os o niÃ±as\r\n* producto de alta calidad a un precio asequible estar seguro de que tu mÃ³vil estarÃ¡ protegido y elegante con esta fundaciÃ³n', _binary 0x696D6167656E2F63656C756C61722E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:41:04'),
	(3, 3, 'licuadora oster', 3, 145000, 15, '*Sistema de acople totalmente metÃ¡lico All-Metal DriveÂ®, de mÃ¡xima durabilidad\r\n*Vaso de vidrio refractario BoroclassÂ®, resiste cambios bruscos de temperatura\r\n*Cuchilla picahielo de acero inoxidable\r\n*Vaso con capacidad de 1,25 litros\r\n*Control giratorio de 3 velocidades\r\n*Acabado cromado\r\n*Potente motor de 600 watts', _binary 0x696D6167656E2F6C69637561646F72612E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:43:11'),
	(4, 4, 'cicla ', 4, 358000, 2, 'Â«Â«â€¢ DESCRIPCIÃ“N â€¢Â»Â»\r\n\r\nMarca: RAD Cycle Products\r\nModelo: 2004 RAD Bike Hoist 2 Pack\r\nMedidas del Paquete: 12cm x 27 cm x 27 cm\r\nPeso Aprox: 8.1 Lb\r\n\r\n- Los ganchos estÃ¡n diseÃ±ados con un revestimiento de goma para proteger su bicicleta de araÃ±azos\r\n- La robusta ingenierÃ­a le permite levantar pesadas bicicletas de 100 libras de capacidad', _binary 0x696D6167656E2F6369636C612E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:44:56'),
	(5, 5, 'cremas faciales ', 5, 25000, 12, 'Multibeneficios Libertage CC Cream Matte', _binary 0x696D6167656E2F62656C6C657A612E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:46:00'),
	(6, 6, 'Gargantillas Mujer Choker Set 14unds Collar', 6, 35000, 15, 'Son 14 Gargantillas Set Collares de terciopelo para Mujeres, 14 estilos diferentes para todo tipo de ocasiÃ³n.\r\n**********************************************************************\r\n* DESCRIPCIÃ“N DEL PRODUCTO:\r\n- Estilos: ClÃ¡sicos de terciopelo con colgantes tatuaje gÃ³tico, encaje lolita vintage, entre otros.\r\n- Cantidad: 14 Gargantillas (Mdelos son los de la primera foto)\r\n\r\n**********************************************************************\r\n* ESPECIFICACIONES:\r\n\r\n- Marca: Alpha Element\r\n- Tipo de ArtÃ­culo: Collares Gargantillas\r\n- Estilo: Punk\r\n- Tipo de Metales: AleaciÃ³n de zinc\r\n- Genero: Mujer\r\n- Tipo de Cadena: Cadena de Eslabones\r\n-Medidas: Largo de Las Gargantillas incluyendo Eslabones 37cm (min) hasta 40 cm ( max)segÃºn diseÃ±o de la gargantilla.sin incluir las medidas del cordÃ³n\r\n-Material: Terciopelo, cinta, encaje, metal\r\n- Estilos: ClÃ¡sicos de terciopelo con colgantes tatuaje gÃ³tico, encaje lolita vintage, entre otros.', _binary 0x696D6167656E2F6163632E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:47:52'),
	(7, 7, 'juguetes', 7, 340000, 8, 'COMPRA SEGURO, EMPRESA SERIEDAD Y COMPROMISO!, Somos importadores y distribuidores. Pregunta precios al por mayor de nuestros productos.\r\n\r\n"Se necesita mÃ¡s amor de gente buena" Distribuciones Jaivisa.\r\n\r\nDivierte llevando a tus personajes de cars a cualquier parte con su amiga niÃ±era.\r\nLleva tu diversiÃ³n a donde tu quieras.\r\n\r\nJuguetes, cuentos, y cualquier producto orientado a la satisfacciÃ³n y desarrollo de los niÃ±os.', _binary 0x696D6167656E2F6A75676574652E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:51:18'),
	(8, 8, 'Herramienta 85pz Copas Rache Carro Moto Pretul', 8, 75000, 9, 'quit de copas con distintos niveles ', _binary 0x696D6167656E2F6865722E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:54:49'),
	(9, 9, 'Herramienta 85pz Copas Rache Carro Moto Pretul', 9, 200000, 14, 'AcÃºstica\r\nÂ¡Hola muchas gracias por visitarnos!\r\nSomos AIRE ARTESANAL una empresa con el mejor servicio y calidad\r\nsanta Isabel bogota enviamos a todo el paÃ­s\r\nMÃ¡s de 12 aÃ±os en mercado libre miles de calificaciones positivas nos respaldan\r\n\r\n(Al comprar le enviaremos un catÃ¡logo con mÃ¡s de 10 colores en existencia)\r\n\r\nEs definitivamente la mejor guitarra acÃºstica del mercado en su rango de precio\r\nFabricada en Colombia por AIRE ARTESANAL\r\nAccesorios adicionales con su compra\r\nForro con bolsillo y correa\r\nPÃºa\r\nAfinador electrÃ³nico', _binary 0x696D6167656E2F6769742E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:56:03'),
	(10, 10, 'Conjunto Blusa Y Falda Tubo Moda ', 10, 80000, 6, 'CONJUNTO BLUSA Y FALDA TUBO\r\n_________________________________________________________________________\r\nDisponible con diferentes mangas y en diferentes colores.\r\n\r\nâ€¢ Material: AlgodÃ³n Licrado.\r\nâ€¢ Manga: Corta. TambiÃ©n disponible con manga larga, 3/4, 2/4 o sisa.\r\nâ€¢ Falda: Tubo. TambiÃ©n disponible con falda rotonda.\r\nâ€¢ Colores: blanco, negro, vino tinto, rojo, verde claro, verde militar, verde oscuro, cafÃ©, beige, gris claro, gris oscuro, azul oscuro, azul rey, azul agua, azul acero, mostaza, morado, uva, lila, naranja, rosado y fucsia.\r\n\r\nPRODUCTO 100% NACIONAL', _binary 0x696D6167656E2F6D6F2E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 21:58:13'),
	(11, 11, 'Llano De Paja 9, Piedecuesta', 11, 1500000, 1, 'casa campestre. cuatro habitaciones, 5 baÃ±os, balcones, sala de juegos, zona humeda , kiosco, frutales, parqueaderos,cuarto ropas,cuarto herramientas, dos niveles, conjunto cerrado. a dos minutos via principal, ideal para hacer ciclismo, natacion, aislamiento,caminar, abundante vejetacion', _binary 0x696D6167656E2F696E6D2E6A7067, 12, 'activo', 'root@localhost', 'INSERT', '2020-05-25 22:01:25'),
	(12, 9, 'Guitarra acustica ', 9, 200000, 14, 'AcÃºsticaÂ¡Hola muchas gracias por visitarnos!Somos AIRE ARTESANAL una empresa con el mejor servicio y calidadsanta Isabel bogota enviamos a todo el paÃ­sMÃ¡s de 12 aÃ±os en mercado libre miles de calificaciones positivas nos respaldan(Al comprar le enviaremos un catÃ¡logo con mÃ¡s de 10 colores en existencia)Es definitivamente la mejor guitarra acÃºstica del mercado en su rango de precioFabricada en Colombia por AIRE ARTESANALAccesorios adicionales con su compraForro con bolsillo y correaPÃºaAfinador electrÃ³nico', _binary 0x696D6167656E2F6769742E6A7067, 12, 'activo', 'root@localhost', 'UPDATE', '2020-05-25 22:03:53');
/*!40000 ALTER TABLE `auditoria_producto` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.auditoria_usuarios
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla proyecto.auditoria_usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `auditoria_usuarios` DISABLE KEYS */;
INSERT INTO `auditoria_usuarios` (`id_audit`, `id_usuario`, `nombre_aud`, `email_aud`, `password_aud`, `celular_aud`, `whatsapp_aud`, `direccion_aud`, `ciudad_aud`, `usuario`, `img`, `fecha_system`, `proceso`) VALUES
	(1, 12, 'santy', 'santyp638@gmail.com', '123', '3102942891', '3102942891', 'putumayo', 'villagarzon', 'root@localhost', NULL, '2020-05-25 21:30:41', 'INSERT');
/*!40000 ALTER TABLE `auditoria_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.categoria_producto
CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto.categoria_producto: ~11 rows (aproximadamente)
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

-- Volcando estructura para tabla proyecto.producto
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto.producto: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`id`, `nombre`, `id_categoria_producto`, `valor`, `unidades`, `especificacion`, `imagen`, `id_usuarios`, `estado`) VALUES
	(1, 'carro', 1, 32000000, 4, 'Tenemos los mejores planes financieros para que adquiera este vehiculo, recibimos su usado en parte de pago de todas las marcas con la mayor garantia de el mercado, permitanos asesorarle en todo el proceso y ofrecemos:\r\n\r\n-plan tradicional con plazos hasta 72 meses\r\n-14 cuotas\r\n-periodos de gracia\r\n-leasing\r\n-sumando ingresos\r\n-reportados con paz y salvos\r\n-50-50 y muchos mas\r\n\r\nKia Plaza s.a\r\nAsesor Comercial\r\nAndres Caceres', _binary 0x696D6167656E2F636172726F2E6A7067, 12, 'activo'),
	(2, 'Motorola', 2, 1200000, 6, 'compatible con lg k20 v | lg k20 plus | lg grace | lg k10 2017 | lg v5\r\n* diseÃ±o de doble capa nuestro cinturÃ³n funda hÃ­brida tiene un interior de silicona suave que envuelve tu telÃ©fono y proporciona para agarre de nuestro exterior de plÃ¡stico duro una protecciÃ³n resistente de caÃ­das y golpes\r\n* construido en funciÃ³n una caracterÃ­stica adicional que facilita la multitarea mientras que usted ve sus programas favoritos o media\r\n* diseÃ±os Ãºnicos muestre su telÃ©fono con uno de estos diseÃ±os ideal para niÃ±os o niÃ±as\r\n* producto de alta calidad a un precio asequible estar seguro de que tu mÃ³vil estarÃ¡ protegido y elegante con esta fundaciÃ³n', _binary 0x696D6167656E2F63656C756C61722E6A7067, 12, 'activo'),
	(3, 'licuadora oster', 3, 145000, 15, '*Sistema de acople totalmente metÃ¡lico All-Metal DriveÂ®, de mÃ¡xima durabilidad\r\n*Vaso de vidrio refractario BoroclassÂ®, resiste cambios bruscos de temperatura\r\n*Cuchilla picahielo de acero inoxidable\r\n*Vaso con capacidad de 1,25 litros\r\n*Control giratorio de 3 velocidades\r\n*Acabado cromado\r\n*Potente motor de 600 watts', _binary 0x696D6167656E2F6C69637561646F72612E6A7067, 12, 'activo'),
	(4, 'cicla ', 4, 358000, 2, 'Â«Â«â€¢ DESCRIPCIÃ“N â€¢Â»Â»\r\n\r\nMarca: RAD Cycle Products\r\nModelo: 2004 RAD Bike Hoist 2 Pack\r\nMedidas del Paquete: 12cm x 27 cm x 27 cm\r\nPeso Aprox: 8.1 Lb\r\n\r\n- Los ganchos estÃ¡n diseÃ±ados con un revestimiento de goma para proteger su bicicleta de araÃ±azos\r\n- La robusta ingenierÃ­a le permite levantar pesadas bicicletas de 100 libras de capacidad', _binary 0x696D6167656E2F6369636C612E6A7067, 12, 'activo'),
	(5, 'cremas faciales ', 5, 25000, 12, 'Multibeneficios Libertage CC Cream Matte', _binary 0x696D6167656E2F62656C6C657A612E6A7067, 12, 'activo'),
	(6, 'Gargantillas Mujer Choker Set 14unds Collar', 6, 35000, 15, 'Son 14 Gargantillas Set Collares de terciopelo para Mujeres, 14 estilos diferentes para todo tipo de ocasiÃ³n.\r\n**********************************************************************\r\n* DESCRIPCIÃ“N DEL PRODUCTO:\r\n- Estilos: ClÃ¡sicos de terciopelo con colgantes tatuaje gÃ³tico, encaje lolita vintage, entre otros.\r\n- Cantidad: 14 Gargantillas (Mdelos son los de la primera foto)\r\n\r\n**********************************************************************\r\n* ESPECIFICACIONES:\r\n\r\n- Marca: Alpha Element\r\n- Tipo de ArtÃ­culo: Collares Gargantillas\r\n- Estilo: Punk\r\n- Tipo de Metales: AleaciÃ³n de zinc\r\n- Genero: Mujer\r\n- Tipo de Cadena: Cadena de Eslabones\r\n-Medidas: Largo de Las Gargantillas incluyendo Eslabones 37cm (min) hasta 40 cm ( max)segÃºn diseÃ±o de la gargantilla.sin incluir las medidas del cordÃ³n\r\n-Material: Terciopelo, cinta, encaje, metal\r\n- Estilos: ClÃ¡sicos de terciopelo con colgantes tatuaje gÃ³tico, encaje lolita vintage, entre otros.', _binary 0x696D6167656E2F6163632E6A7067, 12, 'activo'),
	(7, 'juguetes', 7, 340000, 8, 'COMPRA SEGURO, EMPRESA SERIEDAD Y COMPROMISO!, Somos importadores y distribuidores. Pregunta precios al por mayor de nuestros productos.\r\n\r\n"Se necesita mÃ¡s amor de gente buena" Distribuciones Jaivisa.\r\n\r\nDivierte llevando a tus personajes de cars a cualquier parte con su amiga niÃ±era.\r\nLleva tu diversiÃ³n a donde tu quieras.\r\n\r\nJuguetes, cuentos, y cualquier producto orientado a la satisfacciÃ³n y desarrollo de los niÃ±os.', _binary 0x696D6167656E2F6A75676574652E6A7067, 12, 'activo'),
	(8, 'Herramienta 85pz Copas Rache Carro Moto Pretul', 8, 75000, 9, 'quit de copas con distintos niveles ', _binary 0x696D6167656E2F6865722E6A7067, 12, 'activo'),
	(9, 'Guitarra acustica ', 9, 200000, 14, 'AcÃºsticaÂ¡Hola muchas gracias por visitarnos!Somos AIRE ARTESANAL una empresa con el mejor servicio y calidadsanta Isabel bogota enviamos a todo el paÃ­sMÃ¡s de 12 aÃ±os en mercado libre miles de calificaciones positivas nos respaldan(Al comprar le enviaremos un catÃ¡logo con mÃ¡s de 10 colores en existencia)Es definitivamente la mejor guitarra acÃºstica del mercado en su rango de precioFabricada en Colombia por AIRE ARTESANALAccesorios adicionales con su compraForro con bolsillo y correaPÃºaAfinador electrÃ³nico', _binary 0x696D6167656E2F6769742E6A7067, 12, 'activo'),
	(10, 'Conjunto Blusa Y Falda Tubo Moda ', 10, 80000, 6, 'CONJUNTO BLUSA Y FALDA TUBO\r\n_________________________________________________________________________\r\nDisponible con diferentes mangas y en diferentes colores.\r\n\r\nâ€¢ Material: AlgodÃ³n Licrado.\r\nâ€¢ Manga: Corta. TambiÃ©n disponible con manga larga, 3/4, 2/4 o sisa.\r\nâ€¢ Falda: Tubo. TambiÃ©n disponible con falda rotonda.\r\nâ€¢ Colores: blanco, negro, vino tinto, rojo, verde claro, verde militar, verde oscuro, cafÃ©, beige, gris claro, gris oscuro, azul oscuro, azul rey, azul agua, azul acero, mostaza, morado, uva, lila, naranja, rosado y fucsia.\r\n\r\nPRODUCTO 100% NACIONAL', _binary 0x696D6167656E2F6D6F2E6A7067, 12, 'activo'),
	(11, 'Llano De Paja 9, Piedecuesta', 11, 1500000, 1, 'casa campestre. cuatro habitaciones, 5 baÃ±os, balcones, sala de juegos, zona humeda , kiosco, frutales, parqueaderos,cuarto ropas,cuarto herramientas, dos niveles, conjunto cerrado. a dos minutos via principal, ideal para hacer ciclismo, natacion, aislamiento,caminar, abundante vejetacion', _binary 0x696D6167656E2F696E6D2E6A7067, 12, 'activo');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto.usuarios
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `celular`, `whatsapp`, `direccion`, `ciudad`, `img`) VALUES
	(12, 'santy', 'santyp638@gmail.com', '123', '3102942891', '3102942891', 'putumayo', 'villagarzon', _binary 0x696D6167656E2F75732E706E67);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para disparador proyecto.producto_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `producto_after_insert` AFTER INSERT ON `producto` FOR EACH ROW BEGIN

			
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (new.id,new.nombre,new.id_categoria_producto,new.valor,new.unidades,new.especificacion,new.imagen,new.id_usuarios,new.estado,user(),'INSERT');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador proyecto.producto_after_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `producto_after_update` AFTER UPDATE ON `producto` FOR EACH ROW BEGIN


	
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (NEW.id,new.nombre,NEW.id_categoria_producto,NEW.valor,NEW.unidades,NEW.especificacion,NEW.imagen,NEW.id_usuarios,NEW.estado,user(),'UPDATE');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador proyecto.producto_before_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `producto_before_delete` BEFORE DELETE ON `producto` FOR EACH ROW BEGIN
	
			insert into auditoria_producto (id_producto,nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado,usuario,accion)
			values (OLD.id,OLD.nombre,OLD.id_categoria_producto,OLD.valor,OLD.unidades,OLD.especificacion,OLD.imagen,OLD.id_usuarios,OLD.estado,user(),'DELETE');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador proyecto.usuarios_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `usuarios_after_insert` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN

			
			insert into auditoria_usuarios (id_usuario,nombre_aud,email_aud,password_aud,celular_aud,whatsapp_aud,direccion_aud,ciudad_aud,usuario,proceso)
			values (new.id,new.nombre,new.email,new.password,new.celular,new.whatsapp,new.direccion,new.ciudad,user(),'INSERT');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador proyecto.usuarios_after_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `usuarios_after_update` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
	
			insert into auditoria_usuarios (id_usuario,nombre_aud,email_aud,password_aud,celular_aud,whatsapp_aud,direccion_aud,ciudad_aud,usuario,proceso)
			values (NEW.id,NEW.nombre,NEW.email,NEW.password,NEW.celular,NEW.whatsapp,NEW.direccion,NEW.ciudad,user(),'UPDATE');
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
