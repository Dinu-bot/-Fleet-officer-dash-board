<?php
	include_once'config.php';
?> 



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="dashboard.css">
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
                            <li> <a href="./VehicleReport.php"> Vehicle Report </a></li> 
                            <li> <a href="/"> Fleet Activity report  </a></li> 
                              
                        </ul>
                    </li>
                    <li><a href="contact.asp">Fleet</a></li>
                    <li><a href="about.asp">Support</a></li>


                </div>

                
              
            </ul>
        </nav>

        
        <div class="container-1">

          <div class="chart-container-driverIdilingChart">
            <h2>Drivers idiling time</h2>
            <canvas id="driverIdiling" width="400" height="300"></canvas>
          </div>

          <div class="chart-container-VehicleAvailabilityChart">
            <h2>Vehicle Availability</h2>
            <canvas id="VehicleAvailability" width="400" height="250"></canvas>
          </div>

          <div class="fleetActivity-chart"> 


            <div class="chart-container-fleetActivity">
              <h2>Fleet Activity</h2>
              <canvas id="fleetActivity"></canvas>
            </div>
    
            <div class="legend-container">
              <ul class="legend-list">
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: #36a2eb;"></span>
                    <span class="legend-label">On a Route :</span>
                    <input type="number" class="legend-input" id="routeInput" min="0" value="60">
                  </li>
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: #ff6384;"></span>
                    <span class="legend-label">Moving :</span>
                    <input type="number" class="legend-input" id="movingInput" min="0" value="20">
                  </li>
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: #ffce56;"></span>
                    <span class="legend-label">Idling :</span>
                    <input type="number" class="legend-input" id="idlingInput" min="0" value="15">
                  </li>
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: 	#00ffff;"></span>
                    <span class="legend-label">Inactive :</span>
                    <input type="number" class="legend-input" id="inactiveInput" min="0" value="5">
                  </li>
    
              </ul>
              <button id="updateButton" class="updateButton">Update</button>
            </div>
  
          </div> 





        </div>
        
       

        
        <div class="container-2">

          <div class="chart-container-workloadChart">
            <h2>Completed Workload</h2>
            <canvas id="workloadChart" width="500" height="400"></canvas>
          </div>

          <div  class="repaired-vehicle-return-status">
            <h2> Repaired vehicle  return status</h2>
                  <div class="repaired-input-grid">
                        <input placeholder="Vehilce ID " class="js-name-input    name-input">
                        <input type="date" class="js-due-date-input  due-date-input">
                        <button onclick="
                            addrepaired();
                        " class="add-repaired-button">Add</button>
                  </div>
          
                  <div class="js-repaired-List  repaired-grid"> </div>
           </div>

          <div class="trip-status-chart"> 


            <div class="chart-container-trip-status">
              <h2>Trip Status</h2>
              <canvas id="TripStatus"></canvas>
            </div>
    
            <div class="legend-container">
              <ul class="legend-list">
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: #36a2eb;"></span>
                    <span class="legend-label">Ongoing :</span>
                    <input type="number" class="legend-input-trip" id="ongoingInput" min="0" value="60">
                  </li>
    
                  <li class="legend-item">
                    <span class="legend-color" style="background-color: #ff6384;"></span>
                    <span class="legend-label">Cancelled :</span>
                    <input type="number" class="legend-input-trip" id="cancelledInput" min="0" value="20">
                  </li>
    
              </ul>
              <button id="updateButtonTrip" class="updateButton">Update</button>
            </div>
  
          </div> 
            


        </div>

        


         
         

         

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="dashboard.js"></script>
    </body>
</html>