<?php
    include('../process/db_config.php');
 
    $CompanyName=$_POST['companyName'];
    $Description=$_POST['description'];
    $WorkingConditions=$_POST['workConditions'];
    $ExpectedSalary=$_POST['salaryRange'];
    $Deadline=$_POST['deadline'];
    $MajorID=$_POST['major'];

 
    mysqli_query($conn, "INSERT INTO announcement (Company_name, description, working_conditions, expect_salary, deadline, MajorId)
    VALUES ('$CompanyName', '$Description', '$WorkingConditions', '$ExpectedSalary', '$Deadline', '$MajorID')");
    header('location:../pages/admin.php');
 
?>
