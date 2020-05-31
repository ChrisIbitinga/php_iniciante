<?php

include 'servico/servicoCategoriaCompetidor.php';
include 'servico/servicoMensagemSessao.php';
include 'servico/servicoValidacao.php';

$nome = $_POST['nome'];
$idade =$_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('Location: index.php');








