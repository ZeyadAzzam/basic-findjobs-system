<!DOCTYPE html>
<html>
<head>
    <title>Resume - Find Jobs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .navbar {
            padding: 15px;
            background-color: darkcyan;
            margin-bottom: 50px;
        }

        .sitename {
            font-weight: bold;
            color: white;
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
            color: black;
            padding: 5px 10px;
        }

        .navbar a:hover {
            background-color: white;
        }

        .container {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        backdrop-filter: blur(20px);
        box-shadow: 0px 0px 20px blue;
        border-radius: 10px;
    }


        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: darkcyan;
            font-size: 30px;
        }

        .resume-item {
            margin-bottom: 15px;
        }

        .resume-item label {
            font-weight: bold;
        }

        .name {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        .email {
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }

        .mobile {
            font-size: 18px;
            font-weight: bold;
        }

        .experience {
            font-size: 18px;
            font-weight: bold;
        }

        .language {
            font-size: 18px;
            font-weight: bold;
        }

        .brief-bio {
            font-size: 18px;
            font-weight: bold;
        }

        .study {
            font-size: 18px;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: darkcyan;
            color: white;
            padding: 5px;
            text-align: center;
            font-size: 14px;
        }

        .footer .social-links {
            margin-top: 10px;
        }

        .footer .social-links a {
            color: white;
            margin: 5px;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <ul>
        <li>
            <span class="sitename">Find Jobs</span>
        </li>
        <li>
            <a href="userHome.php">Home</a>
        </li>
    </ul>
</nav>
<h2>Your Resume</h2>

<div class="container">

    <?php

    include("../process/API.php");

    if (isset($_GET["email"]) && isset($_GET["password"])) {
        $result = getUser($_GET["email"], $_GET["password"]);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="resume-item">
                <span class="name"><?php echo $row["name"]; ?></span>
            </div>
            <div class="resume-item">
                <label>Email:</label>
                <span class="email"><?php echo $row["email"]; ?></span>
            </div>
            <div class="resume-item">
                <label>Mobile:</label>
                <span class="mobile"><?php echo "+962"?><?php echo $row["mobile"]; ?></span>
            </div>
            <div class="resume-item">
                <label>Experience:</label>
                <span class="experience"><?php echo $row["experience"]; ?> years</span>
            </div>
            <div class="resume-item">
                <label>Language:</label>
                <span class="language"><?php echo $row["language"]; ?></span>
            </div>
            <div class="resume-item">
                <label>about me:</label>
                <span class="brief-bio"><?php echo $row["brief_bio"]; ?></span>
            </div>
            <div class="resume-item">
                <label>Study:</label>
                <span class="study">
                    <?php
                    if ($row["MajorId"] == 1)
                        echo "Software Engineering";
                    elseif ($row["MajorId"] == 2)
                        echo "Artificial intelligence";
                    elseif ($row["MajorId"] == 3)
                        echo "Cyber Security";
                    elseif ($row["MajorId"] == 4)
                        echo "Cloud Computing";
                    ?>
                </span>
            </div>
            <?php
        }
    } else {
        echo "Email and password not provided.";
    }
    ?>
</div>

<!-- Footer -->
<footer class="footer">
    <p>&copy; 2023 Find Jobs. All rights reserved.</p>
    <div class="social-links">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

<!-- Include Font Awesome library for social icons -->
<script src="https://kit.fontawesome.com/1e4272720a.js" crossorigin="anonymous"></script>
</body>
</html>
