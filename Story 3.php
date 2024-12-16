<?php
// Dynamic content for a more magical and mysterious story
$title = "Story 3 - The Enchanted Forest";
$storyText = [
    "As you step through the glowing portal, the air shifts around you, thick with magic. Before you, the Enchanted Forest stretches out, its towering trees whispering secrets to one another. The air hums with an unseen force, a soft breeze carrying the scent of ancient pine and earth.",
    "The path ahead is lined with stones that glow faintly, as if touched by stardust. Strange flickers of light dart between the trees, vanishing as quickly as they appear. The forest seems to breathe, alive with an energy that pulses through the very ground beneath your feet.",
    "A soft voice calls to you from the shadows, barely audible, like a breeze rustling through leaves. You cannot make out the words, but you feel an overwhelming urge to follow its call. But there are two paths before you. One leads deeper into the forest, where a shimmering light beckons. The other path is obscured by thick mist, a cold wind flowing from it as if it holds a forgotten secret.",
    "A sudden chill crawls up your spine, but you cannot turn back. Something is waiting for you. The magic of the forest has chosen you. What will you discover in the heart of this ancient, enchanted place? Will you step into the light or into the mist? The forest is watching, and it will not reveal its secrets easily..."
];
$imagePath = 'portal.jpg'; // Replace with your image path
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #1b2a3a;
            color: #e1d8d1;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            font-size: 3.5rem;
            color: #f0e0d6;
            margin-top: 40px;
            text-shadow: 0 0 20px #f2a3ad, 0 0 30px #ffb6b9;
        }

        .story-container {
            padding: 40px;
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
        }

        .story-text {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #fff, 0 0 20px #ff0077;
        }

        .story-image {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.8);
        }

        .back-button {
            display: inline-block;
            padding: 15px 25px;
            background-color: #6b1e3f;
            color: white;
            text-decoration: none;
            font-size: 1.4rem;
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-button:hover {
            background-color: #a14e5f;
            transform: scale(1.1);
        }

        .back-button:active {
            transform: scale(1);
        }
    </style>
</head>
<body>

    <h1><?php echo $title; ?></h1>

    <div class="story-container">
        <img src="<?php echo $imagePath; ?>" alt="Enchanted Forest" class="story-image">
        
        <?php foreach ($storyText as $paragraph): ?>
            <div class="story-text">
                <p><?php echo $paragraph; ?></p>
            </div>
        <?php endforeach; ?>

        <a href="Magic door adventure.php" class="back-button">Return to the Magic Doors</a>
    </div>

</body>
</html>
