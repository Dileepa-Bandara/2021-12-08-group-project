<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./interfaces/payroll/index.css">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".notification").click(function() {
                $(".notifi-box").toggleClass("active");
            })
        });
    </script>

    <style>
        .notifi-box {
            width: 350px;
            height: 0px;
            /* opacity: 0; */
            display: none;
            position: absolute;
            top: 63px;
            right: 35px;

            border-radius: 10px;
            /* box-shadow: 10px 10px 6px red; */

            font-family: arial;
        }

        .notifi-box h2 {
            font-size: 16px;
            padding: 10px;
            border-bottom: 1px solid black;
            color: #6880d3;
            background-color: white;
        }

        .notifi-box h2 span {
            color: red;
        }

        .notifi-item {
            display: flex;
            border-bottom: 1px solid #6880d3;
            padding: 15px 5px;
            cursor: pointer;
            box-shadow: 5px 5px 5px #6880d3;
            background-color: white;
            /* border: 2px solid red; */
            border-radius: 5px;
        }

        .notifi-item:hover {
            background-color: #eee;
        }

        .notifi-item img {
            display: block;
            width: 20%;
            margin-right: 10px;
            border-radius: 50%;
        }

        .notifi-item .text h4 {
            color: #6880d3;
            font-size: 16px;
            margin-top: 10px;
        }

        .notifi-item .text p {
            color: black;
            font-size: 12px;
        }

        .notifi-box.active {
            display: block;


        }
    </style>


</head>

<body>
    <div class="main-container">

        <div class="top-container" id="top-container">

            <div class="menu__icon" id="menu__icon"><button }><img src="./assets/menu.png" alt=""> </button></div>
            <div class="title">HRM System</div>
            <div class="position">Payroll Manager</div>
            <div class="notification"><a href="#"><img src="./assets/notification.png" alt="Notification"></a></div>
            <div class="logout"><a href="../../assets/logout.php">Logout</a></div>

            <div class="notifi-box" id="box">
                <h2>Notification <span>4</span></h2>
                <div class="notifi-item">
                    <img src="./assets/leavemanager-dp.png" alt="">
                    <div class="text">
                        <h4>Linda Perera</h4>
                        <p>Hey, Your leave request has been approved.</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="./assets/hrmanager-dp.png" alt="">
                    <div class="text">
                        <h4>Milan Fernando</h4>
                        <p>Posted an Announcement. Go & Check it out</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="./assets/recmanager-dp.png" alt="">
                    <div class="text">
                        <h4>Priya Silva</h4>
                        <p>Hey, Dashboard has new changes. Go & Check it out</p>
                    </div>
                </div>
                <div class="notifi-item">
                    <img src="./assets/payroll-dp.png" alt="">
                    <div class="text">
                        <h4>Suresh Bhathiya</h4>
                        <p>Hey, Salary slips have sent to your emails.</p>
                    </div>
                </div>

            </div>


        </div>



        <div class="side-container" id="side-container">

            <div class="avatar"><img src="./assets/payroll-dp.png" alt="Avatar"></div>
            <div class="name">HI Sadun</div>
            <div class="buttons">
                <button class="dropButton"><a href="index.php?Page=dashboard.php">Dashboard</a></button>
                <button class="dropButton"><a href="index.php?Page=profile.php">Profile</a></button>

                <button class="dropButton"> Leaves</button>
                <div class="drop-content">
                    <a href="index.php?Page=pendingLeave.php">My Leaves</a>
                    <a href="index.php?Page=remainingLeave.php">Apply Leaves</a>

                </div>
                <button class="dropButton"><a href="#">Salary</a></button>
                <div class="drop-content">
                    <a href="index.php?Page=calculateSalary.php">Calculate Salary</a>
                    <a href="index.php?Page=salaryTypes.php">Salary Types</a>
                    <a href="index.php?Page=viewSalary.php">Salary Details</a>
                    <a href="index.php?Page=salaryDetails.php">My Salary</a>






                </div>
                <button class="dropButton"><a href="index.php?Page=news.php">News</a></button>
                <button class="dropButton"><a href="index.php?Page=templates.php">Templates</a></button>
                <button class="dropButton"><a href="index.php?Page=sendEmail.php">Send Emails</a></button>





            </div>
        </div>

        <div class="content" id="content">

            <?php

            if (!isset($_GET["Page"])) {
                include("pages" . "/" . "dashboard.php");
            }

            if (!empty($_GET["Page"])) {
                $pageName = $_GET["Page"];
                // echo "<h2>page name is $pageName</h2>";
                $pages_directory = "pages";
                // echo "<h2>Directory name is $pages_directory</h2>";


                //get page directory
                $pages_folder = scandir($pages_directory, 1);
                // echo "<pre>";
                // print_r($pages_folder);
                // echo "</pre>";
                // remove unnecessary files
                unset($pages_folder[11], $pages_folder[12], $pages_folder[17], $pages_folder[18]);
                // echo "<pre>";
                // print_r($pages_folder);
                // echo "</pre>";




                if (in_array($pageName, $pages_folder)) {

                    include($pages_directory . "/" . $pageName);
                } else if (!isset($_GET["Page"]) || !empty($_GET["Page"]) == "dashboard") {
                    include($pages_directory . "/" . "dashboard.php");
                } else {
                    echo "</h2>OOPS....NOT FOUND </h2>";
                }
            }







            ?>
        </div>
    </div>

    <script>
        //we should stop page refreshing after button click
        var menuButton = document.getElementById("menu__icon");
        var width = document.getElementById("side-container");
        var contentMargin = document.getElementById("content");
        var dropButton = document.getElementsByClassName("dropButton")
        var topContainer = document.getElementById("top-container");
        menuButton.addEventListener("click", function() {


            if (width.style.width === "25%") {
                width.style.width = 0;
                width.style.padding = 0;
                contentMargin.style.marginLeft = 0;
                contentMargin.style.width = "100%";
                width.style.opacity = 0;

            } else {
                width.style.width = "25%";
                contentMargin.style.marginLeft = "25%";
                width.style.opacity = 10;
                width.style.padding = "1em"
                contentMargin.style.width = "75%";



            }
        });


        var i = 0;
        for (i = 0; i < dropButton.length; i++) {
            dropButton[i].addEventListener("click", function(e) {

                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    prevent.default();
                } else {

                    dropdownContent.style.display = "block";

                }
            });
        }
    </script>
</body>

</html>