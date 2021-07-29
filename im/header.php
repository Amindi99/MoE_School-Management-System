<!DOCTYPE php>
<php>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #000033;
  overflow: auto;
  float: right;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 14.28%; 
  text-align: center;
  float: right;
}

img{
  padding-top:8px;
  padding-left:8px;
  padding-bottom:8px;
}

.navbar a:hover {
  background-color: #555;
}

.logo-background{
  background-image: url(assets/img/avatars/header-img.png);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 10px;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>
<center>
<div class = "logo-background">
<img src="assets/img/avatars/logo.png" height="125px" width="700px">
</div>
</center>

<div class="navbar">
<a href="logout.php"> Logout </a>
  <a href="login.php">Register</a> 
  <a href="about-us.php">AboutUs</a> 
  <a href="computer-reg.php"> Computers</a>
  <a href="wifi-reg.php">Wifi</a>
  <a href="television.php">Television</a>
  <a href="index.php"> Home </a>
  

</div>

</body>
</php>