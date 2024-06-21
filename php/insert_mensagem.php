<?php
session_start();
if(isset($_SESSION['unico_id'])){
    include_once "config.php";
    $saida_id = mysqli_real_escape_string($conn, $_POST['saida_id']); 
    $entrada_id = mysqli_real_escape_string($conn, $_POST['entrada_id']); 
    $mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']); 

    if(!empty($mensagem)){
        $sql =mysqli_query($conn,"INSERT INTO mensagem (saida_id, entrada_id, mensagem)
                             VALUE({$saida_id}, {$entrada_id}, '{$mensagem}')") or die();
    }
}else{
    header("../chat_login.php"); 
}

?>