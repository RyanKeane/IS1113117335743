<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        <title>RECEIPT</title>
    </head>
    <body>
        <div class ="recptheading">
        <h4>RECEIPT OF PURCHASE</h4>
        </div>
        <div class = "receptcentering">
        <?php
        // setting all the session variables so that they will bw carried over from the previous page 
        ?>
        <?php  
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            echo "Email Address: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </div>
        </p>
             
        <div class = "thankyou">
        <p>
            <b>
                Thank You For Your Purchase.
            </b>
        </p>
        </div>
        
        <div class = "homebutton">
         <a href="../Vendor/VendorHome.css">Home</a>
        </div>
    </body>
</html>