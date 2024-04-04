<?php
include("../Controller/Connection.php");
require_once("../Controller/Select.php");
require_once("../Controller/Insert.php");
session_start();

$_SESSION['filtro_url'] = $_GET['produto']; 
$operation = $_GET['option'];

class Products{

public static function insertItem($conexao, $table, $model, $qtd, $price, $picture){

$conn = $conexao;
$produto = $table;
$modelo = $model;
$quantidade = $qtd;
$valor = $price;     
$foto = $picture;

$diretorio = "../images/" . $foto['name'];
    if (move_uploaded_file($foto['tmp_name'], $diretorio)){
        echo" 
           <script> 
           console.log('enviado com sucesso'); 
           </script>
           
           ";
  $dir_atual = "images/" . $foto['name'];          


$cadastro = new Insert();
  
$cadastro->construtorProdutos($produto, $modelo, $quantidade, $valor, $dir_atual);
$cadastro->SaveItens($conn, $produto);
}

}

public static function Item($url, $conexao){

$produto = $url;
$conn = $conexao;

$estoque = new Select($_SESSION['email_aut'],$_SESSION['senha_aut']);

$estoque->Items($produto, $conn);

}

}
if($operation != 1){

Products::Item($_GET['produto'], $conexao);
header("Location: ../store.php?estoque=".$_GET['produto']."&filtro=1");
}
else{
Products::insertItem($conexao, $_POST['produto'], $_POST['modelo'], $_POST['quantidade'], $_POST['valor'], $_FILES['foto']);
  
}


?>