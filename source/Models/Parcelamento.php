<?php


namespace Source\Models;


class Parcelamento
{
    private $valorParcela;
    private $dataParcela;

    public function addParcelamento($dataVenda, $valorTotal, $numParcelas)
    {
        $parteData = explode("-",$dataVenda);

        $dia = $parteData[2];
        $mes = $parteData[1];
        $ano = $parteData[0];

        $parcela = 1;

        while($parcela <= $numParcelas) {// enquanto parcela for menor ou igual a 3 executar

            $this->dataParcela = $ano.'/'.$mes.'/'.$dia;;// iguala a data a data da venda
            $this->valorParcela = $valorTotal/$numParcelas;
            $parcela++;// adiciona +1 a variavel parcela
            if ($mes < 12){
                $mes++; // adiciona +1 a variavel mes
            } else {
                $mes = 01;
                $ano++;
            }

            echo $this->dataParcela.PHP_EOL;
        }
    }
}