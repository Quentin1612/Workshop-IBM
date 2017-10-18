<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/10/2017
 * Time: 14:27
 */

include_once("../Managers/WalletManager.php");
include_once("../Managers/PersonManager.php");

session_start();

$id = $_SESSION["id"];
$amountToAdd = $_POST["amountToAdd"];
$actualAmount = WalletManager::getWalletAmountWithIdentifier($id);
$newAmount = $actualAmount + $amountToAdd;

WalletManager::setWalletAmountWithIdentifier($id, $newAmount);

include("../views/portefeuille.php");

?>