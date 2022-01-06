<!DOCTYPE html>
<html lang="en">
<script src="app.js">
</script>

<style>
.dropbtn{
padding: 0;
border: none;
background: none;
cursor: pointer;
color:#0499ff;
width: 100%;
font-weight: 700;
list-style-type: none;
margin: 0 auto;
padding: 0;
font-size: 16px;
font-family: 'Roboto', sans-serif;
text-align: -webkit-match-parent;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.dropbtn:hover{
  color:white;
}
.show {display: block;}

#graphContainer {
    width: 75%;
    margin-left: auto;
    margin-right: auto;
    height: 400px;
    padding: 20px;
}

.boxed{
    margin: auto;
    width: fit-content;
    max-width: 75%;
    padding: 1.3em;
    background-color:white;
}

.card{
  margin: 30px;
  padding: 20px 40px 40px;
  max-width: 2000px;
  text-align: left;
  background: #fff;
  border-bottom: 4px solid #ccc;
  border-radius: 6px;
}

.boxed:hover{
  border-color: #ff99ff;
}

</style>
    
<head>
  <meta charset="utf-8">
  <title>Code and Power Final Survey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="c.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
</head>
  
<body>   
    <?php
    // Created by: Reginold Royston and Mariah Knowles
    // Generate a random number to use to identify the visitor throughout the survey
    $user_id = rand(1000000, 9999999);
    ?>
 
    <div class="main-nav">
        <ul class="nav">
          <li class="name">Code and Power: Classism in Tech</li>
          <li><a href="index.php">Home</a></li>
          <li>
            
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">About Us</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="http://juliaandleah.raroyston.org/">Julia Lackey</a>
                <a href="http://grouptwo.raroyston.org/">Sylvia Yan</a>
                <a href="http://juliaandleah.raroyston.org/">Leah Theusch</a>
                <a href="http://wyattandcalvin.raroyston.org/">Calvin Luo</a>
              </div>
            </div>
          
          </li>

          <li><a href="results.php">Results</a></li>
          <li><a href="groupanalysis.php">Group Analysis</a></li>
          <li><a href="individualreflections.php">Individual Reflections</a></li>
        </ul>
    </div>
<header>

<h1 class="tag location">Survey Results</h1>
      
</header>
   
<body>
    
<main class="flex">
    <div class="boxed">
        <p style="text-align:left">This results page will show you your scores compared to the average scores of all test takers for each question of this survey. The purpose of these results is to help you reflect on your own views and mindset surrounding classism and make you aware of any implicit biases that you may, or may not, hold. These questions are meant to demonstrate the wide range of experiences that people may have in their communities relative to you. These results are not meant to criticize you, but rather to serve as a reminder and example of the implicit classism that prevails in societies.
        </p> 
    </div> 
</main>

</body>
<br>
<br>
<body>

<div class="boxed">
<?php
//To display results of all questions, Grab the user id from the POST data sent to us from previous page i.e. last form page edited e.g. q-royston.php  

$user_id = $_POST["user_id"];

// Define variables for the graphs
//Code borrowed from group1 example on course assignment page
$avgPoints = Array();


// Store the answer to the previous question, if applicable
include "store-answer.php";

// Time to retreive from the database all data we've collected for this visitor throughout the survey

// Database settings
// (copy these as necessary for your own projects)
$mysql_server="localhost";
$mysql_db="raroyst1_raroystonorgmain";
$mysql_port="3306";
$mysql_user="raroyst1_cfbd_cg";  
$mysql_password="W!SCsin2018";

// Connect to the database
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

// Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare our first query: get all the results for this particular user
$query = $conn->prepare("SELECT question, answer FROM 2021group4final WHERE user_id = ? ORDER BY question");
$query->bind_param("i", $user_id);

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

// Loop through and assign results to variable
//Code inspired by group 7 results.php from assignment page
$resultsInd = array();

$i=0;

while ($result = $results->fetch_assoc()){
  $resultsInd[$i] = $result["answer"];
  $i++;
}



// Close the query
$query->close();

//second query
//taking the avg result 
$query = $conn->prepare("SELECT question, avg(answer) as answer FROM 2021group4final GROUP BY question ORDER BY question");

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

//loop
$questions=array();
$resultsAll=array();

$i=0;
while ($result = $results->fetch_assoc()){
  $questions[$i] = $result["question"];
  $resultsAll[$i] = $result["answer"];
  array_push($avgPoints, array("x"=>$i, "y"=>$result["answer"]));
  $i++;
}



//loop and display results together
//adding an idx to the question
for($i=0; $i<15; $i++){
  echo '<p style="text-align:left"><b>'.($i).' '.$questions[$i].'</b></p>';
  echo '<p style="text-align:left">Your Results: '.$resultsInd[$i].'</p>';
  echo '<p style="text-align:left">Average Results: '.$resultsAll[$i].'</p>';
}

// Close the connection
$query->close();

$conn->close();
?>

<div id="chartContainer" style="height: 50px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
 
//chart adapted from: https://canvasjs.com/docs/charts/basics-of-creating-html5-chart/ 
                var yLabels = ["Strongly Disagree: 1","Disagree: 2","Neutral: 3","Agree: 4","Strongly Agree: 5"];
                window.onload = function() {
                    CanvasJS.addColorSet(
                        "ourTheme",
                        [ 
                        "#0499ff",
                        "#efefef",
                        "#222",
                        "##6633ff",
                        "#f1f1f1",
                        ]
                    );
                    
                    var avgChart = new CanvasJS.Chart("chartContainerAvg", {
                        animationEnabled: true,
                        exportEnabled: false,
                        colorSet: "ourTheme",
                        title: {
                            text: "Average Responses By Question",
                            fontFamily: "helvetica",
                        },
                        toolTip: {
                            enabled: false,
                        },
                        axisY: {
                            titleFontSize: 23,
                            fontFamily: "helvetica",
                            interval: 1,
                            maximum: 5,
                            includeZero: true,
                            labelFormatter: function (e) {
                                var yAvg = yLabels[e.value-1];
                                if (typeof yLabels[e.value-1] !== "undefined") {
                                    return yAvg;
                                } else {
                                    return "";
                                }
                            }
                        },
                        axisX: {
                            title: "Question Number",
                            titleFontSize: 20,
                            fontFamily: "helvetica",
                            interval: 1,
                        },
                        data: [{
                            type: "column", 
                            dataPoints: <?php echo json_encode($avgPoints, JSON_NUMERIC_CHECK); ?>}]
                            
                    });   
                    avgChart.render();
                    
                                    }
            
            </script>
            
            <div class="container">
             
                <div id="chartContainerAvg" style="height: 500px; width: 100%"></div>
           
            </div>

</body>

</html>