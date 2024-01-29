<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <style>
        /* Reset some default styles */
body, h1, header, footer, .contact-container, form, label, input, textarea {
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

h1 {
    margin-bottom: 20px;
}

.contact-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    color: #333;
}

input,
textarea {
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #27ae60;
    color: #fff;
    cursor: pointer;
    width: 50%;  
    height: 20%;
    margin-left: 25%;
}

input[type="submit"]:hover {
    background-color: #218c53;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform SQL insertion (this is a basic example, please use prepared statements for security)
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


    <header>
        <h1>Contact Us</h1>
        <?php include 'navbar.php';?>
    </header>
    <div class="contact-container">
        <form action="Contact.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="10" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>


