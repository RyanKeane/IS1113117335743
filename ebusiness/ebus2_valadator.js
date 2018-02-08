/* global $ */
function valadateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == "") {
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your pin is accurate");
    }
    else{
        enablebtnPurchase();
    }
 }
    
 function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
 }   
    
 function disablebtnPurchase() {   
    $('#btnPurchase').prop('disabled',true);
}