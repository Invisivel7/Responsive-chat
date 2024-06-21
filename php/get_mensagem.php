<?php
session_start();
if(isset($_SESSION['unico_id'])){
    include_once "config.php";
    $saida_id = mysqli_real_escape_string($conn, $_POST['saida_id']); 
    $entrada_id = mysqli_real_escape_string($conn, $_POST['entrada_id']); 
    $output ="";

    $sql ="SELECT * FROM mensagem

    LEFT JOIN utilizador on utilizador.unico_id = mensagem.entrada_id
             WHERE (saida_id ={$saida_id} AND entrada_id ={$entrada_id})
            OR (saida_id ={$entrada_id} AND entrada_id ={$saida_id})  ORDER BY mens_id ASC";

    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_assoc($query)){
            if($row['saida_id'] === $saida_id){// quem envia
                $output .='
                            <div class="chat outgoig">
                            <div class="details">
                                <p>'.$row['mensagem'].'</p>
                            </div>
                        </div> ';

            }else{// quem recebe
                $output .='  <div class="chat incomig">
                            <img src="fotos/'. $row['img'] .'" alt="">
                            <div class="details">
                                <p>'.$row['mensagem'] .'</p>
                            </div>
                            </div>';
                        
            }
        }
        echo $output;
    }
   
}else{
    header("../chat_login.php"); 
}

?>