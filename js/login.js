const form= document.querySelector(".login form"),
continueBt = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit=(e)=>{
    e.preventDefault();
}

continueBt.onclick=()=>{
    //inicia o ajax
    let xhr =new XMLHttpRequest();//cria um objecto XML
    xhr.open("POST", "php/login.php",true);
    xhr.onload=()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
               if(data == "Sucesso"){
                location.href="user_chat.php";
               }else{
                errorText.textContent= data;
                errorText.style.display="block";
                
               }
            }
        }

    }
    // enviar os dados do formulario com ajax no php
    let formData = new FormData( form);// criar um novo objecto para formulario de dados
    xhr.send(formData);// enviado os dados do formulario para php
}