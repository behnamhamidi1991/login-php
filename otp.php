<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css" />
  <title>OTP</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form>

        <span>or use your email to registration</span>
        <input type="text" placeholder="username">
        <input type="email" placeholder="email">
        <input type="text" placeholder="mobile number">
        <input type="password" placeholder="password">
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <h1>Sign In</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email/password</span>
        <input type="text" placeholder="Enter your OPT">
     
        <a href="#">Forget your Password?</a>
        <div class="button-container">
            <button>Send to Mobile</button>
            <button>Send to Email</button>
            <a href="index.php">Login with email</a>
        </div>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/script/script.js"> </script>
</body>

</html>