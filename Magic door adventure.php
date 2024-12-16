<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Door Adventure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #2a3f52;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 3rem;
            color: #dac8c8;
            margin: 40px 0;
        }
        
        h2{
            color: #dac8c8;
            margin-right: 400px;
            margin-left: 400px;
        }

        .door-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            gap: 20px;
        }

        .door {
    width: 150px;
    height: 250px;
    background-image: url('door.png');
    background-size: contain;  /* Ensures the entire image fits within the door without being cropped */
    background-position: center;  /* Centers the image */
    background-repeat: no-repeat; /* Ensures the image doesn’t repeat if it’s smaller than the door */
    border: 3px solid #000;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 1.2rem;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
}


        .door:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
            .door a {
            text-decoration: none;
            color: white;
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 300px;
        }
    </style>
</head>
<body>
    <h1>Magic Door Adventure</h1>
    <h2>Welcome to Magic Door Adventure where you can explore different doors and each different doors have storys inside of it.</h2>
    <div class="door-container">
        <div class="door"><a href="Story 1.php"></a></div>
        <div class="door"><a href="Story 2.php"></a></div>
        <div class="door"><a href="Story 3.php"></a></div>
    </div>
</body>
</html>