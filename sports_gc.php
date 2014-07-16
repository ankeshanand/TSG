<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sports General Championship</title>
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
  <li  onclick='DisplayGraphSports(); '><a href="#">Tally</a></li>
  <li onclick='DisplayResultsSports();'><a href="#">Results</a></li>
  <li onclick='DisplayScheduleSports();'><a href="#">Schedule</a></li>
</ul>
<br>
<div id="content" class="well">
<h1 align="center">Schedule</h1>

<table class="table table-hover">
<tbody>

<tr>
<td><h3>Interhall Cricket</h3></td>
<td><h3><i class="fa fa-calendar"></i> 18th January</td>
</tr>
<tr>
<td><h3>Interhall Volleyball</h3></td>
<td><h3><i class="fa fa-calendar"></i> 1st March</td>
</tr>
<tr>
<td><h3>Interhall Hockey</h3></td>
<td><h3><i class="fa fa-calendar"></i> 1st March</td>
</tr>
<tr>
<td><h3>Interhall Squash</h3></td>
<td><h3><i class="fa fa-calendar"></i> 4th February</td>
</tr>
<tr>
<td><h3>Interhall Table Tennis</h3></td>
<td><h3><i class="fa fa-calendar"></i> 1st February</td>
</tr>
<tr>
<td><h3>Interhall Badminton</h3></td>
<td><h3><i class="fa fa-calendar"></i> 8th March</td>
</tr>
<tr>
<td><h3>Interhall Basketball</h3></td>
<td><h3><i class="fa fa-calendar"></i> 15th March</td>
</tr>
<tr>
<td><h3>Interhall Tennis</h3></td>
<td><h3><i class="fa fa-calendar"></i> 8th March</td>
</tr>
<tr>
<td><h3>Interhall Swimming and Water Polo</h3></td>
<td><h3><i class="fa fa-calendar"></i> 28th March</td>
</tr>
<tr>
<td><h3>Interhall Weight Lifting</h3></td>
<td><h3><i class="fa fa-calendar"></i> 5th April</td>
</tr>

</table>
</div>
</body>
<script type='text/javascript'>
function DisplayGraphSports()
{
    $.ajax({
        url : 'sports_graph.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });
}

function DisplayScheduleSports()
{
    $.ajax({
        url : 'sports_schedule.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });

}

function DisplayResultsSports()
{
    $.ajax({
        url : 'sports_results.html',
        type: 'GET',

        success: function(data){
            $('#content').html(data);
        }
    });

}
</script>
</html>
