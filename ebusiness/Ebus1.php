<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        <title>Select Product</title>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        <div class="amazon">
             <img src="../Images/Amazon.png">
        </div>
        
        <div class="cloud9">
            <img src="../Images/cloud9.png">
        </div>
        
         <div class="gmail">
            <img src="../Images/gmail.png">
        </div>
        
         <div class="salesforce">
            <img src="../Images/salesforce.png">
        </div>
        
            <h3 class="productheading">Select a Product</h3>
      
            <br/>
            
            <form method="POST" action="Ebus2.php">
              <!-- making radio buttons and prices-->
              <div class = "centering">
              <label for="salesforce">
                <input  type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br />
              
                
              <label for="Cloud9">
                <input type="radio" id="Cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br />
              
                  
              <label for="Gmail">
                <input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              
              
              <br/>
              <br/>
              <!--making lables to store the values and setting them to read only-->
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                Vat
                <input type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discount">
                 Discount
                <input type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
            </div>
              <br/>
             <!--buttons for proceeding and calculating cost-->
              
              <button class="addtocart" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
             
            </form>
            
            <br/>
            
            <button class = "calculatecost" onClick="calcSub()">Calculate Cost</button>
            
            
            <a role="button" href="Ebus1.php" class = "clearchoice">Clear Choice</a>
            
    </body>
</html>