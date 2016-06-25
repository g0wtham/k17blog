-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2016 at 08:06 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `thens` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `address`, `thens`, `city`, `email`, `phone`) VALUES
('k17! BLOG', 'CEG Campus', 'Anna University,Guindy', 'Chennai 600025', 'ctf@kurukshetra.org.in', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` text NOT NULL,
  `content` varchar(4086) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `category`, `author`, `content`, `date`, `time`) VALUES
(1, 'Happy Birthday Ilayathalapathy Vijay', 'Media', 'Gowtham', 'With Ilayathalapathy Vijay Celebrating his 42nd Birthday today, top celebrities took twitter to wish him. Director Venkat Prabhu, Actor Arya, Nazriya, Raghav Lawrence, GV Prakash, Dhanush, Vijay Sethupathi, Radhika Sarathkumar, Gayathri Raghuram, Singer Krish, Actor Vivek, Jai, Vishnu, Keerthy Suresh, Hansika and so many celebrities wished Ilayathalapathy Vijay on his birthday.\n\nIlayathalapathy Vijay is being flooded with birthday wishes on Twitter. The actor is celebrating his 42nd birthday on Wednesday, June 22. The actor is spending time with his family on his special day. Reports say that Vijay is on a holiday in the United States. But it has not stopped his legion of fans from celebrating the day by cutting cakes and doing charity work in India. In many places in Tamil Nadu, including Chennai and Madurai, his fans have put up birthday posters to wish him on the special day. They have also created multiple hashtags to wish him online, the prominent among them being #HBDVijay. Apart from wishing Ilayathalapathy, they are sharing memorable scenes, photos and dialogues from the actor''s films. Many celebrities have also taken to Twitter to shower wishes on the actor. Here are a few tweets posted by some of the popular names of Kollywood: \n\nRAAI LAXMI: Happy birthday 2the most simple ,down to earth,amazing person I have known #thalapathy #Vijay hv a wonderful 1â¤ï¸â˜ºï¸\n\nVikram Prabhu: Happy Birthday to @actorvijay Sir! Wishing you another #Theri year ahead!#HBDDarlingOfMassVIJAY\n\nVishnu Vishal: Happy b''day to d ever young n dashing @actorvijay na..god bless :)\n\nDharan Kumar: #HBDVijay sir. May you keep motivating us on & off screen with ur impeccable screen presence & humility @actorvijay\n\nUdhay: Happy birthday Ilayathalabathy Vijay na!\n\nSathish: Happy birthday @actorvijay sir. Have a great year sir. We Miss u here in shooting spot sir. Indha varudamum #Therikka vaazhththukkal sir\n\nSibi Sathyaraj: Happy bday to the Box Office King!Vijay anna! #HBDDarlingOfMassVIJAY\n\nChandran: Many more happy returns of the day to the most phenomenal dancer.. #HBDVijay sir..\n\nNikki Galrani: Wishing the idol of many,our #Ilayathalapathy @actorvijay sir a super happy Bdayyy #HBDVijay\n\nRajesh M: Happy bday vijay sir #HBDVijay\n\nMadonna Sebastian: A very HBD to the most beloved Ilayathalapathy vijay sir .. Live long sir !! #HBDVijay\n\nJ Anbazhagan: A very happy birthday to our #RevolutionaryYouth Actor illayathapathy Vijay. Kollywood is gifted to have Vijay. #HBDVijay\n\nArya: Happy birthday to warmest coolest and most friendly @actorvijay Na .. Have a rocking year\n\nAnirudh Ravichander: Happy Birthday Vijay sir.. My happy birthday dedication to you - Surprise â˜ºï¸\n\nHansika: Happy birthday to one of the most generous and genuine person I have ever worked â­ï¸ @actorvijay , stay blessed\n\nRaghava Lawrence: Happy Birthday Ilayathalapathy Vijay Nanba\n\nDhanush: Happy birthday to my friend and a super mass hero Vijay sir :) have the greatest of years ahead sir :)\n\nVishnu: Happy birthday theri baby thalapathy vijay sir @actorvijay\n\nJai: Happy Birthday @actorvijay Anna! Love you alwys Thanks for introducing me n showing me d awesome version of my life\n\nShanthnu Buddy: No more wrds to describe my respect fr him "Brothr frm another Mother"HBD @actorvijay anna\n\nNivin Pauly: Birthday wishes to dear @actorvijay sir :) :) :)\n\nKabir Duhan Singh: Happy Birthday vijay sir ...', '2016-07-22', '20:45:00'),
(2, 'All-Age Favourite Rivals', 'Sports', 'Gowtham', 'The most universal topic of debate in the contemporary football world is about who the better footballer is between Lionel Messi and Cristiano Ronaldo. Sport thrives on rivalries, and it is this one between the spearheads of Barcelona and Real Madrid that has defined the last decade in footballing circles. Also read : Why Lionel Messi''s salary is thoroughly well-earned and completely justified When the inevitable question was once posed to Ronaldo himself, he had said, â€œYou cannot compare a Ferrari with a Porsche because it''s a different engine. You cannot compare them. He does the best things for Barcelona, I do the best things for Madrid.â€\r\n\r\n\r\nWhatever the man may say, we will make a comparison anyway. Messi exerts more influence on a match, playing more around the centre of the pitch than Ronaldo and bringing in more of his team-mates into attacks. Ronaldo is more comfortable taking solo runs on the wide sides, and he is much better as a finisher than the Argentine. Also, the Portuguese has at times been accused of being a â€˜flat track bullyâ€™, effective in the lesser matches but disappearing when it really matters. Ronaldo is more athletic of the two and is visibly more professional about taking care of himself. Messiâ€™s balance is second to none, but because of his small size he can be knocked off the ball by more imposing opponents. He, however, seldom executes touches that are cute but ineffectual, something Ronaldo is guilty of sometimes. But the above are all subjective comparisons. What do the numbers say? We have attempted a detailed comparison of the statistics that the two players have gathered over their careers. Statistics of course never tell the whole story, but this is as objective a judgement as any that can be passed upon the million-dollar question.\r\n\r\n\r\nMumbai might get heavy snow, Russians could stop drinking vodka, Americans may stop funding its military and Volkswagen might even go bankrupt. Everything mentioned above is possible, but one thing in this world is never possible. Fans will never stop comparing Lionel Messi and Cristiano Ronaldo. Perhaps this is because the current generation of football fans are experiencing perhaps two of the greatest gifts ever given to â€œthe beautiful gameâ€. The Brazilian legend, Pele, has also stated that Lionel Messi is the â€œbest in the worldâ€ over the past decade, which has encouraged further debate among fans. In my opinion, Lionel Messiâ€™s game shows precisely how much talent he has. Itâ€™s pure, perfect football. Ronaldo, on the other hand, is a fine example of how hard work can work wonders. He is perhaps one of the most hardworking players to ever grace the game.', '2016-06-23', '11:05:00'),
(3, 'Kurukshetra', 'Tech', 'Gowtham', 'â€œTo raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science,â€ said Albert Einstein. The tenth edition of Kurukshetra, the annual inter-college techno-management fest of the College of Engineering, Guindy (CEG), under the patronage of UNESCO, hopes to accomplish all this and more. \r\nLast yearâ€™s edition of Kurukshetra saw more than 24,000 participants from over 800 colleges, with 33 events in six categories, workshops and guest lectures. This yearâ€™s edition, from February 17 to 20, aims at taking the fest to even greater heights. \r\n\r\n\r\n\r\nThe fest will kick off with the preâ€“k! talk â€” a guest lecture from Angelo Vermeulen, Belgian visual artist, space researcher and the crew commander of the HI-SEAS MARS Simulation programme funded by NASA. Joining him in the panel of guest lectures this year is Abhas Mitra, the former head of theoretical astrophysics at Bhabha Atomic Research Centre. \r\nWorkshops by ESRI on Connective Convergence, Samsung on Virtual Reality, IBM on Cognitive Computing, Alstom on Distance Relays and Substation Automation and those introducing novel concepts such as Growth Hacking and building 3D printers are just some of the projects to look forward to.\r\n\r\n\r\nAlso joining the lineup this year is Krithi, the exclusive k! workshop for school students, with the theme of Home Automation. StartUp Weekend, powered by Google, will be held again this year. Other events include Robowars, Godspeed, Bank Robbery, Alcatraz, Enigma, Ninja Coding, Gambling Math, Model G20, online events such as Sherlock, Riddles of the Sphinx, Tame the Code and the Onsite Programming Contest. E-for-Educate Initiative has been created and undertaken to motivate, to provide opportunity, to identify, analyse and provide tools to the current generation to solve problems. The initiative has joined hands with BHUMI to recycle e-wastes collected from schools and colleges and to utilise the funds raised for the education of underprivileged children. â€˜Asherahâ€™, which removes the waste matter from water bodies with image processing techniques; Smart Autoâ€™ which ensures that a complaint is filed against the drivers who do not use meters; an ingenious Android game, based on Dexter, the much loved mascot of Kurukshetra and a â€˜2D writing machineâ€™, that converts pdf format into human written form are some of the projects that will be on display.\r\n\r\n\r\nStartup Weekend is a global grassroots movement of active and empowered entrepreneurs who are learning the basics of founding startups and launching successful ventures. You can view this video to see how it works. Our goal is to create an environment where passionate people can come together to learn, network, bridge the gap between trades, expose their potential and obtain the results they deserve. Startup Weekend had been held across 135+ countries and we are looking forward to making it big in Chennai. This time Kurukshetra team is extremely happy to host Startup Weekend Chennai edition as a part of the Kurukshetra, an International Techno Management Festival of CEG conducted under the coveted patronage of UNESCO. In addition to Kurukshetra, this year, Startup Weekend is also collaborating with CEGâ€™s Centre for Entrepreneurship Development (CED) and Capitalize.\r\n', '2016-06-24', '12:00:00'),
(4, 'iOS 10 Exclusive Features', 'Technology', 'Gowtham', 'WHAT ARE THE NEW FEATURES OF IOS 10?\r\n\r\nApple has described iOS 10 as its "the biggest iOS release ever," and it ran through a selection of 10 key new areas in considerable depth at its WWDC keynote.\r\n\r\n\r\nSMARTER LOCK SCREEN\r\n\r\nApple has improved the lock screen experience with iOS 10. You''ll now be able view your lock screen just by picking up your phone, as well as action notifications using 3D Touch. These features aren''t quite as revolutionary as Apple is making out, but it''s good they''re finally landing on iDevices.\r\n\r\nNotifications\r\n\r\n3D TOUCH & WIDGETS\r\n\r\nTalking of 3D Touch, Apple is filling out the usage of its big hardware addition of last year''s iPhone 6S. You''ll be able to press and hold firmly on app icons to bring up widgets - essentially providing you with key information without actually entering the apps.\r\n\r\niOS 10\r\n\r\nSIRI\r\n\r\nApple and open source software aren''t normally found in the same sentence, but the Cupertino-based firm''s hand has been forced to a certain extent and it''s releasing the Siri API to the developer community. Some of the third-party integrations coming include Uber, WhatsApp, Skype and Slack. If you enjoy talking to your phone, this is actually kind of exciting.\r\n\r\nPHOTOS\r\n\r\nThere''s a bunch of new AI functionality coming to Apple''s native Photos app, including new facial and location detection capabilities, more powerful search, and a new tab called Memories that will turn your photos into highlight-style reels based around things like location and people. We''ll have to see how this one pans out in the flesh – it sounds like a nicety rather a game-changer (and is more than a bit reminiscent of HTC''s Zoe), but let''s not poo-poo it before we''ve tried it.\r\n\r\nMAPS\r\n\r\nMaps, like Siri and Photos, is getting smarter and more open. Developers will be able to access the Maps API in iOS 10 and beyond, so we can look forward to things like native restaurant booking and ride hailing.\r\n\r\nHOME\r\n\r\niOS will feature an all new native app called Home. Expanding on the HomeKit framework, it''ll be one-stop shop for all your connected and smart home gear. It''ll also feature in the Control Center, so you can access it from the lock screen.\r\n\r\niOS Home\r\n\r\nMESSAGES\r\n\r\nIn iOS 10, Messages is getting a pretty substantial overhaul. You''ll be able to write messages in your own hand-writing, alter the way message bubbles look, send quick ''Tapback'' responses, and even add animations.\r\n\r\nEmoji are getting bigger (three times bigger) and easier to insert, with iOS recommending potential word replacements for you. Meanwhile, you''ll be able to slap virtual stickers all over your message threads.\r\n\r\nBut potentially the biggest addition of all will be iMessage apps. Apple is essentially turning the app into its own platform, with third party developers able to make their content accessible directly through the Messages app.\r\n\r\nAPPLE MUSIC\r\n\r\nWe knew this one was coming, but it was good to see confirmation that Apple is going back to the drawing board with Apple Music nonetheless.\r\n\r\nApple Music''s new approach looks a lot cleaner and simpler than before. Upon entering the app, for example, you''ll be taken straight to the Library section.\r\n\r\nYou''ll also be able to view lyrics while you''re listening to your music. Well, someone must have asked for it...\r\n\r\nApple Music\r\n\r\nPHONE APP\r\n\r\nApple has made a couple of alterations to the iOS 10 Phone app. Chief among them is the way it transcribes your voicemail messages. It''ll also be able to detect when an incoming unknown caller is likely to be spam.\r\n\r\nAPPLE NEWS\r\n\r\nThere''s a chance you''re one of the ten people who actually use Apple News. If so, you''ll be interested in this one. It''s receiving an Apple Music-like design overhaul, with similar chunky titles. Subscriptions and breaking news notifications are also incoming.\r\n\r\nAPPLE PAY\r\n\r\nApple Pay is making its way to web purchases with iOS 10. There''ll be a new ''Buy with Apple Pay'' button appearing on website checkout screens, which will mean you can authorise payments using the Touch ID fingerprint sensor.', '2016-06-25', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `star` int(50) NOT NULL,
  `good` varchar(50) NOT NULL,
  `bad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `address`, `phone`, `email`, `star`, `good`, `bad`) VALUES
('', '', 0, '', 0, '', ''),
('gowtham', 'madurai', 9600892040, 'gowthamparthipan@gmail.com', 4, 'outlook', 'script'),
('g', 'g', 0, 'g', 0, '', 'g'),
('g', 'g', 0, 'g', 0, '', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `kcom`
--

CREATE TABLE `kcom` (
  `name` varchar(25) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mvrcom`
--

CREATE TABLE `mvrcom` (
  `name` varchar(25) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mvrcom`
--

INSERT INTO `mvrcom` (`name`, `comments`) VALUES
('vikram', 'cr7 hala madrid!!!');

-- --------------------------------------------------------

--
-- Table structure for table `vijcom`
--

CREATE TABLE `vijcom` (
  `name` varchar(25) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vijcom`
--

INSERT INTO `vijcom` (`name`, `comments`) VALUES
('Gowtam', 'hbd vijay!!!'),
('suja', 'thalaiva!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
