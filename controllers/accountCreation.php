<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/10/2017
 * Time: 14:27
 */

    include_once("../Managers/PersonManager.php");
    include_once("../Managers/SessionManager.php");

    // retrieving form post values
    $firstName = $_POST["firstName"];
    $familyName = $_POST["familyName"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // adding SALT to MD5 HASH
    define('PREFIX_SALT', 'prison');
    define('SUFFIX_SALT', 'break');

    // hashing password to record it in the database
    $hashSecure = md5(PREFIX_SALT.$password.SUFFIX_SALT);
    $password = $hashSecure;

    // concatanating firstname and familyname to generate login
    $login = $_POST["firstName"] . "." . $_POST["familyName"];

    // adding new person in database
    PersonManager::insertNewPerson($login, $password, $firstName, $familyName, $email, $address);

    // starting session
    SessionManager::startSession($email);

    // including home view
    include("../views/home.php");
?>