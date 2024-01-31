<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        function validateUsername() {
            var usernameInput = document.getElementById("username");
            var usernameValue = usernameInput.value;

            // Check for special characters using a regular expression
            var regex = /^[a-zA-Z0-9]+$/;
            if (!regex.test(usernameValue)) {
                alert("Username should not contain special characters.");
                usernameInput.value = ""; // Clear the input
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="Home.php" method="post" onsubmit="return validateUsername()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <form action="Register.php">
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>
