<?php
include("db.php");
include("header.php");

?>

<div class="panel panel-default">
    <!-- adding two buttons  -->
    <div class="panel panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add student</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>


    <div class="panel panel-body">
        <form action="index.php" method="post">
            <table class="table table-stripped">
                <tr>
                    <th>#Serial Number</th>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Attendence status</th>
                </tr>

                <?php
                $result = mysqli_query($conn, "select * from attendence_records where date='$_POST[date]'");
                $serialnumber = 0;
                $counter = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $serialnumber++;
                ?>
                    <tr>
                        <td> <?php echo $serialnumber; ?></td>

                        <td> <?php echo $row['student_name']; ?></td>
                        <td> <?php echo $row['roll_number']; ?></td>

                        <td>
                            <input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
                            <?php if($row['attendence_status']=="Present")
                                echo"checked=checked";
                            ?>
                            value="Present"> Present </input> 
                            <input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
                            <?php if($row['attendence_status']=="Absent")
                                echo"checked=checked";
                            ?>
                            
                            value="Absent"> Absent </input>
                        </td>
                    </tr>
                <?php
                $counter++;
                }

                ?>

            </table>

            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>

    </div>
</div>