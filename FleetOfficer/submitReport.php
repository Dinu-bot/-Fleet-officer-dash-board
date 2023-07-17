<?php
    include_once './config.php';
?>

<?php  //item id not  used as an input here because if two users input same id then cant used as a primary key therefore i used it as an auto increment value %%%

    $model          = $_POST["feild1"];
    $avail          = $_POST["feild2"];
    $passengerNo    = $_POST["feild3"];
    $type           = $_POST["feild4"];
    $fuelType       = $_POST["feild5"];
    $insuranceID    = $_POST["feild6"];
    $gearSystem     = $_POST["feild7"];
    $lisencePlate   = $_POST["feild8"];
    $storage        = $_POST["feild9"];
    $freeMilage     = $_POST["feild10"];
    $cost           = $_POST["feild11"];
    

    //$sql is named as a  query string  
    //must give the colomn names exactly the same sequence  and exact names like in the table we created using php myAdmin
    $sql = "INSERT INTO vehicle(Vehicle_Code,Model,Availability,Passenger_count,Type,Fuel_type,InsuranceID,Gear_system,LicensePlate,Storage,Free_milage,Cost_per_mile )  
            VALUES ('','$model' , '$avail' , '$passengerNo' , ' $type' ,'$fuelType' , '$insuranceID' ,'$gearSystem','$lisencePlate','$storage','$freeMilage','$cost' )"; // '' space for Item_id  because havent given any variable name for item id 

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Record inserted succesfully !!')</script>";

        header("Location:VehicleReport.php"); //this code once we finish entering detail we can redirect the to a certain location
        exit();
    }else{
        echo "<script>alert('Error in insertion !!')</script>";
    }
//close the connection 
    mysqli_close($conn);
?>