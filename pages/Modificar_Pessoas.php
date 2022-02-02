<div class="containerEntrar">
	<h2 class="entrar">Atualizar Pessoas</h2>

	<form method="post" enctype="multipart/form-data">
	
		<div class="w100">
		<div><label>CPF da pessoa que quer atualizar: </label></div>
		<div><input type="text" name="cpf"/></div>
		</div><!--w100-->


		<input type="submit" name="acao" value="Olhar" />

		<?php

		$id = 0;

		if(isset($_POST["acao"])){
			$cpf = $_POST["cpf"];

			$sql = Mysql::conectar()->prepare("SELECT * FROM `cadastrar` WHERE `cpf` = ?");
			$sql->execute(array($cpf));

			if($sql->rowCount() == 1){
				$info = $sql->fetch();
				$id = $info["id"];



				echo "<div class='w100'>
					<div><label>Nome: </label></div>
					<div><input type='text' name='nome' required='' value='".$info["nome"]."' /></div>
					</div><!--w100-->

					<div class='w100'>
					<div><label>RG: </label></div>
					<div><input type='text' name='rg' required='' value='".$info["rg"]."'/></div>
					</div><!--w100-->

					<div class='w100'>
					<div><label>CPF: </label></div>
					<div><input type='text' name='cpf' required='' value='".$info["cpf"]."'/></div>
					</div><!--w100-->


					<input type='submit' name='atualizar' value='Atualizar'/>


					";

			}else{
				echo "<h5 class='excluir'>A pessoa não foi encontrada, tente novamente.</h5>";
			}


		}



		if(isset(($_POST["atualizar"]))){
								$nome = $_POST["nome"];
								$rg = $_POST["rg"];
								$cpf = $_POST["cpf"];
								

								$sql = Mysql::conectar()->prepare("UPDATE cadastrar SET nome = ?, rg = ?, cpf = ? WHERE id = ?");


								$sql->execute(array($nome,$rg,$cpf,$id));

								echo "<h5 class='excluir'>A pessoa foi cadastrada com sucesso!</h5>";
							}


	?>
	</form>

		

		

		
		


