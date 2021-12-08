<?php




// if (isset($email)) {
//     // require_once $_SERVER['DOCUMENT_ROOT'] . '/group project/one/group-project-2/assets/session.php';
//     header("Location:users/employee/index.php");
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            font-size: 30px;
            color: red;

        }

        form {
            border: 1px solid #6880d3;
            width: 60%;
            margin: auto;
            border-radius: 20px;
            box-shadow: 0px 10px 5px 0px #6880d3;
            /* box-shadow: 5px 5px 2px #6880d3; */
        }


        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit] {
            background: #071d56;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
        }

        input[type=submit]:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;

        }

        .cancelbtn:hover {
            opacity: 0.8;
        }


        .imgcontainer {
            text-align: center;
            margin: auto;

        }

        img.avatar {
            width: 30%;
            border-radius: 50%;
        }

        .container {
            padding: 50px;
        }

        a {
            text-decoration: none;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }
    </style>
</head>

<body>
    <!-- <h1>Login Page</h1>
    <form action="" id="login-form" method="post">
        <label for="">Email :</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="">Password :</label>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" id="login" value="Login">

    </form>
    <a href="./forgot.php">forgot password</a> -->
    <h2>
        <center>Login Form</center>
    </h2>

    <form action="/action_page.php" method="post" id="login-form">
        <br>
        <div class="imgcontainer">
            <img src="user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>
            <br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <!-- <button type="submit">Login</button> -->
            <input type="submit" value="LOGIN" id="login">
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1; border-radius: 20px;">
            <a href="../index.php" class="cancelbtn">Cancel</a>
            <span class="psw"><a href="#">Forgot Password?</a></span>
        </div>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            //Ajax request
            //register form validation
            $("#login").click(function(e) {
                if ($("#login-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#login").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "../assets/test.php",
                        method: "post",
                        //grab data from form
                        data: $("#login-form").serialize() + "&action=usersLogin",
                        success: function(response) {
                            // console.log(response);
                            $("#login").val("LOGIN");
                            $("#login-form")[0].reset();
                            if (response === "employee") {
                                window.location = "../users/employee";
                            }
                            // } else if (asd) {

                            // } 
                            else if (response === "hr-manager") {
                                window.location = "../users/hr-manager/";
                            } else if (response === "leave-manager") {
                                window.location = "../users/leave-manager/";
                            } else if (response === "admin") {
                                window.location = "../users/admin/";
                            } else if (response === "payroll-manager") {
                                window.location = "../users/payroll-manager/";
                            } else if (response === "recruitment-manager") {
                                window.location = "../users/recruitment-manager/";
                            }

                            //else {
                            // $("#alert-button").click(function() {
                            //     $("#alert").hide();
                            // });
                            // $('#alert').html(response);

                            // }
                            // console.log(response);
                            // $("#registerEmployee").val("Register");
                        }

                    })
                }


            })
        });
    </script>
</body>

</html>