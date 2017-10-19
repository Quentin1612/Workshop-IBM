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

<!-- Banner -->
<section class="banner full">
    <article>
        <img src="../images/picture.jpg" alt="" />
    </article>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div id="banner-wrapper">

                <legend><!-- Form Name -->
                    <div class="inscrivez-vous"><h1>Connectez-vous</h1></div>
                </legend>
                <section id="banner">

                    <form class="form-horizontal" action="../controllers/login.php" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Adresse mail</label>
                                <div class="col-md-4">
                                    <input id="textinput" required="true" name="email" placeholder="" class="form-control input-md" type="text">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">mot de passe</label>
                                <div class="col-md-4">
                                    <input id="textinput" required="true" name="password" placeholder="" class="form-control input-md" type="password">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton"></label>
                                <div class="col-md-4">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-success">Connexion</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </section>
            </div>
        </div>

        <legend><!-- Form Name -->
            <div class="inscrivez-vous"><h1>Inscrivez-vous</h1></div>
        </legend>
        <section id="banner">

            <form class="form-horizontal" action="../controllers/accountCreation.php" method="POST">
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nom</label>
                        <div class="col-md-4">
                            <input id="textinput" name="familyName" placeholder="" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Prenom</label>
                        <div class="col-md-4">
                            <input id="textinput" name="firstName" placeholder="" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Adresse mail</label>
                        <div class="col-md-4">
                            <input id="textinput" name="email" placeholder="" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="password" placeholder="" class="form-control input-md" type="password">

                        </div>
                    </div>

                    </br>
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