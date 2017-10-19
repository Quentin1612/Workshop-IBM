<?php

    if(session_status() == 1) {
        session_start();
    }

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
    <div class="copyright">
        &copy; CasinOnline
    </div>
</nav>

<!-- One -->
<section id="one" class="wrapper style2">

    <div class="inner">
        <h3><?php echo $errorMessage; ?></h3>
        <h3>Cliquez <a href="../views/index.php">ici</a> pour vous rendre sur la page de connexion / inscription</h3>
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