<?php
include("Connection.php");
class Insert{
    private $nome;
    private $email;      
    private $senha;      
    private $foto;      
    private $endereco;      
    private $telefone;      
    private $cidade;      
    private $estado;      
    private $cep;

/*
 public function __construct($nome, $email, $senha, $foto, $endereco, $telefone, $cidade, $estado, $cep) {
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->foto = $foto;
    $this->endereco = $endereco; 
    $this->telefone = $telefone;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->cep = $cep;

    
}
*/
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












}




?>