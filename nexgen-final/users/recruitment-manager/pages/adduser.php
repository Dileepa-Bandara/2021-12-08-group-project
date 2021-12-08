<?php
require_once("Candidate/User.php");



$email=(isset($_GET['email'])) ? $_GET['email'] : null;
$user = new user();
$user->email=$email;
if (isset($_POST['submit'])) {

    $user->addUser($_POST);
    //print_r($user->errors);
    if (!$user->errors) {
        $mailstatus = $user->sentUserMail();
        if ($mailstatus) {
            echo "Email was sent to the employee";
        } else {
            echo "Email was not sent to employee";
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EMPLOYEE REGISTRATION FORM</title>

    <link rel="stylesheet" type="text/css" href="./pages/css/style1.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" method="post">

                <div class="dashboard">

                    <h2>Employee Registration</h2>

                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" value="<?php echo $user->email; ?>"><?php if (isset($user->errors['email'])) echo $user->errors['email']; ?></div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password"><?php if (isset($user->errors['password'])) echo $user->errors['password']; ?></div>


                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword"><?php if (isset($user->errors['cpassword'])) echo $user->errors['cpassword']; ?></div>
                <div class="form-group">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>

    </div>
</body>

</html>