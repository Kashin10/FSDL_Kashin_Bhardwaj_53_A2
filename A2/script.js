document.getElementById("myForm").addEventListener("submit", function (e) {
  e.preventDefault();

  
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();
  let mobile = document.getElementById("mobile").value.trim();

  
  let nameError = document.getElementById("nameError");
  let emailError = document.getElementById("emailError");
  let passError = document.getElementById("passError");
  let mobileError = document.getElementById("mobileError");

  
  nameError.innerText = "";
  emailError.innerText = "";
  passError.innerText = "";
  mobileError.innerText = "";

  let isValid = true;

  
  if (name === "") {
    nameError.innerText = "Name is required!";
    isValid = false;
  }


  if (email === "") {
    emailError.innerText = "Email is required!";
    isValid = false;
  } else if (!email.includes("@") || !email.includes(".")) {
    emailError.innerText = "Enter a valid email!";
    isValid = false;
  }

  
  if (password === "") {
    passError.innerText = "Password is required!";
    isValid = false;
  } else if (password.length < 6) {
    passError.innerText = "Password must be at least 6 characters!";
    isValid = false;
  }

  
  if (mobile === "") {
    mobileError.innerText = "Mobile is required!";
    isValid = false;
  } else if (mobile.length !== 10 || isNaN(mobile)) {
    mobileError.innerText = "Mobile must be exactly 10 digits!";
    isValid = false;
  }

  
  if (isValid) {
    alert("Form submitted successfully");
    document.getElementById("myForm").reset();
  }
});
