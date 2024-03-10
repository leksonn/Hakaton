<?php
$myString = "Hello, world!";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subjects</title>
    <link href="subb.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="logotekst">
        <a href="hakaton.php"> <img class="logo" src="studysmart-favicon-color%20copy%202.png"> </a>

        <a href="hakaton.php"> <h1> StudySmart </h1> </a>
    </div>

    <div class="navbar">

        <a href="#abt"> About </a>
        <a href="#foot"> Contact </a>
        <div class="dropdown">
            <button class="dropbtn">Courses
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="English.php">English</a>
                <a href="Math.php">Math</a>
                <a href="Science.php">Science</a>
            </div>
        </div>

        <?php
        session_start();
        if (isset($_SESSION['logged'])) {
            $username = $_SESSION['username'];
            $user_id = $_SESSION['user_id'];
            echo "<a href='logout.php'>Log out</a>";
        }
        else {
            echo "<a href='log.php'>Log In</a>";
        }
        ?>
    </div>
</header>
<main>
    <div id="apiResponse">

    </div>
</main>
<div id="foot">
    <section id="siva">
        <h3>
            Contact Us!<br> +387 61 333 066 <br> studysmart@support.com
        </h3>
    </section>

    <section id="siva">
        <a href="https://www.instagram.com/"> <img class="contact" src="https://www.kortegaard.co.uk/wp-content/uploads/2020/06/best-solutions-of-instagram-png-transparent-png-images-unique-white-instagram-logo-outline-of-white-instagram-logo-outline-copy.png"> </a>
        <a href="https://www.facebook.com/" > <img class="contact" src="https://freelogopng.com/images/all_img/1692798659white-facebook-png.png"> </a>
    </section>
</div>

<footer>
    <script>
        document.write(new Date().toLocaleDateString());

        async function fetchDataFromAPI() {
            const data = {
                model: "gpt-3.5-turbo", //model koji koristi chat gpt

                temperature: 0.7,
                max_tokens: 100,
                top_p: 1.0,
                frequency_penalty: 0.0,
                presence_penalty: 0.0,
                messages:[{"role":"system", "content": "You are a helpful assistant. "},
                    {"role":"user", "content": "You are an expert in Mathematics, Give me a math task with multiple choice answers. Format the response so each multiple choice answer is in a separate line using br html tag, and put only the question and answers in the response"}

                ]
            };

            try {
                const response = await fetch('https://api.openai.com/v1/chat/completions',  { //ruta koju pozivamo za model
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer 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',
                    },
                    body: JSON.stringify(data),
                });
                const responseData = await response.json();

                var formattedContent = responseData.choices[0].message.content;

// Set the innerHTML of the element with the id 'apiResponse' to the formatted content
                document.getElementById("apiResponse").innerHTML = formattedContent;
            } catch (error) {
                console.error('Error:', error);
            }
        }

        fetchDataFromAPI();


    </script>
</footer>
</body>
</html>
