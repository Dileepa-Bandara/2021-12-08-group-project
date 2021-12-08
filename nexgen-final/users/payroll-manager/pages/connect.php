<?php
$msg = "";
//session_start();

//$departmentId = $_POST['departmentId'];
$id = $_POST['id'];
$designation = $_POST['designation'];
$basicsalary = $_POST['basicsalary'];
$ot = $_POST['ot'];
$allowances = $_POST['allowances'];
$bonus = $_POST['bonus'];
$nopay = $_POST['nopay'];


$conn = new mysqli('localhost', 'root', '', '2102_test');

$dupli = "select 'designation from payroller where id = '$id'";
$result = mysqli_query($conn,$dupli);

if(mysqli_num_rows($result) > 0) {
    
   
    
    echo '<script type="text/javascript">'; 
    echo 'window.location.href = "../users/payroll-manager/index.php?Page=editSalary.php";';
echo 'alert("Salary Updated");';

echo '</script>';
        



}else{
    $stmt = $conn->prepare("insert into payroller(id, designation, basicsalary, ot, allowances, bonus, nopay)values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $id, $designation, $basicsalary, $ot, $allowances, $bonus, $nopay);
    $stmt->execute();
    if($stmt) {
        echo ' <script type="text/javascript">
        alert("Added Successfully");
    </script>
    ';
    }else {
        echo "<script>alert('Failed')</script>";

    }

  
    header("Location:../users/admin/index.php?Page=profile.php");
    $stmt->close();
    $conn->close();
}




?>