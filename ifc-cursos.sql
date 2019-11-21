-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2019 às 01:48
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifc-cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `grau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `campus` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `semestres` int(11) NOT NULL,
  `cargaHoraria` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `turno` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`, `grau`, `campus`, `semestres`, `cargaHoraria`, `vagas`, `turno`) VALUES
(1, 'Agronomia NOVO', 'Bacharelado', 'Camboriu', 6, 1200, 40, 'Noturno'),
(17, 'Sistemas para Internet', 'Bacharelado', 'Camboriú', 8, 4000, 45, 'Matutino'),
(9, 'Engenharia Elétrica', 'Bacharelado', 'Blumenau', 10, 3660, 40, 'Noturno'),
(10, 'Pedagogia', 'Licenciatura', 'Blumenau', 8, 3410, 40, 'Noturno'),
(11, 'Agronomia', 'Bacharelado', 'Camboriú', 10, 3935, 40, 'Integral'),
(12, 'Matemática', 'Licenciatura', 'Camboriú', 8, 2835, 40, 'Noturno'),
(13, 'Negócios Imobiliários', 'Tecnologia', 'Camboriú', 6, 1740, 40, 'Noturno'),
(14, 'Pedagogia', 'Licenciatura', 'Camboriú', 8, 3210, 40, 'Noturno'),
(15, 'Sistemas de Informação', 'Bacharelado', 'Camboriú', 8, 3000, 40, 'Matutino'),
(16, 'Sistemas para Internet', 'Tecnologia', 'Camboriú', 6, 2190, 40, 'Noturno'),
(18, 'Sistemas para Internet', 'Bacharelado', 'Camboriú', 8, 4000, 45, 'Matutino'),
(19, 'Novo curso', 'Bacharelado', 'Araquari', 10, 5000, 45, 'Integral'),
(20, 'Novo new ', 'Tecnologia', 'Camboriú', 10, 4000, 45, 'Noturno'),
(21, 'Novo curso', 'teste', 'camboriu', 12, 4000, 45, 'Noturno'),
(22, 'novo curso', 'Bacharelado', 'Camboriu', 8, 4000, 45, 'Noturno'),
(23, 'novo curso', 'Bacharelado', 'Camboriu', 8, 4000, 45, 'Noturno'),
(24, 'WebServices', 'asdf', 'fasd', 0, 0, 0, 'sdaf');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
