-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela web.blog: ~3 rows (aproximadamente)
DELETE FROM `blog`;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`blog_codigo`, `blog_bloginfo_codigo`, `blog_blogimgs_codigo`, `blog_usuario_codigo`) VALUES
	(65, 64, 51, 1),
	(66, 65, 52, 1),
	(67, 66, 53, 1);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Copiando dados para a tabela web.blogimgs: ~12 rows (aproximadamente)
DELETE FROM `blogimgs`;
/*!40000 ALTER TABLE `blogimgs` DISABLE KEYS */;
INSERT INTO `blogimgs` (`blogimgs_codigo`, `blogimgs_nome`, `blogimgs_random`) VALUES
	(42, 0, 1),
	(43, 0, 1),
	(44, 0, 1),
	(45, 0, 0),
	(46, 0, 0),
	(47, 0, 0),
	(48, 0, 0),
	(49, 0, 0),
	(50, 0, 0),
	(51, 0, 0),
	(52, 0, 0),
	(53, 0, 6);
/*!40000 ALTER TABLE `blogimgs` ENABLE KEYS */;

-- Copiando dados para a tabela web.bloginfo: ~12 rows (aproximadamente)
DELETE FROM `bloginfo`;
/*!40000 ALTER TABLE `bloginfo` DISABLE KEYS */;
INSERT INTO `bloginfo` (`bloginfo_codigo`, `bloginfo_titulo`, `bloginfo_corpo`, `bloginfo_data`, `bloginfo_img`) VALUES
	(55, 0, 0, 2023, NULL),
	(56, 0, 0, 2023, NULL),
	(57, 0, 0, 2023, NULL),
	(58, 0, 0, 2023, NULL),
	(59, 0, 0, 2023, NULL),
	(60, 0, 0, 2023, NULL),
	(61, 0, 0, 2023, NULL),
	(62, 0, 0, 2023, NULL),
	(63, 0, 0, 2023, NULL),
	(64, 0, 0, 2023, NULL),
	(65, 0, 0, 2023, NULL),
	(66, 0, 0, 1970, NULL);
/*!40000 ALTER TABLE `bloginfo` ENABLE KEYS */;

-- Copiando dados para a tabela web.usuario: ~2 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`usuario_codigo`, `usuario_nome`, `usuario_email`, `usuario_senha`) VALUES
	(1, 0, 0, 123),
	(2, 0, 0, 321);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
