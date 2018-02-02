<!DOCTYPE html>
      <html>
      <head>
           <title>Select Product</title>
           <!--jQuery-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script type="text/javascript" src="cost_calc.js"></script>
      </head> 

      <body>
          
         <h4>Select a Product</h4> 
         
         <br/>
          
         <form method="Post"  action="Ebus2.php">   
         
          <label for="salesforce">
              <input type="radio" id="salesforce"   name="Product" checked onclick="<disablebtnProceed()"/>
              Salesforce @ £100
          </label>
           
           
          <br/>
          
           <label for="aws">
              <input type="radio" id="aws"   name="Product" onclick="<disablebtnProceed()"/>
              AWS @ £300
          </label>
           
           
         <br/>
         <br/>
         
         <label for="subtotal">
              Subtotal
              <input type="text"  id="subtotal"   name="Product" value="0.00" readonly/>
         </label>
           
           
          <br/>
           
           <label for="total">
              Total
              <input type="text"  id="total"   name="Product" value="0.00" readonly/>
          </label>
           
           
          <br/>
          
          <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
          
         </form>
         
         <br/>
         
         <button onClick="calcSub()">Calculate Cost</button>
         <a role="Button" href="Ebus1.php">Clear Choice</a>
         

      </body>
</html>