<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 18:49
 */

include_once("../Managers/DatabaseConnectionManager.php");

class UserConnectionManager {
    public static function checkLogIn($email, $password) {
        $credentialsAreGood = false;
        $connection = DatabaseConnectionManager::getInstance();

        if($connection) {
            $request = "SELECT COUNT(identifier) FROM person WHERE email = '" . $email . "' AND password = '" . $password . "'";
            $answer = $connection->query($request)->fetch();
            $count = $answer["COUNT(identifier)"];

            if($count == 1) {
                $credentialsAreGood = true;
                return $credentialsAreGood;
            } else {
                return $credentialsAreGood;
            }
        } else {
            return $credentialsAreGood;
        }
    }
}