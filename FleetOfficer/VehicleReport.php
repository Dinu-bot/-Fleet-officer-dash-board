<?php
	include_once './config.php';
?> 
<!DOCTYPE html>
<html>
	<head>
		<title> MyRide </title>
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
							<li> <a href="/"> Fleet Activity Report</a></li> 
                            
                              
                        </ul>
                    </li>
                    <li><a href="contact.asp">Fleet</a></li>
                    <li><a href="about.asp">Support</a></li>


                </div>

                
              
            </ul>
        </nav>



			<div class="space">
				<h2 align = "center"> Vehicle Report Summary</hs>
			</div>

		

		<table class = "vehicle-table" >
			<tr>
				<th align = "center ">   Vehicle Code     </th>
				<th align = "center ">   Model            </th>
				<th align = "center ">   Availability     </th>
				<th align = "center ">   Passenger Count  </th>
				<th align = "center ">   Type             </th>
				<th align = "center ">   Fuel Type        </th>
				<th align = "center ">   InsuaranceID     </th>
				<th align = "center ">   Gear System  	  </th>
				<th align = "center ">   Lisence Plate    </th>
				<th align = "center ">   Storage          </th>
				<th align = "center ">   Free Milage   	  </th>
				<th align = "center ">   Cost Per Mile    </th>
				<th align = "center ">   Edit             </th>
				<th align = "center ">   Delete           </th>
				
			</tr>

			<?php


				$sql = "SELECT * FROM vehicle";
				$result = $conn->query($sql); // query() is a function $conn is the connection object used to connect
				// $result is capture the values from the database details of the table is stored in the variable result

				if($result -> num_rows > 0 ){  //num_rows>0 it there a values there several rows
					while($row  = $result -> fetch_assoc()){  // $result -> fetch_assoc() this means fetch the data in result variable in to an associative array
						// after that it is assign to  variable named row since we have to do it unit the last row while loop is used 
						
						//in here with in [] brackets we must put the column names we assing with the exact seqeuence
						echo  "<tr>
									<td>".$row["Vehicle_Code"].
										"</td><td>".$row["Model"].
										"</td><td>".$row["Availability"].
										"</td><td>".$row["Passenger_count"].
										"</td><td>".$row["Type"].
										"</td><td>".$row["Fuel_type"].
										"</td><td>".$row["InsuranceID"].
										"</td><td>".$row["Gear_system"].
										"</td><td>".$row["LicensePlate"].
										"</td><td>".$row["Storage"].
										"</td><td>".$row["Free_milage"].
										"</td><td>".$row["Cost_per_mile"].
										"</td>";   //</tr> in here should move below because we have added below two buttons to each row

										 
									

									echo "<td>
									<a href='editRecord.php?id={$row['Vehicle_Code']}&model={$row['Model']}&avail={$row['Availability']}&passengerNo={$row['Passenger_count']}&type={$row['Type']}&fuelType={$row['Fuel_type']}
									&insuranceID={$row['InsuranceID']}&gearSys={$row['Gear_system']}&lisencePlate={$row['LicensePlate']}&storage={$row['Storage']}&freeMilage={$row['Free_milage']}&cost={$row['Cost_per_mile']}'><input type='submit' value='Edit' class='edit-button'></a> </td>";
									 
									
									echo"<td><a href = 'deleteItems.php?id={$row['Vehicle_Code']}'> <input type = 'submit' value = 'Delete' class='delete-button' ></a></td> 
								</tr>"; //closing </tr> tag should be added here
						
						
						
					}

				}else{
					echo "Empty rows";
				}

				echo "</table>"; 

				mysqli_close($conn);
			?>
		
			<!-- the button to add items -->

		<br/>
		<button class="create-report-button"> <a href = "./createReport.html"> Create Report </a> </button>
		<br/>
			
		
		
		
		
	
	</body>
</html>	