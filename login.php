<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to track your progress</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/login.css">
    <meta name="description" content="trac you daily progress with liza">
    <meta name="keywords" content="liza, track progress, php, javaascript html">
</head>

<body>
    <!-- <section class="info">
        <h3 class="info-heading">Getting Started</h3>
        <p class="info-subtitle">Using Ox Liza is quite simple you just need to login inorder to track your daily progress</p>
        <span class="btn"><a href="#" class="login">Login Now</a></span>

    </section> -->
    <form action="../includes/loginHandle.php" method="post">
        <fieldset>
            <legend>
                Login
            </legend>
            <label for="username">name</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required autofocus>

            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>

            <p class="error-text"></p>

            <input type="submit" value="Login" id="login">
        </fieldset>
    </form>
    <script src="../script/loginValidate.js"></script>
</body>

</html>