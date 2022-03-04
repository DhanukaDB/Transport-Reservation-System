<?php

isset($_POST["search"])
$sfrom=$_POST['sfrom'];
$sto=$_POST['sto'];


include('config.php');


 $sql="INSERT INTO schedule ( sfrom, sto) VALUES ( '$sfrom', '$sto')";


?>