<?PHP
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else
{
	end();
}
?><html>
<head>
	<title>
		Notice
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/notice.css">
</head>
<body>
<div>
<?PHP
mysql_connect("localhost","root","");
mysql_select_db("userinfo");
$query="SELECT * FROM notices WHERE id=$id";
$data=mysql_query($query);
while($row=mysql_fetch_assoc($data))
{
	?>
<div class="subject">
	<h3><?PHP echo $row['subject'];?></h3>
</div>
<div class="content">
	<?PHP echo "</br>".$row['content']."<br>"; ?>
</div>
<div class="posted_by">
	<?PHP echo $row['posted_by'];?>
</div>
<?PHP
}
mysql_close();
?>
</div>
</body>
</html>