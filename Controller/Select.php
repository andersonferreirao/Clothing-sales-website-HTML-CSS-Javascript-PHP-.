<?php


include("Connection.php");


class Select{
   
   private $email_aut; 
   private $senha_aut;     


   
   public function __construct($email_aut = null, $senha_aut = null){            
       $this->email_aut = $email_aut;
       $this->senha_aut = hash('sha256',$senha_aut);
      
   }
   
   public function getEmail_aut(){
        return $this->email_aut;    
        
   }
   public function getSenha_aut(){
        return $this->senha_aut;
   }



        public function Busca($email, $pass, $conn){               
                
        $sql = "SELECT `id`FROM `usuarios` WHERE `email` = '$email' and `senha`= :senha";
        $select = $conn->prepare($sql);
        $select->bindParam(':senha', $pass); 
        $select->execute();       

        $_SESSION["adm"] = false;

        
        try{
        if(!$consulta = $select->fetch(PDO::FETCH_ASSOC)){
                throw new Exception("erro ao buscar usuário");
                $_SESSION["password"] = false;
                return false; 
        }
                else{
                        $_SESSION['id'] = $consulta['id'];
                        $_SESSION["adm"] = true;
                        return true; 
               
                }
        }       
        catch(Exception $e ){
                return false;
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
                        $_SESSION['filtro-inicial'] = 1;
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
        public function Filtro($item, $conexao,$filtro){
                if($filtro == 2){
                try{
                $sql = "SELECT * FROM `$item` WHERE `valor` < 100 ";
                $conn = $conexao->prepare($sql); 
                $conn->execute();
                
                $itens = $conn->fetchAll(PDO::FETCH_ASSOC);
                
                if($itens)
                return $itens;
        
                else
                throw new Exception("erro ao buscar itens");
                
        }
        
        catch(Exception $e){
                
                header("Location: Page.php");   
                exit();      
        }
}
        else if($filtro == 3){
                try{
                        $sql = "SELECT * FROM `$item` WHERE `valor` > 100 ";
                        $conn = $conexao->prepare($sql); 
                        $conn->execute();
                        
                        $itens = $conn->fetchAll(PDO::FETCH_ASSOC);
                        
                        if($itens)
                        return $itens;
                
                        else
                        throw new Exception("erro ao buscar itens");
                        
                }
                
                catch(Exception $e){
                        
                        header("Location: Page.php");   
                        exit();      
                }      
        }
                
        }
                        

                
                }
                
                
        
        
               
                
        
        




         















?>