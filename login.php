<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	if($login=='adriano' and $senha =='123')
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.php');			
	}
	else
	{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		header('location:index.html');
	}


?>
