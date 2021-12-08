<?php

// session_start();

include_once("../../assets/con2.php");

$sql = "SELECT designation,basicsalary,ot,allowances,bonus,nopay FROM payroller";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply Leaves</title>
    <link rel="stylesheet" href="./pages/css/salaryTypes.css">
</head>

<body>

    <div class="table-container">
        <div class="salaryTypeTitle">
            <h1>Salary Types</h1>
            <a href="index.php?Page=addNewSalaryType.php" class="add-new">Add New</a>
        </div>


        <div class="st-table-container">
            <table class="st-table">
                <tr>
                    <th>Designation</th>
                    <th>Basic</th>
                    <th>OT</th>
                    <th>Allowances</th>
                    <th>Bonus</th>
                    <th>No-pay</th>
                    <th>Edit</th>
                </tr>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['basicsalary']; ?></td>
                            <td><?php echo $row['ot']; ?></td>
                            <td><?php echo $row['allowances']; ?></td>
                            <td><?php echo $row['bonus']; ?></td>
                            <td><?php echo $row['nopay']; ?></td>
                            <td><a href="index.php?Page=editSalary.php">Edit</a></td>
                        </tr>
                <?php
                    }
                }
                ?>


            </table>
        </div>

    </div>

</body>

</html>