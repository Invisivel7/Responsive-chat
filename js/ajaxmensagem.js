let valor = document.querySelector('#nome_service').innerHTML;



    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("preco").value = this.responseText;
        }
    };
    xmlhttp.open("GET", "php/trazermensagen.php?utilizador_id=" + valor, true);
    xmlhttp.send();