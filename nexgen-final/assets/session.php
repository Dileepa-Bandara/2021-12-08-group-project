<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/auth.php';




$currentUser = new Auth();

$email = $_SESSION["email"];

if (!isset($_SESSION["email"])) {
    header("Location:../../index.php");
    die;
}
if ($_SESSION["userRole"] == "employee") {
    $page = $_SESSION["Page"];
    $currentData = $currentUser->loginEmployee($_SESSION["email"]);
    $id = $currentData["candidateid"];
    $fullname = $currentData["fullname"];
    $dob = $currentData["dob"];
    $gender = $currentData["gender"];
    $nic = $currentData["nicno"];
    $contactnumber = $currentData["contactno"];
    $email = $currentData["email"];
    $nationality = $currentData["nationality"];
    $telephone = $currentData["telephone"];
    $address = $currentData["address"];
    $department = $currentData["department"];
    $expsalary = $currentData["expsalary"];
    $position = $currentData["position"];
    $eduQual =  $currentData["eduqual"];
    $profQual =  $currentData["profqual"];
    $assignedEmail =  $currentData["recmgr_assignemail"];
    $password =  $currentData["password"];
    $userRole =  $currentData["userRole"];
}

if (
    $_SESSION["userRole"] == "payroll-manager" ||
    $_SESSION["userRole"] == "leave-manager" ||
    $_SESSION["userRole"] == "recruitment-manager" ||
    $_SESSION["userRole"] == "admin" ||
    $_SESSION["userRole"] == "hr-manager"
) {

    $currentData = $currentUser->loginManager($_SESSION["email"]);
    // $id = $currentData["id"];
    $name = $currentData["name"];
    $gender = $currentData["gender"];
    $userRole =  $currentData["userRole"];
    $department = $currentData["department"];
    $address = $currentData["address"];
    $email = $currentData["email"];
}





// } else {
//     $currentData = $currentUser->loginManager($_SESSION["email"]);
//     // $id = $currentData["id"];
//     $name = $currentData["name"];
//     $gender = $currentData["gender"];
//     $userRole =  $currentData["userRole"];
//     $department = $currentData["department"];
//     $address = $currentData["address"];
//     $email = $currentData["email"];
//     $page = $_SESSION["Page"];
// }
