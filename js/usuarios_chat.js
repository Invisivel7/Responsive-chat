const searchbar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"), 
userList = document.querySelector(".users .users-list");



searchBtn.onclick=()=>{
    searchbar.classList.toggle("active");
    searchbar.focus();
    searchbar.valeu = " ";
    if(searchBtn.classList.contains("active")){
        searchBtn.classList.remove("active");
        searchBtn.innerHTML=" <img src='imagens/icons8_search_3.ico' >" ;
     }
     else{
        searchBtn.classList.add("active");
         searchBtn.innerHTML=" <img src='imagens/icons8_close_window.ico' >" ;
 
     }
     
}
searchbar.onkeyup=()=>{
    
    let searchTerm = searchbar.value;
    if(searchTerm != ""){
        searchbar.classList.add("active");
    }else{
        searchbar.classList.remove("active");
    }
    let xhr =new XMLHttpRequest();//cria um objecto XML
    xhr.open("POST", "php/pesquisa.php", true);
    xhr.onload=()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status ===200){
                let data = xhr.response;
                userList.innerHTML=data; 
                
        }

    }
   }
   xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded")
   xhr.send("searchTerm=" + searchTerm);

}

setInterval(()=>{
     //inicia o ajax
     let xhr =new XMLHttpRequest();//cria um objecto XML
     xhr.open("GET", "php/utilizador.php",true);
     xhr.onload=()=>{
         if(xhr.readyState === XMLHttpRequest.DONE){
             if(xhr.status ===200){
                 let data = xhr.response;
                 if(!searchbar.classList.contains("active")){
                    userList.innerHTML=data; 
                    
                 }
                
               
         }
 
     }



     var modal = document.querySelector(".modal");
     var closeBtn = document.querySelector(".close-icon")
     closeBtn.addEventListener("click",()=>{
     modal.classList.remove("active");
     });
      var i;
      var allBtnEdit =document.querySelectorAll(".edit")
         for(i =0; i<allBtnEdit.length;i++){
             allBtnEdit[i].onclick=function(){
                 modal.classList.add("active");
                 document.getElementById("service_n").value = valor;
                 
             }
         }
    }
    
    xhr.send();

   
}, 500); // essa funcão é a frequência de pois de 500ms;
