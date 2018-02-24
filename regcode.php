<?php
require('includes/config.php');
	$email=$_POST['email'];
	if(!empty($_POST))
	{
		$msg="";
		
	if(empty($_POST['name']) ||empty($_POST['email'])|| empty($_POST['pwd'])  || empty($_POST['contact'] )||empty($_POST['gender']) )
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $msg = "Invalid email format"; 
}
		
		
		if(strlen($_POST['pwd'])>50)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['name']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['name'];
			
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
						
			$query="insert into user(name,email,pwd,contact,gender)
			values('$fnm','$email','$pwd','$contact','$gender')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>