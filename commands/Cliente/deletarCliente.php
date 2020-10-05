<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Models\Cliente;

$cliente = new Cliente($_GET['id']);
$cliente->deletar();

header('Location: ../../listar-cliente.php');
