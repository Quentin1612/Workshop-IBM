<?php
    include_once("../Managers/SessionManager.php");
    include_once("../Managers/WalletManager.php");

    // starting session
    session_start();

    // retrieving wallet credit
    $credit = WalletManager::getWalletAmountWithIdentifier($_SESSION["id"]);

    // checking session before displaying content
    if(SessionManager::checkSession()) {
        ?>
        <!DOCTYPE HTML>
        <html>

        <head>
            <title>Hielo by TEMPLATED</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="../assets/css/main.css" />
        </head>
        <body>

        <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="../views/home.php">CasinOnline<span> by Groupe 2</span></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="/Workshop-IBM/views/home.php">Accueil</a></li>
                <li><a href="/Workshop-IBM/views/diceGame.php">Jeu de dès 1 vs 1</a></li>
                <li><a href="/Workshop-IBM/views/portefeuille.php">Portefeuille</a></li>
                <li><a href="/Workshop-IBM/controllers/disconnection.php">Déconnexion</a></li>
            </ul>
                <div class="copyright">
            &copy; CasinOnline
        </div>
        </nav>

        <!-- One -->
        <section id="one" class="wrapper style2">

            <div class="dice-game-container">
                <h3>Jeu de dès 1 vs 1</h3>
                <h1>Règles du jeu</h1>

                <table>
                    <tr>
                        <th>
                            <span>Mise initiale</span>
                        </th>
                        <th>
                            <span>Nombre de manches</span>
                        </th>
                        <th>
                            <span>Nombre de participants</span>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <span>3 BetCoins</span>
                        </th>
                        <th>
                            <span>1</span>
                        </th>

                        <th>
                            <span>2</span>
                        </th>
                    </tr>
                </table>

                <h1>Mes informations</h1>

                <table>
                    <tr>
                        <th style="text-align: center;">
                            <span>Solde de BetCoin</span>
                        </th>
                    </tr>
                    <tr>
                        <th id="betCoinCredit" style="text-align: center;">
                            <span><?php echo $credit; ?></span>
                        </th>
                    </tr>
                </table>

                <button id="new-game">Lancer une partie</button>

                <div id="dice-game" style="display: none;" class="dice-game">
                    <div class="dice-container">
                        <img id="dice-1" style="z-index: 1" class="dice-picture" src="../images/des-1.jpg">
                        <img id="dice-2" style="z-index: 2" class="dice-picture" src="../images/des-2.jpg">
                        <img id="dice-3" style="z-index: 3" class="dice-picture" src="../images/des-3.jpg">
                        <img id="dice-4" style="z-index: 4" class="dice-picture" src="../images/des-4.jpg">
                        <img id="dice-5" style="z-index: 5" class="dice-picture" src="../images/des-5.jpg">
                        <img id="dice-6" style="z-index: 6" class="dice-picture" src="../images/des-6.jpg">
                    </div>

                    <div id="banner-wrapper">
                        <section id="banner">
                            <form id="diceBetForm" class="form-horizontal" action="../controllers/walletUpdateAfterGame.php?result=" method="POST">
                                <div class="playerInfoContainer first">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="diceBet">Je mise sur</label>
                                            <div class="col-md-4">
                                                <input id="diceBet" required="true" name="diceBet" placeholder="" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <button id="finishGame" type="submit" style="display: none;">Terminer</button>
                                </div>
                                <div class="playerInfoContainer">
                                    <div class="form-horizontal" >
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="diceBet">Mise du parieur adverse</label>
                                                <div class="col-md-4">
                                                    <input id="opponentBet" disabled="true" placeholder="" class="form-control input-md" type="text">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                            <button id="launchDiceGame">Valider</button>
                        </section>

                        <table id="result-table" class="result-table">
                            <tr>
                                <th>
                                    <span>Numéro de la manche</span>
                                </th>
                                <th>
                                    <span>BetCoins misés</span>
                                </th>
                                <th>
                                    <span>Crédit BetCoin restant</span>
                                </th>
                                <th>
                                    <span>Résultat</span>
                                </th>
                            </tr>
                            <tr>
                                <th id="firstColumn"></th>
                                <th id="secondColumn"></th>
                                <th id="thirdColumn"><?php echo $credit - 3; ?></th>
                                <th id="fourthColumn"></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Scripts -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
            <script src="../assets/js/diceGame.js"></script>

            <script type="text/javascript">
                var newGameButton = document.getElementById("new-game");
                var diceGame = document.getElementById("dice-game");

                newGameButton.addEventListener('click', function() {
                    if(diceGame.style.display == 'none') {
                        diceGame.style.display = 'block';
                    } else {
                        diceGame.style.display = 'none';
                    }
                });
            </script>

            <script type="application/javascript">
                var launchDiceGameButton = document.getElementById("launchDiceGame");
                var diceBetField = document.getElementById("diceBet");
                var diceGameIsLaunched = false;

                launchDiceGameButton.addEventListener('click', function() {
                    if(!diceGameIsLaunched) {
                        diceBetField.disabled = true;
                        setOpponentBet();
                        launchDiceGameButton.style.display = 'none';
                        diceGameIsLaunched = true;
                        launchDiceGame();
                    }
                });
            </script>
        </section>
        </body>
        </html>
        <?php
    }
?>