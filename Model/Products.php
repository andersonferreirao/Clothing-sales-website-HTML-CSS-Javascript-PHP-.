<?php
include("../Controller/Connection.php");
require_once("../Controller/Select.php");

class Products{
public static function Item($url, $conexao){

$produto = $url;
$conn = $conexao;

$estoque = new Select();

$estoque->Items($produto, $conn);

}

}
Products::Item($_GET['produto'], $conexao);
header("Location: ../store.php");


?>