<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$user=$_POST["user"];
	$password=$_POST["password"];
	
	
//attempt insert query execution
	
$sql="INSERT INTO `pregister`(`user`, `password`) VALUES ('$user','$password')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:rtable.php");
		
	} else{
		echo "Error,No data input or Invalid data ";
	}
	

}
?>

<?php
//close connection
mysqli_close($conn);

?>