<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Fredoka, sans-serif;
            text-align: center;
        }

        h1 {
            font-weight:400;
        }

        .button {
            margin-top: 20px;
            text-decoration: none;
            position: relative;
            font-family: Fredoka;
            font-size: 20px;
            font-weight: 600;
            color: white;
            border: none;
            box-shadow: none;
            border-radius: 20px;
            background-color: #ff4242;
            padding: 10px;
            height: 45px;
            width: 90px;
        }

        p :hover {
            margin-top: 20px;
            text-decoration: none;
            position: relative;
            font-family: Fredoka;
            font-size: 20px;
            font-weight: 600;
            color: white;
            border: none;
            box-shadow: none;
            border-radius: 20px;
            background-color: rgb(255, 182, 24);
            padding: 10px;
            height: 45px;
            width: 90px;
        }
        

    </style>
</head>

<body>
    <h1> Hi, <b>
            <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b>. I'm the problem, It's me.</h1>
    <p>
        <a href="logout.php" class="button">Sign Out</a>
    </p>
</body>

</html>