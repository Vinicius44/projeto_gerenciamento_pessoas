<?php

	

	$auloload = function($class){
		include("classes/".$class.".php");
	};

	spl_autoload_register($autoload);
	
    define("INCLUDE_PATH", "http://localhost/Projeto_GerenciamentoPessoas/");

?>