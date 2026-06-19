-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2026 at 01:57 PM
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
-- Database: `tranquil`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` longtext NOT NULL,
  `short_para` longtext NOT NULL,
  `long_desc1` longtext NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `long_desc2` longtext NOT NULL,
  `event_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `tag`, `image`, `short_desc`, `short_para`, `long_desc1`, `banner_img`, `long_desc2`, `event_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Emerging Real Estate Corridors in Nashik (2026–2030 Growth Guide)', 'emerging-real-estate-corridors-in-nashik-2026-2030-growth-guide', 'Architecture', 'blogs/thumbnails/XSbEuDZ6fWMCPa9eTYE1DF3UTDUVozYzVkWTUDHG.png', 'Emerging Real Estate Corridors in Nashik (2026–2030 Growth Guide) Emerging Real Estate Corridors in Nashik.', 'Nashik’s real estate market is entering a new growth cycle driven by the Ring Road project, Kumbh 2027 infrastructure, industrial expansion, and improved connectivity. While established locations like Gangapur Road and College Road remain premium destinations, the biggest opportunities are […]', '<p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Emerging Real Estate Corridors in Nashik. Nashik’s real estate market is entering a new growth cycle driven by the <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\">Ring Road project, Kumbh 2027 infrastructure, industrial expansion, and improved connectivity</span>. While established locations like Gangapur Road and College Road remain premium destinations, the biggest opportunities are now emerging in developing corridors that are expected to witness significant appreciation over the next few years.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">If you follow <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\">Nashik event and updates</span>, you’ll notice that many of the city’s future growth areas are located along new infrastructure routes and expanding urban boundaries.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">1. Pathardi Phata – Indira Nagar Corridor</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\">Pathardi Phata–Indira Nagar belt</span> has become one of Nashik’s most promising residential corridors.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Why it is growing:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Strong residential demand<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Good highway connectivity<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Affordable pricing compared to premium areas<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Infrastructure improvements underway</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Industry experts and local market reports identify the Pathardi corridor as one of the fastest-growing residential zones in Nashik, benefiting from ongoing infrastructure investments and migration-driven housing demand.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Best suited for:</h3><ul class=\"wp-block-list\" style=\"-webkit-font-smoothing: antialiased; margin: 15px 0px 15px 20px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">First-time homebuyers</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Investors</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Rental income properties</li></ul><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">2. Trimbak Road Growth Corridor</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The Trimbak Road belt is rapidly evolving from a tourism-driven area into a major residential and investment corridor.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Growth drivers:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Kumbh infrastructure projects<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Highway upgrades<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Tourism development<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Premium housing demand</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The Trimbak region is expected to benefit from major infrastructure investments, including highway improvements and connectivity upgrades linked to Kumbh preparations. Nashik event and updates</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">&nbsp;</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Why investors are watching:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Combination of residential, tourism, and commercial growth.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">3. Ring Road Influence Zone</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The upcoming <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\">Nashik Ring Road</span> may become the city’s most important real estate catalyst.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Project highlights:</h3><ul class=\"wp-block-list\" style=\"-webkit-font-smoothing: antialiased; margin: 15px 0px 15px 20px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">66–69 km corridor</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Multi-lane roadway</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Connectivity to major highways</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Completion targeted around Kumbh 2027</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The Ring Road is expected to reduce congestion while opening entirely new development zones around Nashik’s outskirts.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Areas expected to benefit:</h3><ul class=\"wp-block-list\" style=\"-webkit-font-smoothing: antialiased; margin: 15px 0px 15px 20px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Adgaon</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Makhmalabad</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Dindori Road belt</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Pathardi region</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Trimbak Road corridor</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Historically, major ring roads create long-term appreciation opportunities.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">4. CIDCO – New Indira Nagar Expansion Belt</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">CIDCO continues to emerge as one of Nashik’s fastest-growing urban regions.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Recent urban development data shows that CIDCO and surrounding areas have experienced some of the highest property growth in Nashik over the past several years.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Key advantages:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Established infrastructure<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Strong residential demand<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Commercial growth potential<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Good connectivity</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">This corridor appeals to both end-users and investors.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">5. Adgaon – Makhmalabad Corridor</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The Adgaon–Makhmalabad stretch is becoming increasingly attractive because of its proximity to the Ring Road alignment.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Why it matters:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Affordable land availability<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Future township potential<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Better highway access</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Real estate analysts have identified this corridor as a key beneficiary of Ring Road development and urban expansion.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Suitable for:</h3><ul class=\"wp-block-list\" style=\"-webkit-font-smoothing: antialiased; margin: 15px 0px 15px 20px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Plotted developments</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Long-term investors</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Township projects</li></ul><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">6. Ambad MIDC – Pathardi Growth Corridor</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">This corridor combines industrial and residential demand.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Major growth factors:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Ambad MIDC employment base<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Residential expansion near workplaces<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Better transport infrastructure</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Industry-linked housing demand is expected to continue increasing as Nashik’s industrial sector grows.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">7. Nashik Road &amp; Logistics Corridor</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Nashik Road is emerging as an important logistics and transportation corridor.</p><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Growth drivers:</h3><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Railway connectivity<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Warehousing opportunities<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Industrial movement<br style=\"-webkit-font-smoothing: antialiased;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✔\" src=\"https://s.w.org/images/core/emoji/17.0.2/svg/2714.svg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; font-family: inherit; font-style: inherit; font-weight: inherit; border-radius: 0px; margin: 0px 0.07em !important; padding: 0px !important; border-width: medium !important; border-style: none !important; border-color: currentcolor !important; border-image: initial !important; vertical-align: -0.1em !important; height: 1em !important; box-shadow: none !important; display: inline !important; width: 1em !important; background: none !important;\">&nbsp;Highway access</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">As Nashik strengthens its position as a regional logistics hub, this corridor could see increasing commercial and residential demand.</p>', 'blogs/banners/AMDux8kXTjtMPovkTXJN2B9vV7fu8q53RTlg1TJ9.jpg', '<h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">What Makes These Corridors Attractive?</h1><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">The strongest growth corridors usually share four factors:</p></h1><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Infrastructure</h3><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">Roads, highways, Ring Road access.</p></h1><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Employment</h3><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">Industrial and commercial activity.</p></h1><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Connectivity</h3><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">Easy access to city centers and highways.</p></h1><h3 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; font-weight: 600; color: rgb(51, 51, 51);\">Future Development</h3><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">Government investment and urban expansion.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">The ₹33,000 crore-plus infrastructure push linked to Nashik’s future growth and Kumbh preparations is expected to accelerate development across multiple corridors.</p><hr class=\"wp-block-separator has-alpha-channel-opacity\" style=\"-webkit-font-smoothing: antialiased; height: 1px; clear: both; min-height: 0px; border-width: medium medium 2px; border-style: none none solid; border-color: currentcolor; border-image: initial; opacity: 1; width: 100px; font-size: 14px; font-weight: 400;\"></h1><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\">Outlook for 2030</h1><h1 class=\"wp-block-heading\" style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: 1.4; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 23px; font-weight: 600; color: rgb(51, 51, 51);\"><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">By 2030, many of today’s emerging corridors could become Nashik’s mainstream residential and commercial destinations.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">The combination of:</p><ul class=\"wp-block-list\" style=\"-webkit-font-smoothing: antialiased; margin: 15px 0px 15px 20px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\"><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Ring Road development</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Kumbh infrastructure</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Industrial growth</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Improved highways</li><li style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: inherit;\">Population migration</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-size: 14px; font-weight: 400; color: rgb(74, 74, 74);\">is creating one of the strongest growth cycles Nashik has seen in decades.</p>Conclusion</h1><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">The most promising <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\"><a href=\"https://tranquilstead.in/category/real-estate-tranquil-stead-nashik-event-and-updates/\" style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-style: inherit; color: rgb(51, 51, 51); text-decoration: none; transition: 0.3s; box-shadow: none;\">Emerging Real Estate Corridors in Nashik</a></span> today are:</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">Pathardi Phata – Indira Nagar<br style=\"-webkit-font-smoothing: antialiased;\">Trimbak Road Corridor<br style=\"-webkit-font-smoothing: antialiased;\">Ring Road Influence Zone<br style=\"-webkit-font-smoothing: antialiased;\">CIDCO Expansion Belt<br style=\"-webkit-font-smoothing: antialiased;\">Adgaon – Makhmalabad Corridor<br style=\"-webkit-font-smoothing: antialiased;\">Ambad MIDC – Pathardi Corridor<br style=\"-webkit-font-smoothing: antialiased;\">Nashik Road Logistics Corridor</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">For investors looking at the next 5–10 years, these areas could offer some of Nashik’s strongest appreciation potential as infrastructure projects reshape the city’s future.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">At <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\">Tranquil Stead</span>, we bring you expert real estate insights and the latest <span style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: inherit; font-style: inherit; font-weight: 600;\"><a href=\"https://www.instagram.com/tranquilstead.in/\" data-type=\"link\" data-id=\"https://www.instagram.com/tranquilstead.in/\" style=\"-webkit-font-smoothing: antialiased; margin: 0px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-style: inherit; color: rgb(51, 51, 51); text-decoration: none; transition: 0.3s; box-shadow: none;\">Nashik event and updates</a></span> to help you stay ahead of Nashik’s growth story.</p><p style=\"-webkit-font-smoothing: antialiased; margin: 0px 0px 20px; padding: 0px; border-style: none; border-color: currentcolor; border-image: initial; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-variant-emoji: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-size-adjust: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-language-override: inherit; vertical-align: baseline; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; color: rgb(74, 74, 74);\">&nbsp;</p>', '2026-06-17', '2026-06-17 04:58:49', '2026-06-17 04:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Real Estate', 'real-estate', 1, '2026-06-15 01:53:09', '2026-06-15 01:53:09'),
(2, 'Commercial', 'commercial', 1, '2026-06-15 01:53:28', '2026-06-15 01:53:28'),
(3, 'Lifestyle', 'lifestyle', 1, '2026-06-17 01:14:36', '2026-06-17 01:14:36'),
(4, 'Buying Guide', 'buying-guide', 1, '2026-06-17 04:14:08', '2026-06-17 04:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mansi More', '9422581047', 'mansithinkdigital@gmail.com', 'testing', '2026-05-25 23:11:58', '2026-05-25 23:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `source` varchar(255) NOT NULL DEFAULT 'inquiry',
  `status` varchar(255) NOT NULL DEFAULT 'new',
  `notes` text DEFAULT NULL,
  `follow_up_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_13_163757_create_permission_tables', 1),
(5, '2026_05_13_163829_create_categories_table', 1),
(6, '2026_05_13_163830_create_locations_table', 1),
(7, '2026_05_13_163830_create_properties_table', 1),
(8, '2026_05_13_163830_create_property_images_table', 1),
(9, '2026_05_13_163831_create_amenities_table', 1),
(10, '2026_05_13_163831_create_amenity_property_table', 1),
(11, '2026_05_13_163831_create_favorites_table', 1),
(13, '2026_05_13_163832_create_leads_table', 1),
(14, '2026_05_13_163832_create_settings_table', 1),
(15, '2026_05_13_163832_create_viewing_requests_table', 1),
(16, '2026_05_13_164014_create_activity_log_table', 1),
(17, '2026_05_13_164015_add_event_column_to_activity_log_table', 1),
(18, '2026_05_13_164016_add_batch_uuid_column_to_activity_log_table', 1),
(19, '2026_05_25_104601_add_designation_and_review_to_inquiries_table', 2),
(20, '2026_05_25_114735_create_testimonials_table', 3),
(21, '2026_05_26_043543_create_contacts_table', 4),
(22, '2026_05_26_072726_create_properties_table', 5),
(23, '2026_05_26_115019_create_property_types_table', 6),
(24, '2026_05_13_163831_create_inquiries_table', 7),
(25, '2026_05_27_062909_create_property_details_table', 8),
(26, '2026_05_29_101804_create_blogs_table', 9),
(27, '2026_06_15_054343_create_categories_table', 10),
(28, '2026_06_15_070404_add_category_id_to_blogs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Residential', '2026-05-26 05:22:57', '2026-05-26 05:22:57'),
(2, 'Commercial', '2026-05-26 06:30:47', '2026-05-26 06:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `property_type_id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `bhk_type` varchar(255) DEFAULT NULL,
  `property_status` varchar(255) DEFAULT NULL,
  `total_price` decimal(15,2) DEFAULT NULL,
  `price_per_sq_ft` decimal(10,2) DEFAULT NULL,
  `carpet_area` varchar(255) DEFAULT NULL,
  `builtup_area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `floor_number` varchar(255) DEFAULT NULL,
  `total_floors` varchar(255) DEFAULT NULL,
  `facing` varchar(255) DEFAULT NULL,
  `furnishing_status` varchar(255) DEFAULT NULL,
  `bathrooms` varchar(255) DEFAULT NULL,
  `balconies` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `property_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`property_images`)),
  `videos` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `full_description` longtext DEFAULT NULL,
  `amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`amenities`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `property_id`, `property_type_id`, `project_name`, `bhk_type`, `property_status`, `total_price`, `price_per_sq_ft`, `carpet_area`, `builtup_area`, `city`, `locality`, `floor_number`, `total_floors`, `facing`, `furnishing_status`, `bathrooms`, `balconies`, `cover_image`, `property_images`, `videos`, `short_description`, `full_description`, `amenities`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test', '3 BHK', 'Ready to Move', 1200.00, 344.99, '4567', '5678', 'Nashik', 'Ashok Nagar', '2', '9', 'North-East', 'Furnished', '3', '3', 'uploads/coverimg/1779864792_6a1694d8af2bb.jpg', '[\"uploads\\/propertyimgs\\/1779864792_6a1694d8b0284.jpg\",\"uploads\\/propertyimgs\\/1779864792_6a1694d8b05b9.png\",\"uploads\\/propertyimgs\\/1779864792_6a1694d8b082d.jpg\",\"uploads\\/propertyimgs\\/1779864792_6a1694d8afc0f.jpg\"]', 'https://youtu.be/zaFGQEIcetM?si=6gZqGZEm0qZNisu7', 'testing', '<p>Testing</p>', '[\"Gym\",\"Security\",\"CCTV\"]', '2026-05-27 01:23:12', '2026-05-28 22:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `property_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Villa', '2026-05-26 06:24:05', '2026-05-26 06:24:05'),
(2, 2, 'Shops', '2026-05-26 06:38:32', '2026-05-26 06:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5u21kUqKMilYMfU7SXrnGCAS3YhCLmUW8PAcpmae', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiald2NkxPWjZJanlPdmtoTlpXWDJwbWI2T0lYMTVnamw0QldrRlJnZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6OTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9qb3VybmFsL2VtZXJnaW5nLXJlYWwtZXN0YXRlLWNvcnJpZG9ycy1pbi1uYXNoaWstMjAyNi0yMDMwLWdyb3d0aC1ndWlkZSI7czo1OiJyb3V0ZSI7czoxMDoiYmxvZ3Muc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1781767285),
('wbZEwSq6XxRIEu3ZQhQ1lvNCXRzNZgwnEOzqUg1B', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2JBckNsUFMyWTZFaEtNVnU3UTI5Z2x0YzVYVW9NaHd4UmVxdnNxSyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6OTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9qb3VybmFsL2VtZXJnaW5nLXJlYWwtZXN0YXRlLWNvcnJpZG9ycy1pbi1uYXNoaWstMjAyNi0yMDMwLWdyb3d0aC1ndWlkZSI7czo1OiJyb3V0ZSI7czoxMDoiYmxvZ3Muc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1781783251);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`value`)),
  `group` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Advik Sharma', 'Homeowner, Bandra', 'Tranquil made what seemed impossible feel effortless. Every step was handled with pure elegance.', '2026-05-30 00:14:26', '2026-05-30 00:14:26'),
(2, 'Priya Mehta', 'Investor, Juhu', 'The quality of listings is unmatched. I found my dream investment property within a week.', '2026-05-30 00:14:53', '2026-05-30 00:14:53'),
(3, 'Rohan Kapoor', 'First-time Buyer', 'As a first-time buyer, I was nervous. Tranquil\'s agents guided me patiently through every step.', '2026-05-30 00:15:27', '2026-05-30 00:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$cTx9Jz06wX.ke/bkvCCBle3Av6uBNeUjaRR4m6qqG0wtO/OohdtQC', 'admin', NULL, '2026-05-25 04:46:36', '2026-05-25 04:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `viewing_requests`
--

CREATE TABLE `viewing_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `preferred_at` datetime NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leads_user_id_foreign` (`user_id`),
  ADD KEY `leads_agent_id_foreign` (`agent_id`),
  ADD KEY `leads_property_id_foreign` (`property_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_details_property_id_foreign` (`property_id`),
  ADD KEY `property_details_property_type_id_foreign` (`property_type_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_property_id_foreign` (`property_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_types_property_id_foreign` (`property_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `viewing_requests`
--
ALTER TABLE `viewing_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `viewing_requests_property_id_foreign` (`property_id`),
  ADD KEY `viewing_requests_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `viewing_requests`
--
ALTER TABLE `viewing_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `leads_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `leads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
  ADD CONSTRAINT `property_details_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_details_property_type_id_foreign` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_types`
--
ALTER TABLE `property_types`
  ADD CONSTRAINT `property_types_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `viewing_requests`
--
ALTER TABLE `viewing_requests`
  ADD CONSTRAINT `viewing_requests_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `viewing_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
