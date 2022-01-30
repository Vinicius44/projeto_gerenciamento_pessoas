<div class="containerEntrar">
	<h2 class="entrar">Ver Pessoas</h2>

	<form method="post" enctype="multipart/form-data">
	
		<div class="w100">
		<div><label>CPF da pessoa que quer olhar: </label></div>
		<div><input type="text" name="cpf"/></div>
		</div><!--w100-->


		<input type="submit" name="acao" value="Olhar">
	</form>

		<div class="flex-tabela">
			<div><h5>ID</h5></div>
			<div><h5>NOME</h5></div>
			<div><h5>RG</h5></div>
			<div><h5>CPF</h5></div>
			<div><h5>FOTO</h5></div>
		</div>

		<div class="tabela-var">
			<div><h5>1</h5></div>
			<div><h5>Vinicius</h5></div>
			<div><h5>123</h5></div>
			<div><h5>321</h5></div>
			<div><h5>vinicius.jpg</h5></div>
		</div>

		<div class="tabela-var">
			<div><h5>1</h5></div>
			<div><h5>Vinicius</h5></div>
			<div><h5>123</h5></div>
			<div><h5>321</h5></div>
			<div><h5>vinicius.jpg</h5></div>
		</div>
		


	<?php

		if(isset($_POST["acao"])){
			$cpf = $_POST["cpf"];

			$sql = Mysql::conectar()->prepare("SELECT FROM `cadastrar` WHERE `cpf` = ?");
			$sql->execute(array($cpf));

			if($sql->rowCount() == 1){
				$info = $sql->fetch();

				echo "<h5 class='textoAlert'>A pessoa foi excluida com sucesso!</h5>";
			}else{
				echo "<h5 class='excluir'>A pessoa não foi encontrada, tente novamente.</h5>";
			}


		}


	?>