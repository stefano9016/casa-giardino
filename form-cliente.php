<?php include __DIR__ . '/cabecalho.php' ?>

<div class="card">
    <div class="card-header">
        <h5>Cadastro de Cliente</h5>
    </div>
    <div class="card-body">
            <form action="commands/Cliente/cadCliente.php" method="post">
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" name="rg">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tel">Telefone</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                </div>

                <div class="buttonsForm">
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    <a href="home.php" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
    </div>
</div>