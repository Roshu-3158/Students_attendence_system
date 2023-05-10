<?php

include("db.php");
include("header.php");

?>

<div class="panel panel-default">
    <div class="panel panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add student</a>
            <a class="btn btn-info pull-right" href="viewall.php">View All</a>
        </h2>
    </div>

    <div class="panel panel-body">
        <form action="index.php">
            <table class="table table-stripped">
                <tr>
                    <th>Serial Number</th>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Attendence status</th>
                </tr>

                <?php 
                $result=mysqli_query($conn,"select * from attendence");
                $serialnumber =0;
                while(  $row=mysqli_fetch_array($result))
                {
                    $serialnumber++;
                    ?>
                    <tr>
                        <td> <?php echo $serialnumber; ?></td>
                        <td> <?php echo $row['student_name']; ?></td>
                        <td> <?php echo $row['roll_number']; ?></td>
                        <td>
                            <input type="radio" name="" value="Present"> Present
                            <input type="radio" name="" value="Absent"> Absent
                        </td>
                        </tr>
                    <?php
                }

                ?>

            </table>

            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>

    </div>
</div>
