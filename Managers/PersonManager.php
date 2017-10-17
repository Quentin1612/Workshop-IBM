<?php

include("../Managers/DatabaseConnectionManager.php");
include("../Managers/WalletManager.php");

class PersonManager {
    public static function insertNewPerson($login, $password, $firstName, $familyName, $email, $address) {
        $connection = DatabaseConnectionManager::getInstance();
        $personIdentifier = self::getNumberOfPersons() + 1;
        $walletIdentifier = WalletManager::getNumberOfWallets() + 1;
        WalletManager::insertNewWallet(0);

        if ($connection) {
            /*$request = 'INSERT INTO person VALUES('
                . $personIdentifier . ', '
                . $login . ', '
                . $password . ', '
                . $firstName . ', '
                . $familyName . ', '
                . $address . ', '
                . $walletIdentifier . ', '
                . $email . ')';*/

            $request = "INSERT INTO person (identifier, login, password, firstName, familyName, address, wallet_id, email) VALUES(5, 'michel.dupont', '123', 'michel', 'dupont', '10 Rue de la Mairie 62000 Arras', 1, 'michel.dupont@gmail.com')";
            $connection->query($request);

            /*$request = $connection->prepare('INSERT INTO person VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
            $request->execute(array($personIdentifier, $login, $password, $firstName, $familyName, $address, $walletIdentifier, $email));*/
        }

        DatabaseConnectionManager::stopConnection();
    }

    public static function getNumberOfPersons() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        if ($connection) {
            $answer = $connection->query('SELECT COUNT(identifier) FROM person')->fetch();
        }

        DatabaseConnectionManager::stopConnection();
        return $answer[0];
    }
}