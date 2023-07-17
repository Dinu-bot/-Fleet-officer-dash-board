<?php
        include_once'config.php';
?>

<?php
        

        $Vehicle_Code       = $_GET['id'];
        $Model              = $_GET['model'];
        $Availability_      = $_GET['avail'];
        $Passenger_count    = $_GET['passengerNo'];
        $Type_              = $_GET['type'];
        $Fuel_Type          = $_GET['fuelType'];
        $InsuranceID        = $_GET['insuranceID'];
        $Gear_system        = $_GET['gearSys'];
        $LisencePlate       = $_GET['lisencePlate'];
        $Storage            = $_GET['storage'];
        $Free_milage        = $_GET['freeMilage'];
        $Cost_per_mile      = $_GET['cost'];


?>



<!DOCTYPE html>
<html>
	<head>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="dashboard.css">
                <link rel="stylesheet" href="vehiclereport.css">
		
	</head>
	
	<body>
		
                <div class="account">
                        <div class="profile-pic">
                        <img src="./assets/fleetOfficer.jpg" alt="Profile Picture">
                        </div>
                        <div class="profile-info">
                                <h3 class="account-name">MARK DAVID</h3>

                                <div class="icons">

                                        <span class="notification-icon">
                                                <i class="fas fa-bell"></i>
                                        </span>

                                        <span class="settings-icon">
                                                <i class="fas fa-cog"></i>
                                        </span>

                                </div>

                        </div>

                </div>

                <nav class="top-nav">
                <ul class="nav-links">

                        <div class="menu ">

                        <li><a href="default.asp">Dashboard</a></li>
                        <li class="services"><a href="news.asp">Reports</a>
                                <ul class="dropdown">
                                <li> <a href="/"> Vehicle Report </a></li> 
                                <li> <a href="/"> Fleet Activity report  </a></li> 
                                  
                                </ul>
                        </li>
                        <li><a href="contact.asp">Fleet</a></li>
                        <li><a href="about.asp">Support</a></li>


                        </div>

                        
                
                </ul>
                </nav>

                <div class = "productData tbl" style = "border-style:groove ; border-colour : Darkblue; ">
                        <fieldset>
                                <legend align = "center">Update Vehicle Details</legend>
                                <form action= "submitUpdateReport.php" method = "GET"  name = "form2">
                                        <table class="update-table">
                                                <tr>
                                                        <!-- using echo we have to pass the created variable name to get the values to the labels using valu attribute -->
                                                        <td>Vehicle Code :</td>
                                                        <td><input type = "text" value = "<?php echo"$Vehicle_Code"?>" name = "feild0up" readonly></td> <!--  readonly is put beause we not going  to  update the item id -->
                                                        
                                                </tr>
                        
                                                <tr>
                                                        <td>Vehicle Model :</td>
                                                        <td><input type = "text" value = "<?php echo"$Model"?>" name = "feild1up" ></td> 
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Vehicle Availability :</td>
                                                        <td><input type = "text" value = "<?php echo"$Availability_"?>" name = "feild2up" ></td> 
                                                        
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Passenger Count :</td>
                                                        <td><input  type = "text"  value = "<?php echo"$Passenger_count"?>" name = "feild3up" ></td> 
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Vehicle Type :</td>
                                                        <td><input type = "text" value = "<?php echo"$Type_"?>" name = "feild4up" ></td> 
                                                        
                                                </tr>
                                                <tr>
                                                        <td>Fuel Type :</td>
                                                        <td><input type = "text" value = "<?php echo"$Fuel_Type"?>" name = "feild5up" ></td> 
                                                        
                                                </tr>




                                                <tr>
                                                        <td>Insuarance ID :</td>
                                                        <td><input type = "text" value = "<?php echo"$InsuranceID"?>" name = "feild6up" ></td> 
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Vehicle Gear system :</td>
                                                        <td><input type = "text" value = "<?php echo"$Gear_system"?>" name = "feild7up" ></td>
                                                        
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Vehicle lisence plate : </td>
                                                        <td><input  type = "text"  value = "<?php echo"$LisencePlate"?>" name = "feild8up" ></td> 
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Storage : </td>
                                                        <td><input type = "text" value = "<?php echo"$Storage"?>" name = "feild9up" ></td> 
                                                        
                                                </tr>
                                                <tr>
                                                        <td>Free Milage :</td>
                                                        <td><input type = "text" value = "<?php echo"$Free_milage"?>" name = "feild10up" ></td> 
                                                        
                                                </tr>

                                                <tr>
                                                        <td>Cost per Mile :</td>
                                                        <td><input type = "text" value = "<?php echo"$Cost_per_mile"?>" name = "feild11up" ></td> 
                                                        
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td><input type = "submit" value = "Update"  name = "submit" class="update-button" ></td> 
                                                        
                                                </tr>
                                        </table>       

                                </form>
                        </fieldset>        
                 </div>
		
                <!-- be very carefull about the php spaces -->
            
		
		
	
	</body>
</html>	