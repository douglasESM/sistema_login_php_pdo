<?php
	//inicia a sessão
	session_start();
	
	//muda o valor de logged_in para falso
	$_SESSION['logged_in'] = false;
	
	//finaliza a sessão
	header('Location: index.php');