<?php 
$dados = [
'nome' => 'Suelen',
'email'=> 'suhelen.games@gmail.com',
'telefone'=>'(54)9 9643-6023',
'site'=>'http://www.suelensilva.website'

];

extract($dados, EXTR_PREFIX_ALL,'ext');

echo $ext_nome.'<br>';
echo $ext_email.'<br>';
echo $ext_telefone.'<br>';
echo $ext_site;