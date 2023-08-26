<!DOCTYPE html>
<html>

<head>
    <title>Admin - Find Jobs</title>

    <style>
        body {
            background-color: darkcyan;
            margin: 0;
            padding: 0;
            background-image: url("https://cdn.wallpapersafari.com/57/90/BkLTEQ.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .topnav {
            overflow: hidden;
            background-color: darkcyan;
        }

        .topnav .sitename {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            font-size: 17px;
            margin-right: 20px;
            font-weight: bold;
        }

        .topnav input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            float: right;
            margin-top: 8px;
            border-radius: 5px;
            position: absolute;
            right: 16px;
        }

        .topnav input[type="submit"]:hover {
            background-color: red;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            backdrop-filter: blur(20px);

        }

        h2 {
            text-align: center;
        }

        form {
            margin: 0 auto;
            max-width: 500px;

        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form textarea,
        form input[type="date"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }


        form input[type="submit"] {
            width: 100px;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: darkgreen;
        }

        table {
            margin: 0 auto;
            width: 55%;
            border-collapse: collapse;

        }

        table th,
        table td {
            font-weight: bold;
            padding: 4px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            background-color: #f2f2f2;
            font-size: 14px;
            line-height: 1.4;
            background-image: url("https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77700334754.jpg");
        }

        table th {
            font-weight: bold;
        }

        .edit-link,
        .delete-link {
            font-weight: bold;
        }

        .edit-link:hover {
            color: darkgreen;
        }

        .delete-link:hover {
            color: darkred;
        }
    </style>
</head>

<body>

    <div class="topnav">
        <span class="sitename">Find Jobs</span>

        <span class="sitename">Admin Dashboard</span>

        <form action="../process/logoutAction.php">
            <input type="submit" value="Logout">
        </form>
    </div>

    <div class="container">
        <h2>Add Announcement</h2>

        <form method="POST" action="../process/addPosition.php">
            <div class="input-container">
                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" required>
            </div>

            <div class="input-container">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="input-container">
                <label for="workConditions">Working Conditions</label>
                <textarea id="workConditions" name="workConditions" required></textarea>
            </div>

            <div class="input-container">
                <label for="salaryRange">Salary Range</label>
                <input type="text" id="salaryRange" name="salaryRange" required>
            </div>

            <div class="input-container">
                <label for="deadline">Deadline</label>
                <input type="date" id="deadline" name="deadline" required>
            </div>

            <div class="input-container">
                <label for="major">Major ID</label>
                <input type="text" id="major" name="major" required>
            </div>

            <input type="submit" value="Add">
        </form>
    </div>

    <br>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Description</th>
                    <th>Working Conditions</th>
                    <th>Salary Range</th>
                    <th>Deadline</th>
                    <th>Major ID</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // update the table
                include('../process/db_config.php');
                $query = mysqli_query($conn, "select * from `announcement`");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Company_name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['working_conditions']; ?></td>
                        <td><?php echo $row['expect_salary']; ?></td>
                        <td><?php echo $row['deadline']; ?></td>
                        <td><?php echo $row['MajorId']; ?></td>
                        <td><a href="../process/edit.php?id=<?php echo $row['Id']; ?>" class="edit-link">Edit</a></td>
                        <td><a href="../process/delete.php?id=<?php echo $row['Id']; ?>" class="delete-link">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>