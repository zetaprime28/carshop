<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-box {
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }
        .signup-box img {
            width: 50%;
            object-fit: cover;
        }
        .signup-form {
            padding: 40px;
            width: 50%;
        }
        .signup-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .signup-form p {
            margin-bottom: 20px;
            color: #666;
        }
        .signup-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-form button {
            width: 100%;
            padding: 10px;
            background-color: #f9a825;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-form button:hover {
            background-color: #f57c00;
        }
        .signup-form .alt-links {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }
        .signup-form .alt-links a {
            color: #388e3c;
            text-decoration: none;
        }
        .signup-form .alt-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-box">
        <img src="sever/img/carbanner.png" alt="" class="ms-3 w-50 h-50">
            <div class="signup-form">
                <form action="datasignup.php" method="POST">
                    <h2>Create your Account</h2>
                    <p>Join us for an exciting journey! Sign up with your details below.</p>
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="name@example.com" required>
                    <input type="password" id="password" name="Password" placeholder="Password" required>
                    <span class="d-flex justify-content-center" id="toggleText" style="cursor: pointer; color: blue;" onclick="togglePassword()">Show Password</span>
                    <button type="submit" class="mt-3">Sign Up</button>
                    <div class="alt-links">
                        <a href="login.php">Already have an account? Login</a>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var toggleText = document.getElementById("toggleText");
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleText.textContent = "Hide Password"; 
        } else {
            passwordInput.type = "password";
            toggleText.textContent = "Show Password";
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>