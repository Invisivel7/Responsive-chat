var time_display = document.getElementById("time");

function refreshTime(){
    //var data_string = new Date().toLocaleString("pt-PT", {timeZone: "Africa/Luanda"});
   // var formatted_string = data_string.replace(", ", " ");
   // time_display.innerHTML = formatted_string;
   var date = new Date();
   var month = ("0" + (date.getMonth() + 1)).slice(-2);
   var day = ("0" + (date.getDate())).slice(-2);
   var year = date.getFullYear();
   var hour = ("0" + (date.getHours())).slice(-2);
   var min = ("0" + (date.getMinutes())).slice(-2);
   var seg = ("0" + (date.getSeconds())).slice(-2);

   var new_data = year + "/" + month + "/" + day + " " + hour + ":" + min + ":" + seg;
   time_display.value = new_data;
}

setInterval(refreshTime, 1000);