<?php
    include_once'config.php';  
?>

<?php
    if($_GET['submit']){ // update button is clicked only value must be catch 
        //values inside [] is name in the label because we are accessing the values in those labels using the names
        $Vehicle_Code       = $_GET['feild0up'];
        $Model              = $_GET['feild1up'];
        $Availability      = $_GET['feild2up'];
        $Passenger_count    = $_GET['feild3up'];
        $Type              = $_GET['feild4up'];
        $Fuel_Type          = $_GET['feild5up'];
        $InsuranceID        = $_GET['feild6up'];
        $Gear_system        = $_GET['feild7up'];
        $LicensePlate       = $_GET['feild8up'];
        $Storage            = $_GET['feild9up'];
        $Free_milage        = $_GET['feild10up'];
        $Cost_per_mile      = $_GET['feild11up'];

      
            $query = "UPDATE vehicle SET   
                        Model  ='$Model' ,        
                        Availability   ='$Availability',     
                        Passenger_count ='$Passenger_count',  
                        Type        ='$Type',        
                        Fuel_Type    = '$Fuel_Type'   ,       
                        InsuranceID  ='$InsuranceID',      
                        Gear_system  = '$Gear_system',      
                        LicensePlate ='$LicensePlate',     
                        Storage      ='$Storage',     
                        Free_milage  ='$Free_milage',     
                        Cost_per_mile ='$Cost_per_mile'    

                        WHERE  Vehicle_Code  ='$Vehicle_Code';
                        ";  //Item_name is the exact column name which we used in database and $item_id is the variable name just created above
                        //not going to put item_id because we not updating it we have given it readonly

       $data =  mysqli_query($conn ,  $query);

        if($data ){
            echo "<script>alert('Record Updated!!')</script>";
            header("Location:VehicleReport.php");
            exit();  


        }else{
            echo"<script>alert('Error in update')</script>";
        }




    }   
    
    mysqli_close($conn);
?>