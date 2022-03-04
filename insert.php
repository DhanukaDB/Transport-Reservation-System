<?php

	$from1 = $_POST["from1"];
	$to1 = $_POST["to1"];
	$depart = $_POST["depart"];
	$return = $_POST["return"];
	$class = $_POST["class"];
	$adults = $_POST["adults"];
	$children = $_POST["children"];
	$infants = $_POST["infants"];

	//DB connection
	
	$conn = new mysqli('localhost','root','','publictransport');
	if($conn-connect_error){
		die('connection Fail : '.$conn-connect_error);
	}else{
		$stmt = $conn ->prepare("Insert into booking(from1,to1,depart,return,class,adults,children,infants)
		values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssiii",$from1,$to1,$depart,$return,$class,$adults,$children,$infants);
		$stmt->execute();
		echo "Booking Success!!";
			
			$stmt->close();
			$conn->close();
	}
	

?> 