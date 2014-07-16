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
 $result = mysql_query("SELECT * FROM player_profiles WHERE ID = '" .$_GET['ID'] . "'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

while ($row = mysql_fetch_array($result)) {
    echo "<!-- Modal -->

  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'>".$row{'Name'}. "</h4>
      </div>
      <div class='modal-body'>
      <div class='container'>
      <div class=well>


<div class='media'>
<a class='pull-left' href='#'>
      <img class='panel' width =180px; height=180px; src='".$row{'Display Picture'}."'>
  </a>
  <div class='media-body'>
<div class='page-header'>
  <h1 style='font-size:30px;'>".$row{'Name'}. "<small> "." ".$row{'Sport'}."</small></h1>
  </div>
  <i class='fa fa-pencil'></i>"
  .$row{'Department'}.
  "<br> <i class='fa fa-map-marker'></i> ". $row{'Hall'} ."
  </div></div></div>";
    if($row{'Past'} != NULL)
    {
        echo "<div class='well'><h3>Past Inter-IIT Participation/Achivements</h2>".$row{'Past'}."</div>";
    }
    if($row{'Role'} != NULL)
    {
        echo "<div class='well'><h3>Role in the Team</h2>".$row{'Role'}."</div>";
    }
    if($row{'Bio'} != NULL)
    {
        echo "<div class='well'><h3>About Me</h2>".$row{'Bio'}."</div>" ;
    }
echo "
  </div>
</div>

      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    ";
}
?>
