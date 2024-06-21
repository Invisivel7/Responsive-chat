  <?php
include_once "header.php"


?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header> Realtime chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">first name</label>
                        <input type="text" placeholder="primeiro nome" name="primeiro_nome" required>
                    </div>
                    <div class="field input">
                        <label for="">last name</label>
                        <input type="text" placeholder="ultimo nome" name="ultimo_nome" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="field input">
                    <label for="">PassWord</label>
                    <input type="password" placeholder="PassWord" name="senha" required>
                    <i> <img src="imagens/icons8_visible.ico" alt=""></i>
                </div>
                <div class="field image">
                    <label for="">Select imagem</label>
                    <input type="file" name="imagem" required>
                </div>
                <div class="field button">
                    <input type="submit" value=" Continue to chat">
                </div>
            </form>

            <div class="link">Já tem conta?<a href="chat_login.php">Entrar</a></div>
        </section>
    </div>
    
    <script src="js/chat.js"></script>
    <script src="js/singup.js"></script>
</body>
</html>