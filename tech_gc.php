
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Technology General Championship</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="GymkhanaIITkgp" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script src="http://d3js.org/d3.v3.min.js"></script>
<style>

.bar {
  fill: steelblue;
}

.bar:hover {
  fill: brown;
}

.axis {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.x.axis path {
  display: none;
}

</style>

    </head>
<body>
<?php include_once('navbar.php') ?>
<div class="container">
<ul class="nav nav-pills nav-fixed" style="margin-top:60px;">
  <li  onclick='DisplayGraphTech(); '><a href="#">Tally</a></li>
  <li onclick='DisplayResultsTech();'><a href="#">Results</a></li>
  <li onclick='DisplayScheduleTech();'><a href="#">Schedule</a></li>
</ul>
<br>
<div id="content" class="well">
<h1 align="center">Schedule</h1>

<table class="table table-hover">
<tbody>

<tr>
<td><h3>ECE Event</h3></td>
<td><h3><i class="fa fa-calendar"></i> 8th-15th January, PPT-18th January</td>
</tr>
<tr>
<td><h3>Product Design</h3></td>
<td><h3><i class="fa fa-calendar"></i> 5th February , PPT-9th February</td>
</tr>

<td><h3>Maths Olympiad</h3></td>
<td><h3><i class="fa fa-calendar"></i> 8th February</td>
</tr>
<tr>
<td><h3>Open Soft</h3></td>
<td><h3><i class="fa fa-calendar"></i> 3rd-23ed March , PPT-26th March</td>
</tr>
<tr>
<td><h3>Case Study</h3></td>
<td><h3><i class="fa fa-calendar"></i> 5th-15th March, PPT-19th March</td>
</tr>
<tr>
<td><h3>Tech Quiz</h3></td>
<td><h3><i class="fa fa-calendar"></i> 29th March,30th March</td>
</tr>
<tr>
<td><h3>Biz Quiz</h3></td>
<td><h3><i class="fa fa-calendar"></i> 29th March, 30th March</td>
</tr>
<tr>
<td><h3>Hardware Exhibition</h3></td>
<td><h3><i class="fa fa-calendar"></i> 5th April</td>
</tr>
<tr>


</table>
</div>
</body>
<script type='text/javascript'>
function DisplayGraphTech()
{
    $.ajax({
        url : 'tech_graph.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });
}

function DisplayScheduleTech()
{
    $.ajax({
        url : 'tech_schedule.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });

}

function DisplayResultsTech()
{
    $.ajax({
        url : 'tech_results.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });

}
</script>
</html>
