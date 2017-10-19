<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 19:09
 */

include_once("../Managers/ErrorManager.php");
include_once("../Managers/PersonManager.php");

// session manager
class SessionManager {

    // public static method to set / start session
    public static function startSession($email) {
        // starting session
        session_start();

        // retrieving current user identifier from his email
        $identifier = PersonManager::retrievePersonIdentifierWithEmail($email);

        // setting session variables
        $_SESSION["id"] = $identifier;
        $_SESSION["userEmail"] = $email;
    }

    // public static method to destroy current session
    public static function closeSession() {
        session_destroy();
    }

    // public static method to check if session is set
    public static function checkSession() {
        // checking if is set
        if(!isset($_SESSION["userEmail"])) {
            // if not -> displaying error page with key userNotLogged
            ErrorManager::displayErrorPage("userNotLogged");
            return false;
        } else {
            return true;
        }
    }
}