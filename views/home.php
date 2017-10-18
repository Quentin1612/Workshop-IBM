<?php
    include_once("../Managers/SessionManager.php");

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
                <li><a href="http://localhost/Workshop-IBM/views/home.php">Home</a></li>
                <li><a href="http://localhost/Workshop-IBM/views/diceGame.php">Jeu de dès 1 vs 1</a></li>
                <li><a href="http://localhost/Workshop-IBM/views/mabourse.php">Mon Portefeuille</a></li>
            </ul>
        </nav>

        <!-- One -->
        <section id="one" class="wrapper style2">

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