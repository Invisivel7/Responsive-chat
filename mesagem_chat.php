
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
        <section class="chat-area">
        <header> 
            <?php
            include_once "php/config.php";
            $utilizador_id = mysqli_real_escape_string($conn, $_GET['utilizador_id']);
                $sql=mysqli_query( $conn, "SELECT * FROM utilizador WHERE unico_id = {$utilizador_id}");
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
        <div class="chat-box">
           
        </div>
        <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name= "saida_id" value="<?php echo $_SESSION['unico_id'];?>" hidden>
            <input type="text" name="entrada_id" value="<?php echo $utilizador_id;?>" hidden>
            <input type="text" name="mensagem" class ="input-field" placeholder="Escreve aqui a mesagem..">
            <button><img src="imagens/icons8_sent_filled.ico" alt=""></button>

        </form>
        </section>
    </div>
    
    <script src="js/mennsagem.js"></script>
</body>
</html>