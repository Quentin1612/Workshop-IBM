<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Teach me</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="index.php" id="logo"><img src="images/logo.png"></a></h1>
							<p>Trouvez le professeur particulier qu'il vous faut</p>
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li> 
								<a href="#">Annonces</a>
							<ul>
								<li><a href="depotannonce.php">Déposer une annonce</a></li>
								<li><a href="visuannonce.php">Voir mes annonces</a></li>
								
							</ul>
						</li>
						
						<li>
							<a href="#">Offres</a>
							<ul>
								<li><a href="depotoffre.php">Déposer une offre</a></li>
								<li><a href="visuoffre.php">Voir mes offres</a></li>
								
							</ul>
						</li>
						<li><a href="right-sidebar.html">S'inscrire</a></li>
						<li class="current"><a href="seconnecter.php">Se connecter</a></li>
					</ul>
				</nav>

					<!-- Banner -->
				<div id="banner-wrapper">
				<legend><!-- Form Name -->
<div class="inscrivez-vous"><h1>Connectez-vous</h1></div>
</legend>
					<section id="banner">
						
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adresse mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">mot de passe</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">
    
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

<div id="banner-wrapper">
<legend><!-- Form Name -->
<div class="inscrivez-vous"><h1>Inscrivez-vous</h1></div>
</legend>
					<section id="banner">
						<form class="form-horizontal" action="insert_profil.php" method="post">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nom</label>  
  <div class="col-md-4">
  <input id="textinput" name="nom" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prenom</label>  
  <div class="col-md-4">
  <input id="textinput" name="prenom" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Sexe</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="sexe" id="radios-0" value="0" checked="checked" type="radio">
      Masculin
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="sexe" id="radios-1" value="1" type="radio">
      Feminin
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Téléphone</label>  
  <div class="col-md-4">
  <input id="textinput" name="telephone" placeholder="" class="form-control input-md" type="text">
    
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
    <input id="passwordinput" name="mdp" placeholder="" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Secteur</label>
  <div class="col-md-4">
    <!-- <select id="selectbasic" name="selectbasic" class="form-control">
    </select> -->

    <select name="secteur">
                <?php
				$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u990393591_sousc;charset=utf8', 'u990393591_acces', 'EPSInov');
								try
				{
					$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u990393591_sousc;charset=utf8', 'u990393591_acces', 'EPSInov');
				}
				catch (Exception $e)
				{
				        die('Erreur : ' . $e->getMessage());
				}


				$requete = "SELECT * FROM secteur;";

				$reponse = $bdd->query($requete);

				while ($secteur = $reponse->fetch())
				{
					?>
					<option value="<?php echo $secteur['ID_secteur'] ?>"> <?php echo $secteur['intitule_secteur']; ?></option>
				<?php
				}

				$bdd = null;

				?>
            </select>

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

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>