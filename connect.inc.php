<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trying to connect</title>
</head>

<body>
    <?php
    // create variable for servername, username and password
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "i_want_problems_always";

    // connect 
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        echo "connection error"; // handle connection error
    } else {
        header(("Location: ../welcome.php")); // if sucessfully send to homepage
    }
    ?>
</body>

</html>