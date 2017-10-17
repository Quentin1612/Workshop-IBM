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
        $walletIdentifier = self::getLastWalletId() + 1;

        if ($connection) {
            $request = "INSERT INTO wallet (identifier, bet_coin_amount) VALUES(" . $walletIdentifier . ", " . $amount . ")";
            echo $request . "\n";
            $connection->query($request);
        }
    }

    public static function getLastWalletId() {
        $connection = DatabaseConnectionManager::getInstance();
        $answer = null;

        if ($connection) {
            $answer = $connection->query('SELECT MAX(identifier) FROM wallet')->fetch();
        }

        return $answer[0];
    }
}