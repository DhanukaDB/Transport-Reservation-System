<?php
include_once "config.php";

	//	$from=$_POST["from"];
	//	$to=$_POST["to"];
	

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Time Schedule</h2>

<table>
  <tr>
    <th>Train</th>
    <th>Bus</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>Colombo - Jaffna</td>
    <td>Colombo - Jaffna </td>
    <td>06.00</td>
  </tr>
  <tr>
    <td>Colombo - KANKDY </td>
    <td>Colombo - KANKDY </td>
    <td>06.00</td>
  </tr>
  <tr>
    <td>Colombo -Galle</td>
    <td>Colombo -Galle</td>
    <td>08.00</td>
  </tr>
  <tr>
    <td>Malabe - Kadawatha</td>
    <td>Beliaththa - Jaffna(05:00)</td>
    <td>every 30 min</td>
  </tr>
  <tr>
    <td>Kandy - Malabe </td>
    <td>Badulla _Fort </td>
    <td>05:50</td>
  </tr>
  <tr>
    <td>Hambanthota - Galle</td>
    <td>Mathara - Thanamalvila</td>
    <td>16:00</td>
  </tr>
</table>

</body>
</html>








<?php
//close connection
mysqli_close($conn);

?>