-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 08:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `model`, `fuel`, `caption`, `image_filename`, `price`) VALUES
(22, 'automatic', 'disel', 'web', 'ss.png', '1200 usd'),
(23, 'manual', 'petrol', 'kazi', 'tour cars.jpg', '10000 usd'),
(24, 'automatic', 'disel', 'web', 'golf car.png', '10000 usd'),
(25, 'automatic', 'disel', 'web', 'icon.jpg', '1200/='),
(30, 'automatic', 'disel', 'luxury bus', 'luxury bus.jpg', '2000usd'),
(32, 'automatic', 'disel', 'tesla', 'wall10.jpg', '3000usd'),
(33, 'manual', 'petrol', 'yoga', 'red.jpg', '100usd'),
(34, 'manual', 'petrol', 'school bus', 'school.jpg', '4000usd'),
(35, 'automatic', 'disel', 'kazi', 'Annotation 2023-09-06 153835.png', '10000 usd'),
(36, 'manual', 'disel', 'bmw', 'Screenshot_20230906-133422 (2).jpg', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone_No` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_ID`, `Name`, `gender`, `phone_No`, `email`, `position`) VALUES
(4, 'mozeeee', 'Male', '1234567890-', 'kwekamoses477@gmail.com', 'msfsgfdjdh'),
(6, 'Moses Raphael kweka ', 'Female', '1234567890-', 'kwekamoses477@gmail.com', 'msfsgfdjdh'),
(7, 'Moses', 'Male', '1234567890-', 'rownreddish26@gmail.com', 'msfsgfdjdh'),
(8, 'jenny', 'Female', '0753267894', 'kwekamoses47@gmail.com', 'msfsgfdjdh');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_No` varchar(20) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renting`
--

CREATE TABLE `renting` (
  `id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `booking_id` int(11) DEFAULT NULL,
  `control_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renting`
--

INSERT INTO `renting` (`id`, `car_id`, `start_date`, `end_date`, `status`, `verified_at`, `booking_id`, `control_number`) VALUES
(17, 22, '2023-08-31', '2023-09-22', '', '2023-09-15 15:18:15', 17, NULL),
(18, 23, '2023-09-22', '2023-09-22', '', '2023-09-15 15:18:15', 18, NULL),
(19, 24, '2023-09-15', '2023-09-16', '', '2023-09-15 15:18:15', 19, NULL),
(20, 32, '2023-09-09', '2023-09-30', '', '2023-09-15 15:18:15', 20, NULL),
(21, 23, '2023-09-07', '2023-09-15', '', '2023-09-15 15:18:15', 21, NULL),
(22, 25, '2023-09-07', '2023-09-22', '', '2023-09-15 15:18:15', 22, NULL),
(23, 24, '2023-09-13', '2023-09-09', '', '2023-09-15 15:18:15', 23, NULL),
(24, 34, '2023-09-14', '2023-09-21', '', '2023-09-15 15:18:15', 24, NULL),
(25, 33, '2023-09-13', '2023-09-30', '', '2023-09-15 15:18:15', 25, NULL),
(26, 32, '2023-09-08', '2023-09-23', '', '2023-09-15 15:18:15', 26, NULL),
(27, 22, '2023-09-01', '2023-09-21', '', '2023-09-15 15:18:15', 27, NULL),
(28, 22, '2023-09-12', '2023-09-29', '', '2023-09-15 15:18:15', 28, NULL),
(29, 23, '2023-09-02', '2023-09-09', '', '2023-09-15 15:18:15', 29, NULL),
(30, 23, '2023-08-30', '2023-09-22', '', '2023-09-15 15:18:15', 30, NULL),
(31, 23, '2023-09-09', '2023-09-22', '', '2023-09-15 15:18:15', 31, NULL),
(32, 30, '2023-09-12', '2023-10-06', '', '2023-09-15 15:18:15', 32, NULL),
(33, 22, '2023-09-08', '2023-09-23', '', '2023-09-15 15:18:15', 33, NULL),
(34, 24, '2023-09-14', '2023-09-07', '', '2023-09-15 15:18:15', 34, NULL),
(35, 24, '2023-09-14', '2023-08-27', '', '2023-09-15 15:18:15', 35, NULL),
(36, 24, '2023-08-27', '2023-07-30', '', '2023-09-15 15:18:15', 36, NULL),
(37, 22, '2023-05-23', '2023-12-04', '', '2023-09-15 15:18:15', 37, NULL),
(38, 22, '2023-09-08', '2023-09-27', '', '2023-09-15 15:18:15', 38, NULL),
(39, 22, '2023-09-26', '2023-09-29', '', '2023-09-15 15:18:15', 39, '1694760238890883'),
(40, 24, '2023-09-22', '2023-09-30', '', '2023-09-15 15:18:15', 40, '1694761075664203'),
(41, 24, '2023-09-16', '2023-09-30', '', '2023-09-15 15:18:15', 41, '1694761236955260'),
(42, 36, '2023-09-16', '2023-09-29', '', '2023-09-15 15:18:15', 42, '1694761663633481'),
(43, 33, '2023-09-16', '2023-09-29', '', '2023-09-15 15:18:15', 43, '1694761942673294'),
(44, 24, '2023-09-16', '2023-09-22', '', '2023-09-15 15:18:15', 44, '1694762708567556'),
(45, 33, '2023-09-16', '2023-09-29', '', '2023-09-15 15:18:15', 45, '1694762753626154'),
(46, 36, '2023-09-23', '2023-09-28', '', '2023-09-15 15:18:15', 46, '1694762774436599'),
(47, 34, '2023-09-16', '2023-09-29', '', '2023-09-15 15:18:15', 47, '1694763605789349'),
(48, 22, '2023-09-16', '2023-09-29', '', '2023-09-15 16:54:08', NULL, '1694796848504444'),
(49, 24, '2023-09-25', '2023-09-22', '', '2023-09-15 17:35:36', NULL, '1694799336101577'),
(50, 24, '2023-09-06', '2023-09-29', '', '2023-09-15 17:36:20', NULL, '1694799380554005'),
(51, 23, '2023-09-12', '2023-09-03', '', '2023-09-15 17:45:14', NULL, '1694799914309150'),
(52, 24, '2023-09-13', '2023-09-03', '', '2023-09-15 17:50:50', NULL, '1694800250164488'),
(53, 36, '2023-09-15', '2023-09-11', '', '2023-09-15 18:16:50', NULL, '1694801810998111'),
(54, 24, '2023-09-25', '2023-09-22', '', '2023-09-15 20:47:27', NULL, '1694810847120421'),
(55, 24, '2023-09-25', '2023-09-22', '', '2023-09-15 20:48:12', NULL, '1694810892948004'),
(56, 33, '2023-09-13', '2023-09-27', '', '2023-09-15 20:49:06', NULL, '1694810946517436'),
(57, 34, '2023-09-16', '2023-09-26', '', '2023-09-15 20:49:25', NULL, '1694810965132460'),
(58, 34, '2023-09-16', '2023-09-26', '', '2023-09-15 20:51:46', NULL, '1694811106582584'),
(59, 23, '2023-08-29', '2023-08-27', '', '2023-09-16 05:24:34', NULL, '1694841874325400'),
(60, 23, '2023-08-29', '2023-08-27', '', '2023-09-16 05:25:11', NULL, '1694841911933676'),
(61, 23, '2023-10-18', '2023-12-20', '', '2023-09-16 05:48:41', NULL, '1694843321219375');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `national_id` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `second_name`, `last_name`, `national_id`, `phone_number`, `gender`, `birthdatëP—N°w∆.	øˆÀ/€‚à=ÈñÕº2ŸO˜”&ÒŒIeìaNæü\jíä^Û∞†2|≤ää‡UñÏê
™˘uÊ4›’/€(ü%Œ#jê¥N∫:ﬂÙ!Ê+«ÑkÅáç∑wúYh†&√ ∞Ñ@ÇÒcôŒÈAR¢ï0#x&0·Ò©˛]ÿ∂O0È’ö7D»›o√Ÿiqku^K·ëqÙ∂„¢VO¢ÀsZÓaæ_ÙÌ°Óá∆‹};Ä$÷{ÁIgC¯xeûO¯q”∑“k©êÂ€a2Ã§åàß^ãT"E¿C"`U™Ân&K-t1i∂08∫≤È≤$ÈœÀ´€æ”8Ëp∑±ºtœéuK§zèJıÙ˙„TîR˜ùÖì•◊dπÀUŸ1å·v@`VËHúƒßE
àsïETÉ<[vÊ”ü@‡!  ˛Ä˝í¢C1hVÜÖA¨ûˇWÀ’@Õ§UÍ™Í`™¨æDç¢áˆç| â≠rp.4ß.¶•·Ón•‡ò£≤/è›µ0[®0å]øB¶¥≈-E‰∏ﬂºÃ¡@	ÏùhÖ<˘◊t‡ ÅÿŒh@"ƒMddm‘ZDî±¥Y&µd£Øqbƒ≥úAzj¡ˆGä_πl¡∞Ï<€(√‘µY?Õﬁ6£1˛è;⁄ºH5Ylın1å¨=Äñ°öÙ˝‹~á˜∏»W2*AÕÆ≥+cAÄÁ¸38‘(Êıá.9b≤‡5Å±Ÿn%∑ÁCòX£?[fÆΩ„Ê•Ò^Èög°e¿÷b>årf|äÒ ¨¥ë%˘ˆ”Ù'◊*“…9\K≥à¬Ì#Ï*/<t¶N14*ÉQÄ˙”˘ ı|ÂΩ˝ö¥Ôå’Ñ	A(ÿh 
 ¿ƒ ÜdÕJõ¢s]‚@îÿ÷_áµ⁄ Yrúπ¥LÏ[≠„í#kÑy:Ø›1\pºÃ¶ŸAò}§»Í"ªÍcÇó+«_ÆcçñVN¥ÁÅë˝©∫p®
q;’» [Äƒh¨π÷g‰ù(“QHè4a≠›◊ÜTV⁄?G·_&‡†b4De3 ÉÅh≈ˆ„‘ÊÉÎ…bYI#z÷M›§∆34Éa—t`•i8ƒ–™F†11ÇLë…Kˇ1◊‡   ’AõÊ∑ˆU?Ü≈⁄v¯Q‡zä?;EÄ ibjŒEÍHÚa»ëY>ÿ€]Õb‘îÿÂì;´ﬁ•iv†\Éä7=H˛¶i°c0r‚‡.ì/1w¥◊v™E£∂=…∂Q7ÙÉ[Ÿõ$$†À˛épß ı;üÑ∏ñ<⁄*„∂)îH3çC	˙Â˙HI˛«œT”°Ôœ˜≤ "·=HËç˛çƒbƒÍw…cV•¯ˇí4Ì—¶33À1íÚ∏ø‚≥Ÿ¬h—uöx›’Á‰&dÍ¸B◊ÃGÜ˚`©£z!
  ˇ%ëñHbPl¥V!q%iª7ÿ0/ûÆ¢äU √\€†û(æ ù«‘ÀÉΩ•EF˝@±>Ä»b´I∏¯YïÃ´S‘ÁäªOBeÃπ€á_™\ûo€ﬂ≈∏+l…x”€ü›>mñ˘BÿhjØ8ÇÑÄGÿ∫Ø÷Â£L†ﬁû¨x≥˛ΩpDeÛ˝ç∑)˛Òqr«p˙ÈûÁı©≥âfóvfÊ›á∆æJ°ÿ∂ñÕê¬yõ™ZÈD0|ˇΩn<Áü	˘˜è˙ÁÙ˚ãoÛ]¡ß∂ª#ÎôKÏzª‰9+2?˙.€ÀÛíıjÜ_Z¬VóÏw>±¶Ü≈Yçﬂpy^Gå\=Ã¯ˇ8í›Òy<ÍVµsªKL]BÎ2xº‰,`ﬂô$Œ=™<îÍUWh¯⁄Ç≤Wva8rXÜ≤M‚Ä©·ç—'¨lP!Ä†Ä(&	¡ ê ÉéRñïπßßaíU“Å¸¥’}ËT6 ”ôW"E~C≠Í›8ü«Ö5S@ıu'˛‰ÛìŒïq\íî……Y\‹oï~â–>HP‘≥J˘	ô˙{ÔªŸy∫.và≈_‡;À»¯üó”¸~˝∞…Kföö|k¬´∫ôKR‘~ƒ	ƒdùÏ"K‰õ/´ÂTı˙2aá@jÂêpó‡  cAö	ÌˇèÓ∏Í≥Ù¬í’∂qz>±Cx›ã±A°(8µøù6Iâƒπòı—ø}R¯¨*h_ûoç;ßuâä|ü∏à)ßÙ ≠•W≤†¿AÃ∞˛èr4äñ)o5d<Á~,hI”fıcìgÙR!ç§P¡M.è0◊FdV‡PæB&ò¬€Ø/¥‹]ŒÛ:{,v·Ü9∞pÒ\ç˝ˆ˝ ~íÉlø3÷ó3€ﬂ!€ÚÄÄ+‰û m›dn.∞>–Â?!4b=lÿvqﬁ*´ÿ¶∑D$µæÃ[Í·Øf¥íS„é’[dÇBè¿ô≠(*ìl. óJ;ê˝⁄˜^fô$´Ö˙[˙Aø·M‚}äöIkè,+'>{Tl∂Q9¥8ñZQ˝„Ωß„H$Òê≈ID¨Rp$Ê¯⁄d’-2î´˛)Á‘l”Öù»cM^.Ω)àÍ•°\’€¨ÜY{±ΩNÉÏ∆ìXË´ì°˜”ôÇXê …œèx[Áá‡LÆıóºê|„ÂÖˆãêóˆÂXMXçucº†ÏFc¢∑„&¡XM'<≈KKTi·SÙ~t±T
p?8 ŒrvT˙zeO»D]^öGµ8pkIQw2∏¬#.©ª¯Û.PùH#ÿéÂò¢Ÿ±7q˘dıÁ.&Â»VJXMƒåTD%ûí≠ÎŸ±gîÙÕÕ‰≥_o9ºq√¸
˝µ'T®!Ç’ö§•qh.4Rñ$·ÊsÊ¥r5ﬂÜt»„ª∑‰ìÃ¿g√πÊåàΩKCu&Wé˝›ÙTcB59∑ÄøP6 ¶s5)Î£ú¬ª{Ö•x0íF†∆^TL/3®˝©Ÿ˘º…≤…àîÛ‘∆ê–°{CI&îSpo~lÂvÒë≤ RVÙ“ô?† â)ßAY:—5œÙˇçòu`Ùµ