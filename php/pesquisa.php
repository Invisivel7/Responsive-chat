<?php
session_start();

include_once "config.php";
$saida_id=$_SESSION['unico_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output="";
$sql = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE  NOT id_funcionario = {$saida_id} AND (nome LIKE '%{$searchTerm}%' OR apelido LIKE '%{$searchTerm}%') ");
if(mysqli_num_rows($sql) > 0){
    include "dados.php";


}else{
    $output .=" Nenhum utilizador encontrado!";
}
echo $output; 
?>