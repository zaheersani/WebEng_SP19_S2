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

    <?php
    require_once("EmployeeClass.php");
    $emp = new Employee();
    $empArray = $emp->GetAllRecords();
    ?>

</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <table class="table">
        <th>Name</th>
        <th>Actions</th>
        <?php
        foreach ($empArray as $empObj   ) {
            ?>
            <tr>
                <td>
                    <a href="employeedetails.php?id=<?= $empObj->id ?>">
                        <?php
                        echo $empObj->FullName;
                        ?>
                    </a>
                </td>
                <td>
                    <a href="employeeedit.php?id=<?= $empObj->id ?>">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                </td>
            <!--TODO: Add A Button to Delete Record
                TODO: Create a delete action page where you should delete record with success or fail message.
                -->
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>