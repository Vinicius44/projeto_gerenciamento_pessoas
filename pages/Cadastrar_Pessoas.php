<div class="containerEntrar">
	<h2 class="entrar">Cadastrar Pessoas</h2>

	<form method="post" enctype="multipart/form-data">
		
		<div class="w100">
		<div><label>Nome: </label></div>
		<div><input type="text" name="nome"/></div>
		</div><!--w100-->

		<div class="w100">
		<div><label>RG: </label></div>
		<div><input type="text" name="rg"/></div>
		</div><!--w100-->

		<div class="w100">
		<div><label>CPF: </label></div>
		<div><input type="text" name="cpf"/></div>
		</div><!--w100-->

		<!--<div class="w100">
		<div><label>Foto: </label></div>
		<div><input type="file" name="foto" /></div>
		</div><!--w100-->

		<input type="submit" name="acao" value="Cadastrar">
	</form>

		<?php

			if(isset($_POST["acao"])){
				$nome = $_POST["nome"];
				$rg = $_POST["rg"];
				$cpf = $_POST["cpf"];
				$foto = "vinicius.png";

				$sql = Mysql::conectar()->prepare("INSERT INTO cadastrar(id, nome,rg, cpf,foto) VALUES (null, ?, ?, ?, ?) ");

				$sql->execute(array($nome,$rg,$cpf,$foto));

			}

		?>
</div>