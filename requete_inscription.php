<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$prenom = htmlspecialchars($_POST["prenom"]);
$nom = htmlspecialchars($_POST["nom"]);
$age = htmlspecialchars($_POST["age"]);
$mot_de_passe = htmlspecialchars(password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT));
$adresse_postale = htmlspecialchars($_POST["adresse_postale"]);
$adresse_mail = htmlspecialchars($_POST["adresse_mail"]);
$id_ville = htmlspecialchars($_POST["id_ville"]);


var_dump($id_ville);
var_dump($prenom);
var_dump($nom);
var_dump($age);
var_dump($mot_de_passe);
var_dump($adresse_postale);
var_dump($adresse_mail);

$inserer = $bdd->prepare('INSERT INTO client (prenom, nom, age, mot_de_passe, adresse_postale, adresse_mail, id_ville) VALUES(:prenom, :nom, :age,  :mot_de_passe, :adresse_postale, :adresse_mail, :id_ville)');

$inserer->execute(array(
             'prenom' => $prenom,
           'nom'=> $nom,
            'age' => $age,
       'mot_de_passe'=> $mot_de_passe,
    'adresse_postale' => $adresse_postale,
     'adresse_mail'=> $adresse_mail,
    'id_ville' => $id_ville
));

header('Location: home_page.php');
  exit();