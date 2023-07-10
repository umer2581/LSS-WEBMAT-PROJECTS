<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    include("config/connection.php");

    // Query to check if the username and password match
    $query = "SELECT * FROM `login` WHERE username = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Username and password are correct, create a session
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;

        // Redirect to the home page or any other page after successful login
        header("Location: home.php");
        exit();
    } else {
        // Invalid username or password
        $error = "Invalid username or password";
    }

    // Close database connection
    mysqli_close($conn);
}
?>

<!-- Rest of your HTML code -->
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Your CSS styles here -->
</head>
<body>
  <div class="login-container">
    <!-- Your HTML code here -->
  </div>
</body>
</html>

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
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 40px;
      width: 400px;
      max-width: 90%;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-logo img {
      max-width: 150px;
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 1px solid #999;
      outline: none;
      font-size: 16px;
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
    }

    .form-group.checkbox label {
      font-weight: normal;
      margin-left: 10px;
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
    }

    .form-group button:hover {
      background-color: #764ba2;
    }
  </style>
</head>
<body>
<div class="login-container">
        <!-- Your login form here -->
        <form action="" method="post">
            <!-- Form fields -->
            <div class="form-group">
                <i class="fas fa-user fa-lg"></i>
                <input type="text" id="username" name="username" placeholder="Username">
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
               <a href="#"></a> <button type="submit">Login</button>
            </div>
            <?php if (isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
        </form>
    </div>
</body>
</html>