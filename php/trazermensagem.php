<?php
            include_once "php/config.php";
            $utilizador_id = mysqli_real_escape_string($conn, $_GET['utilizador_id']);
                $sql=mysqli_query( $conn, "SELECT * FROM tb_funcionario WHERE id_funcionario = {$utilizador_id }");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);

                }
            ?>