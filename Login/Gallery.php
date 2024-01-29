<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        /* Reset some default styles */
body, h1, header, footer, .gallery-container, .image-grid, .image-item, img {
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

.gallery-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

img {
    height: 100%;
    width: 100%;
    
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
        <h1>Photo Gallery</h1>
        <?php include 'navbar.php';?>
    </header>

    <div class="gallery-container">
        <div class="container">
            <img src="asto1.jpg" alt="">
            <img src="astro2.jpg" alt="">
            <img src="astro3.jpg" alt="">
            <img src="astro4.jpg" alt="">
</div>
    </div>
</body>
</html>
