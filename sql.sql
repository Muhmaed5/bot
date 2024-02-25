-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 12:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tet`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrar`
--

CREATE TABLE `administrar` (
  `id` varchar(50) DEFAULT NULL,
  `rango` varchar(50) NOT NULL,
  `creditos` int(11) DEFAULT NULL,
  `antispam` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  `warns` int(11) NOT NULL,
  `plan` text DEFAULT NULL,
  `planexpiry` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrar`
--

INSERT INTO `administrar` (`id`, `rango`, `creditos`, `antispam`, `status`, `warns`, `plan`, `planexpiry`, `username`) VALUES
('1830115796', 'Free User', 10, 1654660906, 'ACTIVE', 1, 'Free User', '0', 'JaiShreeRamOp'),
('5330619385', 'Free User', 10, 1654510496, 'ACTIVE', 0, 'Free User', '0', 'The_dar_k'),
('680241924', 'Free User', 10, 1654621682, 'ACTIVE', 1, 'Premium User', '1655050474', 'D3M0N_xD'),
('2028438199', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'hookuptutorialking'),
('881135906', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'moneyboosterss'),
('1023263311', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Manta00'),
('2107633871', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'GudoF5'),
('2059361810', 'Free User', 10, 1654680201, 'ACTIVE', 2, 'Admin', '1829670504', 'NO0B_BINNERS'),
('5121386076', 'Free User', 10, 1654503388, 'ACTIVE', 0, 'Free User', '0', 'TeamCrediitCard'),
('621624301', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Tejas_007'),
('726924095', 'Free User', 10, 1654317940, 'ACTIVE', 0, 'Free User', '0', 'kushal_sharma'),
('1902377035', 'Free User', 10, 1654615939, 'ACTIVE', 0, 'Premium User', '1655184478', 'hehebooi'),
('1924140954', 'Free User', 10, 1654606019, 'ACTIVE', 1, 'Premium User', '1655184481', 'Kushal_Ji'),
('1278436152', 'Free User', 10, 1654439240, 'ACTIVE', 0, 'Free User', '0', 'loddi_bhai'),
('1417062560', 'Free User', 10, 1654321095, 'ACTIVE', 0, 'Free User', '0', 'lordwitcher'),
('5037997605', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'alexanderxd_mm'),
('1441271788', 'Free User', 10, 1654535578, 'ACTIVE', 1, 'Premium User', '1656734305', 'Sedvro'),
('5339948752', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'JohnnyDeppXd'),
('5376665507', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', ''),
('1426219585', 'Free User', 10, 1654526011, 'ACTIVE', 0, 'Bd bhai', '1655307611', 'bbnoman'),
('1460315309', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'PH81624'),
('1431665541', 'Free User', 10, 1654607035, 'ACTIVE', 0, 'Free User', '0', 'knownasfuturekid'),
('1733092158', 'Free User', 10, 1654676494, 'ACTIVE', 0, 'Free User', '0', 'Was_Pablo'),
('1074894885', 'Free User', 10, 1654332983, 'ACTIVE', 0, 'Free User', '0', 'Sandynoob1'),
('1052829369', 'Free User', 10, 1654674347, 'ACTIVE', 0, 'Free User', '0', 'BGB_ADNAN'),
('1120329919', 'Free User', 10, 1654653838, 'ACTIVE', 0, 'Premium User', '1655219048', 'busyafman'),
('793988238', 'Free User', 10, 1654509584, 'ACTIVE', 0, 'Premium User', '1656929481', 'TechHacksSoham'),
('1989512234', 'Free User', 10, 1654501071, 'ACTIVE', 0, 'Free User', '0', 'MrBrooke'),
('5208953138', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'QuitedHarry'),
('1762195232', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'mratmospherepp2708'),
('1846020026', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'SPA4KY'),
('136817688', 'Free User', 10, 1654474018, 'ACTIVE', 0, 'Free User', '0', 'Channel_Bot'),
('5394250395', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'jacksparrowhu'),
('1603529478', 'Free User', 10, 1654338338, 'ACTIVE', 0, 'Free User', '0', 'Mrnousername'),
('5144840615', 'Free User', 10, 1654339815, 'ACTIVE', 0, 'Free User', '0', 'Violent_xD'),
('1949174573', 'Free User', 10, 0, 'ACTIVE', 1, 'Premium User', '1654346895', 'lucerodelalba666'),
('1665185405', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'hooowww403'),
('1876129108', 'Free User', 10, 1654667151, 'ACTIVE', 0, 'Free User', '0', 'TheTelegramMorningStar'),
('607405323', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Bossismyposition'),
('1302773633', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'HCKYT'),
('2121930309', 'Free User', 10, 1654440232, 'ACTIVE', 0, 'Free User', '0', 'noobhuu_xd'),
('2061406025', 'Free User', 10, 1654547082, 'ACTIVE', 0, 'Free User', '0', 'DebuSaibya'),
('1260898878', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'ThevenRex'),
('1349457923', 'Free User', 10, 1654481257, 'ACTIVE', 0, 'Free User', '0', 'Mr_Ehtasham'),
('1601807028', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Kilog21Bulitog'),
('851365935', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'unicials'),
('1354594128', 'Free User', 10, 1654384181, 'ACTIVE', 0, 'Free User', '0', 'theoriginalbaby'),
('1734384666', 'Free User', 10, 1654612713, 'ACTIVE', 0, 'Free User', '0', 'GamesXd9266'),
('1448358405', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'STF275'),
('1464941246', 'Free User', 10, 1654555974, 'ACTIVE', 0, 'Free User', '0', 'egamahendra'),
('5168647868', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'THKSSS'),
('1175279915', 'Free User', 10, 1654581953, 'ACTIVE', 0, 'Free User', '0', 'gotham_wayne'),
('1102777717', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'VeNoM_xxD'),
('1244927591', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'ShidoMcXD'),
('2122474232', 'Free User', 10, 1654513632, 'ACTIVE', 0, 'Free User', '0', 'AlexG4CC'),
('660719389', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Sanki_Se7enn'),
('1735326224', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Maureen869'),
('5284073935', 'Free User', 10, 1654595096, 'ACTIVE', 0, 'Free User', '0', 'Be4stX'),
('1707111736', 'Free User', 10, 1654441580, 'ACTIVE', 0, 'Free User', '0', 'Noobmeyou'),
('1911891810', 'Free User', 10, 1654414238, 'ACTIVE', 0, 'Free User', '0', 'Harsh_the_devil_main'),
('2080342251', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Feb5200O'),
('1778110596', 'Free User', 10, 1654600466, 'ACTIVE', 0, 'Emiway', '1655459960', 'clutchemiway'),
('1142197555', 'Free User', 10, 1654420545, 'ACTIVE', 0, 'Free User', '0', 'CruelAxe'),
('1647222383', 'Free User', 10, 1654426420, 'ACTIVE', 0, 'Free User', '0', 'n0username124'),
('1808950642', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Binslike'),
('5279603820', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'levyeugene0813'),
('1426837612', 'Free User', 10, 1654447232, 'ACTIVE', 0, 'Free User', '0', 'base_1xd'),
('1895216543', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'mammoth_adm'),
('1001511605', 'Free User', 10, 1654438393, 'ACTIVE', 0, 'Free User', '0', ''),
('5440256153', 'Free User', 10, 1654438310, 'ACTIVE', 0, 'Free User', '0', ''),
('1322047241', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'jaibholenathop'),
('1611265095', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'wellspire'),
('1317173146', 'Free User', 10, 0, 'ACTIVE', 0, 'Premium User', '1655269975', 'r0ld3x'),
('1326462575', 'Free User', 10, 1654651494, 'ACTIVE', 0, 'Premium User', '1655314971', 'Say_Talha'),
('5281448665', 'Free User', 10, 1654500958, 'ACTIVE', 0, 'Free User', '0', 'montanadxs'),
('1181971014', 'Free User', 10, 1654667803, 'ACTIVE', 0, 'Free User', '0', 'King_bosses'),
('1126274415', 'Free User', 10, 1654614477, 'ACTIVE', 0, 'Free User', '0', 'MaangekyoSharingan'),
('916264684', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'asur_sinchan'),
('5187637734', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Jawat_On_Top'),
('5041117772', 'Free User', 10, 1654513520, 'ACTIVE', 0, 'Free User', '0', 'Mrunknown3800'),
('884324962', 'Free User', 10, 1654450650, 'ACTIVE', 0, 'Free User', '0', 'Lovelish_XD'),
('1953254410', 'Free User', 10, 1654634741, 'ACTIVE', 0, 'Free User', '0', 'ejsm10'),
('1785152874', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'XxXmrBxXx'),
('679933576', 'Free User', 10, 0, 'ACTIVE', 0, 'Premium User', '1654536509', 'Dannos01'),
('638618379', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'gammermayank'),
('1473112304', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Whhpi'),
('1240375647', 'Free User', 10, 1654581317, 'ACTIVE', 0, 'Free User', '0', 'Aniket_002'),
('2044232406', 'Free User', 10, 1654461148, 'ACTIVE', 0, 'Free User', '0', 'I_Sikimkhiari_I'),
('1681360822', 'Free User', 10, 1654458479, 'ACTIVE', 0, 'Free User', '0', 'E_l_i1'),
('2140664881', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Madara018'),
('765509646', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'CeoAxA'),
('1060786683', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Brascoooo'),
('5368689759', 'Free User', 10, 1654676041, 'ACTIVE', 0, 'Premium User', '1655133611', 'ashura_otsutsuki'),
('1747485543', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'xDigiTex404x'),
('5065057709', 'Free User', 10, 1654483257, 'ACTIVE', 0, 'Free User', '0', 'Decoder009'),
('1313709978', 'Free User', 10, 1654614431, 'ACTIVE', 0, 'Free User', '0', 'bgb_secretly_downmaster'),
('869019491', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'PASSFORD'),
('5329617501', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'johndot788'),
('5197853005', 'Free User', 10, 1654676188, 'ACTIVE', 2, 'OWNER', '1831484155', 'AniDec4ypt3d'),
('5458120129', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', ''),
('453904822', 'Free User', 10, 1654662054, 'ACTIVE', 0, 'Free User', '0', 'cessarb'),
('2121639503', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'imnotaspammer'),
('144824040', 'Free User', 10, 1654507276, 'ACTIVE', 0, 'Free User', '0', ''),
('975359939', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'venkat1cc'),
('1801305076', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Ghost_Broo'),
('475116506', 'Free User', 10, 1654635024, 'ACTIVE', 0, 'Premium User', '1654680585', 'NO0B_FALASINE'),
('900465299', 'Free User', 10, 1654675227, 'ACTIVE', 0, 'Free User', '0', 'Mr_I3OSS'),
('5012700551', 'Free User', 10, 1654592988, 'ACTIVE', 0, 'Free User', '0', 'MckinonAstra'),
('1213676644', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Roroizmine'),
('1326014119', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'ParadiseHun'),
('1865824039', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'degenerationdx'),
('2016678477', 'Free User', 10, 1654524311, 'ACTIVE', 0, 'Free User', '0', 'Brrspx'),
('930233592', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'irupkumar'),
('5453952943', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'DevRetiredOFF_YT'),
('2110914654', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'john_freu'),
('1814850088', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Bstackin24z'),
('1004457456', 'Free User', 10, 1654520552, 'ACTIVE', 0, 'Premium User', '1657112233', 'N0OB_BINNERS'),
('1783604468', 'Free User', 10, 1654669525, 'ACTIVE', 0, 'Premium User', '1656245166', 'TheBGowner'),
('1277798523', 'Free User', 10, 1654626234, 'ACTIVE', 1, 'Premium User', '1655126302', 'ImDark_K0'),
('622032473', 'Free User', 10, 1654543963, 'ACTIVE', 0, 'Free User', '0', 'MilosFc'),
('5133609176', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'VatoIoco'),
('1207825133', 'Free User', 10, 1654631371, 'ACTIVE', 1, 'Premium User', '1655127534', 'Shahriarahmed'),
('5024379437', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'IAM_ERROR'),
('1950755789', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'CESARGANDIA'),
('2042355061', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'joker_rr1'),
('5280425337', 'Free User', 10, 1654535141, 'ACTIVE', 0, 'Free User', '0', 'H_Yom'),
('1865002749', 'Free User', 10, 1654536826, 'ACTIVE', 0, 'Free User', '0', 'misskaruga'),
('1384634165', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Heist986'),
('771884926', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Om1704'),
('803003146', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'abdul97233'),
('1087968824', 'Free User', 10, 1654542012, 'ACTIVE', 0, 'Free User', '0', 'GroupAnonymousBot'),
('1975978502', 'Free User', 10, 1654544315, 'ACTIVE', 0, 'Free User', '0', 'Thieendaayne'),
('5267987325', 'Free User', 10, 1654544633, 'ACTIVE', 0, 'Free User', '0', ''),
('942717169', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', ''),
('1486565979', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'M3goz'),
('5250054323', 'Free User', 10, 1654542872, 'ACTIVE', 0, 'Free User', '0', 'Trapperchino'),
('5210683546', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'John199811'),
('5152521577', 'Free User', 10, 1654544659, 'ACTIVE', 0, 'Free User', '0', 'Karimski09'),
('1311286090', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'kisses1432'),
('339525054', 'Free User', 10, 1654544157, 'ACTIVE', 0, 'Free User', '0', 'tootottt'),
('5020135181', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Zonahee'),
('1641569715', 'Free User', 10, 1654628981, 'ACTIVE', 0, 'Free User', '0', 'TZetttt'),
('652068792', 'Free User', 10, 1654555674, 'ACTIVE', 0, 'Free User', '0', 'Mohammad_Tal1384'),
('1812790744', 'Free User', 10, 1654594562, 'ACTIVE', 0, 'Free User', '0', 'QQBQQQQQ'),
('584644817', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Dark10007'),
('1084406940', 'Free User', 10, 1654621752, 'ACTIVE', 0, 'Free User', '0', 'mo7amedsalah1'),
('1446298140', 'Free User', 10, 1654571497, 'ACTIVE', 0, 'Free User', '0', 'Chucky223'),
('1309895438', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', ''),
('1747949569', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', ''),
('1813952118', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'pakkunUT'),
('1978425401', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Johnx_19'),
('5040029267', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'missvons'),
('1818040276', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'DifranSexx'),
('2015036692', 'Free User', 10, 1654595221, 'ACTIVE', 0, 'Free User', '0', ''),
('2060010183', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'DessFv0'),
('5121174164', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Jippol'),
('877349258', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'kaustubhhh'),
('5384492636', 'Free User', 10, 1654616441, 'ACTIVE', 0, 'Free User', '0', 'punk9654'),
('5455415831', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'riusora_exe'),
('840272278', 'Free User', 10, 1654609034, 'ACTIVE', 0, 'Free User', '0', 'RAGAXD'),
('1170772096', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Chalanagimhana'),
('1548088661', 'Free User', 10, 1654613152, 'ACTIVE', 0, 'Free User', '0', 'Ragknaros'),
('1213667245', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'raiXen1'),
('5303457982', 'Free User', 10, 1654616009, 'ACTIVE', 0, 'Free User', '0', 'SPA7MER'),
('812432438', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'SENIOR_vpn'),
('1887955046', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'FelixQyuon69'),
('5210931497', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'uzzzul_new'),
('1568764685', 'Free User', 10, 1654619776, 'ACTIVE', 0, 'Free User', '0', 'Ahnaf909'),
('1009970570', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Saksham_KB'),
('949189814', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Aleeexx404'),
('1172259707', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'im_angel_girl0'),
('1524633386', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'faisal74897'),
('5133869829', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Fiona_Lann'),
('5252429639', 'Free User', 10, 1654632706, 'ACTIVE', 0, 'Free User', '0', 'sendnudesn'),
('1415693784', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'sraveen16'),
('5118664772', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Unknown_Gangsta'),
('1469152765', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'lisa_is_me'),
('1914969439', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'to_xun'),
('1306683962', 'Free User', 10, 1654674479, 'ACTIVE', 0, 'Free User', '0', 'DARKFIRE368'),
('1462753890', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'felipemg2'),
('5086838194', 'Free User', 10, 1654662199, 'ACTIVE', 0, 'Free User', '0', 'ArpitaX'),
('5282727961', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Xoticxdbackup'),
('2061076946', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Fudka'),
('1437102973', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'aryahzco'),
('1984331676', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Tushar_xD'),
('5187516545', 'Free User', 10, 1654677003, 'ACTIVE', 0, 'Free User', '0', 'danu_359'),
('2102968249', 'Free User', 10, 0, 'ACTIVE', 0, 'Free User', '0', 'Arceus69_Xd');

-- --------------------------------------------------------

--
-- Table structure for table `anti`
--

CREATE TABLE `anti` (
  `userid` varchar(50) NOT NULL,
  `role` text NOT NULL,
  `username` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anti`
--

INSERT INTO `anti` (`userid`, `role`, `username`, `time`) VALUES
('1103960043', 'USER', 'sininternet_BB', '1630654496'),
('2147483647', 'USER', 'AniDec4ypt3d', '1653798898'),
('2147483647', 'USER', 'AniDec4ypt3d', '1653798901'),
('2147483647', 'USER', 'AniDec4ypt3d', '1653798905'),
('5197853005', 'USER', 'AniDec4ypt3d', '1653799201'),
('5197853005', 'USER', 'AniDec4ypt3d', '1653799205'),
('5197853005', 'USER', 'AniDec4ypt3d', '1653799271'),
('5197853005', 'USER', 'AniDec4ypt3d', '1653799274');

-- --------------------------------------------------------

--
-- Table structure for table `authorize`
--

CREATE TABLE `authorize` (
  `chats` varchar(50) NOT NULL,
  `planexpiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authorize`
--

INSERT INTO `authorize` (`chats`, `planexpiry`) VALUES
('-1001072625614', ''),
('-1001607510818', ''),
('-1001607auth', ''),
('-1001630708376', ''),
('-1001722364754', ''),
('-1001737129456', ''),
('2059361810', ''),
('5197853005', '');

-- --------------------------------------------------------

--
-- Table structure for table `gate`
--

CREATE TABLE `gate` (
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gate`
--

INSERT INTO `gate` (`estado`) VALUES
('ON'),
('ON');

-- --------------------------------------------------------

--
-- Table structure for table `gates`
--

CREATE TABLE `gates` (
  `estado` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gates`
--

INSERT INTO `gates` (`estado`, `name`, `gateName`) VALUES
('OFF', 'Adyen', 'Adyen');

-- --------------------------------------------------------

--
-- Table structure for table `nick`
--

CREATE TABLE `nick` (
  `nick` text NOT NULL,
  `status` text NOT NULL,
  `plan` text NOT NULL,
  `planexpiry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nick`
--

INSERT INTO `nick` (`nick`, `status`, `plan`, `planexpiry`) VALUES
('xtra-ioGM-Ni5Q-PjmR', 'ACTIVE', 'Premium', 1654618076),
('xtra-ioGM-Ni5Q-PjmR', 'ACTIVE', 'Premium', 1654618076),
('xtra-0jqD-6vFa-ZHGT', 'USED', 'Premium', 1653840654),
('xtra-0jqD-6vFa-ZHGT', 'USED', 'Premium', 1653840654),
('xtra-JV1J-4HNn-qqij', 'USED', 'Premium', 1653887212),
('xtra-JV1J-4HNn-qqij', 'USED', 'Premium', 1653887212),
('xtra-qJWu-HarQ-JnZG', 'USED', 'Premium', 1653887481),
('xtra-qJWu-HarQ-JnZG', 'USED', 'Premium', 1653887481),
('xtra-pPbn-FfHq-nQIn', 'USED', 'Premium', 1653974020),
('xtra-pPbn-FfHq-nQIn', 'USED', 'Premium', 1653974020),
('xtra-j7Pr-fse1-yPlx', 'ACTIVE', 'Premium', 1654667495),
('xtra-j7Pr-fse1-yPlx', 'ACTIVE', 'Premium', 1654667495),
('xtra-XpDm-S0yY-UaBC', 'ACTIVE', 'Premium', 1654667579),
('xtra-XpDm-S0yY-UaBC', 'ACTIVE', 'Premium', 1654667579),
('xtra-l8jK-pOWo-Pctr', 'USED', 'Premium', 1654667682),
('xtra-l8jK-pOWo-Pctr', 'USED', 'Premium', 1654667682),
('xtra-cezsuk7gjv04', 'USED', 'Premium', 1653892516),
('xtra-cezsuk7gjv04', 'USED', 'Premium', 1653892516),
('xtra-xgerz8dgxp0w', 'ACTIVE', 'Premium', 1653815572),
('xtra-xgerz8dgxp0w', 'ACTIVE', 'Premium', 1653815572),
('xtra-xtp28ohtgn1e', 'USED', 'Premium', 1653818900),
('xtra-xtp28ohtgn1e', 'USED', 'Premium', 1653818900),
('xtra-q3db05xdt52f', 'USED', 'Premium', 1653823716),
('xtra-q3db05xdt52f', 'USED', 'Premium', 1653823716),
('xtra-syn5k0ijesyk', 'USED', 'Premium', 1653826934),
('xtra-syn5k0ijesyk', 'USED', 'Premium', 1653826934),
('xtra-nx43qofc4d4f', 'ACTIVE', 'Premium', 1653827289),
('xtra-nx43qofc4d4f', 'ACTIVE', 'Premium', 1653827289),
('xtra-mkrgctplisnm', 'USED', 'Premium User', 1654001360),
('xtra-mkrgctplisnm', 'USED', 'Premium User', 1654001360),
('xtra-gjnubhnwgg3o', 'USED', 'Premium User', 1653916173),
('xtra-gjnubhnwgg3o', 'USED', 'Premium User', 1653916173),
('xtra-lse31kodnj9u', 'USED', 'Premium User', 1653915474),
('xtra-lse31kodnj9u', 'USED', 'Premium User', 1653915474),
('xtra-vtlkj8cai95h', 'USED', 'Premium User', 1654092240),
('xtra-vtlkj8cai95h', 'USED', 'Premium User', 1654092240),
('xtra-x32qj5u717aq', 'ACTIVE', 'Premium User', 1653983700),
('xtra-x32qj5u717aq', 'ACTIVE', 'Premium User', 1653983700),
('xtra-lmj6n0skihqi', 'USED', 'Premium User', 1685518906),
('xtra-lmj6n0skihqi', 'USED', 'Premium User', 1685518906),
('xtra-9aph557aijhp', 'ACTIVE', 'Premium User', 1662630206),
('xtra-9aph557aijhp', 'ACTIVE', 'Premium User', 1662630206),
('xtra-q8ewoerxfysw', 'USED', 'Premium User', 1654057712),
('xtra-q8ewoerxfysw', 'USED', 'Premium User', 1654057712),
('xtra-wtbei2mr9khh', 'USED', 'Premium User', 1654015889),
('xtra-wtbei2mr9khh', 'USED', 'Premium User', 1654015889),
('xtra-3axpnuvf02sa', 'USED', 'Premium User', 1654879080),
('xtra-3axpnuvf02sa', 'USED', 'Premium User', 1654879080),
('xtra-x7lvj2q4yrk1', 'USED', 'Premium User', 1654015268),
('xtra-x7lvj2q4yrk1', 'USED', 'Premium User', 1654015268),
('xtra-xsuxwz9i4wwr', 'USED', 'Premium User', 1654015214),
('xtra-xsuxwz9i4wwr', 'USED', 'Premium User', 1654015214),
('xtra-1hnc30ciyr1l', 'USED', 'Premium User', 1656571239),
('xtra-1hnc30ciyr1l', 'USED', 'Premium User', 1656571239),
('xtra-opsl6d569lsm', 'USED', 'Premium User', 1654240110),
('xtra-opsl6d569lsm', 'USED', 'Premium User', 1654240110),
('xtra-nwjjv5hvf2ph', 'USED', 'Premium User', 1654163610),
('xtra-nwjjv5hvf2ph', 'USED', 'Premium User', 1654163610),
('xtra-m2ztc5cqa623', 'USED', 'Premium User', 1654169436),
('xtra-m2ztc5cqa623', 'USED', 'Premium User', 1654169436),
('xtra-fjr9il93mkkr', 'USED', 'Premium User', 1654170134),
('xtra-fjr9il93mkkr', 'USED', 'Premium User', 1654170134),
('xtra-lofql8t3xawp', 'USED', 'Premium User', 1654173331),
('xtra-lofql8t3xawp', 'USED', 'Premium User', 1654173331),
('xtra-81fer41f1cm5', 'USED', 'Premium User', 1654172606),
('xtra-81fer41f1cm5', 'USED', 'Premium User', 1654172606),
('xtra-op2o5nf3sy3j', 'USED', 'Premium User', 1654172880),
('xtra-op2o5nf3sy3j', 'USED', 'Premium User', 1654172880),
('xtra-etv1th2gpfgh', 'USED', 'Premium User', 1654173229),
('xtra-etv1th2gpfgh', 'USED', 'Premium User', 1654173229),
('xtra-n9aaq4xwwwbm', 'USED', 'Premium User', 1654174474),
('xtra-n9aaq4xwwwbm', 'USED', 'Premium User', 1654174474),
('xtra-3wy7qu8vlk1d', 'USED', 'Premium User', 1662814519),
('xtra-3wy7qu8vlk1d', 'USED', 'Premium User', 1662814519),
('xtra-mqpc2yiyy9bl', 'USED', 'Premium User', 1654174676),
('xtra-mqpc2yiyy9bl', 'USED', 'Premium User', 1654174676),
('xtra-tehk8n3lvgl7', 'USED', 'Premium User', 1655038815),
('xtra-tehk8n3lvgl7', 'USED', 'Premium User', 1655038815),
('xtra-z3qgu5gzn446', 'USED', 'Premium User', 1654264101),
('xtra-z3qgu5gzn446', 'USED', 'Premium User', 1654264101),
('xtra-zcnz2af0ayy6', 'USED', 'Premium User', 1655050474),
('xtra-zcnz2af0ayy6', 'USED', 'Premium User', 1655050474),
('xtra-5nyzdqjtjbxc', 'USED', 'P`1', 1654191597),
('xtra-5nyzdqjtjbxc', 'USED', 'P`1', 1654191597),
('xtra-i92jj6tgq7yi', 'USED', 'AniDec4ypt3d', 1654278059),
('xtra-i92jj6tgq7yi', 'USED', 'AniDec4ypt3d', 1654278059),
('xtra-lw59i9rqjzn8', 'USED', 'Premium User', 1654278174),
('xtra-lw59i9rqjzn8', 'USED', 'Premium User', 1654278174),
('xtra-q3jbu940vlzo', 'USED', 'Premium User', 1656652289),
('xtra-q3jbu940vlzo', 'USED', 'Premium User', 1656652289),
('xtra-zdbg40rhsk0v', 'USED', 'Premium User', 1654428695),
('xtra-zdbg40rhsk0v', 'USED', 'Premium User', 1654428695),
('xtra-ufew3ixdwplb', 'USED', 'Premium User', 1654527239),
('xtra-ufew3ixdwplb', 'USED', 'Premium User', 1654527239),
('xtra-pma1c81fsaa5', 'USED', 'Premium User', 1654399550),
('xtra-pma1c81fsaa5', 'USED', 'Premium User', 1654399550),
('xtra-tnocyd5ahg58', 'USED', 'Premium User', 1656734305),
('xtra-tnocyd5ahg58', 'USED', 'Premium User', 1656734305),
('xtra-fse6rg5w1dtr', 'USED', 'Premium User', 1655184478),
('xtra-fse6rg5w1dtr', 'USED', 'Premium User', 1655184478),
('xtra-brg8kx897uxj', 'USED', 'Premium User', 1655184481),
('xtra-brg8kx897uxj', 'USED', 'Premium User', 1655184481),
('xtra-frukhsu8bqk7', 'USED', 'Premium User', 1656929481),
('xtra-frukhsu8bqk7', 'USED', 'Premium User', 1656929481),
('xtra-hd6rzcvqwppf', 'USED', 'Premium User', 1732098027),
('xtra-hd6rzcvqwppf', 'USED', 'Premium User', 1732098027),
('xtra-oh7uxdymi22h', 'USED', 'Premium User', 1654339087),
('xtra-oh7uxdymi22h', 'USED', 'Premium User', 1654339087),
('xtra-a62xhu2ffkii', 'USED', 'Premium User', 1654346895),
('xtra-a62xhu2ffkii', 'USED', 'Premium User', 1654346895),
('xtra-p7qlbl3y4orr', 'USED', 'Premium User', 2147483647),
('xtra-p7qlbl3y4orr', 'USED', 'Premium User', 2147483647),
('xtra-1gs5p9om6gl8', 'USED', 'Premium User', 1829117992),
('xtra-1gs5p9om6gl8', 'USED', 'Premium User', 1829117992),
('xtra-j0s6syaxik0y', 'USED', 'OWNER', 1740817245),
('xtra-j0s6syaxik0y', 'USED', 'OWNER', 1740817245),
('xtra-oy10eckyz66q', 'USED', 'Emiway', 1655281400),
('xtra-oy10eckyz66q', 'USED', 'Emiway', 1655281400),
('xtra-bnf4s4x21xqb', 'USED', 'Noob', 1654458718),
('xtra-bnf4s4x21xqb', 'USED', 'Noob', 1654458718),
('xtra-om7k8do7z0rd', 'USED', 'Bd bhai', 1655307611),
('xtra-om7k8do7z0rd', 'USED', 'Bd bhai', 1655307611),
('xtra-evv90xwdphly', 'USED', 'Premium User', 1654536509),
('xtra-evv90xwdphly', 'USED', 'Premium User', 1654536509),
('xtra-q869w7mfscvt', 'USED', 'Test', 1654537298),
('xtra-q869w7mfscvt', 'USED', 'Test', 1654537298),
('xtra-vtgj8lgp7rz8', 'USED', 'Premium User', 1655314971),
('xtra-vtgj8lgp7rz8', 'USED', 'Premium User', 1655314971),
('xtra-kcoazpkw3ns7', 'USED', 'Test', 1654493101),
('xtra-kcoazpkw3ns7', 'USED', 'Test', 1654493101),
('xtra-aixz7cz93ttz', 'USED', 'Premium User', 1654501996),
('xtra-aixz7cz93ttz', 'USED', 'Premium User', 1654501996),
('xtra-156djr3tyklb', 'USED', 'OWNER', 1654589901),
('xtra-156djr3tyklb', 'USED', 'OWNER', 1654589901),
('xtra-xs2yo0x29d5r', 'USED', 'OWNER', 1654590404),
('xtra-xs2yo0x29d5r', 'USED', 'OWNER', 1654590404),
('xtra-lzw8gqc0bpog', 'USED', 'Co-owner', 1654505369),
('xtra-lzw8gqc0bpog', 'USED', 'Co-owner', 1654505369),
('xtra-hr9m2d39427f', 'USED', '', 1654504517),
('xtra-hr9m2d39427f', 'USED', '', 1654504517),
('xtra-mesb7ne01ouh', 'ACTIVE', '', 1654504799),
('xtra-mesb7ne01ouh', 'ACTIVE', '', 1654504799),
('xtra-p3je66137oc4', 'USED', '', 1654504872),
('xtra-p3je66137oc4', 'USED', '', 1654504872),
('xtra-w38zcfuzwqlu', 'USED', 'Premium User', 1654591482),
('xtra-w38zcfuzwqlu', 'USED', 'Premium User', 1654591482),
('xtra-ya89dnsvnuio', 'USED', 'Premium User', 1654514144),
('xtra-ya89dnsvnuio', 'USED', 'Premium User', 1654514144),
('xtra-o8yonj5rftuw', 'ACTIVE', 'Premium User', 1654505554),
('xtra-o8yonj5rftuw', 'ACTIVE', 'Premium User', 1654505554),
('xtra-2vstwqar3apk', 'ACTIVE', '', 1654505808),
('xtra-2vstwqar3apk', 'ACTIVE', '', 1654505808),
('xtra-jgwue2m2dviu', 'ACTIVE', 'Premium', 1654592229),
('xtra-jgwue2m2dviu', 'ACTIVE', 'Premium', 1654592229),
('xtra-pqqfrem0ts99', 'USED', 'Premium User', 1654680585),
('xtra-pqqfrem0ts99', 'USED', 'Premium User', 1654680585),
('xtra-jww56lpn866y', 'USED', 'p', 1654597025),
('xtra-jww56lpn866y', 'USED', 'p', 1654597025),
('xtra-p6l94syw001z', 'USED', 'Premium User', 1654686242),
('xtra-p6l94syw001z', 'USED', 'Premium User', 1654686242),
('xtra-hitx9akb68i2', 'USED', 'Admin', 1654602043),
('xtra-hitx9akb68i2', 'USED', 'Admin', 1654602043),
('xtra-dn6lpczazg2a', 'USED', 'Premium User', 1656245166),
('xtra-dn6lpczazg2a', 'USED', 'Premium User', 1656245166),
('xtra-e3bip5igpstv', 'USED', 'Premium User', 1657112233),
('xtra-e3bip5igpstv', 'USED', 'Premium User', 1657112233),
('xtra-5ooip318jfw0', 'USED', 'Premium User', 1655126302),
('xtra-5ooip318jfw0', 'USED', 'Premium User', 1655126302),
('xtra-nwcyvd2ncdji', 'USED', 'Premium User', 1655127534),
('xtra-nwcyvd2ncdji', 'USED', 'Premium User', 1655127534),
('xtra-uwb4w93l3nmv', 'USED', 'Premium User', 1655133611),
('xtra-uwb4w93l3nmv', 'USED', 'Premium User', 1655133611),
('xtra-wdmgxo1ciyhq', 'ACTIVE', 'Admin', 1829409404),
('xtra-wdmgxo1ciyhq', 'ACTIVE', 'Admin', 1829409404),
('xtra-0fh1rm64unqg', 'USED', 'Admin', 1829409404),
('xtra-0fh1rm64unqg', 'USED', 'Admin', 1829409404),
('xtra-e6zniryahm28', 'USED', 'Admin', 1829410500),
('xtra-e6zniryahm28', 'USED', 'Admin', 1829410500),
('xtra-9mohwxdwglwt', 'USED', 'OWNER', 1831484155),
('xtra-9mohwxdwglwt', 'USED', 'OWNER', 1831484155),
('xtra-vpyptblsvkap', 'USED', 'Admin', 1829670504),
('xtra-vpyptblsvkap', 'USED', 'Admin', 1829670504),
('xtra-q550m59voduk', 'ACTIVE', ' P', 1655142597),
('xtra-q550m59voduk', 'ACTIVE', ' P', 1655142597),
('xtra-x67kqiiauwjn', 'ACTIVE', ' P', 1654538816),
('xtra-x67kqiiauwjn', 'ACTIVE', ' P', 1654538816),
('xtra-se5df8eaopa3', 'ACTIVE', 'Premium User', 1654541563),
('xtra-se5df8eaopa3', 'ACTIVE', 'Premium User', 1654541563),
('xtra-9ifyu48hmhor', 'ACTIVE', 'Premium User', 1654628106),
('xtra-9ifyu48hmhor', 'ACTIVE', 'Premium User', 1654628106),
('xtra-ncuzinemgr56', 'USED', 'Emiway', 1655459960),
('xtra-ncuzinemgr56', 'USED', 'Emiway', 1655459960),
('xtra-sv57jjs11dxm', 'USED', 'Premium User', 1655219048),
('xtra-sv57jjs11dxm', 'USED', 'Premium User', 1655219048),
('xtra-5s5qdvai9io6', 'USED', 'Premium User', 1655269975),
('xtra-5s5qdvai9io6', 'USED', 'Premium User', 1655269975);

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `userid` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `warns` int(11) NOT NULL,
  `username` text NOT NULL,
  `plan` text NOT NULL,
  `planexpiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`userid`, `status`, `warns`, `username`, `plan`, `planexpiry`) VALUES
('1103960043', 'ACTIVE', 0, 'sininternet_BB', 'Free', '0'),
('2147483647', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('2147483647', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('2147483647', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('2147483647', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('2147483647', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('5197853005', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0'),
('5197853005', 'ACTIVE', 0, 'AniDec4ypt3d', 'Free', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrar`
--
ALTER TABLE `administrar`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `authorize`
--
ALTER TABLE `authorize`
  ADD UNIQUE KEY `chats` (`chats`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
