<?php
include_once "config.php";
$primeiro_nome = mysqli_real_escape_string($conn, $_POST['primeiro_nome']);
$ultimo_nome = mysqli_real_escape_string($conn, $_POST['ultimo_nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


if(!empty($primeiro_nome ) && !empty($ultimo_nome) && !empty($email) && !empty($senha)){
    //checar a validade do email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){// se o email for valido  
 
    }else{
        echo "$email - esse emil é invalido!";
    }
   
}else{
    echo " Preencha todos os campos!";
}
?>