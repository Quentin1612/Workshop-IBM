<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/10/2017
 * Time: 13:59
 */

include_once("../Managers/DatabaseConnectionManager.php");

// wallet manager
class WalletManager {
    public static function insertNewWallet($amount) {
        $connection = DatabaseConnectionManager::getInstance();
        $walletIdentifier = self::getLastWalletId() + 1;

        // if connection is set
        if ($connection) {
            // writing / executing query on wallet insertion
            $request = "INSERT INTO wallet (identifier, bet_coin_amount) VALUES(" . $walletIdentifier . ", " . $amount . ")";
            $connection->query($request);
        }
    }

    // public static method to get last wallet identifier
    public static function getLastWalletId() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        // if connection is set
        if ($connection) {
            // writing / executing query on wallet insertion
            $answer = $connection->query('SELECT MAX(identifier) FROM wallet')->fetch();
        }

        // returning last wallet identfier
        return $answer[0];
    }

    // public static method to retrieve wallet amount with its identifier
    public static function getWalletAmountWithIdentifier($id) {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        // if connection is set
        if ($connection) {
            // writing / executing query on wallet insertion
            $answer = $connection->query('SELECT bet_coin_amount FROM wallet WHERE identifier = (SELECT wallet_id FROM person WHERE identifier = "' . $id . '")')->fetch();
        }

        // returning wallet amount
        return $answer[0];
    }

    // public static method to set wallet amount with identifier
    public static function setWalletAmountWithIdentifier($id, $newAmount) {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        // if connection is set
        if ($connection) {
            // writing / executing query on wallet insertion
            $connection->query('UPDATE wallet SET bet_coin_amount = "' . $newAmount . '" WHERE identifier = (SELECT wallet_id FROM person WHERE identifier = "' . $id . '")');
        }
    }
}