<?php 


session_start();

global $pdo;
try{
    $pdo = new PDO("mysql:dbname=dark-diary;host=localhost","root","88488263");
}catch(PDOexception $e){
	echo "ERRO: " . $e->getMessage();
	exit;
}


 ?>