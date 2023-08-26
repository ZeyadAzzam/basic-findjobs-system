<?php
include("db_config.php");

function getUser($email, $password) {
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}

function getAllPositions(){
    $query = 'SELECT * FROM announcement ';
    $result = mysqli_query($GLOBALS['conn'], $query);
    
    return $result;
}
        

function getPositionsByStudyField($study){
    
    $query = 'SELECT * FROM announcement where MajorId= "'.$study. '"';
    $result = mysqli_query($GLOBALS['conn'], $query);
    return $result;
}


?>


