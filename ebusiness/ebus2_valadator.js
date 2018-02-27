/* global $ */

function validateName(){
    
    var name;
    
    name = document.getElementById("user_name").value;

    if (name == ""){
        alert("Please enter your name");
    }
    else if (!name.match(/^[a-zA-Z]+$/)){
        alert('this is not a valid name');
    }
    else{
        validateEmail();
    }

}

function validateEmail(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("please enter your email")
    }
    else if (validateInputEmail(email) == false){
        alert("please enter valid email");
    }
    else{
        validatePin();
    }
}

function validatePin(){
    
var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else{
        enablebtnPurchase()
    }
}

function validateInputEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    
function enablebtnPurchase(){
    
    $('#btnPurchase').prop('disabled', false);
    }
    
function disablebtnPurchase() {
    
    $('#btnPurchase').prop('disabled', true);
    }