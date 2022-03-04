<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$cardname=$_POST["cardname"];
	$email=$_POST["email"];
	$cardnum=$_POST["cardnum"];
	$expdate=$_POST["expdate"];
	$expyear=$_POST["expyear"];
	$cvv=$_POST["cvv"];
	$amount=$_POST["amount"];
	
//attempt insert query execution
	
$sql="INSERT INTO `payment`(`cardname`, `email`, `cardnum`, `expdate`, `expyear`, `cvv`, `amount`) VALUES ('$cardname','$email','$cardnum','$expdate','$expyear','$cvv','$amount')";
	
	$result = mysqli_query( $conn, $sql);
	
	if($result){
		header("location:paydet.php");
		
	} else{
		echo "Error,No data input or Invalid data ";
	}
	

}
?>

<?php
//close connection
mysqli_close($conn);

?>