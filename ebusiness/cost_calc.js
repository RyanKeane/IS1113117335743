

/*global variable for the vat and discounts  */
var vat = .10
var discount = .05

/* global $ */
function calcSub(){
    
    var argSubTotal;
    /* setting prices and relating it to the elements*/
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    
    if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
     
    if(document.getElementById('Cloud9').checked) {
      argSubTotal = 200;
    }
    
     
    if(document.getElementById('Gmail').checked) {
      argSubTotal = 400;
      
    }
    
    display(argSubTotal, vat ,discount );
}

function display(parm1,parm2,parm3){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm1 + ((parm1*parm2)*parm3) ;
  document.getElementById("vat").value = parm1  * parm2;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}

