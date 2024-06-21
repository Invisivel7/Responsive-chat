<?php
session_start();
if(!isset($_SESSION['unico_id'])){
    header("location: chat_login.php");
}

?>
<?php
include_once "header.php"

?>
<body>
    <div class="wrapper">
        <section class="users">
        <header>
        <?php
        include_once "php/config.php";
            $sql=mysqli_query( $conn, "SELECT * FROM tb_funcionario WHERE id_funcionario = '{$_SESSION['unico_id']}'");
            if(mysqli_num_rows($sql)>0){
                $row = mysqli_fetch_assoc($sql);

            }
        ?>
            <div class="content">
                <img src="fotos/fundo2.jpg" alt="">
                <div class="details">
                    <span><?php echo $row['nome'] . " ". $row['apelido']?></span>
                    
                </div>
  
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row ['id_funcionario']?>" class="logout">Sair</a> 
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
    
    <script src="js/usuarios_chat.js"></script>
</body>
</html>