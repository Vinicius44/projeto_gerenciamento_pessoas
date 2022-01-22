<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gerenciamento de Pessoas</title>

	<!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
	<!---->

	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>/css/style.css">
</head>
<body>


	<?php

		$url = isset($_GET["url"]) ? $_GET["url"] : "home";


	?>

	<div class="container">
	<h1>Gerenciamento de Pessoas</h1>
	<ul>
		<li><a href="Cadastrar_Pessoas">Cadastrar Pessoas</a></li>
		<li><a href="Modificar_Pessoas">Modificar Pessoas</a></li>
		<li><a href="Excluir_Pessoas">Excluir Pessoas</a></li>
		<li><a href="Ver_Pessoas">Ver Pessoas</a></li>
	</ul>
	</div><!--container-->

	<?php

		if($url == "Cadastrar_Pessoas")

		switch ($url) {
			case 'Cadastrar_Pessoas':
				include("pages/Cadastrar_Pessoas.php");
				break;
			
			default:
				# code...
				break;
		}

	?>




</body>
</html>