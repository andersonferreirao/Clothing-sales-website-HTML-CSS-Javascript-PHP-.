<?php

include("Connection.php");
session_start();

class Select{
   
   private $email_aut; 
   private $senha_aut;     


   
   public function __construct($email_aut = null, $senha_aut = null){            
       $this->email_aut = $email_aut;
       $this->senha_aut = hash('sha256',$senha_aut);
      
   }
   
        public function Busca($email, $pass, $conn){               
                
        $sql = "SELECT `id`FROM `usuarios` WHERE `email` = '$email' and `senha`= :senha";
        $select = $conn->prepare($sql);
        $select->bindParam(':senha', $pass); 
        $select->execute();       

        $_SESSION["password"];

        
        try{
        if(!$consulta = $select->fetch(PDO::FETCH_ASSOC)){ 
                throw new Exception("erro ao buscar usuário");
                $_SESSION["password"] = false;
        }
                else{
                $_SESSION['id'] = $consulta['id'];
                $_SESSION["password"] = true;
                return true;
                }
        }       
        catch(Exception $e ){
                header("Location: index.php");
        }
        }
        
        public function Items($item, $conexao){
                try{
                $sql = "SELECT * FROM `$item`";
                $conn = $conexao->prepare($sql); 
                $conn->execute();
                
                $itens = $conn->fetchAll(PDO::FETCH_ASSOC);

                if($itens){
                        $_SESSION['itens'] = $itens;
                }
                else{
                throw new Exception("erro ao buscar itens");
                }
        }
               
        catch(Exception $e){
                       
        header("Location: Page.php");   
          exit();      
        }
                
        }
                        

                
                }
                
                
        
        
               
                
        
        




         















?>