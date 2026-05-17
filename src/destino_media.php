<?php
$n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_FLOAT);
$n2 = filter_input(INPUT_POST, 'n2', FILTER_VALIDATE_FLOAT);
$n3 = filter_input(INPUT_POST, 'n3', FILTER_VALIDATE_FLOAT);

$mensagemErro = "";
$status = "";
$cor = "";
$media = 0;

if ($n1 !== false && $n2 !== false && $n3 !== false) {
    $media = ($n1 + $n2 + $n3) / 3;
    
    if ($media < 4) {
        $status = "REPROVADO";
        $cor = "red";
    } elseif ($media >= 4 && $media < 6) {
        $status = "DE RECUPERAÇÃO";
        $cor = "orange";
    } else {
        $status = "APROVADO";
        $cor = "green";
    }
} else {
    $mensagemErro = "Preencha todas as notas corretamente.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Praticando - Calculadora média</h2>
    <hr>
    
    <?php if ($mensagemErro): ?>
        <p class="text-danger"><?= $mensagemErro ?></p>
    <?php else: ?>
        <p>Um aluno com as notas <?= $n1 ?>, <?= $n2 ?> e <?= $n3 ?> tem uma média igual a <?= number_format($media, 2) ?></p>
        <h4 style="color: <?= $cor ?>;">Com essa média o aluno está <?= $status ?></h4>
    <?php endif; ?>

    <br>
    <a href="index.html" class="btn btn-secondary">Voltar para o formulário</a>
</body>
</html>