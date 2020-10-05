<?php


namespace Source\Models;


use Source\Conexao;

class Cliente
{
    private $id;
    private $nome;
    private $rg;
    private $cpf;
    private $tel;
    private $cep;
    private $endereco;
    private $bairro;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg): void
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep): void
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }

    public function __construct($id = false)
    {
        if ($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir()
    {
        $query = "INSERT INTO cliente (nome, rg, cpf, tel, cep, endereco, bairro, created_at) 
        VALUES (:nome, :rg, :cpf, :tel, :cep, :endereco, :bairro, NOW())";
        $conn = Conexao::pegarConexa();
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":rg", $this->rg);
        $stmt->bindValue(":cpf", $this->cpf);
        $stmt->bindValue(":tel", $this->tel);
        $stmt->bindValue(":cep", $this->cep);
        $stmt->bindValue(":endereco", $this->endereco);
        $stmt->bindValue(":bairro", $this->bairro);
        $stmt->execute();
    }

    public function buscar()
    {
        $query = "SELECT * FROM cliente";
        $conn = Conexao::pegarConexa();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar(){
        $query = "SELECT id, nome, rg, cpf, tel, cep, endereco, bairro FROM cliente WHERE id = $this->id";
        $conn = Conexao::pegarConexa();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha){
            $this->nome = $linha['nome'];
            $this->rg = $linha['rg'];
            $this->cpf = $linha['cpf'];
            $this->tel = $linha['tel'];
            $this->cep = $linha['cep'];
            $this->endereco = $linha['endereco'];
            $this->bairro = $linha['bairro'];
        }
    }

    public function deletar()
    {
        $query = "DELETE FROM cliente WHERE id = :id";
        $conn = Conexao::pegarConexa();
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":id", $this->id);
        $stmt->execute();
    }
}