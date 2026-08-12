-- FinWise Core PHP Database Schema

CREATE DATABASE IF NOT EXISTS `finwise_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `finwise_db`;

-- Table for Page SEO Metadata and Content Storage
CREATE TABLE IF NOT EXISTS `pages` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `slug` VARCHAR(255) NOT NULL UNIQUE,
    `title` VARCHAR(255) NOT NULL,
    `meta_description` TEXT,
    `category` VARCHAR(50) NOT NULL,
    `content` LONGTEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for Authentic Financial Benchmark Data
CREATE TABLE IF NOT EXISTS `financial_benchmarks` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `country` VARCHAR(10) NOT NULL,
    `age_group` VARCHAR(20) NOT NULL,
    `metric` VARCHAR(50) NOT NULL,
    `benchmark_value` DECIMAL(12,2) NOT NULL,
    `unit` VARCHAR(20) NOT NULL,
    `source` VARCHAR(255) NOT NULL,
    `source_url` VARCHAR(500),
    `source_date` DATE,
    `methodology` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for Configurable Financial Scoring Rules
CREATE TABLE IF NOT EXISTS `financial_scoring_rules` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `metric` VARCHAR(50) NOT NULL,
    `country` VARCHAR(10) DEFAULT 'ALL',
    `age_group` VARCHAR(20) DEFAULT 'ALL',
    `condition_operator` VARCHAR(20) NOT NULL,
    `condition_value` VARCHAR(50) NOT NULL,
    `score` INT NOT NULL,
    `weight` DECIMAL(5,2) NOT NULL,
    `explanation` TEXT,
    `recommendation` TEXT,
    `link_url` VARCHAR(255),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for Contact Form Messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for Subscribers / User Saved Snapshots
CREATE TABLE IF NOT EXISTS `subscribers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(150) NOT NULL UNIQUE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
