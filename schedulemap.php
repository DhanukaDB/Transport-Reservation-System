<?php
include_once "config.php";

	//	$from=$_POST["from"];
	//	$to=$_POST["to"];
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bookings</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- external css-->
    <link rel = "stylesheet" type = "text/css" href = "css/navigationBar.css">
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
			<link rel="stylesheet" type="text/css" href="css/tt.css">

	
	


<div class="header" style="background-image:url('images/header/backg.jpg');">
		<img class="logo" src = "images/header/logo.png" width="400" height = "200" alt="logo">
		
		<button class="button1"> <a href="Registation.html">Sign Up</a></button>
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
<br><br>
	<center>
	<div class="review">
	<table border="1" class="tbleBorder" cellpadding="15" width="75%" id="cc">
		<tr>
			
			<th class="T_font"> Name</th>
			
			<th class="T_font">Phone</th>
			
			<th class="T_font"> Date</th>
			<th class="T_font">Department</th>
			<th class="T_font">Review </th>
			
		</tr>
		</head>
<body>

	<?php
		
	
		$sql = "SELECT * FROM `booking`";
		$result=$conn->query($sql);
		
		
		if($result->num_rows>0)
		{
				
				
				
				
				
				while($row=$result->fetch_assoc())
				{
					$id=$row["id"];

					echo "<td>".$row["from1"]."</td>";
					echo "<td>".$row["to1"]."</td>";
					echo "<td>".$row["depart"]."</td>";
					echo "<td>".$row["return1"]."</td>";
					echo "<td>".$row["class1"]."</td>";
					echo "<td>".$row["adults"]."</td>";
					echo "<td>".$row["children"]."</td>";
					echo "<td>".$row["infants"]."</td>";
					
					echo "<td><button type='submit'><a href='editRecord1.php?id=$id'>Edit</a></button></td>";
					echo "<td><button type='submit'><a href='Delete.php?id=$id'>Delete</a></button></td></tr>";
					
				}
				
		}
		else
		
		{
			echo "0 results";
		
		}
		echo"</table>";
		$conn->close();
	
	
	?>
		
		
		
		
		
		
	
	</div>
	</center>
	
	<br>



	
	
	

	
	
	
  <br>
  
<div class="footer">
<div id="linkAlign">
  
  <img src="images/Footer/QR.jpg" width=75 height=40% align="left" alt="QR">
  <a href="https://paypal.com"><img src="images/Footer/payment.jpg" width=20% height=40% align="right" alt="Credit cards">
  	<a href="http://facebook.com"><img src="images/Footer/fb.png" alt="icon" width="50"  /></a>
	  <a href="http://instagram.com"><img src="images/Footer/insta.png" alt="icon" width="50" /></a>
		<a href="http://whatsapp.com"><img src="images/Footer/whatsapp.png" alt="icon" width="50"/></a>
		  <a href="http://youtube.com"><img src="images/Footer/youtube.png" alt="icon" width="50" /></a>
  
   
   <div align="right">
	
			<a href="#" class="footerButtons">Privacy Policy</a>
			<a href="#" class="footerButtons">|  Terms & Conditions</a>
			<a href="#" class="footerButtons">|  Contact Us </a>
			<a href="#" class="footerButtons">|  Reviews </a>
		 <p align="center" > © 2020 Mass Reservations</p>
		</div>		


  </div>

  
  
</div>
</div>
</body> 
</html>

<?php
//close connection
mysqli_close($conn);

?>