<?php session_start();

require('includes/config.php');
include("includes/head.inc.php");
if($_SESSION["login"]!=2)
	header("location:index.php");
?>
<html >


<body>
<button onclick="document.location.href='ulogout.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: powderblue;">logout</button>

<div>
<h1 class="title">Welcome  
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['name']; 
								}
								else
								{	
									echo 'to filesDRIVE';
								}
							?>
							</h1>
							
							<table cellspacing="7" align="center">
                            <tr id="r1" style="color:white;background-color:powderblue;">
                                <th>Sr No.</th> 
                                <th title="FileName">File Name</th>
                                
                                <th>View</th>
                            </tr>.
							<?php 
							$query="select * from stuff";
							$res=mysqli_query($conn,$query) or die("wrong query");
							$n=1;
							
							while($row=mysqli_fetch_assoc($res)){
							;
							echo "<tr style='background-color: #f1f1f1;color: #9999ff;'><td>".$n."</td><td>".$row['name']."</td><td><a href=".$row['fpath']." >view</a></td></tr><br>";
							$n++;
							}
							?>
							</table>
							
		</div>
	</body>
</html>
