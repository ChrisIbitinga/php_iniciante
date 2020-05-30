<?php


$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolecente";
$categorias[] = "Adulto";


$nome = 'Christian';
$idade = 6;


if($idade <= 12):
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








