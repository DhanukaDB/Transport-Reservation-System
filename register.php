<?php

$from1 = $_POST['from1'];
$to1 = $_POST['to1'];
$depart1 = $_POST['depart1'];
$return1 = $_POST['return1'];
$class = $_POST['class'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$infants = $_POST['infants'];

 if(!empty($'from1') || !empty($'to1') || !empty($'depart1') || !empty($'return1') || !empty($'class') || !empty($'adults') || !empty($'children') || !empty($'infants') )
 { 
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "publictransport";
}
    
	$conn = new mysqli($host,$dbusername,$dbPassword,$dbname);
	
	if (mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}else {
		


else{
	echo"All field are required";
	die(); 
}



?>