<?php
include_once("../Managers/SessionManager.php");
include_once("../Managers/WalletManager.php");

if(session_status() == 1) {
    session_start();
}

$credit = WalletManager::getWalletAmountWithIdentifier($_SESSION["id"]);

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
    </nav>

    <!-- One -->
    <section id="one" class="wrapper style2">

        <div class="inner">
            <div class="grid-style">
                <div id="banner-wrapper" style="width: 100%">
                    <legend><!-- Form Name -->
                        <div class="mon-portefeuille"><h1 style="font-size: 30px;">Mon portefeuille</h1></div>
                    </legend>

                    <section id="banner">
                        <table style="width: 100%">
                            <tr>
                                <th>
                                    <span>Mon crédit BetCoin</span>
                                </th>
                                <th>
                                    <span>Taux de change</span>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <span>
                                        <?php
                                            echo $credit;
                                        ?>
                                    </span>
                                </th>
                                <th>
                                    <span>1 € = 1 BetCoin</span>
                                </th>
                            </tr>
                        </table>

                        <button id="addCreditButton">Créditer mon compte de BetCoin</button>

                        <form id="addCreditForm" class="form-horizontal addCreditForm" style="display: none" action="../controllers/addCredit.php" method="POST">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Montant à créditer</label>
                                    <div class="col-md-4">
                                        <input id="textinput" required="true" name="amountToAdd" placeholder="" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-success">Valider</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </section>
                </div>
            </div>
        </div>

        <div class="copyright">
            &copy; CasinOnline
        </div>

        <!-- Scripts -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.scrollex.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="application/javascript">
            var addCreditButton = document.getElementById("addCreditButton");
            var addCreditForm = document.getElementById("addCreditForm");

            addCreditButton.addEventListener('click', function() {
                if(addCreditForm.style.display == 'none') {
                    addCreditForm.style.display = 'block';
                } else {
                    addCreditForm.style.display = 'none';
                }
            });
        </script>
    </section>
    </body>
    </html>
    <?php
}
?>