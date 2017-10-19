<?php

include_once("../Managers/WalletManager.php");
include_once("../Managers/DatabaseConnectionManager.php");

// person manager
class PersonManager {

    // public static method to add new person in database table
    public static function insertNewPerson($login, $password, $firstName, $familyName, $email, $address) {
        $connection = DatabaseConnectionManager::getInstance();
        $personIdentifier = self::getLastPersonId() + 1;
        WalletManager::insertNewWallet(0);
        $walletIdentifier = WalletManager::getLastWalletId();

        // if connection is set
        if ($connection) {
            // request string
            $request = "INSERT INTO person (identifier, login, password, familyName, firstName, address, wallet_id, email) VALUES("
                . $personIdentifier . ", '"
                . $login . "', '"
                . $password . "', '"
                . $firstName . "', '"
                . $familyName . "', '"
                . $address . "', "
                . $walletIdentifier . ", '"
                . $email . "')";

            // query execution
            $connection->query($request);
        }
    }

    // public static method to retrieve the last person id
    public static function getLastPersonId() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        // if connection is set
        if ($connection) {
            // executing request query
            $answer = $connection->query('SELECT MAX(identifier) FROM person')->fetch();
        }

        // returning last id from database
        return $answer[0];
    }

    // public static method to retrieve name with identifier
    public static function getname($id){
       $connection = DatabaseConnectionManager::getInstance();
       $nom = null;
       $prenom = null;

        // if connection is set
       if ($connection) {
            // executing request query
           $nom = $connection->query('SELECT firstName FROM person WHERE identifier = "' . $id . '"')->fetch();
        }

        // returning name from database
        return $nom[0];
    }

    // public static method to retrieve person id from his email
    public static function retrievePersonIdentifierWithEmail($email) {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        // if connection is set
        if ($connection) {
            // executing request query
            $answer = $connection->query('SELECT identifier FROM person WHERE email = "' . $email . '"')->fetch();
        }

        // returning identifier with email
        return $answer[0];
    }
}