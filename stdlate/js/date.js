let date = document.getElementById("date");
setInterval(()=>{

let currentTime = new Date();
let month = currentTime.getMonth() + 1;

date.innerHTML = currentTime.getDate()+"/"+month+"/"+currentTime.getFullYear();
},1000)