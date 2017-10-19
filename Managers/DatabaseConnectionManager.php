<?php

// database connection manager
class DatabaseConnectionManager {
    // private attributes
    private static $db = null;
    private static $dsn = null;
    private static $username = null;
    private static $password = null;

    // public static method to retrieve unique instance
    public static function getInstance() {
        if (is_null(self::$db)) {
            self::$dsn = 'mysql:host=localhost;dbname=workshop-ibm';
            self::$username = 'root';
            self::$password = 'root';

            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch(PDOException $e) {
                echo 'Erreur de connexion : ' . $e . "\n";
            }
        }
        return self::$db;
    }
}