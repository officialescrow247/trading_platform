-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2023 at 02:03 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radoiltm_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `nicename` varchar(191) DEFAULT NULL,
  `iso3` varchar(191) DEFAULT NULL,
  `numcode` varchar(191) DEFAULT NULL,
  `phonecode` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', '4', '93', NULL, NULL),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', '8', '355', NULL, NULL),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', '12', '213', NULL, NULL),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', '16', '1684', NULL, NULL),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', '20', '376', NULL, NULL),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', '24', '244', NULL, NULL),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', '660', '1264', NULL, NULL),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, '0', NULL, NULL),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', '28', '1268', NULL, NULL),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', '32', '54', NULL, NULL),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', '51', '374', NULL, NULL),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', '533', '297', NULL, NULL),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', '36', '61', NULL, NULL),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', '40', '43', NULL, NULL),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', '31', '994', NULL, NULL),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', '44', '1242', NULL, NULL),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', '48', '973', NULL, NULL),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', '50', '880', NULL, NULL),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', '52', '1246', NULL, NULL),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', '112', '375', NULL, NULL),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', '56', '32', NULL, NULL),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', '84', '501', NULL, NULL),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', '204', '229', NULL, NULL),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', '60', '1441', NULL, NULL),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', '64', '975', NULL, NULL),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', '68', '591', NULL, NULL),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', '70', '387', NULL, NULL),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', '72', '267', NULL, NULL),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, '0', NULL, NULL),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', '76', '55', NULL, NULL),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, '246', NULL, NULL),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', '96', '673', NULL, NULL),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', '100', '359', NULL, NULL),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', '854', '226', NULL, NULL),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', '108', '257', NULL, NULL),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', '116', '855', NULL, NULL),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', '120', '237', NULL, NULL),
(38, 'CA', 'CANADA', 'Canada', 'CAN', '124', '1', NULL, NULL),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', '132', '238', NULL, NULL),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', '136', '1345', NULL, NULL),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', '140', '236', NULL, NULL),
(42, 'TD', 'CHAD', 'Chad', 'TCD', '148', '235', NULL, NULL),
(43, 'CL', 'CHILE', 'Chile', 'CHL', '152', '56', NULL, NULL),
(44, 'CN', 'CHINA', 'China', 'CHN', '156', '86', NULL, NULL),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, '61', NULL, NULL),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, '672', NULL, NULL),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', '170', '57', NULL, NULL),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', '174', '269', NULL, NULL),
(49, 'CG', 'CONGO', 'Congo', 'COG', '178', '242', NULL, NULL),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', '180', '242', NULL, NULL),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', '184', '682', NULL, NULL),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', '188', '506', NULL, NULL),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', '384', '225', NULL, NULL),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', '191', '385', NULL, NULL),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', '192', '53', NULL, NULL),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', '196', '357', NULL, NULL),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', '203', '420', NULL, NULL),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', '208', '45', NULL, NULL),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', '262', '253', NULL, NULL),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', '212', '1767', NULL, NULL),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', '214', '1809', NULL, NULL),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', '218', '593', NULL, NULL),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', '818', '20', NULL, NULL),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', '222', '503', NULL, NULL),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', '226', '240', NULL, NULL),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', '232', '291', NULL, NULL),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', '233', '372', NULL, NULL),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', '231', '251', NULL, NULL),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', '238', '500', NULL, NULL),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', '234', '298', NULL, NULL),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', '242', '679', NULL, NULL),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', '246', '358', NULL, NULL),
(73, 'FR', 'FRANCE', 'France', 'FRA', '250', '33', NULL, NULL),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', '254', '594', NULL, NULL),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', '258', '689', NULL, NULL),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, '0', NULL, NULL),
(77, 'GA', 'GABON', 'Gabon', 'GAB', '266', '241', NULL, NULL),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', '270', '220', NULL, NULL),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', '268', '995', NULL, NULL),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', '276', '49', NULL, NULL),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', '288', '233', NULL, NULL),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', '292', '350', NULL, NULL),
(83, 'GR', 'GREECE', 'Greece', 'GRC', '300', '30', NULL, NULL),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', '304', '299', NULL, NULL),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', '308', '1473', NULL, NULL),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', '312', '590', NULL, NULL),
(87, 'GU', 'GUAM', 'Guam', 'GUM', '316', '1671', NULL, NULL),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', '320', '502', NULL, NULL),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', '324', '224', NULL, NULL),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', '624', '245', NULL, NULL),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', '328', '592', NULL, NULL),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', '332', '509', NULL, NULL),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, '0', NULL, NULL),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', '336', '39', NULL, NULL),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', '340', '504', NULL, NULL),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', '344', '852', NULL, NULL),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', '348', '36', NULL, NULL),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', '352', '354', NULL, NULL),
(99, 'IN', 'INDIA', 'India', 'IND', '356', '91', NULL, NULL),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', '360', '62', NULL, NULL),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', '364', '98', NULL, NULL),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', '368', '964', NULL, NULL),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', '372', '353', NULL, NULL),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', '376', '972', NULL, NULL),
(105, 'IT', 'ITALY', 'Italy', 'ITA', '380', '39', NULL, NULL),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', '388', '1876', NULL, NULL),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', '392', '81', NULL, NULL),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', '400', '962', NULL, NULL),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', '398', '7', NULL, NULL),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', '404', '254', NULL, NULL),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', '296', '686', NULL, NULL),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', '408', '850', NULL, NULL),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', '410', '82', NULL, NULL),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', '414', '965', NULL, NULL),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', '417', '996', NULL, NULL),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', '418', '856', NULL, NULL),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', '428', '371', NULL, NULL),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', '422', '961', NULL, NULL),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', '426', '266', NULL, NULL),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', '430', '231', NULL, NULL),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', '434', '218', NULL, NULL),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', '438', '423', NULL, NULL),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', '440', '370', NULL, NULL),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', '442', '352', NULL, NULL),
(125, 'MO', 'MACAO', 'Macao', 'MAC', '446', '853', NULL, NULL),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807', '389', NULL, NULL),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', '450', '261', NULL, NULL),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', '454', '265', NULL, NULL),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', '458', '60', NULL, NULL),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', '462', '960', NULL, NULL),
(131, 'ML', 'MALI', 'Mali', 'MLI', '466', '223', NULL, NULL),
(132, 'MT', 'MALTA', 'Malta', 'MLT', '470', '356', NULL, NULL),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', '584', '692', NULL, NULL),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', '474', '596', NULL, NULL),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', '478', '222', NULL, NULL),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', '480', '230', NULL, NULL),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, '269', NULL, NULL),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', '484', '52', NULL, NULL),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', '583', '691', NULL, NULL),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', '498', '373', NULL, NULL),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', '492', '377', NULL, NULL),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', '496', '976', NULL, NULL),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', '500', '1664', NULL, NULL),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', '504', '212', NULL, NULL),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', '508', '258', NULL, NULL),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', '104', '95', NULL, NULL),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', '516', '264', NULL, NULL),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', '520', '674', NULL, NULL),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', '524', '977', NULL, NULL),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', '528', '31', NULL, NULL),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', '530', '599', NULL, NULL),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', '540', '687', NULL, NULL),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', '554', '64', NULL, NULL),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', '558', '505', NULL, NULL),
(155, 'NE', 'NIGER', 'Niger', 'NER', '562', '227', NULL, NULL),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', '566', '234', NULL, NULL),
(157, 'NU', 'NIUE', 'Niue', 'NIU', '570', '683', NULL, NULL),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', '574', '672', NULL, NULL),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', '580', '1670', NULL, NULL),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', '578', '47', NULL, NULL),
(161, 'OM', 'OMAN', 'Oman', 'OMN', '512', '968', NULL, NULL),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', '586', '92', NULL, NULL),
(163, 'PW', 'PALAU', 'Palau', 'PLW', '585', '680', NULL, NULL),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, '970', NULL, NULL),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', '591', '507', NULL, NULL),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', '598', '675', NULL, NULL),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', '600', '595', NULL, NULL),
(168, 'PE', 'PERU', 'Peru', 'PER', '604', '51', NULL, NULL),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', '608', '63', NULL, NULL),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', '612', '0', NULL, NULL),
(171, 'PL', 'POLAND', 'Poland', 'POL', '616', '48', NULL, NULL),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', '620', '351', NULL, NULL),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', '630', '1787', NULL, NULL),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', '634', '974', NULL, NULL),
(175, 'RE', 'REUNION', 'Reunion', 'REU', '638', '262', NULL, NULL),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', '642', '40', NULL, NULL),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', '643', '70', NULL, NULL),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', '646', '250', NULL, NULL),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', '654', '290', NULL, NULL),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', '659', '1869', NULL, NULL),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', '662', '1758', NULL, NULL),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', '666', '508', NULL, NULL),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', '670', '1784', NULL, NULL),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', '882', '684', NULL, NULL),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', '674', '378', NULL, NULL),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', '678', '239', NULL, NULL),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', '682', '966', NULL, NULL),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', '686', '221', NULL, NULL),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, '381', NULL, NULL),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', '690', '248', NULL, NULL),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', '694', '232', NULL, NULL),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', '702', '65', NULL, NULL),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', '703', '421', NULL, NULL),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', '705', '386', NULL, NULL),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', '90', '677', NULL, NULL),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', '706', '252', NULL, NULL),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', '710', '27', NULL, NULL),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, '0', NULL, NULL),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', '724', '34', NULL, NULL),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', '144', '94', NULL, NULL),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', '736', '249', NULL, NULL),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', '740', '597', NULL, NULL),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', '744', '47', NULL, NULL),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', '748', '268', NULL, NULL),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', '752', '46', NULL, NULL),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', '756', '41', NULL, NULL),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', '760', '963', NULL, NULL),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', '158', '886', NULL, NULL),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', '762', '992', NULL, NULL),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', '834', '255', NULL, NULL),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', '764', '66', NULL, NULL),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, '670', NULL, NULL),
(213, 'TG', 'TOGO', 'Togo', 'TGO', '768', '228', NULL, NULL),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', '772', '690', NULL, NULL),
(215, 'TO', 'TONGA', 'Tonga', 'TON', '776', '676', NULL, NULL),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', '780', '1868', NULL, NULL),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', '788', '216', NULL, NULL),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', '792', '90', NULL, NULL),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', '795', '7370', NULL, NULL),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', '796', '1649', NULL, NULL),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', '798', '688', NULL, NULL),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', '800', '256', NULL, NULL),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', '804', '380', NULL, NULL),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', '784', '971', NULL, NULL),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', '826', '44', NULL, NULL),
(226, 'US', 'UNITED STATES', 'United States', 'USA', '840', '1', NULL, NULL),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, '1', NULL, NULL),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', '858', '598', NULL, NULL),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', '860', '998', NULL, NULL),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', '548', '678', NULL, NULL),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', '862', '58', NULL, NULL),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', '704', '84', NULL, NULL),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', '92', '1284', NULL, NULL),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', '850', '1340', NULL, NULL),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', '876', '681', NULL, NULL),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', '732', '212', NULL, NULL),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', '887', '967', NULL, NULL),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', '894', '260', NULL, NULL),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', '716', '263', NULL, NULL),
(240, 'RS', 'SERBIA', 'Serbia', 'SRB', '688', '381', NULL, NULL),
(241, 'AP', 'ASIA PACIFIC REGION', 'Asia / Pacific Region', '0', '0', '0', NULL, NULL),
(242, 'ME', 'MONTENEGRO', 'Montenegro', 'MNE', '499', '382', NULL, NULL),
(243, 'AX', 'ALAND ISLANDS', 'Aland Islands', 'ALA', '248', '358', NULL, NULL),
(244, 'BQ', 'BONAIRE, SINT EUSTATIUS AND SABA', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', '599', NULL, NULL),
(245, 'CW', 'CURACAO', 'Curacao', 'CUW', '531', '599', NULL, NULL),
(246, 'GG', 'GUERNSEY', 'Guernsey', 'GGY', '831', '44', NULL, NULL),
(247, 'IM', 'ISLE OF MAN', 'Isle of Man', 'IMN', '833', '44', NULL, NULL),
(248, 'JE', 'JERSEY', 'Jersey', 'JEY', '832', '44', NULL, NULL),
(249, 'XK', 'KOSOVO', 'Kosovo', '---', '0', '381', NULL, NULL),
(250, 'BL', 'SAINT BARTHELEMY', 'Saint Barthelemy', 'BLM', '652', '590', NULL, NULL),
(251, 'MF', 'SAINT MARTIN', 'Saint Martin', 'MAF', '663', '590', NULL, NULL),
(252, 'SX', 'SINT MAARTEN', 'Sint Maarten', 'SXM', '534', '1', NULL, NULL),
(253, 'SS', 'SOUTH SUDAN', 'South Sudan', 'SSD', '728', '211', NULL, NULL),
(254, 'KR', 'SOUTH KOREA', 'South Korea', 'KOR', '410', '82', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cryptos`
--

CREATE TABLE `cryptos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `symbol` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `current_price` varchar(191) DEFAULT NULL,
  `market_cap` varchar(191) DEFAULT NULL,
  `market_cap_rank` varchar(191) DEFAULT NULL,
  `fully_diluted_valuation` varchar(191) DEFAULT NULL,
  `total_volume` varchar(191) DEFAULT NULL,
  `high_24h` varchar(191) DEFAULT NULL,
  `low_24h` varchar(191) DEFAULT NULL,
  `price_change_24h` varchar(191) DEFAULT NULL,
  `price_change_percentage_24h` varchar(191) DEFAULT NULL,
  `market_cap_change_24h` varchar(191) DEFAULT NULL,
  `market_cap_change_percentage_24h` varchar(191) DEFAULT NULL,
  `circulating_supply` varchar(191) DEFAULT NULL,
  `total_supply` varchar(191) DEFAULT NULL,
  `max_supply` varchar(191) DEFAULT NULL,
  `ath` varchar(191) DEFAULT NULL,
  `ath_change_percentage` varchar(191) DEFAULT NULL,
  `ath_date` varchar(191) DEFAULT NULL,
  `atl` varchar(191) DEFAULT NULL,
  `atl_change_percentage` varchar(191) DEFAULT NULL,
  `atl_date` varchar(191) DEFAULT NULL,
  `roi` varchar(191) DEFAULT NULL,
  `last_updated` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cryptos`
--

INSERT INTO `cryptos` (`id`, `symbol`, `name`, `image`, `current_price`, `market_cap`, `market_cap_rank`, `fully_diluted_valuation`, `total_volume`, `high_24h`, `low_24h`, `price_change_24h`, `price_change_percentage_24h`, `market_cap_change_24h`, `market_cap_change_percentage_24h`, `circulating_supply`, `total_supply`, `max_supply`, `ath`, `ath_change_percentage`, `ath_date`, `atl`, `atl_change_percentage`, `atl_date`, `roi`, `last_updated`, `created_at`, `updated_at`) VALUES
(1, 'btc', 'Bitcoin', 'https://assets.coingecko.com/coins/images/1/large/bitcoin.png?1547033579', '22554', '-829688148', '1', '-669658638', '-2016838795', '23049', '22317', '-397.45476701918', '-1.73174', '-7821191739.0065', '-1.77439', '19272256', '21000000', '21000000', '69045', '-67.43102', '2021-11-10T14:24:11.849Z', '67.81', '33062.53009', '2013-07-06T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(2, 'eth', 'Ethereum', 'https://assets.coingecko.com/coins/images/279/large/ethereum.png?1595348880', '1542.38', '619732072', '2', '619732072', '2143087654', '1623.75', '1525.47', '-80.071953761159', '-4.93523', '-9637827417.7264', '-4.94397', '120517318.31833', '120517318.31833', NULL, '4878.26', '-68.48125', '2021-11-10T14:24:19.604Z', '0.432979', '355013.61527', '2015-10-20T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(3, 'usdt', 'Tether', 'https://assets.coingecko.com/coins/images/325/large/Tether.png?1668148663', '1', '-1741253065', '3', '-1741253065', '-1549676499', '1.005', '0.993919', '-9.0332503546842E-5', '-0.00903', '73081940', '0.10923', '67108360789.157', '67108360789.157', NULL, '1.32', '-24.26448', '2018-07-24T00:00:00.000Z', '0.572521', '75.0247', '2015-03-02T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(4, 'usdc', 'USD Coin', 'https://assets.coingecko.com/coins/images/6319/large/USD_Coin_icon.png?1547042389', '1', '673556622', '4', '624539290', '-739812623', '1.004', '0.995412', '-0.00067754649703189', '-0.06768', '-12679675.201866', '-0.02906', '43690463221.101', '43641370341.811', NULL, '1.17', '-14.89163', '2019-05-08T00:40:28.300Z', '0.891848', '11.91046', '2021-05-19T13:14:05.611Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(5, 'bnb', 'BNB', 'https://assets.coingecko.com/coins/images/825/large/bnb-icon2_2x.png?1644979850', '299.98', '1688007308', '5', '-322899990', '805202845', '315.89', '294.53', '-15.599945274677', '-4.9432', '-2095598477.4527', '-4.93799', '134910476.56', '157219628.63', '200000000', '686.31', '-56.4731', '2021-05-10T07:24:17.097Z', '0.0398177', '750139.16114', '2017-10-19T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(6, 'xrp', 'XRP', 'https://assets.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png?1605778731', '0.406237', '-904037059', '6', '1841483033', '1292171111', '0.425086', '0.398803', '-0.016177151892698', '-3.82969', '-837139842.60851', '-3.91042', '50796877639', '99989148225', '100000000000', '3.4', '-88.07735', '2018-01-07T00:00:00.000Z', '0.00268621', '14983.92584', '2014-05-22T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(7, 'busd', 'Binance USD', 'https://assets.coingecko.com/coins/images/9576/large/BUSD.png?1568947766', '0.999187', '-1891991933', '7', '-1891991933', '-1636000402', '1.003', '0.993922', '-0.0037306538727943', '-0.37198', '-527378141.2655', '-3.33462', '15316746053.99', '15316746053.99', NULL, '1.15', '-13.53157', '2020-03-13T02:35:42.953Z', '0.901127', '10.75263', '2021-05-19T13:04:37.445Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(8, 'ada', 'Cardano', 'https://assets.coingecko.com/coins/images/975/large/cardano.png?1547034860', '0.355333', '-458638705', '8', '-1223769573', '401120392', '0.380471', '0.347697', '-0.020677254598458', '-5.49911', '-703083945.97564', '-5.35506', '35045020830.323', '45000000000', '45000000000', '3.09', '-88.51344', '2021-09-02T06:00:10.474Z', '0.01925275', '1741.71117', '2020-03-13T02:22:55.044Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(9, 'doge', 'Dogecoin', 'https://assets.coingecko.com/coins/images/5/large/dogecoin.png?1547792256', '0.083932', '-1365017170', '9', NULL, '681016870', '0.089024', '0.082043', '-0.0047325769812994', '-5.33761', '-678552457.55989', '-5.56262', '137869026383.7', NULL, NULL, '0.731578', '-88.56897', '2021-05-08T05:08:23.458Z', '8.69E-5', '96129.36782', '2015-05-06T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(10, 'okb', 'OKB', 'https://assets.coingecko.com/coins/images/4463/large/WeChat_Image_20220118095654.png?1642471050', '35.08', '30580217', '10', '1895652502', '26130823', '35.78', '34.61', '-0.33824985847314', '-0.95497', '-41050959.104757', '-0.47394', '246638974', '300000000', NULL, '44.01', '-20.56751', '2021-05-03T01:03:16.108Z', '0.580608', '5920.32826', '2019-01-14T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(11, 'sol', 'Solana', 'https://assets.coingecko.com/coins/images/4128/large/solana.png?1640133422', '23.24', '-5534391', '11', '-417466471', '1036752868', '24.54', '22.33', '-1.2148761461427', '-4.96845', '-468248281.75997', '-5.1725', '371341453.09263', '539312645.66434', NULL, '259.96', '-91.11363', '2021-11-06T21:54:35.825Z', '0.500801', '4512.79447', '2020-05-11T19:35:23.449Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(12, 'matic', 'Polygon', 'https://assets.coingecko.com/coins/images/4713/large/matic-token-icon.png?1624446912', '0.951249', '-83971846', '12', '886965925', '513444096', '1.008', '0.933128', '-0.051512830491348', '-5.1371', '-453007666.48649', '-5.05647', '8975469069.2849', '10000000000', '10000000000', '2.92', '-67.5033', '2021-12-27T02:08:34.307Z', '0.00314376', '30045.08593', '2019-05-10T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(13, 'steth', 'Lido Staked Ether', 'https://assets.coingecko.com/coins/images/13442/large/steth_logo.png?1608607546', '1537.73', '-932952920', '13', '-932770422', '35329824', '1625.74', '1533.48', '-85.672302003155', '-5.27732', '-420142833.32909', '-5.20164', '4989125.1591442', '4989244.0710208', '4989244.0710208', '4829.57', '-68.18392', '2021-11-10T14:40:47.256Z', '482.9', '218.20092', '2020-12-22T04:08:21.854Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(14, 'dot', 'Polkadot', 'https://assets.coingecko.com/coins/images/12171/large/polkadot.png?1639712644', '6.18', '-1232893817', '14', '-733817979', '316717941', '6.52', '6.01', '-0.30129727629099', '-4.64837', '-365936022.97994', '-4.73828', '1195538270.4454', '1276639392.9583', NULL, '54.98', '-88.822', '2021-11-04T14:10:09.301Z', '2.7', '127.8357', '2020-08-20T05:48:11.359Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(15, 'shib', 'Shiba Inu', 'https://assets.coingecko.com/coins/images/11939/large/shiba.png?1622619446', '1.12E-5', '-2009438281', '15', NULL, '363742944', '1.198E-5', '1.092E-5', '-7.36888316159E-7', '-6.17075', '-437363183.97335', '-6.23215', '5.8936779120832E+14', '9.9999096880704E+14', NULL, '8.616E-5', '-87.04926', '2021-10-28T03:54:55.568Z', '5.6366E-11', '19795742.90237', '2020-11-28T11:26:25.838Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(16, 'ltc', 'Litecoin', 'https://assets.coingecko.com/coins/images/2/large/litecoin.png?1547033580', '87.17', '1981117842', '16', '-1281398763', '475968405', '89.95', '85.58', '-2.5823345486048', '-2.87713', '-182924055.42367', '-2.83208', '72133620.733471', '84000000', '84000000', '410.26', '-78.79145', '2021-05-10T03:13:07.904Z', '1.15', '7473.72466', '2015-01-14T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(17, 'trx', 'TRON', 'https://assets.coingecko.com/coins/images/1094/large/tron-logo.png?1547035066', '0.060592', '1253105278', '17', '1253101980', '278327167', '0.062364', '0.059158', '-0.0016576203309825', '-2.66287', '-156872429.15806', '-2.74976', '91837280755.235', '91837226159.232', NULL, '0.231673', '-73.92357', '2018-01-05T00:00:00.000Z', '0.00180434', '3248.14569', '2017-11-12T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(18, 'avax', 'Avalanche', 'https://assets.coingecko.com/coins/images/12559/large/Avalanche_Circle_RedWhite_Trans.png?1670992574', '17.3', '1137035399', '18', '-451623234', '402315924', '18.24', '16.57', '-0.91056228389304', '-5.00127', '-272999540.36933', '-4.78527', '314562397.37287', '419968387.37287', '720000000', '144.96', '-88.12158', '2021-11-21T14:18:56.538Z', '2.8', '514.73428', '2020-12-31T13:15:21.540Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(19, 'dai', 'Dai', 'https://assets.coingecko.com/coins/images/9956/large/4943.png?1636636734', '1.001', '852103299', '19', '850765788', '203230362', '1.005', '0.996128', '0.00120399', '0.12048', '3751147', '0.07293', '5154915030.0698', '5153575480.4494', '5153575480.4494', '1.22', '-18.08571', '2020-03-13T03:02:50.373Z', '0.903243', '10.54369', '2019-11-25T00:04:18.137Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(20, 'uni', 'Uniswap', 'https://assets.coingecko.com/coins/images/12504/large/uniswap-uni.png?1600306604', '6.34', '468474046', '20', '2024549805', '133713800', '6.68', '6.1', '-0.30248579768653', '-4.55494', '-225930626.2338', '-4.52824', '753766667', '1000000000', '1000000000', '44.92', '-85.94814', '2021-05-03T05:25:04.822Z', '1.03', '512.6968', '2020-09-17T01:20:38.214Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(21, 'wbtc', 'Wrapped Bitcoin', 'https://assets.coingecko.com/coins/images/7598/large/wrapped_bitcoin_wbtc.png?1548822744', '22524', '-271669598', '21', '-271669598', '202856129', '22995', '22296', '-380.70425513435', '-1.66215', '-78765296.545703', '-1.92014', '178797.7113473', '178797.7113473', '178797.7113473', '70643', '-68.29208', '2021-11-10T14:40:19.650Z', '3139.17', '613.54946', '2019-04-02T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(22, 'atom', 'Cosmos Hub', 'https://assets.coingecko.com/coins/images/1481/large/cosmos_hub.png?1555657960', '12.83', '-540893722', '22', NULL, '203546205', '13.16', '12.15', '-0.22976105399297', '-1.75871', '-50087637.398217', '-1.31665', '292586163.82743', NULL, NULL, '44.45', '-71.12669', '2022-01-17T00:34:41.497Z', '1.16', '1006.29032', '2020-03-13T02:27:44.591Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(23, 'ton', 'Toncoin', 'https://assets.coingecko.com/coins/images/17980/large/ton_symbol.png?1670498136', '2.24', '-1005081894', '23', '-1594021770', '32276913', '2.32', '2.23', '-0.071647259671515', '-3.09999', '-107971107.13345', '-3.17762', '1473591410.7431', '5057362773.9969', NULL, '5.29', '-57.76733', '2021-11-12T06:50:02.476Z', '0.519364', '330.22718', '2021-09-21T00:33:11.092Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(24, 'link', 'Chainlink', 'https://assets.coingecko.com/coins/images/877/large/chainlink-new-logo.png?1547034700', '6.68', '-1017197047', '24', '-1922378772', '354379529', '7.05', '6.52', '-0.35649343124564', '-5.06533', '-174398604.4593', '-5.05186', '491599971.23056', '1000000000', '1000000000', '52.7', '-87.33279', '2021-05-10T00:13:57.214Z', '0.148183', '4404.68592', '2017-11-29T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(25, 'leo', 'LEO Token', 'https://assets.coingecko.com/coins/images/8418/large/leo-token.png?1558326215', '3.5', '-1018187382', '25', NULL, '533246', '3.53', '3.43', '0.04069251', '1.17594', '48245897', '1.49436', '932024759.9', '985239504', NULL, '8.14', '-56.85044', '2022-02-08T17:40:10.285Z', '0.799859', '338.8729', '2019-12-24T15:14:35.376Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(26, 'xmr', 'Monero', 'https://assets.coingecko.com/coins/images/69/large/monero_logo.png?1547033729', '171.75', '-1178418091', '26', NULL, '103907583', '176.59', '166', '-4.8384728728476', '-2.73995', '-80341702.350066', '-2.51312', '18147820.376415', NULL, NULL, '542.33', '-68.31583', '2018-01-09T00:00:00.000Z', '0.216177', '79386.53669', '2015-01-14T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(27, 'etc', 'Ethereum Classic', 'https://assets.coingecko.com/coins/images/453/large/ethereum-classic-logo.png?1547034169', '21.05', '-1359664845', '27', '151775524', '195469415', '22.49', '20.78', '-1.4063976657841', '-6.26217', '-181696822.22512', '-5.82922', '139083426.12517', '210700000', '210700000', '167.09', '-87.39468', '2021-05-06T18:34:22.133Z', '0.615038', '3324.44494', '2016-07-25T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(28, 'apt', 'Aptos', 'https://assets.coingecko.com/coins/images/26455/large/aptos_round.png?1666839629', '16.07', '-1713963213', '28', '-803700095', '904554030', '16.59', '11.98', '3.11', '24.03186', '513328419', '24.82635', '160222318.97384', '1016591877.95', NULL, '16.59', '-3.29076', '2023-01-25T13:36:01.739Z', '3.08', '420.84341', '2022-12-29T21:35:14.796Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(29, 'bch', 'Bitcoin Cash', 'https://assets.coingecko.com/coins/images/780/large/bitcoin-cash-circle.png?1594689492', '128.57', '-1816785015', '29', '-1597602431', '515294917', '133.87', '125.54', '-5.2981207811073', '-3.95769', '-98674262.72047', '-3.82925', '19293581.146651', '21000000', '21000000', '3785.82', '-96.60897', '2017-12-20T00:00:00.000Z', '76.93', '66.8662', '2018-12-16T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(30, 'xlm', 'Stellar', 'https://assets.coingecko.com/coins/images/100/large/Stellar_symbol_black_RGB.png?1552356157', '0.090538', '-1925628258', '30', '216156463', '78011944', '0.094698', '0.088841', '-0.0041599548519598', '-4.39288', '-110854086.29353', '-4.46957', '26262012168.664', '50001787484.758', '50001787484.758', '0.875563', '-89.68735', '2018-01-03T00:00:00.000Z', '0.00047612', '18864.36395', '2015-03-05T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(31, 'ape', 'ApeCoin', 'https://assets.coingecko.com/coins/images/24383/large/apecoin.jpg?1647476455', '6.03', '-2072965168', '31', '1733355560', '369172256', '6.09', '5.3', '0.178354', '3.05007', '80372208', '3.75285', '368593750', '1000000000', '1000000000', '26.7', '-77.44085', '2022-04-28T21:44:21.164Z', '2.63', '129.34023', '2022-11-14T04:22:00.792Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(32, 'qnt', 'Quant', 'https://assets.coingecko.com/coins/images/3370/large/5ZOu7brX_400x400.jpg?1612437252', '151.96', '-2092100812', '32', '-2081755740', '71160345', '159.06', '146.02', '-5.8747437688234', '-3.72208', '-71639078.244965', '-3.14966', '14544190.764091', '14612493', '14612493', '427.42', '-64.58506', '2021-09-11T09:15:00.668Z', '0.215773', '70052.96207', '2018-08-23T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(33, 'near', 'NEAR Protocol', 'https://assets.coingecko.com/coins/images/10365/large/near_icon.png?1601359077', '2.38', '2023846109', '33', '-1913788237', '204978894', '2.54', '2.28', '-0.13528177222946', '-5.36775', '-111721976.33068', '-5.23149', '849934447.80033', '1000000000', '1000000000', '20.44', '-88.34633', '2022-01-16T22:09:45.873Z', '0.526762', '352.15647', '2020-11-04T16:09:15.137Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(34, 'cro', 'Cronos', 'https://assets.coingecko.com/coins/images/7310/large/cro_token_logo.png?1669699773', '0.079602', '2003636653', '34', NULL, '41567838', '0.082637', '0.077245', '-0.0023816629965681', '-2.90506', '-62780943.315637', '-3.03815', '25263013692', '30263013692', NULL, '0.965407', '-91.79388', '2021-11-24T15:53:54.855Z', '0.0121196', '553.67242', '2019-02-08T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(35, 'ldo', 'Lido DAO', 'https://assets.coingecko.com/coins/images/13573/large/Lido_DAO.png?1609873644', '2.39', '1981112304', '35', '-1925260322', '246800034', '2.69', '2.26', '-0.28945259389726', '-10.80901', '-278578290.41759', '-12.32816', '836015729.32115', '1000000000', '1000000000', '7.3', '-67.55059', '2021-08-20T08:35:20.158Z', '0.40615', '483.46424', '2022-06-18T20:55:12.035Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(36, 'fil', 'Filecoin', 'https://assets.coingecko.com/coins/images/12817/large/filecoin.png?1602753933', '5.32', '1962538935', '36', '1847110334', '227507857', '5.38', '4.84', '0.03775041', '0.71498', '18259251', '0.93913', '369646788', '1965831130', '1965831130', '236.84', '-97.75828', '2021-04-01T13:29:41.564Z', '2.64', '101.03634', '2022-12-16T22:45:28.552Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(37, 'algo', 'Algorand', 'https://assets.coingecko.com/coins/images/4380/large/download.png?1547039725', '0.234199', '1682249794', '37', '-1958321098', '105283422', '0.253299', '0.229599', '-0.017533822198941', '-6.96525', '-126544099.71559', '-6.99605', '7199420244.8371', '7421618396.9955', '10000000000', '3.56', '-93.43694', '2019-06-20T14:51:19.480Z', '0.105336', '121.88228', '2020-03-13T02:20:48.438Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(38, 'hbar', 'Hedera', 'https://assets.coingecko.com/coins/images/3688/large/hbar.png?1637045634', '0.063619', '1608420866', '38', '-1119017480', '77125464', '0.068875', '0.062529', '-0.0049657784173429', '-7.24031', '-124331786.05371', '-7.17539', '25321887299.993', '50000000000', '50000000000', '0.569229', '-88.83968', '2021-09-15T10:40:28.318Z', '0.00986111', '544.22558', '2020-01-02T17:30:24.852Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(39, 'vet', 'VeChain', 'https://assets.coingecko.com/coins/images/1167/large/VeChain-Logo-768x725.png?1547035194', '0.02202997', '1591440874', '39', '1903128520', '72620627', '0.02312893', '0.02127351', '-0.0010676948096772', '-4.62252', '-77481849.56743', '-4.64263', '72511146418', '85985041177', '86712634466', '0.280991', '-92.18644', '2021-04-19T01:08:21.675Z', '0.00191713', '1045.22042', '2020-03-13T02:29:59.652Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(40, 'icp', 'Internet Computer', 'https://assets.coingecko.com/coins/images/14495/large/Internet_Computer_logo.png?1620703073', '5.56', '1572560454', '40', '-1702028098', '46242783', '5.86', '5.39', '-0.28747425798457', '-4.91423', '-83336567.188637', '-5.03271', '284567769.73669', '494403098.52821', '469213710', '700.65', '-99.20992', '2021-05-10T16:05:53.653Z', '3.4', '62.86119', '2022-12-19T22:45:01.729Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(41, 'axs', 'Axie Infinity', 'https://assets.coingecko.com/coins/images/13029/large/axie_infinity_logo.png?1604471082', '11.43', '1315547074', '41', '-1200968616', '206540020', '12.2', '10.92', '-0.46619997435836', '-3.91896', '-39195379.924659', '-2.8932', '114802153.08069', '270000000', '270000000', '164.9', '-93.05233', '2021-11-06T19:29:29.482Z', '0.123718', '9160.19968', '2020-11-06T08:05:43.662Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(42, 'mana', 'Decentraland', 'https://assets.coingecko.com/coins/images/878/large/decentraland-mana.png?1550108745', '0.665996', '1207239544', '42', '1454440060', '231666642', '0.714328', '0.63954', '-0.047036802292192', '-6.59672', '-83109216.435364', '-6.44083', '1820464040.4155', '2193231527.3201', '2193231527.3201', '5.85', '-88.6657', '2021-11-25T10:04:18.534Z', '0.00923681', '7079.42121', '2017-10-31T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(43, 'eos', 'EOS', 'https://assets.coingecko.com/coins/images/738/large/eos-eos-logo.png?1547034481', '1.07', '1165107450', '43', NULL, '172992381', '1.096', '1.014', '-0.016205849959164', '-1.49205', '-18310157.800302', '-1.54723', '1092199118.2726', NULL, NULL, '22.71', '-95.29565', '2018-04-29T07:50:33.540Z', '0.5024', '112.66295', '2017-10-23T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(44, 'sand', 'The Sandbox', 'https://assets.coingecko.com/coins/images/12129/large/sandbox_logo.jpg?1597397942', '0.729075', '1154319322', '44', '-2104860206', '178732420', '0.786942', '0.709417', '-0.053532399293935', '-6.84026', '-79709466.675685', '-6.45929', '1581182026.2233', '3000000000', '3000000000', '8.4', '-91.31567', '2021-11-25T06:04:40.957Z', '0.02897764', '2416.44196', '2020-11-04T15:59:14.441Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(45, 'aave', 'Aave', 'https://assets.coingecko.com/coins/images/12645/large/AAVE.png?1601374110', '80.7', '1145374993', '45', '1287188036', '130002579', '85.37', '78.33', '-4.6761767650336', '-5.47741', '-65001520.158816', '-5.37036', '14237236.04167', '16000000', '16000000', '661.69', '-87.83643', '2021-05-18T21:19:59.514Z', '26.02', '209.28291', '2020-11-05T09:20:11.928Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(46, 'flow', 'Flow', 'https://assets.coingecko.com/coins/images/13446/large/5f6294c0c7a8cda55cb1c936_Flow_Wordmark.png?1631696776', '1.083', '1115708643', '46', '1518257763', '65363286', '1.19', '1.044', '-0.1027429065928', '-8.66719', '-108599454.50984', '-8.87027', '1036200000', '1410062299.2253', '1410062299.2253', '42.4', '-97.45144', '2021-04-05T13:49:10.098Z', '0.646701', '67.08116', '2023-01-02T02:01:06.327Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(47, 'egld', 'MultiversX', 'https://assets.coingecko.com/coins/images/12335/large/egld-token-logo.png?1673490885', '41.87', '1032898975', '47', '1311833860', '32227918', '44.54', '40.61', '-2.5572721498106', '-5.75607', '-63029415.682618', '-5.75123', '24735966', '24912955', '31415926', '545.64', '-92.34894', '2021-11-23T10:33:26.737Z', '6.51', '541.60723', '2020-10-07T01:44:53.554Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(48, 'frax', 'Frax', 'https://assets.coingecko.com/coins/images/13422/large/ethCanonicalFRAX.png?1669277108', '1.002', '1017667956', '48', '1017667956', '18387714', '1.005', '0.992047', '0.00167495', '0.16746', '818107', '0.08046', '1018393133.2588', '1018393133.2588', '1018393133.2588', '1.14', '-12.18153', '2021-02-07T12:55:35.766Z', '0.891635', '12.32473', '2021-12-04T05:33:57.315Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(49, 'lunc', 'Terra Luna Classic', 'https://assets.coingecko.com/coins/images/8284/large/01_LunaClassic_color.png?1653547790', '0.0001701', '1010628623', '49', '1163980744', '89417851', '0.00017905', '0.00016756', '-8.944630553452E-6', '-4.99568', '-52772910.203138', '-4.96265', '5965846308705.4', '6871099893324.3', NULL, '119.18', '-99.99986', '2022-04-05T12:24:58.854Z', '9.99967E-7', '16840.77145', '2022-05-13T02:34:40.340Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(50, 'theta', 'Theta Network', 'https://assets.coingecko.com/coins/images/2538/large/theta-token-logo.png?1548387191', '1.009', '1007082573', '50', '1007082573', '42374727', '1.067', '0.973594', '-0.055777547445189', '-5.24062', '-54644790.451035', '-5.14678', '1000000000', '1000000000', '1000000000', '15.72', '-93.59929', '2021-04-16T13:15:11.190Z', '0.04039979', '2390.54088', '2020-03-13T02:24:16.483Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(51, 'ftm', 'Fantom', 'https://assets.coingecko.com/coins/images/4001/large/Fantom_round.png?1669652346', '0.398815', '1006116024', '51', '1257074531', '368497591', '0.419026', '0.364895', '0.00192707', '0.48555', '-565316.2713654', '-0.05616', '2541152731.01', '3175000000', '3175000000', '3.46', '-88.53529', '2021-10-28T05:19:39.845Z', '0.00190227', '20744.33759', '2020-03-13T02:25:38.280Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(52, 'xtz', 'Tezos', 'https://assets.coingecko.com/coins/images/976/large/Tezos-logo.png?1547034862', '1.059', '968854442', '52', NULL, '30938285', '1.12', '1.029', '-0.056259806855446', '-5.0442', '-53737690.089412', '-5.25505', '916712585.50572', NULL, NULL, '9.12', '-88.4003', '2021-10-04T00:41:18.025Z', '0.350476', '201.71431', '2018-12-07T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(53, 'tusd', 'TrueUSD', 'https://assets.coingecko.com/coins/images/3449/large/tusd.png?1618395665', '0.998616', '941204796', '53', NULL, '50683790', '1.006', '0.99547', '-0.0025675682111916', '-0.25645', '204472', '0.02173', '941874710.02712', '941874710.02712', NULL, '1.62', '-38.34489', '2018-08-26T20:41:09.375Z', '0.88355', '12.94165', '2020-03-12T10:47:51.380Z', NULL, NULL, '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(54, 'usdp', 'Pax Dollar', 'https://assets.coingecko.com/coins/images/6013/large/Pax_Dollar.png?1629877204', '0.996822', '912890861', '54', '912890861', '2544056', '1.006', '0.993574', '-0.0044011274909869', '-0.43958', '-1643047.9094787', '-0.17966', '913617866.99068', '913617866.99068', NULL, '1.13', '-11.65747', '2018-10-15T07:09:12.459Z', '0.863529', '15.36572', '2021-05-19T13:14:42.046Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(55, 'ht', 'Huobi', 'https://assets.coingecko.com/coins/images/2822/large/huobi-token-logo.png?1547036992', '5.04', '815967989', '55', '1025286925', '9815866', '5.13', '4.89', '-0.053405232403473', '-1.04791', '-10346249.920446', '-1.2521', '162336522.3', '203980445.3', '203980445.3', '39.66', '-87.32652', '2021-05-12T14:42:21.586Z', '0.90862', '453.19044', '2019-01-30T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(56, 'bsv', 'Bitcoin SV', 'https://assets.coingecko.com/coins/images/6799/large/BSV.png?1558947902', '41.86', '805806976', '56', '878328619', '28169379', '44.84', '41.6', '-2.843151014445', '-6.36031', '-53963775.689413', '-6.27653', '19266076.644239', '21000000', '21000000', '489.75', '-91.45829', '2021-04-16T17:09:04.630Z', '35.05', '19.33622', '2022-11-09T22:10:15.324Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(57, 'grt', 'The Graph', 'https://assets.coingecko.com/coins/images/13397/large/Graph_Token.png?1608145566', '0.09018', '792986263', '57', '897234101', '84744891', '0.095279', '0.084817', '-0.0042274069300498', '-4.47783', '-36685204.104743', '-4.42165', '8838119984', '10000000000', '10000000000', '2.84', '-96.84361', '2021-02-12T07:28:45.775Z', '0.052051', '72.30973', '2022-11-22T10:05:03.503Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(58, 'kcs', 'KuCoin', 'https://assets.coingecko.com/coins/images/1047/large/sa9z79.png?1610678720', '7.77', '755915455', '58', NULL, '1336751', '7.99', '7.62', '-0.16973287948461', '-2.13743', '-15973227.113191', '-2.06937', '97385672.45732', '144885672.45724', NULL, '28.83', '-73.10939', '2021-12-01T15:09:35.541Z', '0.342863', '2161.11673', '2019-02-07T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(59, 'snx', 'Synthetix Network', 'https://assets.coingecko.com/coins/images/3406/large/SNX.png?1598631139', '2.39', '744152702', '59', '745880401', '54093227', '2.56', '2.29', '-0.15856580512193', '-6.22446', '133299961', '21.82195', '311800847.13952', '312524755.08877', '312524755.08877', '28.53', '-91.62409', '2021-02-14T01:12:38.505Z', '0.0347864', '6770.04009', '2019-01-06T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(60, 'fxs', 'Frax Share', 'https://assets.coingecko.com/coins/images/13423/large/ethCanonicalFXS.png?1669276861', '9.81', '718525399', '60', '979024696', '34859318', '10.62', '9.49', '-0.7898666987329', '-7.45215', '-58091731.581055', '-7.4801', '73262043.115365', '99822984.114571', '99822984.114571', '42.8', '-77.07713', '2022-01-12T15:22:27.465Z', '1.5', '552.68742', '2021-06-25T16:50:51.447Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(61, 'usdd', 'USDD', 'https://assets.coingecko.com/coins/images/25380/large/UUSD.jpg?1651823371', '0.986297', '714615354', '61', NULL, '22604070', '0.994832', '0.984973', '-0.0056553929107188', '-0.57013', '-3936458.0111862', '-0.54783', '725332035.84225', NULL, NULL, '1.044', '-5.44383', '2022-11-09T09:56:06.131Z', '0.928067', '6.35902', '2022-06-19T16:15:11.558Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(62, 'crv', 'Curve DAO', 'https://assets.coingecko.com/coins/images/12124/large/Curve.png?1597369484', '0.990762', '714108121', '62', '-1036092109', '135549111', '1.079', '0.973406', '-0.083696069583074', '-7.78961', '-59702877.604776', '-7.71543', '723783706', '1890536604.3844', '3303030299', '15.37', '-93.59678', '2020-08-14T00:00:00.000Z', '0.331577', '196.857', '2020-11-05T13:09:50.181Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(63, 'chz', 'Chiliz', 'https://assets.coingecko.com/coins/images/8834/large/Chiliz.png?1561970540', '0.132959', '710798544', '63', '1182285353', '235188877', '0.148984', '0.129047', '-0.012479872446932', '-8.58081', '-65438550.771103', '-8.43023', '5344064580', '8888888888', '8888888888', '0.878633', '-84.89171', '2021-03-13T08:04:21.200Z', '0.00410887', '3130.72601', '2019-09-28T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(64, 'rpl', 'Rocket Pool', 'https://assets.coingecko.com/coins/images/2090/large/rocket_pool_%28RPL%29.png?1637662441', '37.24', '705577205', '64', '705577205', '20544029', '40.35', '35.8', '-2.2533649847149', '-5.7053', '-42154134.236484', '-5.6376', '19113413.067094', '19113413.067094', '19113413.067094', '59.46', '-37.97079', '2021-11-09T04:03:31.003Z', '0.00884718', '416755.80044', '2018-08-28T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(65, 'btt', 'BitTorrent', 'https://assets.coingecko.com/coins/images/22457/large/btt_logo.png?1643857231', '7.22988E-7', '683142112', '65', '710842186', '15764376', '7.45467E-7', '7.17159E-7', '-1.4479188937E-8', '-1.96337', '-22182141.452689', '-3.14496', '9.51421714286E+14', '9.9E+14', '9.9E+14', '3.43E-6', '-79.02867', '2022-01-21T04:00:31.909Z', '6.00209E-7', '19.89108', '2022-12-28T12:35:10.438Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(66, 'bit', 'BitDAO', 'https://assets.coingecko.com/coins/images/17627/large/rI_YptK8.png?1653983088', '0.561833', '654805492', '66', '1103900372', '28771881', '0.588949', '0.552187', '-0.021639074077621', '-3.70868', '-23593610.686335', '-3.47784', '1165584697.6107', '9610239403', '9610239403', '3.1', '-81.87623', '2021-11-12T04:54:56.433Z', '0.270167', '108.10597', '2022-11-22T08:40:21.230Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(67, 'xec', 'eCash', 'https://assets.coingecko.com/coins/images/16646/large/Logo_final-22.png?1628239446', '3.392E-5', '652873682', '67', '710771350', '22285248', '3.491E-5', '3.242E-5', '-1.66690472578E-7', '-0.48897', '-2671277.9521306', '-0.40749', '19289392173303', '21000000000000', '21000000000000', '0.00038001', '-91.08395', '2021-09-04T17:09:31.137Z', '1.847E-5', '83.44521', '2021-07-20T20:49:46.212Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(68, 'cake', 'PancakeSwap', 'https://assets.coingecko.com/coins/images/12632/large/pancakeswap-cake-logo_%281%29.png?1629359065', '3.86', '633643698', '68', '-1409605032', '69906629', '4.11', '3.82', '-0.25045986220261', '-6.09645', '-39533657.871907', '-5.8727', '164704716.52415', '361826029.18037', '750000000', '43.96', '-91.26198', '2021-04-30T10:08:22.934Z', '0.194441', '1875.7392', '2020-11-03T14:29:34.165Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(69, 'klay', 'Klaytn', 'https://assets.coingecko.com/coins/images/9672/large/klaytn.png?1660288824', '0.201222', '620149766', '69', NULL, '38530586', '0.215221', '0.195711', '-0.013993278047282', '-6.50199', '-42742136.591201', '-6.44783', '3086282704.29', NULL, NULL, '4.34', '-95.37433', '2021-03-30T03:44:28.828Z', '0.06044', '232.0734', '2020-04-29T08:19:34.574Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(70, 'twt', 'Trust Wallet', 'https://assets.coingecko.com/coins/images/11085/large/Trust.png?1588062702', '1.46', '607250885', '70', NULL, '27836449', '1.54', '1.45', '-0.06172800259696', '-4.04757', '-26751346.075071', '-4.21944', '416649900', '1000000000', NULL, '2.72', '-46.5309', '2022-12-11T23:25:46.205Z', '0.00277641', '52300.21434', '2020-06-09T09:15:06.983Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(71, 'miota', 'IOTA', 'https://assets.coingecko.com/coins/images/692/large/IOTA_Swirl.png?1604238557', '0.218532', '606753541', '71', NULL, '18334918', '0.236662', '0.212237', '-0.017633064344897', '-7.4664', '-48213361.894037', '-7.36119', '2779530283.2778', '2779530283', NULL, '5.25', '-95.84161', '2017-12-19T00:00:00.000Z', '0.081637', '167.35909', '2020-03-13T02:22:41.168Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(72, 'mkr', 'Maker', 'https://assets.coingecko.com/coins/images/1364/large/Mark_Maker.png?1585191826', '652.92', '586766275', '72', '654644962', '22708936', '716.26', '644.07', '-52.568803253154', '-7.45145', '-46802888.140084', '-7.38718', '901310.94728931', '977631.03695089', '1005577', '6292.31', '-89.64252', '2021-05-03T21:54:29.333Z', '168.36', '287.10788', '2020-03-16T20:52:36.527Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(73, 'gt', 'Gate', 'https://assets.coingecko.com/coins/images/8183/large/gt.png?1556085624', '4.02', '584108106', '73', NULL, '472625', '4.15', '4', '-0.13036230245678', '-3.14258', '-17909196.554575', '-2.97486', '145377816.68006', '300000000', NULL, '12.94', '-68.95607', '2021-05-12T11:39:16.531Z', '0.25754', '1460.01337', '2020-03-13T02:18:02.481Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(74, 'zec', 'Zcash', 'https://assets.coingecko.com/coins/images/486/large/circle-zcash-color.png?1547034197', '44.21', '575729593', '74', '926076005', '65026986', '47.65', '43.49', '-2.8958513986499', '-6.14711', '-41485272.564475', '-6.72137', '13055431.079639', '21000000', '21000000', '3191.93', '-98.61903', '2016-10-29T00:00:00.000Z', '19.75', '123.14586', '2020-03-13T02:20:55.002Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(75, 'gusd', 'Gemini Dollar', 'https://assets.coingecko.com/coins/images/5992/large/gemini-dollar-gusd.png?1536745278', '1.002', '572303294', '75', '572303294', '960051', '1.014', '0.996733', '-0.00017098408424165', '-0.01707', '-1200928.4399191', '-0.2094', '572163515.41', '572163515.41', NULL, '3.3', '-69.72501', '2018-10-11T17:36:21.529Z', '0.78261', '27.80882', '2018-09-29T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(76, 'imx', 'ImmutableX', 'https://assets.coingecko.com/coins/images/17233/large/immutableX-symbol-BLK-RGB.png?1665110648', '0.715456', '561392793', '76', '1428515854', '32017875', '0.726282', '0.631927', '0.02048472', '2.94756', '15040101', '2.75282', '785980485.93002', '2000000000', '2000000000', '9.52', '-92.49746', '2021-11-26T01:03:01.536Z', '0.378055', '88.92414', '2022-12-31T07:36:37.649Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(77, 'cusdc', 'cUSDC', 'https://assets.coingecko.com/coins/images/9442/large/Compound_USDC.png?1567581577', '0.02270078', '553456180', '77', NULL, '3.05', '0.02277983', '0.02269755', '-4.8359181513493E-5', '-0.21258', '5809295', '1.06077', '24380487726.367', '24380487726.367', NULL, '0.058843', '-61.42171', '2020-10-21T11:24:27.820Z', '0.00620705', '265.72555', '2021-03-04T08:11:37.438Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(78, 'dash', 'Dash', 'https://assets.coingecko.com/coins/images/19/large/dash-logo.png?1548385930', '49.68', '551263443', '78', NULL, '87473655', '51.96', '48.59', '-2.0023707770258', '-3.87403', '-20860061.413315', '-3.64608', '11109858.282075', '18920000', NULL, '1493.59', '-96.6798', '2017-12-20T00:00:00.000Z', '0.213899', '23083.90387', '2014-02-14T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(79, 'neo', 'NEO', 'https://assets.coingecko.com/coins/images/480/large/NEO_512_512.png?1594357361', '7.72', '544566751', '79', NULL, '26790015', '8.27', '7.56', '-0.54250978085641', '-6.56737', '-34817030.047331', '-6.00932', '70530000', '100000000', NULL, '198.38', '-96.10625', '2018-01-15T00:00:00.000Z', '0.078349', '9759.01385', '2016-10-21T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(80, 'okt', 'OKC', 'https://assets.coingecko.com/coins/images/13708/large/WeChat_Image_20220118095654.png?1642471094', '29.56', '527112448', '80', '1231284077', '4164610', '30.68', '28.06', '-0.44893843799165', '-1.49579', '-7973752.3717611', '-1.49018', '17847480', '17847259.5', '41690000', '250.53', '-88.2286', '2021-05-10T03:09:56.045Z', '13.02', '126.44589', '2022-07-13T00:38:46.306Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(81, 'paxg', 'PAX Gold', 'https://assets.coingecko.com/coins/images/9519/large/paxg.PNG?1568542565', '1910.71', '515321904', '81', NULL, '10120595', '1919.82', '1903.99', '-2.834263297658', '-0.14812', '-82342.936664879', '-0.01598', '269971.709', '269971.709', NULL, '2241.37', '-14.94941', '2021-05-17T19:02:29.657Z', '1399.64', '36.19901', '2019-11-18T03:09:35.959Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(82, 'tkx', 'Tokenize Xchange', 'https://assets.coingecko.com/coins/images/4984/large/TKX_-_Logo_-_RGB-15.png?1672912391', '6.44', '515224828', '82', '644063239', '9319850', '6.87', '6.44', '-0.40583874322503', '-5.92742', '-31877831.128941', '-5.82666', '79995999.945184', '100000000', '100000000', '22.3', '-71.13049', '2022-10-31T10:23:59.455Z', '0.111255', '5685.65589', '2019-04-28T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(83, 'mina', 'Mina Protocol', 'https://assets.coingecko.com/coins/images/15628/large/JM4_vQ34_400x400.png?1621394004', '0.616164', '503524590', '83', '614186820', '52362331', '0.653998', '0.54399', '0.02273595', '3.83129', '19479921', '4.02441', '817520730.84004', '997191532.84004', NULL, '9.09', '-93.23638', '2021-06-01T01:42:37.064Z', '0.422757', '45.43514', '2023-01-01T03:25:49.254Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(84, 'rune', 'THORChain', 'https://assets.coingecko.com/coins/images/6595/large/Rune200x200.png?1671179394', '1.67', '503070957', '84', '836498201', '100495405', '1.84', '1.65', '-0.16253446724124', '-8.84536', '-47617323.747968', '-8.64687', '300700561', '500000000', '500000000', '20.87', '-91.99749', '2021-05-19T00:30:09.436Z', '0.00851264', '19517.05417', '2019-09-28T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(85, 'ar', 'Arweave', 'https://assets.coingecko.com/coins/images/4343/large/oRt6SiEN_400x400.jpg?1591059616', '10.06', '502822656', '85', '662288713', '66404145', '10.71', '9.37', '-0.49308874669092', '-4.67334', '-18503264.042442', '-3.54927', '50108502', '64598643', '66000000', '89.24', '-88.75478', '2021-11-05T04:14:42.689Z', '0.298788', '3258.46609', '2020-01-31T06:47:36.543Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(86, 'osmo', 'Osmosis', 'https://assets.coingecko.com/coins/images/16724/large/osmo.png?1632763885', '0.931904', '484377757', '86', '931520262', '21301076', '0.963853', '0.8948', '-0.025516803791236', '-2.66516', '-11288646.279006', '-2.27747', '519986282', '325000000', '1000000000', '11.25', '-91.71888', '2022-03-04T05:12:18.707Z', '0.678606', '37.27403', '2023-01-01T05:30:08.710Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(87, 'btse', 'BTSE Token', 'https://assets.coingecko.com/coins/images/10807/large/BTSE_logo_Square.jpeg?1583965964', '2.96', '480278449', '87', '592711342', '335055', '2.99', '2.81', '0.110928', '3.88801', '18298655', '3.96092', '162061501', '200000000', '200000000', '9.21', '-67.85786', '2022-03-23T09:11:07.549Z', '0.631269', '369.17746', '2020-12-13T14:22:21.597Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(88, 'cdai', 'cDAI', 'https://assets.coingecko.com/coins/images/9281/large/cDAI.png?1576467585', '0.02204214', '477291722', '88', '477291722', '1008.65', '0.02222639', '0.02204214', '-5.05291715398E-5', '-0.22871', '12109747', '2.60323', '21653604186.455', '21653604186.455', NULL, '0.03159087', '-30.22623', '2020-10-12T21:29:00.007Z', '0.00728854', '202.4217', '2020-03-18T04:29:40.819Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(89, 'op', 'Optimism', 'https://assets.coingecko.com/coins/images/25244/large/Optimism.png?1660904599', '2.23', '476473932', '89', '939544055', '454597281', '2.23', '1.96', '0.065566', '3.02743', '12530280', '2.70082', '214748364.8', '4294967296', '4294967296', '2.46', '-10.13039', '2023-01-22T05:26:16.543Z', '0.402159', '449.02301', '2022-06-18T20:54:52.178Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(90, 'xaut', 'Tether Gold', 'https://assets.coingecko.com/coins/images/10481/large/Tether_Gold.png?1668148656', '1901.05', '467686431', '90', '467686431', '1031608', '1916.62', '1894.97', '-9.8088949206483', '-0.51332', '-3097180.8933138', '-0.65788', '246524.33', '246524.33', NULL, '2096.29', '-9.49402', '2021-05-19T12:57:30.922Z', '1447.84', '31.04142', '2020-03-19T13:45:41.821Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(91, 'nexo', 'NEXO', 'https://assets.coingecko.com/coins/images/3695/large/nexo.png?1548086057', '0.817907', '457863096', '91', '817612657', '13848643', '0.826336', '0.782548', '-0.0010211503093739', '-0.12469', '5436856', '1.20171', '560000010.0064', '1000000000', '1000000000', '4.07', '-79.9356', '2021-05-12T14:37:47.535Z', '0.04515276', '1707.67239', '2018-09-13T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(92, 'ceth', 'cETH', 'https://assets.coingecko.com/coins/images/10643/large/ceth2.JPG?1581389598', '30.87', '449023902', '92', '449058782', '169.63', '32.59', '30.86', '-1.4998385291566', '-4.6333', '-21871871.492007', '-4.64474', '14545148.730053', '14546278.600102', NULL, '97.75', '-68.41855', '2021-11-21T12:39:57.508Z', '1.89', '1536.60267', '2020-03-13T02:22:33.711Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(93, 'zil', 'Zilliqa', 'https://assets.coingecko.com/coins/images/2687/large/Zilliqa-logo.png?1547036894', '0.02701546', '433055377', '93', '566444236', '143761406', '0.03000151', '0.02642835', '-0.0013989286923894', '-4.92331', '-21819101.003968', '-4.79673', '16054824706.153', '17104005597.424', '21000000000', '0.255376', '-89.43598', '2021-05-06T17:33:45.940Z', '0.00239616', '1025.88305', '2020-03-13T02:22:55.161Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(94, 'luna', 'Terra', 'https://assets.coingecko.com/coins/images/25767/large/01_Luna_color.png?1653556122', '2.08', '424740769', '94', '-2091726083', '82156714', '2.28', '2.04', '-0.19573061583704', '-8.60089', '-35671548.157554', '-7.74774', '203875611.8987', '1057556004.4949', NULL, '18.87', '-89.00106', '2022-05-28T09:18:14.847Z', '1.19', '73.90321', '2022-12-16T22:44:52.442Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(95, 'gmx', 'GMX', 'https://assets.coingecko.com/coins/images/18323/large/arbit.png?1631532468', '49.8', '418985766', '95', '660504674', '27788702', '53.33', '47.77', '-3.1008760499638', '-5.86156', '-25482646.021649', '-5.73329', '8405029.6996938', '8405034.5188795', '13250000', '62.1', '-19.74952', '2022-01-16T16:01:00.545Z', '11.53', '332.06531', '2022-06-15T09:30:22.146Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(96, 'xrd', 'Radix', 'https://assets.coingecko.com/coins/images/4374/large/Radix.png?1629701658', '0.04066727', '410441565', '96', '976531378', '369523', '0.04245788', '0.04059667', '-0.0013977154230546', '-3.32275', '-13449589.732095', '-3.17289', '10087333373.639', '12487351342.491', '24000000000', '0.651264', '-93.76389', '2021-11-14T16:09:27.130Z', '0.03145312', '29.12404', '2022-11-29T23:20:09.754Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(97, '1inch', '1inch', 'https://assets.coingecko.com/coins/images/13469/large/1inch-token.png?1608803028', '0.514687', '409005957', '97', '769571114', '109030328', '0.555244', '0.504742', '-0.029039005536923', '-5.34074', '-21886950.109821', '-5.07944', '797208892.06788', '1500000000', '1500000000', '8.65', '-94.0695', '2021-10-27T08:24:54.808Z', '0.37369', '37.30222', '2022-12-30T12:35:04.113Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(98, 'enj', 'Enjin Coin', 'https://assets.coingecko.com/coins/images/1102/large/enjin-coin-logo.png?1547035078', '0.404625', '403087715', '98', '403087715', '59558668', '0.445547', '0.394447', '-0.029716104584756', '-6.84165', '-30468789.215648', '-7.02764', '1000000000', '1000000000', '1000000000', '4.82', '-91.63603', '2021-11-25T09:53:41.955Z', '0.01865964', '2060.21131', '2017-11-12T00:00:00.000Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(99, 'ethw', 'EthereumPoW', 'https://assets.coingecko.com/coins/images/26997/large/logo-clear.png?1661311105', '3.72', '399907792', '99', '399906953', '18665469', '4.09', '3.47', '-0.33139924093548', '-8.17621', '-35984869.050323', '-8.25544', '107818943.04993', '107818717.04993', NULL, '58.54', '-93.66497', '2022-09-03T00:10:33.722Z', '2.87', '29.00544', '2022-12-19T23:25:23.177Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(100, 'kava', 'Kava', 'https://assets.coingecko.com/coins/images/9761/large/kava.png?1663638871', '1.01', '393739132', '100', NULL, '80738246', '1.13', '1.005', '-0.070664764124542', '-6.53606', '-25494763.278109', '-6.08127', '389296319', '389303387', NULL, '9.12', '-88.9116', '2021-08-30T11:10:02.948Z', '0.287137', '252.19724', '2020-03-13T02:24:16.835Z', NULL, NULL, '2023-01-25 20:49:44', '2023-01-25 20:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(135, '2014_10_12_000000_create_users_table', 1),
(136, '2014_10_12_100000_create_password_resets_table', 1),
(137, '2019_08_19_000000_create_failed_jobs_table', 1),
(138, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(139, '2022_11_28_140937_laratrust_setup_tables', 1),
(140, '2022_12_07_130423_create_transactions_table', 1),
(141, '2022_12_24_074703_create_cryptos_table', 1),
(142, '2022_12_24_074708_create_stocks_table', 1),
(143, '2023_01_03_164954_create_withdrawals_table', 1),
(144, '2023_01_06_090001_create_settings_table', 1),
(145, '2023_01_06_122643_create_countries_table', 1),
(146, '2023_03_03_124249_add_managers_id_to_users_table', 2),
(147, '2023_06_09_124116_add_duration_to_transactions_table', 3),
(148, '2023_08_17_133211_modify_withdrawals_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('valuedlogic.web0005@gmail.com', '$2y$10$SAyQTC4/G2SIcN39mExZTeghVMKeFF8M/Sj.WjqSBNQdJr/yMxFEK', '2023-06-06 15:01:50'),
('support@tradnationltd.com', '$2y$10$vUUu3rq2msFKbkuzyPJxLuR9Itxz1tbChm/XcHUv80Btal1vk39wa', '2023-06-07 17:00:42'),
('official247@gmail.com', '$2y$10$pNcf5NP00GGbGHPngHyTTeHdpF1HGL95xt5LTNiPH6kdcq0FmjWwu', '2023-06-25 20:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(2, 'users-read', 'Read Users', 'Read Users', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(3, 'users-update', 'Update Users', 'Update Users', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(5, 'profile-read', 'Read Profile', 'Read Profile', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(6, 'profile-update', 'Update Profile', 'Update Profile', '2023-01-25 20:49:43', '2023-01-25 20:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(2, 'user', 'User', 'User', '2023-01-25 20:49:43', '2023-01-25 20:49:43'),
(3, 'manager', 'Manager', 'Manager', '2023-01-25 20:49:43', '2023-01-25 20:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 12, 'App\\Models\\User'),
(2, 14, 'App\\Models\\User'),
(2, 16, 'App\\Models\\User'),
(3, 24, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User'),
(2, 31, 'App\\Models\\User'),
(2, 32, 'App\\Models\\User'),
(2, 34, 'App\\Models\\User'),
(2, 35, 'App\\Models\\User'),
(2, 36, 'App\\Models\\User'),
(2, 37, 'App\\Models\\User'),
(2, 40, 'App\\Models\\User'),
(2, 41, 'App\\Models\\User'),
(3, 44, 'App\\Models\\User'),
(2, 45, 'App\\Models\\User'),
(2, 46, 'App\\Models\\User'),
(2, 47, 'App\\Models\\User'),
(2, 49, 'App\\Models\\User'),
(2, 50, 'App\\Models\\User'),
(2, 51, 'App\\Models\\User'),
(2, 54, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'btc_wallet_address', 'bc1qyccpyu5j3mju440tflaj3za5f5vx6yz032s6zc', '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(2, 'support_email', 'support@tradenationlive.com', '2023-01-25 20:49:44', '2023-01-25 20:49:44'),
(3, 'btc_wallet_address', 'bc1qyccpyu5j3mju440tflaj3za5f5vx6yz032s6zc', '2023-01-26 13:40:47', '2023-01-26 13:40:47'),
(4, 'qrcode', 'uploads/qrcode/w3g8hHQRNjt2KubFlOXyv2rYMPzg46vot6QWukDf.jpg', '2023-02-19 11:00:51', '2023-02-19 11:07:32'),
(5, 'usdt_wallet_address', 'TYW6eFrmHUL6BZsM6Y8T9FVnHLSDFFFvxy', '2023-06-06 13:27:46', '2023-06-06 13:28:19'),
(6, 'xmr_wallet_address', '42KQ1soBEet43CQPxu6scVHogErcZ7jHBKf6WrsgPQpk8r4zDu68GShhhjbQJAApNqjArtoHZPTygHJz37z2aYse85TsTUG', '2023-06-06 13:27:46', '2023-06-06 13:27:46'),
(7, 'qrcode_usdt', 'uploads/qrcode/iWaBblPi06XF12msWsd7LZT5LSZJiAhnbyj0N41Y.jpg', '2023-06-06 13:29:11', '2023-08-19 13:45:57'),
(8, 'qrcode_xmr', 'uploads/qrcode/l1ADdtg7gxjxQJ8rBB9b4hs6wRP4Lix2zkZ6GakV.jpg', '2023-06-06 13:29:43', '2023-08-19 13:46:32'),
(9, 'qrcode_btc', 'uploads/qrcode/IANc8Pyy49Yex1efjAG9ppDbllLDuM4StiM1ll3D.jpg', '2023-06-06 13:32:20', '2023-08-19 13:45:23'),
(10, 'online_users', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) NOT NULL,
  `asset_type` varchar(191) DEFAULT NULL,
  `symbol` varchar(191) NOT NULL,
  `volume` varchar(191) NOT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `profit1` varchar(191) DEFAULT NULL,
  `profit2` varchar(191) DEFAULT NULL,
  `point1` varchar(191) DEFAULT NULL,
  `point2` varchar(191) DEFAULT NULL,
  `s_l` varchar(191) NOT NULL,
  `t_p` varchar(191) NOT NULL,
  `duration` varchar(191) DEFAULT NULL,
  `buy_or_sell` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `type`, `asset_type`, `symbol`, `volume`, `amount`, `profit1`, `profit2`, `point1`, `point2`, `s_l`, `t_p`, `duration`, `buy_or_sell`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'deposit', NULL, 'deposit', '178000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-01-25 21:22:43', '2023-01-25 21:26:16'),
(2, 2, 'MARKET EXECUTION', 'Crypto', 'btc', '100', '22648', NULL, NULL, NULL, NULL, '0', '0', NULL, 'SELL', 'ACTIVE', '2023-01-25 22:09:24', '2023-01-25 22:09:24'),
(3, 2, 'MARKET EXECUTION', 'Forex', 'EUR/GBP', '1', '0.880843', NULL, NULL, NULL, NULL, '0', '0', NULL, 'SELL', 'ACTIVE', '2023-01-25 22:09:40', '2023-01-25 22:09:40'),
(4, 2, 'MARKET EXECUTION', 'Stocks', 'AAPL', '1', '140.185', NULL, NULL, NULL, NULL, '0', '0', NULL, 'SELL', 'ACTIVE', '2023-01-25 22:09:58', '2023-01-25 22:09:58'),
(5, 2, 'MARKET EXECUTION', 'Stocks', 'TSLA', '15', '143.06', NULL, NULL, NULL, NULL, '0', '0', NULL, 'BUY', 'ACTIVE', '2023-01-25 22:29:29', '2023-01-25 22:29:29'),
(6, 3, 'ADVANCED TRADE', 'Stocks', 'TSLA', '36500', '143.95', '215526.22438347', '218061.82702327', '85', '86', '700', '0', NULL, 'SELL', 'CLOSED', '2023-01-25 23:17:57', '2023-01-25 23:43:59'),
(7, 3, 'ADVANCED TRADE', 'Commodities', 'XAU', '37900', '1939.9751226175', '15238.339737117', '15433.70306708', '78', '79', '0', '200', NULL, 'BUY', 'CLOSED', '2023-01-25 23:19:42', '2023-01-25 23:43:11'),
(8, 3, 'ADVANCED TRADE', 'Crypto', 'btc', '25000', '22640', '651.50176678445', '651.50176678445', '59', '59', '0', '0', NULL, 'BUY', 'CLOSED', '2023-01-25 23:46:33', '2023-01-25 23:55:06'),
(9, 3, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '56000', '1.339555', '28009301.596426', '28009301.596426', '67', '67', '0', '700', NULL, 'BUY', 'CLOSED', '2023-01-25 23:56:21', '2023-01-26 00:01:42'),
(10, 3, 'ADVANCED TRADE', 'Stocks', 'AMZN', '87000', '97.18', '778863.96377856', '778863.96377856', '87', '87', '876', '0', NULL, 'BUY', 'CLOSED', '2023-01-26 04:19:30', '2023-01-26 04:27:56'),
(11, 3, 'ADVANCED TRADE', 'Crypto', 'btc', '98000', '23035', '467.98350336445', '467.98350336445', '11', '11', '9808', '134', NULL, 'BUY', 'CLOSED', '2023-01-26 12:54:07', '2023-01-29 20:18:33'),
(12, 3, 'ADVANCED TRADE', 'Stocks', 'SP500', '78000', '4050.67', '17330.466317918', '17330.466317918', '90', '90', '8889', '0', NULL, 'BUY', 'CLOSED', '2023-01-27 01:44:25', '2023-01-29 20:20:30'),
(13, 4, 'deposit', NULL, 'deposit', '10', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-27 03:11:04', '2023-01-27 03:11:04'),
(14, 4, 'deposit', NULL, 'deposit', '1', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 08:19:14', '2023-01-28 08:19:14'),
(15, 4, 'deposit', NULL, 'deposit', '1', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 08:21:37', '2023-01-28 08:21:37'),
(16, 4, 'deposit', NULL, 'deposit', '1', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 08:25:56', '2023-01-28 08:25:56'),
(17, 5, 'Deposit', NULL, '+', '22000', '22000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-01-28 15:32:09', '2023-01-28 15:32:09'),
(18, 4, 'deposit', NULL, 'deposit', '10', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 18:29:21', '2023-01-28 18:29:21'),
(19, 4, 'deposit', NULL, 'deposit', '1', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 18:31:01', '2023-01-28 18:31:01'),
(20, 4, 'deposit', NULL, 'deposit', '100', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 18:31:44', '2023-01-28 18:31:44'),
(21, 4, 'deposit', NULL, 'deposit', '10', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 19:36:35', '2023-01-28 19:36:35'),
(22, 3, 'ADVANCED TRADE', 'Forex', 'USD/CHF', '76000', '0.921005', '5776298.7171622', '5776298.7171622', '7', '7', '0', '789', NULL, 'SELL', 'CLOSED', '2023-01-28 20:54:57', '2023-01-29 20:18:07'),
(23, 8, 'deposit', NULL, 'deposit', '140000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 22:24:25', '2023-01-28 22:24:25'),
(24, 8, 'deposit', NULL, 'deposit', '140000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-01-28 22:24:25', '2023-01-28 22:24:25'),
(25, 9, 'deposit', NULL, 'deposit', '189000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-01-28 22:27:42', '2023-01-28 22:28:14'),
(26, 9, 'MARKET EXECUTION', 'Crypto', 'btc', '37800', '23014', NULL, NULL, NULL, NULL, '0', '6789', NULL, 'BUY', 'CLOSED', '2023-01-28 22:49:19', '2023-01-28 23:49:49'),
(27, 9, 'MARKET EXECUTION', 'Crypto', 'btc', '37800', '23014', NULL, NULL, NULL, NULL, '0', '7678', NULL, 'BUY', 'CLOSED', '2023-01-28 22:49:24', '2023-01-28 23:52:36'),
(28, 9, 'ADVANCED TRADE', 'Forex', 'EUR/NZD', '37800', '1.674111', '7451118.8326222', '7451118.8326222', '33', '33', '0', '6766', NULL, 'BUY', 'CLOSED', '2023-01-28 23:08:05', '2023-01-28 23:53:15'),
(29, 9, 'ADVANCED TRADE', 'Stocks', 'PYPL', '37800', '81.83', '124721.98460222', '124721.98460222', '27', '27', '0', '56446', NULL, 'BUY', 'CLOSED', '2023-01-28 23:23:40', '2023-01-28 23:52:05'),
(30, 9, 'ADVANCED TRADE', 'Commodities', 'XCU', '37800', '0.26459375', '35715129.325617', '35715129.325617', '25', '25', '0', '12896', NULL, 'SELL', 'CLOSED', '2023-01-28 23:40:03', '2023-01-28 23:51:39'),
(31, 9, 'ADVANCED TRADE', 'Stocks', 'AAPL', '12800', '145.93', '66662.098266292', '66662.098266292', '76', '76', '15488', '0', NULL, 'BUY', 'CLOSED', '2023-01-28 23:57:46', '2023-01-28 23:59:00'),
(32, 9, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '16900', '1.33385', '3167522.5849983', '3167522.5849983', '25', '25', '0', '567', NULL, 'BUY', 'CLOSED', '2023-01-29 00:33:41', '2023-01-29 00:45:39'),
(33, 9, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '16900', '1.33385', '3167522.5849983', '3167522.5849983', '25', '25', '678', '0', NULL, 'BUY', 'CLOSED', '2023-01-29 00:33:43', '2023-01-29 00:45:28'),
(34, 9, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '16900', '1.33385', '3167522.5849983', '3167522.5849983', '25', '25', '0', '0', NULL, 'BUY', 'CLOSED', '2023-01-29 00:33:53', '2023-01-29 00:45:17'),
(35, 9, 'deposit', NULL, 'deposit', '90', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-01-29 00:35:48', '2023-01-29 10:51:11'),
(36, 9, 'deposit', NULL, 'deposit', '90', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-01-29 00:35:48', '2023-01-29 10:54:08'),
(37, 9, 'deposit', NULL, 'deposit', '90', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-01-29 00:35:50', '2023-01-29 10:45:21'),
(38, 9, 'deposit', NULL, 'deposit', '3430', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-01-29 09:06:22', '2023-01-29 09:06:41'),
(39, 9, 'ADVANCED TRADE', 'Forex', 'CAD/JPY', '45600', '97.368518', '37465.908642052', '37465.908642052', '8', '8', '7647', '0', NULL, 'BUY', 'CLOSED', '2023-01-29 09:09:58', '2023-01-29 09:12:11'),
(40, 9, 'ADVANCED TRADE', 'Commodities', 'ZLH23', '8900', '60.760000000002', '111323.23897301', '111323.23897301', '76', '76', '0', '67000', NULL, 'SELL', 'CLOSED', '2023-01-29 09:20:09', '2023-01-29 09:21:51'),
(41, 9, 'deposit', NULL, 'deposit', '7888', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-01-29 10:54:34', '2023-01-29 10:55:06'),
(42, 9, 'MARKET EXECUTION', 'Stocks', 'AMZN', '17678', '102.24', NULL, NULL, NULL, NULL, '0', '7889', NULL, 'BUY', 'CLOSED', '2023-01-29 10:55:35', '2023-01-29 10:59:38'),
(43, 10, 'Deposit', NULL, '+', '22000', '22000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-01-29 20:34:22', '2023-01-29 20:34:22'),
(44, 11, 'Deposit', NULL, '+', '15500', '15500', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-01-30 16:45:32', '2023-01-30 16:45:32'),
(45, 3, 'ADVANCED TRADE', 'Forex', 'CAD/JPY', '678', '97.55904', '555.97103046524', '555.97103046524', '8', '8', '0', '5674', NULL, 'BUY', 'CLOSED', '2023-01-30 18:35:01', '2023-01-30 18:48:05'),
(46, 3, 'deposit', NULL, 'deposit', '4500', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-01-30 18:43:38', '2023-01-30 18:44:00'),
(47, 12, 'Deposit', NULL, '+', '15500', '15500', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-01-30 22:55:03', '2023-01-30 22:55:03'),
(48, 12, 'ADVANCED TRADE', 'Stocks', 'AMZN', '10000', '100.55', '20885.131775236', '20885.131775236', '21', '21', '0', '2600', NULL, 'BUY', 'CLOSED', '2023-01-31 17:02:13', '2023-02-10 16:21:56'),
(49, 10, 'Deposit', NULL, '-', '12000', '12000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 05:46:26', '2023-02-01 05:46:26'),
(50, 13, 'deposit', NULL, 'deposit', '10000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-02-01 14:18:21', '2023-02-01 14:18:44'),
(51, 13, 'Deposit', NULL, '+', '1000', '1000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 14:30:50', '2023-02-01 14:30:50'),
(52, 13, 'Deposit', NULL, '+', '10000', '10000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 14:31:40', '2023-02-01 14:31:40'),
(53, 2, 'Deposit', NULL, '+', '50000', '50000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 14:34:34', '2023-02-01 14:34:34'),
(54, 2, 'Deposit', NULL, '+', '50000', '50000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 14:34:34', '2023-02-01 14:34:34'),
(55, 2, 'Deduction', NULL, '-', '50000', '50000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 14:35:16', '2023-02-01 14:35:16'),
(56, 14, 'Deposit', NULL, '+', '10000', '10000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 15:09:22', '2023-02-01 15:09:22'),
(57, 15, 'Locked', NULL, '+', '135000', '135000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 15:19:18', '2023-02-01 15:19:18'),
(58, 16, 'LOCKED', NULL, '+', '135000', '135000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 15:24:35', '2023-02-01 15:24:35'),
(59, 4, 'mk', NULL, '+', '100', '100', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-02-01 19:56:07', '2023-02-01 19:56:07'),
(60, 12, 'ADVANCED TRADE', 'Commodities', 'WTIOIL', '15000', '79.929999999999', '43162.767421494', '43162.767421494', '23', '23', '0', '1899', NULL, 'BUY', 'CLOSED', '2023-02-10 16:41:53', '2023-02-25 23:46:19'),
(61, 12, 'ADVANCED TRADE', 'Crypto', 'btc', '4000', '23485', '403.66191185863', '403.66191185863', '237', '237', '0', '404', NULL, 'BUY', 'CLOSED', '2023-02-27 21:31:13', '2023-03-13 23:52:00'),
(62, 12, 'ADVANCED TRADE', 'Stocks', 'SP500', '5999', '3986.62', '842.67876045372', '842.67876045372', '56', '56', '0', '843', NULL, 'BUY', 'CLOSED', '2023-02-27 22:03:59', '2023-03-17 02:49:54'),
(63, 12, 'ADVANCED TRADE', 'Crypto', 'eth', '7000', '1637.71', '3162.9531479932', '3162.9531479932', '74', '74', '3162', '0', NULL, 'SELL', 'CLOSED', '2023-02-27 22:07:36', '2023-03-10 22:50:04'),
(64, 12, 'ADVANCED TRADE', 'Crypto', 'sol', '2999', '22.87', '6556.6243987757', '6556.6243987757', '5', '5', '0', '498.2', NULL, 'SELL', 'CLOSED', '2023-02-27 22:12:18', '2023-06-15 22:39:36'),
(65, 22, 'Deposit', NULL, '+', '59800', '59800', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-03-07 00:36:27', '2023-03-07 00:36:27'),
(66, 22, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '6790', '1.361675', '3241228.6338517', '3241228.6338517', '65', '65', '0', '657', NULL, 'BUY', 'ACTIVE', '2023-03-07 00:46:44', '2023-03-07 00:47:57'),
(67, 22, 'deposit', NULL, 'deposit', '4000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-03-07 00:48:38', '2023-03-07 00:56:32'),
(68, 22, 'deposit', NULL, 'deposit', '1567', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-03-07 00:59:37', '2023-03-07 01:02:02'),
(69, 25, 'deposit', NULL, 'deposit', '12000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-03-07 16:44:46', '2023-03-07 16:46:10'),
(70, 25, 'deposit', NULL, 'deposit', '823', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-03-07 16:46:38', '2023-03-07 16:47:04'),
(71, 25, 'ADVANCED TRADE', 'Crypto', 'btc', '1200', '22400', '66.964285714286', '66.964285714286', '125', '125', '0', '12', NULL, 'BUY', 'CLOSED', '2023-03-07 16:50:33', '2023-03-07 16:54:12'),
(72, 25, 'Bonus', NULL, '+', '4990', '4990', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-03-07 16:55:16', '2023-03-07 16:55:16'),
(73, 33, 'Deposit', NULL, '+', '250', '250', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-03-21 15:31:33', '2023-03-21 15:31:33'),
(74, 36, 'Deposit', NULL, '+', '185000', '185000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-03-30 15:13:10', '2023-03-30 15:13:10'),
(75, 36, 'MARKET EXECUTION', 'Crypto', 'btc', '0.72', '28688', NULL, NULL, NULL, NULL, '0', '0', NULL, 'BUY', 'CLOSED', '2023-03-30 16:41:52', '2023-04-03 16:24:08'),
(76, 12, 'ADVANCED TRADE', 'Crypto', 'btc', '8500', '27997', '2866.0213594314', '2866.0213594314', '944', '944', '0', '567.4', NULL, 'BUY', 'CLOSED', '2023-04-03 21:10:10', '2023-06-15 22:38:44'),
(77, 12, 'ADVANCED TRADE', 'Forex', 'USD/CHF', '5000', '0.913885', '218845.91606165', '218845.91606165', '4', '4', '16000.8', '0', NULL, 'BUY', 'CLOSED', '2023-04-03 21:16:26', '2023-06-14 21:09:46'),
(78, 31, 'deposit', NULL, 'deposit', '250000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-04-11 00:34:58', '2023-04-11 00:35:56'),
(79, 31, 'ADVANCED TRADE', 'Forex', 'USD/CHF', '12000', '0.90949', '2638841.5485602', '2638841.5485602', '20', '20', '0', '5673', NULL, 'BUY', 'CLOSED', '2023-04-11 00:42:22', '2023-04-11 00:51:07'),
(80, 31, 'ADVANCED TRADE', 'Crypto', 'btc', '13000', '29147', '2676.0901636532', '2676.0901636532', '600', '600', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-04-11 01:08:52', '2023-04-11 01:08:52'),
(81, 37, 'Deposit', NULL, '+', '250', '250', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-04-12 10:13:35', '2023-04-12 10:13:35'),
(82, 31, 'deposit', NULL, 'deposit', '14000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-04-12 14:08:22', '2023-04-12 14:18:15'),
(83, 31, 'deposit', NULL, 'deposit', '15000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-04-12 14:23:16', '2023-04-12 14:23:46'),
(84, 31, 'ADVANCED TRADE', 'Crypto', 'btc', '24000', '30049', '535.12596093048', '535.12596093048', '67', '67', '0', '365', NULL, 'BUY', 'CLOSED', '2023-04-12 14:34:58', '2023-04-12 14:45:10'),
(85, 38, 'Deposit', NULL, '+', '250', '250', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-04-12 15:19:10', '2023-04-12 15:19:10'),
(86, 38, 'ADVANCED TRADE', 'Crypto', 'btc', '50', '29914', '15.043123621047', '15.043123621047', '900', '900', '0', '4', NULL, 'BUY', 'ACTIVE', '2023-04-13 00:52:14', '2023-04-13 00:54:45'),
(87, 31, 'ADVANCED TRADE', 'Crypto', 'btc', '3455', '30085', '651', '651', '567', '567', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-04-13 09:16:55', '2023-04-13 09:16:55'),
(89, 40, 'ADVANCED TRADE', 'Commodities', 'WTIOIL', '50', '82.990000000001', '5422', '5422', '900', '900', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-04-13 16:20:34', '2023-06-10 21:08:12'),
(90, 37, 'ADVANCED TRADE', 'Crypto', 'btc', '50', '30266', '15', '15', '900', '900', '0', '15', NULL, 'BUY', 'CLOSED', '2023-04-13 16:55:02', '2023-04-13 21:19:23'),
(91, 38, 'ADVANCED TRADE', 'Crypto', 'btc', '50', '30266', '15', '15', '900', '900', '0', '12.5', NULL, 'BUY', 'CLOSED', '2023-04-13 16:57:23', '2023-04-14 09:15:17'),
(92, 37, 'BONUS', NULL, '+', '8', '8', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-04-13 21:37:54', '2023-04-13 21:37:54'),
(93, 379921, 'ADVANCED TRADE', 'Stocks', 'TSLA', '50', '185.9', '30', '30', '11', '11', '0', '8', NULL, 'BUY', 'ACTIVE', '2023-04-14 08:51:50', '2023-04-14 08:52:55'),
(94, 37, 'ADVANCED TRADE', 'Crypto', 'xrp', '54', '0.522815', '103', '103', '0.1', '0.1', '22.2', '0', NULL, 'BUY', 'CLOSED', '2023-04-14 09:01:47', '2023-04-20 18:13:36'),
(95, 40, 'deposit', NULL, 'deposit', '10', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-04-14 16:08:37', '2023-04-14 16:08:37'),
(96, 37, 'ADVANCED TRADE', 'Crypto', 'bnb', '52', '333.78', '62', '62', '40', '40', '0', '20.8', NULL, 'BUY', 'CLOSED', '2023-04-14 16:43:10', '2023-04-15 15:14:29'),
(97, 38, 'ADVANCED TRADE', 'Crypto', 'apt', '165', '12.65', '652', '652', '5', '5', '0', '223', NULL, 'BUY', 'CLOSED', '2023-04-14 16:56:44', '2023-05-11 10:18:46'),
(98, 37, 'ADVANCED TRADE', 'Crypto', 'btc', '57', '30459', '44', '44', '2334', '2334', '0', '34.2', NULL, 'SELL', 'CLOSED', '2023-04-15 15:29:24', '2023-04-17 13:48:56'),
(99, 41, 'Welcome', NULL, '+', '1000', '1000', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-04-18 02:52:44', '2023-04-18 02:52:44'),
(102, 41, 'ADVANCED TRADE', 'Crypto', 'btc', '200', '29435', '0', '1', '0', '9.98', '0', '10', NULL, 'BUY', 'CLOSED', '2023-04-18 04:04:24', '2023-04-18 04:11:36'),
(123, 31, 'deposit', NULL, 'deposit', '5000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-05-29 19:19:27', '2023-05-29 18:31:27'),
(122, 31, 'ADVANCED TRADE', 'Crypto', 'btc', '4000', '26699', '1049', '1049', '700', '700', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-05-26 19:29:53', '2023-05-26 19:29:53'),
(121, 38, 'ADVANCED TRADE', 'Crypto', 'algo', '176', '0.166543', '73975', '73975', '7', '7', '0', '23', NULL, 'BUY', 'CLOSED', '2023-05-15 15:24:06', '2023-05-15 15:24:06'),
(120, 12, 'Bonus', NULL, '+', '551.52', '551.52', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-04-27 15:30:15', '2023-04-27 15:30:15'),
(108, 37, 'ADVANCED TRADE', 'Crypto', 'doge', '58', '0.092964', '125', '125', '0.02', '0.02', '0', '52.2', NULL, 'BUY', 'CLOSED', '2023-04-18 15:20:01', '2023-04-19 10:05:17'),
(119, 41, 'ADVANCED TRADE', 'Crypto', 'btc', '123', '29308', '0', '0', '0', '0.02', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-04-19 16:59:13', '2023-04-19 16:59:13'),
(118, 41, 'ADVANCED TRADE', 'Crypto', 'axs', '122', '9.39', '0', '2599', '0', '20', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-04-18 20:46:52', '2023-04-18 20:46:52'),
(124, 31, 'deposit', NULL, 'deposit', '8000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'DECLINED', '2023-05-29 19:32:53', '2023-05-29 18:33:35'),
(125, 45, 'Deposit', NULL, '+', '201', '201', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-05-30 16:44:26', '2023-05-30 16:44:26'),
(126, 38, 'deposit', NULL, 'deposit', '5000', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-06-03 14:35:02', '2023-06-03 14:35:02'),
(127, 46, 'deposit', NULL, 'deposit', '1450', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-03 14:36:33', '2023-06-03 13:37:11'),
(128, 38, 'Subtract', NULL, '-', '508', '508', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-06-05 13:40:56', '2023-06-05 13:40:56'),
(129, 38, 'Deposit', NULL, '+', '1450', '1450', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-06-05 13:41:27', '2023-06-05 13:41:27'),
(130, 38, 'Deposit', NULL, '+', '3550', '3550', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-06-05 13:43:04', '2023-06-05 13:43:04'),
(131, 38, 'ADVANCED TRADE', 'Stocks', 'TSLA', '500', '213.97', '93', '93', '4', '4', '12', '0', NULL, 'BUY', 'ACTIVE', '2023-06-05 14:48:52', '2023-06-05 13:53:16'),
(132, 38, 'ADVANCED TRADE', 'Stocks', 'TSLA', '500', '213.97', '12', '12', '0.5', '0.5', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-06-05 16:12:05', '2023-06-05 16:12:05'),
(133, 38, 'deposit', NULL, 'usdt', '4095', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-06 14:39:15', '2023-06-06 13:41:01'),
(134, 38, 'deposit', NULL, 'btc', '1798', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-06 14:41:46', '2023-06-06 13:42:05'),
(135, 31, 'deposit', NULL, 'btc', '3011', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-06 14:43:31', '2023-06-06 13:43:45'),
(136, 31, 'deposit', NULL, 'usdt', '6788', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-06 14:53:31', '2023-06-06 13:53:48'),
(137, 31, 'deposit', NULL, 'btc', '176', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'UNCONFIRMED', '2023-06-06 15:04:31', '2023-06-06 15:04:31'),
(138, 46, 'deposit', NULL, 'usdt', '3500', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-06 17:12:32', '2023-06-06 16:54:29'),
(139, 46, 'Bonus', NULL, '+', '148.5', '148.5', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-06-06 16:56:40', '2023-06-06 16:56:40'),
(140, 46, 'ADVANCED TRADE', 'Stocks', 'AAPL', '500', '178.9501', '14', '14', '0.5', '0.5', '0', '14', NULL, 'BUY', 'CLOSED', '2023-06-06 19:39:25', '2023-06-08 16:00:52'),
(141, 46, 'ADVANCED TRADE', 'Stocks', 'AAPL', '919', '179.21', '15', '15', '0.3', '0.3', '0', '12.7', NULL, 'BUY', 'CLOSED', '2023-06-07 17:14:09', '2023-06-12 03:05:45'),
(142, 46, 'ADVANCED TRADE', 'Crypto', 'xmr', '919', '145.71', '19', '19', '0.3', '0.3', '3.9', '0', NULL, 'SELL', 'CLOSED', '2023-06-07 17:09:12', '2023-06-12 02:44:00'),
(143, 46, 'ADVANCED TRADE', 'Stocks', 'TSLA', '919', '221.31', '12', '12', '0.3', '0.3', '0', '9.8', NULL, 'BUY', 'CLOSED', '2023-06-07 17:41:51', '2023-06-08 20:11:59'),
(144, 46, 'ADVANCED TRADE', 'Crypto', 'sol', '919', '19.85', '46', '46', '0.1', '0.1', '5.3', '0', NULL, 'SELL', 'CLOSED', '2023-06-07 17:05:12', '2023-06-12 01:07:27'),
(145, 46, 'ADVANCED TRADE', 'Crypto', 'kcs', '900', '7.05', '128', '128', '0.1', '0.1', '0', '88.2', NULL, 'SELL', 'CLOSED', '2023-06-07 17:54:45', '2023-06-09 01:00:24'),
(146, 38, 'ADVANCED TRADE', 'Stocks', 'MSFT', '718', '333.68', '1635', '1635', '76', '76', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-06-07 18:14:46', '2023-06-07 18:14:46'),
(147, 38, 'ADVANCED TRADE', 'Stocks', 'MSFT', '134', '331.29', '2', '2', '0.44', '0.44', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-06-07 18:30:14', '2023-06-07 18:30:14'),
(148, 38, 'ADVANCED TRADE', 'Stocks', 'AMZN', '109', '127.12', '69', '69', '8', '8', '0', '0', NULL, 'BUY', 'ACTIVE', '2023-06-07 18:33:02', '2023-06-07 18:33:02'),
(149, 47, 'deposit', NULL, 'usdt', '189007', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-07 18:44:05', '2023-06-07 17:45:20'),
(150, 47, 'ADVANCED TRADE', 'Stocks', 'TSLA', '1989', '227.765', '786', '786', '9', '9', '654', '44', NULL, 'BUY', 'CLOSED', '2023-06-10 21:03:16', '2023-06-10 21:03:16'),
(151, 47, 'ADVANCED TRADE', 'Stocks', 'TSLA', '1876', '230.1', '73', '73', '0.9', '0.9', '0', '23', NULL, 'BUY', 'CLOSED', '2023-06-10 21:03:05', '2023-06-10 21:03:05'),
(152, 47, 'ADVANCED TRADE', 'Stocks', 'AAPL', '1233', '180.0754', '479', '479', '7', '7', '234', '0', NULL, 'BUY', 'CLOSED', '2023-06-08 03:25:12', '2023-06-08 03:25:12'),
(162, 47, 'ADVANCED TRADE', 'Forex', 'GBP/USD', '1283', '1.25705', '2041', '2041', '0.2', '0.2', '23', '89', '2023-06-11 19:05:14', 'BUY', 'CLOSED', '2023-06-11 23:30:47', '2023-06-11 23:30:47'),
(153, 40, 'ADVANCED TRADE', 'Crypto', 'btc', '100', '25680', '0', '8', '0', '200', '0', '333', '2023-06-10 16:41:10', 'BUY', 'CLOSED', '2023-06-10 22:07:09', '2023-06-10 22:07:09'),
(154, 47, 'ADVANCED TRADE', 'Stocks', 'MSFT', '5768', '326.79', '1059', '1059', '6', '6', '1058', '33', '2023-06-10 17:07:40', 'BUY', 'CLOSED', '2023-06-10 21:16:35', '2023-06-10 21:16:35'),
(155, 47, 'ADVANCED TRADE', 'Stocks', 'MSFT', '1345', '326.79', '247', '247', '6', '6', '246', '45', '2023-06-10 17:22:19', 'BUY', 'CLOSED', '2023-06-10 21:31:18', '2023-06-10 21:31:18'),
(156, 47, 'ADVANCED TRADE', 'Stocks', 'AAPL', '6773', '180.96', '749', '749', '2', '2', '0', '87', '2023-06-10 18:22:08', 'BUY', 'CLOSED', '2023-06-10 22:45:20', '2023-06-10 22:45:20'),
(157, 47, 'ADVANCED TRADE', 'Stocks', 'MSFT', '5443', '326.79', '1499', '1499', '9', '9', '1498', '2', '2023-06-11 12:38:13', 'BUY', 'CLOSED', '2023-06-11 16:35:53', '2023-06-11 16:35:53'),
(158, 47, 'ADVANCED TRADE', 'Stocks', 'MSFT', '6378', '326.79', '1561', '1561', '8', '8', '1560', '2', '2023-06-11 12:39:43', 'BUY', 'CLOSED', '2023-06-11 16:35:45', '2023-06-11 16:35:45'),
(159, 40, 'ADVANCED TRADE', 'Crypto', 'btc', '1000', '25767', '1561', '1561', '6', '6', '0', '8', '2023-06-11 16:34:28', 'BUY', 'CLOSED', '2023-06-11 22:01:00', '2023-06-11 22:01:00'),
(160, 40, 'ADVANCED TRADE', 'Stocks', 'MSFT', '100', '326.79', '18', '18', '6', '6', '0', '7', '2023-06-11 16:37:10', 'BUY', 'CLOSED', '2023-06-11 21:00:31', '2023-06-11 21:00:31'),
(161, 47, 'ADVANCED TRADE', 'Stocks', 'DOW', '6788', '51.74', '10496', '10496', '8', '8', '0', '78', '2023-06-11 16:54:09', 'BUY', 'CLOSED', '2023-06-11 20:55:44', '2023-06-11 20:55:44'),
(163, 47, 'ADVANCED TRADE', 'Stocks', 'SP500', '4556', '4298.86', '74', '74', '7', '7', '0', '99', '2023-06-11 19:23:21', 'BUY', 'CLOSED', '2023-06-11 23:26:21', '2023-06-11 23:26:21'),
(164, 40, 'ADVANCED TRADE', 'Stocks', 'MSFT', '100', '326.79', '18', '18', '6', '6', '88', '0', '2023-06-11 19:24:22', 'SELL', 'CLOSED', '2023-06-11 23:26:38', '2023-06-11 23:26:38'),
(165, 47, 'ADVANCED TRADE', 'Stocks', 'BABA', '6379', '85.5', '5969', '5969', '8', '8', '0', '78', '2023-06-11 20:12:40', 'BUY', 'CLOSED', '2023-06-11 23:51:00', '2023-06-11 23:51:00'),
(166, 40, 'ADVANCED TRADE', 'Stocks', 'MSFT', '100', '326.79', '18', '180', '6', '6', '0', '8', '2023-06-11 19:47:46', 'SELL', 'CLOSED', '2023-06-11 23:51:26', '2023-06-11 23:51:26'),
(167, 47, 'ADVANCED TRADE', 'Stocks', 'AMZN', '1888', '123.43', '1071', '1071', '7', '7', '0', '6', '2023-06-12 00:11:50', 'BUY', 'CLOSED', '2023-06-12 08:12:08', '2023-06-12 08:12:08'),
(168, 47, 'ADVANCED TRADE', 'Stocks', 'TSLA', '1555', '244.4', '127', '127', '2', '2', '0', '7', '2023-06-12 07:01:07', 'BUY', 'CLOSED', '2023-06-12 10:56:07', '2023-06-12 11:06:25'),
(169, 46, 'ADVANCED TRADE', 'Crypto', 'trx', '1500', '0.070243', '21354', '21354', '0.1', '0.1', '0', '33.8', '2023-06-13 10:28:46', 'SELL', 'CLOSED', '2023-06-12 14:28:46', '2023-06-13 12:04:42'),
(170, 46, 'ADVANCED TRADE', 'Crypto', 'kcs', '1500', '5.97', '251', '251', '0.1', '0.1', '0', '28.4', '2023-06-13 10:33:33', 'SELL', 'CLOSED', '2023-06-12 14:33:33', '2023-06-13 11:57:24'),
(175, 47, 'ADVANCED TRADE', 'Forex', 'GBP/USD', '1989', '1.249813', '1591', '1591', '0.1', '0.1', '0', '99', '2023-06-12 19:10:07', 'BUY', 'CLOSED', '2023-06-12 22:10:07', '2023-06-12 23:12:10'),
(171, 47, 'ADVANCED TRADE', 'Crypto', 'algo', '2333', '0.112714', '20698', '20698', '0.1', '0.1', '0', '8', '2023-06-12 12:34:46', 'BUY', 'CLOSED', '2023-06-12 16:29:46', '2023-06-12 16:50:53'),
(172, 47, 'ADVANCED TRADE', 'Crypto', 'ape', '1887', '2.3', '57430', '57430', '7', '7', '0', '8', '2023-06-14 12:43:30', 'BUY', 'CLOSED', '2023-06-12 16:43:30', '2023-06-12 16:51:06'),
(173, 47, 'ADVANCED TRADE', 'Crypto', 'apt', '1876', '6.31', '20811', '20811', '7', '7', '0', '8', '2023-06-13 12:44:09', 'BUY', 'CLOSED', '2023-06-12 16:44:09', '2023-06-12 16:51:13'),
(174, 47, 'ADVANCED TRADE', 'Crypto', 'algo', '1887', '0.112789', '16730', '16730', '0.1', '0.1', '0', '78', '2023-06-13 13:09:08', 'BUY', 'CLOSED', '2023-06-12 17:09:08', '2023-06-12 17:09:38'),
(176, 47, 'ADVANCED TRADE', 'Forex', 'USD/CHF', '1089', '0.910011', '95735', '95735', '8', '8', '0', '88', '2023-06-12 19:12:10', 'BUY', 'CLOSED', '2023-06-12 22:12:11', '2023-06-12 23:12:18'),
(177, 47, 'ADVANCED TRADE', 'Crypto', 'aave', '1828', '53.08', '689', '689', '2', '2', '0', '66', '2023-06-12 21:06:39', 'BUY', 'CLOSED', '2023-06-13 00:06:39', '2023-06-13 01:11:38'),
(178, 47, 'ADVANCED TRADE', 'Crypto', 'avax', '1171', '11.46', '2044', '2044', '2', '2', '21', '33', '2023-06-12 22:07:17', 'SELL', 'CLOSED', '2023-06-13 00:07:17', '2023-06-13 01:19:58'),
(179, 47, 'ADVANCED TRADE', 'Crypto', 'ape', '1333', '2.24', '11902', '11902', '2', '2', '0', '33', '2023-06-12 22:09:11', 'BUY', 'CLOSED', '2023-06-13 00:09:12', '2023-06-13 01:20:06'),
(180, 47, 'ADVANCED TRADE', 'Forex', 'USD/CAD', '9991', '1.3359', '74789', '74789', '1', '1', '0', '78', '2023-06-13 10:19:10', 'BUY', 'CLOSED', '2023-06-13 13:19:11', '2023-06-13 14:45:53'),
(181, 46, 'ADVANCED TRADE', 'Crypto', 'sol', '1500', '15.62', '96', '96', '0.1', '0.1', '0', '71.11', '2023-06-16 09:56:01', 'BUY', 'CLOSED', '2023-06-13 13:56:01', '2023-06-16 11:14:40'),
(182, 46, 'ADVANCED TRADE', 'Crypto', 'doge', '1500', '0.062022', '242', '242', '0.001', '0.001', '0', '31.8', '2023-06-16 10:27:19', 'BUY', 'CLOSED', '2023-06-13 14:27:19', '2023-06-16 08:28:07'),
(183, 47, 'ADVANCED TRADE', 'Crypto', 'aave', '1778', '54.79', '292', '292', '0.9', '0.9', '0', '53', '2023-06-16 12:05:21', 'BUY', 'CLOSED', '2023-06-13 16:05:21', '2023-06-13 20:50:10'),
(184, 46, 'ADVANCED TRADE', 'Crypto', 'shib', '2000', '7.21E-6', '277', '277', '0.0000001', '0.0000001', '0', '261.53', '2023-06-23 10:47:03', 'BUY', 'CLOSED', '2023-06-19 14:47:04', '2023-06-23 10:35:22'),
(185, 46, 'ADVANCED TRADE', 'Crypto', 'ltc', '2000', '77.18', '259', '259', '1', '1', '92.17', '0', '2023-06-23 10:50:43', 'SELL', 'CLOSED', '2023-06-19 14:50:44', '2023-06-22 15:25:46'),
(188, 46, 'ADVANCED TRADE', 'Crypto', 'shib', '2000', '8.03E-6', '498', '498', '0.0000002', '0.0000002', '0', '102.8', '2023-06-23 14:14:14', 'BUY', 'CLOSED', '2023-06-22 18:14:14', '2023-06-23 16:05:31'),
(186, 12, 'ADVANCED TRADE', 'Crypto', 'shib', '700', '7.17E-6', '195', '195', '0.0000002', '0.0000002', '0', '191.85', '2023-07-20 11:45:54', 'SELL', 'CLOSED', '2023-06-20 15:45:54', '2023-07-20 18:38:48'),
(187, 12, 'ADVANCED TRADE', 'Crypto', 'ltc', '700', '77.09', '182', '182', '2', '2', '0', '178.53', '2023-07-20 11:48:53', 'SELL', 'CLOSED', '2023-06-20 15:48:54', '2023-07-20 17:44:37'),
(189, 46, 'ADVANCED TRADE', 'Crypto', 'eth', '2000', '1877.48', '213', '213', '20', '20', '0', '119.87', '2023-07-04 08:57:53', 'BUY', 'CLOSED', '2023-06-27 12:57:53', '2023-07-03 12:48:47'),
(190, 46, 'ADVANCED TRADE', 'Crypto', 'eth', '1500', '1876.1', '128', '128', '16', '16', '0', '52.18', '2023-07-04 09:04:44', 'BUY', 'CLOSED', '2023-06-27 13:04:44', '2023-07-03 12:50:12'),
(191, 46, 'deposit', NULL, 'usdt', '4950', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-29 21:16:15', '2023-06-29 20:22:04'),
(192, 46, 'ADVANCED TRADE', 'Crypto', 'bch', '5000', '300.51', '1664', '1664', '10', '10', '0', '52.8', '2023-08-30 08:45:19', 'BUY', 'CLOSED', '2023-06-30 12:45:20', '2023-08-10 23:00:00'),
(193, 46, 'deposit', NULL, 'usdt', '2050', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-06-30 21:16:49', '2023-07-03 11:46:13'),
(194, 46, 'ADVANCED TRADE', 'Forex', 'GBP/USD', '3500', '1.270696', '826', '826', '0.006', '0.006', '0', '507.52', '2023-08-05 13:36:58', 'BUY', 'CLOSED', '2023-07-05 17:37:15', '2023-08-05 01:14:36'),
(195, 46, 'ADVANCED TRADE', 'Crypto', 'bch', '3500', '262.07', '801', '801', '1.2', '1.2', '0', '529.73', '2023-08-05 13:40:45', 'BUY', 'CLOSED', '2023-07-05 17:40:45', '2023-08-04 16:14:06'),
(196, 49, 'Deposit', NULL, '+', '9500', '9500', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-19 10:48:57', '2023-07-19 10:48:57'),
(197, 48, 'Deposit', NULL, '+', '11293', '11293', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-20 22:09:05', '2023-07-20 22:09:05'),
(198, 50, 'Deposit', NULL, '+', '11293.17', '11293.17', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-21 00:32:29', '2023-07-21 00:32:29'),
(199, 12, 'ADVANCED TRADE', 'Crypto', 'xrp', '2000', '0.77788', '514', '514', '0.02', '0.02', '0', '311', '2023-10-21 13:41:54', 'BUY', 'ACTIVE', '2023-07-21 17:41:55', '2023-09-04 16:57:44'),
(200, 52, 'Deposit', NULL, '+', '329098.83', '329098.83', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-25 17:54:00', '2023-07-25 17:54:00'),
(201, 53, 'Deposit', NULL, '+', '112092.94', '112092.94', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-25 17:58:31', '2023-07-25 17:58:31'),
(202, 54, 'Locked', NULL, '+', '112092.94', '112092.94', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-07-25 18:04:12', '2023-07-25 18:04:12'),
(203, 54, 'deposit', NULL, 'btc', '2241.8588', NULL, NULL, NULL, NULL, NULL, 'deposit', 'deposit', NULL, 'deposit', 'CONFIRMED', '2023-07-26 00:49:49', '2023-07-26 00:23:54'),
(204, 54, 'DEBIT_FCA_65278_BX580', NULL, '-', '114334.80', '114334.80', 'topUp', 'topUp', NULL, NULL, 'topUp', 'topUp', NULL, 'topUp', 'topUp', '2023-08-14 17:07:55', '2023-08-08 17:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(191) NOT NULL,
  `currency` varchar(191) NOT NULL DEFAULT '$',
  `dob` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `acct_type` varchar(191) NOT NULL,
  `balance` decimal(50,2) NOT NULL DEFAULT 0.00,
  `close_trade` tinyint(1) NOT NULL DEFAULT 0,
  `verify_proof` tinyint(1) NOT NULL DEFAULT 0,
  `poa` varchar(191) DEFAULT NULL,
  `poi` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `pass` varchar(191) NOT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `manager_id` varchar(191) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `phone`, `country`, `approved`, `email`, `currency`, `dob`, `city`, `address`, `acct_type`, `balance`, `close_trade`, `verify_proof`, `poa`, `poi`, `email_verified_at`, `password`, `pass`, `last_seen`, `remember_token`, `created_at`, `updated_at`, `manager_id`) VALUES
(1, 'Admin Account', 'Admin', 'Account', '0702983211', 'UK', 1, 'support@tradenationlive.com', '$', NULL, NULL, NULL, 'admin_type', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'password', '2023-09-08 13:18:25', 'j2ChlCLKuExn2aaWtSqFQRUyfsiS6ZgDhBYM74dS3pzu603ADQlL8Vn5Wo8k', '2023-01-25 20:49:43', '2023-09-08 13:18:25', NULL),
(2, 'Test Account', 'Test', 'Account', '0702983211', 'UK', 1, 'officialescrow247@gmail.com', '$', NULL, NULL, NULL, '1', 220433.00, 0, 0, NULL, NULL, NULL, '$2y$10$t4l4DjykNLHPqNPgp8d48en8T7CK0U/z7dgH4YglDQT81BL19Ar2K', '1010101010', '2023-04-11 10:22:24', 'y315FUVDVawIGhmufQQnItqywkmxFasWIZG3GPsrjQaWcmAc1iVIsmfVxxy5', '2023-01-25 20:49:43', '2023-06-25 20:39:16', NULL),
(28, 'Damien Queen', 'Damien', 'Queen', '+353899481348', 'Ireland', 0, 'damienqueen@gmail.com', '€', NULL, '-', '-', '1', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$GijxO.340KqnMAWg6Ka7G.DzBbwLgbPBwrh59YSMOTFCOlF8V/1wO', 'Damien123@', NULL, NULL, '2023-03-13 23:41:19', '2023-03-13 23:41:19', '1'),
(14, 'James Hyland', 'James', 'Hyland', '+44 7405 881434', 'United Kingdom', 1, 'hylandjim1967@gmail.com', '£', NULL, '-', '-', '1', 10000.00, 0, 0, NULL, NULL, NULL, '$2y$10$jd2SNUV/USHIRRni0MpH1.a4rSJR.jX/ipiF58L6wwQpG.zTrT.6O', 'James123', '2023-02-01 15:19:44', NULL, '2023-02-01 14:53:32', '2023-02-01 15:19:44', NULL),
(16, 'Emmanuel Oppong', 'Emmanuel', 'Oppong', '+1 (780) 863-4489', 'Canada', 0, 'emmakobi@hotmail.com', '$', NULL, 'Edmonton, AB', '-', '1', 135000.00, 0, 0, NULL, NULL, NULL, '$2y$10$16DsWxrTxW6wTq9LCVQ7eef5B6V6/ATvuEaq6yWB0/MxvczvsBLli', 'Twenewaah247', '2023-02-03 13:50:15', NULL, '2023-02-01 15:23:33', '2023-02-03 13:50:15', NULL),
(12, 'Renford Smith', 'Renford', 'Smith', '447956302464', 'United Kingdom', 1, 'renford01@yahoo.co.uk', '£', '1953-04-27', 'Walsall', '20 Brook lane', '1', 4370.70, 0, 0, NULL, NULL, NULL, '$2y$10$YI0b/iWy5Ca6d03Is8FYf.GNKCBFn0TKaDB0AZ3kZqppjZhoidD42', 'Bingo1023', '2023-09-05 15:54:37', 'OwtxITkxYKs0YYVXgtDESr9x0nEbYBV7srMoPWjOYMZYOxQLO0JmsN6Q38Bx', '2023-01-30 22:54:39', '2023-09-05 15:54:37', NULL),
(32, 'Elena Lind', 'Elena', 'Lind', '358407430064', 'Finland', 1, 'lindjoy777@gmail.com', '€', NULL, NULL, NULL, '1', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$Z30VZl.bG.vWbW1qaMiV/ODHL0tgiwbofiViSnDtkMJK.jaxd5llG', 'Abc12345', NULL, NULL, '2023-03-17 18:13:14', '2023-03-17 18:13:14', '24'),
(24, 'Steve - Manager', 'Steve', '- Manager', '2019202', '-', 1, 'jd05682@gmail.com', '$', '2023-03-07 11:37:29', '-', '-', 'Manager', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$aa4e0D9z/B9.dcw8XPF86ODZSZzrFMJa/jLWKezhARJS2gRNXljg2', 'Mark1234', '2023-06-07 15:45:02', 'ZYyNlYbVfVYNQ8y5j0mq1rZ6SBynIoWs1Qm7os3qvlQ7mRyeuh6KrQtuv563', '2023-03-07 16:37:29', '2023-06-25 20:44:04', '1'),
(31, 'Regina Ntima', 'Regina', 'Ntima', '+ 821058604139', 'South Korea', 1, 'reginantima98@gmail.com', '$', '2023-03-16', '-', '-', '2', 285837.00, 0, 1, 'uploads/proofs/CzEvjzq9H1LS0hBj4p5pT6NLatmVHHrxQkN3nrd5.jpg', 'uploads/proofs/wjnpUd3Mpg8pdId6wWGVAc5fxqLCN28xow2vK3xY.jpg', NULL, '$2y$10$SwqE/8hyC1gWVkT7AI3eNOaeHfQG8j0ZJXSSyOeF/lgpv/.xc.sBC', 'Regina123', '2023-06-06 14:15:10', NULL, '2023-03-17 02:39:25', '2023-06-06 14:15:10', '24'),
(34, 'Christine Thabet', 'Christine', 'Thabet', '447990978770', 'United Kingdom', 1, 'ChristineThabet@aol.com', '$', NULL, NULL, NULL, '1', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$FSi7ZkB3OWic4TdQBM13TedsaoeOrrBpOtYjtchjhP9I40/JprWQ.', 'Abc12345', NULL, NULL, '2023-03-17 20:36:35', '2023-03-17 20:36:35', '24'),
(35, 'Zoe Mc henry', 'Zoe', 'Mc henry', '447761513915', 'United Kingdom', 1, 'zoehosker1984@gmail.com', '£', NULL, '-', '-', '1', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$iPpHtYxW4d.e0u488UIJeOyfFKRdyl64xYPgWU9DN/pKJlTFjxKr2', 'Abc12345', NULL, NULL, '2023-03-17 23:33:55', '2023-03-17 23:44:04', '24'),
(37, 'Paul Kinsella', 'Paul', 'Kinsella', '+353872591642', 'Ireland', 0, 'paulkinsellaplumbing@gmail.com', '£', '1962-08-14', 'Gorey', 'Woodbrook Macoyle', '1', 379.20, 0, 1, 'uploads/proofs/i1YMi4pQB0PDqZ2jWnHVW5qjzbu9ZpYPuU0aIthz.jpg', 'uploads/proofs/mLZPwY95fP9k0WEfDtCAVMFSILd7FZmbU2q6OrI1.jpg', NULL, '$2y$10$2m8TpISMxP5/sclGmJlWX.vLKyPnwKXgcto0SyhhhcLnUGE3dcocG', 'j1t2nc3P@', '2023-04-21 20:38:43', 'tPpZkdR3pxx36B4cAcCwNIhVxNEBCHRjvObYQDPRXkcCVcy4NVDCATRsQHJt', '2023-04-12 10:12:44', '2023-04-21 20:41:43', '1'),
(36, 'Eigil Larsen', 'Eigil', 'Larsen', '+4551400072', 'Denmark', 0, 'aksoe@pc.dk', '£', '1941-08-03', 'Helsinge', 'Frederiksværkvej. 154', '1', 185000.00, 0, 1, 'uploads/proofs/Ap0cvZnNkBrsqULMgsZ477o73bwiga4ehvxsZCu9.pdf', 'uploads/proofs/SaUI2TGe6SKqftcoYZRzQ1f2Ibw4P2wsmfryVAZu.png', NULL, '$2y$10$l2omKr/XIczNl6FwpzjR2eLjaiSJOdMxFzdEilA/sjMj3F3i7diMa', 'TaLi456De.', '2023-04-03 16:54:54', '0CP1y9lTx9r1y6YkT6tZjyg5JgHdcZBLOd3V6lih5pVJlAP2Qx1GdmSdiQg5', '2023-03-30 15:07:35', '2023-04-03 16:56:15', '1'),
(40, 'test test2', 'test', 'test2', '181818181818', 'Afghanistan', 1, 'test@test.com', '€', '2020-06-10', 'udhuhd', 'no nowndnjnd', '1', 5960.00, 1, 0, NULL, NULL, NULL, '$2y$10$cXcOVS3KPfdq8sMWTskJDeMzKaCWmmYF/XnjjELpHYNE4A7WceFgO', '11111111', '2023-08-16 17:48:39', NULL, '2023-04-13 16:16:34', '2023-08-16 17:48:39', '1'),
(47, 'SEC SEC', 'SEC', 'SEC', '0987654345', 'Algeria', 1, 'kntgroup.co@gmail.com', '£', '2023-06-08', '-', '-', '2', 189918.00, 0, 0, 'uploads/proofs/AyeXp3U82bPRdx9TL0UL3lpWkNIetntGxKaxYgJD.jpg', 'uploads/proofs/uxa2rNJz6PnluVwhxNCi0tFSSRQX4dQdKAJUkBgL.jpg', NULL, '$2y$10$yVQRqJnUiQ6b1pWLs23kOexZVbwRsnkhyVx80p0uW8EI083UQ9nhi', 'SEC334455', '2023-08-22 04:40:27', NULL, '2023-06-07 17:43:27', '2023-08-22 04:40:27', '1'),
(44, 'Bernard Savi - Manager', 'Bernard Savi', '- Manager', '2019202', '-', 1, 'bensavi68@gmail.com', '$', '2023-05-30 07:52:10', '-', '-', 'Manager', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$TB2eSfoLmRiXt94Srs1yX.ZMn/hRG/Jyroev/kYcvvRXQHWOxXQbu', 'Bernard123', '2023-07-26 03:01:48', NULL, '2023-05-30 11:52:10', '2023-07-26 03:01:48', '1'),
(46, 'Zanazose Felicia Uwimana', 'Zanazose Felicia', 'Uwimana', '+358451090919', 'Finland', 0, 'fzanazose@gmail.com', '€', '1970-07-28', 'Espoo', 'Sinitiaisenpolku 4A5, 02660 Espoo', '2', 13910.82, 0, 1, 'uploads/proofs/AdEp8saN3zT3BRYqrFLVkAtil1lyEunU5lPYjfXL.jpg', 'uploads/proofs/m9ei10ILybrjlc8Ht6VnsX4llPJ8CiC89bShnEk8.jpg', NULL, '$2y$10$fblmqRyw5pSIJVISEHpaFOvdDJGVJ7qT4mmnPRIWpOsBRWhMqfFf.', 'Mesfils55', '2023-09-05 19:03:51', NULL, '2023-06-03 13:30:53', '2023-09-08 13:18:00', '1'),
(45, 'Alan Jeffery', 'Alan', 'Jeffery', '+358405542764', 'Ireland', 0, 'alan.jeffery26@gmail.com', '$', '2023-05-06', '-', '-', '1', 201.00, 0, 0, NULL, NULL, NULL, '$2y$10$f79RnHKRr4AbdSlgRBD.0Owzuk.hsodXILFyUm0dxtTkfxKSp.mWW', 'Alan133@', NULL, NULL, '2023-05-30 16:43:09', '2023-06-03 13:02:36', '1'),
(51, 'Raymond Butera', 'Raymond', 'Butera', '+358465751586', 'Finland', 0, 'buteeraray@gmail.com', '€', NULL, '-', '-', '1', 0.00, 0, 0, NULL, NULL, NULL, '$2y$10$JXbpkYaXdgtEjtG.roLDme6S.a5jtFDc/9Y2tnnwV9XokPg5rHHpO', 'Raymond1234@', NULL, NULL, '2023-07-25 11:12:12', '2023-07-26 17:50:00', '1'),
(49, 'Davorin Mejal', 'Davorin', 'Mejal', '38641735608', 'Slovenia', 1, 'davorin.mejal@t-2.si', '$', NULL, '-', '-', '1', 9500.00, 0, 0, NULL, NULL, NULL, '$2y$10$fOgtTpIX1ALEMhndtG1XCOdczu7D/E6B5YIMpvYLV6xq0NkDZ28xq', 'Davorin1123', NULL, NULL, '2023-07-19 10:44:18', '2023-07-19 10:48:57', '44'),
(50, 'Lyne Normandeau', 'Lyne', 'Normandeau', '15142497678', 'Canada', 0, 'lnormandeau@hotmail.com', '£', '1967-07-10', 'Mirabel', '16650, Rue De L’Esplanade', '1', 11293.17, 0, 0, NULL, NULL, NULL, '$2y$10$/YN6W7Hb7hVEnTCQA38QFOrlFs5pBIkEq4U8EAzy011SeoNx/I6V2', 'Piscine2023$$', '2023-07-21 00:41:20', NULL, '2023-07-21 00:31:47', '2023-07-21 02:05:32', '1'),
(54, 'Adolphus Sowemimo', 'Adolphus', 'Sowemimo', '12042919344', 'Canada', 0, 'sowems@mymts.net', '$', NULL, 'Winnipeg', NULL, '1', 0.00, 0, 1, 'uploads/proofs/ps6jKA9MHlvg2zDphVnSJSLZVigSUghFOSteOJVY.jpg', 'uploads/proofs/hJiXvvoLlRzC8Ge0J6AHHigau6YIIKxZOzxesuiW.jpg', NULL, '$2y$10$BzAiorCOX0vFJyFZGcXQOulukFgjOTvHzlEUSTgaT0LN.dVzVBBRS', 'Adolphus1234', '2023-08-14 17:09:38', 'CIg4yPzYL9RWGUu9gBigjdGYIyzsj5C3RVILuajd5R9l83Vx4EzEChjenPj5', '2023-07-25 18:02:49', '2023-08-14 19:00:48', '1');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_amount` decimal(20,7) DEFAULT NULL,
  `wallet_address` text DEFAULT NULL,
  `wallet_type` varchar(191) DEFAULT NULL,
  `wireT_amount` decimal(20,7) DEFAULT NULL,
  `wireT_acct_name` varchar(191) DEFAULT NULL,
  `wireT_acct_num` varchar(191) DEFAULT NULL,
  `wireT_IBAN` varchar(191) DEFAULT NULL,
  `wireT_bank_name` varchar(191) DEFAULT NULL,
  `wireT_country` varchar(191) DEFAULT NULL,
  `wireT_swift_code` varchar(191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `wallet_amount`, `wallet_address`, `wallet_type`, `wireT_amount`, `wireT_acct_name`, `wireT_acct_num`, `wireT_IBAN`, `wireT_bank_name`, `wireT_country`, `wireT_swift_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 7567.0000000, 'N VHGCXFXFGCVHJKLM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-25 21:49:49', '2023-01-25 21:50:02'),
(2, 3, 7567.0000000, 'N VHGCXFXFGCVHJKLM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-30 18:40:14', '2023-01-30 18:40:38'),
(3, 3, NULL, NULL, NULL, 8876.0000000, 'dc c', '34433434', '34546', 'vcbxbv', 'Afghanistan', 'cxvvzv', 1, '2023-01-30 18:41:57', '2023-01-30 18:42:25'),
(4, 22, 678.0000000, 'jhgfdszxcvghjkmnbvcfghn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-03-07 00:54:55', '2023-03-07 00:54:55'),
(5, 25, 2500.0000000, 'dfbnmhgnbfcvxcbxnm,gmfgdghgnm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-03-07 16:52:11', '2023-03-07 16:53:13'),
(6, 40, 10.0000000, '9id93jifhun1jnkfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-04-14 16:09:36', '2023-04-14 16:09:36'),
(7, 41, 10.0000000, '9id93jifhun1jnkfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-04-18 02:58:38', '2023-04-18 02:58:38'),
(8, 37, 64.0000000, '162FRKuGbNYbezvrD3cqwQPEVKxPn9bqxg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-04-21 19:51:20', '2023-04-21 20:32:15'),
(9, 37, 250.0000000, '162FRKuGbNYbezvrD3cqwQPEVKxPn9bqxg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-04-21 20:14:21', '2023-04-21 20:32:07'),
(10, 31, 7567.0000000, 'N VHGCXFXFGCVHJKLM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-05-25 10:05:51', '2023-06-06 22:26:41'),
(11, 47, 765.0000000, 'hgfvdrswe6r7890oplnbkvjchxgzf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-06-09 16:21:30', '2023-06-10 14:03:47'),
(12, 46, 10000.0000000, 'TQb8C2RQAWatfEi73tJPSZdBSppabTQgrJ', 'USDT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-08-14 18:36:51', '2023-08-16 17:25:16'),
(13, 46, 477.5000000, 'TQb8C2RQAWatfEi73tJPSZdBSppabTQgrJ', 'USDT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-08-17 12:17:22', '2023-08-22 19:40:41'),
(14, 47, 8778.0000000, 'ghicojkpoisxbhsvcbijpxkhquchgiihcoihi', 'USDT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-08-17 18:17:34', '2023-08-17 18:18:07'),
(15, 47, 9999.0000000, 'ghicojkpoisxbhsvcbijpxkhquchgiihcoihi', 'XMR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-08-17 23:29:47', '2023-08-17 23:30:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptos`
--
ALTER TABLE `cryptos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `cryptos`
--
ALTER TABLE `cryptos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
