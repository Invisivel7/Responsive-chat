<?php
include_once "header.php"


?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header> Realtime chat App</header>
            <form action="#">
                <div class="error-text"></div>

                <div class="field input">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="field input">
                    <label for="">PassWord</label>
                    <input type="password" placeholder="PassWord" name="senha">
                   <i> <img src="imagens/icons8_visible.ico" alt=""></i>
                </div>

                <div class="field button">
                    <input type="submit" value=" Continue to chat">
                </div>
            </form>

            <div class="link">Ainda não tem conta?<a href="index.php">Registar</a></div>
        </section>
    </div>
    
    <script src="js/chat.js"></script>
    <script src="js/login.js"></script>
</body>
</html>