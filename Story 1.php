<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story 1 - The Whispering Shadows</title>
    <style>
   body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #3b4b63, #2a3f52);
    background-size: cover;
    color: #fff;
    overflow-y: auto; /* Allow vertical scrolling */
    position: relative;
    min-height: 100vh; /* Ensure content takes full height */
}


        /* Add shimmering stars effect */
        @keyframes starrySky {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/stardust.png') repeat;
            z-index: -1;
            animation: starrySky 1.5s infinite linear;
        }

        h1 {
            text-align: center;
            font-size: 4rem;
            color: #bbdefb;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 255, 255, 0.4);
            margin-top: 50px;
            padding-bottom: 20px;
        }

        h2 {
            text-align: center;
            font-size: 1.4rem;
            line-height: 1.8;
            color: #c1c1c1;
            margin-top: 20px;
            margin-bottom: 50px;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.4), 0 0 25px rgba(255, 255, 255, 0.3);
        }

        .story-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 50px auto;
            max-width: 900px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .story-section:hover {
            transform: translateY(-10px);
            opacity: 0.9;
        }

        .story-text {
            font-size: 1.5rem;
            color: #d8d8d8;
            line-height: 1.6;
            text-align: center;
            letter-spacing: 1px;
            max-width: 700px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(0, 255, 255, 0.6), 0 0 30px rgba(0, 255, 255, 0.8);
            margin-bottom: 40px;
        }

        .story-image {
            width: 100%;
            height: 400px;
            max-width: 600px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .story-image img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .story-image:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.7);
        }

        .button-container {
            text-align: center;
            margin-top: 40px;
        }

        a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #6a5acd;
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        a:hover {
            background-color: #483d8b;
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        a:active {
            transform: scale(1);
        }
    </style>
</head>
<body>
    <div class="stars"></div>
    <h1>The Whispering Shadows</h1>
    <h2>Step into a world where the moonlight dances on the shadows, where every whisper of the wind tells a story, and where magic weaves through the very air you breathe. This is the journey of your lifetime.</h2>

    <?php
        // Story data with the most beautiful and astonishing narrative
        $story = [
            [
                "text" => "As you step into the clearing, the air around you shifts. The trees, tall and ancient, seem to murmur in a language you can almost understand. The ground beneath your feet pulses with an energy that feels like the heartbeat of the forest itself. The path ahead glows faintly, inviting you deeper into the heart of the magic that surrounds you.",
                "image" => "wind.jpg",
                "alt" => "A mystical forest at night, glowing with magic"
            ],
            [
                "text" => "The wind carries a soft melody, like the voice of the forest itself, whispering its secrets into your ears. As you walk, the shadows stretch and twist, forming shapes that seem familiar but are always out of reach. The air is thick with the scent of wildflowers and ancient pine, and each step you take feels like a step deeper into a forgotten dream.",
                "image" => "moon.jpg",
                "alt" => "Moonlight shining through the trees"
            ],
            [
                "text" => "Suddenly, a shape emerges from the mist ahead. It's a figure cloaked in silver light, its eyes glowing with the wisdom of ages. It speaks your name in a voice like the rustling of leaves in the wind. You are not alone here. The forest has chosen you, and its secrets will now be revealed to you, if you are brave enough to listen.",
                "image" => "silver.jpg",
                "alt" => "A figure cloaked in silver light emerging from the mist"
            ]
        ];

        // Render story sections
        foreach ($story as $index => $section) {
            echo "<div class='story-section'>
                    <div class='story-text'>{$section['text']}</div>
                    <div class='story-image'>
                        <img src='{$section['image']}' alt='{$section['alt']}'>
                    </div>
                  </div>";
        }
    ?>

    <div class="button-container">
        <a href="Magic door adventure.php">Back to the Magic Doors</a>
    </div>
</body>
</html>

