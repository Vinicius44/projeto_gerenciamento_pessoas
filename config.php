<?php

	session_start();
	

	$autoload = function($class){
		include("classes/".$class.".php");
	};

	spl_autoload_register($autoload);
	
    define("INCLUDE_PATH", "http://localhost/Projeto_GerenciamentoPessoas/");
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD",  "");
    define("DATABASE", "db_pessoas");

?>