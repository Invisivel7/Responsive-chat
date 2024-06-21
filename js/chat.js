/*mostrar ocultar pass*/
const pswrdfield= document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick=()=>{
   if(pswrdfield.type=="password"){
    pswrdfield.type="text"
   } else{
    pswrdfield.type="password"
   }
}