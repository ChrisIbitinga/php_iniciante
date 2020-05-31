<?php


// Validação de nomes
function validaNome(string $nome) : bool
{

	if(empty($nome))
	{
		// chamando a funçao de setar a mensagemErro
		setarMensagemErro($mensagem = 'O nome não pode ser vazio !!!');
		return false;
	}
	elseif(strlen($nome) <= 2 or strlen($nome) >= 40)
	{
		setarMensagemErro($mensagem = 'O nome deve conter pelo menos 3 caracteres e no máximo 23 caracteres !!!');
		return false;
	}
	else
	{
		return true;
	}

}


// Validação de idades 
function validaIdade(string $idade)
{

	
	if(!is_numeric($idade))
	{
		setarMensagemErro('O campo idade deve ser preenchido apenas com números !!!');
		return false;
	}else
	{
		return true;
	}
	
	
}






?>