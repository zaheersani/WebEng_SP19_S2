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
    $id = $empid = $name = $desig = '';
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // TODO: Write Get Action to display record and fill the fields for editing
        $id = $_GET['id'];
        $emp = new Employee();
        $empObj = $emp->GetSingleRecord($id);
        if($empObj != null) {
            $empid = $empObj->EmpID;
            $name = $empObj->FullName;
            $desig = $empObj->Designation;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // TODO: Write code to Update records based on posted back fields
        $emp = new Employee();
        if($emp->Update($_POST['id'], $_POST['empid'], $_POST['name'], $_POST['desig'])) {
            header("Location: employees.php");
        }
    }
    ?>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$id ?>">
        <div class="form-group">
            <label for="empid">Employee ID</label>
            <input type="text" name="empid" class="form-control" id="empid" placeholder="Employee ID" value="<?=$empid ?>">
        </div>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="<?=$name ?>">
        </div>
        <!--        TODO: Add Other Fields here!-->
        <div class="form-group">
            <label for="desig">Designation</label>
            <input type="text" name="desig" class="form-control" id="desig" placeholder="Designation" value="<?=$desig ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
