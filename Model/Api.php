<?php
//error_reporting(0);
//ini_set('display_errors', 0);

include("../Controller/Connection.php");
error_reporting(0);
ini_set('display_errors', 0);

session_start();
$id =  $_SESSION['id'];

$sql = "SELECT `nome`, `email`, `foto`, `endereco`, `telefone`, `cidade`, `estado`, `cep` FROM `usuarios` WHERE `id` = '$id' ";
    $api = $conexao->prepare($sql);    
    $api->execute();       

    if($dados = $api->fetch(PDO::FETCH_ASSOC)){
        header('Access-Control-Allow-Origin: *');
        
        header('Content-Type: application/json');
               echo json_encode($dados); 
    }
       

?>