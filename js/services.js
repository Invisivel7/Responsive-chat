let nome = document.querySelector('#nome_service').innerHTML;


if(nome.length == 0){
    document.getElementById("preco").innerHTML = "";
    
}else{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("preco").value = this.responseText;
        }
    };
    xmlhttp.open("POST", "pesquisas/trazer_service.php?valor=" + nome, true);
    xmlhttp.send();
}