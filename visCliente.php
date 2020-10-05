<?php include __DIR__ . '/cabecalho.php' ?>

<?php

require_once __DIR__ . '/vendor/autoload.php';
use Source\Models\Cliente;

$cliente = new Cliente($_GET['id']);

?>

<div class="card">
    <div class="card-header">
        <h5>Informações do Cliente</h5>
    </div>
    <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" value="<?= $cliente->getId() ?>">
                    <div class="form-group col-md-5">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?= $cliente->getNome() ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" name="rg" value="<?= $cliente->getRg() ?>" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" value="<?= $cliente->getCpf() ?>" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tel">Telefone</label>
                        <input type="text" class="form-control" name="tel" value="<?= $cliente->getTel() ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" value="<?= $cliente->getCep() ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?= $cliente->getEndereco() ?>" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro" value="<?= $cliente->getBairro() ?>" readonly>
                    </div>
                </div>

                <div class="buttonsForm">
                    <a href="listar-cliente.php" class="btn btn-outline-danger">Fechar</a>
                </div>
    </div>
</div>