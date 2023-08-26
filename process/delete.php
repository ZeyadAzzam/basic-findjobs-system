<?php
    include('../process/db_config.php');

    // Check if the ID parameter is present in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Delete the row from the database
        $query = mysqli_query($conn, "DELETE FROM `announcement` WHERE Id = '$id'");
        if ($query) {
            echo "Row deleted successfully.";
        } else {
            echo "Failed to delete row.";
        }
    } else {
        echo "Invalid ID.";
    }
    header('location:../pages/admin.php');
?>
