<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Roboto, sans-serif;
        }

        .logo {
            width: 500px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .logo p {
            color: white;
            font-size: 20px;
        }

        .logo img {
            width: 100px;
            padding-left: 20px;
        }

        .nav-box {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 2;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            height: 11vh;
            background-color: rgb(0, 72, 255);
        }

        .nav-list ul {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 600px;
            gap: 11px;
        }

        .nav-list ul li {
            width: 100px;
            text-align: center;
            cursor: pointer;
        }

        .nav-list ul li a {
            font-size: 17px;
            text-decoration: none;
            color: rgb(255, 255, 255);
        }

        .bg_img {
            text-align: center;
        }

        .bg_img img {
            width: 100%;
            filter: brightness(48%);
        }

        .bg_img h1 {
            position: absolute;
            top: 36%;
            left: 0;
            right: 0;
            font-size: 28px;
            z-index: 1;
        }

        .footer {
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(215, 214, 214);
        }

        button {
            width: 100px;
            padding: 5px;
            border-radius: 14px;
            border: solid 1.7px black;
            background-color: transparent;
            color: white;
            z-index: 1;
            position: absolute;
            left: 47%;
            right: 0;
            top: 50%;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(47, 120, 231);
        }

        button a {
            text-decoration: none;
            color: white;
        }

        .content2 {
            display: flex;
            justify-content: center;
        }

        .dashboard {
            height: 30vh;
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 40px;
            position: absolute;
            top: 400px;
        }

        .student,
        .teacher {
            width: 210px;
            background-color: #53C0F7;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 25px;
            box-shadow: 3px 3px 3px;
        }

        .student h4,
        .teacher h4 {
            text-align: center;
            padding-top: 10px;
        }

        .student h1,
        .teacher h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 70px;
        }

        .bg_img i {
            font-style: normal;
            color: white;
        }

        #title-better {
            top: 42%;
            font-size: 24px;
        }

        #tch-duty {
            text-align: center;
            padding-top: 10px;
        }

        #stdlate {
            text-align: center;
            margin-top: 50px;
            font-size: 70px;
        }

        #copy {
            text-align: center;
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
            <div class="nav-list">
                <ul>
                    <li><a href="lateRecords.php" target="_self">View records</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="aboutUs.php">About us</a></li>
                    <li><a href="lateRecords.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="bg_img">
            <h1><b>Welcome to Student</b> <i>Lateness System</i></h1>
            <h1 id="title-better"><b>“Better three hours early than a minute too late.”</b></h1>
            <button><a href="insertMCnum.php">Next</a></button>
            <img src="image/background1.png">
        </div>
    </div>

    <div class="content2">
        <div class="dashboard">
            <div class="student">
                <h4>Students late:</h4>
                <h1 id="lateCount"></h1>
            </div>
            <div class="teacher">
                <h4 id="tch-duty">Teachers on duty:</h4>
                <h1 id="stdlate"></h1>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="info">
            <p id="copy">&copy; Zendex 2024</p>
        </div>
    </div>
</body>

<!-- NI TEMPAT UNTUK PAPAR DLM DASHBORD, DATA OR NO II TU SEMUA DIA AMIK DLM DB -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zendex";
$conn = new mysqli($servername, $username, $password, $dbname);
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
        const lateCountElement = document.getElementById('lateCount');
        const lateCount = <?php echo $count; ?>;
        lateCountElement.textContent = lateCount;
    });
</script>

<!-- UNTUK BAHAGIAN CG PULAK -->

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

</html>
