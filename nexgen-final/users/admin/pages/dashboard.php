<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/dashboard.css">
    <title>Document</title>
     <!-- ADDED HERE -->
    <style>
        .headlines {
            border: 2px solid #6880d3;
            font-size: 24px;
        }
        .column-one,
        .column-two,
        .column-three,
        .news-container {
            box-shadow: 10px 10px 6px #6880d3;
        }
       

    </style>
     <!-- ADDED HERE -->
</head>

<body>
    <div class="dashboard-container">

        <div class="mark-attendance">
            <div class="date">DD/MM/YYYY</div>
            <div class="mark-button"><button>View Attendance</button></div>
        </div>
        <div class="dashboard">
            <div class="column-one">
                <div class="dashboard-title">Employee Count </div>
                <div class="dashboard-content"><span>200</span></div>
            </div>
            <div class="column-two">
                <div class="dashboard-title">Departments</div>
                <div class="dashboard-content"><span>5</span></div>
            </div>
            <div class="column-three">
                <div class="dashboard-title">User Count</div>
                <div class="dashboard-content"><span>5</span></div>
            </div>
        </div>
         <!-- ADDED HERE -->
        <div class="news-container">
            <div class="news-title">Latest News</div>
            <div class="headlines">LexigTon named as VoyageCR Manufacturing Center</div>
            <div class="headlines">Importatnt Discussion with Mr. Atapattu regarding Customer Relationships</div>
            <div class="headlines">Annual Awarding Ceremony</div>
            <button>More</button>
        </div>
         <!-- ADDED HERE -->

    </div>

    

  
  

</body>

</html>