<?php
date_default_timezone_set('America/Sao_Paulo');
$hoje = date("Y-m-d");

$alunos = [
    [
        "nome" => "Laiane",
        "sobrenome" => "Alves",
        "plano" => "Plano Premium",
        "validade" => "2026-03-10"
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema Academia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>🏋️ Sistema de Academia</h1>

<div class="card">

<?php
foreach($alunos as $aluno){

    $data_validade = $aluno['validade'];
    $dias_restantes = (strtotime($data_validade) - strtotime($hoje)) / (60*60*24);

    echo "<h2>{$aluno['nome']} {$aluno['sobrenome']}</h2>";
    echo "<p><strong>Plano:</strong> {$aluno['plano']}</p>";
    echo "<p><strong>Validade:</strong> {$aluno['validade']}</p>";

    if($dias_restantes > 0){

        echo "<p class='ativo'>✅ Plano Ativo</p>";
        echo "<p>🔓 Catraca Liberada</p>";

        if($dias_restantes <= 15){
            echo "<p class='alerta'>⚠️ Faltam $dias_restantes dias para renovar!</p>";
        }

    } else {
        echo "<p class='vencido'>❌ Plano Vencido</p>";
        echo "<p>🔒 Catraca Bloqueada</p>";
    }
}
?>

</div>

</body>
</html>
