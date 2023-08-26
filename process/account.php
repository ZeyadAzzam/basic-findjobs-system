<?php

    session_start();
    include("API.php");

    if(!empty($_POST)){

        $input_email = $_POST["email"];
        $input_password = $_POST["pass"];

        $input_email = trim($input_email);
        $input_password = trim($input_password);


        $result = getUser($input_email, $input_password);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $input_email;
            $_SESSION['password'] = $input_password;

            $row = mysqli_fetch_assoc($result);
            echo $row;

            if($row["email"] == "admin@ltuc.com" and $row["password"] == "admin"){
                header("location:../pages/admin.php");

            }

            else {
                $_SESSION["study"] = $row["MajorId"];
                header("location: ../pages/userHome.php");
            }
        }

        else {
            header("location:../login.php");
        }
    }
?>