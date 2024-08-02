<?php
class conexaoMySQL
{
    protected $servidor;
    protected $usuario;
    protected $senha;
    protected $banco;
    protected $conexao;
    protected $qry;
    protected $dados;
    protected $totalDados;
    
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "lojavirtual";
        self::conectar();
    }
    
    function conectar()
    {
        $this->conexao = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco);
        
        if ($this->conexao->connect_error) {
            die("Não foi possível conectar com o servidor: " . $this->conexao->connect_error);
        }
    }

    function executarSQL($sql)
    {
        $this->qry = $this->conexao->query($sql);
        
        if (!$this->qry) {
            die("Erro ao executar o comando SQL: $sql <br>" . $this->conexao->error);
        }
        
        return $this->qry;
    }

    function listar($qr)
    {
        $this->dados = $qr->fetch_assoc();
        return $this->dados;
    }
    
    function contaDados($qry)
    {
        $this->totalDados = $qry->num_rows;
        return $this->totalDados;
    }
}
?>
