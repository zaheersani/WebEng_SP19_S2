<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
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
?>
<div class="container col-md-5">
    <form action="addaction.php" method="post">
        <div class="form-group">
            <label for="empid">Employee ID</label>
            <input type="text" name="empid" class="form-control" id="empid" placeholder="Employee ID">
        </div>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
        </div>
<!--        TODO: Add Other Fields here!-->
        <div class="form-group">
            <label for="desig">Designation</label>
            <input type="text" name="desig" class="form-control" id="desig" placeholder="Designation">
        </div>
        <button type="submit" class="btn btn-primary">Add New Employee</button>
    </form>
</div>
</body>
</html>
