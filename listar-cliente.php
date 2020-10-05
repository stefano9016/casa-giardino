<?php include __DIR__ . '/cabecalho.php' ?>
<?php

require_once __DIR__ . '/vendor/autoload.php';

$cliente = new \Source\Models\Cliente();
$lista = $cliente->buscar();


?>

<div class="card">
    <div class="card-header">
        <h5>Lista de Clientes</h5>
    </div>
    <div class="card-body">
            <table class="table text-center table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Visualizar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($lista as $linha) : ?>
                    <tr>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['cpf'] ?></td>
                        <td><?= $linha['endereco'] ?></td>
                        <td><a href="visCliente.php?id=<?= $linha['id'] ?>" class="btn btn-outline-secondary">Visualizar</a></td>
                        <td><a href="commands/Cliente/deletarCliente.php?id=<?= $linha['id'] ?>" class="btn btn-outline-danger">Deletar</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>
