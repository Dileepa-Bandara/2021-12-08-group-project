<?php

session_start();
include_once("../../../assets/con2.php");

$sql = "SELECT usersId, usersName, usersEmail, usersPhone FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    return $result;
} else {
    header("location:../index.php?Page=salaryTypes.php");
    exit();
}
