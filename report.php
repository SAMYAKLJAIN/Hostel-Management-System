<html>
<head>
<style>

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
figure {
  float: left;
  width: 10%;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;

 
}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;s
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body>
<?php 
session_start();

if($_SESSION['status']!='active')
{header("location:home.php");
}
?>

<div class="navbar">

 <a href="out.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home1.php"><i class="fa fa-fw fa-user"></i>Home</a>
</div>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['rooms', '200'],
  ['kaveri', 8],
  ['soparnika', 10],
  ['nandini', 50],
  ['girls hostel', 100]

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Accomadation', 'width':1000, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
</html>


