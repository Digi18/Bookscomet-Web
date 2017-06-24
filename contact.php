

   <?php
   
     require "connect.php";
	 
	 if(trim($_POST['nam'] != null) && trim($_POST['mail'] != null) && trim($_POST['msg'] != null)){
	 
	 $username = $_POST['nam'];
	 $usermail = $_POST['mail'];
	 $usermsg = $_POST['msg'];
	 
	  $query = "INSERT INTO `feedback`(`Name`,`Email`,`Message`) VALUES ('$username','$usermail','$usermsg');";
				
				       $result = mysqli_query($con,$query);
					   
					   if($result){
						
						echo "Thanks! We've got your message.";
					
					    }
					   
					   else{
						
						echo "".mysqli_error($con);
						   
					   }
					   
	 }
   
   ?>