<div class="containerEntrar">
	<h2 class="entrar">Excluir Pessoas</h2>

	<form method="post" enctype="multipart/form-data">
	
		<div class="w100">
		<div><label>CPF da pessoa que quer excluir: </label></div>
		<div><input type="text" name="cpf"/></div>
		</div><!--w100-->


		<input type="submit" name="acao" value="Excluir">
	</form>


	<?php

		if(isset($_POST["acao"])){
			$cpf = $_POST["cpf"];

			$sql = Mysql::conectar()->prepare("DELETE FROM `cadastrar` WHERE `cpf` = ?");
			$sql->execute(array($cpf));

			if($sql->rowCount() == 1){
				echo "<h5 class='textAlert'>A pessoa foi excluida com sucesso!</h5>";
			}else{
				echo "<h5 class='textAlert'>A pessoa não foi encontrada, tente novamente.</h5>";
			}


		}


	?>