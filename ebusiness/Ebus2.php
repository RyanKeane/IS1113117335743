<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        

            <form action="Ebus3.php" method="POST">
                
                
                    <label for="user_name" class="lbl_name">Name:
                    <input type="name" id="user_name" name="user_name" placeholder="Name">
                    </label>
                    
                    <br>

                    <label for="user_pin">PIN:
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    </label>
                    
                    <br>
                    
                    <label for="user_email" class="lbl_email"> Email address:
                    <input type="email" id="user_email" name="user_email" Placeholder="Email@example.com">
                    </label>
                    
                    
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            
            
            
            <br/>
            <button onClick="validateName()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            <script type="text/javascript" src="ebus2_valadator.js"></script>
        
    </body>
</html>