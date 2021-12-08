<?php
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/session.php';

// require_once "./auth.php";
//create object of a auth
// $user = new Auth();


if (isset($_POST["action"]) && $_POST["action"] == "feedback") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $first = $_POST["first"];
    $last = $_POST["last"];
    $issue = $_POST["issue"];
    $suggestions = $_POST["suggestions"];
    $workstyle = $_POST["work-style"];
    $feedback = $_POST["feedback"];

    $employeeDetails = $currentUser->loginEmployee($email);



    //check user already rigistered or not

    if ($employeeDetails) {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "dileepal1213@gmail.com";
        $mail->Password = "973480448v";
        $mail->setFrom("dileepal1213@gmail.com", "Employee Feedback");
        $mail->isHTML(true);
        $mail->Subject = "Employee Feedback";
        $mail->Body = "Employee = " . $employeeDetails["fullname"] . " sent a feedback";
        $mail->addAddress("nexgenhrm123@gmail.com");
        $mail->send();
        if ($mail->send()) {
            echo  $currentUser->showMessages("Feedback Sent Successfully");
            if ($currentUser->insertFeedback($employeeDetails["candidateid"],  $first,  $last,   $issue,  $suggestions,    $workstyle, $feedback)) {
            } else {
                echo  $currentUser->showMessages("Error");
            }

            $mail->smtpClose();
        } else {
            echo $currentUser->showMessages(" Failed!");
        }
    }
}
