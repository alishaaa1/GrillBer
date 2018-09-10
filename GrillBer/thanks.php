<?php
    session_start();
?>
<html>
    <style>
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
             background-color: #695f5f;
        } 

        .row{
            max-width: 1140px;
            margin: 0 auto;
        }
         h2 {
            margin-top: 40px;
            text-align: center;
        }
        h3{
            text-align: center;
        }
        
        @media only screen and (max-width: 1200px){
        .logo-resp{
            margin-left: 30px;
        }
        .main-nav li:last-child{
            margin-right:30px;
            }
        }
    </style>
    <body>
          <header>
            <nav>
                <div class="row" id="home">
                    <img src="resources/img/logo2.png" alt="Grillber logo" class="logo-resp">
                    <ul class="main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="reserve.php">Reserve</a></li>
                         <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
         </nav>
        </header>
        <form method="post" action="thanks.php">
            <h2>Your grill has been reserved. </h2>
            <h3>Thank you for your payment!</h3>
        </form>
    </body>
</html>