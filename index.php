<?php require_once "./app/model/ArquivosModel.php";

$arquivosModel = new ArquivosModel();
$lista_arquivo = $arquivosModel->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Envio de arquivos</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagem" required accept="image/*">

        <button type="submit">Enviar</button>
    </form>

    <div class="card-wrapper">
        <?php foreach ($lista_arquivo as $arquivo) {?>
            <div class="card">
                <!-- <?= '<img class="img" src="' . $arquivo['caminho'] . '"alt="' . $arquivo['nome'] . '"\>' ?> -->
                <img class="img" src="<?=  $arquivo['caminho'] ?>" alt="<?= $arquivo['nome'] ?>"\>

                <!-- <?= '<a href="' . $arquivo['caminho'] . '" download>' . $arquivo['nome_original'] . '</a>' ?> -->
                <a href="<?= $arquivo['caminho'] ?>" download><?= $arquivo['nome_original'] ?></a>
            </div>
        <?php }?>
    </div>

</body>
</html>