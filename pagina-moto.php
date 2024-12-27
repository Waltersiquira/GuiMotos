<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiMotos</title>
</head>
<body>
    <?php require_once 'includes/lojas.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $l->query("select * from moto where id = '$id'");
    if (!$busca){
        echo 'erro';
    } else {
        if ($busca->num_rows == 0){
            echo 'erro';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='300'> <h3>$reg->nome</h3> <h4>R$$reg->preço</h4> <p>$reg->especificações</p>";
            }
        }
    }
    ?>
    <button style="background-color: blue;"><a href="comprar-moto.php" style="color: white; text-decoration: none;">Comprar</a></button>
</body>
</html>