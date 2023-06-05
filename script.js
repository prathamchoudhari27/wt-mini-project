var contactForm = document.getElementById("form");
// var nameInput = document.getElementById('name')
var nameInput = document.getElementById("name");
var lname = document.getElementById('lname')
var email = document.getElementById('email')
var number = document.getElementById('number')
var nameError = document.getElementById("nameError");
var emailError = document.getElementById("emailError");
var messageerror = document.getElementById("messageError")


contactForm.addEventListener("submit", function(event) {
    var isValid = true;


    nameError.textContent = "";
      phoneError.textContent = "";
      emailError.textContent = "";
      messageError.textContent = "";
      

      var namePattern = /^[A-Za-z]+$/;
      if (!namePattern.test(nameInput.value.trim())) {
        nameError.textContent = "Only alphabets are allowed";
        isValid = false;
      }
     
      var emailPattern = /^\S+@\S+\.\S+$/;
      if (!emailPattern.test(emailInput.value)) {
        emailError.textContent = "Invalid email address";
        isValid = false;
      }

      var phonePattern = /^\d+$/;
      if (!phonePattern.test(phoneInput.value.trim())) {
        phoneError.textContent = "Only numbers are allowed";
        isValid = false;
      }

      if (!isValid) {
        event.preventDefault();
      }

     

});