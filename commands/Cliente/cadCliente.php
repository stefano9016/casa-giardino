<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Models\Cliente;

$cliente = new Cliente();
$cliente->setNome(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
$cliente->setRg(filter_input(INPUT_POST, "rg", FILTER_SANITIZE_STRING));
$cliente->setCpf(filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING));
$cliente->setTel(filter_input(INPUT_POST, "tel", FILTER_SANITIZE_STRING));
$cliente->setCep(filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING));
$cliente->setEndereco(filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING));
$cliente->setBairro(filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING));
$cliente->inserir();

header('Location: ../../form-cliente.php');