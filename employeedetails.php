<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once("navigation.html");
require_once("EmployeeClass.php");

$id = $_GET['id'];

// TODO: Display Employee Details
$emp = new Employee();
$empObject = $emp->GetSingleRecord($id);
if ($empObject != null) {
    echo "Employee ID: $empObject->EmpID <br>";
    echo "Full Name: $empObject->FullName <br>";
    echo "Designation: $empObject->Designation <br>";
}
?>
</body>
</html>
