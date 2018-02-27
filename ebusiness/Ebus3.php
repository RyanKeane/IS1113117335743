<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT OF PURCHASE</h4>
        
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
        </p>
        
        <p>
            <b>
                Thank You For Your Purchase.
            </b>
        </p>
        
        
    </body>
</html>