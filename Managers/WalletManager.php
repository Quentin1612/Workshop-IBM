<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/10/2017
 * Time: 13:59
 */

class WalletManager {
    public static function insertNewWallet($amount) {
        $connection = DatabaseConnectionManager::getInstance();
        $walletIdentifier = self::getNumberOfWallets() + 1;

        if ($connection) {
            $request = $connection->prepare('INSERT INTO person VALUES(?, ?)');
            $request->execute(array($walletIdentifier, $amount));
        }
    }

    public static function getNumberOfWallets() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        if ($connection) {
            $answer = $connection->query('SELECT COUNT(identifier) FROM wallet')->fetch();
        }
        
        return $answer[0];
    }
}