<?php
    include('../process/db_config.php');

    // Check if the ID parameter is present in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the existing data for the row to be edited
        $query = mysqli_query($conn, "SELECT * FROM `announcement` WHERE Id = '$id'");
        $row = mysqli_fetch_array($query);

        // Display a form pre-filled with the existing data
        if ($row) {
            ?>
            <form method="POST" action="../process/updatePosition.php">
                <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                <label>Company Name</label><input type="text" name="companyName" placeholder="Enter Company Name" value="<?php echo $row['Company_name']; ?>" required><br><br>
                <label>Description</label><input type="text" name="description" placeholder="Enter Description" value="<?php echo $row['description']; ?>" required><br><br>
                <label>Working Conditions</label><input type="text" name="workConditions" placeholder="Enter Working Conditions" value="<?php echo $row['working_conditions']; ?>" required><br><br>
                <label>Salary Range</label><input type="text" name="salaryRange" placeholder="Enter The Salary" value="<?php echo $row['expect_salary']; ?>" required><br><br>
                <label>Deadline</label><input type="text" name="deadline" placeholder="Enter the deadline" value="<?php echo $row['deadline']; ?>" required><br><br>
                <label>MajorId</label><input type="text" name="major" placeholder="Enter The Major ID" value="<?php echo $row['MajorId']; ?>" required><br><br>
                <input type="submit" value="Update">
            </form>
            <?php
        } else {
            echo "Row not found.";
        }
    } else {
        echo "Invalid ID.";
    }
?>
