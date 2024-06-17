<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+CO:wght@100..400&display=swap" rel="stylesheet">
    <title>Document</title>
        <style>

.playwrite-co{
  font-family: "Playwrite CO", cursive;
  font-optical-sizing: auto;
  font-weight: 20px;
  font-style: normal;
}

        .borda-total {
            margin-top: 10px;
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px; /* Espaçamento abaixo da borda */
        }

        .eco {
            margin-bottom: 10px; /* Espaçamento entre cada item */
            font-size: 18px;
        }

        .eco2{
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-bottom: 10px; /* Espaçamento entre cada item */
            font-size: 20px;
            font-weight: bold;
        }

        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #seleciona{
            font-weight: 20px;
            font-size: 25px;
        }

button {
    margin-top: 15px;
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    font-family: inherit;
    font-size: 12px; /* Reduzi o tamanho da fonte para 12px */
}

button.learn-more {
    font-weight: 600;
    color: #382b22;
    text-transform: uppercase;
    padding: 0.75em 1.25em; /* Reduzi o padding para 0.75em superior/inferior e 1.25em esquerda/direita */
    background: #fff0f0;
    border: 1px solid #b18597; /* Reduzi a largura da borda para 1px */
    border-radius: 0.5em; /* Mantive o raio da borda em 0.5em */
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
    transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
}

button.learn-more::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #f9c4d2;
    border-radius: inherit;
    -webkit-box-shadow: 0 0 0 1px #b18597, 0 0.25em 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    box-shadow: 0 0 0 1px #b18597, 0 0.25em 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    -webkit-transform: translate3d(0, 0.5em, -1em);
    transform: translate3d(0, 0.5em, -1em);
    transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
}

button.learn-more:hover {
    background: #ffe9e9;
    -webkit-transform: translate(0, 0.1em); /* Reduzi o deslocamento no hover */
    transform: translate(0, 0.1em); /* Reduzi o deslocamento no hover */
}

button.learn-more:hover::before {
    -webkit-box-shadow: 0 0 0 1px #b18597, 0 0.15em 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    box-shadow: 0 0 0 1px #b18597, 0 0.15em 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    -webkit-transform: translate3d(0, 0.15em, -1em);
    transform: translate3d(0, 0.15em, -1em);
}

button.learn-more:active {
    background: #ffe9e9;
    -webkit-transform: translate(0em, 0.25em); /* Reduzi o deslocamento no clique */
    transform: translate(0em, 0.25em); /* Reduzi o deslocamento no clique */
}

button.learn-more:active::before {
    -webkit-box-shadow: 0 0 0 1px #b18597, 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    box-shadow: 0 0 0 1px #b18597, 0 0 #ffe3e2; /* Ajustei a sombra para um pouco menor */
    -webkit-transform: translate3d(0, 0, -1em);
    transform: translate3d(0, 0, -1em);
}
        </style>
</head>
<body>
        <h1 class="playwrite-co">Vizualizar turmas</h1>
           <form method="get" action="">
            <label for="turma" id="seleciona">Selecione a turma:</label>
            <select name="turma" id="turma">
                <option value="INFD3">INFD3</option>
                <option value="CTI2">CTI2</option>
                <option value="INFN3">INFN3</option>
            </select>
            <br>
            <button type="submit" class="learn-more">Visualizar</button>
        </form>
</body>
</html>

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
    echo '<div class="borda-total">';
    echo '<div class="eco2">' . "Alunos da turma $turma:<br>" . '</div>';
    foreach ($turmas[$turma] as $matricula => $nome) {
        echo '<div class="eco">' . "Matrícula: $matricula - Nome: $nome</div>";
    }
    echo '</div>'; // Fecha a div.borda-total
}


?>