<?php
session_start();
include_once "config.php";
$primeiro_nome = mysqli_real_escape_string($conn, $_POST['primeiro_nome']);
$ultimo_nome = mysqli_real_escape_string($conn, $_POST['ultimo_nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


if(!empty($primeiro_nome ) && !empty($ultimo_nome) && !empty($email) && !empty($senha)){
    //checar a validade do email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){// se o email for valido  
 //checar se o email já existe na base de dados
 $sql = mysqli_query($conn,"SELECT email FROM utilizador WHERE email = '{$email}'");
 if(mysqli_num_rows($sql) > 0){// se o email já existe
    echo "$email - esse email já existe!";
 }else{
    //checar se utiizador carregou o ficheiro ou não
    if(isset($_FILES['imagem'])){// se o ficheiro é carregado
        $img_name =$_FILES['imagem']['name']; // pegado o nome da imagem carregada
        $tmp_name = $_FILES['imagem']['tmp_name']; // nome temporario usado para guardar/mover o ficheiro

        // explortar a imagem e pegar a extesão da imagem se é jpg,png
        $img_explode = explode('.',$img_name);
        $img_ext= end($img_explode);// pegar a extensão da img carregada pelo utilizador

        $extensao =['png','jpeg','jpg'];// esse é o ventor das extensões validas de imagem
        if(in_array($img_ext, $extensao) === true){// se o utilizador carregar imagem que as extensões existem no ventor
            $time=time(); //aqui  retorna o tempo certo
                            /* precisamos do tempo pork nós carregamos a imagem do utilizador e vamos renomear o ficheiro no tempo para 
                            que seja unica em caso de actualização */
                
            // mover a imagem carregada pelo utilizador
            $new_img_name =$time.$img_name;
            if(move_uploaded_file($tmp_name,"../fotos/".$new_img_name)){// se o utilizador carregar a imagem com sucesso
                $estado ="activo agora";// para saber se o utilizador está activo
                $random_id= rand(time(), 10000000); // criar um id randomico para o utilizador


                // inserir todos os dados na tabela

                $sql2= mysqli_query($conn,"INSERT INTO utilizador (unico_id, nome, apelido, email, senha, img, estado) 
                                    VALUES ({$random_id},'{$primeiro_nome}','{$ultimo_nome}','{$email}','{$senha}','{$new_img_name}','{$estado}')");

                if($sql2){// se os dados foram inseridos
                  $sql3 = mysqli_query($conn, "SELECT * FROM utilizador WHERE email ='{$email}'");
                  if(mysqli_num_rows($sql3) > 0){
                    $row = mysqli_fetch_assoc($sql3);
                    $_SESSION['unico_id'] = $row['unico_id']; // usamos essa sessão para um utilizador com id nico em outro ficheiro php
                    echo"Sucesso"; 
                  }

                }else{
                    echo" dados não salvos";
                }

            } 

        }else{
            echo" por favor seleciona uma imagem - jpg, png, jpeg!";
        }
    }else{
        echo "por favor seleciona a imagem";
    }
 }

    }else{
        echo"$email esse eamil é invalido!";
    }
   
}else{
    echo" Preencha todos os campos!";
}
?>