<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup | to receive daily progress signup</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/login.css">
    <meta name="description" content="trac you daily progress with liza">
    <meta name="keywords" content="liza, track progress, php, javaascript html">
</head>

<body>
    <form action="../includes/signupHandle.php" method="post">
        <fieldset>
            <legend>Signup Page</legend>
            <label for="username">name</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required autocomplete="off" required autofocus>

            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>

            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>
            <p class="error-text"></p>
            <input type="submit" value="Signup" id="signup">
        </fieldset>
    </form>
    <script src="../script/signupValidate.js"></script>
</body>

</html>