<?php
    include_once("../Managers/SessionManager.php");
    include_once("../Managers/PersonManager.php");

    if(session_status() == 1) {
        session_start();
    }

    $nom = PersonManager::getName($_SESSION["id"]);

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
            <div class="logo"><a href="index.php">CasinOnline<span> by Groupe 2</span></a></div>
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
                        <div class="mon-portefeuille">
                            <h1 style="font-size: 30px;">Bonjour 
                                <?php 
                                    echo $nom; 
                                ?>
                                ! &hearts;
                            </h1>
                        </div>
                    </legend>

                    <section id="banner">
                        <table style="width: 100%">
                            <tr>
                                <th>
                                    <span>Vos précédentes parties</span>
                                </th>
                            </tr>
                        </table>
                    </section>
                </diV>
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
        </section>
        </body>
        </html>
        <?php
    }
?>