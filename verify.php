<?php
require "init.php";

date_default_timezone_set('Etc/UTC');

$error = FALSE;

if( isset($_POST['surname']) &&
	isset($_POST['name']) &&
	isset($_POST['pseudo']) &&
	isset($_POST['mail']) &&
	isset($_POST["password"]) &&
	isset($_POST["password_verif"]) &&
	isset($_POST["cgu"]) ){

	$_POST['name'] = trim($_POST['name']);
	$_POST['surname'] = trim($_POST['surname']);
	$_POST['pseudo'] = trim($_POST['pseudo']);
	$_POST['mail'] = strtolower($_POST['mail']);

	if($error){
		header("Location: register.php");
		echo "salut";
	}
	else{
		$bdd = connectBdd();
		$access_token=md5(uniqid());
	}

	$query = $bdd->prepare(" INSERT INTO member (nom, prenom, pseudo, mail, password, access_token)
	VALUES ( :surname, :name, :pseudo, :mail, :password, :access_token)");

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query->execute([
			"surname"=>$_POST['surname'],
			"name"=>$_POST['name'],
			"pseudo"=>$_POST['pseudo'],
			"mail"=>$_POST['mail'],
			"password"=>$password,
			"access_token"=>$access_token
		]);
	header("Location: index.php");
}