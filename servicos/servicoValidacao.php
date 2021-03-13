<?php

function validaNome(string $nome): bool
{
    if (empty($nome)) {

        setarMensagemErro("Nome não pode ser vazio");
        return false;
    } else if (strlen($nome) < 3) {

        setarMensagemErro("Nome não pode ter menos de 3 caracteres");
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro("Nome não pode ser ter mais de 40 caracteres");
        return false;
    }
    return true;
}

function validaIdade(string $idade): bool
{

    if (!is_numeric($idade)) {
        setarMensagemErro("Apenas numeros são permitidos");
        return false;
    }
    return true;
}

function setarMensagemDeSucesso(string $idade) 
{
}
