<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Inter IIT SQUAD</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script >

$(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 10000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});

</script>
<style>
.carousel-control {
  padding-top:10%;
  width:5%;
}
</style>
    </head>
    <body>
    <?php include_once('navbar.php'); ?> 
        <div class="container demo-3">
            <!-- Top Navigation -->

            <header align="center" style="margin-top:75px;">
            <h1>The Inter IIT Squad</h1>

            </header>
            <ul class="grid cs-style-4">
                <li>
                <figure>
                <div class="panel"><img src="images/athletics.jpg" alt="img05">ATHLETICS</div>
                <figcaption>
                <h3>Athletics</h3>
                <span></span>
                <a  href="teams/athletics.php">Take a look</a>

                </figcaption>
                </figure>
                </li> 

                <li>
                <figure>
                <div class="panel"><img src="images/aquatics.jpg" alt="img06">AQUATICS</div>
                <figcaption>
                <h3>Aquatics</h3>
                <span>Shreyas Mahajan</span>
                <a href="teams/aquatics.php">Take a look</a>
                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/badminton.jpg" alt="img02">BADMINTON</div>
                <figcaption>
                <h3>Badminton</h3>
                <span></span>
                <a href="teams/badminton.php">Take a look</a>
                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/basketball.jpg" alt="img04">BASKETBALL</div>
                <figcaption>
                <h3>Basketball</h3>
                <span>Rajan Bajaj</span>
                <a href="http://localhost/GymkhanaRevamped/teams/basketball.php">Take a look</a>
                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/cricket.jpg" alt="img01">CRICKET</div>
                <figcaption>
                <h3>Cricket</h3>
                <span>Abhishek Gupta</span>
                <a href="teams/cricket.php">Take a look</a>
                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/football.jpg" alt="img03">FOOTBALL</div>
                <figcaption>
                <h3>Football</h3>
                <span>Shailesh Mohan</span>
                <a href="teams/football.php">Take a look</a>
                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/hockey.jpg" alt="img05">HOCKEY</div>
                <figcaption>
                <h3>Hockey</h3>
                <span></span>
                <a data-toggle="modal" href="teams/hockey.php">Take a look</a>

                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/lawntennis.jpg" alt="img05">LAWN TENNIS</div>
                <figcaption>
                <h3>Lawn Tennis</h3>
                <span>Dibyajyoti Mahapatra</span>
                <a data-toggle="modal" href="teams/lawntennis.php">Take a look</a>

                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/squash.jpg" alt="img05">SQUASH</div>
                <figcaption>
                <h3>Squash</h3>
                <span>Anant Agrawal</span>
                <a data-toggle="modal" href="teams/squash.php">Take a look</a>

                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/tabletennis.jpg" alt="img05">TABLE TENNIS</div>
                <figcaption>
                <h3>Table Tennis</h3>
                <span></span>
                <a data-toggle="modal" href="teams/tabletennis.php">Take a look</a>

                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/volleyball.jpg" alt="img05">VOLLEYBALL</div>
                <figcaption>
                <h3>Volleyball</h3>
                <span></span>
                <a data-toggle="modal" href="teams/volleyball.php">Take a look</a>

                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/waterpolo.jpg" alt="img05">WATER POLO</div>
                <figcaption>
                <h3>Water Polo</h3>
                <span></span>
                <a data-toggle="modal" href="teams/waterpolo.php">Take a look</a>


                </figcaption>
                </figure>
                </li>
                <li>
                <figure>
                <div class="panel"><img src="images/weightlifting.jpg" alt="img05">WEIGHT LIFTING</div>
                <figcaption>
                <h3>Weight Lifting</h3>
                <span></span>
                <a data-toggle="modal" href="teams/weightlifting.php">Take a look</a>

                </figcaption>
                </figure>
                </li>

            </ul>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div><!-- /container -->

</html>
