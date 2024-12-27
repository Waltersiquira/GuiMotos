<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiMotos</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $nome = $_GET['nome'];
    $especificacoes = $_GET['especificacoes'];
    $p = $_GET['preco'];
    $i = $_GET['imagem'];
    $n = $l->real_escape_string($nome);
    $e = $l->real_escape_string($especificacoes);
    if ($l->query("INSERT INTO `moto` (`id`, `nome`, `especificações`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$e', '$p', '$i')") == true){
        echo 'Moto adcionada com sucesso';
    } else {
        echo 'erro';
    }
    ?>
</body>
</html>