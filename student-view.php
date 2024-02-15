<?php
    //session_start(); --> Not required here
    require 'dbconn.php'
?>


<!--Call the header html code-->
<?php include('includes/header.php'); ?>
    
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Student View Details
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
                                                <div class="mb-3">
                                                    <label>Student Name</label>
                                                   
                                                    <p class="form-control">
                                                        <?=$student['name'];?>
                                                    </p>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Email</label>
                                                    <p class="form-control">
                                                        <?=$student['email'];?>
                                                    </p>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Phone</label>
                                                    <p class="form-control">
                                                        <?=$student['phone'];?>
                                                    </p>
                                                </div>  
                                                <div class="mb-3">
                                                    <label>Student Course</label>
                                                    <p class="form-control">
                                                        <?=$student['course'];?>
                                                    </p>
                                                </div>           
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