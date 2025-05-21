-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 07:00 PM
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
-- Database: `rights`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ARTICLE_ID` int(11) NOT NULL,
  `ARTICLE_TITLE` varchar(255) NOT NULL,
  `ARTICLE_CONTENT` text NOT NULL,
  `ARTICLE_AUTHOR` varchar(255) DEFAULT NULL,
  `ARTICLE_PUBLISHED` int(11) DEFAULT NULL,
  `ARTICLE_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `ARTICLE_UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ARTICLE_ID`, `ARTICLE_TITLE`, `ARTICLE_CONTENT`, `ARTICLE_AUTHOR`, `ARTICLE_PUBLISHED`, `ARTICLE_CREATED`, `ARTICLE_UPDATED`) VALUES
(7, 'Article 21', 'Protection of life and personal liberty', 'A.K. Gopalan', 1950, '2024-07-06 09:25:54', '2024-07-06 09:25:54'),
(8, 'Article 22', 'Protection against arrest and detention in certain cases', 'x', 1950, '2024-07-06 09:28:29', '2024-07-06 09:28:29'),
(9, 'Article 23', 'Prohibition of traffic in human beings and forced labour', 'x', 1950, '2024-07-06 09:41:51', '2024-07-06 09:41:51'),
(10, 'Article 24', 'Prohibition of Employment of Children', 'x', 1950, '2024-07-06 09:44:00', '2024-07-06 09:44:00'),
(11, 'Article 25', 'Freedom of conscience and free profession, practice, and propagation of religion', 'x', 1950, '2024-07-06 10:36:39', '2024-07-06 10:36:39'),
(12, 'Article 26', 'Freedom to manage religious affairs', 'x', 1950, '2024-07-06 10:37:35', '2024-07-06 10:37:35'),
(13, 'Article 27', 'Freedom as to payment of taxes for promotion of any particular religion', 'x', 1950, '2024-07-06 10:38:19', '2024-07-06 10:38:19'),
(14, 'Article 28', 'Freedom as to attendance at religious instruction or religious worship in certain educational institutions.', 'x', 1950, '2024-07-06 10:39:08', '2024-07-06 10:39:08'),
(15, 'Article 29', 'Article 29 grants any section\r\nof citizens having a distinct\r\nlanguage, script, or culture\r\nof its own, the right to\r\nconserve and develop the same,\r\nand thus safeguards the rights\r\nof minorities by preventing\r\nthe State from imposing any\r\nexternal culture on\r\nthem.', '', 0, '2024-07-06 11:00:46', '2024-07-07 03:33:37'),
(16, 'Article 30', 'Article 30 confers upon all religious and linguistic minorities the right to set up and administer educational institutions of their choice to preserve and develop their own culture, and prohibits the State, while granting aid, from discriminating against any institution on the basis of the fact that it is administered by a religious or cultural minority.', 'x', 1950, '2024-07-06 11:01:27', '2024-07-06 11:01:27'),
(17, 'Article 31', 'No person shall be deprived of his property save by authority of law.', 'x', 1950, '2024-07-06 11:05:47', '2024-07-06 11:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `AUTH_ID` int(11) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`AUTH_ID`, `USER_NAME`, `PASSWORD`, `CREATED`, `UPDATED`) VALUES
(1, 'admin', 'admin', '2024-06-12 08:45:09', '2024-06-12 08:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_NAME` varchar(255) NOT NULL,
  `CATEGORY_DESCRIPTION` text DEFAULT NULL,
  `CATEGORY_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `CATEGORY_UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CATEGORY_ID`, `CATEGORY_NAME`, `CATEGORY_DESCRIPTION`, `CATEGORY_CREATED`, `CATEGORY_UPDATED`) VALUES
(1, 'Citizen', 'social human Rights', '2024-06-30 08:21:08', '2024-07-01 09:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `LAW_ID` int(11) NOT NULL,
  `LAW_NAME` varchar(255) NOT NULL,
  `LAW_DESCRIPTION` text DEFAULT NULL,
  `LAW_YEAR_ENACTED` year(4) DEFAULT NULL,
  `LAW_CATEGORY_ID` int(11) DEFAULT NULL,
  `LAW_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `LAW_UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `LAW_ARTICLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `RESOURCE_ID` int(11) NOT NULL,
  `RESOURCE_NAME` varchar(255) NOT NULL,
  `RESOURCE_TYPE` varchar(255) DEFAULT NULL,
  `RESOURCE_LINK` varchar(255) DEFAULT NULL,
  `RESOURCE_DESCRIPTION` text DEFAULT NULL,
  `RESOURCE_RIGHT_ID` int(11) DEFAULT NULL,
  `REASOURCE_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `RESOURCE_UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `RIGHT_ID` int(11) NOT NULL,
  `RIGHT_TITLE` varchar(255) NOT NULL,
  `RIGHT_DESCRIPTION` text DEFAULT NULL,
  `RIGHT_CATEGORY_ID` int(11) DEFAULT NULL,
  `RIGHT_ARTICLE_ID` int(11) NOT NULL,
  `RIGHT_CREATED` timestamp NOT NULL DEFAULT current_timestamp(),
  `RIGHT_UPDATED` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`RIGHT_ID`, `RIGHT_TITLE`, `RIGHT_DESCRIPTION`, `RIGHT_CATEGORY_ID`, `RIGHT_ARTICLE_ID`, `RIGHT_CREATED`, `RIGHT_UPDATED`) VALUES
(12, 'Right to Life', '“Notwithstanding anything contained in section 309 of the Indian Penal\r\nCode, any person who attempts to commit suicide shall be presumed, unless proved\r\notherwise, to have severe stress and shall not be tried and punished under the said\r\nCode.', 1, 21, '2024-07-06 08:58:33', '2024-07-08 09:35:29'),
(13, 'Right to health and medical care', 'in State of Punjab v. M.S. Chawla (1996), it was established that the right to health and medical care fell within the ambit of the right to life guaranteed under Article 21.\r\nIn the case of Consumer Education and Research Centre v. Union of India (1995), the health of workers was linked with their right to life under Article 21. It was observed that the preamble to our Constitution seeks to deliver social justice to all. Social justice implies everyone’s access to a liveable and meaningful life with minimum standards of health, economic security, and civilised living. Thus, denial of their right to healthcare to the workers would be tantamount to violating their fundamental right to life under Article 21. ', 1, 0, '2024-07-06 09:06:55', '2024-07-06 09:06:55'),
(14, 'Right to shelter ', ' the Supreme Court held that right to shelter is a fundamental right under Article 19(1)(e) read with Article 21. Thus, it is the duty of the state to grant housing sites for the residents.', 1, 0, '2024-07-06 09:08:37', '2024-07-06 09:08:37'),
(15, 'Right to clean and healthy environment ', 'Humans are directly and indirectly dependent on the environment for their survival. Most of our basic needs are satisfied by the resources obtained from nature. The sustenance of our life depends on the ecological system around us. In the case of Subhash Kumar v. State of Bihar (1991), it was observed that the right to the enjoyment of pollution-free water and air came under the ambit of the right to life under Article 21. Therefore, if any activity causes harm to the environment, recourse can be taken to Article 32 in order to stop the cause of harm or pollution. ', 1, 0, '2024-07-06 09:10:03', '2024-07-06 09:10:03'),
(16, 'Right to privacy ', 'The concerns about the right to privacy were raised for the first time in the case of Kharak Singh v. State of U.P. (1962). The main issue was related to the surveillance of the suspects. The Court linked the right to privacy with the right to protect life and personal freedom. Thus, if surveillance was intrusive and gravely encroached upon the privacy of any citizen, it violates both Articles 19(1)(d) and 21. ', 1, 0, '2024-07-06 09:10:53', '2024-07-06 09:10:53'),
(17, 'Rights to education', 'The Right to Education Act, which provided free and compulsory education till the completion of primary school education for all children between the age groups 6-14, the right to education was outlined as a part of the right to life under Article 21. The right to education has also been added as a fundamental right with the insertion of Article 21A by the 86th Amendment.', 1, 0, '2024-07-06 09:13:27', '2024-07-06 09:13:27'),
(18, 'Right to be Presented before Magistrate ', 'Article 22 guarantees that an arrested person must be produced before the nearest magistrate within 24 hours of their arrest. This provision aims to prevent unlawful and prolonged detention without proper judicial oversight.', 1, 0, '2024-07-06 09:29:55', '2024-07-06 09:29:55'),
(19, 'Right to Consult a Legal Practitioner', 'Article 22 grants the right to an arrested person to consult and be defended by a legal practitioner of their choice. This right helps ensure that individuals have proper legal representation during the process of arrest and detention.', 1, 0, '2024-07-06 09:30:29', '2024-07-06 09:30:29'),
(20, 'Right to Inform', 'No person who is arrested shall be detained in custody without being informed, as soon as may be, of the grounds for such arrest nor shall he be denied the right to consult, and to be defended by, a legal practitioner of his choice.', 1, 0, '2024-07-06 09:35:24', '2024-07-06 09:35:24'),
(21, 'Right Against Exploitation', 'Prohibition of Trafficking in Human Beings and Forced Labor (Article 23)\r\nThis provision prohibits trafficking in human beings, and all forms of forced labor such as begar, bonded labor, etc. Any violation of this provision shall be an offense punishable by law.\r\nThis right is available to both citizens and non-citizens.\r\nIt protects the individuals not only against the actions of the State but also against the actions of private persons.', 1, 0, '2024-07-06 09:43:18', '2024-07-06 09:43:18'),
(22, 'Rights of Child', 'Prohibition of Employment of Children in Factories, etc. (Article 24)\nThis provision prohibits the employment of children under the age of 14 in factories, mines, or other such hazardous activities. However, it does not forbid their employment in harmless or non-hazardous activities.', 1, 0, '2024-07-06 09:46:11', '2024-07-06 16:02:54'),
(23, 'Right to Freedom of Religion', 'The Right to Freedom of Religion is guaranteed to all Indians by the Constitution under Articles 25 to 28. Subject to public order, morality and health and to the other provisions of this Part, all persons are equally entitled to freedom of conscience and the right freely to profess, practise and propagate religion.', 1, 0, '2024-07-06 10:42:22', '2024-07-06 10:42:22'),
(24, 'Right to Religion', 'Articles 25 through 28 of the Indian Constitution provide persons, whether or not they are citizens of India, the right to religion, i.e. freedom to practice a religion of one’s own choice.\r\nArticle 26 (a) – Right to establish and maintain institutions for religious and charitable purposes.\r\nrticle 26 (b) – Right to manage its own affairs in matters of religion.\r\nArticle 26 (c) – Right to own and acquire immovable and immovable property.\r\nArticle 26 (d) – Right to administer such property in accordance with law.', 1, 0, '2024-07-06 10:45:44', '2024-07-06 10:45:44'),
(25, 'Right to Cultural, Artistic and Scientific Life', 'Article 27 says everyone has the right to freely participate in the cultural life of the\r\ncommunity, to share scientific advances and its benefits, and to get credit for their own\r\nwork. This article firmly incorporates cultural rights as human rights for all. They relate\r\nto the pursuit of knowledge and understanding, and to creative responses to a\r\nconstantly changing world. A prerequisite for implementing Article 27 is ensuring the\r\nnecessary conditions for everyone to continuously engage in critical thinking, and to\r\nhave the opportunity to interrogate, investigate and contribute ideas, regardless of\r\nfrontiers.', 1, 0, '2024-07-06 10:50:20', '2024-07-06 10:50:20'),
(26, 'Right To Equality', 'The Right to Equality is one of the chief guarantees of the Constitution. It is embodied in Articles 14–18, which collectively encompass the general principles of equality before law and non-discrimination and Articles 17–18 which collectively encompass further the philosophy of social equality.', 1, 0, '2024-07-06 10:54:38', '2024-07-06 10:54:38'),
(27, 'Right To Freedom', 'The Right to Freedom is covered in Article 19 to 22, with the view of guaranteeing individual rights that were considered vital by the framers of the Constitution, and these Articles also include certain restrictions that may be imposed by the State on individual liberty under specified conditions. Article 19 guarantees six freedoms in the nature of civil rights, which are available only to citizens of India.[23][24] These include the freedom of speech and expression, freedom of assembly without arms, freedom of association, freedom of movement throughout the territory of our country, freedom to reside and settle in any part of the country of India and the freedom to practice any profession.', 1, 0, '2024-07-06 10:56:22', '2024-07-06 10:56:22'),
(28, 'Right to information', 'Right to information has been given the status of a fundamental right under Article 19(1) of the Constitution in 2005. Article 19 (1) under which every citizen has freedom of speech and expression and the right to know how the government works, what roles it plays, what its functions are, and so on', 1, 0, '2024-07-06 10:57:02', '2024-07-06 10:57:02'),
(29, 'Right to life', 'The Constitution guarantees the right to life and personal liberty, which in turn cites specific provisions in which these rights are applied and enforced:\r\n\r\nProtection with respect to a conviction for offences is guaranteed under the right to life and personal liberty.', 1, 0, '2024-07-06 10:59:12', '2024-07-06 10:59:12'),
(30, 'Cultural and educational rights', 'The Cultural and Educational rights, given in Articles 29 and 30, are measures to protect the rights of cultural, linguistic, and religious minorities, by enabling them to conserve their heritage and protecting them against discrimination.', 1, 0, '2024-07-06 11:00:15', '2024-07-06 11:00:15'),
(31, 'Right to Constitutional Remedies', 'Article 32 provides a guaranteed remedy, in the form of a Fundamental Right itself, for enforcement of all the other Fundamental Rights, and the Supreme Court is designated as the protector of these rights by the Constitution.', 1, 0, '2024-07-06 11:03:01', '2024-07-06 11:03:01'),
(32, 'Right to privacy', 'The right to privacy is protected as an intrinsic part of the right to life and personal liberty under Article 21 and as a part of the freedoms guaranteed by Part III of the Constitution. It protects the inner sphere of the individual from interference from both State and non-State actors and allows individuals to make autonomous life choices', 1, 0, '2024-07-06 11:03:48', '2024-07-06 11:03:48'),
(33, 'Right to property', 'The Constitution originally provided for the right to property under Articles 19 and 31. Article 19 guaranteed to all citizens the right to acquire, hold and dispose of property. Article 31 provided that \"no person shall be deprived of his property save by authority of law.\" It also provided that compensation would be paid to a person whose property has been taken for public purposes.', 1, 0, '2024-07-06 11:04:37', '2024-07-06 11:04:37'),
(34, 'Right to education', 'The right to education at elementary level has been made one of the fundamental rights in 2002 under the 86th Amendment of 2002. However this right was brought in to implementation after eight years in 2010. On 2 April 2010, India joined a group of few countries in the world, with a historical law making education a fundamental right of every child coming into force.Former Prime Minister Manmohan Singh announced the implementation of the Act. Children, who had either dropped out of schools or never been to any educational institution, would get elementary education as it would be binding on the part of the local and state governments to ensure that all children in the 6–14 age group get schooling. As per the Act, private educational institutions should reserve 25 percent seats for children from the weaker sections of society.', 1, 0, '2024-07-06 11:07:42', '2024-07-07 04:03:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ARTICLE_ID`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`AUTH_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`LAW_ID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`RESOURCE_ID`),
  ADD KEY `RESOURCE_RIGHT_ID` (`RESOURCE_RIGHT_ID`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`RIGHT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ARTICLE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `AUTH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `LAW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `RESOURCE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `RIGHT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`RESOURCE_RIGHT_ID`) REFERENCES `rights` (`RIGHT_ID`);

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`RIGHT_CATEGORY_ID`) REFERENCES `categories` (`CATEGORY_ID`),
  ADD CONSTRAINT `rights_ibfk_2` FOREIGN KEY (`RIGHT_ARTICLE_ID`) REFERENCES `laws` (`LAW_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
