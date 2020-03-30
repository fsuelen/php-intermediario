<html>

<head>
    <title>
    </title>
</head>

<body>
    <?php

if( $_SERVER['REQUEST_METHOD' === 'POST']){
// $texto = filter_input(INPUT_POST,'texto',FILTER_SANITIZE_STRING);
// $texto = filter_input(INPUT_POST,'texto',FILTER_SANITIZE_SPECIAL_CHARS);
// $texto = filter_input(INPUT_POST,'texto',FILTER_SANITIZE_NUMBER_INT);
// $texto = filter_input(INPUT_POST,'texto',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
$texto = $_POST['texto'];
// $float = ['decimal'=>','];
// if(filter_Var($texto, FILTER_VALIDATE_FLOAT,['options' => $float])){
// echo 'Float válido';
// }

}
?>

    <br>
    <form method="POST">
        Texto: <input type="text" value ="<?= $texto ?>" name="texto">
        <button>Enviar</button>
    </form>
</body>

</html>