<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="hak.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

    <title>Document</title>

</head>

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

<section>

    <p> Study smart, <br> not hard. </p>

    <div class="slika">
        <img src="https://www.lifewire.com/thmb/3wKNueSyD8ANlAVkPWLw35WLsnY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-955065788-5bc8e0d8c9e77c002d827612.jpg">
    </div>

</section>
<h2>About Us</h2>
<main id="abt">
    <div class="kockice">
        <img src="icons8-course-assign-30.png">
        <h3> Struggling with assignments? </h3>
        <p class="lorem"> Our app delivers personalized assignments based on your grades, ensuring you reach your full potential.  </p>
    </div>
    <div class="kockice">
        <img src="icons8-tuition-30%20copy%203.png">
        <h3> Flexible learning </h3>
        <p class="lorem"> Our app now offers personalized assignments to elevate your learning experience. Enter your grades, and let us handle the rest.  </p>
    </div>
    <div class="kockice">
        <img src="icons8-student-registration-30%20copy%203.png">
        <h3> Individual approach </h3>
        <p class="lorem"> Unlock Your Academic Potential with Personalized Assignments! Our  app tailors tasks to your unique strengths and weaknesses. </p>
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
        date = new Date().toLocaleDateString();
        document.write(date);
    </script>
</footer>

</html>