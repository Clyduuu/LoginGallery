<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        /* Reset some default styles */
body, h1, h2, p, header, section, footer {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    background-image: url("star.gif");
    background-repeat: no-repeat;
    background-size: cover;
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

.content-container {
    width: 80%;
    margin: 20px auto;
}

section {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
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
        <h1>Astro Boy Gallery</h1>
        <?php include 'navbar.php';?>
    </header>
</body>
</html>
