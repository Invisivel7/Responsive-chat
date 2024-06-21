<?php
session_start();
if(isset($_SESSION['unico_id'])){
include_once "config.php";
$logout_id=mysqli_real_escape_string($conn,$_GET['logout_id']);
if(isset($logout_id)){
    $status= "offline agora";
    $sql = mysqli_query($conn,"UPDATE utilizador SET estado='{$status}' WHERE unico_id ={$logout_id}");
    if($sql){
        session_unset();
        session_destroy();
        header("location:../chat_login.php");
    }
}else{
    header("location:../index.php");   
}
}else{
    header("location:../chat_login.php");
}
?>