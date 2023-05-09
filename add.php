<?php
    include("header.php");
    include("db.php");
    // checking and posting the data in database
    if(isset($_POST['submit']))
    {
        mysqli_query($conn,"insert into attendence(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");
    }
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2> 
            <a class="btn btn-success" href="add.php"> Add Student</a>
            <a href="index.php" class="btn btn-info pull-right"> Back</a>
        </h2>
    </div>

    <div class="panel-body">
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">Roll Number</label>
                <input type="text" name="roll" id="roll" class="form-control" required>
            </div> 

            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            </div>
            
        </form>
    </div>
</div>