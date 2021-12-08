<?php

// require_once $_SERVER['DOCUMENT_ROOT'] . '/group project/one/group-project-2/assets/session.php';
if (isset($_SESSION["email"])) {
    header("Location:./users/" . $page . "/index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            position: relative;
        }

        .mainContainer {
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 10;
        }

        .topNav {
            background: rgb(202, 202, 202);
            top: 10px;
            position: absolute;
            display: flex;
            align-items: center;
            height: 60px;
            width: 100%;
            /* opacity: 0.1; */
        }

        .company-name {
            color: #ff6f00;
            font-size: 25px;
            font-weight: bolder;
            flex-basis: 1100px;
            margin-left: 10px;
        }

        .topNav a {
            text-decoration: none;
            float: right;
            margin-right: 20px;
            display: block;
            /* background: grey; */
            font-size: 20px;
        }

        .login {
            background: #071d56;
            color: white;
            padding: 12px;
            border-radius: 8px;
            width: 7%;
            justify-content: center;
            font-family: arial;
        }

        .login:hover {
            background-color: #6880d3;
            color: white;
        }

        .landing-content {
            position: absolute;
            display: flex;
            justify-content: center;
            top: 100px;
            width: 100%;
            /* margin-left: 25px; */
            /* margin: 20px; */
            /* background: grey; */
        }

        .top-header {
            font-size: 60px;
            font-weight: bold;
            margin: 50px auto;
            display: flex;
            justify-content: center;
        }

        .bottom-header {
            font-size: 30px;
            /* font-weight: bold; */
            display: flex;
            justify-content: center;
        }

        .footer {
            background: darkgray;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0px;
            z-index: 20;
            height: 200px;
            display: flex;
            justify-content: space-between;
        }

        .column-one,
        .column-two,
        .column-three {
            width: 400px;
            /* background: red; */
            padding: 10px;
            display: flex;
            align-content: flex-start;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        /*background image style */
        .bg-image {
            /* The image used */
            /* background-image: url("./architecture.jpg"); */
            background-image: url("./assets/image/architecture.jpg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100vh;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="bg-image"></div>
    <div class="mainContainer">
        <div class="topNav">
            <div class="company-name">NexGen HRM</div>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="./pages/career.php">Careers</a>
            <a href="./pages/login.php" class="login">Login</a>
        </div>
        <div class="landing-content">
            <div class="header">
                <div class="top-header">
                    <div>Unrivaled Next Generation Software Solutions</div>
                </div>
                <div class="bottom-header">
                    We are following the latest technologies to bring you
                    next-generation solutions for your business requirements.
                </div>
            </div>
            <!-- <div class="vacancy"></div> -->
        </div>
    </div>
    <div class="footer">
        <div class="column-one">
            <div class="company-name">NexGen HRM</div>

            <div>
                <h3>
                    We provide unrivaled software solutions with passion to bring your
                    business to the next level.
                </h3>
            </div>
        </div>
        <div class="column-two">
            <h3>QUICK LINKS</h3>
            <a href="./pages/about.php">About</a>
            <a href="#">Contact</a>
            <a href="./pages/career.php">Careers</a>
        </div>
        <div class="column-three">
            <h2>Follow Us</h2>
        </div>
    </div>
</body>

</html>