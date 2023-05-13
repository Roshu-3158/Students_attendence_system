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
            <table class="table table-stripped">
                <tr>
                    <th>Serial Number</th>
                    <th>Dates</th>
                    <th>Show Attendance</th>
                </tr>

                <?php
                $result = mysqli_query($conn, "select distinct date from attendence_records");
                $serialnumber = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $serialnumber++;
                ?>
                    <tr>
                        <td> <?php echo $serialnumber; ?></td>
                        <td> <?php echo $row['date']; ?></td>
                        <td> 
                            <form action="show_attendance.php" method="POST">
                                <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                                <input type="submit" value="Show Attendance" class="btn btn-primary">

                            
                            </form> 
                        </td>
                    </tr>
                <?php
               
                }

                ?>

            </table>

        </form>

    </div>
</div>