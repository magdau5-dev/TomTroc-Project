-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2026 at 07:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomtroc`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `disponibilite` varchar(50) NOT NULL DEFAULT 'disponible',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `title`, `author`, `description`, `image`, `disponibilite`, `created_at`) VALUES
(20, 2, 'The Two Towers', 'J.R.R Tolkien', 'Le voyage épique continue dans ce deuxième volet palpitant de la saga légendaire. Alors que les ténèbres s\'amassent, les héros sont mis à l\'épreuve et le destin de la Terre du Milieu est plus que jamais en jeu.', 'theTwoTowers.png', 'disponible', '2026-09-16 13:53:13'),
(21, 3, 'Company Of One', 'Paul Jarvis', 'Une approche rafraîchissante de l\'entrepreneuriat qui remet en question la mentalité de la croissance à tout prix. Découvrez pourquoi rester petit pourrait bien être la meilleure stratégie commerciale.', 'companyOfOne.png', 'disponible', '2026-09-16 13:53:13'),
(22, 4, 'Narnia', 'C.S Lewis', 'Passez la porte de l\'armoire magique et plongez dans un monde peuplé d\'animaux parlants et de batailles épiques. Un chef-d\'œuvre intemporel de la fantasy qui continue d\'enchanter les lecteurs de tous âges.', 'narnia.png', 'non disponible', '2026-09-16 13:53:13'),
(23, 2, 'The Subtle Art Of...', 'Mark Manson', 'Un guide brut, rafraîchissant et honnête pour vivre une vie meilleure. Ce livre tranche dans le vif et vous apprend à accepter vos limites pour vous concentrer uniquement sur ce qui compte vraiment.', 'theSubtleArtOf.png', 'disponible', '2026-09-16 13:53:13'),
(24, 3, 'A Book Full Of Hope', 'Rupi Kaur', 'Un recueil doux et réconfortant, conçu pour apporter de la lumière dans les moments difficiles. Parfait pour quiconque a besoin d\'un rappel que des jours meilleurs sont toujours à venir.', 'aBookFullOfHope.png', 'disponible', '2026-09-16 13:53:13'),
(25, 4, 'Thinking, Fast & Slow', 'Daniel Kahneman', 'Une exploration révolutionnaire de notre esprit par un prix Nobel. Découvrez les deux systèmes qui dictent notre façon de penser, les biais cachés de notre intuition, et apprenez à prendre de meilleures décisions.', 'thinkingFastSlow.png', 'non disponible', '2026-09-16 13:53:13'),
(26, 2, 'Psalms', 'Alabaster', 'Une édition au design époustouflant du livre des Psaumes. Grâce à une typographie soignée et des photographies à couper le souffle, ce livre offre une manière fraîche et méditative d\'aborder la poésie ancienne. test', 'psalms.png', 'disponible', '2026-09-16 13:53:13'),
(27, 3, 'Innovation', 'Matt Ridley', 'Une plongée fascinante dans l\'histoire et les mécanismes de l\'innovation. Découvrez comment naissent les grandes idées et pourquoi certaines réussissent à changer notre monde tandis que d\'autres échouent.', 'innovation.png', 'disponible', '2026-09-16 13:53:13'),
(28, 4, 'Hygge', 'Meik Wiking', 'Le guide définitif de l\'art de vivre à la danoise. Apprenez à créer une atmosphère de chaleur, de confort et de connexion dans votre propre maison pour cultiver votre bien-être au quotidien.', 'hygge.png', 'disponible', '2026-09-16 13:53:13'),
(29, 2, 'Minimalist Graphics', 'Julia Schonlau', 'Une vitrine exceptionnelle du design graphique minimaliste. Parfait pour les créatifs en quête d\'inspiration, ce livre démontre avec brio que dans la communication visuelle, \'moins c\'est souvent plus\'.', 'minimalistGraphics.png', 'disponible', '2026-09-16 13:53:13'),
(30, 3, 'Milwaukee Mission', 'Elder Cooper Low', 'Un récit personnel captivant sur le dévouement et le service. Ces mémoires inspirantes retracent les défis, les rencontres et les triomphes d\'une expérience de mission profondément humaine.', 'milwaukeeMission.png', 'disponible', '2026-09-16 13:53:13'),
(31, 4, 'Delight!', 'Justin Rossow', 'Un guide inspirant pour cultiver la joie et l\'émerveillement dans votre parcours spirituel. Ce livre vous invite à ralentir et à trouver un plaisir profond dans les moments simples du quotidien.', 'delight.png', 'non disponible', '2026-09-16 13:53:13'),
(32, 2, 'Milk & honey', 'Rupi Kaur', 'Un recueil de poésie et de prose profondément émouvant qui explore la survie, l\'amour, la perte et la féminité. Un voyage à travers les moments les plus amers de la vie pour y trouver une douceur inattendue.', 'milkHoney.png', 'disponible', '2026-09-16 13:53:13'),
(33, 3, 'Wabi Sabi', 'Beth Kempton', 'Découvrez le secret japonais d\'une vie parfaitement imparfaite. Un guide transformateur pour trouver la beauté dans le quotidien, accepter le passage du temps et se libérer de la quête épuisante de la perfection.', 'wabiSabi.png', 'disponible', '2026-09-16 13:53:13'),
(35, 2, 'Esther', 'Alabaster', 'Une magnifique exploration visuelle de l\'histoire biblique d\'Esther. Mêlant une photographie contemporaine saisissante à un texte profond, ce livre offre une nouvelle façon de contempler ce récit classique.', 'esther.png', 'disponible', '2026-09-16 13:53:13'),
(40, 2, 'test2', 'test23', 'gggg', 'theSubtleArtOf.png', 'non disponible', '2026-09-25 13:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `content`, `created_at`) VALUES
(1, 4, 2, 'test message', '2026-09-24 23:49:29'),
(2, 2, 4, 'reponse test', '2026-09-24 23:54:02'),
(3, 2, 3, 'test message', '2026-09-25 00:16:15'),
(4, 3, 2, 'reponse message', '2026-09-25 00:16:48'),
(5, 4, 4, 'test message', '2026-09-25 11:43:42'),
(6, 1, 2, 'test', '2026-09-25 13:03:53'),
(7, 2, 1, 'test reponse', '2026-09-25 13:04:22'),
(8, 2, 4, 'test', '2026-09-25 13:24:05'),
(9, 4, 2, 'reponse 1', '2026-09-25 13:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`) VALUES
(1, 'test', 'test@test.com', '$2y$10$Xxl.trxopK4S3kPtH64vF.ORZfpZNLUEdktotOEvMmIIrEXCK0RTK', 'innovation.png', '2026-09-15 23:44:24'),
(2, 'nathalire', 'nathalie@mail.com', '$2y$10$DUQclRWw.uAYAHxp3CvRF.VL0dWqQFy2hM/6wwV1YnCi2iqcEiy36', 'nathalire.png', '2026-09-16 13:45:25'),
(3, 'Alexlecture', 'alexlecture@mail.com', '$2y$10$qbVz6ApQzt3WZzy.PwPE4e6xT1j2skMkMOi1Vw8S3X5qc0/LF98oK', 'alexlecture.png', '2026-09-16 13:48:23'),
(4, 'Sas634', 'sas634@mail.com', '$2y$10$Rc7xy/2aTLlR72B.beJIXua8mRTxcQ2OqmmP5uEJ3bAgTXd7Szx3e', 'sas634.png', '2026-09-16 13:49:01'),
(41, 'test123', 'test123@mail.com', '$2y$10$mVKrMLDdP42.Xo1H8gFRjO7OD/Hhsps4URf8pHzVp9/ciXQ7ZKEN6', 'thinkingFastSlow.png', '2026-09-25 13:25:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_books_users` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_books_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
