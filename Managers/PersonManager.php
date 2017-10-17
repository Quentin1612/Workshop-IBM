<?php

include("../Managers/DatabaseConnectionManager.php");
include("../Managers/WalletManager.php");

class PersonManager {
    public static function insertNewPerson($login, $password, $firstName, $familyName, $email, $address) {
        $connection = DatabaseConnectionManager::getInstance();
        $personIdentifier = self::getLastPersonId() + 1;
        WalletManager::insertNewWallet(0);
        $walletIdentifier = WalletManager::getLastWalletId();

        if ($connection) {
            $request = "INSERT INTO person (identifier, login, password, familyName, firstName, address, wallet_id, email) VALUES("
                . $personIdentifier . ", '"
                . $login . "', '"
                . $password . "', '"
                . $firstName . "', '"
                . $familyName . "', '"
                . $address . "', "
                . $walletIdentifier . ", '"
                . $email . "')";

            echo $request;
            $connection->query($request);
        }

        DatabaseConnectionManager::stopConnection();
    }

    public static function getLastPersonId() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        if ($connection) {
            $answer = $connection->query('SELECT MAX(identifier) FROM person')->fetch();
        }

        DatabaseConnectionManager::stopConnection();
        return $answer[0];
    }

    public static function checkIfEmailExists($email) {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        if ($connection) {
            $answer = $connection->query('SELECT * FROM person WHERE email = "' . $email . '"')->fetchAll();
            if(count($answer) > 0) {
                echo 'email existe déjà';
            }
        }

        DatabaseConnectionManager::stopConnection();
        return $answer[0];
    }
}