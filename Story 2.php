<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story 2 - The Enchanted Quest</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 20px;
            color: #4b4b4b;
        }

        h1 {
            text-align: center;
            font-size: 3rem;
            color: #8a2be2;
            text-shadow: 0 0 20px rgba(138, 43, 226, 0.6);
            margin-top: 40px;
        }

        .story-section {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 900px;
            margin: 40px auto;
            gap: 30px;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .story-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .story-section:hover {
            transform: translateY(-10px);
            opacity: 0.9;
        }

        .story-text {
            flex: 1;
            font-size: 1.4rem;
            line-height: 1.8;
            color: #333;
            letter-spacing: 0.5px;
            text-align: justify;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.3), 0 0 15px rgba(138, 43, 226, 0.5);
        }

        .story-image {
            flex: 1;
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .story-image img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .button-container {
            text-align: center;
            margin-top: 40px;
        }

        a {
            display: inline-block;
            text-align: center;
            padding: 12px 25px;
            background-color: #ff7f50;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        a:hover {
            background-color: #ff6347;
            transform: scale(1.05);
        }

        a:active {
            transform: scale(1);
        }
    </style>
</head>
<body>
    <h1>The Enchanted Quest</h1>

    <?php
        // Story data with more beautiful and different narrative
        $story = [
            [
                "text" => "Beneath a sky woven with stars, in the heart of the Whispering Grove, a young adventurer named Lyra set foot into the unknown. The grove was alive with shimmering lights and sounds from mystical creatures. Lyra, with her heart full of wonder, had been called by the forest itself. Her mission: to find the legendary Moonflower, a magical blossom said to grant eternal wisdom.",
                "image" => "flower.jpg",
                "alt" => "A mystical glowing flower in a magical forest"
            ],
            [
                "text" => "\"To find the Moonflower,\" an ancient voice echoed through the trees, \"you must follow the Silver Path. It will reveal itself only to the worthy.\" Lyra stood before the path, shimmering faintly under the moonlight. With a deep breath, she took the first step, her heart racing with anticipation and curiosity, knowing that her journey would change her forever.",
                "image" => "moonflower.jpg",
                "alt" => "A shimmering silver path illuminated by moonlight"
            ],
            [
                "text" => "As she ventured deeper, Lyra was greeted by luminous creatures that danced around her, casting soft glows on the dark trees. The air was thick with magic, and every step felt like a connection to something greater. The Silver Path twisted and turned, leading her toward the heart of the grove, where the Moonflower awaited in the clearing, bathed in the purest moonlight.",
                "image" => "creatures.jpg",
                "alt" => "Luminous creatures dancing around Lyra in the forest"
            ]
        ];

        // Render story sections
        foreach ($story as $index => $section) {
            $isEven = $index % 2 === 0;
            $directionStyle = $isEven ? "" : "flex-direction: row-reverse;";
            echo "<div class='story-section' style='{$directionStyle}'>
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

