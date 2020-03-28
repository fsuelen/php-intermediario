<?php

// $nomes = [
//     '_Eduardo','_Suelen','Miflny_','Roberto_'
// ];
// $filtro = preg_grep('#^_#', $nomes);

// var_dump($filtro);

// preg_match_all('#../../....#','26/03/2020 27/03/2020', $mach);
// var_dump($mach);

$idade = 28;
$texto = <<<STRING
nome: Suelen <br>
idade: $idade <br>
data_cad: 20/02/2015 <br>
STRING;

echo$texto.'<br>';
// preg_match_all('#(?P<chave>.+): (?P<valor>.+) #',$texto, $mach, PREG_SET_ORDER);
// var_dump($mach);




$textoEmacumbado = preg_replace_callback('#(\d{2})/(\d{2})/(\d+)#',function($match){
    return "{$match [3]}-{$match[2]}-{$match[1]}";
},$texto);



echo $textoEmacumbado;