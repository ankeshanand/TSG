<?PHP
session_start();
$error="";
if(isset($_POST['submit']))
{
	if(!$_POST['name'] || !$_POST['email'] || !$_POST['subject']|| !$_POST['sendto'] || !$_POST['msg'])
		$error="None of the fields can be left blank";
	else
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name']))
			$error="Invalid Name Format";
		else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['subject']))
			$error="Invalid Subject Format"; 
		else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email']))
  			$error="Invalid Email Address";
  		else
  		{
  			$message=strip_tags($_POST['msg']);
  			$regards=$_POST['name']."<br>".$_POST['email']; //infromation of the sender
  			$subject=$_POST['subject'];  			
	  		if($_POST['key'] == $_SESSION['preventmultiple'])
			{
	  			if($_POST['sendto']=="vp")
	  			{
	  				$to="";//mail id of vp
	  				if(@mail($to,$subject,$message,$regards))
	  					$error="Mail sent Successfully";
	  				else
	  					$error="Mail Not sent.Please Try Again.";
	  			}
	  			else if($_POST['sendto']=="gsecsports")
	  			{
	  				$to="";//mail id of gsecsports
	  				if(@mail($to,$subject,$message,$regards))
	  					$error="Mail sent Successfully";
	  				else
	  					$error="Mail Not sent.Please Try Again.";
	  			}
	  			else if($_POST['sendto']=="gsecsoccult")
	  			{
	  				$to="";//mail id of gsecsocult
	  				if(@mail($to,$subject,$message,$regards))
	  					$error="Mail sent Successfully";
	  				else
	  					$error="Mail Not sent.Please Try Again.";
	  			}
	  			else if($_POST['sendto']=="gsectech")
	  			{
	  				$to="";//mail id of gsectech
	  				if(@mail($to,$subject,$message,$regards))
	  					$error="Mail sent Successfully";
	  				else
	  					$error="Mail Not sent.Please Try Again.";
	  			}
	  			else //send mail to pr chair
	  			{
	  				$to="";//mail id of pr chair
	  				if(@mail($to,$subject,$message,$regards))
	  					$error="Mail sent Successfully";
	  				else
	  					$error="Mail Not sent.Please Try Again.";
	  			}
	  		}
  		}
	}
}
?>
<html>
<head>
	<title>Grievance Cell</title>
</head>
<body>
<div id="wrapper_form">
	<div id="errormsg">
		<?PHP if(isset($error)) echo "$error";?>
	</div>
	<table>
	<tr>
		<td>Name</td>
		<td><?php
$_SESSION['preventmultiple'] = mt_rand(1, 1000);
?>	<form method="POST">
			<input type="text" name="name" placeholder="Enter Your Name">
		</td>
	</tr>
	<tr>
		<td>Email Id</td>
		<td><input type="text" name="email" placeholder="Enter Your Email"></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td><input type="text" name="subject" placeholder="Subject of your msg"></td>
	</tr>
	<tr>
		<td>Send To</td>
		<td><select name="sendto">
				<option value="vp">VP</option>
				<option value="gsecsports">G.Sec Sports And Games</option>
				<option value="gsecsoccult">G.Sec Social And Cultural</option>
				<option value="gsectech">G.Sec Technology</option>
				<option value="publicrelation">Public Relation</option>
		    </select>
		</td>		
	</tr>
	<tr>
		<td>Message</td>
		<td><textarea rows=10 cols=40 placeholder="Write your Message here" name="msg"></textarea></td>
	</tr>
	<tr>
	<td>
		<input type="hidden" name="key" value="<?php echo $_SESSION['preventmultiple'] ?>" />
		<input type="submit" value="Send Message" name="submit">
	</td>
	</tr>
	</table>
<div>
</body>
</html>