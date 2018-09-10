
<?php
    session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
<style>
body {font-family: Lato,sans-serif;}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}


.container {
    transform: translate(25%,8%);
     position: relative;
}

span.psw {
    float: right;
    padding-top: 16px;
}
    
    h2{
        text-align: center;
        margin-top: 50px;
    }

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
}

@media only screen and (max-width: 1023px){
    .logo-resp{
        margin-left: 40px;
    }
    .main-nav li{
        margin-right: 40px;
    }
    
}
    
   
header {
        background-color: #695f5f;
}

.logo-resp{
    height: 100px;
    border-radius: 80px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.main-nav{
    float: right;
    list-style: none;
    margin-top: 50px;
    letter-spacing: 1px;
}

.main-nav li{
    display: inline-block;
    margin-left: 40px;
}

.main-nav li a:link,
.main-nav li a:visited{
    color: #fff;
    transition: color 0.2s;
    text-transform: uppercase;
    text-decoration: none;
    padding: 5px 0;
    font-size: 100%;
}

.main-nav li a:active,
.main-nav li a:hover{
    color: #2ee216;
}

header{
  z-index: 9999;  
} 

.row{
    max-width: 1140px;
    margin: 0 auto;
}
    
 html{
        overflow-x: hidden;
    }
    
@media only screen and (max-width: 1200px){
    .logo-resp{
        margin-left: 30px;
    }
    
    .main-nav li:last-child{
        margin-right: 30px;
    }
}
    
</style>
</head>
<body>
    
<header>
        <nav>
            <div class="row" id="home">
                <img src="resources/img/logo2.png" alt="Grillber logo" class="logo-resp">
                <ul class="main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="reserve.php">Reserve</a></li>
                </ul>
            </div>
     </nav>
</header>
    
<h2>Login</h2>

<form method="post" action="checklogin.php">
    
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input type="submit" name="submit" value="Login"> 
      
      <h5>Don't have an account? <a href="signup.php">Sign up here!</a></h5>
  </div>
    
</form>

</body>
</html>
