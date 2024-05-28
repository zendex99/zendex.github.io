<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    
    *{
        margin-top: 0;
        margin-left:0;
        margin-right:0;
        padding: 0;
        box-sizing: border-box;
        font-family: Roboto;
    }
    body{
        background-color: white;
    }
    
    .logo{
    width: 376px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.logo p{
    color: white;
    font-size: 20px;
}

.logo img{
    width: 100px;
    padding-left: 20px;
}
    .nav-box{
    
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }
    .nav{
        display: flex;
        justify-content: space-between;
        height: 11vh;
        background-color: rgb(0, 72, 255);
    }
    
    .nav-list ul{
        list-style: none;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100%;
        width: 70px;
        gap: 20px;
    }
    .nav-list ul li{
        border-radius: 20px;
        width: 100px;
        text-align: center;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    
    .nav-list ul li a{
    
        text-decoration: none;
        color: black;
    }

    .nav-title{
        display: flex;
        align-items: center;
        font-size: 22px;
        color: white;
        margin-right: 319px;
    }

    .content{
        display: flex;
        justify-content: center;

        height: 70vh;
    }
    #home-symb{
        font-size: 40px; margin-right: 20px;
    }
    #home-i{
        color: white;
    }
    #in-std{
        text-align: center;
         margin-top: 40px; 
         font-size: 22px;
    }
    h2{
        margin-top: 4%;
    }
    th{
        width:200px;
    }
    /* table{
        border: 4px solid skyblue;
        background-color: smoke;
        border-spacing: 5px;
        border-radius: 10px;
        font-size: 20px;
       
    } */
    tr{
        color:;
    }

    #c1{
        background-color:lightblue;
    }
    #c2{
        background-color:lightblue;
    }
    #c3{
        background-color:lightblue;
    }
    #c4{
        background-color:lightblue;
    }
    #c5{
        background-color:lightblue;
    }
    </style>
<body>
    <div class="nav-box">
        <div class="nav">
            <div class="logo">
                <img src="image/kvbp.png">
                <p>Kolej Vokasional Balik Pulau</p>
            </div>

            <div class="nav-title">
                <p id="title-stdLate" ><b>STUDENT RECORDS</b></p>
            </div>

            <div class="nav-list">
                    <ul>
                        <li  id="home-symb" ><a href="adminPage.php" target="_self">
                            <i id="home-i" title="Home"  class='bx bxs-home'></i></a></li>
                    </ul>
            </div>
        </div>
    </div>
    <center>

 <center>
    <h2>STUDENT COME LATE FOR <p id="date"></p></h2>
</center>
        <table border=1 cellpadding=8 cellspacing=0 bgcolor=white >
            <tr>
                <th id="c1">NUMBER</th>
                <th id="c2">NAME </th>
                <th id="c3">DATE</th>
                <th id="c5">DELETE</th>
              
            </tr>
        
            <?php
		  	include ('config.php');

		  	$papar=mysqli_query($connect,"SELECT * FROM lacturerduty ORDER BY no");

		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['no_matrik']."</td>
			<td>".$row['nama']."</td>
        		<td>".$row['waktu']."</td>
        		<td>".$row['kelas']."</td>
                <td>","<a  href=\"padam.php?no_matrik=".$row['no_matrik']. "\" Onclick=\"return confirm('Are you sure want to delete this record?')\">DELETE</td>;

		  </tr>";
		}
		  ?>



		</table>
    </center>
    <script>
let date = document.getElementById("date");
setInterval(()=>{

let currentTime = new Date();
let month = currentTime.getMonth() + 1;

date.innerHTML = currentTime.getDate()+"/"+month+"/"+currentTime.getFullYear();
},1000)
</script>
    </html>