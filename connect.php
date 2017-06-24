
<?php

    $server = "localhost";   
	$user = "root";
    $pwd = "";  
 	$db = "bookscomet";
	
	$con = mysqli_connect($server,$user,$pwd,$db);
	
	if(!$con){
	
	echo "".mysqli_error($con);		
	}
	else{
	 
	 echo "";
	}


 ?>