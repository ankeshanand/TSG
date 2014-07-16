<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Athletics</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico"> 
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/component.css" />

        <link rel="stylesheet" type="text/css" href="../css/profiles.css">
<script src="../js/modernizr.custom.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

    </head>
    <body>
        <?php include_once('navbar.php'); ?> 
            <div class = "container">
                <h1 style="margin-top:70px;text-align:center;">Athletics</h1>

<div class='well'>
                <ul class="grid cs-style-4">


<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("gymkhana",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM player_profiles WHERE Sport LIKE '%Athletics%'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {


   echo "
 <li>
                    <figure>
                    <div class='panel'><img class='img-circle' src='" . $row{'Display Picture'} . "' alt='img05'>". $row{'Name'}."</div>" .
                    "<figcaption>
                    <a data-toggle='modal' href='../profile.php?ID=".$row{'ID'}. "' data-target='#myModal'>View Profile</a>

                    </figcaption>
                    </figure>
                    </li>

       ";
}
//close the connection
mysql_close($dbhandle);
?>
                </ul>
</div>
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
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</body>
<script>
$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
});
</script>


