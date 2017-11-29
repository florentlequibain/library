-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 29 Novembre 2017 à 10:47
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `idBook` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(25) NOT NULL,
  `releaseDate` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `summary` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `userCode` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `books`
--

INSERT INTO `books` (`idBook`, `title`, `author`, `releaseDate`, `type`, `summary`, `status`, `userCode`) VALUES
(11, 'Attack from Mars!', 'Mark Hetson', '1964-11-01', 'SF', 'There are three keys to being fully charged each day: doing work that provides meaning to your life, having positive social interactions with others, and taking care of yourself so you have the energy you need to do the first two things. Trying to maximize your own happiness can actually make you feel self-absorbed and lonely, but giving more can drive meaning and happiness in your life. People who spend money on experiences are happier than those who spend on material things.', 'available', 0),
(12, 'Kitchen Murder', 'Frank Hust', '1978-11-07', 'thriller', 'Everything in life is an invention. If you choose to look at your life in a new way, then suddenly your problems fade away. One of the best ways to do this is to focus on the possibilities surrounding you in any situation rather than slipping into the default mode of measuring and comparing your life to others.', 'available', 0),
(13, 'My wife an Conan', 'Chris Montez', '1982-11-02', 'fantasy', 'There are many ways to make profit and it is unlikely that your business does all of them. People will pay different prices for the same thing in different situations (think: Coke in the grocery store vs. Coke in a nice restaurant). Good profit models are easy to brainstorm and hard to execute.', 'available', 0),
(14, 'Womens on Venus', 'karl Holes', '1989-11-08', 'SF', 'Know when to fight and when not to fight: avoid what is strong and strike at what is weak. Know how to deceive the enemy: appear weak when you are strong, and strong when you are weak. Know your strengths and weaknesses: if you know the enemy and know yourself, you need not fear the result of a hundred battles.\r\n\r\n', 'available', 0),
(15, 'The closed door', 'Paul Veroven', '1998-11-01', 'thriller', 'To become a better writer, you have to write more. Writing reveals the story because you have to write to figure out what you’re writing about. Don’t judge your initial work too harshly because every writer has terrible first drafts.', 'available', 0),
(16, 'My friend the Gnome', 'Sid Barret', '1969-10-01', 'fantasy', 'Steve Martin was one of the most successful comedians of his generation. In his words, his career involved “10 years spent learning, 4 years spent refining, and 4 years spent in wild success.” This fantastic book provided beautiful insights not only into the details of his comedy act, but also into his early life and career development.', 'available', 0),
(17, 'Planet vegetables', 'Stephen Queen', '1987-11-18', 'SF', 'The compound effect is the strategy of reaping huge rewards from small, seemingly insignificant actions. You cannot improve something until you measure it. Always take 100 percent responsibility for everything that happens to you.', 'available', 0),
(18, 'The lawnmover killer', 'Aaron Neuville', '1987-11-06', 'thriller', 'The United States is engaging in a modern form of slavery by using the World Bank and other international organizations to offer huge loans to developing nations for construction projects and oil production. On the surface this appears to be generous, but the money is only awarded to a country if it agrees to hire US construction firms, which ensures a select few people get rich. Furthermore, the loans are intentionally too big for any developing nation to repay and this debt burden virtually guarantees the developing nation will support the political interests of the United States.', 'available', 0),
(19, 'A hundred swords', 'Thanis Joplus', '1954-11-05', 'fantasy', 'Ultimately, profit is the only valid metric for guiding a company, and there are only three ways to influence profit: price, volume, and cost. Of these three factors, prices get the least attention, but have the greatest impact. The price a customer is willing to pay, and therefore the price a company can achieve, is always a reflection of the perceived value of the product or service in the customer’s eyes.', 'available', 0),
(20, 'Flying saucers can\'t fly', 'Hanz Zimmermans', '1945-11-05', 'SF', 'Randomness, chance, and luck influence our lives and our work more than we realize. Because of hindsight bias and survivorship bias, in particular, we tend to forget the many who fail, remember the few who succeed, and then create reasons and patterns for their success even though it was largely random. Mild success can be explainable by skills and hard work, but wild success is usually attributable to variance and luck.', 'available', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `userCode` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `name`, `userCode`) VALUES
(1, 'Frank', 1001),
(2, 'Paul', 1002),
(3, 'Lucy', 1003),
(4, 'Hugues', 1004),
(5, 'Audray', 1005),
(6, 'Jack', 1006),
(7, 'John', 1007),
(8, 'Patty', 1008),
(9, 'Richard', 1009),
(10, 'Ben', 1010);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idBook`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
