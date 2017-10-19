<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/10/2017
 * Time: 14:27
 */

include_once("../Managers/WalletManager.php");
include_once("../Managers/PersonManager.php");

// starting session to be able to retrie it
session_start();

// retrieving user id in session
$id = $_SESSION["id"];

// retrieving credit to add from form
$amountToAdd = $_POST["amountToAdd"];

// retrieving wallet amount
$actualAmount = WalletManager::getWalletAmountWithIdentifier($id);

// calculating new wallet amoutn
$newAmount = $actualAmount + $amountToAdd;

// setting new person's amount credit
WalletManager::setWalletAmountWithIdentifier($id, $newAmount);

// including wallet view
include("../views/portefeuille.php");

?>