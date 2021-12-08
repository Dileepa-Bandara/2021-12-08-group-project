<?php
$con = mysqli_connect("localhost", "root", "", "2102_test");
$timezone = date_default_timezone_set("Asia/Colombo");


if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
