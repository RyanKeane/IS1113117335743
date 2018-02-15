<?php
// start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEPT</title>
    </head>
    <body>
        <h4>RECEPT</h4>
        
        
        <?php
        //Echo session variables that were set on previous page 
        echo "Total is" . $_SESSION["total"] . ".";
        ?>
        
    </body>
</html>