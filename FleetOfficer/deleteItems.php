<?php
    
    include_once'config.php';
?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM vehicle WHERE Vehicle_Code = '$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Deleted!!')</script>";
        header("Location:VehicleReport.php");
        exit(); 
    } else {
        echo "<script>alert('Error in Delete')</script>";
    }
} else {
    echo "<script>alert('Invalid request')</script>";
}


        

        mysqli_close($conn);
?>