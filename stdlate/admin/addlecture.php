
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Roboto;
        }
        body{
            background-color: rgb(62, 61, 61);
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
            margin-right: 220px;
        }

        .content{
            display: flex;
            justify-content: center;
            height: 70vh;
        }

        .form-box{
            position: absolute;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            height: 600px;
        }

        .form{
            position: relative;
            top: 10%;
            width: 315px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: skyblue;
            border-radius: 14px;
            height: 415px;
            margin-left: 120px;
        }

        .form input{
            border-radius: 20px;
            padding: 10px;
            padding-left: 20px;
            border: none;
            margin-bottom: 20px;
            width: 80%;
        }

        .form button{
            background-color: #57aeff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 17px;
            border-radius: 22px;
            width: 140px;
            margin-top: 20px;
        }

        .dateTime{
            display: flex;
            position: relative;
            left: 79vh;
            height: 100px;
        }
        #stdLate{
            font-style: italic;
            text-align: center;
        }
        #home-symb{
            font-size: 40px; 
            margin-right: 20px;
        }
        #home-i{
            color: white;
        }
        #in-std{
            text-align: center;
            margin-top: 40px; 
            font-size: 22px;
        }
#bt-ent{
            margin-top: 90px;
        }
        button{
            margin-top: 20px;
        }
        #title-rec1{


        }
        #title-rec2{
            color: #556EDB;
        }
        #datetime1{
            display: flex; 
            justify-content: center;
            align-items: center;
        }
        #datetime2{
            font-size: 40px; 
            color: white;
        }
        #date{
            margin-left: 10px; 
            font-size: 20px; 
            color: white;
        }
        #time1{
            display: flex; 
            justify-content: center;
            align-items: center;
            margin-right: 120px;
            border-left: 2px solid rgb(255, 255, 255); 
            padding-left: 10px;
        }
        #time2{
            font-size: 40px; 
            color: white;
        }
        #time{
            margin-left: 10px; 
            font-size: 20px; 
            color: white;
        }
        .date1{
            background-color:blue;
        }
    </style>
</head>
<body>
    <div class="nav-box">
        <div class="nav">
            <div class="logo">
                <img src="image/kvbp.png">
                <p>Kolej Vokasional Balik Pulau</p>
            </div>

            <div class="nav-title">
                <p id="title-stdLate"><b>STUDENT LATENESS FORM</b></p>
            </div>

            <div class="nav-list">
                <ul>
                    <li id="home-symb">
                        <a href="homePage.php" target="_self">
                            <i id="home-i" title="Home" class='bx bxs-home'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="form-box">
            <div class="form">
                <h3 id="in-std">INSERT Name Lecture</h3>
                <br>
                <form method="POST">
                <input type="text" name="nombor" id="no" placeholder="INSERT NUMBER" required>
                    <input type="text" name="lec" id="lec" placeholder="INSERT NAME" required>
                    <input type="date" name="date" id="date1" class="formbold-form-input" required>
                    <button type="submit" name="hantar" value="Hantar">Submit</button>
                </form>     
            </div>
        </div>
        <div class="dateTime">
            <div id="datetime1" class="date">
                <i id="datetime2" title="Date" class='bx bx-table'></i>
                <p id="date"></p>
            </div>
            <div id="time1" class="time">
                <i id="time2" title="Time" class='bx bxs-time'></i>
                <p id="time"></p>
            </div>
        </div>
    </div>
<!-- bahagian databse -->
   
<?php
include('config.php');

    if (isset($_POST['hantar'])) {
        $no = $_POST['nombor'];
        $lec = $_POST['lec'];
        $date = $_POST['date'];
    
        var_dump($no, $lec, $date);
    
        $query = "INSERT INTO lecturerduty (no, lec, date) VALUES ('$no', '$lec', '$date')";
        if (mysqli_query($connect, $query)) {
            echo "<script>
                    alert('Your data have been updated');
                    window.location.href = 'adminPage.php';
                  </script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);               
    }
    

?>

   
       
   <script src="js/dateTime.js"></script>
   
   
</body>
</html>