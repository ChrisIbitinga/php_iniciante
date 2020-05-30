<?php

session_start();


$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolecente";
$categorias[] = "Adulto";


$nome = $_POST['nome'];
$idade =$_POST['idade'];

// var_dump($nome);
// echo '<br>';
// var_dump($idade);


if(empty($nome)):
    $_SESSION['mensagen-de-erro'] = 'O nome não pode ser vazio !!!';
    header('Location: index.php');
    return;
endif;
if(strlen($nome) <= 2 or strlen($nome) >= 40):
 $_SESSION['mensagen-de-erro'] = 'O nome deve conter pelo menos 3 caracteres e no máximo 23 caracteres !!!';
header('Location: index.php');
return;
endif;
if(!is_numeric($idade)):
    $_SESSION['mensagen-de-erro'] = 'O campo idade deve ser preenchido apenas com números !!!';
    header('Location: index.php');
    return;
endif;


if($idade <= 12 && $idade >= 1):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Infantil'):
            $_SESSION['mensagen-de-sucesso'] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
           header('Location: index.php');
           return;
       endif;
   endfor;
elseif($idade >= 13 && $idade <= 17):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Adolecente'):
            $_SESSION['mensagen-de-sucesso'] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
         header('Location: index.php');
         return;
     endif;
 endfor;
elseif($idade >= 18):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Adulto'):
            $_SESSION['mensagen-de-sucesso'] = 'O nadador '.$nome. ' compete na categoria ' .$categorias[$i];
          header('Location: index.php');
      endif;
  endfor;
else:
    $_SESSION['mensagen-de-sucesso'] = 'Idade não corresponde a uma categoria!';
    header('Location: index.php');
    return;
endif;








