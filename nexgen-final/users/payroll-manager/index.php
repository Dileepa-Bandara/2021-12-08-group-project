<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/config.php';

// if ($_SESSION["userRole"] != "payroll-manager") {
//     header("Location:../../index.php");
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    require_once './interfaces/payroll/index.php'
    ?>
</body>

</html