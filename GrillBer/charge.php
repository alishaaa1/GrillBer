<?php
        session_start();
        $_SESSION['time'] = $_POST['usr_time'];
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['select'] = $_POST['type'];
?>
<html>
    <style>
        h2 {
            margin-top: 40px;
            text-align: center;
        }
        html {
          
            overflow-x: hidden;
        }
        form {
           
        }
        button{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
          /*  margin-top: 40px;
            margin-left: 200px;*/
            transform: translate(450%,150%);
            border: none;
            cursor: pointer;
            width: 10%;
        }
        
        table {
          table-layout: fixed;
          width: 40%;
          border-collapse: collapse;
          border: 3px solid #000;
          transform: translate(75%,20%)
        }
        
        table td {
            border-right: 2px solid #000;
            padding: 5px 0;
            }
        table th {
            border-bottom: 2px solid #000;
            padding: 5px 0;
        }
        table tr {
            text-align: center;
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
             background-color: #695f5f;
        } 

        .row{
            max-width:1140px;
            margin: 0 auto;
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
        <h2>Purchase summary</h2>
    
        <table>
            <tr>
                <th>Item</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Date</td>
                <td> <?php echo $_SESSION['date']; ?> </td>
            </tr>
            <tr>
                <td>Time</td>
                <td><?php echo $_SESSION['time']; ?></td>
            </tr>
            <tr>
                <td>Grill</td>
                <td><?php echo $_SESSION['select']; ?></td>
            </tr>
            <tr>
                <td>Total cost</td>
                <td> $90 </td>
            </tr>
            </table>
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
    data-amount="9000"
    data-name="Stripe.com"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>
    </body>
</html>

