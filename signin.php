<?php

include 'config.php';

session_start();



if(isset($_POST["submit"]))
{
    
        
	$name = mysqli_real_escape_string($conn,$_POST["uname"]);
       //$name = $_POST["uname"];
       //$pwd = $_POST["myInput"];
	$pwd = mysqli_real_escape_string($conn,$_POST["myInput"]);
	
	//$query = "SELECT Username, Password FROM user WHERE Username ='{$name}' AND Password = '{$pwd}' LIMIT 1";
        $query = "SELECT user, password FROM pregister WHERE user ='{$name}' AND password = '{$pwd}' LIMIT 1";
        

        $result_set = mysqli_query($conn,$query);
        
        




if($result_set){
	
	echo"valid";
}
else
{
	echo"Invalid";
}

if(mysqli_num_rows($result_set) ==1)
{
	//echo"valid user login";
        
        echo '<script>alert("Welcome!!!You Have Successfully Logged In")</script>';
       //header("location:Sign in.html");
       
}
else{
	//echo"Invalid user login";
        echo '<script>alert("Error!! Please Try Again!!!")</script>';
        //header("location:Sign in.html");
        
       
}


}


?>

