-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 02:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentsassistantua`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`,`username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL, 
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'admin', 'admin2@gmail.com', '$2y$10$IniSvVxmYDV0SdQQsvHek.3gYWeTKEiK.LkCBH7uplDOnL.k6fXpe');

-- -----------------------------------------------------------
--
-- Table structure for table `dm`
--
--

CREATE TABLE `ID_7263`
(
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `option5` text NOT NULL,
  `answer` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ID_7263`
--

INSERT INTO `id_7263` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `answer`, `reason`) VALUES
(1, '1.	Haw is the last segment of scorpions cold?', 'chelicerae', 'pedipalps', 'mandibles', 'maxillae', 'telsons', 5, ' '),
(2, '2.	Haw is the molting process in arthropods cold?', 'ecdysis', 'tagmatization', 'metamorphosis', 'paedomorphosis', 'cephalization', 3, ' '),
(3, '3.	How many body parts does an insect have? ', 'four', 'three', 'six', 'eight', 'two', 2, ' '),
(4, '4.	How many pairs of antennas Insects have?', 'four', 'three', 'one', 'eight', 'two', 3, ' '),
(5, '5.	How many pairs of legs does an insect have?', 'four', 'three', 'six', 'eight', 'two', 2, ' '),
(6, '6.	Indicate medical importance of Cyclops', 'Cyclopes are intermediate hosts of the fish tapeworm (Diphyllobothrium latum) and Dracunculus medinensis', 'Cyclopes are intermediate hosts of the lung fluke (Paragonimus westermani)', 'Cyclopes are intermediate hosts of the beef tapeworm (Taenia saginata)', 'Cyclopes are intermediate host of the pork tapeworm (Taenia solium)', 'Non of the above', 1, ' '),
(7, '7.	Indicate mode by which bloodsucking flies transmit diseases.', 'Indirect mechanical', 'Direct mechanical', 'Physical', 'Hereditary', 'Direct mechanical and biologic', 5, ' '),
(8, '8.	Indicate mode by which nonbloodsucking flies transmit diseases.', 'Indirect mechanical', 'Direct mechanical', 'Biologic', 'Hereditary', 'All of the above', 1, ' '),
(9, '9.	Indicate the medically important orders of Class Insecta:', 'Anoplura', 'Hemiptera', 'Diptera', 'Siphonaptera', 'All of the above', 5, ' '),
(10, '10.	Indicate the place of spider’s poisonous glands location', 'distal end of pedipalp', 'close to base of chelicerae', 'the last segment of the abdomen', 'the middle segment of abdomen', 'All of the above', 2, ' '),
(11, '11.	Indicate the representatives of Order Hemiptera ', 'Bugs', ' Fleas', 'Ants', 'Mosquitoes', 'Lice', 1, ' '),
(12, '12.	Insects have _________ pairs of antennas.', 'four', 'three', 'one', 'eight', 'two', 3, ' '),
(13, '13.	Insects can be classified by _______.', 'looking at their eyes', 'looking at their wings', 'their flying patterns', 'what they eat', 'their behaviors', 2, ' '),
(14, '14.	Ixodes ricinus spread:', ' \r\n\r\n	  malaria \r\n\r\n', 'Lyme disease', ' \r\n\r\n 	  Chagas disease', ' \r\n\r\n 	  Sleeping sickness', ' \r\n\r\n	  Plague', 2, ' '),
(15, '15.	Ixodes ricinus spread:', ' \r\n\r\n	  malaria \r\n\r\n', 'Viral diseases', ' \r\n\r\n\r\n 	  Chagas disease', ' \r\n\r\n 	  Sleeping sickness', ' \r\n\r\n	  Plague', 2, ' '),
(16, '16.	Kissing bugs spread', ' \r\n\r\n	  malaria', ' \r\n\r\n	  Lyme disease', ' \r\n\r\n', 'Chagas disease \r\n\r\n 	  Sleeping sickness', ' \r\n\r\n	  Plague', 3, ' '),
(17, '17.	Lyme disease is transmitted by:   ', '\r\n\r\n	  Kissing bugs. \r\n\r\n', 'Ixodes ricinus', ' \r\n\r\n 	  Mosquito Culex..', ' \r\n\r\n 	  Mosquito Anopheles.', ' \r\n\r\n	  Houseflies.', 2, ' '),
(18, '18.	Malaria is transmitted by: \r\n\r\n', 'female Anopheles', ' \r\n\r\n	  Culex', ' \r\n\r\n 	  male Anopheles', '\r\n\r\n 	  Housefly', ' \r\n\r\n	  Kissing bugs', 1, ' '),
(19, '19.	Malaria is transmitted by:   \r\n\r\n', 'Anopheles', ' \r\n\r\n	  Culex', ' \r\n\r\n 	  Aedes', ' \r\n\r\n 	  Housefly', ' \r\n\r\n	  Kissing bugs', 1, ' '),
(20, '20.	Members of the arachnid class', ' \r\n\r\n	  crabs \r\n\r\n', 'spider', ' \r\n\r\n 	  mollusks (clams)', ' \r\n\r\n 	  crustacea', ' \r\n\r\n	  mosquito', 2, ' '),
(21, '21.	 Members of the arachnid class', ' \r\n\r\n	  crabs \r\n\r\n', 'itch mite', ' \r\n\r\n 	  house fly', ' \r\n\r\n 	  fruit fly', ' \r\n\r\n	  mosquito', 2, ' '),
(22, '22.	Members of the arachnid class', ' \r\n\r\n	  Black fly \r\n\r\n', 'Ixodes persulcatus', ' \r\n\r\n 	  Pediculus humanus capitis', ' \r\n\r\n 	  Mosquito Anopheles', ' \r\n\r\n	  Glossina palpalis', 2, ' '),
(23, '23.	Members of the arachnid class \r\n\r\n\r\n', 'Ixodes ricinus', ' \r\n\r\n	  Musca domestica', ' \r\n\r\n 	  Pediculus humanus capitis', ' \r\n\r\n 	  Pediculus humanus humanus', ' \r\n\r\n	  Black fly', 1, ' '),
(24, '24.	 Members of the arachnid class', ' \r\n\r\n	  Musca domestica', ' \r\n\r\n	  Black fly', ' \r\n\r\n 	  Pediculus humanus capitis', ' \r\n\r\n 	  sandfly \r\n\r\n', 'Ornithodorus papillipes', 5, ' '),
(25, '25.	Members of the arachnid class', ' \r\n\r\n	  Musca domestica', ' \r\n\r\n	  Black fly', ' \r\n\r\n 	  Pediculus humanus capitis', ' \r\n\r\n 	  sandfly \r\n\r\n', 'Sarcoptes scabiei', 5, ' '),
(26, '26.	Members of the arachnid class', ' \r\n\r\n	  Musca domestica', ' \r\n\r\n	  Black fly \r\n\r\n', 'Desmodex folliculorum', ' \r\n\r\n 	  sandfly', ' \r\n\r\n	  Pediculus humanus capitis', 3, ' '),
(27, '27.	Members of the arachnid class', ' \r\n\r\n	  crabs', ' \r\n\r\n	  fruit fly', ' \r\n\r\n 	 house fly\r\n\r\n', 'hard-bodied ticks', ' \r\n\r\n	  mosquito', 4, ' '),
(28, '28.	Members of the arachnid class \r\n\r\n', 'tarantula ', '\r\n\r\n	  crabs', ' \r\n\r\n 	  mollusks\r\n(clams)', ' \r\n\r\n 	  fruit fly', ' \r\n\r\n	  mosquito', 1, ' '),
(29, '29.	Members of the arachnid class', ' \r\n\r\n	  crabs \r\n\r\n', 'black widow spider', '\r\n\r\n 	  mollusks\r\n(clams)', ' \r\n\r\n 	  fruit fly', ' \r\n\r\n	  mosquito', 2, ' '),
(30, '30.	Members of the Hard -bodied ticks', 'Ornithodorus papillipes', 'Desmodex folliculorum', 'Pediculus humanus capitis', 'Sarcoptes scabiei', 'Dermacentor pictus', 5, ' '),
(31, '31.	Members of the Hard -bodied ticks', 'Ixodes ricinus', 'Desmodex folliculorum', 'Pediculus humanus capitis', 'Sarcoptes scabiei', 'Ornithodorus papillipes', 1, ' '),
(32, '32.	 Members of the Hard -bodied ticks', 'Ixodes persulcatus', 'Desmodex folliculorum', 'Pediculus humanus capitis', 'Sarcoptes scabiei', 'Sarcoptes scabiei', 1, ' '),
(33, '33.	Members of the insects class', 'mosquito', 'itch mite', 'crayfishes', 'hard-bodied ticks', 'soft-bodied ticks', 1, ' '),
(34, '34.	Members of the insects class', ' \r\n\r\n	  crayfishes', ' \r\n\r\n	  itch mite', 'house fly', 'hard-bodied ticks', 'soft-bodied ticks', 3, ' '),
(35, '35.	Members of the insects class', 'hard-bodied ticks', 'itch mite', 'crayfishes', 'fleas', 'soft-bodied ticks', 4, ' '),
(36, '36.	 Members of the insects class', 'hard-bodied ticks', 'tch mite', 'lice', 'crayfishes', 'soft-bodied ticks', 5, ' '),
(37, '37.	Members of the insects class', ' \r\n\r\n	  hard-bodied ticks', ' \r\n\r\n	  itch mite \r\n\r\n', 'bugs', ' \r\n\r\n 	  crayfishes', ' \r\n\r\n	  soft-bodied ticks', 3, ' '),
(38, '38.	Members of the insects class', ' \r\n\r\n	  Ixodes ricinus', ' \r\n\r\n	  Ixodes persulcatus \r\n\r\n\r\n', 'Pediculus humanus capitis', ' \r\n\r\n 	  Sarcoptes scabiei', ' \r\n\r\n	  Ornithodorus papillipes', 3, ' '),
(39, '39.	Members of the insects class', ' \r\n\r\n	  Ixodes ricinus', ' \r\n\r\n	  Ixodes persulcatus', ' \r\n\r\n 	  Sarcoptes scabiei \r\n\r\n', 'Pediculus humanus humanus', ' \r\n\r\n	  Ornithodorus papillipes', 4, ' '),
(40, '40.	Members of the insects class', ' \r\n\r\n	  Ixodes ricinus', ' \r\n\r\n	  Ixodes persulcatus', ' \r\n\r\n 	  Sarcoptes scabiei', ' \r\n\r\n 	  Ornithodorus papillipes \r\n\r\n', 'Deer fly', 5, ' '),
(41, '41.	Members of the insects class', ' \r\n\r\n	  Ixodes ricinus \r\n\r\n', 'Black fly', ' \r\n\r\n 	  Sarcoptes scabiei', ' \r\n\r\n 	  Ornithodorus papillipes', ' \r\n\r\n	  Ixodes persulcatus', 2, ' '),
(42, '42.	Members of the insects class', ' \r\n\r\n	  Ixodes ricinus', ' \r\n\r\n	  Ixodes persulcatus', ' \r\n\r\n 	  Sarcoptes scabiei', ' \r\n\r\n 	  Ornithodorus papillipes \r\n\r\n', 'Glossina palpalis', 5, ' '),
(43, '43.	Members of the Soft bodied ticks', ' \r\n\r\n	  Ixodes ricinus', ' \r\n\r\n	  Ixodes persulcatus', ' \r\n\r\n 	  Pediculus humanus capitis', ' \r\n\r\n 	  Sarcoptes scabiei \r\n\r\n', 'Ornithodorus papillipes', 5, ' '),
(44, '44.	Name characteristics that are not shared by all arthropods', ' \r\n\r\n	  Arthropods have jointed appendages', ' \r\n\r\n	  The arthropod body is segmented', ' \r\n\r\n 	  Arthropods have an exoskeleton', ' \r\n\r\n 	  Arthropods have a ventral nervous system, an\r\nopen circulatory system\r\n, a digestive system, and specialized sensory receptors \r\n\r\n', 'Arthropods flatted dorsoventrally', 5, ' '),
(45, '45.	Name modes by which arthropods transmit disease', ' \r\n\r\n	  indirect mechanical', ' \r\n\r\n	  direct mechanical', ' \r\n\r\n 	  biologic', ' \r\n\r\n 	  mechanical \r\n\r\n', 'all of the above', 5, ' '),
(46, '46.	Name stages of Musca domestica development', ' \r\n\r\n	  egg-larva-nymph \r\n\r\n', 'egg-larva-pupa-adult', ' \r\n\r\n 	  egg-pupa-adult', ' \r\n\r\n 	  egg-adult', ' \r\n\r\n	  larva-egg-adult', 2, ' '),
(47, '47.	Plague is transmitted\r\nby:\r\n', ' \r\n\r\n	  Kissing bugs. \r\n\r\n', 'Rat flea', ' \r\n\r\n 	  Mosquito Culex..', ' \r\n\r\n 	  Mosquito Anopheles.', ' \r\n\r\n	  Houseflies.', 2, ' '),
(48, '48.	Prawn belongs\r\nto:\r\n\r\n', 'Arthropoda ', '\r\n\r\n	  Annelida', ' \r\n\r\n 	  Coelenterata', ' \r\n\r\n 	  Echinodermata', ' \r\n\r\n	  No correct answer', 1, ' '),
(49, '49.	Rat flea\r\nspread:\r\n', ' \r\n\r\n	  malaria', ' \r\n\r\n	  Lyme disease', ' \r\n\r\n 	  Chagas disease', ' \r\n\r\n 	  Sleeping sickness \r\n\r\n', 'Plague', 5, ' '),
(50, '50.	Sleeping sickness is transmitted by:  ', 'Kissing bugs.', 'tse-tse fly', 'Mosquito Culex..', 'Mosquito Anopheles.', 'Houseflies.', 2, ' '),
(51, '51.	Sleeping sickness is transmitted by:  ', 'Kissing bugs.', 'Glossina palpalis', 'Mosquito Culex..', 'Mosquito Anopheles.', 'Houseflies.', 2, ' '),
(52, '52.	The _____________ goes through a complete metamorphosis', 'mites', 'lice', 'tsetse flies', 'spiders', 'ticks', 3, ' '),
(53, '53.	The _____________ goes through a complete metamorphosis.', 'mites', 'ticks', 'spiders', 'mosquitoes', 'lice', 4, ' '),
(54, '54.	The _____________ goes through a complete metamorphosis.', 'mites', 'ticks', 'spiders', 'fleas', 'lice', 4, ' '),
(55, '55.	The _____________ goes through incomplete metamorphosis.', 'mites', 'lice', 'spiders', 'ticks', 'All of the above', 5, ' '),
(56, '56.	The _____________ goes through incomplete metamorphosis.', 'mosquitoes', 'bugs', 'fleas', 'flies', 'lices', 5, ' '),
(57, '57.	The _____________ goes through incomplete metamorphosis.', 'mosquitoes', 'ticks', ' bus', 'fleas', 'flies', 2, ' '),
(58, '58.	The body parts of an insect include _______.', 'head', 'thorax', 'head', 'all of the above choices', 'non of the above', 4, ' '),
(59, '59.	The foremost appendages on spiders are', 'pedipalps', 'maxillae', 'antennae', 'no correct answer', 'mandibles', 4, ' '),
(60, '60.	The foremost appendages on spiders are', 'pedipalps', 'maxillae', 'antennae', 'chelicerae', 'mandibles', 4, ' '),
(61, '61.	The largest group of arthropods is the:  ', 'arachnids', '	  crustaceans', 'insects', 'millipedes', 'centipedes', 3, ' '),
(62, '62.	What is a myiasis?', 'Myiasis – infestation by larvae of flies', 'Myiasis – invasion or infestation of man’s body and/or tissues by Diptera larva', 'Myiasis – infestation by larvae of mosquitoes', 'Myiasis – invasion of man’s body by representatives of Order Anoplura', 'All of the above', 2, ' '),
(63, '63.	What is medical importance of body louse', 'causative agent of myiasis', 'vector of tularemia', 'vector of plague caused by Yersinia pestisv', 'causative agent of pediculosis', 'mechanical transmitters of protozoan', 4, ' '),
(64, '64.	What is medical importance of head louse', 'causative agent of myiasis', 'temporary ectoparasite', 'vector of plague caused by Yersinia pestis', 'causative agent of pediculosis', 'mechanical transmitters of protozoan', 4, ' '),
(65, '65.	What is medical importance of  lice', 'causative agents of myiasis', 'mechanical vectors of helminthes', 'vectors of plague caused by Yersinia pestis', 'causative agents of pediculosis', 'mechanical transmitters of protozoan', 4, ' '),
(66, '66.	What is medical importance of Musca domestica', 'causative agent of scabies', 'mechanical vector of protozoan and helminthes', 'vector of plague caused by Yersinia pestis', 'causative agent of pediculosis', 'vector of encephalitis', 2, ' '),
(67, '67.	What is medical importance of Wholfarta magnifica', 'causative agent of scabies', 'causative agent of accidental myiasis', 'vector of plague caused by Yersinia pestis', 'causative agent of pediculosis', 'vector of encephalitis', 2, ' '),
(68, '68.	What is medical importance of crabs', ' Crabs are intermediate hosts of the fish tapeworm (Diphyllobothrium latum) and Dracunculus medinensis.', 'Crabs are intermediate hosts of the lung fluke (Paragonimus westermani)', 'Crabs are intermediate hosts of the beef tapeworm (Taenia saginata)', 'Crabs are intermediate host of the pork tapeworm (Taenia solium)', 'All of the above', 2, ' '),
(69, '69.	What is pediculosis ?', 'Pediculosis – skin disease caused by being infested with ticks.', 'Pediculosis – heavy infestation of hair with lice (Pediculus humanus capitis).', 'Pediculosis – skin disease caused by being infested with fleas.', 'Pediculosis – skin disease caused by being infested with itch mites', 'All of the above', 2, ' '),
(70, '70.	What is prevention of pediculosis', 'cleanliness and sweeping of dust from floor and carpets', 'regular body washing with simultaneous change of linen, personal hygiene', 'involves protection from reduviid bite', 'involves protection from mosquito bite', 'mosquito nets', 2, ' '),
(71, '71.	What is the medical importance of bed bug', 'permanent ectoparsite', 'temporary ectoparasite', 'vector of plague caused by Yersinia pestis', 'causative agent of pediculosis', 'mechanical transmitters of protozoan', 2, ' '),
(72, '72.	what is the medical importance of Cyclops?', 'intermediate hosts of Dracunculus medinensis', 'Cyclopes are intermediate hosts of the lung fluke (Paragonimus westermani)', 'Cyclopes are intermediate hosts of the beef tapeworm (Taenia saginata)', 'Cyclopes are intermediate host of the pork tapeworm (Taenia solium)', 'Non of the above', 1, ' '),
(73, '73.	What is the medical importance of Cyclops?', 'Cyclopes are intermediate hosts of the fish tapeworm (Diphyllobothrium latum) and Dracunculus medinensis', 'Cyclopes are intermediate hosts of the lung fluke (Paragonimus westermani)', 'Cyclopes are intermediate hosts of the beef tapeworm (Taenia saginata)', 'Cyclopes are intermediate host of the pork tapeworm (Taenia solium)', 'Non of the above', 1, ' '),
(74, '74.	What is the medical importance of Cyclops', 'intermediate hosts of Diphyllobothrium latum', 'Cyclopes are intermediate hosts of the lung fluke (Paragonimus westermani)', 'Cyclopes are intermediate hosts of the beef tapeworm (Taenia saginata)', 'Cyclopes are intermediate host of the pork tapeworm (Taenia solium)', 'Non of the above', 1, ' '),
(75, '75.	Which class has respiratory and circulatory systems?', 'Cestoda', 'Trematoda', 'Insecta', 'Nematoda', 'Lobosea', 3, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `subindexing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `subindexing`) VALUES
(1, 'Medical Biology', 'ID_7263');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ID_7263`
--
ALTER TABLE `ID_7263`
ADD PRIMARY KEY (`id`);
--
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- 

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- 
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ID_7263`
--
ALTER TABLE `ID_7263`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

  --
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
