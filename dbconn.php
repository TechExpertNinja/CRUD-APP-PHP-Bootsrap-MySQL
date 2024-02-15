<?php 
    $conn = mysqli_connect("localhost", "root", "", "school");

    if (!$conn) {
        die ('Connection Failed!' . Mysqli_connect_error());
    }