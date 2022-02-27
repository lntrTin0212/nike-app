-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 25, 2021 at 08:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydathang`
--
CREATE DATABASE IF NOT EXISTS `quanlydathang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quanlydathang`;

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `Benefits` varchar(100) NOT NULL,
  `ChiTiet_STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `Benefits`, `ChiTiet_STT`) VALUES
(1, 'Genuine and synthetic leather and textile materials provide lightweight structure and support.', 2),
(2, 'Visible Air unit in the heel and encapsulated Air unit in the forefoot provide cushioning.', 2),
(3, 'Lightweight, mixed-material upper', 6),
(4, 'Breathable mesh tongue', 4),
(5, 'Padded collar', 4),
(6, 'Exterior plastic shank', 4),
(7, 'Colour-shifting tongue logo', 4),
(8, 'Style: CW2458-108', 4),
(9, 'Country/Region of Origin: Vietnam', 4),
(10, 'Woven tongue label with micro graphics', 5),
(11, 'Heel pull loop', 5),
(12, 'Colour Shown: White/Metallic Silver/Sesame/Flash Crimson', 5),
(13, 'Style: CV8121-100', 5),
(14, 'Country/Region of Origin: Vietnam', 5),
(15, 'Pull tabs on collar', 6),
(16, 'Colour Shown: Birch/Hyper Royal/Rattan/Bright Mandarin', 6),
(17, 'Style: DC9554-200', 6),
(18, 'Country/Region of Origin: China', 6),
(19, 'Midsole height: 41mm', 7),
(20, 'Mix of leather and synthetic materials', 7),
(21, 'Style: CI0919-110', 7),
(22, 'Country/Region of Origin: China', 7),
(23, 'Rubber sole', 8),
(24, 'Colour Shown: White/Deep Magenta/Black/Aquatone', 8),
(25, 'Style: DD1068-103', 8),
(26, 'Country/Region of Origin: China', 8),
(27, 'TPU Swoosh', 9),
(28, 'Comfort sockliner', 9),
(29, 'Style: CU4826-002', 9),
(30, 'Country/Region of Origin: Vietnam', 9),
(31, 'Tongue pull ', 10),
(32, 'Foam insole', 10),
(33, 'Rubber outsole', 10),
(34, 'Style: CU4151-004', 10),
(35, 'Country/Region of Origin: Vietnam', 10),
(36, 'Bold \"NIKE\" and Swoosh on the strap let you rep your brand ', 11),
(37, 'Colour Shown: Black/Off-Noir/Dark Smoke Grey/Pure Platinum', 11),
(38, 'Style: CN9678-009', 11),
(39, 'Country/Region of Origin: Vietnam', 11),
(40, 'Bold \"NIKE\" and Swoosh on the strap let you rep your brand ', 12),
(41, 'Colour Shown: Black/Off-Noir/Dark Smoke Grey/Pure Platinum', 12),
(42, 'Style: CN9675-009', 12),
(43, 'Country/Region of Origin: Indonesia', 12),
(44, 'Standard fit for a relaxed, easy feel', 13),
(45, 'Machine wash', 13),
(46, 'Style: CW6122-016', 13),
(47, 'Country/Region of Origin: Vietnam', 13),
(48, 'Standard fit for a relaxed, easy feel', 14),
(49, 'Vented drop-tail hem', 14),
(50, 'Machine wash', 14),
(51, 'Style: DB3576-731', 14),
(52, 'Country/Region of Origin: Honduras', 14),
(53, 'Standard fit for a relaxed, easy feel', 15),
(54, 'Body: 69% cotton/31% polyester.Pocket bags: 100% cotton.', 15),
(55, 'Machine wash', 15),
(56, 'Style: DD6571-004', 15),
(57, 'Country/Region of Origin: China', 15),
(58, 'Standard fit for a relaxed, easy feel', 16),
(59, 'Body: 100% polyester.Rib: 98% polyester/2% elastane.', 16),
(60, 'Machine wash', 16),
(61, 'Style: DC4320-222', 16),
(62, 'Country/Region of Origin: China', 16),
(63, 'Loose fit for a roomy feel', 17),
(64, 'Solid: Body: 84% cotton/16% polyester.Pocket bag: 100% cotton.', 17),
(65, 'Machine wash', 17),
(66, 'Style: DA0330-010', 17),
(67, 'Country/Region of Origin: Pakistan', 17),
(68, 'Standard fit for a relaxed, easy feel', 18),
(69, '70% cotton/30% silk', 18),
(70, 'Importedh', 18),
(71, 'Style: DH2670-010', 18),
(72, 'Country/Region of Origin: Italy', 18),
(73, 'Heat-applied graphics', 19),
(74, '100% recycled polyester', 19),
(75, 'Imported', 19),
(76, 'Style: CV9469-008', 19),
(77, 'Country/Region of Origin: Thailand', 19),
(78, 'Standard fit for a relaxed, easy feel', 20),
(79, 'Body: 100% cotton. Lining: 92% cotton/8% cashmere.', 20),
(80, 'Imported', 20),
(81, 'Style: DH2898-230', 20),
(82, 'Country/Region of Origin: Italy', 20),
(83, 'Lightweight, mixed-material upper', 1),
(84, 'Exterior plastic shank', 1),
(85, 'Padded collar', 1),
(86, 'Style: CW2458-001', 1),
(87, 'Country/Region of Origin: Vietnam', 1),
(88, 'Foam midsole', 3),
(89, 'Not intended for use as Personal Protective Equipment (PPE)', 3),
(90, 'Colour Shown: Varsity Red/White/Black', 3),
(91, 'Style: DD0587-600', 3),
(92, 'Country/Region of Origin: China', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `TenHH` varchar(150) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TenLoaiHang` varchar(30) NOT NULL,
  `MSHH` int(10) NOT NULL,
  `id_member` int(11) NOT NULL,
  `sizes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `idChiTiet` int(11) NOT NULL,
  `SoDonDH` int(10) NOT NULL,
  `MSHH` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `GiaDatHang` int(10) NOT NULL,
  `GiamGia` int(3) NOT NULL,
  `sizes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`idChiTiet`, `SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`, `sizes_id`) VALUES
(24, 1, 1, 1, 5808700, 5, 40),
(25, 1, 1, 1, 5808700, 5, 43),
(26, 2, 2, 1, 16938600, 10, 36),
(27, 2, 5, 1, 16938600, 10, 43),
(28, 2, 19, 1, 16938600, 10, 39),
(29, 2, 18, 1, 16938600, 10, 37),
(30, 2, 16, 1, 16938600, 10, 37),
(31, 3, 1, 1, 5808700, 5, 42),
(32, 3, 1, 1, 5808700, 5, 41),
(33, 3, 6, 0, 5808700, 5, 39),
(34, 3, 13, 0, 5808700, 5, 40),
(35, 3, 1, 0, 5808700, 5, 36),
(36, 3, 1, 0, 5808700, 5, 37),
(37, 4, 2, 1, 8556100, 5, 43),
(38, 4, 15, 4, 8556100, 5, 41),
(39, 5, 2, 3, 11680650, 5, 36),
(40, 5, 2, 1, 11680650, 5, 43),
(41, 5, 13, 1, 11680650, 5, 38),
(42, 6, 2, 1, 13960650, 5, 43),
(43, 6, 9, 1, 13960650, 5, 36),
(44, 6, 2, 1, 13960650, 5, 37);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_specific`
--

CREATE TABLE `chitiet_specific` (
  `ChiTiet_STT` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `About` varchar(500) NOT NULL,
  `EndCT` varchar(500) NOT NULL,
  `MSHH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiet_specific`
--

INSERT INTO `chitiet_specific` (`ChiTiet_STT`, `Title`, `About`, `EndCT`, `MSHH`) VALUES
(1, 'WHY NOT?', 'Speed is Russell Westbrook\'s not-so-secret weapon. He out-hustles the competition, building momentum and muscling his way onto the highlight reel. Cue the Jordan \'Why Not?\' Zer0.4, the first to featur', 'The durable rubber outsole has a new, data-informed tread pattern. It helps keep you low to the ground and ready to react to the game\'s changing tempo. The rubber is designed to go hard on outdoor cou', 1),
(2, 'CARMINE', 'MJ\'s sixth signature silhouette debuted during the 1990–1991 season as His Airness battled rivals in pursuit of an elusive first championship. Now, the silhouette is back in one of its OG colour schem', '', 2),
(3, 'TORO BRAVO.', 'Originally released in 2009, this fiery colourway is finally staging a comeback.The look sees the singular design of the Air Jordan 5 bathed in a bold shade of University Red.Premium suede gives the s', '', 3),
(4, 'DISRUPTIVE SPEED AT THE CRITICAL MOMENT.', 'Russell Westbrook backs up his brashness with a fast, aggressive playing style and numbers that place him among the league\'s best. His all-new Jordan One Take II embodies his edginess and speed.Colour', '', 4),
(5, 'MAKE EVERY STEP FLY.', 'The Jordan Delta 2 offers a fresh, fearless take on the features you want: durability, comfort and an attitude that\'s Jordan to the core.We updated design lines and swapped out some components, but th', 'Mixed Materials\r\n\r\nMulti-layered, mixed material upper looks both high-tech and handcrafted.\r\n\r\nSmooth, Soft and Responsive\r\n\r\nReact foam is ultra-soft, resilient, and transitions smoothly from heel t', 5),
(6, 'GET YOUR FEET OUTDOORS.', 'Celebrate the great outdoors and get your feet dirty in the Nike ACG Air Mowabb.Celebrating its 30th year, the legendary hiking design gives you the advantage of comfy Air underfoot, supportive Huarache technology around the heel and a speckled midsole to deliver unmistakable comfort and style.Soft nubuck leather in the upper adds durability while the stretchy collar personalises the fit.Lace up and get to your next adventure.', 'Nike ACG\r\nReady to conquer or escape the urban landscape, Nike All Conditions Gear outfits you in modern wear that tackles the elements.Windproof and waterproof fabrics and breathable technologies keep you covered, while next-level design equips you with versatile storage and style options.', 6),
(7, 'DOUBLE THE AF-1.DOUBLE THE FUN.', 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design.Using a layered approach, doubling the branding and exaggerating the midsole, it highlights AF-1 DNA with a bold, new look.', 'Featuring the same iconic shape as the original Air Force 1, a slightly exaggerated midsole makes the shoe instantly recognisable while also playing with proportions.', 7),
(8, 'BRAGGING RIGHTS FOR YOUR FEET.', 'Built to fit your foot and designed for comfort, the Nike Air Huarache brings back a street-level favourite.Soft leather accents on the upper are mixed with super-breathable, perfectly shined neoprene-like fabric for easy styling.The low-cut collar and bootie-like construction keep it sleek.Its iconic heel clip and stripped-away branding keep the early \'90s look you love.', 'The Nike Air Huarache released in 1991.Footwear designer Tinker Hatfield wanted to combine the fit of neoprene water-ski boots with the functionality of South American sandals.The instant hit found its way to basketball courts and then the streets, where it earned its status as an icon.', 8),
(9, 'PERFECT HARMONY BETWEEN TRIED AND NEW.', 'With its sleek, sporty design, the Nike Air Max AP lets you bridge past and present in first-class comfort.Flashes of heritage detailing nod to the Air Max 97, while the streamlined upper and softer midsole give it a modern edge.The low-profile design with a plush padded collar, airy mesh and a comfortable sockliner begs to be worn with any outfit.', 'Revolutionary Air technology first made its way into Nike footwear in 1978.In 1987, the Air Max 1 debuted with visible Air technology in its heel, allowing fans more than just the feel of Air cushioning—suddenly they could see it.Since then, next-generation Air Max shoes have become a hit with athletes and collectors by offering striking colour combinations and reliable, lightweight cushioning.', 9),
(10, 'FAST MOTION, PLUSH COMFORT.', 'The running-inspired Nike Air Max Bolt features rich overlays, wavy design lines and a whole lot of visible Air. The foam midsole adds responsive cushioning, while the lightweight, durable materials make it a first-class essential. Dress it up, dress it down, wear it to the gym, wear it around town—this shoe keeps you in motion.', 'Revolutionary Air technology first made its way into Nike footwear in 1978. In 1987, the Air Max 1 debuted with visible Air technology in its heel, allowing fans more than just the feel of Air cushioning—suddenly they could see it. Since then, next-generation Air Max shoes have become a hit with athletes and collectors by offering striking colour combinations and reliable, lightweight cushioning.', 10),
(11, 'LEGENDARY COMFORT, REMASTERED.', 'From the beach to gardening to sitting on the sofa, the Nike Victori One perfects a classic design. Delivering lightweight comfort that\'s easy to wear, it features new softer, more responsive foam. The contoured grip pattern helps cradle and hold your foot in place.', 'Revolutionary Air technology first made its way into Nike footwear in 1978. In 1987, the Air Max 1 debuted with visible Air technology in its heel, allowing fans more than just the feel of Air cushioning—suddenly they could see it. ', 11),
(12, 'LEGENDARY COMFORT, REMASTERED.', 'From the beach to the bleachers, the Nike Victori One perfects a classic, must-have design. Delivering lightweight comfort that\'s easy to wear, it\'s updated with softer, more responsive foam. The contoured grip pattern helps cradle and hold your foot in place while the new padded strap feels as good as it looks.', 'Revolutionary Air technology first made its way into Nike footwear in 1978. In 1987, the Air Max 1 debuted with visible Air technology in its heel, allowing fans more than just the feel of Air cushioning—suddenly they could see it. ', 12),
(13, 'GET GAME-READY IN SWEAT-WICKING COMFORT.', 'The Nike Dri-FIT Academy Trousers feature sweat-wicking fabric to help keep you dry and moving fast on the pitch.Tapered legs keep your feet clear on the ball, while zip hems let you change them quickly over boots or shoes.This product is made from 100% recycled polyester fibres.', '', 13),
(14, 'CLASSIC COMFORT WITH LEBRON IDENTITY.', 'Made from softly brushed fleece, the LeBron Trousers are warm, relaxed and versatile to wear. A stack of LeBron labels along the side add a subtle signature touch.', '', 14),
(15, 'A NEW KIND OF CARGO TROUSERS.', 'The Nike Sportswear Tech Pack Cargo Trousers bring a fresh feel to a utility favourite.Signature Nike details push the style forwards with angled front flap pockets and secure storage.A technical construction offers plenty of room to move and a streamlined look that helps your favourite sneakers shine.This product is made from at least 50% organic cotton fibres.', 'Angled utility pockets provide a signature Nike look and quick access to small items. An articulated leg design promotes a natural shape for a distraction-free fit.A gusseted leg design provides more room to move between your legs and seat.\r\nThe branded back loop is a signature Tech Pack detail that makes it easy to hang this versatile layer up for quick storage.The Futura logo above the left pocket offers an authentic Nike look.', 15),
(16, 'LIGHTWEIGHT SUPPORT, PRIMED TO PERFORM.', 'The Nike Pro Dri-FIT Tights hug you with lightweight fabric that helps you feel dry, cool and supported from warm-ups through to cool-downs. They\'re made from at least 75% recycled polyester fibres in a stretchy design that helps you move at full intensity during your toughest workouts or competitions.', 'Lightweight, stretchy fabric helps you move naturally during high-intensity sets. The snug elastic waistband holds the tights in place. Flat seams throughout feel smooth against your skin.', 16),
(17, 'ESSENTIAL STAPLE.', 'Premium fabric and a laid-back design highlight the Solo Swoosh Trousers.Part of the Essentials collection, these trousers have a soft feel with a loose fit for all-day wear.', '', 17),
(18, 'LEGENDARY STYLE REFINED.', 'The radiance lives on in the Nike Air Force 1 \'07, the b-ball icon that puts a fresh spin on what you know best: crisp leather, bold colours and the perfect amount of flash to make you shine.', 'Debuting in 1982, the AF-1 was the first basketball shoe to house Nike Air, revolutionising the game while rapidly gaining traction around the world. Today, the Air Force 1 stays true to its roots with the same soft and springy cushioning that changed sneaker history.', 18),
(19, 'STRONG AND SPIRITED.', 'Bold alternative colours and details distinguish the Statement Edition, a jersey that symbolises the collective strength, spirit and competitive mindset of the roster.The Jordan NBA Statement Edition Swingman Jersey of the Brooklyn Nets is inspired by what the pros wear.It\'s made from premium double-knit fabric with an easy, relaxed fit that looks great on fans.This product is made from 100% recycled polyester fibres.', 'Double-knit mesh fabric with Dri-FIT Technology helps you stay dry and comfortable.It has a straight hem and an easy, relaxed fit that\'s great for fans.', 19),
(20, 'EVERY STITCH CONSIDERED.', 'Made in Milan, Italy with a mix of durable woven and knit fabrics for a balanced feel, this rugged shirt jacket adds a dose of thoughtful utility to its classic workwear-inspired design. As a reliable go-between weight, you can wear it as your midlayer or outermost layer with confidence.', 'Thoughtful patterning and seam placements allow this shirt jacket to comfortably drape and flow with your body during movement. A tough mix of knit and woven fabrics help enhance the durability and sensory feel of the garment.', 20);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `name`) VALUES
(1, 'orange'),
(2, 'blue'),
(3, 'red'),
(4, 'white'),
(5, 'pink'),
(6, 'grey'),
(7, 'purple'),
(8, 'rattan'),
(9, 'multi'),
(10, 'black'),
(11, 'brown'),
(12, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `colors_specific`
--

CREATE TABLE `colors_specific` (
  `id_color_spec` int(10) NOT NULL,
  `color_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `MSHH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors_specific`
--

INSERT INTO `colors_specific` (`id_color_spec`, `color_id`, `name`, `MSHH`) VALUES
(1, 1, 'orange', 1),
(2, 2, 'blue', 1),
(3, 3, 'red', 2),
(4, 2, 'blue', 2),
(5, 3, 'red', 3),
(6, 4, 'white', 3),
(7, 4, 'white', 4),
(8, 1, 'orange', 4),
(9, 5, 'pink', 5),
(10, 6, 'grey', 5),
(11, 7, 'purple', 6),
(13, 8, 'rattan', 7),
(14, 9, 'multi', 7),
(15, 10, 'black', 8),
(16, 4, 'white', 8),
(17, 4, 'white', 9),
(18, 10, 'black', 9),
(19, 4, 'white', 10),
(20, 10, 'black', 11),
(21, 2, 'blue', 11),
(22, 4, 'white', 12),
(23, 10, 'black', 12),
(24, 10, 'black', 13),
(25, 10, 'black', 14),
(26, 11, 'brown', 15),
(27, 12, 'green', 16),
(28, 4, 'white', 17),
(29, 3, 'red', 17),
(30, 4, 'white', 18),
(31, 10, 'black', 18),
(32, 6, 'grey', 19),
(33, 8, 'rattan', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(10) NOT NULL,
  `MSKH` int(10) DEFAULT NULL,
  `MSNV` int(10) NOT NULL,
  `NgayDH` varchar(200) NOT NULL,
  `NgayGH` date DEFAULT NULL,
  `TrangThaiDH` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`, `TrangThaiDH`) VALUES
(1, 10, 1, '22/11/21', '0000-00-00', 0),
(2, 11, 1, '22/11/21', '2022-11-21', 1),
(3, 12, 1, '23/11/21', '2023-11-21', 1),
(4, 13, 1, '23/11/21', '2025-11-21', 1),
(5, 14, 1, '23/11/21', '2023-11-21', 1),
(6, 15, 1, '25/11/21', '2025-11-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diachikh`
--

CREATE TABLE `diachikh` (
  `MaDC` int(10) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `MSKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diachikh`
--

INSERT INTO `diachikh` (`MaDC`, `DiaChi`, `MSKH`) VALUES
(10, 'Lê Lỡi', 10),
(11, '62 Lê Lợi', 11),
(12, 'New York', 12),
(13, 'Sài Gòn ', 13),
(14, 'Xô Viết Nghệ Tĩnh, Cần Thơ', 14),
(15, 'Sóc Trăng', 15);

-- --------------------------------------------------------

--
-- Table structure for table `favor`
--

CREATE TABLE `favor` (
  `id` int(11) NOT NULL,
  `TenHH` varchar(150) NOT NULL,
  `Gia` int(11) NOT NULL,
  `TenLoaiHang` varchar(30) NOT NULL,
  `MSHH` int(10) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favor`
--

INSERT INTO `favor` (`id`, `TenHH`, `Gia`, `TenLoaiHang`, `MSHH`, `id_member`) VALUES
(152, 'Nike ACG Air Mowabb', 4699000, 'shoes', 6, 4),
(153, 'Jordan \"Why Not?\" Zer0.4 PF', 3058000, 'shoes', 1, 5),
(154, 'Air Jordan 5 Retro', 5589000, 'shoes', 3, 5),
(155, 'Air Jordan 5 Retro', 5589000, 'shoes', 3, 4),
(156, 'Air Jordan 6 Retro', 5589000, 'shoes', 2, 4),
(157, 'Nike Air Max AP', 3519000, 'shoes', 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(10) NOT NULL,
  `TenHH` varchar(150) NOT NULL,
  `QuyCach` varchar(150) NOT NULL,
  `Gia` int(100) NOT NULL,
  `ChiTiet` varchar(500) NOT NULL,
  `MaLoaiHang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `QuyCach`, `Gia`, `ChiTiet`, `MaLoaiHang`) VALUES
(1, 'Jordan \"Why Not?\" Zer0.4 PF', '0', 3058000, 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design.Using a layered approach, doubling the branding and exaggerating the m', 0),
(2, 'Air Jordan 6 Retro', '0', 5589000, 'MJ\'s sixth signature silhouette debuted during the 1990–1991 season as His Airness battled rivals in pursuit of an elusive first championship. Now, the silhouette is back in one of its OG colour schemes featuring contrasting shades of white and Carmine Red. This edition of the wildly popular colourway includes throwback Nike Air branding on the heel. Gear up for the 30th anniversary of the Air Jordan 6 with this timeless classic.', 0),
(3, 'Air Jordan 5 Retro', '0', 5589000, 'Get your piece of Jordan history and heritage with the Air Jordan 5 Retro.Based on the classic game shoe from 1990, it has all the iconic details, including the bump-out collar, lace toggle and fighter plane-inspired design lines.', 0),
(4, 'Jordan One Take II PF', '0', 2048000, 'Russell Westbrook backs up his brashness with a fast, aggressive playing style and numbers that place him among the league\'s best. His all-new Jordan One Take II embodies his edginess and speed.Colours, textures and design lines speak to Russ\' persona both on and off the court.This PF version uses an extra-durable outsole that\'s ideal for outdoor courts.', 0),
(5, 'Jordan Delta 2', '0', 3058000, 'The Jordan Delta 2 offers a fresh, fearless take on the features you want: durability, comfort and an attitude that\'s Jordan to the core.We updated design lines and swapped out some components, but the idea is the same as the first Delta.The 2 still has that clashing combination of supportive and space age-like materials, with lots of different textures and heavy stitching to create a look that\'s both adventurous and iconic.', 0),
(6, 'Nike ACG Air Mowabb', '0', 4699000, 'Celebrate the great outdoors and get your feet dirty in the Nike ACG Air Mowabb.Celebrating its 30th year, the legendary hiking design gives you the advantage of comfy Air underfoot, supportive Huarache technology around the heel and a speckled midsole to deliver unmistakable comfort and style.Soft nubuck leather in the upper adds durability while the stretchy collar personalises the fit.Lace up and get to your next adventure.', 0),
(7, 'Nike Air Force 1 Shadow', '0', 3239000, 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design.Using a layered approach, doubling the branding and exaggerating the midsole, it highlights AF-1 DNA with a bold, new look.', 0),
(8, 'Nike Air Huarache', '0', 3519000, 'Built to fit your foot and designed for comfort, the Nike Air Huarache brings back the street-level favourite.Smooth leather on the upper mix with super-breathable, perfectly shined neoprene-like fabric for easy styling.The low-cut collar and bootie-like construction keep it sleek and comfy.The iconic heel clip and stripped away branding keep the \'90s running look you love.', 0),
(9, 'Nike Air Max AP', '0', 3519000, 'With its sleek, sporty design, the Nike Air Max AP lets you bridge past and present in first-class comfort.Flashes of heritage detailing nod to the Air Max 97, while the streamlined upper and softer midsole give it a modern edge.The low-profile design with a plush padded collar, airy mesh and a comfortable sockliner begs to be worn with any outfit.', 0),
(10, 'Nike Air Max Bolt', '0', 2649000, 'The running-inspired Nike Air Max Bolt features rich overlays, wavy design lines and a whole lot of visible Air. The foam midsole adds responsive cushioning, while the lightweight, durable materials make it a first-class essential. Dress it up, dress it down, wear it to the gym, wear it around town—this shoe keeps you in motion.', 0),
(11, 'Nike Victori One', '0', 818000, 'You\'ve played hard. You\'ve sweated. You\'ve given your all. Now there\'s just one last thing—you have to hit the showers. Don\'t worry, we\'ve got your back with the Nike Victori One. Its one-piece foam design feels soft and comfortable while traction patterns on the sole help with wet surfaces. They dry quickly too, so no one will know you\'ve just stepped out of the showers as you slide up to the party.', 1),
(12, 'Nike Victori Two', '0', 739000, 'From the beach to the streets, the Nike Victori One perfects a classic, must-have design. Delivering lightweight comfort that\'s easy to wear, it features new, softer foam that feels comfortable while the contoured footbed with grip pattern helps cradle and hold your foot in place. The wide, padded strap feels as good as it looks.', 1),
(13, 'Nike Dri-FIT Academy', '0', 1119000, 'The Nike Dri-FIT Academy Trousers feature sweat-wicking fabric to help keep you dry and moving fast on the pitch.Tapered legs keep your feet clear on the ball, while zip hems let you change them quickly over boots or shoes.This product is made from 100% recycled polyester fibres.', 2),
(14, 'LeBron', '0', 1839000, 'Made from softly brushed fleece, the LeBron Trousers are warm, relaxed and versatile to wear. A stack of LeBron labels along the side add a subtle signature touch.', 2),
(15, 'Nike Sportswear Tech Pack', '0', 3419000, 'The Nike Sportswear Tech Pack Cargo Trousers bring a fresh feel to a utility favourite.Signature Nike details push the style forwards with angled front flap pockets and secure storage.A technical construction offers plenty of room to move and a streamlined look that helps your favourite sneakers shine.This product is made from at least 50% organic cotton fibres.', 2),
(16, 'Nike Air Trousers up', '0', 2039000, 'The Nike Air Trousers update a heritage staple with a sturdy woven trim on the side seams and pockets.A classic fit and open hem design provide a casual comfortable feel.This product is made from at least 75% recycled polyester fibres.', 2),
(17, 'Nike Solo Swoosh', '0', 919000, 'A classic never goes out of style.Heavyweight fabric is mixed with a loose fit for a premium look and feel.', 3),
(18, 'Nike ESC', '0', 5719000, 'Made in Milan, this top highlights the region\'s expertise in crafting luxury clothing—with a Nike spin. Made for movement and ease of wear, its carefully designed patterns and seam placements are paired with a soft, durable blend of cotton and silk for 360 degrees of complete comfort.', 3),
(19, 'Kyrie Irving Nets Statement Edition 2020', '0', 2419000, 'Bold alternative colours and details distinguish the Statement Edition, a jersey that symbolises the collective strength, spirit and competitive mindset of the roster.The Jordan NBA Statement Edition Swingman Jersey of the Brooklyn Nets is inspired by what the pros wear.It\'s made from premium double-knit fabric with an easy, relaxed fit that looks great on fans.This product is made from 100% recycled polyester fibres.', 3),
(20, 'Nike ESC - Men\'s Shirt Jacket', '0', 10309000, 'Made in Milan, Italy with a mix of durable woven and knit fabrics for a balanced feel, this rugged shirt jacket adds a dose of thoughtful utility to its classic workwear-inspired design. As a reliable go-between weight, you can wear it as your midlayer or outermost layer with confidence.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa1`
--

CREATE TABLE `hanghoa1` (
  `MSHH` int(10) NOT NULL,
  `TenHH` varchar(150) NOT NULL,
  `QuyCach` varchar(150) NOT NULL,
  `Gia` int(100) NOT NULL,
  `ChiTiet` varchar(500) NOT NULL,
  `MaLoaiHang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa1`
--

INSERT INTO `hanghoa1` (`MSHH`, `TenHH`, `QuyCach`, `Gia`, `ChiTiet`, `MaLoaiHang`) VALUES
(1, 'Jordan \"Why Not?\" Zer0.4 PF', '0', 3058000, 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design.Using a layered approach, doubling the branding and exaggerating the m', 0),
(2, 'Air Jordan 6 Retro', '0', 5589000, 'MJ\'s sixth signature silhouette debuted during the 1990–1991 season as His Airness battled rivals in pursuit of an elusive first championship. Now, the silhouette is back in one of its OG colour schemes featuring contrasting shades of white and Carmine Red. This edition of the wildly popular colourway includes throwback Nike Air branding on the heel. Gear up for the 30th anniversary of the Air Jordan 6 with this timeless classic.', 0),
(3, 'Air Jordan 5 Retro', '0', 5589000, 'Get your piece of Jordan history and heritage with the Air Jordan 5 Retro.Based on the classic game shoe from 1990, it has all the iconic details, including the bump-out collar, lace toggle and fighter plane-inspired design lines.', 0),
(4, 'Jordan One Take II PF', '0', 2048000, 'Russell Westbrook backs up his brashness with a fast, aggressive playing style and numbers that place him among the league\'s best. His all-new Jordan One Take II embodies his edginess and speed.Colours, textures and design lines speak to Russ\' persona both on and off the court.This PF version uses an extra-durable outsole that\'s ideal for outdoor courts.', 0),
(5, 'Jordan Delta 2', '0', 3058000, 'The Jordan Delta 2 offers a fresh, fearless take on the features you want: durability, comfort and an attitude that\'s Jordan to the core.We updated design lines and swapped out some components, but the idea is the same as the first Delta.The 2 still has that clashing combination of supportive and space age-like materials, with lots of different textures and heavy stitching to create a look that\'s both adventurous and iconic.', 0),
(6, 'Nike ACG Air Mowabb', '0', 4699000, 'Celebrate the great outdoors and get your feet dirty in the Nike ACG Air Mowabb.Celebrating its 30th year, the legendary hiking design gives you the advantage of comfy Air underfoot, supportive Huarache technology around the heel and a speckled midsole to deliver unmistakable comfort and style.Soft nubuck leather in the upper adds durability while the stretchy collar personalises the fit.Lace up and get to your next adventure.', 0),
(7, 'Nike Air Force 1 Shadow', '0', 3239000, 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design.Using a layered approach, doubling the branding and exaggerating the midsole, it highlights AF-1 DNA with a bold, new look.', 0),
(8, 'Nike Air Huarache', '0', 3519000, 'Built to fit your foot and designed for comfort, the Nike Air Huarache brings back the street-level favourite.Smooth leather on the upper mix with super-breathable, perfectly shined neoprene-like fabric for easy styling.The low-cut collar and bootie-like construction keep it sleek and comfy.The iconic heel clip and stripped away branding keep the \'90s running look you love.', 0),
(9, 'Nike Air Max AP', '0', 3519000, 'With its sleek, sporty design, the Nike Air Max AP lets you bridge past and present in first-class comfort.Flashes of heritage detailing nod to the Air Max 97, while the streamlined upper and softer midsole give it a modern edge.The low-profile design with a plush padded collar, airy mesh and a comfortable sockliner begs to be worn with any outfit.', 0),
(10, 'Nike Air Max Bolt', '0', 2649000, 'The running-inspired Nike Air Max Bolt features rich overlays, wavy design lines and a whole lot of visible Air. The foam midsole adds responsive cushioning, while the lightweight, durable materials make it a first-class essential. Dress it up, dress it down, wear it to the gym, wear it around town—this shoe keeps you in motion.', 0),
(11, 'Nike Victori One', '0', 818000, 'You\'ve played hard. You\'ve sweated. You\'ve given your all. Now there\'s just one last thing—you have to hit the showers. Don\'t worry, we\'ve got your back with the Nike Victori One. Its one-piece foam design feels soft and comfortable while traction patterns on the sole help with wet surfaces. They dry quickly too, so no one will know you\'ve just stepped out of the showers as you slide up to the party.', 1),
(12, 'Nike Victori Two', '0', 739000, 'From the beach to the streets, the Nike Victori One perfects a classic, must-have design. Delivering lightweight comfort that\'s easy to wear, it features new, softer foam that feels comfortable while the contoured footbed with grip pattern helps cradle and hold your foot in place. The wide, padded strap feels as good as it looks.', 1),
(13, 'Nike Dri-FIT Academy', '0', 1119000, 'The Nike Dri-FIT Academy Trousers feature sweat-wicking fabric to help keep you dry and moving fast on the pitch.Tapered legs keep your feet clear on the ball, while zip hems let you change them quickly over boots or shoes.This product is made from 100% recycled polyester fibres.', 2),
(14, 'LeBron', '0', 1839000, 'Made from softly brushed fleece, the LeBron Trousers are warm, relaxed and versatile to wear. A stack of LeBron labels along the side add a subtle signature touch.', 2),
(15, 'Nike Sportswear Tech Pack', '0', 3419000, 'The Nike Sportswear Tech Pack Cargo Trousers bring a fresh feel to a utility favourite.Signature Nike details push the style forwards with angled front flap pockets and secure storage.A technical construction offers plenty of room to move and a streamlined look that helps your favourite sneakers shine.This product is made from at least 50% organic cotton fibres.', 2),
(16, 'Nike Air Trousers up', '0', 2039000, 'The Nike Air Trousers update a heritage staple with a sturdy woven trim on the side seams and pockets.A classic fit and open hem design provide a casual comfortable feel.This product is made from at least 75% recycled polyester fibres.', 2),
(17, 'Nike Solo Swoosh', '0', 919000, 'A classic never goes out of style.Heavyweight fabric is mixed with a loose fit for a premium look and feel.', 3),
(18, 'Nike ESC', '0', 5719000, 'Made in Milan, this top highlights the region\'s expertise in crafting luxury clothing—with a Nike spin. Made for movement and ease of wear, its carefully designed patterns and seam placements are paired with a soft, durable blend of cotton and silk for 360 degrees of complete comfort.', 3),
(19, 'Kyrie Irving Nets Statement Edition 2020', '0', 2419000, 'Bold alternative colours and details distinguish the Statement Edition, a jersey that symbolises the collective strength, spirit and competitive mindset of the roster.The Jordan NBA Statement Edition Swingman Jersey of the Brooklyn Nets is inspired by what the pros wear.It\'s made from premium double-knit fabric with an easy, relaxed fit that looks great on fans.This product is made from 100% recycled polyester fibres.', 3),
(20, 'Nike ESC - Men\'s Shirt Jacket', '0', 10309000, 'Made in Milan, Italy with a mix of durable woven and knit fabrics for a balanced feel, this rugged shirt jacket adds a dose of thoughtful utility to its classic workwear-inspired design. As a reliable go-between weight, you can wear it as your midlayer or outermost layer with confidence.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hinhhanghoa`
--

CREATE TABLE `hinhhanghoa` (
  `MaHinh` int(30) NOT NULL,
  `STT_Hinh` int(10) NOT NULL,
  `TenHinh` varchar(30) NOT NULL,
  `url` varchar(150) NOT NULL,
  `MSHH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinhhanghoa`
--

INSERT INTO `hinhhanghoa` (`MaHinh`, `STT_Hinh`, `TenHinh`, `url`, `MSHH`) VALUES
(1, 1, '1-cam.jpg', '../assets/img_stuff/1/', 1),
(2, 2, '1-cam1.jpg', '../assets/img_stuff/1/', 1),
(3, 3, '1-cam2.jpg', '../assets/img_stuff/1/', 1),
(4, 4, '1-cam3.jpg', '../assets/img_stuff/1/', 1),
(5, 5, '1-cam4.jpg', '../assets/img_stuff/1/', 1),
(6, 6, '1-cam5.jpg', '../assets/img_stuff/1/', 1),
(7, 7, '1-cam7.jpg', '../assets/img_stuff/1/', 1),
(8, 8, '1-blue.jpg', '../assets/img_stuff/1/', 1),
(9, 9, '1-blue1.jpg', '../assets/img_stuff/1/', 1),
(10, 10, '1-blue2.jpg', '../assets/img_stuff/1/', 1),
(11, 11, '1-blue3.jpg', '../assets/img_stuff/1/', 1),
(12, 12, '1-blue4.jpg', '../assets/img_stuff/1/', 1),
(13, 13, '1-blue5.jpg', '../assets/img_stuff/1/', 1),
(14, 14, '1-blue7.jpg', '../assets/img_stuff/1/', 1),
(15, 1, '2-red01.jpg', '../assets/img_stuff/2/', 2),
(16, 2, '2-red02.jpg', '../assets/img_stuff/2/', 2),
(17, 3, '2-red03.jpg', '../assets/img_stuff/2/', 2),
(18, 4, '2-red04.jpg', '../assets/img_stuff/2/', 2),
(19, 5, '2-red05.jpg', '../assets/img_stuff/2/', 2),
(20, 6, '2-red06.jpg', '../assets/img_stuff/2/', 2),
(21, 7, '2-red07.jpg', '../assets/img_stuff/2/', 2),
(22, 8, '2-red08.jpg', '../assets/img_stuff/2/', 2),
(23, 1, '3-red00.jpg', '../assets/img_stuff/3/', 3),
(24, 2, '3-red01.jpg', '../assets/img_stuff/3/', 3),
(25, 3, '3-red02.jpg', '../assets/img_stuff/3/', 3),
(26, 4, '3-red03.jpg', '../assets/img_stuff/3/', 3),
(27, 5, '3-red04.jpg', '../assets/img_stuff/3/', 3),
(28, 6, '3-red05.jpg', '../assets/img_stuff/3/', 3),
(29, 7, '3-red06.jpg', '../assets/img_stuff/3/', 3),
(30, 8, '3-red07.jpg', '../assets/img_stuff/3/', 3),
(31, 16, '3-white00.jpg', '../assets/img_stuff/3/', 3),
(32, 9, '3-white01.jpg', '../assets/img_stuff/3/', 3),
(33, 10, '3-white02.jpg', '../assets/img_stuff/3/', 3),
(34, 11, '3-white03.jpg', '../assets/img_stuff/3/', 3),
(35, 12, '3-white04.jpg', '../assets/img_stuff/3/', 3),
(36, 13, '3-white05.jpg', '../assets/img_stuff/3/', 3),
(37, 14, '3-white06.jpg', '../assets/img_stuff/3/', 3),
(38, 15, '3-white07.jpg', '../assets/img_stuff/3/', 3),
(39, 1, '4-orange00.jpg', '../assets/img_stuff/4/', 4),
(40, 2, '4-orange01.jpg', '../assets/img_stuff/4/', 4),
(41, 3, '4-orange02.jpg', '../assets/img_stuff/4/', 4),
(42, 4, '4-orange03.jpg', '../assets/img_stuff/4/', 4),
(43, 5, '4-orange04.jpg', '../assets/img_stuff/4/', 4),
(44, 6, '4-orange05.jpg', '../assets/img_stuff/4/', 4),
(45, 7, '4-orange06.jpg', '../assets/img_stuff/4/', 4),
(46, 8, '4-orange07.jpg', '../assets/img_stuff/4/', 4),
(47, 16, '4-white00.jpg', '../assets/img_stuff/4/', 4),
(48, 9, '4-white01.jpg', '../assets/img_stuff/4/', 4),
(49, 10, '4-white02.jpg', '../assets/img_stuff/4/', 4),
(50, 11, '4-white03.jpg', '../assets/img_stuff/4/', 4),
(51, 12, '4-white04.jpg', '../assets/img_stuff/4/', 4),
(52, 13, '4-white05.jpg', '../assets/img_stuff/4/', 4),
(53, 14, '4-white06.jpg', '../assets/img_stuff/4/', 4),
(54, 15, '4-white07.jpg', '../assets/img_stuff/4/', 4),
(55, 1, '5-grey00.jpg', '../assets/img_stuff/5/', 5),
(56, 2, '5-grey01.jpg', '../assets/img_stuff/5/', 5),
(57, 3, '5-grey02.jpg', '../assets/img_stuff/5/', 5),
(58, 4, '5-grey03.jpg', '../assets/img_stuff/5/', 5),
(59, 5, '5-grey04.jpg', '../assets/img_stuff/5/', 5),
(60, 6, '5-grey05.jpg', '../assets/img_stuff/5/', 5),
(61, 7, '5-grey06.jpg', '../assets/img_stuff/5/', 5),
(62, 8, '5-grey07.jpg', '../assets/img_stuff/5/', 5),
(63, 16, '5-pink00.jpg', '../assets/img_stuff/5/', 5),
(64, 9, '5-pink01.jpg', '../assets/img_stuff/5/', 5),
(65, 10, '5-pink02.jpg', '../assets/img_stuff/5/', 5),
(66, 11, '5-pink03.jpg', '../assets/img_stuff/5/', 5),
(67, 12, '5-pink04.jpg', '../assets/img_stuff/5/', 5),
(68, 13, '5-pink05.jpg', '../assets/img_stuff/5/', 5),
(69, 14, '5-pink06.jpg', '../assets/img_stuff/5/', 5),
(70, 15, '5-pink07.jpg', '../assets/img_stuff/5/', 5),
(71, 1, '6-purple00.jpg', '../assets/img_stuff/6/', 6),
(72, 2, '6-purple01.jpg', '../assets/img_stuff/6/', 6),
(73, 3, '6-purple02.jpg', '../assets/img_stuff/6/', 6),
(74, 4, '6-purple03.jpg', '../assets/img_stuff/6/', 6),
(75, 5, '6-purple04.jpg', '../assets/img_stuff/6/', 6),
(76, 6, '6-purple05.jpg', '../assets/img_stuff/6/', 6),
(77, 7, '6-purple06.jpg', '../assets/img_stuff/6/', 6),
(78, 8, '6-purple07.jpg', '../assets/img_stuff/6/', 6),
(79, 16, '6-rattan00.jpg', '../assets/img_stuff/6/', 6),
(80, 9, '6-rattan01.jpg', '../assets/img_stuff/6/', 6),
(81, 10, '6-rattan02.jpg', '../assets/img_stuff/6/', 6),
(82, 11, '6-rattan03.jpg', '../assets/img_stuff/6/', 6),
(83, 12, '6-rattan04.jpg', '../assets/img_stuff/6/', 6),
(84, 13, '6-rattan05.jpg', '../assets/img_stuff/6/', 6),
(85, 14, '6-rattan06.jpg', '../assets/img_stuff/6/', 6),
(86, 15, '6-rattan07.jpg', '../assets/img_stuff/6/', 6),
(87, 1, '7-multi00.jpg', '../assets/img_stuff/7/', 7),
(88, 2, '7-multi01.jpg', '../assets/img_stuff/7/', 7),
(89, 3, '7-multi02.jpg', '../assets/img_stuff/7/', 7),
(90, 4, '7-multi03.jpg', '../assets/img_stuff/7/', 7),
(91, 5, '7-multi04.jpg', '../assets/img_stuff/7/', 7),
(92, 6, '7-multi05.jpg', '../assets/img_stuff/7/', 7),
(93, 7, '7-multi06.jpg', '../assets/img_stuff/7/', 7),
(94, 8, '7-multi07.jpg', '../assets/img_stuff/7/', 7),
(95, 16, '7-rattan00.jpg', '../assets/img_stuff/7/', 7),
(96, 9, '7-rattan01.jpg', '../assets/img_stuff/7/', 7),
(97, 10, '7-rattan02.jpg', '../assets/img_stuff/7/', 7),
(98, 11, '7-rattan03.jpg', '../assets/img_stuff/7/', 7),
(99, 12, '7-rattan04.jpg', '../assets/img_stuff/7/', 7),
(100, 13, '7-rattan05.jpg', '../assets/img_stuff/7/', 7),
(101, 14, '7-rattan06.jpg', '../assets/img_stuff/7/', 7),
(102, 15, '7-rattan07.jpg', '../assets/img_stuff/7/', 7),
(103, 1, '8-black00.jpg', '../assets/img_stuff/8/', 8),
(104, 2, '8-black01.jpg', '../assets/img_stuff/8/', 8),
(105, 3, '8-black02.jpg', '../assets/img_stuff/8/', 8),
(106, 4, '8-black03.jpg', '../assets/img_stuff/8/', 8),
(107, 5, '8-black04.jpg', '../assets/img_stuff/8/', 8),
(108, 6, '8-black05.jpg', '../assets/img_stuff/8/', 8),
(109, 7, '8-black06.jpg', '../assets/img_stuff/8/', 8),
(110, 8, '8-black07.jpg', '../assets/img_stuff/8/', 8),
(111, 16, '8-white00.jpg', '../assets/img_stuff/8/', 8),
(112, 9, '8-white01.jpg', '../assets/img_stuff/8/', 8),
(113, 10, '8-white02.jpg', '../assets/img_stuff/8/', 8),
(114, 11, '8-white03.jpg', '../assets/img_stuff/8/', 8),
(115, 12, '8-white04.jpg', '../assets/img_stuff/8/', 8),
(116, 13, '8-white05.jpg', '../assets/img_stuff/8/', 8),
(117, 14, '8-white06.jpg', '../assets/img_stuff/8/', 8),
(118, 15, '8-white07.jpg', '../assets/img_stuff/8/', 8),
(119, 1, '9-black00.jpg', '../assets/img_stuff/9/', 9),
(120, 2, '9-black01.jpg', '../assets/img_stuff/9/', 9),
(121, 3, '9-black02.jpg', '../assets/img_stuff/9/', 9),
(122, 4, '9-black03.jpg', '../assets/img_stuff/9/', 9),
(123, 5, '9-black04.jpg', '../assets/img_stuff/9/', 9),
(124, 6, '9-black05.jpg', '../assets/img_stuff/9/', 9),
(125, 7, '9-black06.jpg', '../assets/img_stuff/9/', 9),
(126, 8, '9-black07.jpg', '../assets/img_stuff/9/', 9),
(127, 16, '9-white00.jpg', '../assets/img_stuff/9/', 9),
(128, 9, '9-white01.jpg', '../assets/img_stuff/9/', 9),
(129, 10, '9-white02.jpg', '../assets/img_stuff/9/', 9),
(130, 11, '9-white03.jpg', '../assets/img_stuff/9/', 9),
(131, 12, '9-white04.jpg', '../assets/img_stuff/9/', 9),
(132, 13, '9-white05.jpg', '../assets/img_stuff/9/', 9),
(133, 14, '9-white06.jpg', '../assets/img_stuff/9/', 9),
(134, 15, '9-white07.jpg', '../assets/img_stuff/9/', 9),
(135, 1, '10-white00.jpg', '../assets/img_stuff/10/', 10),
(136, 2, '10-white01.jpg', '../assets/img_stuff/10/', 10),
(137, 3, '10-white02.jpg', '../assets/img_stuff/10/', 10),
(138, 4, '10-white03.jpg', '../assets/img_stuff/10/', 10),
(139, 5, '10-white04.jpg', '../assets/img_stuff/10/', 10),
(140, 6, '10-white05.jpg', '../assets/img_stuff/10/', 10),
(141, 7, '10-white06.jpg', '../assets/img_stuff/10/', 10),
(142, 8, '10-white07.jpg', '../assets/img_stuff/10/', 10),
(143, 1, '11-black00.jpg', '../assets/img_stuff/11/', 11),
(144, 2, '11-black01.jpg', '../assets/img_stuff/11/', 11),
(145, 3, '11-black02.jpg', '../assets/img_stuff/11/', 11),
(146, 4, '11-black03.jpg', '../assets/img_stuff/11/', 11),
(147, 4, '11-black04.jpg', '../assets/img_stuff/11/', 11),
(148, 5, '11-blue00.jpg', '../assets/img_stuff/11/', 11),
(149, 6, '11-blue01.jpg', '../assets/img_stuff/11/', 11),
(150, 7, '11-blue02.jpg', '../assets/img_stuff/11/', 11),
(151, 8, '11-blue03.jpg', '../assets/img_stuff/11/', 11),
(152, 9, '11-blue04.jpg', '../assets/img_stuff/11/', 11),
(153, 1, '12-black00.jpg', '../assets/img_stuff/12/', 12),
(154, 2, '12-black01.jpg', '../assets/img_stuff/12/', 12),
(155, 3, '12-black02.jpg', '../assets/img_stuff/12/', 12),
(156, 4, '12-black03.jpg', '../assets/img_stuff/12/', 12),
(157, 4, '12-black04.jpg', '../assets/img_stuff/12/', 12),
(158, 5, '12-white00.jpg', '../assets/img_stuff/12/', 12),
(159, 6, '12-white01.jpg', '../assets/img_stuff/12/', 12),
(160, 7, '12-white02.jpg', '../assets/img_stuff/12/', 12),
(161, 8, '12-white03.jpg', '../assets/img_stuff/12/', 12),
(162, 9, '12-white04.jpg', '../assets/img_stuff/12/', 12),
(163, 1, '13-black00.jpg', '../assets/img_stuff/13/', 13),
(164, 2, '13-black01.jpg', '../assets/img_stuff/13/', 13),
(165, 3, '13-black02.jpg', '../assets/img_stuff/13/', 13),
(166, 4, '13-black03.jpg', '../assets/img_stuff/13/', 13),
(167, 1, '14-black00.jpg', '../assets/img_stuff/14/', 14),
(168, 2, '14-black01.jpg', '../assets/img_stuff/14/', 14),
(169, 3, '14-black02.jpg', '../assets/img_stuff/14/', 14),
(170, 4, '14-black03.jpg', '../assets/img_stuff/14/', 14),
(171, 5, '14-black04.jpg', '../assets/img_stuff/14/', 14),
(172, 1, '15-brown00.jpg', '../assets/img_stuff/15/', 15),
(173, 2, '15-brown01.jpg', '../assets/img_stuff/15/', 15),
(174, 3, '15-brown02.jpg', '../assets/img_stuff/15/', 15),
(175, 4, '15-brown03.jpg', '../assets/img_stuff/15/', 15),
(176, 5, '15-brown04.jpg', '../assets/img_stuff/15/', 15),
(177, 6, '15-brown05.jpg', '../assets/img_stuff/15/', 15),
(178, 7, '15-brown06.jpg', '../assets/img_stuff/15/', 15),
(179, 1, '16-green00.jpg', '../assets/img_stuff/16/', 16),
(180, 2, '16-green01.jpg', '../assets/img_stuff/16/', 16),
(181, 3, '16-green02.jpg', '../assets/img_stuff/16/', 16),
(182, 4, '16-green03.jpg', '../assets/img_stuff/16/', 16),
(183, 5, '16-green04.jpg', '../assets/img_stuff/16/', 16),
(184, 6, '16-green05.jpg', '../assets/img_stuff/16/', 16),
(185, 1, '17-red00.jpg', '../assets/img_stuff/17/', 17),
(186, 2, '17-red01.jpg', '../assets/img_stuff/17/', 17),
(187, 3, '17-red02.jpg', '../assets/img_stuff/17/', 17),
(188, 4, '17-red03.jpg', '../assets/img_stuff/17/', 17),
(189, 5, '17-white00.jpg', '../assets/img_stuff/17/', 17),
(190, 6, '17-white01.jpg', '../assets/img_stuff/17/', 17),
(191, 7, '17-white02.jpg', '../assets/img_stuff/17/', 17),
(192, 8, '17-white03.jpg', '../assets/img_stuff/17/', 17),
(193, 1, '18-black00.jpg', '../assets/img_stuff/18/', 18),
(194, 2, '18-black01.jpg', '../assets/img_stuff/18/', 18),
(195, 3, '18-black02.jpg', '../assets/img_stuff/18/', 18),
(196, 4, '18-black03.jpg', '../assets/img_stuff/18/', 18),
(197, 5, '18-black04.jpg', '../assets/img_stuff/18/', 18),
(198, 6, '18-black05.jpg', '../assets/img_stuff/18/', 18),
(199, 7, '18-black06.jpg', '../assets/img_stuff/18/', 18),
(200, 9, '18-white00.jpg', '../assets/img_stuff/18/', 18),
(201, 10, '18-white01.jpg', '../assets/img_stuff/18/', 18),
(202, 11, '18-white02.jpg', '../assets/img_stuff/18/', 18),
(203, 12, '18-white03.jpg', '../assets/img_stuff/18/', 18),
(204, 13, '18-white04.jpg', '../assets/img_stuff/18/', 18),
(205, 14, '18-white05.jpg', '../assets/img_stuff/18/', 18),
(206, 15, '18-white06.jpg', '../assets/img_stuff/18/', 18),
(207, 1, '19-grey00.jpg', '../assets/img_stuff/19/', 19),
(208, 2, '19-grey01.jpg', '../assets/img_stuff/19/', 19),
(209, 3, '19-grey02.jpg', '../assets/img_stuff/19/', 19),
(210, 4, '19-grey03.jpg', '../assets/img_stuff/19/', 19),
(211, 5, '19-grey04.jpg', '../assets/img_stuff/19/', 19),
(212, 6, '19-grey05.jpg', '../assets/img_stuff/19/', 19),
(213, 7, '19-grey06.jpg', '../assets/img_stuff/19/', 19),
(214, 1, '20-rattan00.jpg', '../assets/img_stuff/20/', 20),
(215, 2, '20-rattan01.jpg', '../assets/img_stuff/20/', 20),
(216, 3, '20-rattan02.jpg', '../assets/img_stuff/20/', 20),
(217, 4, '20-rattan03.jpg', '../assets/img_stuff/20/', 20),
(218, 5, '20-rattan04.jpg', '../assets/img_stuff/20/', 20),
(219, 6, '20-rattan05.jpg', '../assets/img_stuff/20/', 20),
(220, 7, '20-rattan06.jpg', '../assets/img_stuff/20/', 20);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(10) NOT NULL,
  `id_member` int(11) NOT NULL,
  `HoTenKH` varchar(100) NOT NULL,
  `TenCongTy` varchar(50) DEFAULT NULL,
  `SoDienThoai` int(10) NOT NULL,
  `SoFax` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `id_member`, `HoTenKH`, `TenCongTy`, `SoDienThoai`, `SoFax`) VALUES
(10, 4, 'Trọng Tín', '', 396455346, 121959783),
(11, 4, 'Lê Nguyễn Trọng Tín', '', 1219597833, 1219597895),
(12, 5, 'Mark Zurk.', '', 232152152, 2147483647),
(13, 5, 'wean le', '', 121325152, 2147483647),
(14, 4, 'Mixi', '', 121959518, 261564895),
(15, 4, 'Test', '', 212998512, 212998132);

-- --------------------------------------------------------

--
-- Table structure for table `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(10) NOT NULL,
  `TenLoaiHang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
(0, 'shoes'),
(1, 'slippers'),
(2, 'pants'),
(3, 'tees');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `password`, `firstname`, `lastname`, `dob`, `gender`) VALUES
(4, 'trongtin@gmail.com', '$2y$10$q6LY8/rhRDVvlLaSRIHCQ.KmFgmUk.Lsa.kZo99b7c3Dgf/7aSzt2', 'Tin', 'Le', '2000-12-02', 'Male'),
(5, 'Trongtin0212@gmail.com', '$2y$10$LmJ9L8YlvL8iBDX2iwiVY.c/nAicoQPp7la0.bUK2cwQtxM6jR4Q.', 'Trọng', 'Tín', '2000-09-16', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(10) NOT NULL,
  `TenDangNhap` varchar(16) NOT NULL,
  `MatKhau` varchar(16) NOT NULL,
  `HoTenNV` varchar(30) NOT NULL,
  `ChucVu` varchar(30) NOT NULL,
  `SoDienThoai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `TenDangNhap`, `MatKhau`, `HoTenNV`, `ChucVu`, `SoDienThoai`) VALUES
(1, 'NhanVien001', '123456', 'Lê Nguyễn Trọng Tín', 'Ban Hang', 396455346),
(2, 'NhanVien002', '123456', 'Nguyễn Phạm Hữu Tài', 'Ban Hang', 1219597833);

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` int(11) NOT NULL,
  `ProductDetails` varchar(100) NOT NULL,
  `ChiTiet_STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `ProductDetails`, `ChiTiet_STT`) VALUES
(1, 'Clear rubber outsole', 2),
(2, 'Windowed tongue', 2),
(3, 'Lace toggle', 2),
(4, 'Moulded heel spoiler', 2),
(5, 'Nike Air\" heel embroidery', 2),
(6, 'Colour Shown: White/Black/Carmine', 2),
(7, 'Style: CT8529-106', 2),
(8, 'Country/Region of Origin: Vietnam', 2),
(9, 'Foam midsole', 3),
(10, 'Rubber outsole', 3),
(11, 'Not intended for use as Personal Protective Equipment (PPE)', 3),
(12, 'Colour Shown: Varsity Red/White/Black', 3),
(13, 'Style: DD0587-600', 3),
(14, 'Country/Region of Origin: China', 3),
(20, 'Top-Loaded Zoom', 4),
(21, 'Ground Control', 4),
(22, 'Lock-In Lacing', 4),
(23, 'Extra-durable rubber outsole is designed to hold up on outdoor surfaces.', 4),
(24, 'Moulded rubber mudguard along the outer midfoot provides side-to-side stability.', 5),
(25, 'Soft, flexible tongue helps for a snug, comfortable fit.', 5),
(26, 'Celebrating 30.', 6),
(27, 'Support and Cushioning', 6),
(28, 'Traction When You Need It', 6),
(29, 'you get a layered look with double the branding.', 7),
(30, 'Lightweight Comfort', 7),
(31, 'a slightly exaggerated midsole makes the shoe instantly recognisable while also playing with proport', 7),
(32, 'The plush foam midsole feels soft and springy.', 8),
(33, 'The upper features an airy, neoprene-like fabric for added comfort and easy styling.', 8),
(34, 'Traction When You Need It', 8),
(35, 'Support and Cushioning', 8),
(36, 'The rubber sole adds durability and traction.', 8),
(37, 'Premium leather and airy mesh on the upper add heritage styling while keeping it lightweight and com', 9),
(38, 'The upper feature', 9),
(39, 'Foam midsole feels incredibly soft, adding spring to your step.', 9),
(40, 'Rubber outsole adds traction and durability..', 9),
(41, 'The mesh in the upper adds airflow and comfort.', 10),
(42, 'The low-cut, padded collar looks sleek and feels comfortable.', 10),
(43, 'The tooling features a new pattern for added traction.', 11),
(44, 'The wider strap adds additional space, accommodating more foot sizes.', 11),
(45, 'The rolled top edge of the strap adds to the comfort while its thick padding feels soft.', 11),
(46, 'The tooling features a new pattern for added traction.', 12),
(47, 'The wider strap adds additional space, accing more foot sizes.', 12),
(48, 'The rolled top edge of tck padding feels soft.', 12),
(49, 'Dri-FIT Technology helps keep you dry and comfortable.', 13),
(50, 'Tapered legs help keep your feet clear when youre on the ball.', 13),
(51, 'Zip hems let you get changed easily over boots or shoes.', 13),
(52, 'Stay Dry', 14),
(53, 'Soft and Smooth', 14),
(54, 'Historic Season', 14),
(55, 'An elasticated waist and adjustable drawcord provide a personalised fit.', 15),
(56, 'Side seam pockets provide additional small-item storage.', 15),
(57, 'A tailored leg design provides a clean look and comfortable feel.', 16),
(58, 'Front pockets provide quick storage for daily essentials.', 16),
(59, 'Brushed-back fabric delivers soft warmth.', 17),
(60, 'Elastic cuffs help seal in warmth.', 17),
(61, 'Soft Feel', 18),
(62, 'Premium Artisanship', 18),
(63, 'Fit for Fans', 19),
(64, 'Jumpman x Statement', 19),
(65, 'Useful Utilities', 20),
(66, 'Rugged Function', 20),
(67, 'Useful Utilities', 20),
(68, 'Double-Stacked Attack.', 1),
(69, 'Fast-Action Traction Outdoors', 1),
(70, 'Traction When You Need It', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `sizes_id` int(10) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`sizes_id`, `number`) VALUES
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44);

-- --------------------------------------------------------

--
-- Table structure for table `sizes_specific`
--

CREATE TABLE `sizes_specific` (
  `id_size_spec` int(10) NOT NULL,
  `sizes_id` int(10) NOT NULL,
  `MSHH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes_specific`
--

INSERT INTO `sizes_specific` (`id_size_spec`, `sizes_id`, `MSHH`) VALUES
(1, 36, 1),
(2, 37, 1),
(3, 38, 1),
(4, 39, 1),
(5, 40, 1),
(6, 41, 1),
(7, 42, 1),
(8, 43, 1),
(9, 44, 1),
(10, 36, 2),
(11, 37, 2),
(12, 38, 2),
(13, 39, 2),
(14, 40, 2),
(15, 41, 2),
(16, 42, 2),
(17, 43, 2),
(18, 44, 2),
(19, 36, 3),
(20, 37, 3),
(21, 38, 3),
(22, 39, 3),
(23, 40, 3),
(24, 41, 3),
(25, 42, 3),
(26, 43, 3),
(27, 44, 3),
(28, 36, 4),
(29, 37, 4),
(30, 38, 4),
(31, 39, 4),
(32, 40, 4),
(33, 41, 4),
(34, 42, 4),
(35, 43, 4),
(36, 44, 4),
(37, 36, 5),
(38, 37, 5),
(39, 38, 5),
(40, 39, 5),
(41, 40, 5),
(42, 41, 5),
(43, 42, 5),
(44, 43, 5),
(45, 44, 5),
(46, 36, 6),
(47, 37, 6),
(48, 38, 6),
(49, 39, 6),
(50, 40, 6),
(51, 41, 6),
(52, 42, 6),
(53, 43, 6),
(54, 44, 6),
(55, 36, 7),
(56, 37, 7),
(57, 38, 7),
(58, 39, 7),
(59, 40, 7),
(60, 41, 7),
(61, 42, 7),
(62, 43, 7),
(63, 44, 7),
(64, 36, 8),
(65, 37, 8),
(66, 38, 8),
(67, 39, 8),
(68, 40, 8),
(69, 41, 8),
(70, 42, 8),
(71, 43, 8),
(72, 44, 8),
(73, 36, 9),
(74, 37, 9),
(75, 38, 9),
(76, 39, 9),
(77, 40, 9),
(78, 41, 9),
(79, 42, 9),
(80, 43, 9),
(81, 44, 9),
(82, 36, 10),
(83, 37, 10),
(84, 38, 10),
(85, 39, 10),
(86, 40, 10),
(87, 41, 10),
(88, 42, 10),
(89, 43, 10),
(90, 44, 10),
(91, 36, 11),
(92, 37, 11),
(93, 38, 11),
(94, 39, 11),
(95, 40, 11),
(96, 41, 11),
(97, 42, 11),
(98, 43, 11),
(99, 44, 11),
(100, 36, 12),
(101, 37, 12),
(102, 38, 12),
(103, 39, 12),
(104, 40, 12),
(105, 41, 12),
(106, 42, 12),
(107, 43, 12),
(108, 44, 12),
(109, 36, 13),
(110, 37, 13),
(111, 38, 13),
(112, 39, 13),
(113, 40, 13),
(114, 41, 13),
(115, 42, 13),
(116, 43, 13),
(117, 44, 13),
(118, 36, 14),
(119, 37, 14),
(120, 38, 14),
(121, 39, 14),
(122, 40, 14),
(123, 41, 14),
(124, 42, 14),
(125, 43, 14),
(126, 44, 14),
(127, 36, 15),
(128, 37, 15),
(129, 38, 15),
(130, 39, 15),
(131, 40, 15),
(132, 41, 15),
(133, 42, 15),
(134, 43, 15),
(135, 44, 15),
(136, 36, 16),
(137, 37, 16),
(138, 38, 16),
(139, 39, 16),
(140, 40, 16),
(141, 41, 16),
(142, 42, 16),
(143, 43, 16),
(144, 44, 16),
(145, 36, 17),
(146, 37, 17),
(147, 38, 17),
(148, 39, 17),
(149, 40, 17),
(150, 41, 17),
(151, 42, 17),
(152, 43, 17),
(153, 44, 17),
(154, 36, 18),
(155, 37, 18),
(156, 38, 18),
(157, 39, 18),
(158, 40, 18),
(159, 41, 18),
(160, 42, 18),
(161, 43, 18),
(162, 44, 18),
(163, 36, 19),
(164, 37, 19),
(165, 38, 19),
(166, 39, 19),
(167, 40, 19),
(168, 41, 19),
(169, 42, 19),
(170, 43, 19),
(171, 44, 19),
(172, 36, 20),
(173, 37, 20),
(174, 38, 20),
(175, 39, 20),
(176, 40, 20),
(177, 41, 20),
(178, 42, 20),
(179, 43, 20),
(180, 44, 20);

-- --------------------------------------------------------

--
-- Table structure for table `soluong_specific`
--

CREATE TABLE `soluong_specific` (
  `capa-id` int(10) NOT NULL,
  `MSHH` int(10) NOT NULL,
  `id_color_spec` int(10) DEFAULT NULL,
  `id_size_spec` int(11) NOT NULL,
  `capa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soluong_specific`
--

INSERT INTO `soluong_specific` (`capa-id`, `MSHH`, `id_color_spec`, `id_size_spec`, `capa`) VALUES
(1, 1, NULL, 1, 100),
(2, 1, NULL, 2, 100),
(3, 1, NULL, 3, 100),
(4, 1, NULL, 4, 100),
(5, 1, NULL, 5, 100),
(6, 1, NULL, 6, 100),
(7, 1, NULL, 7, 100),
(8, 1, NULL, 8, 100),
(9, 1, NULL, 9, 100),
(10, 2, NULL, 10, 100),
(11, 2, NULL, 11, 100),
(12, 2, NULL, 12, 100),
(13, 2, NULL, 13, 100),
(14, 2, NULL, 14, 100),
(15, 2, NULL, 15, 100),
(16, 2, NULL, 16, 100),
(17, 2, NULL, 17, 100),
(18, 2, NULL, 18, 100),
(19, 3, NULL, 19, 100),
(20, 3, NULL, 20, 100),
(21, 3, NULL, 21, 100),
(22, 3, NULL, 22, 100),
(23, 3, NULL, 23, 100),
(24, 3, NULL, 24, 100),
(25, 3, NULL, 25, 100),
(26, 3, NULL, 26, 100),
(27, 3, NULL, 27, 100),
(28, 4, NULL, 28, 100),
(29, 4, NULL, 29, 100),
(30, 4, NULL, 30, 100),
(31, 4, NULL, 31, 100),
(32, 4, NULL, 32, 100),
(33, 4, NULL, 33, 100),
(34, 4, NULL, 34, 100),
(35, 4, NULL, 35, 100),
(36, 4, NULL, 36, 100),
(37, 5, NULL, 37, 100),
(38, 5, NULL, 38, 100),
(39, 5, NULL, 39, 100),
(40, 5, NULL, 40, 100),
(41, 5, NULL, 41, 100),
(42, 5, NULL, 42, 100),
(43, 5, NULL, 43, 100),
(44, 5, NULL, 44, 100),
(45, 5, NULL, 45, 100),
(46, 6, NULL, 46, 100),
(47, 6, NULL, 47, 100),
(48, 6, NULL, 48, 100),
(49, 6, NULL, 49, 100),
(50, 6, NULL, 50, 100),
(51, 6, NULL, 51, 100),
(52, 6, NULL, 52, 100),
(53, 6, NULL, 53, 100),
(54, 6, NULL, 54, 100),
(55, 7, NULL, 55, 100),
(56, 7, NULL, 56, 100),
(57, 7, NULL, 57, 100),
(58, 7, NULL, 58, 100),
(59, 7, NULL, 59, 100),
(60, 7, NULL, 60, 100),
(61, 7, NULL, 61, 100),
(62, 7, NULL, 62, 100),
(63, 7, NULL, 63, 100),
(64, 8, NULL, 64, 100),
(65, 8, NULL, 65, 100),
(66, 8, NULL, 66, 100),
(67, 8, NULL, 67, 100),
(68, 8, NULL, 68, 100),
(69, 8, NULL, 69, 100),
(70, 8, NULL, 70, 100),
(71, 8, NULL, 71, 100),
(72, 8, NULL, 72, 100),
(73, 9, NULL, 73, 100),
(74, 9, NULL, 74, 100),
(75, 9, NULL, 75, 100),
(76, 9, NULL, 76, 100),
(77, 9, NULL, 77, 100),
(78, 9, NULL, 78, 100),
(79, 9, NULL, 79, 100),
(80, 9, NULL, 80, 100),
(81, 9, NULL, 81, 100),
(82, 10, NULL, 82, 100),
(83, 10, NULL, 83, 100),
(84, 10, NULL, 84, 100),
(85, 10, NULL, 85, 100),
(86, 10, NULL, 86, 100),
(87, 10, NULL, 87, 100),
(88, 10, NULL, 88, 100),
(89, 10, NULL, 89, 100),
(90, 10, NULL, 90, 100),
(91, 11, NULL, 91, 100),
(92, 11, NULL, 92, 100),
(93, 11, NULL, 93, 100),
(94, 11, NULL, 94, 100),
(95, 11, NULL, 95, 100),
(96, 11, NULL, 96, 100),
(97, 11, NULL, 97, 100),
(98, 11, NULL, 98, 100),
(99, 11, NULL, 99, 100),
(100, 12, NULL, 100, 100),
(101, 12, NULL, 101, 100),
(102, 12, NULL, 102, 100),
(103, 12, NULL, 103, 100),
(104, 12, NULL, 104, 100),
(105, 12, NULL, 105, 100),
(106, 12, NULL, 106, 100),
(107, 12, NULL, 107, 100),
(108, 12, NULL, 108, 100),
(109, 13, NULL, 109, 100),
(110, 13, NULL, 110, 100),
(111, 13, NULL, 111, 100),
(112, 13, NULL, 112, 100),
(113, 13, NULL, 113, 100),
(114, 13, NULL, 114, 100),
(115, 13, NULL, 115, 100),
(116, 13, NULL, 116, 100),
(117, 13, NULL, 117, 100),
(118, 14, NULL, 118, 100),
(119, 14, NULL, 119, 100),
(120, 14, NULL, 120, 100),
(121, 14, NULL, 121, 100),
(122, 14, NULL, 122, 100),
(123, 14, NULL, 123, 100),
(124, 14, NULL, 124, 100),
(125, 14, NULL, 125, 100),
(126, 14, NULL, 126, 100),
(127, 15, NULL, 127, 100),
(128, 15, NULL, 128, 100),
(129, 15, NULL, 129, 100),
(130, 15, NULL, 130, 100),
(131, 15, NULL, 131, 100),
(132, 15, NULL, 132, 100),
(133, 15, NULL, 133, 100),
(134, 15, NULL, 134, 100),
(135, 15, NULL, 135, 100),
(136, 16, NULL, 136, 100),
(137, 16, NULL, 137, 100),
(138, 16, NULL, 138, 100),
(139, 16, NULL, 139, 100),
(140, 16, NULL, 140, 100),
(141, 16, NULL, 141, 100),
(142, 16, NULL, 142, 100),
(143, 16, NULL, 143, 100),
(144, 16, NULL, 144, 100),
(145, 17, NULL, 145, 100),
(146, 17, NULL, 146, 100),
(147, 17, NULL, 147, 100),
(148, 17, NULL, 148, 100),
(149, 17, NULL, 149, 100),
(150, 17, NULL, 150, 100),
(151, 17, NULL, 151, 100),
(152, 17, NULL, 152, 100),
(153, 17, NULL, 153, 100),
(154, 18, NULL, 154, 100),
(155, 18, NULL, 155, 100),
(156, 18, NULL, 156, 100),
(157, 18, NULL, 157, 100),
(158, 18, NULL, 158, 100),
(159, 18, NULL, 159, 100),
(160, 18, NULL, 160, 100),
(161, 18, NULL, 161, 100),
(162, 18, NULL, 162, 100),
(163, 19, NULL, 163, 100),
(164, 19, NULL, 164, 100),
(165, 19, NULL, 165, 100),
(166, 19, NULL, 166, 100),
(167, 19, NULL, 167, 100),
(168, 19, NULL, 168, 100),
(169, 19, NULL, 169, 100),
(170, 19, NULL, 170, 100),
(171, 19, NULL, 171, 100),
(172, 20, NULL, 172, 100),
(173, 20, NULL, 173, 100),
(174, 20, NULL, 174, 100),
(175, 20, NULL, 175, 100),
(176, 20, NULL, 176, 100),
(177, 20, NULL, 177, 100),
(178, 20, NULL, 178, 100),
(179, 20, NULL, 179, 100),
(180, 20, NULL, 180, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ChiTiet_STT` (`ChiTiet_STT`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MSHH` (`MSHH`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`idChiTiet`),
  ADD KEY `MSHH` (`MSHH`),
  ADD KEY `SoDonDH` (`SoDonDH`);

--
-- Indexes for table `chitiet_specific`
--
ALTER TABLE `chitiet_specific`
  ADD PRIMARY KEY (`ChiTiet_STT`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `colors_specific`
--
ALTER TABLE `colors_specific`
  ADD PRIMARY KEY (`id_color_spec`),
  ADD KEY `color-id` (`color_id`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSNV` (`MSNV`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Indexes for table `diachikh`
--
ALTER TABLE `diachikh`
  ADD PRIMARY KEY (`MaDC`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Indexes for table `favor`
--
ALTER TABLE `favor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MSHH` (`MSHH`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Indexes for table `hanghoa1`
--
ALTER TABLE `hanghoa1`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Indexes for table `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ChiTiet_STT` (`ChiTiet_STT`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`sizes_id`);

--
-- Indexes for table `sizes_specific`
--
ALTER TABLE `sizes_specific`
  ADD PRIMARY KEY (`id_size_spec`),
  ADD KEY `MSHH` (`MSHH`),
  ADD KEY `sizes_id` (`sizes_id`);

--
-- Indexes for table `soluong_specific`
--
ALTER TABLE `soluong_specific`
  ADD PRIMARY KEY (`capa-id`),
  ADD KEY `id-size-spec` (`id_size_spec`),
  ADD KEY `id-color-spec` (`id_color_spec`),
  ADD KEY `MSHH` (`MSHH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `idChiTiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `chitiet_specific`
--
ALTER TABLE `chitiet_specific`
  MODIFY `ChiTiet_STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `colors_specific`
--
ALTER TABLE `colors_specific`
  MODIFY `id_color_spec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diachikh`
--
ALTER TABLE `diachikh`
  MODIFY `MaDC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `favor`
--
ALTER TABLE `favor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  MODIFY `MaHinh` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `sizes_specific`
--
ALTER TABLE `sizes_specific`
  MODIFY `id_size_spec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `soluong_specific`
--
ALTER TABLE `soluong_specific`
  MODIFY `capa-id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `benefits`
--
ALTER TABLE `benefits`
  ADD CONSTRAINT `benefits_ibfk_1` FOREIGN KEY (`ChiTiet_STT`) REFERENCES `chitiet_specific` (`ChiTiet_STT`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `chitiet_specific`
--
ALTER TABLE `chitiet_specific`
  ADD CONSTRAINT `chitiet_specific_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `colors_specific`
--
ALTER TABLE `colors_specific`
  ADD CONSTRAINT `colors_specific_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`),
  ADD CONSTRAINT `colors_specific_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `dathang_ibfk_3` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Constraints for table `diachikh`
--
ALTER TABLE `diachikh`
  ADD CONSTRAINT `diachikh_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Constraints for table `favor`
--
ALTER TABLE `favor`
  ADD CONSTRAINT `favor_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `favor_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);

--
-- Constraints for table `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD CONSTRAINT `hinhhanghoa_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD CONSTRAINT `productdetails_ibfk_1` FOREIGN KEY (`ChiTiet_STT`) REFERENCES `chitiet_specific` (`ChiTiet_STT`);

--
-- Constraints for table `sizes_specific`
--
ALTER TABLE `sizes_specific`
  ADD CONSTRAINT `sizes_specific_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `sizes_specific_ibfk_2` FOREIGN KEY (`sizes_id`) REFERENCES `sizes` (`sizes_id`);

--
-- Constraints for table `soluong_specific`
--
ALTER TABLE `soluong_specific`
  ADD CONSTRAINT `soluong_specific_ibfk_1` FOREIGN KEY (`id_size_spec`) REFERENCES `sizes_specific` (`id_size_spec`),
  ADD CONSTRAINT `soluong_specific_ibfk_2` FOREIGN KEY (`id_color_spec`) REFERENCES `colors_specific` (`id_color_spec`),
  ADD CONSTRAINT `soluong_specific_ibfk_3` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
