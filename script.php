<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18
 * Time: 00:29
 */
session_start();

$catetorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {

    $_SESSION['mensagem-de-erro'] =  "Nome não pode ser vazio";
    header('Location:index.php');
    return;
} else if (strlen($nome) < 3) {

    $_SESSION['mensagem-de-erro'] =  "Nome não pode ter menos de 3 caracteres";
    header('Location:index.php');
} else if (strlen($nome) > 40) {

    $_SESSION['mensagem-de-erro'] =  "Nome não pode ser ter mais de 40 caracteres";
    header('Location:index.php');
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] =  "Apenas numeros são permitidos";
    header('Location:index.php');
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] =
                "O nadador " . $nome . " compete na categoria " . $categorias[$i];
                header('Location:index.php');
                return;
        }
    }
} else if ($idade >= 13 && $idade <= 16) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem-de-sucesso'] =
                "O nadador " . $nome . " compete na categoria " . $categorias[$i];
                header('Location:index.php');
                return;
        }
    }
} else {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-de-sucesso'] =
                "O nadador " . $nome . " compete na categoria " . $categorias[$i];
                header('Location:index.php');
                return;
            
        }
    }
}
