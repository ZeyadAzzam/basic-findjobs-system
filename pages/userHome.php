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

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jobs Announcement</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
              background-color:beige;
            }

            .navbar {
                padding: 15px;
                background-color: darkcyan;
            }

            .sitename {
                font-weight: bold;
            }

            .navbar ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .navbar button {
                background-color: black;
                color: white;
                border: none;
                padding: 5px 15px;
                cursor: pointer;
                float: right;
                border-radius: 5px;
                position: absolute;
                right: 16px;
            }

            .navbar button:hover {
                background-color: red;

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

            form {
                display: inline;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                text-align: center;
                margin-bottom: 20px;

            }

            .form {
                padding: 10px;
            }

            .form-title {
                color:steelblue;
                font-weight: bold;
                font-size: 30px;

            }

            .Availible {
                font-weight: bold;
                font-size: 25px;
                color: black;
            }


            .announcement {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 20px;


            }

            .announcement-item {
                border: 1px solid #ccc;
                padding: 20px;
                margin-bottom: 20px;
                font-weight: bold;
                color: red;
                font-size: 15px;
                background-color: whitesmoke;
            }

            .announcement-item h3 {
                margin-top: 0;
                font-weight: bold;
            }

            .announcement-item p {
                color: black;
                margin-bottom: 5px;
            }

            .apply-button {
                background-color: green;
                color: #fff;
                padding: 5px 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .apply-button[disabled] {
                background-color: red;
                cursor: not-allowed;
            }

            hr {
                border: none;
                border-top: 1px solid #ccc;
                margin: 10px 0;
            }


            /* Footer editing */
            .footer {
                background-color: darkcyan;
                color: #fff;
                padding: 10px;
                display: flex;
                font-weight: bold;
                text-align: center;

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
                
            <li> <span class="sitename">Find Jobs</span>  </li>

                
                <li>  <a href="userHome.php">Home</a></li>
                <li>
                    <!-- generate Resume -->
                    <?php echo '<a href="Resume.php?email=' . $email . '&password=' . $_SESSION["password"] . '">My resume</a>'; ?>

                    <a href="userHome.php?filter=yes&study=<?php echo $study; ?>">Filter By Field of Study</a>

                </li>
                <li style="float: right;">
                    <form action="../process/logoutAction.php" style="display: inline;">
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>



        <div class="container">
            <div class="form">
                <h2 class="form-title">Welcome, <?php echo $username; ?> </h2>
                <p class="Availible">Available Announcements</p></b>
            </div>
        </div>

        <div class="announcement">
            <?php
            if (!empty($_GET)) {
                if ($_GET["filter"] == "yes") {
                    $result = getPositionsByStudyField($study);
                }
            } else {
                $result = getAllPositions();
            }
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="announcement-item">
                        <h3><?php echo $row["Company_name"]; ?></h3>
                        <p><?php echo $row["description"]; ?></p>
                        <p>Working Conditions: <?php echo $row["working_conditions"]; ?></p>
                        <p>Expected Salary: $<?php echo $row["expect_salary"]; ?></p>
                        <p>Deadline: <?php echo $row["deadline"]; ?></p>
                        <p>Major: <?php
                                    switch ($row["MajorId"]) {
                                        case 1:
                                            echo "Software Engineering";
                                            break;
                                        case 2:
                                            echo "Artificial Intelligence";
                                            break;
                                        case 3:
                                            echo "Cyber Security";
                                            break;
                                        case 4:
                                            echo "Cloud Computing";
                                            break;
                                        default:
                                            echo "Unknown";
                                    }
                                    ?>
                        </p>
                        <?php
                        $date = date("Y-m-d ");
                        if (strtotime($date) < strtotime($row["deadline"])) {
                        ?>
                      <button class="apply-button" onclick="window.location.href='applied.php'">Apply</button>
                        <?php } else { ?>
                            <button class="apply-button" disabled>Closed</button>
                        <?php } ?>
                    </div>
                    <hr>
            <?php
                }
            } else {
                echo "<p>No announcements available.</p>";
            }
            ?>
        </div>

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
<?php
} else {
    header("location:../login.php");
}
?>