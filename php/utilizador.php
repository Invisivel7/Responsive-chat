<?php
session_start();
$saida_id=$_SESSION['unico_id'];
include_once "config.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_estudante 
JOIN tb_cliente ON tb_estudante.id_cliente = tb_cliente.id_cliente");
$output="";
if(mysqli_num_rows($sql) == 1){
    $output=" Nenhum utilizador activo";

}elseif(mysqli_num_rows($sql)> 0){
  include "dados.php";

}
echo $output;
?>