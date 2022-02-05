<?php



	/**
	 * 
	 */
	class Painel
	{
		

		public static function entrarMenu(){
				return true;
				
		}


		public static function entrarCadastrarPessoas(){
				include("pages/Cadastrar_Pessoas.php");
				
		}

		public static function idPessoa($id){
			if($id == null){
				return false;
			}

			 return true;
		} 

		
				
		


		
		
	}

	

?>