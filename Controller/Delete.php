<?php
include("Connection.php");
session_start();
class Delete {

    
    
public $conta = $_SESSION['id'];
    
$sql = "DELETE FROM `usuarios` WHERE :id";
$delete = $conexao->prepare($sql);
$delete->bindParam(':id', $conta); 
$delete = $conexao->prepare($sql);
if($delete){        
    $exclui = $delete->execute();
    echo "
    <script> alert('Usuário excluído com sucesso.')
    window.location.href = 'index.php'
    </script>         
    ";
}

}
?>