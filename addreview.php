<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$date=$_POST["date"];
	$department=$_POST["department"];
	$review=$_POST["review"];
	
//attempt insert query execution
	
$sql="INSERT INTO `review`(`name`, `phone`, `date`, `department`, `review`) VALUES ('$name','$phone','$date','$department','$review')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:table.php");
		
	} else{
		echo "Error,No data input or Invalid data ";
	}
	
/*	if($conn->query($sql) == true){
		header("Location:Table1.php");
	}else{
		echo "<script>alert('Try Again')</script>";
	}
}*/
}
?>

<?php
//close connection
mysqli_close($conn);

?>