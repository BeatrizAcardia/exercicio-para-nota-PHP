<?php
$turma = isset($_GET['turma']) ? $_GET['turma'] : '';

$turmas = array(
    "INFD3" => array(
        "16117" => "Amanda Oliveira Santos",
        "16557" => "Bruno Penteado Carrara",
        "16563" => "Cibele Souza de Almeida",
        "16119" => "Danilo Rafhael",
        "16121" => "Érika Cavalcanti"
    ),
    "CTI2" => array(
        "17427" => "Diogo Vinicius Oliveira",
        "17428" => "Douglas José Figueiredo",
        "17429" => "Emily Da Silva Farias"
    ),
    "INFN3" => array(
        "16227" => "Andre Ricardo Martins",
        "16573" => "Andre Schinor Mena Peres",
        "16228" => "Beatriz Santos de Mello",
        "16229" => "Caio Ramos Ballarin",
        "16231" => "Carlos Eduardo Lima"
    )
);

if (array_key_exists($turma, $turmas)) {
    echo "Alunos da turma $turma:<br>";
    foreach ($turmas[$turma] as $matricula => $nome) {
        echo "Matrícula: $matricula - Nome: $nome<br>";
    }
} else {
    echo "Turma não encontrada.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>