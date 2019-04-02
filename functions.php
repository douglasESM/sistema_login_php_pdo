<?php
	/**
	*Conecta com o MySQL usando PDO
	*/
	FUNCTION db_connect()
	{
		$PDO = new PDO('mysql:host=' .DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		
		return $PDO;
	}
	
	/**
	*Cria o hash da senha, usando MD5 e SHA-1
	*A função make_hash pe parecida com o trecho que eu mostrei um pouco mais cedo. Essa função
	*apenas retorna o hash de uma string. Usaremos essa função para gerar o hash da senha digitada 
	* pelo usuário.
	*/
	function make_hash($str)
	{
		return sha1(md5($str));
	}
	
	/**
	* Verifica se o usuário está logado.
	* A função isLoggedIn verifica se o usuário está logado. Para isso, ela isa o valor de * * * logged_in no array $_SESSION. Nós vamos criar esse indice com o valor true sempre que o 
	* visitante efetuar login.
	*/
	function isLoggedIn()
	{
		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !==true)
		{
			return false;
		}
		
		return true;
	}
?>