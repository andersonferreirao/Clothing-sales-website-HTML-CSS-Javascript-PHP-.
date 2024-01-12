<?php


include("../Controller/Connection.php");
require_once("../Controller/Insert.php");

class Users {
    public static function User($dados, $arquivo,$conn){
    $nome = $dados['nome'];
    $email = $dados['email'];
    $senha = hash('sha256',$dados['senha']);
    $file = $arquivo;   
    $endereco = $dados['endereco'];   
$telefone = $dados['telefone'];   
$cidade = $dados['cidade'];   
$estado = $dados['estado'];   
$cep = $dados['cep'];   

$arq = array("jpeg","png","jpg");
        

$dir = "../fotos/" . $file['name'];
    if (move_uploaded_file($file['tmp_name'], $dir)){
        echo" 
           <script> 
           console.log('enviado com sucesso'); 
           </script>
           
           ";
           $insert = new Insert();
           $insert->setNome($nome);
           $insert->setEmail($email);
           $insert->setSenha($senha);
           $insert->setFoto($dir);
           $insert->setEndereco($endereco);
           $insert->setTelefone($telefone);
           $insert->setCidade($cidade);
           $insert->setEstado($estado);
           $insert->setCep($cep);
           
           $insert->save($conn);
           
       //header("Location: ");
       exit(); 
    
    }else{
        echo" 
           <script> 
           console.log('erro'); 
           </script>";
        }

    } 
    }
    Users::User($_POST, $_FILES['foto'],$conexao);






    
    
    
    
    
        
    
    
    
    
    
    
    
    
    
    
    
    ?>