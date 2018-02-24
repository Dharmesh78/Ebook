<?php
session_start();
require('../includes/config.php');
include("includes/head.inc.php");

?>

<html>
<body >
<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">Deleted successfully ..</font>';
												echo '<br><br>';
											}
										
										?>

<table cellspacing="7" align="center">
                            <tr id="r1" style="color:white;background-color:black;">
                                <th>Sr No.</th> 
                                <th title="FileName">File Name</th>
                                
                                <th>Delete</th>
                            </tr>
							<?php 
							$query="select * from stuff";
							$res=mysqli_query($conn,$query) or die("wrong query");
							$n=1;
							while($row=mysqli_fetch_assoc($res)){
							
							echo "<tr style='background-color: #f1f1f1;color: #9999ff;'><td>".$n."</td><td>".$row['name']."</td><td><a href='pdelete.php?id=".$row['id']."' >delete</a></td></tr><br>";
							$n++;
							}
							?>
							</table>
							<br>
							<button onclick="document.location.href='home.php'" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: powderblue;">back</button>
		
							