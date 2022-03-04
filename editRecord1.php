<?php
 require_once 'config.php'; ?>

<?php
//escape user inputs for security
if(isset($_POST["edit"])){
     
   
        $id = $_GET["id"];
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$date=$_POST["date"];
	$department=$_POST["department"];
	$review=$_POST["review"];
//attempt insert query execution
 $sql = "UPDATE review SET `name`='$name',`phone`='$phone',`date`='$date',`department`='$department',`review`='$review' WHERE id = '$id'";	
 $result = mysqli_query($conn,$sql);
	
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



<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- external css-->
    <link rel = "stylesheet" type = "text/css" href = "css/navigationBar.css">
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
	<link rel = "stylesheet" type = "text/css" href = "css/review1.css"> 
	
	

</head>
<body>

<div class="header" style="background-image:url('images/header/backg.jpg');">
		<img class="logo" src = "images/header/logo.png" width="400" height = "200" alt="logo">
		
		<button class="button1"> <a href="Registation.html">Login</a></button>
		<button class="button1"> <a href="sign in.html">Sign in</a></button>
		
		</div>


<ul>
  <li><a href="home.html">HOME</a></li>
  <li><a href="BOOKING.html">BOOKING</a></li>
   <li><a href="contactUs.html">CONTACT US</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">MORE</a>
    <div class="dropdown-content">
      <a href="Manage.html">Manage Bookings</a>
      <a href="Transport schedule.html">Transport Schedule</a>
      <a href="findref.html">Career Opportunity</a>
	  <a href="package.html">Packages</a>
	  <a href="review.html">Reviews</a>
	  <a href="About Us.html">About Us</a>
    </div>
  </li>
</ul>
</head>

<style>
.set3{
	padding: 90px;
	float:right;
	margin-right:200px;
	margin-top:0px;
	color: orange;
	font-weight:bold;
}
</style>





<?php
if(isset($_GET['id'])){
$record = $_GET['id'];

$s="SELECT * FROM `review` where id=$record";
	$result=$conn->query($s);
	if($result->num_rows>0){
	//output data of each row
	while($row=$result->fetch_assoc()){
		
	$name=$row["name"];
	$phone=$row["phone"];
	$date=$row["date"];
	$department=$row["department"];
	$review=$row["review"];
		
	}
}
}
?>


<form action="" method="post">
<div class = "set1">
<br/><br/>

	Name
    <input type="text" name="name" value = "<?php echo $name ?>" /><br/><br/>
	
	Phone<br/>
    <input type="text" name="phone" value = "<?php echo $phone ?>" /><br/><br/>
	
	 Date<br/>
    <input type="date" name="date" value = "<?php echo $date ?>" /><br/><br/>
  
	department<br/>
    <input type="text" name="department" value = "<?php echo $department ?>" /><br/><br/>

	review <br/>
    <input type="text" name="review" value = "<?php echo $review ?>" /><br/><br/>
	
	
</div>

<div class = "set3">
	<br/><br/>	
	<br/><br/>
	


	<input type="submit" id="btn1" name ="edit" value="Update Item"/>
</div>	
</form>
	
</body>
</html>



<?php
//close connection
mysqli_close($conn);

?>