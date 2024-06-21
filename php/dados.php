<?php
  while($row = mysqli_fetch_assoc($sql)){
    $sql2="SELECT * FROM mensagem WHERE (entrada_id = {$row['id_estudante']}
    OR saida_id = {$row['id_estudante']}) AND (saida_id = {$saida_id}
    OR entrada_id = {$saida_id}) ORDER BY mens_id DESC LIMIT 1";
    $query2 =mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){
        $result = $row2['mensagem'];
    }else{
        $result ="Nehuma mensagem"; 
    }
    // numero de caracteres que serao mostrado como o resumo da mesagem não pode ter mais de 28
    
    (strlen($result) > 28) ? $mensagem = substr($result, 0, 28).'....' : $mensagem = $result;
    // adicionar vc ao texto depois da mensagem
    ($saida_id == $row2['saida_id']) ? $vc = "Você:  ": $vc = "";
    // checar se utilizador está online ou ofline

    ($row['telemovel'] == "927462127")  ? $offline ="92" : $offline = "";
    $output .='
            <a href="#?utilizador_id='.$row['id_estudante'].'" class="edit">
                    <div class="content">
                        <img src="fotos/'.$row['foto'].'" alt="">
                        <div class="details">
                            <span>'.$row['nome'] . " ". $row['apelido'] .'</span>
                            <p>'.$vc . $mensagem.'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'"></div> 
                    
                </a>';

}

?>