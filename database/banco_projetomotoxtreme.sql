SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `end` varchar(150) NOT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dn` date DEFAULT NULL,
  `sexo` enum('Masculino','Feminino','Outro') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `end` varchar(150) NOT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dn` date DEFAULT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `sexo` enum('Masculino','Feminino','Outro') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `ano_fabricacao` year(4) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `cor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
