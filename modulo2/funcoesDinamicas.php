<?php 
$string = 'valor';
$$string = 10;

function func1($parm)
{
    echo'função1 com par: '.$parm;
}
function func2($parm){
    echo "funcao2 com par: ".$parm;
}

$minha_str = 'func1';
$outra_str = 'func2';

$minha_str('qualquer coisa aqui');
echo'<br>';
$outra_str('qualquer coisa aqui tbm');