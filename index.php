<?php
$con=new mysqli("localhost","root","","signup");

if($con->connect_error)
{
	echo $con->connect-error;
	die("sry db connection failed");
}
?>
<html>
<head>
<title>signup for account</title>
</head>
<body>
<form method="POST">
<label>firstname:</label><input type="text" name="fname"/>
<label>lastname:</label><input type="text" name="lname"/>
<label>Email:</label><input type="email" name="email"/>
<label>username:</label><input type="text" name="username"/>
<label>password:</label><input type="password" name="password"/>
<label>confirm password</label><input type="password" name="confirm_password"/>
<input type="submit" name="submit" value="save"/>
</form>
<?php
if(isset($_POST["submit"]))
{
	$first_name=$_POST['fname'];
	$last_name=$_POST['lname'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['confirm_password'];
	
	if($password==$cpassword)
	{
		$sql="INSERT INTO upload(firstname,lastname,email,username,password)VALUES('$first_name','$last_name','$email','$username','$password')";
		if($con->query($sql))
		{
			echo "success";
		}
		else
		{
	        echo "failed";
		}
	}
}
?>
 </body>
 </html>