<?php
	//constantes com as credenciais de acesso ao banco MySQL
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '1234');
	define('DB_NAME', 'LOGIN_PHP');
	
	//Habilita todas as exibições de erros
	ini_set('display_erros', true);
	error_reporting(E_ALL);
	
	//inclui o arquivo de funções
	require_once 'functions.php';
?>