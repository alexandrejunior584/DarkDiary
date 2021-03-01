<?php  

require 'config.php';

if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
} 


require 'classes/diario-class.php';

$a = new Diario();

if(isset($_GET['id']) && !empty($_GET['id'])){
	$a->excluirDiario($_GET['id']);
}

header("Location: meu-diario.php");

?>