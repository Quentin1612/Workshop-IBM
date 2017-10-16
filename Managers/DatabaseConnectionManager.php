<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/10/2017
 * Time: 11:43
 */

class DatabaseConnectionManager {
    private $db = null;
    private static $instance = null;

    // private constructor
    private function __construct() {
        setConnection();
    }

    // public method to retrieve unique instance
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new DatabaseConnectionManager();
        }
        return self::$instance;
    }

    // set connection if instance is not null
    private static function setConnection() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=workshop-ibm', 'root', '');
        } catch(PDOException $e) {
            print("Erreur de connexion : " . $e);
        }
    }
}