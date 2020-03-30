<?php 
$alunos = [
    [
    'id' => 1,
    'nome' => 'Pedro',
    'cidade' => 'São Paulo'
    ],
    [
        'id'=>2,
        'nome' => 'Ana',
        'cidade' => 'São Paulo'

    ],
    [
        'id' => 3,
        'nome' => 'carla',
        'cidade' => 'Curitiba'
    ],
    [
        'id' => 4,
        'nome'=> 'Marcos',
        'cidade'=> 'Recife'
    ]
];

$dom = new DOMDocument('1.0','UTF-8');

$curso = $dom->createElement('curso');

foreach($alunos as $aluno ){
settype($aluno,'object');
$alunotag = $dom->createElement('aluno');
$alunotag->setAttribute('id',$value->id);
$alunotag->appendChild($dom->createElement('nome',$aluno->nome));
$alunotag->appendChild($dom->createElement('cidade',$aluno->cidade));
$curso->appendChild($alunotag);

}
$dom->appendChild($curso);
$dom->formatOutput = true;
echo $dom->save('alunos.xml');