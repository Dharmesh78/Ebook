<?php
session_start(); 
if (isset($_SESSION["login"])) {
 unset($_SESSION["login"]);
 }
?>


<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			
							<?php
											if(isset($_GET['error']))
											{
												echo '<script>alert("'.$_GET['error'].'");</script>';
												echo '<br><br>';
											}
											
										
										
										?>
							
							
							<button onclick="window.location.href='register.php'" style="margin-left:300px;">signup</button>
							<br><br>
							
							            <table>
											<form action="login_process.php" method="POST">
													
												<tr>
													 <td><b>E-mail :</b>&nbsp;&nbsp;</td>
													 <td><input type='mail' size="30" required="" maxlength="30" name='email'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' required="" name='pwd' size="30"></td>
													 
												</tr>
												
												
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  login  ">
													</td>
												</tr>
											</form>
										</table>
										
			
</body>
</html>
