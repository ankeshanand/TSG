<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Notice Board</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico"> 
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />

        <link rel="stylesheet" type="text/css" href="css/profiles.css">
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

    </head>
    <body>
        <?php include_once('navbar.php'); ?> 
            <div class = "container">
                <h1 style="margin-top:70px;text-align:center;">NOTICE BOARD</h1>


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
$result = mysql_query("SELECT * FROM notices ORDER BY 'date'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
	$subject=$row['subject'];
	$date=$row['date'];
	$posted_by=$row['posted_by'];
    $id=$row['id'];
    $summary=$row['summary'];
    $tag = $row['tag'];

    echo "
<div class='row well'>
  <div class='span8'>
    <div class='row'>
      <div class='span8'>
        <h4><strong><a data-toggle='modal' data-target='#myModal' href='notice.php?id=$id'>".$subject."</a></strong></h4>
      </div>
    </div>

    <div class='row'>
      <div class='span8'>
        <p></p>
        <p>
           <i class='fa fa-calendar'></i> ".$date."
           <i class='icon-share'></i> <a href='#'>Share</a>
           <i class='icon-tags'></i> Tags :           <a href='#'><span class='label label-info'>".$tag."</span></a> 

        </p>
      </div>
    </div>
  </div>
</div>
<hr>";
}


   //close the connection
mysql_close($dbhandle);
?>
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


</body>
<script>
$('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
});
</script>


