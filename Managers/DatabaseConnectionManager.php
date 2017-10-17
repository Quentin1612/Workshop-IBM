<?php

class DatabaseConnectionManager {
    private static $db = null;
    private static $dsn = null;
    private static $username = null;
    private static $password = null;

    // public method to retrieve unique instance
    public static function getInstance() {
        if (is_null(self::$db)) {
            self::$dsn = 'mysql:host=localhost;dbname=workshop-ibm';
            self::$username = 'root';
            self::$password = '';

            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch(PDOException $e) {
                echo 'Erreur de connexion : ' . $e . "\n";
            }
        }
        return self::$db;
    }

    // stop database connection
    public static function stopConnection() {
        self::$db = null;
    }
}