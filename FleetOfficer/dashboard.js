//Driver idling  chart 

const driverIdlingChart = [
    {day :'Mon' , idleTime : 60},
    {day :'Tue' , idleTime : 70},
    {day :'Wed' , idleTime : 80},
    {day :'Thu' , idleTime : 40},
    {day :'Fri' , idleTime : 50},
    {day :'Sat' , idleTime : 100},
    {day :'Sun' , idleTime : 30},
];

function renderIdleTimeChart(data){
    const ctx = document.getElementById('driverIdiling').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
          labels: data.map(item => item.day),
          datasets: [{
            label: 'Idling time',
            data: data.map(item => item.idleTime),
            backgroundColor: 'rgba(54, 162, 235, 0.7)',
          }],
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
              max: Math.max(...data.map(item => item.idleTime)) + 10, // Set the maximum value of y-axis
            },
          },
        },
      });
}
document.addEventListener('DOMContentLoaded', () => {
    renderIdleTimeChart(driverIdlingChart);
  });

  //fleet activity chart

const initialData = [60, 20, 15, 5];

const data = {
  labels: ['Route', 'Moving', 'Idling', 'Inactive'],
  datasets: [{
    data: initialData,
    backgroundColor: ['#36a2eb', '#ff6384', '#ffce56', '#00ffff'],
  }]
};

const options = {
  responsive: true,
  maintainAspectRatio: false,
  
};

const updateButton = document.getElementById('updateButton');
const legendInputs = document.querySelectorAll('.legend-input');

const ctx = document.getElementById('fleetActivity').getContext('2d');
const chart = new Chart(ctx, {
  type: 'pie',
  data: data,
  options: options
});

updateButton.addEventListener('click', () => {
  const newPercentages = Array.from(legendInputs).map(input => parseInt(input.value));

  data.datasets[0].data = newPercentages;
  chart.data.labels = data.labels;
  chart.update();
});


//vehicle repaired return chart list
 

const repairedList=[
  { name : 'CA111' , //first object
    dueDate :'2022-12-22'
  } ,
  { name:'SU112' , //second object
    dueDate :'2022-12-22'
  } ];

renderRepairedList();

function renderRepairedList(){

  let repairedListHTML = '' 
  for(let i = 0 ; i <repairedList.length ; i++)
  {
      const repairedObject = repairedList[i];
      const name = repairedObject.name;  
      const dueDate = repairedObject.dueDate;
      
      const html = `
      
          <div>${name} </div>
          <div>${dueDate} </div> 
          <button onclick = "
                  repairedList.splice(${i} , 1);
                  renderRepairedList();
          " class = "delete-repaired-button"> Delete </button> 
     
       `; 
      repairedListHTML += html 
  }
  

  
  document.querySelector('.js-repaired-List').innerHTML = repairedListHTML;

}

function addrepaired(){
  const inputElement = document.querySelector('.js-name-input') 
  const name = inputElement.value; 
  
  const dateInputElement = document.querySelector('.js-due-date-input');
  const dueDate = dateInputElement.value;
  
 repairedList.push({
      name : name , 
      dueDate: dueDate
  }); 

  inputElement.value =''  

  renderRepairedList();

}
//vehicle availabity chart
const VehicleAvailabilitylist = [
  {vehicleType :'Cars' , noOfVehicles : 60},
  {vehicleType :'SUVS' , noOfVehicles : 70},
  {vehicleType :'Bikes' , noOfVehicles : 80},
  {vehicleType :'Buses' , noOfVehicles : 40},
  {vehicleType :'Three Wheels' , noOfVehicles : 50},
  
];

function renderVehicleAvailablityChart(data){
  const ctx1 = document.getElementById('VehicleAvailability').getContext('2d');
  new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: data.map(item => item.vehicleType),
        datasets: [{
          label: 'No of Vehicles',
          data: data.map(item => item.noOfVehicles),
          backgroundColor: 'rgba(54, 162, 235, 0.7)',
        }],
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            max: Math.max(...data.map(item => item.noOfVehicles)) + 10, // Set the maximum value of y-axis
          },
        },
      },
    });
}
document.addEventListener('DOMContentLoaded', () => {
  renderVehicleAvailablityChart(VehicleAvailabilitylist);
});


//Completed workload

var ctx2 = document.getElementById('workloadChart').getContext('2d');

    // Data for the chart (replace with your actual data)
    var datawork = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [
        {
          label: 'Completed Workloads',
          data: [30, 20, 50, 50, 80, 60],
          borderColor: 'blue',
          fill: false
        }
      ]
    };

    // Configure the chart options
    var optionswork = {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    // Create the line chart
    var chartwork = new Chart(ctx2, {
      type: 'line',
      data: datawork,
      options: optionswork
    });


    //Ttrip Details

    const tripData = [
      { status: 'Ongoing', count: 10 },
      { status: 'Cancelled', count: 5 },
    ];
    
    function renderTripStatusChart(data) {
      const ctx3 = document.getElementById('tripStatusChart').getContext('2d');
      new Chart(ctx3, {
        type: 'pie',
        data: {
          labels: data.map(item => item.status),
          datasets: [{
            label: 'Trip Status',
            data: data.map(item => item.count),
            backgroundColor: ['rgba(54, 162, 235, 0.7)', 'rgba(255, 99, 132, 0.7)'],
          }],
        },
        options: {
          responsive: true,
        },
      });
    }
    
    document.addEventListener('DOMContentLoaded', () => {
      renderTripStatusChart(tripData);
    });


    //trip-staus
    const dataTrip = {
      labels: ['Ongoing', 'Cancelled'],
      datasets: [{
        data: [60, 20],
        backgroundColor: ['#36a2eb', '#ff6384'],
      }]
    };

    const optionsTrip = {
      responsive: true,
      maintainAspectRatio: false,
    };

    const updateButtonTrip = document.getElementById('updateButtonTrip');
    const legendInputsTrip = document.querySelectorAll('.legend-input-trip');

    const ctxTrip = document.getElementById('TripStatus').getContext('2d');
    const chartTrip = new Chart(ctxTrip, {
      type: 'pie',
      data: dataTrip,
      options: optionsTrip
    });

    updateButtonTrip.addEventListener('click', () => {
      const newPercentages = Array.from(legendInputsTrip).map(input => parseInt(input.value));

      dataTrip.datasets[0].data = newPercentages;
      chartTrip.update();
    });