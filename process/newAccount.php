<?php
include("db_config.php");
if(!empty($_POST)) {
$fullName = $_POST["fullName"];
$email = $_POST ["email"];
$pass = $_POST ["pass"];
$mobileNumber = $_POST ["mobileNumber"];
$experience = $_POST ["experience"];
$language = $_POST ["language"];
$bio = $_POST ["bio"];
$fieldOfStudy = $_POST["fieldOfStudy"];


$studyKey =null;
if ($fieldOfStudy == "SW") 
$studyKey =1;

if ($fieldOfStudy == "AI") 
$studyKey =2;

if ($fieldOfStudy == "cyber")
$studyKey =3;

if($fieldOfStudy =="cloud")
$studyKey =4;

$query = "INSERT INTO user VALUES ('".$fullName."' , '".$email. "', '".$mobileNumber."','".$experience."', '".$language."', '".$bio."','".$fieldOfStudy."',Null,'".$pass."','".$studyKey."')";
$result = mysqli_query($conn, $query);
if($result) {
    header("location:../login.php?valid=true");
}else {
    header("location:../login.php?valid=false");
}

}

?>