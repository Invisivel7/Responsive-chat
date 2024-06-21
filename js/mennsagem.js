const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit=(e)=>{
    e.preventDefault();
}

sendBtn.onclick=()=>{
      //inicia o ajax
      let xhr =new XMLHttpRequest();//cria um objecto XML
      xhr.open("POST", "php/insert_mensagem.php",true);
      xhr.onload=()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status ===200){
                inputField.value = "";
                scrollToBottom();
              }
          }
  
      }
      // enviar os dados do formulario com ajax no php
      let formData = new FormData( form);// criar um novo objecto para formulario de dados
      xhr.send(formData);// enviado os dados do formulario para php
  
}
chatBox.onmouseenter =()=>{
    chatBox.classList.add("active")
}
chatBox.onmouseleave =()=>{
    chatBox.classList.remove("active")
}

setInterval(()=>{
    //inicia o ajax
    let xhr =new XMLHttpRequest();//cria um objecto XML
    xhr.open("POST", "php/get_mensagem.php",true);
    xhr.onload=()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                chatBox.innerHTML=data; 
                if(!chatBox.classList.contains("active")){// se a classe active nao esta 
                    scrollToBottom();  
                } 
              
        }

    }
   }
 // enviar os dados do formulario com ajax no php
 let formData = new FormData( form);// criar um novo objecto para formulario de dados
 xhr.send(formData);// enviado os dados do formulario para php

}, 500); // essa funcão é a frequência de pois de 500ms;

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}