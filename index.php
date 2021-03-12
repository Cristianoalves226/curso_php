<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>
    <p>FORMULARIO DE INSCRIÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="post">
        <?php
        $messagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if (!empty($messagemDeErro)) {
            echo $messagemDeErro;
        }
        ?>
        <p>Seu nome <input type="text" name="nome" id=""></p>
        <p>Sua idade <input type="text" name="idade" id=""></p>
        <input type="submit" value="Enviar">

        <?php
        $messagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if (!empty($messagemDeSucesso)) {
            echo $messagemDeSucesso;
        }
        ?>

    </form>
</body>

</html>