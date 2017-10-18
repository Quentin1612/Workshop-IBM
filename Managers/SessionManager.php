<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 19:09
 */

include_once("../Managers/ErrorManager.php");
include_once("../Managers/PersonManager.php");

class SessionManager {
    public static function startSession($email) {
        session_start();

        $identifier = PersonManager::retrievePersonIdentifierWithEmail($email);

        $_SESSION["id"] = $identifier;
        $_SESSION["userEmail"] = $email;
    }

    public static function closeSession() {
        session_destroy();
    }

    public static function checkSession() {
        if(!isset($_SESSION["userEmail"])) {
            ErrorManager::displayErrorPage("userNotLogged");
            return false;
        } else {
            return true;
        }
    }
}