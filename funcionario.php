<?php
session_start();
if(!isset($_SESSION['unico_id'])){
    header("location: chat_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efacill</title>
    <link rel="stylesheet" href="css/funcionario.css">
    <link rel="stylesheet" href="css/venda_services.css">
    <link rel="stylesheet" href="css/chat1.css">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="imagens/IMG-20221215-WA0026.jpg" alt="" class="img">
            <span class="logo_nome">EFACILL</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i><img src="imagens/icons8_home_1.ico" alt=""></i>
                    <span class="link-nome">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-nome" href="">Home </a></li>
                 
                </ul>
            </li>
            <li>
               <div class="icon-links">
                <a href="#">
                   <i> <img src="imagens/icons8_collage_filled_1.ico" alt=""></i>
                    <span class="link-nome">Serviços</span>
                </a>
                <i class="arrow"><img src="imagens/icons8_double_down_1.ico" alt="" ></i>
               </div>
               <ul class="sub-menu">
                   <li><a class="link-nome" href="">Serviços </a></li>
                   <li><a href="EFACILL/services.html">Registar</a></li>
                   <li><a href="#" id="visualizar">Visualizar</a></li>
                  
               </ul>
            </li>
            <li>
                <div class="icon-links">
                 <a href="#">
                    <i> <img src="imagens/icons8_user_filled.ico" alt=""></i>
                     <span class="link-nome">Perfis</span>
                 </a>
                 <i class="arrow"><img src="imagens/icons8_double_down_1.ico"  alt=""></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-nome" href="">Perfil</a></li>
                    <li><a href="">Registar</a></li>
                    <li><a href="">Visualizar</a></li>
                    
                </ul>
             </li>
             <li>
                <a href="v_sessao.html">
                    <i><img src="imagens/icons8_pie_chart.ico" alt=""></i>
                    <span class="link-nome">Sessões</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-nome" href="v_sessao.html">Sessões </a></li>
                 
                </ul>
            </li>
            <li>
                <a href="#">
                    <i><img src="imagens/icons8_pie_chart.ico" alt=""></i>
                    <span class="link-nome">Analise</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-nome" href="">Analise </a></li>
                 
                </ul>
            </li>
            <li>
                <a href="#">
                    <i><img src="imagens/icons8_combo_chart.ico" alt=""></i>
                    <span class="link-nome">Estatistica</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-nome" href="">Estatistica</a></li>
                 
                </ul>
            </li>
            <li>
                <div class="icon-links">
                 <a href="#">
                    <i> <img src="imagens/icons8_collage_filled_1.ico" alt=""></i>
                     <span class="link-nome">Cursos</span>
                 </a>
                 <i class="arrow"><img src="imagens/icons8_double_down_1.ico" alt=""></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-nome" href="">Cursos </a></li>
                    <li><a href="">Teste</a></li>
                    <li><a href="">Teste</a></li>
                    <li><a href="">Teste</a></li>
                </ul>
             </li>
             <li>
                <a href="#">
                    <i><img src="imagens/icons8_settings.ico" alt=""></i>
                    <span class="link-nome">Configuração</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-nome" href="">Configuração</a></li>
                 
                </ul>
            </li>
            <li>
       
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="imagens/IMG-20221215-WA0026.jpg" alt="" class="img">

                    </div>
            
                    
                    <div class="nome-job">
                        <div class="profile-nome">Lorem ipsum</div>
                        <div class="job">Lorem ipsum.</div>
                    </div>
                    <i><img src="imagens/icons8_login_rounded_right.ico" alt=""></i>
                <div>
            </li>
        </ul>

    </div>
<!----------------------------------------------Section conteudo------->
    <section class="home-section">
        <div class="home-content">
            <div>
                <i class="menu"><img src="imagens/icons8_menu_filled.ico" alt=""></i>

            </div>

            <div class="search">
                <i><img src="imagens/icons8_search.ico" alt=""></i>
              
                <input type="text" placeholder="pesquisar">
            </div>
            <div class="profile">
                <i><img src="imagens/icons8_alarm.ico" alt=""></i>
                <img src="imagens/fundo.jpg"  class ="img"alt="">
            </div>
        </div>

       <!--h3 class="titulo">
           EFacill
       </h3-->
       <div class="warppers">
                    <!-----lado esquerdo/ lista dos clietes no chat---->
                <div class="wrapper left">
                    <section class="users">
                    <header>
                    <?php
                    include_once "php/config.php";
                        $sql=mysqli_query( $conn, "SELECT * FROM tb_funcionario WHERE id_funcionario = '{$_SESSION['unico_id']}'");
                        if(mysqli_num_rows($sql)>0){
                            $row = mysqli_fetch_assoc($sql);

                        }
                    ?>
                        <!--div class="content">
                            <img src="fotos/<?php echo $row['img']?>" alt="">
                            <div class="details">
                                <span><!?php echo $row['nome'] . " ". $row['apelido']?></span>
                                <p><!?php echo $row['estado']?></p>
                            </div>
            
                        </div-->
                        <!--a href="php/logout.php?logout_id=<?php echo $row ['id_funcionario']?>" class="logout">Sair</a--> 
                    </header>
                    <div class="search">
                        <span class="text">seleciona um utilizador para começar o chat</span>
                        <input type="text" name="" id="" placeholder="Coloca o nome para pesquisar...">
                        <button><img src="imagens/icons8_search_3.ico" alt=""></button>
                    </div>
                    <div class="users-list">
                        
                    
                    </div>
                    
                    </section>
                </div>
                <!----lado direito/  mensagem com o cliente--->
                <div class="wrapper rigth">
                    <img src="imagens/IMG-20221215-WA0026.jpg" alt="" class="img">
                    <section class="chat-area">
                    <!--header> 
                        <!?php
                        include_once "php/config.php";
                            $utilizador_id = mysqli_real_escape_string($conn, $_GET['utilizador_id']);
                            $sql=mysqli_query( $conn, "SELECT * FROM utilizador WHERE unico_id = {$utilizador_id}");
                            if(mysqli_num_rows($sql)>0){
                                $row = mysqli_fetch_assoc($sql);

                            }
                        ?>
                        <a href="user_chat.php" class="back-icon"><img src="imagens/icons8_left.ico" alt=""></a>
                        <img src="fotos/<!?php echo $row['img']?>" alt="" class ="img">
                        <div class="details">
                            <span><!?php echo $row['nome'] . " ". $row['apelido']?></span>
                            <p><!?php echo $row['estado']?></p>
                        </div>   
                    </header>
                    <div class="chat-box">
                    
                    </div>
                    <form action="#" class="typing-area" autocomplete="off">
                        <input type="text" name= "saida_id" value="<!?php echo $_SESSION['unico_id'];?>" hidden>
                        <input type="text" name="entrada_id" value="<!?php echo $utilizador_id;?>" hidden>
                        <input type="text" name="mensagem" class ="input-field" placeholder="Escreve aqui a mesagem..">
                        <button><img src="imagens/icons8_sent_filled.ico" alt=""></button>

                    </form-->
        <div class="modal" id="modal">
            <i class="close-icon">x</i>
            <!--- Mensagem---->
            <section class="chat-area">
        <header> 
            <?php
            include_once "php/config.php";
            $utilizador_id = htmlspecialchars($_GET['utilizador_id']);
                $sql=mysqli_query( $conn, "SELECT * FROM tb_funcionario WHERE unico_id = '1'");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);

                }
            ?>
            <a href="user_chat.php" class="back-icon"><img src="imagens/icons8_left.ico" alt=""></a>
            <img src="fotos/<?php echo $row['img']?>" alt="" class ="img">
            <div class="details">
                <span><?php echo $row['nome'] . " ". $row['apelido']?></span>
                <p><?php echo $row['estado']?></p>
            </div>   
        </header>
        <!--div class="chat-box">
           
        </div-->
        <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name= "saida_id" value="<?php echo $_SESSION['unico_id'];?>" hidden>
            <input type="text" name="entrada_id" value="<?php echo $utilizador_id;?>" hidden>
            <input type="text" name="mensagem" value="<?php echo $utilizador_id;?>" class ="input-field" placeholder="Escreve aqui a mesagem..">
            <button><img src="imagens/icons8_sent_filled.ico" alt=""></button>

        </form>
        </section>
           
        </div>
            </section>
        </div>

       </div>
     
  
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        

        for( var i =0; i < arrow.length; i++){
            arrow[i].addEventListener("click",(e)=>{
              let arrowParent=e.target.parentElement.parentElement;
               
              arrowParent.classList.toggle("showMenu");
               
            });

        }
        let sidebar= document.querySelector(".sidebar");
        let sidebarBtn= document.querySelector(".menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click",()=>{
            sidebar.classList.toggle("close");
        } )

    </script>

    <script src="js/usuarios_chat.js"></script>
    <script src="js/ajaxmensagem.js"></script>
   <!-- <script>
        let sms = document.getElementById('texto').value;
        document.getElementById('raio').value = sms;
    </script>
    -->
   
</body>
</html>