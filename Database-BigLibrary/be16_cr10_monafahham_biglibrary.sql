-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_monafahham_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_monafahham_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be16_cr10_monafahham_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  `isbn_code` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(80) NOT NULL,
  `publish_date` date NOT NULL,
  `availability` enum('Available','Reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `title`, `image`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES
(1, 'Around the world in 80 days', '62d2939179267.jpg', 864022525, 'Around the World in Eighty Days (French: Le tour du monde en quatre-vingts jours) is an adventure novel by the French writer Jules Verne, first published in French in 1872. In the story, Phileas Fogg of London and his newly employed French valet Passepartout attempt to circumnavigate the world in 80 days on a wager of £20,000 set by his friends at the Reform Club. It is one of Vernes most acclaimed works.', 'DVD', 'Jules', 'Verne', 'Pierre-Jules Hetzel', 'France, Le Temps', '1912-02-03', 'Available'),
(2, 'Daddy long legs', 'daddy-long-legs2.jpg', 864022534, 'Daddy-Long-Legs is a 1912 epistolary novel by the American writer Jean Webster. It follows the protagonist, Jerusha \"Judy\" Abbott, as she leaves an orphanage and is sent to college by a benefactor whom she has never seen.', 'CD', 'Jean', 'Webster', 'Pierre-Jules Hetzel', 'The USA', '1912-03-10', 'Reserved'),
(3, 'The Godfather', 'godfather.jpg', 353671, 'The Godfather is a 1972 American crime film[2] directed by Francis Ford Coppola, who co-wrote the screenplay with Mario Puzo, based on Puzo\'s best-selling 1969 novel of the same name. The film stars Marlon Brando, Al Pacino, James Caan, Richard Castellano, Robert Duvall, Sterling Hayden, John Marley, Richard Conte, and Diane Keaton. It is the first installment in The Godfather trilogy. The story, spanning from 1945 to 1955, chronicles the Corleone family under patriarch Vito Corleone (Brando), focusing on the transformation of his youngest son, Michael Corleone (Pacino), from reluctant family outsider to ruthless mafia boss.', 'DVD', 'Francis', 'Ford Coppola', 'Paramount Pictures', 'The United States', '1972-03-14', 'Available'),
(4, 'Gone with the Wind', 'gone-with-the-wind.jpg', 35365642, 'Gone with the Wind is a 1939 American epic historical romance film adapted from the 1936 novel by Margaret Mitchell. The film was produced by David O. Selznick of Selznick International Pictures and directed by Victor Fleming. Set in the American South against the backdrop of the American Civil War and the Reconstruction era, the film tells the story of Scarlett O\'Hara (Vivien Leigh), the strong-willed daughter of a Georgia plantation owner, following her romantic pursuit of Ashley Wilkes (Leslie Howard), who is married to his cousin, Melanie Hamilton (Olivia de Havilland), and her subsequent marriage to Rhett Butler (Clark Gable).', 'Book', 'Victor', 'Fleming', 'David O. Selznick', 'The United States', '1939-12-15', 'Reserved'),
(5, 'The Great Gatsby', 'greatgatsby.jpg', 35365648, 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan.', 'Book', 'F. Scott', 'Fitzgerald', 'Charles Scribner', 'The United States', '1925-04-10', 'Available'),
(6, 'Little Women', 'little-women.jpg', 35365, 'Little Women is a 2019 American coming-of-age period drama film written and directed by Greta Gerwig. It is the seventh film adaptation of the 1868 novel of the same name by Louisa May Alcott. It chronicles the lives of the March sisters—Jo, Meg, Amy, and Beth—in Concord, Massachusetts, during the 19th century. It stars an ensemble cast consisting of Saoirse Ronan, Emma Watson, Florence Pugh, Eliza Scanlen, Laura Dern, Timothée Chalamet, Meryl Streep, Tracy Letts, Bob Odenkirk, James Norton, Louis Garrel, and Chris Cooper.', 'DVD', 'Greta', 'Gerwig', 'Amy Pascal', 'The United States', '2019-10-07', 'Available'),
(7, 'Pride and Prejudice', 'Pride_and_Prejudice.jpg', 35365644, 'Pride and Prejudice is an 1813 novel of manners by Jane Austen. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness.', 'Book', 'Jane', 'Austen', 'T. Egerton', 'The United Kingdom', '1813-01-28', 'Reserved'),
(8, 'Schindler\'s List', 'schindlers-list1.jpg', 35365641, 'Schindler\'s List is a 1993 American epic historical drama film directed and produced by Steven Spielberg and written by Steven Zaillian. It is based on the 1982 non-fiction novel Schindler\'s Ark by Australian novelist Thomas Keneally. The film follows Oskar Schindler, a German industrialist who saved more than a thousand mostly Polish-Jewish refugees from the Holocaust by employing them in his factories during World War II. It stars Liam Neeson as Schindler, Ralph Fiennes as SS officer Amon Göth, and Ben Kingsley as Schindler\'s Jewish accountant Itzhak Stern.', 'DVD', 'Steven', ' Spielberg', 'Amblin Entertainment Universal Pictures', 'Washington, D.C.', '1993-12-15', 'Reserved'),
(9, 'The Grapes of Wrath', 'the-grapes-of-wrath1.jpg', 35365624, 'The Grapes of Wrath is an American realist novel written by John Steinbeck and published in 1939.[2] The book won the National Book Award[3] and Pulitzer Prize[4] for fiction, and it was cited prominently when Steinbeck was awarded the Nobel Prize in 1962.', 'Book', 'John', 'Steinbeck', 'The Viking Press-James Lloyd', 'The United States', '1939-05-14', 'Available'),
(10, 'Titanic', 'titanic.png', 353656413, 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron. Incorporating both historical and fictionalized aspects, it is based on accounts of the sinking of the RMS Titanic, and stars Leonardo DiCaprio and Kate Winslet as members of different social classes who fall in love aboard the ship during its ill-fated maiden voyage. Also starring are Billy Zane, Kathy Bates, Frances Fisher, Gloria Stuart, Bernard Hill, Jonathan Hyde, Victor Garber, and Bill Paxton.', 'DVD', 'James', 'Cameron', 'Jon Landau', 'North America', '1997-12-01', 'Available'),
(11, 'War and Peace', 'war-and-peace.jpg', 35365665, 'War and Peace (Russian: Война и мир, romanized: Voyna I mir; pre-reform Russian: Война и миръ; [vɐjˈna I ˈmʲir]) is a literary work mixed with chapters on history and philosophy by the Russian author Leo Tolstoy. It was first published serially, then published in its entirety in 1869. It is regarded as one of Tolstoy\'s finest literary achievements and remains an internationally praised classic of world literature.', 'Book', 'Leo', 'Tolstoy', 'The Russian Messenger', 'Russia', '1865-05-10', 'Available'),
(12, 'The Dark Knight', 'dark-Knight.jpg', 35361, 'The Dark Knight is a 2008 superhero film directed by Christopher Nolan from a screenplay he co-wrote with his brother Jonathan. Based on the DC Comics superhero Batman, it is the sequel to Batman Begins (2005) and the second installment in The Dark Knight Trilogy. In the film\'s plot, the superhero vigilante Batman, Police Lieutenant James Gordon, and District Attorney Harvey Dent form an alliance to dismantle organized crime in Gotham City, but their efforts are derailed by the intervention of an anarchistic mastermind, the Joker, who seeks to test how far Batman will go to save the city from complete chaos. The ensemble cast includes Christian Bale, Michael Caine, Heath Ledger, Gary Oldman, Aaron Eckhart, Maggie Gyllenhaal, and Morgan Freeman.\r\n\r\n', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures Legendary Pictures', 'The United Kingdom', '2008-07-14', 'Reserved'),
(13, 'Interstellar', 'interstellar.jpg', 35365672, 'Interstellar is a 2014 epic science fiction film co-written, directed and produced by Christopher Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, Matt Damon, and Michael Caine. Set in a dystopian future where humanity is struggling to survive, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind.', 'CD', 'Christopher', 'Nolan', 'Emma Thomas', 'North America', '2014-11-26', 'Reserved'),
(14, 'Harry Potter', 'harry-potter.jpg', 35365456, 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry\'s struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic and subjugate all wizards and Muggles (non-magical people).', 'Book', 'J. K.', 'Rowling', 'Bloomsbury Publishing', 'The United Kingdom', '1997-06-26', 'Available'),
(15, 'The Terminator', 'terminators.jpg', 353621, 'The Terminator is a 1984 American science fiction action film directed by James Cameron. It stars Arnold Schwarzenegger as the Terminator, a cyborg assassin sent back in time from 2029 to 1984 to kill Sarah Connor (Linda Hamilton), whose unborn son will one day save mankind from extinction by Skynet, a hostile artificial intelligence in a post-apocalyptic future. Kyle Reese (Michael Biehn) is a soldier sent back in time to protect Sarah. The screenplay is credited to Cameron and producer Gale Anne Hurd, while co-writer William Wisher Jr. received an \"additional dialogue\" credit.\r\n\r\n', 'DVD', 'James', 'Cameron', 'Hemdale Pacific Western', 'The United States', '1984-10-26', 'Reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
