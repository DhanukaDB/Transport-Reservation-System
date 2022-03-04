<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$sfrom=$_POST["sfrom"];
	$sto=$_POST["sto"];
	
	
//attempt insert query execution
	
$sql="INSERT INTO `schedule`(`sfrom`, `sto`) VALUES ('$sfrom','$sto')";
	
	$bookresult = mysqli_query( $conn, $sql);
	
	if($bookresult){
		echo "data saved successfully!!";
		/*header("location:schedulemap.php");
		
	} else{
		echo "Error,No data input or Invalid data ";
	}
	*/

}
?>

<?php
//close connection
mysqli_close($conn);

?>