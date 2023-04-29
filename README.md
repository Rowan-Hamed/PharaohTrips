# PharaohTrips
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharaoh Trips : Online Tour Booking Website</title>
    <link rel="stylesheet" href="Index.css">
    <style>
     *{
    margin: 0;
    padding: 0;
}
.wrapper{
    width: 1170px;
    margin: auto;
}
header{
    background:linear-gradient(rgba(0,0,0,0.3),rgba(0, 0, 0, 0.3)) , url(PharaohTrips/bg2.jpg);
    height: 100vh;
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
    position:relative;
}
.nav-area{
    float: right;
    list-style: none;
    margin-top: 45px;
    margin-right: -265px;
}
.nav-area li{
    display: inline-block;
}
.nav-area li a{
    color: #fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 20px;
}
.nav-area li a:hover{
    background: #fff;
    color: black;
}
.logo img{
    width: 250px;
    float: left;
    margin-left: -340PX;
    margin-top: 30px;
    height: auto;
}
.welcome{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 22% 33%;
    text-align: center;
}
.welcome h1{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 60px;
}
.welcome a{
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin:20px 5px;
    display: inline-block;
    color: #fff;
    font-family:Arial, Helvetica, sans-serif;
}
.welcome a:hover{
    background: #fff;
    color: black;
}   
    </style>   
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="PharaohTrips/Logo.png" alt="">
            </div>
            <ul class="nav-area">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <div class="welcome">
            <h1>Welcome</h1>
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
        </div>
    </header>
</body>
  
