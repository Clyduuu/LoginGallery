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
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Logout</h1>
    </header>

    <div class="logout-container">
        <p>You have been successfully logged out.</p>
        <a href="login.php">Login Again</a>
    </div>

</body>
</html>
