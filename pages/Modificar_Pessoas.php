


<div class="containerEntrar">
	<h2 class="entrar">Atualizar Pessoas</h2>

	<form method="post" enctype="multipart/form-data">
	
		<div class="w100">
		<div><label>CPF da pessoa que quer atualizar: </label></div>
		<div><input class="verCpf" type="text" name="verCpf"/></div>
		</div><!--w100-->



		<input id="olharAtualizar" type="submit" name="acao" value="Olhar" />


		

		<?php


		

		if(isset($_POST["acao"])){
			$cpf = $_POST["verCpf"];

			$sql = Mysql::conectar()->prepare("SELECT * FROM `cadastrar` WHERE `cpf` = ?");
			$sql->execute(array($cpf));


			if($sql->rowCount() == 1){
				$info = $sql->fetch();
				$id = $info["id"];
				$nome = $info["nome"];
				$cpf = $info["cpf"];
				$rg = $info["rg"];



				echo "
					<div class='w100'>
					<div><label>ID: </label></div>
					<div><input type='text' name='id' required='' value='".$id."' readonly/></div>
					</div><!--w100-->

					<div class='w100'>
					<div><label>Nome: </label></div>
					<div><input type='text' name='nome' required='' value='".$nome."' /></div>
					</div><!--w100-->

					<div class='w100'>
					<div><label>RG: </label></div>
					<div><input type='text' name='rg' required='' value='".$rg."'/></div>
					</div><!--w100-->

					<div class='w100'>
					<div><label>CPF: </label></div>
					<div><input type='text' name='cpf' required='' value='".$cpf."'/></div>
					</div><!--w100-->


					<input type='submit' class='atualizar' name='atualizar' value='Atualizar'/>


					";

			}else{
				echo "<h5 class='excluir'>A pessoa não foi encontrada, tente novamente.</h5>";
			}


		}



		if(isset(($_POST["atualizar"]))){
								$id = $_POST["id"];
								$nome = $_POST["nome"];
								$rg = $_POST["rg"];
								$cpf = $_POST["cpf"];
								
							

								$sql = Mysql::conectar()->prepare("UPDATE `cadastrar` SET nome = ?, rg = ?, cpf = ? WHERE id = ?");


								$sql->execute(array($nome,$rg,$cpf,$id));


								echo "<h5 class='excluir'>A pessoa foi atualizada com sucesso!</h5>";
							}


	?>
	</form>


	





		

		

		
		


