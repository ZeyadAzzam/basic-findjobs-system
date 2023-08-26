<?php
    include('../process/db_config.php');

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $id = $_POST['id'];
        $companyName = $_POST['companyName'];
        $description = $_POST['description'];
        $workConditions = $_POST['workConditions'];
        $salaryRange = $_POST['salaryRange'];
        $deadline = $_POST['deadline'];
        $major = $_POST['major'];

        // Perform the update query
        $query = "UPDATE `announcement` SET 
                    Company_name = '$companyName',
                    description = '$description',
                    working_conditions = '$workConditions',
                    expect_salary = '$salaryRange',
                    deadline = '$deadline',
                    MajorId = '$major'
                    WHERE Id = '$id'";

        if (mysqli_query($conn, $query)) {
            // true
            echo "Position updated successfully.";
        } else {
            // error to connect
            echo "Failed to update position: " . mysqli_error($conn);
        }
    } else {
        // err with request
        echo "Invalid request.";
    }
    header('location:../pages/admin.php');
?>