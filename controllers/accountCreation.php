<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/10/2017
 * Time: 14:27
 */

    include_once("../Managers/PersonManager.php");

    $firstName = $_POST["firstName"];
    $familyName = $_POST["familyName"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $login = $_POST["firstName"] . "." . $_POST["familyName"];

    PersonManager::insertNewPerson($login, $password, $firstName, $familyName, $email, $address);
    SessionManager::startSession($email);
    include("../views/home.php");
?>