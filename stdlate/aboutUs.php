<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
    color: white;

}
.nav-title{
    display: flex;
    align-items: center;
    font-size: 22px;
    color: white;
    margin-right: 220px;
}

.title{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    color: white;
}

.content{

    margin-top: 5vh;
    display: flex;
    justify-content: center;
    gap: 100px;
}
.image1{
    height: 200px;
    color: white;
}
.image2{
    height: 200px;
    color: white;
}
.image3{
    height: 200px;
    color: white;
}
.image1 img{
    width: 200px;
    border-radius: 50px ;
}
.image2 img{
    width: 200px;
    border-radius: 50px ;
}

.image3 img{
    width: 200px;
    height: 270px;
    border-radius: 50px ;
}
#home-symb{
    font-size: 40px;
    margin-top: 10px;
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
                <p id="title-stdLate" ><b>About us</p>
            </div>

            <div class="nav-list">
                    <ul>
                        <li  id="home-symb" ><a href="homePage.php" target="_self">
                            <i id="home-i" title="Home"  class='bx bxs-home'></i></a></li>
                    </ul>
            </div>

            
        </div>
    </div>
    <div class="title">
        <h3>We are team Zendex.</h3>
    </div>
    <div class="content">
                
        <div class="image1">
            <img src="image/s2.jpg">
            <h4>Name: Amsyar</h4>
        </div>
        <div class="image2">
            <img src="image/s3.jpg">
            <h4>Name: Adam</h4>
        </div>
        
        <div class="image3">
            <img src="image/s1.jpg">
            <h4>Name: Reza</h4>
            
        </div>

    </div>

</body>
</html>