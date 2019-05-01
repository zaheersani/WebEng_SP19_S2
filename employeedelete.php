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
include_once ("navigation.html");
require_once("EmployeeClass.php");
$emp = new Employee();
if(isset($_GET["id"]) && !empty($_GET["id"])) {
    if($emp->Delete($_GET["id"])) {
        echo "Record has been deleted successfully!";
        return;
    }
    echo "Something went wrong! Record has not been deleted!";
}
else {
    echo "Specify Employee id";
}

?>
</body>
</html>
