<?php global $connection;
include('header.php');?>
<?php include('dbcon.php');?>
        <div class="box1">
            <h2>ALL STUDENTS</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
        </div>

        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM students";
                $result =mysqli_query($connection, $query);
                if(!$result){
                    die("query failed".mysqli_error());
                } else {
                    while($row = mysqli_fetch_assoc($result)){
                       ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>

                        <?php
                    }
                }
            ?>

            </tbody>
        </table>
<form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="l_name" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" name="add_students" value="ADD">
            </div>
        </div>
    </div>
</div>
</form>

<?php include('footer.php');?>
















