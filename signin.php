<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body, html {
      height: 100%;
    }
    
    .full-screen {
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    
    .card {
      width: 350px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    
    .card-header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    
    .card-body {
      padding: 30px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"] {
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 10px;
      width: 100%;
    }
    
    .form-group input[type="submit"] {
      width: 100%;
      margin-top: 20px;
    }
    
    .toggle-form {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="full-screen">
    <div class="card">
      <div class="card-header">
        <h3>Login</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="login.php" id="login-form">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
          </div>
          <input type="submit" value="Login" class="btn btn-primary" style="width: 100%">
          <input type="button" onCLick="handleGuest()" value="Guest Login" class="btn btn-primary" style="width: 100%; margin-top: 10px">
          <div class="toggle-form">
            Don't have an account? <a href="register.php" id="sign-up-link">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
 

 function handleGuest() {
  // Constant guest credentials
  const guestEmail = "test@gmail.com";
  const guestPassword = "test";

  // Set values for email and password fields
  var emailInput = document.getElementById('email');
  var passwordInput = document.getElementById('password');

  emailInput.value = guestEmail;
  passwordInput.value = guestPassword;

  // Submit the form
  document.getElementById('login-form').submit();
}


    // Function to toggle between Sign Up and Login forms
    function toggleForms() {
      var signUpForm = document.getElementById('sign-up-form');
      var loginForm = document.getElementById('login-form');
      var signUpLink = document.getElementById('sign-up-link');
      var loginLink = document.getElementById('login-link');

      signUpForm.style.display = signUpForm.style.display === 'none' ? 'block' : 'none';
      loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
      signUpLink.style.display = signUpLink.style.display === 'none' ? 'block' : 'none';
      loginLink.style.display = loginLink.style.display === 'none' ? 'block' : 'none';
    }

    // Event listener for Sign Up and Login links
    document.getElementById('sign-up-link').addEventListener('click', toggleForms);
    document.getElementById('login-link').addEventListener('click', toggleForms);
// Form validation for login page
var loginForm = document.getElementById('login-form');
loginForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting

  var emailInput = document.getElementById('email');
  var passwordInput = document.getElementById('password');

  // Perform validation
  if (!validateEmail(emailInput.value)) {
    alert('Please enter a valid email address.');
    return;
  }

  if (passwordInput.value.length < 6) {
    alert('Password must be at least 6 characters long.');
    return;
  }

  // If validation passes, submit the form
  loginForm.submit();
});

// Email validation function
function validateEmail(email) {
  // Add your email validation logic here
  return true; // Return true for demonstration purposes
}


  </script>
</body>
</html>
