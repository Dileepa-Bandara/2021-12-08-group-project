<?php
session_start();
include_once("../../../assets/con2.php");

if (
    isset($_POST['designation']) && isset($_POST['basic'])
    && isset($_POST['ot']) && isset($_POST['allowances'])
    && isset($_POST['bonus']) && isset($_POST['nopay'])
) {

    $designation = $_POST['designation'];
    $basic = $_POST['basic'];
    $ot = $_POST['ot'];
    $allowances = $_POST['allowances'];
    $bonus = $_POST['bonus'];
    $nopay = $_POST['nopay'];

    $sql2 = "INSERT INTO payroller(designation,basicsalary,ot,allowances,bonus,nopay) VALUES('$designation','$basic', '$ot', '$allowances', '$bonus', '$nopay')";
    $result2 = mysqli_query($con, $sql2);


    if ($result2) {
        header("Location: ../index.php?Page=salaryTypes.php");
        echo ("success");

        exit();
    } else {
        header("Location: ../index.php?Page=salaryTypes.php?error=unknown error occurred");
        exit();
    }
} else {
    header("Location: ../index.php?Page=salaryTypes.php");
    exit();
}
