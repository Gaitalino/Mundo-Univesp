<?php
	session_start();
    if($_SESSION['autoriza_login'] <> 1){
        header('Location:login.php?erro=2');
    }

	$username = "root";
	$password = "";
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=mundo_univesp', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	}
	catch(Exception $e){
		echo "Houve um erro por favor contate o suporte";
	}
	
	
?>
