<?php
session_start();

include("../Controller/Connection.php");
require_once("../Controller/Select.php");


class Authentication {

  
public static function Autenticar($email, $password,$conn){


$_SESSION['email_aut'] = $email;
$_SESSION['senha_aut'] = $password;

$verifica = new Select($_SESSION['email_aut'],$_SESSION['senha_aut']);


$redireciona = $verifica->Busca($verifica->getEmail_aut(),$verifica->getSenha_aut(),$conn);

if($redireciona == true)
header('Location: ../page.php');

else
header('Location: ../index.html');
} 
} 



Authentication::Autenticar($_POST['email'], $_POST['senha'],$conexao);

?>
