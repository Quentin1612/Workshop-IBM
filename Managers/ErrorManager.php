<?php

// error manager
class ErrorManager {

    // public static method to display error message page
    public static function displayErrorPage($errorMessage) {
        // error message set depending the key retrieved
        if($errorMessage == "userNotLogged") {
            $errorMessage = "Merci de vous connecter pour pouvoir accèder à cette page";
        } else if($errorMessage == "badCredentials") {
            $errorMessage = "Vos identifiants de connexion sont incorrects";
        } else {
            $errorMessage = "Une erreur est survenue";
        }

        // including error page
        include("../views/error.php");
    }
}
?>