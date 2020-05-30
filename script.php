<?php


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
    echo 'O nome não pode ser vazio.';
    return;
endif;
if(strlen($nome) <= 2 or strlen($nome) >= 40):
    echo 'O nome deve conter pelo menos 3 caracteres e no máximo 23 caracteres.';
    return;
endif;


if($idade <= 12 && $idade >= 1):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Infantil'):
           echo 'O nadador '.$nome. 'compete na categoria ' .$categorias[$i];
        endif;
    endfor;
elseif($idade >= 13 && $idade <= 18):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Adolecente'):
           echo 'O nadador '.$nome. 'compete na categoria '.$categorias[$i];
        endif;
    endfor;
elseif($idade >= 19):
    for($i = 0; $i < count($categorias); $i++):
        if($categorias[$i] == 'Adulto'):
           echo 'O nadador '.$nome. 'compete na categoria '.$categorias[$i];
        endif;
    endfor;
else:
    echo'Sem categoria indicada';
endif;








