<?php 

session_start();

// Setando  messagem de erro na sessao
function setarMensagemErro(string $mensagem) : void 
{
	$_SESSION['mensagem-de-erro'] = $mensagem;
}

// Obtendo mensagem de erro
function obterMensagemErro() : ?string
{
	if(isset($_SESSION['mensagem-de-erro']))
	{
		return $_SESSION['mensagem-de-erro'];
	}
	return null;
}

// Removendo mensagem de erro
function removeMensagemErro() : void
{
	if(isset($_SESSION['mensagem-de-erro']))
	{
		unset($_SESSION['mensagem-de-erro']);
	}

}




// Setando  messagem de sucesso na sessao
function setarMensagemSucesso(string $mensagem) : void 
{
	$_SESSION['mensagem-de-sucesso'] = $mensagem;
}

// Obtendo mensagem de sucesso
function obterMensagemSucesso() : ?string
{
	if(isset($_SESSION['mensagem-de-sucesso']))
	{
		return $_SESSION['mensagem-de-sucesso'];
	}

	return null;
}

// Removendo mensagem de sucesso
function removeMensagemSucesso(): void
{
	if(isset($_SESSION['mensagem-de-sucesso']))
	{
	    unset($_SESSION['mensagem-de-sucesso']);
	}
}







?>