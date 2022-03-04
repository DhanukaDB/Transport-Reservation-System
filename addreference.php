<?php
 require_once 'config.php'; ?>


<?php
     

    $name = $_POST["name"];
	$refnum = $_POST["refnum"];
	
	
	$sql ="INSERT INTO 'reference'('name','refnum') VALUE ('$name','$refnum')";
	
	
	
	    $result = mysqli_query( $conn, $sql);

    if($result){
        echo "1 row added.";
    } else {
        echo "Database query failed.";
    }

 ?>

<?php mysqli_close($conn); ?>



	/*if(mysqli_query($conn,$sql))
	{
		
		echo "<script>alert('Record inserted successfully!!!')</script>";
		
	}

   else
   {
	   echo "<script>alert ('Error')</script>";
   }	   
	 
	 
	 

//close connection
mysqli_close($conn);
?> */