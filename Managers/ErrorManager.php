<?php

class ErrorManager {
    public static function displayErrorPage($errorMessage) {
        switch($errorMessage) {
            case "badCredentials":
                $errorMessage = "Vos identifiants de connexion sont incorrects";
                break;
            case "userNotLogged":
                $errorMessage = "Merci de vous connecter pour pouvoir accèder à cette page";
            default:
                $errorMessage = "Une erreur est survenue";
                break;
        }

        include("../views/error.php");
    }
}
?>