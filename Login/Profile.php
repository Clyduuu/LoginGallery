<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        /* Reset some default styles */
body, h1, h2, p, header, footer, img, .profile-container, .user-info {
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

.profile-container {
    width: 80%;
    margin: 20px auto;
    display: flex;
    align-items: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-picture {
    width: 180px;
    height: 170px;
    border-radius: 50%;
    margin-right: 20px;
}

.user-info {
    flex-grow: 1;
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

    <header>
        <h1>My Profile</h1>
        <?php include 'navbar.php';?>
    </header>

    <div class="profile-container">
        <img src="1.jpg" alt="Profile Picture" class="profile-picture">
        <div class="user-info">
            <h2>Basig, John Clyde A.</h2>
            <p>Email: 202080146@psu.palawan.edu.ph</p>
            <p>Location: Puerto Princesa City, Philippines</p>
        </div>
    </div>

    <div class="profile-container">
        <img src="cristy.jpg" alt="Profile Picture" class="profile-picture">
        <div class="user-info">
            <h2>Creador, Cristy Man E.</h2>
            <p>Email: 2020-irreg@psu.palawan.edu.ph</p>
            <p>Location: Puerto Princesa City Jail, Philippines</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 My Profile. All rights reserved.</p>
    </footer>

</body>
</html>
