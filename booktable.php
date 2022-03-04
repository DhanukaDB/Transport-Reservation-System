<?php
 require_once 'config.php'; ?>


<?php
//escape user inputs for security
if(isset($_POST["submit"])){
	$from1=$_POST["from1"];
	$to1=$_POST["to1"];
	$depart	=$_POST["depart"];
	$return1=$_POST["return1"];
	$class1=$_POST["class1"];
	$adults	=$_POST["adults"];
	$children=$_POST["children"];
	$infants=$_POST["infants"];
	
//attempt insert query execution
	
$sql="INSERT INTO `booking`(`from1`, `to1`, `depart`, `return1`, `class1`, `adults`, `children`, `infants`) VALUES ('$from1','$to1','$depart','$return1','$class1','$adults','$children','$infants')";
	
	$bookresult = mysqli_query( $conn, $sql);
	
	if($bookresult){
		header("location:bookintable.php");
		
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