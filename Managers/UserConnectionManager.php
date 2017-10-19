<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 18:49
 */

include_once("../Managers/DatabaseConnectionManager.php");

// user connection manager
class UserConnectionManager {

    // public static mtehod to check login credentials on form validation
    public static function checkLogIn($email, $password) {
        $credentialsAreGood = false;
        $connection = DatabaseConnectionManager::getInstance();

        // if connection is set
        if($connection) {
            // setting query string
            $request = "SELECT COUNT(identifier) FROM person WHERE email = '" . $email . "' AND password = '" . $password . "'";
            // executing query / fetching query answer
            $answer = $connection->query($request)->fetch();
            $count = $answer["COUNT(identifier)"];

            // if query returned something
            if($count == 1) {
                // returning login attempt failed
                $credentialsAreGood = true;
                return $credentialsAreGood;
            } else {
                // returning login attempt successed
                return $credentialsAreGood;
            }
        } else {
            // returning login attempt failed
            return $credentialsAreGood;
        }
    }
}