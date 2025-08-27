<?php
$nota = 6; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php if($nota >= 7): ?>
        <p>Aluno aprovado ✅</p>
    <?php else: ?>
        <p>Aluno reprovado ❌</p>
    <?php endif; ?>
</body>
</html>
