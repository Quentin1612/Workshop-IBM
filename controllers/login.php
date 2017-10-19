<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 18:47
 */

include_once("../Managers/SessionManager.php");
include_once("../Managers/UserConnectionManager.php");

$email = $_POST["email"];
$password = $_POST["password"];


 // Déclaration des constantes
 define('PREFIX_SALT', 'prison');
 define('SUFFIX_SALT', 'break');

 $hashSecure = md5(PREFIX_SALT.$password.SUFFIX_SALT);
 $password = $hashSecure;


if(UserConnectionManager::checkLogIn($email, $password)) {
    SessionManager::startSession($email);
    include("../views/home.php");
} else {
    ErrorManager::displayErrorPage("badCredentials");
}

?>