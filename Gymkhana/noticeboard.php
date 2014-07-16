<html>
<head>
	<title>
		Notice Board
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/noticeboard.css">
	<script src="css/bootstrap/js/bootstrap.js"></script>
	
<script language="javascript" type="text/javascript">
			<!--
			var win=null;
			function NewWindow(mypage,myname,w,h,scroll,pos){
			if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
			if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
			else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
			settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=yes,menubar=no,toolbar=no,resizable=yes';
			win=window.open(mypage,myname,settings);}
			// -->
</script>

</head>
<body>
	<!---
	<a href="http://localhost/Gymkhana/noticeboard.php?id=1" id="trigger">Notice</a>

<!-- Modal 
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<script type="text/javascript">
	$(function(){
	$('#trigger').click(function(){
	  $('#myModal').modal('show');
	  return false;
	})
});</script>
-->
<div id="wrapper">
	<h2>Gymkhana Noticeboard </h2>
<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("userinfo");
$q="SELECT * FROM notices ORDER BY 'date'";
$data=mysql_query($q);
echo "<table class=\"noticeboard\">";
while($row=mysql_fetch_assoc($data))
{
	$subject=$row['subject'];
	$date=$row['date'];
	$posted_by=$row['posted_by'];
	$id=$row['id'];
echo "<tr>

	<td class=\"date\">$date</td>
	<td class=\"subject\"><a href=\"notice.php?id=$id\" onclick=\"NewWindow(this.href,'Details1','600','400','yes','center');return false\">$subject</a></td>
	</tr>";
}
echo "</table>";
?>
</div>
</body>
</html>