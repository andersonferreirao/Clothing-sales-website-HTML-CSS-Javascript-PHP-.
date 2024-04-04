<?php
include("Connection.php");
class Insert{
    //Produtos
    private $produto;
    private $modelo;
    private $quantidade;
    private $valor;
    private $imagem_produto;

    //Usuários
    private $nome;
    private $email;      
    private $senha;      
    private $foto;      
    private $endereco;      
    private $telefone;      
    private $cidade;      
    private $estado;      
    private $cep;


public function __construct() {
    
}


    //Produtos
 public function construtorProdutos($produto, $modelo, $quantidade, $valor, $imagem_produto) {
    $this->produto = $produto;
    $this->modelo = $modelo;
    $this->quantidade = $quantidade;
    $this->valor = $valor;
    $this->imagem_produto = $imagem_produto; 
}
    
    public function getProduto(){
        return $this->produto;

    }           
    public function getModelo(){
        return $this->modelo;

    }
    public function getQuantidade(){
        return $this->quantidade;

    }
    public function getValor(){
        return $this->valor;

    }

    public function getImagem_produto(){
        return $this->imagem_produto;

    }



    //Usuários
public function setNome($nome){
    $this->nome = $nome;

 }

public function setEmail($email){
    $this->email = $email;

 }
 public function setSenha($senha){
    $this->senha = $senha;

 }
 public function setfoto($foto){
    $this->foto = $foto;

 }

 public function setEndereco($endereco){
    $this->endereco = $endereco;

 }
 public function setTelefone($telefone){
    $this->telefone = $telefone;

 }
 public function setCidade($cidade){
    $this->cidade = $cidade;

 }

 public function setEstado($estado){
    $this->estado = $estado;  

 }

 public function setCep($cep){
    $this->cep = $cep;

 }


        public function getNome(){
            return $this->nome;

        }    
        public function getEmail(){
            return $this->email;

        }
        public function getSenha(){
            return $this->senha;

        }
        public function getfoto(){
            return $this->foto;

        }

        public function getEndereco(){
            return $this->endereco;

        }
        public function getTelefone(){
            return $this->telefone;

        }
        public function getCidade(){
            return $this->cidade;

        }

        public function getEstado(){
            return $this->estado;

        }

        public function getCep(){
            return $this->cep;

        }

        
        
        public function save($conexao){
            
    $sql = "INSERT INTO `usuarios`(`id`, `nome`,`email`, `senha`, `foto`, `endereco`, `telefone`, `cidade`, `estado`, `cep`) VALUES 
    (NULL, '". $this->nome ."','". $this->email ."','". $this->senha ."','". $this->foto ."','". $this->endereco ."','". $this->telefone ."','". $this->cidade ."','". $this->estado ."','". $this->cep ."')"; 
  $stmt =  $conexao->query($sql);
  
 

  try{
      if(!$stmt->execute()){
  throw new Exception("erro ao inserir dados no banco de dados");
   
  }
}catch(Exception $ex){
    echo "exceção " . $ex->getMessage() . "\n";

 }
        }

 public function SaveItens($conexao, $table){
    $sql = "INSERT INTO `$table`(`id`, `imagem`,`modelo`, `quantidade`, `valor`) VALUES 
    (NULL, '". $this->imagem_produto ."','". $this->modelo ."','". $this->quantidade ."','". $this->valor ."')"; 
  $stmt =  $conexao->query($sql);
  header("Location: ../page.php"); 

 }

}

















?>