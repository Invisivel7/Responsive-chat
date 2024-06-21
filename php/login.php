<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

if(!empty($email) && !empty($senha)){
    //checar se o utilizador colocou o email e senha correcto
    $sql = mysqli_query($conn, "SELECT * FROM utilizador WHERE email ='{$email}' AND senha ='{$senha}'");
    if(mysqli_num_rows($sql) > 0){// se o dados foram correctos
        $row  = mysqli_fetch_assoc($sql);
        $status ="online agora";
        // actualizar o estado do utilizador
        $sql2 = mysqli_query($conn,"UPDATE utilizador SET estado='{$status}' WHERE unico_id ={$row['unico_id']}");
       if($sql2){
        $_SESSION['unico_id'] = $row['unico_id']; // usamos essa sessão para um utilizador com id nico em outro ficheiro php
        echo"Sucesso"; 
       }

    }else{
        echo "email ou senha erradas";
    }

}else{
    echo "preencha todos os campos!";
}

?>