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


if($redireciona == true){
header('Location: ../page.php');
$_SESSION['alert'] = "";
}
else{
header('Location: ../index.php');
$_SESSION['alert'] = "<div class='alert alert-danger' role='alert'>
                    Senha ou email incorretos!!
                    </div>";

} 
} 
}


Authentication::Autenticar($_POST['email'], $_POST['senha'],$conexao);

?>
