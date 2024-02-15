<?php
    session_start();

    require 'dbconn.php'
?>


<!--Call the header html code-->
<?php include('includes/header.php'); ?>
    
        <div class="container mt-5">

        <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Student Edit
                                <a href="index.php" class="btn btn-danger float-end">Back</a>
                            </h4>
                        </div>

                        <?php 
                            if(isset($_GET['id'])) {
                                $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                                $query = "SELECT * FROM students WHERE id='$student_id' ";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    $student = mysqli_fetch_array($query_run);

                                    ?>
                                        <form action="code.php" method="POST">

                                            <input type="hidden" name="student_id"value="<?= $student['id']; ?>">

                                                <div class="mb-3">
                                                    <label>Student Name</label>
                                                    <input type="text" name="name" value="<?=$student['name'];?>" class="form-control"/>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Email</label>
                                                    <input type="email" name="email" value="<?=$student['email'];?>" class="form-control"/>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Phone</label>
                                                    <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control"/>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Course</label>
                                                    <input type="text" name="course" value="<?=$student['course'];?>" class="form-control"/>
                                                </div>  
                                                <div class="mb-3">
                                                    <button type="submit" name="update_student" class="btn btn-primary">
                                                        Update Student
                                                    </button>
                                                </div>
                                        </form>
                                        
                                    <?php
                                }
                                else {
                                    echo "<4>No such Id found</h4>";
                                }
                            }
                        ?>

                        <div class="card-body">
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!--Call the footer html code-->
<?php include('includes/footer.php'); ?>