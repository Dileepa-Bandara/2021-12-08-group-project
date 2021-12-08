<?php
session_start();
require_once "./auth.php";
//create object of a auth
$user = new Auth();



if (isset($_POST["action"]) && $_POST["action"] == "usersLogin") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $email = $user->checkInput($_POST["email"]);
    $password = $user->checkInput($_POST["password"]);

    $registeredEmployee = $user->loginEmployee($email);
    $registeredManager = $user->loginManager($email);

    // echo $registeredEmployee["email"];
    // $hpass = password_hash("123456", PASSWORD_DEFAULT);
    // echo $hpass;


    // echo $password;
    if ($registeredEmployee != null) {
        // echo "success";
        if (password_verify($password, $registeredEmployee["password"])) {
            // echo "password decrypt success";

            if ($registeredEmployee["userRole"] == "employee") {
                $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['userRole'] = "employee";
                $_SESSION["Page"] = "employee";
                echo "employee";
            }
        } else {
            echo "error";
        }
    } else if ($registeredManager != null) {
        if (password_verify($password, $registeredManager["password"])) {

            if ($registeredManager["userRole"] == "hr-manager") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['email'] = $registeredManager['email'];
                $_SESSION["userRole"] = "hr-manager";
                $_SESSION["Page"] = "hr-manager";
                echo "hr-manager";
            }
            if ($registeredManager["userRole"] == "leave-manager") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['email'] = $registeredManager['email'];
                $_SESSION["userRole"] = "leave-manager";
                $_SESSION["Page"] = "leave-manager";
                echo "leave-manager";
            }
            if ($registeredManager["userRole"] == "payroll-manager") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['email'] = $registeredManager['email'];
                $_SESSION["userRole"] = "payroll-manager";

                echo "payroll-manager";
            }
            if ($registeredManager["userRole"] == "admin") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['email'] = $registeredManager['email'];
                $_SESSION["userRole"] = "admin";
                $_SESSION["Page"] = "admin";
                echo "admin";
            }
            if ($registeredManager["userRole"] == "recruitment-manager") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                $_SESSION['email'] = $registeredManager['email'];
                $_SESSION["userRole"] = "recruitment-manager";
                $_SESSION["Page"] = "recruitment-manager";
                echo "recruitment-manager";
            }
        } else {
            echo "error";
        }
    }



    // </div> ";

}
