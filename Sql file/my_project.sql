-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 08:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `images` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `Category`, `title`, `user_name`, `bdate`, `images`, `blog_desc`) VALUES
(1, 'Lifestyle', 'My South korea Travel story.', 'kunal', '2020-09-22', '', 'Since we are soon going to approach March-April which is also the best time to visit South-Korea (the cherry blossom season), I decided to share my South Korea travel story with you guys in detail.\r\n\r\nI started my journey from Mumbai-Delhi and then jumped on a flight from Delhi- Incheon International Airport, Seoul. It was a 6hr 15 mins flights from Delhi to Seoul. I was flying by “Asiana Airlines”. Since, it was my first time flying by this airline, I was quite impressed. Extra spacious seats, lots of storage space & leg space which is like a huge deal. Also, the cabin crew were extremely caring and experienced. That made the journey a comfortable one. Also, let me specify, Asiana Airlines is an A star alliance member and also a 5 star airlines. It also has Ideal arrival and departure timing for Leisure, business and MICE traveler\r\n\r\nAfter landing, we straight headed to our hotel – L7, which was in Hongdae street. What an area and hotel to be living in!'),
(17, 'Lifestyle', 'It’s time for San Francisco!', 'KD', '2020-09-11', 'E84F435E-D863-4272-A829-30C295ACA4A1.jpeg', 'It’s been almost a week that I’m back from California. Jet lag is now finally under control, thank God! I couldn’t wait to share stories from this magical trip with you. It feels like the most beautiful and longest dream of my life because it lasted for 26days long. Only that, it wasn’t a dream. It happened in reality. Eeeeeeeeep! Someone pinch me please!\r\nThis trip had 3 legs. First 9 days in San Francisco, 4 days in LAS Vegas, 8 days in Los Angeles and finally 5 days in San Francisco again. I know, that’s pretty long right?! But every single day was worth it. I visited so many places, ate at so many good local cafe’s, took beautiful road trips, had such a great time and most of all made beautiful memories for life.'),
(18, 'Lifestyle', '5 Reasons to Visit South Korea & Seoul!!', 'kunal', '2020-06-10', 'cyberpunk_2077_4k-wallpaper-3440x1440.jpg', 'Hey there guys, I hope you are doing well . Today I’m going to share with you the 5 best reasons to visit Seoul &  South Korea. As you guys know, I recently was in Seoul for 8 days and boy oh boy, it was definitely one of the best trips of my life. Well, to be honest, being the crazy K Drama fan that I’m, this had to be !\r\n\r\nNow, coming straight to the point. When you think of South Korea, you can definitely not miss on Seoul. Being the capital city of South korea, it is truly happening and a city worth visiting when you make it to South Korea.\r\n\r\nSince, I spent 8 days living in Seoul, living there and exploring. Im going to list down 5 reasons why South Korea should make it on your list of “must visit travel destinations “'),
(22, 'Technology', 'Nvidia RTX 3090 vs RTX 3080: Which should you buy?', 'Kunal Dongre', '2020-09-25', '3621-front.jpg', 'The two graphics cards were unveiled earlier this year and, on paper, are massive upgrades on the older 20-series, featuring a completely new Ampere architecture. But with both being marketed as offering “ultimate performance” and looking fairly similar, you may justifiably be wondering which is best for your specific needs.\r\n\r\nHere to help out we’ve created a definitive guide detailing how the two powerhouse graphics cards compare.\r\nBoth the Nvidia 3090 and 3080 cards are based on Nvdia’s latest Ampere architecture. This means they’re built using a new 8nm manufacturing process that lets Nvidia load them with more transistors than you can shake a stick at. In laymen terms this means they are more efficient and offer more performance-per-watt than any previous ray tracing card.\r\n\r\nThey also feature a few never before seen technologies including new RT Cores, third-gen Tensor cores and Micron G6X video memory (VRAM) which promise to improve ray tracing performance, load times and general frame rate counts.\r\n\r\nHowever, they both have fairly different target markets. The 3080 is being sold as a replacement for the basic RTX 2080, while the 3090 aims to replace the uber expensive RTX 2080 Ti. As a result the 3090 has overwhelmingly higher (at least on paper) stats than the 3080 in a few key areas. You can get a rough and ready breakdown of the two cards core stats in the table below.\r\nThe 3090’s clear lead in memory and tensor cores is a key reason Nvidia claims it will be “the first 8K gaming-ready” graphics card ever made, while the 3080 is firmly designed for top end 4K play – despite also featuring an 8K ready HDMI 2.1 connection on its back.\r\n\r\nThe only downside is that the 3090 has a higher TDP than the 3080, which is fairly demanding in its own right. This means you’ll likely need at least a 750W, though ideally 1000W, PSU to take advantage of the card.\r\n\r\nWe haven’t had a chance to test the 3090 yet, though given our experience with the 3080, we’re taking Nvidia’s performance claims fairly seriously. During our RTX 3080 review, the card delivered on pretty much every one of Nvidia’s promises, offering 4K ray tracing gameplay at over 60fps in nearly every test.'),
(23, 'Technology', 'siefifhwewoeif', 'Kunal Dongre', '2020-09-15', '3621-front.jpg', 'efenfifepifqe'),
(24, 'Technology', 'vsrgry', 'garfhdg', '2020-09-25', '3621-front.jpg', 'hsrhdtjr6m');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`, `gender`) VALUES
(3, 'kunal1', 'kunal@gmail.com', 'kunal12345', 'male'),
(4, 'KD', 'admin@gmail.com', '12345', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
