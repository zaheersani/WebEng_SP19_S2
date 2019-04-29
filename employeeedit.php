<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:22
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php
    require_once("EmployeeClass.php");
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // TODO: Write Get Action to display record and fill the fields for editing
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // TODO: Write code to Update records based on posted back fields
    }
    ?>
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
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>
</body>
</html>
