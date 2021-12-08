<?php
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require_once "./auth.php";
//create object of a auth
$user = new Auth();
$error = array();




if (isset($_POST["action"]) && $_POST["action"] == "registerUsers") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";



    //create variables
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $userRole = $_POST["userRole"];
    $department = $_POST["departments"];
    $nic = $_POST["nic"];


    //check input values
    $name = $user->checkInput($name);
    $gender = $user->checkInput($gender);
    $password = $user->checkInput($password);
    $cpassword = $user->checkInput($cpassword);
    $address = $user->checkInput($address);
    $email = $user->checkInput($email);
    $mobile = $user->checkInput($mobile);
    $userRole = $user->checkInput($userRole);
    $department = $user->checkInput($department);
    $nic = $user->checkInput($nic);

    //encript passowrd
    $hpass = password_hash($password, PASSWORD_DEFAULT);
    // echo $hpass;

    //check user already rigistered or not and other validations
    if ($user->userExistManager($email)) {
        echo $user->showMessages("This user already registered!");
    } else if ($password != $cpassword) {
        echo $user->showMessages("Password and Confirm Password must be match!");
    } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo $user->showMessages("Full Name must contain only alphabets and space!");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $user->showMessages("Please Enter Valid Email ID!");
    } else if (!preg_match("/^(\d){9}(([vVxX])|(\d){3})$/", $nic)) {
        echo $user->showMessages("NIC must contain 9 digits followed by X or V");
    } else if (!preg_match("/^(\d){10}$/", $mobile)) {
        echo $user->showMessages("Contact number must have 10 digits");
    } else {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "nexgenhrm123@gmail.com";
        $mail->Password = "next1234";
        $mail->setFrom("nexgenhrm123@gmail.com", "NexGen HRM");
        $mail->isHTML(true);
        $mail->Subject = "Managers Registration";
        $mail->Body = "Your  email is " . $email . " and Password is " . $password;
        $mail->addAddress($email);
        // $mail->send();
        if ($mail->send()) {
            echo  $user->showMessages("Registration Success");
            if ($user->registerAuthManager($name, $gender, $userRole, $department, $mobile, $address, $email, $hpass, $nic)) {
            } else {
                echo  $user->showMessages("Registration Failed.Enter Valid email");
            }

            $mail->smtpClose();
        } else {
            echo $user->showMessages("Registration Failed");
        }
    }
}
