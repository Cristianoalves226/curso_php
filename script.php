<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18
 * Time: 00:29
 */
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header("location:index.php");
