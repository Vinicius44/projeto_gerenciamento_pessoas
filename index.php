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

		$url = isset($_GET["url"]) ? $_GET["url"] : "menu";


	?>

	

	<?php

		

		switch ($url) {

			case "menu":
				include("pages/Menu.php");
				break;

			case 'Cadastrar_Pessoas':
				
				include("pages/Cadastrar_Pessoas.php");

				break;

			case 'Modificar_Pessoas':
				include("pages/Modificar_Pessoas.php");
				break;

			case 'Excluir_Pessoas':
				include("pages/Excluir_Pessoas.php");
				break;

			case "Ver_Pessoas":
				include("pages/Ver_Pessoas.php");
				break;




			default:
				include("pages/Menu.php");
				break;
		}

	?>




</body>
</html> 

