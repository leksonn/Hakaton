<?php
session_start();

if (isset($_POST['username'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'hackathon');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $Users = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM Users WHERE username = '$username' AND password = '$password'"));

    if ($Users) {
        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $Users['user_id'];
        $_SESSION['user_type'] = $Users['admin'];
        // Redirect to the home page
        header("Location: courses.php");
        exit();
    } else {
        $error = "Incorrect email and/or password";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="logic.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="logotekst">
        <a href="hakaton.php"> <img class="logo" src="studysmart-favicon-color%20copy%202.png"> </a>
        <a href="hakaton.php"> <h1> StudySmart </h1> </a>
    </div>


</header>

    <main>
        <section id="child">
            <form action="log.php" method="post">
                <h2>Log In</h2>
                <?php if (isset($error)) { ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php } ?>
                <section >
                    <div>
                        <label>Username</label><br>
                        <input type="text" name="username" required><br>
                    </div>
                    <div>
                        <label>Password</label><br>
                        <input type="password" name="password" required><br>
                    </div>
                    <button type="submit">Log in</button>
            </form>
        </section>
        </section>

    </main>

<footer>
    <script>
        date = new Date().toLocaleDateString();
        document.write(date);
    </script>
</footer>
</body>
</html>
