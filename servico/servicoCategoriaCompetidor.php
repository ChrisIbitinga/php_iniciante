<?php 




// Função para definir categoria do competidor
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

	$categorias = [];
	$categorias[] = "Infantil";
	$categorias[] = "Adolecente";
	$categorias[] = "Adulto";

	removeMensagemErro();
	if(validaNome($nome) && validaIdade($idade))
	{
		if($idade <= 12 && $idade >= 8)
		{
			for($i = 0; $i < count($categorias); $i++)
			{
				if($categorias[$i] == 'Infantil')
				{
					setarMensagemSucesso($mensagem = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
					return null;
				}
			}
		}
		elseif ($idade >= 13 && $idade <= 17)
		{
			for($i = 0; $i < count($categorias); $i++)
			{
				if($categorias[$i] == 'Infantil')
				{
					setarMensagemSucesso($mensagem ='O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
					return null;	
				}
			}

		}
		elseif ($idade >= 18)
		{
			for($i = 0; $i < count($categorias); $i++)
			{
				if($categorias[$i] == 'Adulto')
				{
					setarMensagemSucesso($mensagem = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i]);
					return null;
				}
			}
		}
		elseif($idade < 8)
		{
			removeMensagemSucesso();
			setarMensagemErro($mensagem = 'O competidor precisa ter pelo menos 8 anos para ser cadastrado.');
			return null;
		}
	}
	else
	{
		removeMensagemSucesso();
		return obterMensagemErro()   ;
	} // fevhando if de teste para nome e idade 


}// FEchando função















?>
