<?php
/**
 * FinWise - Database Helper Connection
 * PDO connection setup with graceful error handling and fallback capabilities.
 */

if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

class Database {
    private static ?PDO $instance = null;

    public static function getConnection(): ?PDO {
        if (self::$instance === null) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (PDOException $e) {
                // Connection failed - site operates in fallback mode seamlessly
                self::$instance = null;
            }
        }
        return self::$instance;
    }
}
