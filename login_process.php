<?php session_start();

require('includes/config.php');
if($_SESSION["login"]=="1")
unset($_SESSION["login"]);	
	
		$msg="";
		echo $_POST['email'];
		if(empty($_POST['email']))
		{
			$msg="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			echo $msg;
		}
		else
		{
			
			
	
			
			$email=$_POST['email'];
			
			$q="select * from user where email='$email'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['pwd'])
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
					$_SESSION['pwd']=$row['pwd'];
					$_SESSION['name']=$row['name'];
					$_SESSION['status']=true;
					
					if($_SESSION['email']!="admin@gmail.com")
					{
						$_SESSION["login"]="2";
						header("location:home.php");
						
						
					}
					else
					{
						$_SESSION["login"]="1";
						header("location:admin/home.php");
						
					}
				}
				
				else
				{
					$msg= 'Incorrect Password....';
					header("location:index.php?error=".$msg);
				}
			}
			else
			{
				$msg= 'Invalid User';
				header("location:index.php?error=".$msg);
			}
		}
	
	
	
			
?>