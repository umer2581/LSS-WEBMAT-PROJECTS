<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .login-container {
      opacity: 0;
      transform: scale(0.9);
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 40px;
      width: 400px;
      max-width: 90%;
      animation: pop-in 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards; /* Add pop-in animation */
    }

    .login-container.show {
      animation: pop-in 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 30px;
      opacity: 0;
      transform: translateY(-10px);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add fly-in transition */
    }

    .login-container.show .login-logo {
      opacity: 1;
      transform: translateY(0);
    }

    .login-logo img {
      max-width: 150px;
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add fly-in transition */
    }

    .login-container.show .form-group {
      opacity: 1;
      transform: translateY(0);
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add fade transition */
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 1px solid #999;
      outline: none;
      font-size: 16px;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out, border-color 0.5s ease-in-out; /* Add fly-in transition */
    }

    .login-container.show .form-group input[type="text"],
    .login-container.show .form-group input[type="password"] {
      opacity: 1;
      transform: translateY(0);
    }

    .form-group i.fa {
      position: absolute;
      margin-top: 12px;
      margin-left: 10px;
      color: #999;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="password"]:focus {
      border-bottom: 1px solid #667eea;
    }

    .form-group.checkbox {
      display: flex;
      align-items: center;
      margin-top: 10px;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add fly-in transition */
    }

    .login-container.show .form-group.checkbox {
      opacity: 1;
      transform: translateY(0);
    }

    .form-group.checkbox label {
      font-weight: normal;
      margin-left: 10px;
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Add fade transition */
    }

    .form-group button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #667eea;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out, background-color 0.5s ease-in-out; /* Add fly-in transition */
    }

    .login-container.show .form-group button {
      opacity: 1;
      transform: translateY(0);
    }

    .form-group button:hover {
      background-color: #764ba2;
    }

    @keyframes pop-in {
      0% {
        opacity: 0;
        transform: scale(0.9) translateY(10px);
      }
      100% {
        opacity: 1;
        transform: scale(1) translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-logo">
      <img src="images/mbus courier.gif" alt="Logo">
    </div>
    <form action="login.php" method="post">
      <div class="form-group">
        <i class="fas fa-user fa-lg"></i>
        <input type="text" id="username" name="username" placeholder="Username" >
      </div>
      <div class="form-group">
        <i class="fas fa-lock fa-lg"></i>
        <input type="password" id="password" name="password" placeholder="Password">
      </div>
      <div class="form-group checkbox">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <div class="form-group">
      <a href="dashboard/index.html">  <button type="submit">Login</button> 
      </div></a>
    </form>
  </div>

  <script>
    // Add JavaScript code to make the container and elements appear with transitions
    document.addEventListener('DOMContentLoaded', function() {
      var loginContainer = document.querySelector('.login-container');
      var formGroups = document.querySelectorAll('.form-group');
      var loginLogo = document.querySelector('.login-logo');

      loginContainer.addEventListener('animationend', function() {
        loginContainer.classList.add('show');
        formGroups.forEach(function(formGroup) {
          formGroup.classList.add('show');
        });
        loginLogo.classList.add('show');
      });
    });
  </script>
</body>
</html>
