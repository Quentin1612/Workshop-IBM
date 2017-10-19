<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 19/10/2017
 * Time: 13:41
 */

// TODO: mettre à jour le portefeuille des deux parieurs suivants les règles suivantes:
// si l'un des deux parieurs a le bon numéro -> il est crédité de 3 BetCoins, l'autre est débité
// si aucun de deux ne trouve le numéro, leurs comptes ne sont pas débités
// dans le cas où l'un des deux a gagné -> mettre à jour leurs portefeuilles avec les méthodes getWalletAmount pour récupèrer
// son solde et setWalletAmount en lui passant l'id de l'utilisateur ($_SESSION['id']) et le nouveau solde calculé (la manche coûte 3 BetCoins)

?>