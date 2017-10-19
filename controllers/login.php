<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 17/10/2017
 * Time: 18:47
 */

include_once("../Managers/SessionManager.php");
include_once("../Managers/UserConnectionManager.php");

// retrieving email and password from loging form
$email = $_POST["email"];
$password = $_POST["password"];


 // constants declaration
 define('PREFIX_SALT', 'prison');
 define('SUFFIX_SALT', 'break');

 // hashin user password
 $hashSecure = md5(PREFIX_SALT.$password.SUFFIX_SALT);
 $password = $hashSecure;

// if login operation is goodd
if(UserConnectionManager::checkLogIn($email, $password)) {
    // we can set / start the session
    SessionManager::startSession($email);

    // including home page
    include("../views/home.php");
} else {
    // display error page with bad credentials error
    ErrorManager::displayErrorPage("badCredentials");
}

?>