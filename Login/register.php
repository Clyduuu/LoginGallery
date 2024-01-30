<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
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

.register-container {
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
    background-color: #218c53;
}

/* Responsive design */
@media (max-width: 400px) {
    .register-container {
        width: 90%;
    }
}

.back-btn {
    display: block;
    text-align: center;
    margin-top: 10px;
}

.back-btn a {
    color: #007BFF;
    text-decoration: none;
}

.back-btn a:hover {
    text-decoration: underline;
}
        </style>

<?php
// Database credentials
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "login";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform SQL insertion (this is a basic example, please use prepared statements for security)
    $sql = "INSERT INTO reg (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


    <div class="register-container">
        <h2>Register</h2>
        
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Register">
        </form>
        <div class="back-btn">
        <a href="login.php">Back to Login</a>
    </div>
    </div>

</body>
</html>
