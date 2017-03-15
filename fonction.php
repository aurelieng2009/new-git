<?php

function connectBdd(){
	try{
		$bdd = new PDO("mysql:dbname=aen;host=localhost","root","");
	}catch(Exception $e){
		die("Erreur: ".$e->getMessage());
	}
	return $bdd;
}