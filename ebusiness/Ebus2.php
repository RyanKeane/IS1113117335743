<!DOCTYPE html>
      <html>
      <head>
           <title>Enter Details</title>
           <!--jQuery-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script type="text/javascript" src="cost_calc.js"></script>
      </head> 

      <body>
          
         <h4>Please enter your payment details</h4> 
         
         <br/>
          
        <form method="Post"  action="Ebus3.php">   
         
          <label for="user_pin">
              <input type="Password" id="user_pin"   placeholder="Card PIN" maxlength="4"/>
             
          </label>
           <button type="submit" id="btnPurchase" disabled>Proceed With Purchase</button>
        </form>
        
          <br/>
           <button onClick="valadateDetails()">Valadate</button>
          
          
          <!-- Name imput and Email imput-->
         
         <script type="text/javascript" src="ebus2_valadator.js"></script>
      </body>
</html>