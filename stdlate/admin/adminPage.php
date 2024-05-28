<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/responsive.css" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Roboto, sans-serif;
    }

    body{
        width: 100%;
    }
    header{
        height: 89px;
        background-color: rgb(0, 72, 255);
        display: flex;
        justify-content: space-between;
    }
    .logo{
    width: 500px;
    display: flex;
    align-items: center;
    gap: 5px;
    }
    .logo img{
    width: 85px;
    }
    .logo p{
    color: white;
    font-size: 20px;
    }
    .title{
        align-self: center;
        color: white;
        margin-right: 43vh;
    }
    .list{
        align-self: center;
        margin-right: 10px;
    }
    .list ul{
        display: flex;
        list-style: none;
        padding: 20px;
    }
    .list ul li{
        margin-right: 20px;
        color: white;
        cursor: pointer;
        padding-right: 7px;
    }
    .main{
        height: 100vh;
        display: flex;
        background-color: #ffffff;
        margin-top: 50px;
    }
    .content1{
        width: 80%;
        height: 70vh;
        display: flex; 
        flex-direction: column;
        gap: 30px;
    }
    .info{
        height:30vh;
        display:flex;
        justify-content: center;
        gap: 50px;
        margin-top: 40px;
    }
    .student{
        width: 210px;
        background-color: #53C0F7;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 25px;
        box-shadow: 3px 3px 3px;
    }
    .teacher{
        width: 210px;
        background-color: #53C0F7;
        border-radius: 25px;
        border: 2px solid rgb(0, 0, 0);
        box-shadow: 3px 3px 3px;
    }
    .dateTime{
        width: 210px;
        background-color: #53C0F7;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 25px;
        box-shadow: 3px 3px 3px;
    }
    .table{
        height: 200px;
    }
    .content2{
        height:70vh;
        width: 20%;
    }
    .side-bar{
        margin-top: 38px;
        width: 240px;
        height: 500px;
        background-color: rgb(224, 212, 212);
        border-left: 2px solid grey;
        border-right: 2px solid grey;
        border-radius: 27px;
        z-index: 1;
    }
    .side-bar ul{
        display: flex;
        height: 400px;
        flex-direction: column;
        align-items: center;
        gap: 40px;
        list-style:none;
        margin: 20px;

    }
    .side-bar ul li{
        width: 150px;
        text-align: center;
        border-radius: 25px;
        background-color: #F1EBE8;
        cursor: pointer;
        font-size: 16px;
        padding: 5px;
        transition: color 2s;
    }
    .side-bar ul li a{
        color: black;
        text-decoration: none;
    }

    .side-bar ul li a:hover{
        color: rgb(0, 4, 255);
        font-size: 18px;
        text-decoration: none;
    }
    #print-button a:hover{
        color: rgb(0, 4, 255);
    }
    .dateTime ul{
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
    }
    .dateTime ul li{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table{
        margin-top: 30px
    }
    table{
        border: none;
        border-spacing: 10px;
    }
    th{
        border-radius: 20px;       
        background-color: #FF5757;
        color: black;
        padding: 7px;
    }
    td{
        border-radius: 10px;
        background-color: #A6A6A6;     
        color: white;
        padding: 7px;
        text-align: center;
    }
    .student h4{
        text-align: center; 
        padding-top: 10px;
    }
    .student h1{
        text-align: center; 
        margin-top: 50px; 
        font-size: 70px;
    }
    #tch-duty{
        text-align: center; 
        padding-top: 10px;
    }

    #stdlate{
        text-align: center; 
        margin-top: 50px; 
        font-size: 70px;
    }

    #datetime1{
        list-style: none;
    }

    #datetime2{
        font-size: 40px;
    }

    #date{
        font-size: 28px;
    }

    #time1{
        font-size: 40px; 
        padding-right: 28px;
    }

    #time{
        font-size: 28px;
    }

    #no{
        width:120px;
    }

    #lect{
        width: 500px;
    }

    #table-date{
        width:170px;
    }

    #no-start{
        width:120px;
    }

    #lect-name{
        width: 500px;
    }

    #table-date-show{
        width:170px;
    }

    #list-student{
        margin-top: 60px;
    }
#print-button {
    text-decoration: none;
    outline: none;
    border: none;
}

#print-button a {
    text-decoration: none;
    outline: none;
    border: none;
    color: black;
}
#view{
    color: white;
    text-decoration: none;
}
    </style>
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="image/kvbp.png"></img>
        <p>Kolej Vokasional Balik Pulau</p>
    </div>
    <div class="title">
        <h1>ADMIN PAGE</h1>
    </div>
    <div class="list">
        <ul>
            <li id="logoutBtn">Log Out</li>
        </ul>
    </div>
</header>

<div class="main">
    <div class="content1">
        <div class="info">
            <div class="student">
                <h4 >Students late:</h4>
                <h1 id="lateCount"></h1>
            </div>
            <div class="teacher">
    <h4 id="tch-duty">Teachers on duty:</h4>
    <h1  id="stdlate"></h1>
</div>

            <div class="dateTime">
                <ul id="datetime1">
                    <li> 
                        <i id="datetime2" title="Date"  class='bx bx-table' ></i>
                        <p id="date" ></p>
                    </li>
                    <li>
                        <i id="time1" title="Time"  class='bx bxs-time'></i>
                        <p id="time"></p>
                    </li>
                </ul>
            </div>
        </div>
        <center>
            <div class="table">
                <table border="1px solid black">
                    <tr>
                        <th id="no">No</th>
                        <th id="lect">Lecturer</th>
                        <th id="table-date">Date</th>
                    </tr>
                    <?php
            
                    include('config.php');
                    $totalLecturers = 2;
                  
                    $query = "SELECT * FROM lecturerduty";
                    $result = mysqli_query($connect, $query);

                  
                    $no = 1;

                    // Check klw dh berjaya connect
                    if ($result) {
                        // ni tempat nk paparkan data
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>"; 
                            echo "<td>" . $row['lec'] . "</td>"; 
                            echo "<td>" . $row['date'] . "</td>"; 
                            echo "</tr>";
                            
                        
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='3'>Failed to retrieve data from the database.</td></tr>";
                    }

                    // tutup db punya connection
                    mysqli_close($connect);
                    ?>
                </table>
            </div>
        </center>
    </div>
    <div class="content2">
        <div class="side-bar">
            <ul>
                <li id="list-student">
                <a href="lateRecords.php">List Student Late</a>
                </li>
                <li  id="print-button">
                <a href="print.php">Warning Letter</a>
                </li>
                <li  id="btn-add">
                <a href="addlecture.php">Add Lecturer</a>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
<script src="js/dateTime.js"></script>
</html>


<script>
   document.addEventListener("DOMContentLoaded", function() {

    var logoutBtn = document.getElementById("logoutBtn");

    logoutBtn.addEventListener("click", function() {
    
        var confirmed = window.confirm("Are you sure you want to log out from admin page?");
        
  
        if (confirmed) {
            
            localStorage.clear();
    
            window.location.href = "http://localhost/stdlate/homePage.php"; 
        }
    });
});

</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zendex";

// Dia buat koleksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Check data
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT COUNT(*) as count FROM late";
$result = $conn->query($sql);
$count = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];
}
$conn->close();
?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Tunjuk elimen h1
        const lateCountElement = document.getElementById('lateCount');

        // DIA KIRA jumlah murid yg mai lambat
        const lateCount = <?php echo $count; ?>;

        // dia papar
        lateCountElement.textContent = lateCount;
    });
</script>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zendex";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT COUNT(*) as count FROM lecturerduty";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];
}
$conn->close();
?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stdlateElement = document.getElementById('stdlate');
        const stdlate = <?php echo $count; ?>;
        stdlateElement.textContent = stdlate;
    });
</script>



