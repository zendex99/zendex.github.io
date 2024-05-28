let time = document.getElementById("time");
let date = document.getElementById("date");


setInterval(()=>{

    let currentTime = new Date();
    let month = currentTime.getMonth() + 1;
    
    date.innerHTML = currentTime.getDate()+"/"+month+"/"+currentTime.getFullYear();

    if(currentTime.getMinutes() <= 9){

        time.innerHTML = currentTime.getHours() +":"+"0"+currentTime.getMinutes();
    }
    else{
        time.innerHTML = currentTime.getHours() +":"+currentTime.getMinutes();
    }

},1000)