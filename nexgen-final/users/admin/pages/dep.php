<?php
$msg = "";
//session_start();

//$departmentId = $_POST['departmentId'];
$departmentName = $_POST['departmentName'];
$description = $_POST['description'];
$location = $_POST['location'];
$createdBy = $_POST['createdBy'];
$createdDate = $_POST['createdDate'];
$depManagerEmpId = $_POST['depManagerEmpId'];
$depManagerName = $_POST['depManagerName'];
$depManagerContact = $_POST['depManagerContact'];


$conn = new mysqli('localhost', 'root', '', '2102_test');

$dupli = "select departmentName from departments where departmentName = '$departmentName'";
$result = mysqli_query($conn,$dupli);

if(mysqli_num_rows($result) > 0) {
    //$msg = "Department Exist";
   
    
    echo '<script type="text/javascript">'; 
    echo 'window.location.href = "../index.php?Page=addDepartment.php";';
echo 'alert("Department Already Exist");';

echo '</script>';
    
    //header("Location:../users/admin/index.php?message=Heygirl");
    //echo "Helloooooo";
    //$msg = "Department Exist";
    //$_SESSION['status'] = $msg;
    //header("Location:../users/admin/index.php?Page=addDepartment.php");
    //echo ' <script type="text/javascript">
    //alert("'.$msg.'");
//</script>
//';

    



}else{
    $stmt = $conn->prepare("insert into departments(departmentName, description, location, createdBy, createdDate, depManagerEmpId, depManagerName, depManagerContact)values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $departmentName, $description, $location, $createdBy, $createdDate, $depManagerEmpId, $depManagerName, $depManagerContact);
    $stmt->execute();
    if($stmt) {
        echo ' <script type="text/javascript">
        alert("Added Successfully");
    </script>
    ';
    }else {
        echo "<script>alert('Failed')</script>";

    }

   /* $last_id = mysqli_insert_id($conn);
    if($last_id){
        $departmentId = "DEP_".$last_id;
        $query1 = "update departments SET 'departmentId'='".$departmentId"' where 'id'='".$last_id"'";
        $res1 = mysqli_query($conn,$query1);
    }
    */
   // $_SESSION['status'] = "Added New Department Successfully";
  
    header("Location:../index.php?Page=addDepartment.php");
    $stmt->close();
    $conn->close();
}



/*
//Database connection
$conn = new mysqli('localhost', 'root', '', '2102_test');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into departments(departmentName, description, location, createdBy, createdDate, depManagerEmpId, depManagerName, depManagerContact)values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $departmentName, $description, $location, $createdBy, $createdDate, $depManagerEmpId, $depManagerName, $depManagerContact);
    $stmt->execute();
    if($stmt) {
        echo "<script>alert('Added Successfully')</script>";
    }else {
        echo "<script>alert('Failed')</script>";

    }
    */

   /* $last_id = mysqli_insert_id($conn);
    if($last_id){
        $departmentId = "DEP_".$last_id;
        $query1 = "update departments SET 'departmentId'='".$departmentId"' where 'id'='".$last_id"'";
        $res1 = mysqli_query($conn,$query1);
    }
    */
   // $_SESSION['status'] = "Added New Department Successfully";
  /*
    header('location: ../index.php?Page=addDepartment.php');
    $stmt->close();
    $conn->close();
}
*/

/*
$errors = array();

$dupli = "select departmentName from departments where departmentName = '$departmentName'";
$result = mysqli_query($conn,$dupli);

if(mysqli_num_rows($result) > 0) {
    $errors['dupli'] = "Department Exist";
}
*/


?>