<?php
require('../includes/config.php');

 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
	  $file_tmp = $_FILES['image']['tmp_name'];
      
      
     
      
      if(empty($errors)==true){
		  
         move_uploaded_file($file_tmp,"dfiles/".$file_name);
         echo "Success";
		 
      }
	  else{
         print_r($errors);
      }
 }
            $fname=$_POST['fname'];
            $path="http://localhost/EBook/admin/dfiles/".$file_name;
			
			
			
						
			$query="insert into stuff values('$fname','','$file_name','$path')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:insert.php?ok=1");
			
			
			?>