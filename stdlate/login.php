<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <style>
         /* CSS Styles */
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Roboto;
        }
        
        .logo{
            width: 300px;
            display: flex;
            align-items: center;
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
            width: 600px;
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
        
        .content{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80vh;
        }
        .text{
            position: relative;
            left: 15%;
            font-size: 28px;
            text-align: center;
        }
        .login_form{
            position: relative;
            right: 12%;
            background-color: #DFDBD9;
            width: 400px;
            height: 60%;
            border-radius: 18px;
            box-shadow: -24px 20px 5px #C6C6C6;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input{
            border-radius: 20px;
            border: none;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
            font-size: 20px;
        }
        #bt-home1{
            font-size: 40px;
            margin-right: 20px;
        }
        #bt-home2{
            color: white;
        }
        #title-std{
            margin-bottom: 30px;
        }

        #image1{
            width: 60vh;
        }
        #form1{
            display: flex; 
            flex-direction: column;
        }
        #manage{
            text-align: center; 
            margin-top:18px; 
            font-size: 20px;
        }
        #username{
            position: relative; 
            top:43px; 
            font-style: italic;
        }
        #password{
            position: relative;
            top:64px; 
            font-style: italic;
        }
        #login{
            position: relative; 
            top:88px; 
            background-color: #57a0ff; 
            border: none; 
            border-radius: 17px; 
            width: 69px;  
            padding: 5px; 
            font-size: 16px; 
            cursor: pointer;
        }
        .error_message {
            color: red;
            font-size: 16px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body style="background-color: azure;">
    <div class="nav-box">
        <div class="nav">
            <div class="logo">
                <img src="image/kvbp.png">
                <p>Kolej Vokasional Balik Pulau</p>
            </div>
            <div class="nav-list">
                <ul>
                    <li id="bt-home1"><a href="homePage.php" target="_self">
                        <i id="bt-home2" class='bx bxs-home'></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="text">
            <p id="title-std"><b>STUDENT LATENESS <br>SYSTEM</b></p>
            <img id="image1" src="image/imageLogin.png">
        </div>
        <div class="login_form">
            <form id="loginForm" action="login.php" method="POST">
                <h3 id="manage">MANAGEMENT <br>LOGIN</h3>
                <input id="username" type="text" name="username" placeholder="Username" required></input>
                <input id="password" type="password" name="password" placeholder="Password" required></input>
                <button id="login" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

<!-- NI BAHAGIAN UNTUK LOG IN-->
<!-- USERNAME : admin
     PASSWORD : admin123 -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

    
        if (username === 'admin' && password === 'admin123') {
            localStorage.setItem('loggedIn', 'true');
            localStorage.setItem('username', username);
            window.location.href = 'admin/adminPage.php';
        } else {
            alert('Invalid username or password');
        }
    });
});
</script>

</html>

