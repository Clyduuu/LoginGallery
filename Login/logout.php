<?php
// Start the session
session_start();

// Destroy the session and redirect to the login page
session_destroy();
header("Location: login.php");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        /* Reset some default styles */
body, h1, header, .logout-container, p, a {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.logout-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

p {
    margin-bottom: 15px;
    color: #333;
}

a {
    display: block;
    text-align: center;
    background-color: #27ae60;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #218c53;
}

        </style>

    <header>
        <h1>Logout</h1>
    </header>

    <div class="logout-container">
        <p>You have been successfully logged out.</p>
        <a href="login.php">Login Again</a>
    </div>

</body>
</html>
