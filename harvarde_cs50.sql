-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2014 at 10:18 AM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `harvarde_cs50`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'jharvard', '0311e9099721688ba95ea2d9e4be08655f06b40a'),
(2, 'testing', '6598c44fbddca5d81590770b1edd0e0e3aa3706b');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(2) NOT NULL,
  `question_id` int(4) NOT NULL,
  `question` text CHARACTER SET utf8 NOT NULL,
  `answer` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question_id`, `question`, `answer`) VALUES
(1, 1, 0, 'How many times can you tear a 1,024 page phonebook into half, each time throwing away one of the halves, before only one page remains?', 'a'),
(2, 1, 1, 'How many bits do you need, minimally, in order to represent the (decimal) number 7 in binary?', 'a'),
(3, 1, 2, 'How many letter keywords are possible when using Vigenère''s cipher, assuming a 26 letter alphabet?', 'c'),
(4, 1, 3, 'What entices you about the iPhone?', 'a, b, c or d'),
(5, 1, 4, 'gdb is a debugger.', 'T'),
(6, 1, 5, 'GetString uses malloc in order to allocate memory for users'' input. ', 'T'),
(7, 1, 6, 'make is a compiler.', 'F'),
(8, 1, 7, 'main must be the first function defined in a .c file.', 'F'),
(9, 1, 8, 'What''s wrong, and how do you fix it? "implicit declaration of function ''GetString'' is invalid in C99""', 'The programmer has called GetString but has omitted\r\n\r\n#include <cs50.h>\r\n\r\natop the program''s file. Adding that line should fix.'),
(10, 1, 9, 'What''s wrong, and how do you fix it? "use of undeclared identifier ''n''"', 'The programmer has tried to use a variable, n, without first declaring it. (Or, even if declared somewhere, it''s at least not in scope.) Declaring n within the same scope in which it''s being used (or globally) should fix.'),
(11, 1, 10, 'Why is Selection Sort''s running time in Ω(n2) even when its input is already sorted?', 'Selection Sort doesn''t know which of its not-­‐yet-­‐sorted elements is smallest until it''s traversed them all, since the smallest might be the last. To sort n elements, then, Selection Sort must look at n elements, then n – 1 elements, then n – 2 elements, and so forth, which adds up to n(n + 1)/2, which is on the order of n2.'),
(12, 1, 11, 'Describe two features of gdb.', 'gdb lets you pause execution of a program on any line by setting "breakpoints" so that you can step through code line by line. gdb also lets you view (and change) the values of variables while a program is running without having to resort to printf.'),
(13, 1, 12, 'When should you call free?', 'Anytime you allocate memory with malloc (or functions like GetString that, in turn, call malloc and return pointers to the allocated memory), you should call free when done using that memory.'),
(14, 1, 13, 'when flag clicked\r\n	set n to 1\r\nrepeat 5\r\n	say n\r\n	change n by 1\r\nsay "I''ve got the same combination on my luggage!"\r\nstop script\r\n\r\nIn the space below, translate the script into a C program that''s functionally the same (albeit in a command line environment); it needn''t be structurally the same.  Assume that Scratch''s say block translates to printf in C.  (Though each call to printf should include a trailing \\n.)  And recall that change*n*by*1 means to increment n.', '#include <stdio.h>\r\nint main(void)\r\n{\r\n	for (int n = 1; n <= 5; n++)\r\n		printf("%d\\n", n);\r\n	printf("I''ve got the same combination on my luggage!\\n");\r\n	return 0;\r\n}'),
(15, 1, 14, 'Convert the binary number below to decimal. Show any work (i.e., any arithmetic).\r\n\r\n1 1 0 0 1 0', '1 ⋅ 32 + 1 ⋅ 16 + 1 ⋅ 2 = 50'),
(16, 3, 0, 'Okay, so how do you spell caterpillar?', 'c'),
(17, 3, 1, 'How many times maximally can you tear a 1,024-page phonebook in half (without tearing individual pages like, ahem, Jason)?', 'b'),
(18, 3, 2, 'How many distinct values can you represent with a sequence of 3 bits?', 'c'),
(19, 3, 3, 'How many bits does a single hexadecimal digit (e.g., F) ordinarily represent?', 'b'),
(20, 3, 4, 'Assuming a 26-letter alphabet, how many n-letter keywords are possible when using Vigenere''s cipher?', 'd'),
(21, 3, 5, 'A function that calls itself is said to be:', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`) VALUES
(1, '2012 Fall - Quiz 0'),
(2, '2012 Fall - Quiz 1'),
(3, '2011 Fall - Quiz 0'),
(4, '2011 Fall - Quiz 1'),
(5, '2010 Fall - Quiz 0'),
(6, '2010 Fall - Quiz 1'),
(7, '2009 Fall - Quiz 0'),
(8, '2009 Fall - Quiz 1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
