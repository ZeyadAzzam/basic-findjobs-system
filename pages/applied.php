<?php
session_start();
include("../process/API.php");

if (!empty($_SESSION)) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $study = $_SESSION["study"];

    // Fetch user details
    $userResult = getUser($email, $password);
    if (mysqli_num_rows($userResult) > 0) {
        $user = mysqli_fetch_assoc($userResult);
        $username = $user['name'];
    }
} else {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://cdn.wallpapersafari.com/57/90/BkLTEQ.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            margin-top: 200px;
            border: 1px solid #ccc;
        }

        h2 {
            color: darkcyan;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .navbar {
            padding: 15px;
            background-color: darkcyan;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
            margin-right: 10px;
            font-weight: bold;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="userHome.php">Home</a></li>
            <li>

            </li>
        </ul>
    </nav>

    <div class="container">
        <h2>Application Submitted</h2>
        <p>Thank you, <?php echo $username; ?>, for applying to the job. Your application has been submitted successfully.</p>
    </div>

</body>

</html>
