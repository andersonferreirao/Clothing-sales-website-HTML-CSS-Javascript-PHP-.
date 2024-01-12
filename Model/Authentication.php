<?php


include("../Controller/Connection.php");
require_once("../Controller/Select.php");


class Authentication {
public static function Autenticar($email, $password,$conn){


$email_aut = $email;
$senha_aut = $password;

$verifica = new Select($email_aut,$senha_aut);


$verifica->Busca($verifica->getEmail_aut(),$verifica->getSenha_aut(),$conn);
} 
} 


$_SESSION['email'] = $_POST['email'];
$_SESSION['senha'] = $_POST['senha'];

Authentication::Autenticar($_SESSION['email'], $_SESSION['senha'],$conexao);
header("Location: ../Page.php");
?>
