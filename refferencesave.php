<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$refnum=$_POST["refnum"];
	
	
//attempt insert query execution
	
$sql="INSERT INTO `reference`(`name`, `refnum`) VALUES ('$name','$refnum')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		
		echo "<script>alert('Saved Successfully!!')</script>";
		/*header("location:.php");*/
		
	} else{
		echo  "<script>alert('Server Error!!')</script>";
	}
	

}
?>

<?php
//close connection
mysqli_close($conn);

?>