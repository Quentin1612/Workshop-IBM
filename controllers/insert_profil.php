<?php 

$mdpHASH = (md5($_POST['mdp']));

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
// $date_naissance = $_POST['date_naissance'];
$date_naissance = "1994-02-15";
$sexe = $_POST['sexe'];
// $note = $_POST['note'];
$note = 0;
$telephone = $_POST['telephone'];
$admin = 0;
$secteur = $_POST['secteur'];
// $taux_horaire = $_POST['taux_horaire'];
$taux_horaire = 0;

try
{
	$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u990393591_sousc;charset=utf8', 'u990393591_acces', 'EPSInov');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// $mdpHASH = (md5('gagi'));				HARDCODE

// $prenom = "prenom";
// $nom = "nom";
// $email = "email@test.com";
// $date_naissance = "1994-12-26";
// $sexe = "1";
// $note = "4";
// $telephone = "0770306458";
// $admin = "0";
// $secteur = "5";
// $taux_horaire = "17";


$reqINSERT = $bdd->prepare('INSERT INTO profil (nom, prenom, date_naissance, sexe, note, mail, telephone, mdp, admin, taux_horaire, ID_secteur) VALUES (:nom, :prenom, :date_naissance, :sexe, :note, :mail, :telephone, :mdpHASH, :admin, :taux_horaire, :secteur)');

$reqINSERT->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'date_naissance' => $date_naissance,
	'sexe' => $sexe,
	'note' => $note,
	'mail' => $email,
	'telephone' => $telephone,
	'mdpHASH' => $mdpHASH,
	'admin' => $admin,
	'taux_horaire' => $taux_horaire,
	'secteur' => $secteur
	));

echo 'INSERT CORRECT sur ';
echo $bdd;

//REDIRECT A FAIRE

?>