<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* Reset some default styles */
body, h2, form {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    
}

.login-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #27ae60;
    color: #fff;
    cursor: pointer;
    height: 50px;
}

input[type="submit"]:hover {
    background-color: #2980b9;
    
}

/* Responsive design */
@media (max-width: 400px) {
    .login-container {
        width: 90%;
    }
}

        </style>
    <div class="login-container">
        <h2>Login</h2>
        
        <form action="Home.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <form action="Home.php">
            <input type="submit" value="Login">
            </form>
            <form action="Register.php">
            <input type="submit" value="Register">
            </form>
        </form>
    </div>

</body>
</html>
