<?php include __DIR__ . '/cabecalho.php' ?>

<div class="card">
    <div class="card-header">
        <h5>Cadastro de Venda</h5>
    </div>
    <div class="card-body">
        <form action="commands/Venda/cadVenda.php" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="nome">Cliente</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="dataVenda">Data da Venda</label>
                    <input type="date" class="form-control" name="dataVenda">
                </div>
                <div class="form-group col-md-3">
                    <label for="valorTotal">Valor Total Bruto</label>
                    <input type="text" id="valorBruto" class="form-control" name="valorTotal">
                </div>
                <div class="form-group col-md-2">
                    <label for="formaPag">Forma de Pagamento</label>
                    <select name="formaPag" id="" class="form-control">
                        <option value="" selected>Selecione...</option>
                        <option value="A vista">À vista</option>
                        <option value="Parcelado">Parcelado</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="valorEntrada">Valor da Entrada</label>
                    <input type="text" id="valorEntrada" class="form-control" name="valorEntrada" onchange="calcular()">
                </div>
                <div class="form-group col-md-3">
                    <label for="valorLiquido">Valor Liquido</label>
                    <input type="text" id="valorLiq" class="form-control" name="valorLiquido">
                </div>
                <div class="form-group col-md-3">
                    <label for="numParcelas">Nº de Parcelas</label>
                    <input type="text" id="numParcelas" class="form-control" name="numParcelas" onblur="calcular()">
                </div>
                <div class="form-group col-md-3">
                    <label for="valorParcela">Valor da Parcela</label>
                    <input type="text" id="valorParcela" class="form-control" name="valorParcela" onblur="calcular()">
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

<script type="text/javascript">
    function calcular(){

        var valorBruto  = parseInt(document.getElementById('valorBruto').value, 10);
        var valorEntrada  = parseInt(document.getElementById('valorEntrada').value, 10);

        if (!isNaN(valorBruto) && !isNaN(valorEntrada)){
            var valorLiq = document.getElementById('valorLiq').value = (valorBruto - valorEntrada);
            var numParcelas = document.getElementById('numParcelas').value;
            var valorParcela= document.getElementById('valorParcela').value = valorLiq/numParcelas;
        }

    }
</script>

