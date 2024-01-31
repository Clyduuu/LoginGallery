<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 550px;
            text-align: center;
        }

        h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateRegistration() {
            var usernameInput = document.getElementById("username");
            var passwordInput = document.getElementById("password");

            var usernameValue = usernameInput.value;
            var passwordValue = passwordInput.value;

            // Check for special characters using a regular expression
            var regex = /^[a-zA-Z0-9]+$/;

            if (!regex.test(usernameValue)) {
                alert("Username should not contain special characters.");
                usernameInput.value = ""; // Clear the input
                return false;
            }

            if (!regex.test(passwordValue)) {
                alert("Password should not contain special characters.");
                passwordInput.value = ""; // Clear the input
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
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

    <div class="login-container">
        <h2>Register</h2>

        <form action="login.php" method="post" onsubmit="return validateRegistration()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Register">
        </form>

        <div class="back-btn">
            <form action="login.php">
        <input type="submit" value="Back to Log In">
        </form>
        </div>
    </div>
</body>

</html>
