<?php

class ErrorManager {
    public static function displayErrorPage($errorMessage) {
        echo $errorMessage;

        if($errorMessage == "userNotLogged") {
            $errorMessage = "Merci de vous connecter pour pouvoir accèder à cette page";
        } else if($errorMessage == "badCredentials") {
            $errorMessage = "Vos identifiants de connexion sont incorrects";
        } else {
            $errorMessage = "Une erreur est survenue";
        }

        include("../views/error.php");
    }
}
?>