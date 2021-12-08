<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/editSalary.css">
    <title>Add New Salary Type</title>
</head>

<body>
    <div class="edit-salary-container">
        <form action="./back/addSalary.php" method="post">
            <div class="edit-salary-title">Add New Salary Type</div>
            <div class="edit-Salary-input">
                <label for="">Designation :</label>
                <input type="text" name="designation">
            </div>
            <div class="edit-Salary-input">
                <label for="">Basic :</label>
                <input type="text" name="basic">
            </div>
            <div class="edit-Salary-input">
                <label for="">OT :</label>
                <input type="text" name="ot">
            </div>
            <div class="edit-Salary-input">
                <label for="">Allowances :</label>
                <input type="text" name="allowances">
            </div>
            <div class="edit-Salary-input">
                <label for="">Bonus :</label>
                <input type="text" name="bonus">
            </div>
            <div class="edit-Salary-input">
                <label for="">No-Pay :</label>
                <input type="text" name="nopay">
            </div>
    </div>
    <div class="edit-salary-buttons">
        <a href="index.php?Page=salaryTypes.php">Back</a>
        <button type="submit">Save</button>
    </div>

    </form>

    </div>
</body>

</html>