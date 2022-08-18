-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table larabuilder.activity_logs
CREATE TABLE IF NOT EXISTS `activity_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `related_to` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` bigint(20) DEFAULT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.activity_logs: ~0 rows (approximately)
/*!40000 ALTER TABLE `activity_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_logs` ENABLE KEYS */;

-- Dumping structure for table larabuilder.cm_email_subscribers
CREATE TABLE IF NOT EXISTS `cm_email_subscribers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.cm_email_subscribers: ~0 rows (approximately)
/*!40000 ALTER TABLE `cm_email_subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_email_subscribers` ENABLE KEYS */;

-- Dumping structure for table larabuilder.cm_faqs
CREATE TABLE IF NOT EXISTS `cm_faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.cm_faqs: ~0 rows (approximately)
/*!40000 ALTER TABLE `cm_faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cm_faqs` ENABLE KEYS */;

-- Dumping structure for table larabuilder.cm_features
CREATE TABLE IF NOT EXISTS `cm_features` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.cm_features: ~4 rows (approximately)
/*!40000 ALTER TABLE `cm_features` DISABLE KEYS */;
INSERT INTO `cm_features` (`id`, `icon`, `title`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'icon icon-Life-Safer', 'Website Builder', 'Manage website directly from your browser', NULL, NULL),
	(2, 'icon icon-Duplicate-Window', 'Emails reminder', 'Get remiders before your subscription ends', NULL, NULL),
	(3, 'icon icon-Fingerprint', 'Support', 'Real time Chat with staffs, customers and private groups', NULL, NULL),
	(4, 'icon icon-Pantone', 'Online Payments', 'Accept Online Payments from different providers', NULL, NULL);
/*!40000 ALTER TABLE `cm_features` ENABLE KEYS */;

-- Dumping structure for table larabuilder.companies
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_to` date NOT NULL,
  `last_email` date DEFAULT NULL,
  `websites_limit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inventory_module` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurring_transaction` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_payment` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.companies: ~2 rows (approximately)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` (`id`, `business_name`, `status`, `package_id`, `package_type`, `membership_type`, `valid_to`, `last_email`, `websites_limit`, `inventory_module`, `recurring_transaction`, `online_payment`, `created_at`, `updated_at`) VALUES
	(1, 'للل', 1, 1, 'monthly', 'trial', '2022-06-01', NULL, '3', NULL, 'No', 'No', '2022-05-25 11:41:05', '2022-05-25 11:41:05'),
	(2, 'للل', 1, 1, 'monthly', 'trial', '2022-06-01', NULL, '3', NULL, 'No', 'No', '2022-05-25 11:41:32', '2022-05-25 11:41:32');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Dumping structure for table larabuilder.company_email_template
CREATE TABLE IF NOT EXISTS `company_email_template` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.company_email_template: ~0 rows (approximately)
/*!40000 ALTER TABLE `company_email_template` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_email_template` ENABLE KEYS */;

-- Dumping structure for table larabuilder.company_settings
CREATE TABLE IF NOT EXISTS `company_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.company_settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `company_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_settings` ENABLE KEYS */;

-- Dumping structure for table larabuilder.currency_rates
CREATE TABLE IF NOT EXISTS `currency_rates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(10,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.currency_rates: ~168 rows (approximately)
/*!40000 ALTER TABLE `currency_rates` DISABLE KEYS */;
INSERT INTO `currency_rates` (`id`, `currency`, `rate`, `created_at`, `updated_at`) VALUES
	(1, 'AED', 4.101083, NULL, NULL),
	(2, 'AFN', 85.378309, NULL, NULL),
	(3, 'ALL', 123.510844, NULL, NULL),
	(4, 'AMD', 548.849773, NULL, NULL),
	(5, 'ANG', 2.008050, NULL, NULL),
	(6, 'AOA', 556.155120, NULL, NULL),
	(7, 'ARS', 70.205746, NULL, NULL),
	(8, 'AUD', 1.809050, NULL, NULL),
	(9, 'AWG', 2.009782, NULL, NULL),
	(10, 'AZN', 1.833159, NULL, NULL),
	(11, 'BAM', 1.966840, NULL, NULL),
	(12, 'BBD', 2.245460, NULL, NULL),
	(13, 'BDT', 95.162306, NULL, NULL),
	(14, 'BGN', 1.952383, NULL, NULL),
	(15, 'BHD', 0.421787, NULL, NULL),
	(16, 'BIF', 2117.865003, NULL, NULL),
	(17, 'BMD', 1.116545, NULL, NULL),
	(18, 'BND', 1.583270, NULL, NULL),
	(19, 'BOB', 7.718004, NULL, NULL),
	(20, 'BRL', 5.425949, NULL, NULL),
	(21, 'BSD', 1.121775, NULL, NULL),
	(22, 'BTC', 0.000244, NULL, NULL),
	(23, 'BTN', 82.818317, NULL, NULL),
	(24, 'BWP', 12.683055, NULL, NULL),
	(25, 'BYN', 2.621037, NULL, NULL),
	(26, 'BYR', 9999.999999, NULL, NULL),
	(27, 'BZD', 2.261248, NULL, NULL),
	(28, 'CAD', 1.552879, NULL, NULL),
	(29, 'CDF', 1898.127343, NULL, NULL),
	(30, 'CHF', 1.056023, NULL, NULL),
	(31, 'CLF', 0.033950, NULL, NULL),
	(32, 'CLP', 936.781769, NULL, NULL),
	(33, 'CNY', 7.827878, NULL, NULL),
	(34, 'COP', 4491.872864, NULL, NULL),
	(35, 'CRC', 635.520417, NULL, NULL),
	(36, 'CUC', 1.116545, NULL, NULL),
	(37, 'CUP', 29.588450, NULL, NULL),
	(38, 'CVE', 110.887227, NULL, NULL),
	(39, 'CZK', 26.906059, NULL, NULL),
	(40, 'DJF', 198.432393, NULL, NULL),
	(41, 'DKK', 7.472892, NULL, NULL),
	(42, 'DOP', 60.196240, NULL, NULL),
	(43, 'DZD', 134.499489, NULL, NULL),
	(44, 'EGP', 17.585483, NULL, NULL),
	(45, 'ERN', 16.748349, NULL, NULL),
	(46, 'ETB', 36.696587, NULL, NULL),
	(47, 'EUR', 1.000000, NULL, NULL),
	(48, 'FJD', 2.549240, NULL, NULL),
	(49, 'FKP', 0.908257, NULL, NULL),
	(50, 'GBP', 0.907964, NULL, NULL),
	(51, 'GEL', 3.115301, NULL, NULL),
	(52, 'GGP', 0.908257, NULL, NULL),
	(53, 'GHS', 6.220337, NULL, NULL),
	(54, 'GIP', 0.908257, NULL, NULL),
	(55, 'GMD', 56.605069, NULL, NULL),
	(56, 'GNF', 9999.999999, NULL, NULL),
	(57, 'GTQ', 8.576324, NULL, NULL),
	(58, 'GYD', 234.489495, NULL, NULL),
	(59, 'HKD', 8.674753, NULL, NULL),
	(60, 'HNL', 27.678062, NULL, NULL),
	(61, 'HRK', 7.590196, NULL, NULL),
	(62, 'HTG', 106.356510, NULL, NULL),
	(63, 'HUF', 341.150311, NULL, NULL),
	(64, 'IDR', 9999.999999, NULL, NULL),
	(65, 'ILS', 4.159226, NULL, NULL),
	(66, 'IMP', 0.908257, NULL, NULL),
	(67, 'INR', 82.763894, NULL, NULL),
	(68, 'IQD', 1339.198712, NULL, NULL),
	(69, 'IRR', 9999.999999, NULL, NULL),
	(70, 'ISK', 151.202539, NULL, NULL),
	(71, 'JEP', 0.908257, NULL, NULL),
	(72, 'JMD', 151.606351, NULL, NULL),
	(73, 'JOD', 0.791685, NULL, NULL),
	(74, 'JPY', 118.278988, NULL, NULL),
	(75, 'KES', 115.283224, NULL, NULL),
	(76, 'KGS', 81.395812, NULL, NULL),
	(77, 'KHR', 4603.144194, NULL, NULL),
	(78, 'KMF', 495.355724, NULL, NULL),
	(79, 'KPW', 1004.922902, NULL, NULL),
	(80, 'KRW', 1372.190164, NULL, NULL),
	(81, 'KWD', 0.344879, NULL, NULL),
	(82, 'KYD', 0.934921, NULL, NULL),
	(83, 'KZT', 456.318281, NULL, NULL),
	(84, 'LAK', 9978.233671, NULL, NULL),
	(85, 'LBP', 1696.373291, NULL, NULL),
	(86, 'LKR', 206.967335, NULL, NULL),
	(87, 'LRD', 221.076044, NULL, NULL),
	(88, 'LSL', 18.121543, NULL, NULL),
	(89, 'LTL', 3.296868, NULL, NULL),
	(90, 'LVL', 0.675387, NULL, NULL),
	(91, 'LYD', 1.557311, NULL, NULL),
	(92, 'MAD', 10.730569, NULL, NULL),
	(93, 'MDL', 19.734707, NULL, NULL),
	(94, 'MGA', 4165.265277, NULL, NULL),
	(95, 'MKD', 61.516342, NULL, NULL),
	(96, 'MMK', 1566.586511, NULL, NULL),
	(97, 'MNT', 3088.650418, NULL, NULL),
	(98, 'MOP', 8.975925, NULL, NULL),
	(99, 'MRO', 398.607011, NULL, NULL),
	(100, 'MUR', 43.205754, NULL, NULL),
	(101, 'MVR', 17.250725, NULL, NULL),
	(102, 'MWK', 825.239292, NULL, NULL),
	(103, 'MXN', 24.963329, NULL, NULL),
	(104, 'MYR', 4.810633, NULL, NULL),
	(105, 'MZN', 73.591410, NULL, NULL),
	(106, 'NAD', 18.121621, NULL, NULL),
	(107, 'NGN', 408.099790, NULL, NULL),
	(108, 'NIO', 37.844015, NULL, NULL),
	(109, 'NOK', 11.405599, NULL, NULL),
	(110, 'NPR', 132.508354, NULL, NULL),
	(111, 'NZD', 1.847363, NULL, NULL),
	(112, 'OMR', 0.429801, NULL, NULL),
	(113, 'PAB', 1.121880, NULL, NULL),
	(114, 'PEN', 3.958258, NULL, NULL),
	(115, 'PGK', 3.838505, NULL, NULL),
	(116, 'PHP', 57.698037, NULL, NULL),
	(117, 'PKR', 176.121721, NULL, NULL),
	(118, 'PLN', 4.386058, NULL, NULL),
	(119, 'PYG', 7386.917924, NULL, NULL),
	(120, 'QAR', 4.065302, NULL, NULL),
	(121, 'RON', 4.826717, NULL, NULL),
	(122, 'RSD', 117.627735, NULL, NULL),
	(123, 'RUB', 83.568390, NULL, NULL),
	(124, 'RWF', 1067.822267, NULL, NULL),
	(125, 'SAR', 4.190432, NULL, NULL),
	(126, 'SBD', 9.235251, NULL, NULL),
	(127, 'SCR', 14.529548, NULL, NULL),
	(128, 'SDG', 61.772847, NULL, NULL),
	(129, 'SEK', 10.785247, NULL, NULL),
	(130, 'SGD', 1.587844, NULL, NULL),
	(131, 'SHP', 0.908257, NULL, NULL),
	(132, 'SLL', 9999.999999, NULL, NULL),
	(133, 'SOS', 653.732410, NULL, NULL),
	(134, 'SRD', 8.327212, NULL, NULL),
	(135, 'STD', 9999.999999, NULL, NULL),
	(136, 'SVC', 9.816821, NULL, NULL),
	(137, 'SYP', 575.019506, NULL, NULL),
	(138, 'SZL', 18.038821, NULL, NULL),
	(139, 'THB', 35.884679, NULL, NULL),
	(140, 'TJS', 10.875343, NULL, NULL),
	(141, 'TMT', 3.907909, NULL, NULL),
	(142, 'TND', 3.186636, NULL, NULL),
	(143, 'TOP', 2.635661, NULL, NULL),
	(144, 'TRY', 7.131927, NULL, NULL),
	(145, 'TTD', 7.585158, NULL, NULL),
	(146, 'TWD', 33.739208, NULL, NULL),
	(147, 'TZS', 2582.397529, NULL, NULL),
	(148, 'UAH', 29.335146, NULL, NULL),
	(149, 'UGX', 4169.685347, NULL, NULL),
	(150, 'USD', 1.116545, NULL, NULL),
	(151, 'UYU', 48.718630, NULL, NULL),
	(152, 'UZS', 9999.999999, NULL, NULL),
	(153, 'VEF', 11.151499, NULL, NULL),
	(154, 'VND', 9999.999999, NULL, NULL),
	(155, 'VUV', 133.944917, NULL, NULL),
	(156, 'WST', 3.074259, NULL, NULL),
	(157, 'XAF', 659.652615, NULL, NULL),
	(158, 'XAG', 0.088073, NULL, NULL),
	(159, 'XAU', 0.000756, NULL, NULL),
	(160, 'XCD', 3.017519, NULL, NULL),
	(161, 'XDR', 0.809234, NULL, NULL),
	(162, 'XOF', 659.646672, NULL, NULL),
	(163, 'XPF', 119.931356, NULL, NULL),
	(164, 'YER', 279.475009, NULL, NULL),
	(165, 'ZAR', 18.603040, NULL, NULL),
	(166, 'ZMK', 9999.999999, NULL, NULL),
	(167, 'ZMW', 17.892580, NULL, NULL),
	(168, 'ZWL', 359.527584, NULL, NULL);
/*!40000 ALTER TABLE `currency_rates` ENABLE KEYS */;

-- Dumping structure for table larabuilder.email_templates
CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.email_templates: ~3 rows (approximately)
/*!40000 ALTER TABLE `email_templates` DISABLE KEYS */;
INSERT INTO `email_templates` (`id`, `name`, `subject`, `body`, `created_at`, `updated_at`) VALUES
	(1, 'registration', 'Registration Sucessfully', '<div style="padding: 15px 30px;">\n						 <h2 style="color: #555555;">Registration Successful</h2>\n						 <p style="color: #555555;">Hi {name},<br /><span style="color: #555555;">Welcome to LaraBuilder and thank you for joining with us. You can now sign in to your account using your email and password.<br /><br />Regards<br />Tricky Code<br /></span></p>\n						 </div>', NULL, NULL),
	(2, 'premium_membership', 'Premium Membership', '<div style="padding: 15px 30px;">\n						<h2 style="color: #555555; font-family: "PT Sans", sans-serif;">LaraBuilder Premium Subscription</h2>\n						<p style="color: #555555; font-family: "PT Sans", sans-serif;">Hi {name},<br>\n						<span style="color: #555555; font-family: "PT Sans", sans-serif;"><strong>Congratulations</strong> your paymnet was made sucessfully. Your current membership is valid <strong>until</strong> <strong>{valid_to}</strong></span><span style="color: #555555; font-family: "PT Sans", sans-serif;"><strong>.</strong>&nbsp;</span></p>\n						<p><br style="color: #555555; font-family: "PT Sans", sans-serif;" /><span style="color: #555555; font-family: "PT Sans", sans-serif;">Thank You</span><br style="color: #555555; font-family: "PT Sans", sans-serif;" /><span style="color: #555555; font-family: "PT Sans", sans-serif;">Tricky Code</span></p>\n						</div>', NULL, NULL),
	(3, 'alert_notification', 'LaraBuilder Renewals', '<div style="padding: 15px 30px;">\n							<h2 style="color: #555555; font-family: "PT Sans", sans-serif;">Account Renew Notification</h2>\n							<p style="color: #555555; font-family: "PT Sans", sans-serif;">Hi {name},<br>\n							<span style="color: #555555; font-family: "PT Sans", sans-serif;">Your package is due to <strong>expire on {valid_to}</strong> s</span><span style="color: #555555; font-family: "PT Sans", sans-serif;">o you will need to renew by then to keep your account active.</span></p>\n							<p><br style="color: #555555; font-family: "PT Sans", sans-serif;" /><span style="color: #555555; font-family: "PT Sans", sans-serif;">Regards</span><br style="color: #555555; font-family: "PT Sans", sans-serif;" /><span style="color: #555555; font-family: "PT Sans", sans-serif;">Tricky Code</span></p>\n							</div>', NULL, NULL);
/*!40000 ALTER TABLE `email_templates` ENABLE KEYS */;

-- Dumping structure for table larabuilder.files
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `related_to` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` bigint(20) DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.files: ~0 rows (approximately)
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

-- Dumping structure for table larabuilder.file_manager
CREATE TABLE IF NOT EXISTS `file_manager` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_dir` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.file_manager: ~0 rows (approximately)
/*!40000 ALTER TABLE `file_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_manager` ENABLE KEYS */;

-- Dumping structure for table larabuilder.invoice_templates
CREATE TABLE IF NOT EXISTS `invoice_templates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_css` text COLLATE utf8mb4_unicode_ci,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.invoice_templates: ~0 rows (approximately)
/*!40000 ALTER TABLE `invoice_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice_templates` ENABLE KEYS */;

-- Dumping structure for table larabuilder.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.migrations: ~25 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_06_01_080940_create_settings_table', 1),
	(4, '2018_08_29_084110_create_permissions_table', 1),
	(5, '2018_10_28_151911_create_taxs_table', 1),
	(6, '2018_11_12_152015_create_email_templates_table', 1),
	(7, '2018_11_13_082512_create_payment_methods_table', 1),
	(8, '2018_11_13_141249_create_transactions_table', 1),
	(9, '2018_11_14_134254_create_repeating_transactions_table', 1),
	(10, '2018_11_17_142037_create_payment_histories_table', 1),
	(11, '2019_03_19_123527_create_company_settings_table', 1),
	(12, '2019_06_23_055645_create_company_email_template_table', 1),
	(13, '2019_10_31_172912_create_social_google_accounts_table', 1),
	(14, '2019_11_11_170656_create_file_manager_table', 1),
	(15, '2020_03_15_154649_create_currency_rates_table', 1),
	(16, '2020_03_21_052934_create_companies_table', 1),
	(17, '2020_03_21_070022_create_packages_table', 1),
	(18, '2020_04_02_155956_create_cm_features_table', 1),
	(19, '2020_04_02_160209_create_cm_faqs_table', 1),
	(20, '2020_04_02_160249_create_cm_email_subscribers_table', 1),
	(21, '2020_05_18_104400_create_invoice_templates_table', 1),
	(22, '2020_06_03_112519_create_files_table', 1),
	(23, '2020_06_03_112538_create_notes_table', 1),
	(24, '2020_06_03_112553_create_activity_logs_table', 1),
	(25, '2020_06_22_083001_create_projects_table', 1),
	(26, '2020_06_27_152210_create_notifications_table', 1),
	(27, '2020_08_21_063443_add_related_to_company_email_template', 1),
	(28, '2020_10_19_082621_create_staff_roles_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table larabuilder.notes
CREATE TABLE IF NOT EXISTS `notes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `related_to` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` bigint(20) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.notes: ~0 rows (approximately)
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

-- Dumping structure for table larabuilder.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.notifications: ~0 rows (approximately)
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Dumping structure for table larabuilder.packages
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_month` decimal(10,2) NOT NULL,
  `cost_per_year` decimal(10,2) NOT NULL,
  `websites_limit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recurring_transaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT '0',
  `others` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.packages: ~3 rows (approximately)
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` (`id`, `package_name`, `cost_per_month`, `cost_per_year`, `websites_limit`, `recurring_transaction`, `online_payment`, `is_featured`, `others`, `created_at`, `updated_at`) VALUES
	(1, 'Basic', 10.00, 99.00, 'a:2:{s:7:"monthly";s:1:"3";s:6:"yearly";s:2:"10";}', 'a:2:{s:7:"monthly";s:2:"No";s:6:"yearly";s:2:"No";}', 'a:2:{s:7:"monthly";s:2:"No";s:6:"yearly";s:2:"No";}', 0, NULL, NULL, NULL),
	(2, 'Standard', 25.00, 199.00, 'a:2:{s:7:"monthly";s:2:"10";s:6:"yearly";s:2:"20";}', 'a:2:{s:7:"monthly";s:3:"Yes";s:6:"yearly";s:3:"Yes";}', 'a:2:{s:7:"monthly";s:2:"No";s:6:"yearly";s:2:"No";}', 1, NULL, NULL, NULL),
	(3, 'Business Plus', 40.00, 399.00, 'a:2:{s:7:"monthly";s:2:"30";s:6:"yearly";s:9:"Unlimited";}', 'a:2:{s:7:"monthly";s:3:"Yes";s:6:"yearly";s:3:"Yes";}', 'a:2:{s:7:"monthly";s:3:"Yes";s:6:"yearly";s:3:"Yes";}', 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;

-- Dumping structure for table larabuilder.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table larabuilder.payment_histories
CREATE TABLE IF NOT EXISTS `payment_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.payment_histories: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_histories` ENABLE KEYS */;

-- Dumping structure for table larabuilder.payment_methods
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.payment_methods: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_methods` ENABLE KEYS */;

-- Dumping structure for table larabuilder.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) NOT NULL,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table larabuilder.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) NOT NULL,
  `progress` int(11) DEFAULT NULL,
  `billing_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_rate` decimal(10,2) DEFAULT NULL,
  `hourly_rate` decimal(10,2) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `custom_fields` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) NOT NULL,
  `custom_domain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.projects: ~0 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table larabuilder.repeating_transactions
CREATE TABLE IF NOT EXISTS `repeating_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `trans_date` date NOT NULL,
  `account_id` bigint(20) NOT NULL,
  `chart_id` bigint(20) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_cr` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `base_amount` decimal(10,2) DEFAULT NULL,
  `payer_payee_id` bigint(20) DEFAULT NULL,
  `payment_method_id` bigint(20) NOT NULL,
  `reference` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `company_id` bigint(20) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `trans_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.repeating_transactions: ~0 rows (approximately)
/*!40000 ALTER TABLE `repeating_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `repeating_transactions` ENABLE KEYS */;

-- Dumping structure for table larabuilder.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.settings: ~21 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'mail_type', 'mail', NULL, NULL),
	(2, 'backend_direction', 'ltr', NULL, NULL),
	(3, 'membership_system', 'enabled', NULL, NULL),
	(4, 'trial_period', '7', NULL, NULL),
	(5, 'allow_singup', 'yes', NULL, NULL),
	(6, 'email_verification', 'disabled', NULL, NULL),
	(7, 'hero_title', 'a:2:{s:6:"Arabic";s:32:"Start Your Business With builder";s:7:"English";s:36:"Start Your Business With LaraBuilder";}', NULL, '2022-08-19 00:27:36'),
	(8, 'hero_sub_title', 'a:2:{s:6:"Arabic";s:132:"A +400 professionally designed blocks allowing you to start building sites and pages instantly with Easy to use drag & drop builder!";s:7:"English";s:132:"A +400 professionally designed blocks allowing you to start building sites and pages instantly with Easy to use drag & drop builder!";}', NULL, '2022-08-19 00:27:37'),
	(9, 'meta_keywords', 'drag and drop, laravel drag and drop, laravel sitebuilder, site builder, sitebuilder, website builder', NULL, NULL),
	(10, 'meta_description', 'A +400 professionally designed blocks allowing you to start building sites and pages instantly with Easy to use drag & drop builder!', NULL, NULL),
	(11, 'language', 'English', NULL, NULL),
	(12, 'company_name', 'arabcode', '2022-05-25 08:26:52', '2022-05-25 08:26:52'),
	(13, 'site_title', 'build your landpage', '2022-05-25 08:26:53', '2022-05-25 08:26:53'),
	(14, 'phone', '+967714311582', '2022-05-25 08:26:53', '2022-05-25 08:26:53'),
	(15, 'email', 'arab6ode@gmail.com', '2022-05-25 08:26:53', '2022-05-25 08:26:53'),
	(16, 'timezone', 'Asia/Riyadh', '2022-05-25 08:26:53', '2022-05-25 08:26:53'),
	(17, 'website_copyright', 'a:2:{s:6:"Arabic";s:0:"";s:7:"English";s:0:"";}', '2022-08-19 00:27:37', '2022-08-19 00:27:37'),
	(18, 'facebook_link', '', '2022-08-19 00:28:09', '2022-08-19 00:28:09'),
	(19, 'twitter_link', '', '2022-08-19 00:28:09', '2022-08-19 00:28:09'),
	(20, 'instagram_link', '', '2022-08-19 00:28:09', '2022-08-19 00:28:09'),
	(21, 'linkedin_link', '', '2022-08-19 00:28:09', '2022-08-19 00:28:09');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table larabuilder.social_google_accounts
CREATE TABLE IF NOT EXISTS `social_google_accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.social_google_accounts: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_google_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_google_accounts` ENABLE KEYS */;

-- Dumping structure for table larabuilder.staff_roles
CREATE TABLE IF NOT EXISTS `staff_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.staff_roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `staff_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff_roles` ENABLE KEYS */;

-- Dumping structure for table larabuilder.taxs
CREATE TABLE IF NOT EXISTS `taxs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.taxs: ~0 rows (approximately)
/*!40000 ALTER TABLE `taxs` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxs` ENABLE KEYS */;

-- Dumping structure for table larabuilder.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `trans_date` date NOT NULL,
  `account_id` bigint(20) NOT NULL,
  `chart_id` bigint(20) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_cr` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `base_amount` decimal(10,2) DEFAULT NULL,
  `payer_payee_id` bigint(20) DEFAULT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `purchase_return_id` bigint(20) DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `payment_method_id` bigint(20) NOT NULL,
  `reference` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.transactions: ~0 rows (approximately)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping structure for table larabuilder.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table larabuilder.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `role_id`, `profile_picture`, `status`, `language`, `company_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'builder', 'mohammed.hudair@gmail.com', '2022-05-25 08:25:53', '$2y$10$aJsJBdj2hPYXpslBmguo0uJNhBvsC9WGF57wIH4X9ieRpIcthBwM6', 'admin', NULL, 'default.png', 1, NULL, NULL, NULL, '2022-05-25 08:25:53', '2022-08-19 00:28:35'),
	(2, 'mmmm', 'arab6ode@gmail.com', '2022-05-25 11:41:05', '$2y$10$0O0pX8RHw0KUNVd9WXW7XeyFCSduqGX.84E6q8Xsvcmxd8gqCY0UW', 'user', NULL, 'default.png', 1, 'English', 1, NULL, '2022-05-25 11:41:05', '2022-05-25 11:41:05'),
	(3, 'mmmm', 'mhudair30@gmail.com', '2022-05-25 11:41:33', '$2y$10$jK537Xl4QMbsjHzxHKSClua5L6Z2DWWFrfuggCMNnd96cal6LblrO', 'user', NULL, 'default.png', 1, 'English', 2, NULL, '2022-05-25 11:41:33', '2022-05-25 11:41:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
