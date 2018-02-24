<?php
require('../includes/config.php');
$did=intval($_GET['id']);
$query="select name,price from stuff where id=$did";
$result=mysqli_query($conn,$query) or die("Can't Execute Query...");
$row = mysqli_fetch_array($result);
$name=$row[0];
$price=$row[1];

?>
<html>
<body>
<form action="" method="post">
<table style="height: 220px;width: 400px;margin-left: 280px;font-size: 20px;margin-top: 90px;">
                            <tr>
                                <td>FileName</td>
                                <td><input type="text" name="pname"   style="height: 25px;" value="<?=$name?>"/></td>
                            </tr>
							<tr>
                                
                                <td><input type="hidden" name="id" style="height: 25px;" value="<?=$did?>"/></td>
                            </tr>
                            
							<tr>
                                <br><br><td colspan="2" align="center"><input type="submit" value="Update" name="update" style="height: 25px;width: 70px;margin-right: 150px;border-radius: 5px;cursor: pointer;background-color: gold;"></td>
                            </tr>
							</table>
							</form>
							<?php
							if(isset($_POST['update'])){
								$nm=$_POST['pname'];
								
								$id=$_POST['id'];
							$query2="update stuff set name = '$nm' where id=$id";
							
							mysqli_query($conn,$query2) or die("Can't Execute Query...");
							header("location:update.php?ok=1");
							}
							?>
							
	</body>
	</html>