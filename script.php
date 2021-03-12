<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18
 * Time: 00:29
 */


$catetorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    echo "Nome não pode ser vazio";
    # code...

}

if (strlen($nome) < 3) {
    echo "O nome deve conter menos de 3 caracteres";
}

if (strlen($nome) > 40) {
    echo "Não pode ter mais de 40 caracteres";
    
}

if (!is_numeric($idade)) {
    # code...
    echo "Apenas numeros são permitidos";
    return;
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            echo "O nadador ", $nome, " compete na categoria " . $categorias[$i];
        }
    }
} else if ($idade >= 13 && $idade <= 16) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            echo "O nadador ", $nome, " compete na categoria " . $categorias[$i];
        }
    }
} else {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            echo "O nadador ", $nome, " compete na categoria " . $categorias[$i];
        }
    }
}
