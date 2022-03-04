<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	
	
//attempt insert query execution
	
$sql="INSERT INTO `contact`(`firstname`, `lastname`, `email`, `message`) VALUES ('$firstname','$lastname','$email','$message')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		/*header("location:table.php");*/
		echo '<script>alert("Massege sent Successfully!!")</script>';
		
	} else{
		echo  '<script>alert("Sorry Server Error!!")</script>';
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