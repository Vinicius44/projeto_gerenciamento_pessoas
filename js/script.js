
	

	var inputTextCPF = document.getElementById("inputTextVerCpf");
	var inputButtonCPF = document.getElementById("atualizarModificar");
	
	desabilitarCPF();

	function desabilitarCPF(){

		if(inputButtonCPF == null){
			document.getElementById("olharModificar").disabled = false;
		}else{
			document.getElementById("olharModificar").disabled = true;
			inputTextCPF.disabled = true;
		}
				
	}
		
	


	

		
