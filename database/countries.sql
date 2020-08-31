-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `iso3`, `name`, `nicename`, `numcode`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFG', 'AFGHANISTAN', 'Afghanistan', '4', '93', NULL, NULL),
(2, 'AL', 'ALB', 'ALBANIA', 'Albania', '8', '355', NULL, NULL),
(3, 'DZ', 'DZA', 'ALGERIA', 'Algeria', '12', '213', NULL, NULL),
(4, 'AS', 'ASM', 'AMERICAN SAMOA', 'American Samoa', '16', '1684', NULL, NULL),
(5, 'AD', 'AND', 'ANDORRA', 'Andorra', '20', '376', NULL, NULL),
(6, 'AO', 'AGO', 'ANGOLA', 'Angola', '24', '244', NULL, NULL),
(7, 'AI', 'AIA', 'ANGUILLA', 'Anguilla', '660', '1264', NULL, NULL),
(8, 'AQ', '', 'ANTARCTICA', 'Antarctica', '', '0', NULL, NULL),
(9, 'AG', 'ATG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', '28', '1268', NULL, NULL),
(10, 'AR', 'ARG', 'ARGENTINA', 'Argentina', '32', '54', NULL, NULL),
(11, 'AM', 'ARM', 'ARMENIA', 'Armenia', '51', '374', NULL, NULL),
(12, 'AW', 'ABW', 'ARUBA', 'Aruba', '533', '297', NULL, NULL),
(13, 'AU', 'AUS', 'AUSTRALIA', 'Australia', '36', '61', NULL, NULL),
(14, 'AT', 'AUT', 'AUSTRIA', 'Austria', '40', '43', NULL, NULL),
(15, 'AZ', 'AZE', 'AZERBAIJAN', 'Azerbaijan', '31', '994', NULL, NULL),
(16, 'BS', 'BHS', 'BAHAMAS', 'Bahamas', '44', '1242', NULL, NULL),
(17, 'BH', 'BHR', 'BAHRAIN', 'Bahrain', '48', '973', NULL, NULL),
(18, 'BD', 'BGD', 'BANGLADESH', 'Bangladesh', '50', '880', NULL, NULL),
(19, 'BB', 'BRB', 'BARBADOS', 'Barbados', '52', '1246', NULL, NULL),
(20, 'BY', 'BLR', 'BELARUS', 'Belarus', '112', '375', NULL, NULL),
(21, 'BE', 'BEL', 'BELGIUM', 'Belgium', '56', '32', NULL, NULL),
(22, 'BZ', 'BLZ', 'BELIZE', 'Belize', '84', '501', NULL, NULL),
(23, 'BJ', 'BEN', 'BENIN', 'Benin', '204', '229', NULL, NULL),
(24, 'BM', 'BMU', 'BERMUDA', 'Bermuda', '60', '1441', NULL, NULL),
(25, 'BT', 'BTN', 'BHUTAN', 'Bhutan', '64', '975', NULL, NULL),
(26, 'BO', 'BOL', 'BOLIVIA', 'Bolivia', '68', '591', NULL, NULL),
(27, 'BA', 'BIH', 'BOSNIA AND HERZEGOVI', 'Bosnia and Herzegovina', '70', '387', NULL, NULL),
(28, 'BW', 'BWA', 'BOTSWANA', 'Botswana', '72', '267', NULL, NULL),
(29, 'BV', '', 'BOUVET ISLAND', 'Bouvet Island', '', '0', NULL, NULL),
(30, 'BR', 'BRA', 'BRAZIL', 'Brazil', '76', '55', NULL, NULL),
(31, 'IO', '', 'BRITISH INDIAN OCEAN', 'British Indian Ocean Territory', '', '246', NULL, NULL),
(32, 'BN', 'BRN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', '96', '673', NULL, NULL),
(33, 'BG', 'BGR', 'BULGARIA', 'Bulgaria', '100', '359', NULL, NULL),
(34, 'BF', 'BFA', 'BURKINA FASO', 'Burkina Faso', '854', '226', NULL, NULL),
(35, 'BI', 'BDI', 'BURUNDI', 'Burundi', '108', '257', NULL, NULL),
(36, 'KH', 'KHM', 'CAMBODIA', 'Cambodia', '116', '855', NULL, NULL),
(37, 'CM', 'CMR', 'CAMEROON', 'Cameroon', '120', '237', NULL, NULL),
(38, 'CA', 'CAN', 'CANADA', 'Canada', '124', '1', NULL, NULL),
(39, 'CV', 'CPV', 'CAPE VERDE', 'Cape Verde', '132', '238', NULL, NULL),
(40, 'KY', 'CYM', 'CAYMAN ISLANDS', 'Cayman Islands', '136', '1345', NULL, NULL),
(41, 'CF', 'CAF', 'CENTRAL AFRICAN REPU', 'Central African Republic', '140', '236', NULL, NULL),
(42, 'TD', 'TCD', 'CHAD', 'Chad', '148', '235', NULL, NULL),
(43, 'CL', 'CHL', 'CHILE', 'Chile', '152', '56', NULL, NULL),
(44, 'CN', 'CHN', 'CHINA', 'China', '156', '86', NULL, NULL),
(45, 'CX', '', 'CHRISTMAS ISLAND', 'Christmas Island', '', '61', NULL, NULL),
(46, 'CC', '', 'COCOS (KEELING) ISLA', 'Cocos (Keeling) Islands', '', '672', NULL, NULL),
(47, 'CO', 'COL', 'COLOMBIA', 'Colombia', '170', '57', NULL, NULL),
(48, 'KM', 'COM', 'COMOROS', 'Comoros', '174', '269', NULL, NULL),
(49, 'CG', 'COG', 'CONGO', 'Congo', '178', '242', NULL, NULL),
(50, 'CD', 'COD', 'CONGO, THE DEMOCRATI', 'Congo, the Democratic Republic of the', '180', '242', NULL, NULL),
(51, 'CK', 'COK', 'COOK ISLANDS', 'Cook Islands', '184', '682', NULL, NULL),
(52, 'CR', 'CRI', 'COSTA RICA', 'Costa Rica', '188', '506', NULL, NULL),
(53, 'CI', 'CIV', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', '384', '225', NULL, NULL),
(54, 'HR', 'HRV', 'CROATIA', 'Croatia', '191', '385', NULL, NULL),
(55, 'CU', 'CUB', 'CUBA', 'Cuba', '192', '53', NULL, NULL),
(56, 'CY', 'CYP', 'CYPRUS', 'Cyprus', '196', '357', NULL, NULL),
(57, 'CZ', 'CZE', 'CZECH REPUBLIC', 'Czech Republic', '203', '420', NULL, NULL),
(58, 'DK', 'DNK', 'DENMARK', 'Denmark', '208', '45', NULL, NULL),
(59, 'DJ', 'DJI', 'DJIBOUTI', 'Djibouti', '262', '253', NULL, NULL),
(60, 'DM', 'DMA', 'DOMINICA', 'Dominica', '212', '1767', NULL, NULL),
(61, 'DO', 'DOM', 'DOMINICAN REPUBLIC', 'Dominican Republic', '214', '1809', NULL, NULL),
(62, 'EC', 'ECU', 'ECUADOR', 'Ecuador', '218', '593', NULL, NULL),
(63, 'EG', 'EGY', 'EGYPT', 'Egypt', '818', '20', NULL, NULL),
(64, 'SV', 'SLV', 'EL SALVADOR', 'El Salvador', '222', '503', NULL, NULL),
(65, 'GQ', 'GNQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', '226', '240', NULL, NULL),
(66, 'ER', 'ERI', 'ERITREA', 'Eritrea', '232', '291', NULL, NULL),
(67, 'EE', 'EST', 'ESTONIA', 'Estonia', '233', '372', NULL, NULL),
(68, 'ET', 'ETH', 'ETHIOPIA', 'Ethiopia', '231', '251', NULL, NULL),
(69, 'FK', 'FLK', 'FALKLAND ISLANDS (MA', 'Falkland Islands (Malvinas)', '238', '500', NULL, NULL),
(70, 'FO', 'FRO', 'FAROE ISLANDS', 'Faroe Islands', '234', '298', NULL, NULL),
(71, 'FJ', 'FJI', 'FIJI', 'Fiji', '242', '679', NULL, NULL),
(72, 'FI', 'FIN', 'FINLAND', 'Finland', '246', '358', NULL, NULL),
(73, 'FR', 'FRA', 'FRANCE', 'France', '250', '33', NULL, NULL),
(74, 'GF', 'GUF', 'FRENCH GUIANA', 'French Guiana', '254', '594', NULL, NULL),
(75, 'PF', 'PYF', 'FRENCH POLYNESIA', 'French Polynesia', '258', '689', NULL, NULL),
(76, 'TF', '', 'FRENCH SOUTHERN TERR', 'French Southern Territories', '', '0', NULL, NULL),
(77, 'GA', 'GAB', 'GABON', 'Gabon', '266', '241', NULL, NULL),
(78, 'GM', 'GMB', 'GAMBIA', 'Gambia', '270', '220', NULL, NULL),
(79, 'GE', 'GEO', 'GEORGIA', 'Georgia', '268', '995', NULL, NULL),
(80, 'DE', 'DEU', 'GERMANY', 'Germany', '276', '49', NULL, NULL),
(81, 'GH', 'GHA', 'GHANA', 'Ghana', '288', '233', NULL, NULL),
(82, 'GI', 'GIB', 'GIBRALTAR', 'Gibraltar', '292', '350', NULL, NULL),
(83, 'GR', 'GRC', 'GREECE', 'Greece', '300', '30', NULL, NULL),
(84, 'GL', 'GRL', 'GREENLAND', 'Greenland', '304', '299', NULL, NULL),
(85, 'GD', 'GRD', 'GRENADA', 'Grenada', '308', '1473', NULL, NULL),
(86, 'GP', 'GLP', 'GUADELOUPE', 'Guadeloupe', '312', '590', NULL, NULL),
(87, 'GU', 'GUM', 'GUAM', 'Guam', '316', '1671', NULL, NULL),
(88, 'GT', 'GTM', 'GUATEMALA', 'Guatemala', '320', '502', NULL, NULL),
(89, 'GN', 'GIN', 'GUINEA', 'Guinea', '324', '224', NULL, NULL),
(90, 'GW', 'GNB', 'GUINEA-BISSAU', 'Guinea-Bissau', '624', '245', NULL, NULL),
(91, 'GY', 'GUY', 'GUYANA', 'Guyana', '328', '592', NULL, NULL),
(92, 'HT', 'HTI', 'HAITI', 'Haiti', '332', '509', NULL, NULL),
(93, 'HM', '', 'HEARD ISLAND AND MCD', 'Heard Island and Mcdonald Islands', '', '0', NULL, NULL),
(94, 'VA', 'VAT', 'HOLY SEE (VATICAN CI', 'Holy See (Vatican City State)', '336', '39', NULL, NULL),
(95, 'HN', 'HND', 'HONDURAS', 'Honduras', '340', '504', NULL, NULL),
(96, 'HK', 'HKG', 'HONG KONG', 'Hong Kong', '344', '852', NULL, NULL),
(97, 'HU', 'HUN', 'HUNGARY', 'Hungary', '348', '36', NULL, NULL),
(98, 'IS', 'ISL', 'ICELAND', 'Iceland', '352', '354', NULL, NULL),
(99, 'IN', 'IND', 'INDIA', 'India', '356', '91', NULL, NULL),
(100, 'ID', 'IDN', 'INDONESIA', 'Indonesia', '360', '62', NULL, NULL),
(101, 'IR', 'IRN', 'IRAN, ISLAMIC REPUBL', 'Iran, Islamic Republic of', '364', '98', NULL, NULL),
(102, 'IQ', 'IRQ', 'IRAQ', 'Iraq', '368', '964', NULL, NULL),
(103, 'IE', 'IRL', 'IRELAND', 'Ireland', '372', '353', NULL, NULL),
(104, 'IL', 'ISR', 'ISRAEL', 'Israel', '376', '972', NULL, NULL),
(105, 'IT', 'ITA', 'ITALY', 'Italy', '380', '39', NULL, NULL),
(106, 'JM', 'JAM', 'JAMAICA', 'Jamaica', '388', '1876', NULL, NULL),
(107, 'JP', 'JPN', 'JAPAN', 'Japan', '392', '81', NULL, NULL),
(108, 'JO', 'JOR', 'JORDAN', 'Jordan', '400', '962', NULL, NULL),
(109, 'KZ', 'KAZ', 'KAZAKHSTAN', 'Kazakhstan', '398', '7', NULL, NULL),
(110, 'KE', 'KEN', 'KENYA', 'Kenya', '404', '254', NULL, NULL),
(111, 'KI', 'KIR', 'KIRIBATI', 'Kiribati', '296', '686', NULL, NULL),
(112, 'KP', 'PRK', 'KOREA, DEMOCRATIC PE', 'Korea, Democratic People\'s Republic of', '408', '850', NULL, NULL),
(113, 'KR', 'KOR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', '410', '82', NULL, NULL),
(114, 'KW', 'KWT', 'KUWAIT', 'Kuwait', '414', '965', NULL, NULL),
(115, 'KG', 'KGZ', 'KYRGYZSTAN', 'Kyrgyzstan', '417', '996', NULL, NULL),
(116, 'LA', 'LAO', 'LAO PEOPLE\'S DEMOCRA', 'Lao People\'s Democratic Republic', '418', '856', NULL, NULL),
(117, 'LV', 'LVA', 'LATVIA', 'Latvia', '428', '371', NULL, NULL),
(118, 'LB', 'LBN', 'LEBANON', 'Lebanon', '422', '961', NULL, NULL),
(119, 'LS', 'LSO', 'LESOTHO', 'Lesotho', '426', '266', NULL, NULL),
(120, 'LR', 'LBR', 'LIBERIA', 'Liberia', '430', '231', NULL, NULL),
(121, 'LY', 'LBY', 'LIBYAN ARAB JAMAHIRI', 'Libyan Arab Jamahiriya', '434', '218', NULL, NULL),
(122, 'LI', 'LIE', 'LIECHTENSTEIN', 'Liechtenstein', '438', '423', NULL, NULL),
(123, 'LT', 'LTU', 'LITHUANIA', 'Lithuania', '440', '370', NULL, NULL),
(124, 'LU', 'LUX', 'LUXEMBOURG', 'Luxembourg', '442', '352', NULL, NULL),
(125, 'MO', 'MAC', 'MACAO', 'Macao', '446', '853', NULL, NULL),
(126, 'MK', 'MKD', 'MACEDONIA, THE FORME', 'Macedonia, the Former Yugoslav Republic of', '807', '389', NULL, NULL),
(127, 'MG', 'MDG', 'MADAGASCAR', 'Madagascar', '450', '261', NULL, NULL),
(128, 'MW', 'MWI', 'MALAWI', 'Malawi', '454', '265', NULL, NULL),
(129, 'MY', 'MYS', 'MALAYSIA', 'Malaysia', '458', '60', NULL, NULL),
(130, 'MV', 'MDV', 'MALDIVES', 'Maldives', '462', '960', NULL, NULL),
(131, 'ML', 'MLI', 'MALI', 'Mali', '466', '223', NULL, NULL),
(132, 'MT', 'MLT', 'MALTA', 'Malta', '470', '356', NULL, NULL),
(133, 'MH', 'MHL', 'MARSHALL ISLANDS', 'Marshall Islands', '584', '692', NULL, NULL),
(134, 'MQ', 'MTQ', 'MARTINIQUE', 'Martinique', '474', '596', NULL, NULL),
(135, 'MR', 'MRT', 'MAURITANIA', 'Mauritania', '478', '222', NULL, NULL),
(136, 'MU', 'MUS', 'MAURITIUS', 'Mauritius', '480', '230', NULL, NULL),
(137, 'YT', '', 'MAYOTTE', 'Mayotte', '', '269', NULL, NULL),
(138, 'MX', 'MEX', 'MEXICO', 'Mexico', '484', '52', NULL, NULL),
(139, 'FM', 'FSM', 'MICRONESIA, FEDERATE', 'Micronesia, Federated States of', '583', '691', NULL, NULL),
(140, 'MD', 'MDA', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', '498', '373', NULL, NULL),
(141, 'MC', 'MCO', 'MONACO', 'Monaco', '492', '377', NULL, NULL),
(142, 'MN', 'MNG', 'MONGOLIA', 'Mongolia', '496', '976', NULL, NULL),
(143, 'MS', 'MSR', 'MONTSERRAT', 'Montserrat', '500', '1664', NULL, NULL),
(144, 'MA', 'MAR', 'MOROCCO', 'Morocco', '504', '212', NULL, NULL),
(145, 'MZ', 'MOZ', 'MOZAMBIQUE', 'Mozambique', '508', '258', NULL, NULL),
(146, 'MM', 'MMR', 'MYANMAR', 'Myanmar', '104', '95', NULL, NULL),
(147, 'NA', 'NAM', 'NAMIBIA', 'Namibia', '516', '264', NULL, NULL),
(148, 'NR', 'NRU', 'NAURU', 'Nauru', '520', '674', NULL, NULL),
(149, 'NP', 'NPL', 'NEPAL', 'Nepal', '524', '977', NULL, NULL),
(150, 'NL', 'NLD', 'NETHERLANDS', 'Netherlands', '528', '31', NULL, NULL),
(151, 'AN', 'ANT', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', '530', '599', NULL, NULL),
(152, 'NC', 'NCL', 'NEW CALEDONIA', 'New Caledonia', '540', '687', NULL, NULL),
(153, 'NZ', 'NZL', 'NEW ZEALAND', 'New Zealand', '554', '64', NULL, NULL),
(154, 'NI', 'NIC', 'NICARAGUA', 'Nicaragua', '558', '505', NULL, NULL),
(155, 'NE', 'NER', 'NIGER', 'Niger', '562', '227', NULL, NULL),
(156, 'NG', 'NGA', 'NIGERIA', 'Nigeria', '566', '234', NULL, NULL),
(157, 'NU', 'NIU', 'NIUE', 'Niue', '570', '683', NULL, NULL),
(158, 'NF', 'NFK', 'NORFOLK ISLAND', 'Norfolk Island', '574', '672', NULL, NULL),
(159, 'MP', 'MNP', 'NORTHERN MARIANA ISL', 'Northern Mariana Islands', '580', '1670', NULL, NULL),
(160, 'NO', 'NOR', 'NORWAY', 'Norway', '578', '47', NULL, NULL),
(161, 'OM', 'OMN', 'OMAN', 'Oman', '512', '968', NULL, NULL),
(162, 'PK', 'PAK', 'PAKISTAN', 'Pakistan', '586', '92', NULL, NULL),
(163, 'PW', 'PLW', 'PALAU', 'Palau', '585', '680', NULL, NULL),
(164, 'PS', '', 'PALESTINIAN TERRITOR', 'Palestinian Territory, Occupied', '', '970', NULL, NULL),
(165, 'PA', 'PAN', 'PANAMA', 'Panama', '591', '507', NULL, NULL),
(166, 'PG', 'PNG', 'PAPUA NEW GUINEA', 'Papua New Guinea', '598', '675', NULL, NULL),
(167, 'PY', 'PRY', 'PARAGUAY', 'Paraguay', '600', '595', NULL, NULL),
(168, 'PE', 'PER', 'PERU', 'Peru', '604', '51', NULL, NULL),
(169, 'PH', 'PHL', 'PHILIPPINES', 'Philippines', '608', '63', NULL, NULL),
(170, 'PN', 'PCN', 'PITCAIRN', 'Pitcairn', '612', '0', NULL, NULL),
(171, 'PL', 'POL', 'POLAND', 'Poland', '616', '48', NULL, NULL),
(172, 'PT', 'PRT', 'PORTUGAL', 'Portugal', '620', '351', NULL, NULL),
(173, 'PR', 'PRI', 'PUERTO RICO', 'Puerto Rico', '630', '1787', NULL, NULL),
(174, 'QA', 'QAT', 'QATAR', 'Qatar', '634', '974', NULL, NULL),
(175, 'RE', 'REU', 'REUNION', 'Reunion', '638', '262', NULL, NULL),
(176, 'RO', 'ROM', 'ROMANIA', 'Romania', '642', '40', NULL, NULL),
(177, 'RU', 'RUS', 'RUSSIAN FEDERATION', 'Russian Federation', '643', '70', NULL, NULL),
(178, 'RW', 'RWA', 'RWANDA', 'Rwanda', '646', '250', NULL, NULL),
(179, 'SH', 'SHN', 'SAINT HELENA', 'Saint Helena', '654', '290', NULL, NULL),
(180, 'KN', 'KNA', 'SAINT KITTS AND NEVI', 'Saint Kitts and Nevis', '659', '1869', NULL, NULL),
(181, 'LC', 'LCA', 'SAINT LUCIA', 'Saint Lucia', '662', '1758', NULL, NULL),
(182, 'PM', 'SPM', 'SAINT PIERRE AND MIQ', 'Saint Pierre and Miquelon', '666', '508', NULL, NULL),
(183, 'VC', 'VCT', 'SAINT VINCENT AND TH', 'Saint Vincent and the Grenadines', '670', '1784', NULL, NULL),
(184, 'WS', 'WSM', 'SAMOA', 'Samoa', '882', '684', NULL, NULL),
(185, 'SM', 'SMR', 'SAN MARINO', 'San Marino', '674', '378', NULL, NULL),
(186, 'ST', 'STP', 'SAO TOME AND PRINCIP', 'Sao Tome and Principe', '678', '239', NULL, NULL),
(187, 'SA', 'SAU', 'SAUDI ARABIA', 'Saudi Arabia', '682', '966', NULL, NULL),
(188, 'SN', 'SEN', 'SENEGAL', 'Senegal', '686', '221', NULL, NULL),
(189, 'CS', '', 'SERBIA AND MONTENEGR', 'Serbia and Montenegro', '', '381', NULL, NULL),
(190, 'SC', 'SYC', 'SEYCHELLES', 'Seychelles', '690', '248', NULL, NULL),
(191, 'SL', 'SLE', 'SIERRA LEONE', 'Sierra Leone', '694', '232', NULL, NULL),
(192, 'SG', 'SGP', 'SINGAPORE', 'Singapore', '702', '65', NULL, NULL),
(193, 'SK', 'SVK', 'SLOVAKIA', 'Slovakia', '703', '421', NULL, NULL),
(194, 'SI', 'SVN', 'SLOVENIA', 'Slovenia', '705', '386', NULL, NULL),
(195, 'SB', 'SLB', 'SOLOMON ISLANDS', 'Solomon Islands', '90', '677', NULL, NULL),
(196, 'SO', 'SOM', 'SOMALIA', 'Somalia', '706', '252', NULL, NULL),
(197, 'ZA', 'ZAF', 'SOUTH AFRICA', 'South Africa', '710', '27', NULL, NULL),
(198, 'GS', '', 'SOUTH GEORGIA AND TH', 'South Georgia and the South Sandwich Islands', '', '0', NULL, NULL),
(199, 'ES', 'ESP', 'SPAIN', 'Spain', '724', '34', NULL, NULL),
(200, 'LK', 'LKA', 'SRI LANKA', 'Sri Lanka', '144', '94', NULL, NULL),
(201, 'SD', 'SDN', 'SUDAN', 'Sudan', '736', '249', NULL, NULL),
(202, 'SR', 'SUR', 'SURINAME', 'Suriname', '740', '597', NULL, NULL),
(203, 'SJ', 'SJM', 'SVALBARD AND JAN MAY', 'Svalbard and Jan Mayen', '744', '47', NULL, NULL),
(204, 'SZ', 'SWZ', 'SWAZILAND', 'Swaziland', '748', '268', NULL, NULL),
(205, 'SE', 'SWE', 'SWEDEN', 'Sweden', '752', '46', NULL, NULL),
(206, 'CH', 'CHE', 'SWITZERLAND', 'Switzerland', '756', '41', NULL, NULL),
(207, 'SY', 'SYR', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', '760', '963', NULL, NULL),
(208, 'TW', 'TWN', 'TAIWAN, PROVINCE OF ', 'Taiwan, Province of China', '158', '886', NULL, NULL),
(209, 'TJ', 'TJK', 'TAJIKISTAN', 'Tajikistan', '762', '992', NULL, NULL),
(210, 'TZ', 'TZA', 'TANZANIA, UNITED REP', 'Tanzania, United Republic of', '834', '255', NULL, NULL),
(211, 'TH', 'THA', 'THAILAND', 'Thailand', '764', '66', NULL, NULL),
(212, 'TL', '', 'TIMOR-LESTE', 'Timor-Leste', '', '670', NULL, NULL),
(213, 'TG', 'TGO', 'TOGO', 'Togo', '768', '228', NULL, NULL),
(214, 'TK', 'TKL', 'TOKELAU', 'Tokelau', '772', '690', NULL, NULL),
(215, 'TO', 'TON', 'TONGA', 'Tonga', '776', '676', NULL, NULL),
(216, 'TT', 'TTO', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', '780', '1868', NULL, NULL),
(217, 'TN', 'TUN', 'TUNISIA', 'Tunisia', '788', '216', NULL, NULL),
(218, 'TR', 'TUR', 'TURKEY', 'Turkey', '792', '90', NULL, NULL),
(219, 'TM', 'TKM', 'TURKMENISTAN', 'Turkmenistan', '795', '7370', NULL, NULL),
(220, 'TC', 'TCA', 'TURKS AND CAICOS ISL', 'Turks and Caicos Islands', '796', '1649', NULL, NULL),
(221, 'TV', 'TUV', 'TUVALU', 'Tuvalu', '798', '688', NULL, NULL),
(222, 'UG', 'UGA', 'UGANDA', 'Uganda', '800', '256', NULL, NULL),
(223, 'UA', 'UKR', 'UKRAINE', 'Ukraine', '804', '380', NULL, NULL),
(224, 'AE', 'ARE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', '784', '971', NULL, NULL),
(225, 'GB', 'GBR', 'UNITED KINGDOM', 'United Kingdom', '826', '44', NULL, NULL),
(226, 'US', 'USA', 'UNITED STATES', 'United States', '840', '1', NULL, NULL),
(227, 'UM', '', 'UNITED STATES MINOR ', 'United States Minor Outlying Islands', '', '1', NULL, NULL),
(228, 'UY', 'URY', 'URUGUAY', 'Uruguay', '858', '598', NULL, NULL),
(229, 'UZ', 'UZB', 'UZBEKISTAN', 'Uzbekistan', '860', '998', NULL, NULL),
(230, 'VU', 'VUT', 'VANUATU', 'Vanuatu', '548', '678', NULL, NULL),
(231, 'VE', 'VEN', 'VENEZUELA', 'Venezuela', '862', '58', NULL, NULL),
(232, 'VN', 'VNM', 'VIET NAM', 'Viet Nam', '704', '84', NULL, NULL),
(233, 'VG', 'VGB', 'VIRGIN ISLANDS, BRIT', 'Virgin Islands, British', '92', '1284', NULL, NULL),
(234, 'VI', 'VIR', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', '850', '1340', NULL, NULL),
(235, 'WF', 'WLF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', '876', '681', NULL, NULL),
(236, 'EH', 'ESH', 'WESTERN SAHARA', 'Western Sahara', '732', '212', NULL, NULL),
(237, 'YE', 'YEM', 'YEMEN', 'Yemen', '887', '967', NULL, NULL),
(238, 'ZM', 'ZMB', 'ZAMBIA', 'Zambia', '894', '260', NULL, NULL),
(239, 'ZW', 'ZWE', 'ZIMBABWE', 'Zimbabwe', '716', '263', NULL, NULL),
(240, 'RS', 'SRB', 'SERBIA', 'Serbia', '688', '381', NULL, NULL),
(241, 'AP', '0', 'ASIA PACIFIC REGION', 'Asia / Pacific Region', '0', '0', NULL, NULL),
(242, 'ME', 'MNE', 'MONTENEGRO', 'Montenegro', '499', '382', NULL, NULL),
(243, 'AX', 'ALA', 'ALAND ISLANDS', 'Aland Islands', '248', '358', NULL, NULL),
(244, 'BQ', 'BES', 'BONAIRE, SINT EUSTAT', 'Bonaire, Sint Eustatius and Saba', '535', '599', NULL, NULL),
(245, 'CW', 'CUW', 'CURACAO', 'Curacao', '531', '599', NULL, NULL),
(246, 'GG', 'GGY', 'GUERNSEY', 'Guernsey', '831', '44', NULL, NULL),
(247, 'IM', 'IMN', 'ISLE OF MAN', 'Isle of Man', '833', '44', NULL, NULL),
(248, 'JE', 'JEY', 'JERSEY', 'Jersey', '832', '44', NULL, NULL),
(249, 'XK', '---', 'KOSOVO', 'Kosovo', '0', '381', NULL, NULL),
(250, 'BL', 'BLM', 'SAINT BARTHELEMY', 'Saint Barthelemy', '652', '590', NULL, NULL),
(251, 'MF', 'MAF', 'SAINT MARTIN', 'Saint Martin', '663', '590', NULL, NULL),
(252, 'SX', 'SXM', 'SINT MAARTEN', 'Sint Maarten', '534', '1', NULL, NULL),
(253, 'SS', 'SSD', 'SOUTH SUDAN', 'South Sudan', '728', '211', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
