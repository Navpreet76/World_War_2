<!DOCTYPE html>
<html>
<head>
	<title>sql template</title>
</head>
<body>
<div id="wrapper">
<table>
<thead>
	<tr>
		<td>Country ID</td>
		<td>Name</td>
		<td>Allegiance</td>
		<td>Army</td>
		<td>Airforce</td>
		<td>Navy</td>
	</tr>
</thead>
<tbody>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "world_war2";

 //Create Connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 //Check Connection
 if($conn->connect_error){
 	die("Connection failed: " . $conn->connect_error);

 }
$sql = "SELECT * FROM country";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output data to each row
	while($row = $result->fetch_assoc()){
		echo $row["idcountry"] . " - Name: " . $row["name"] ." ". $row["allegiance"] . " " . $row["army"] . 
		" " . $row["airforce"] . " " . $row["navy"] . "<br>" ;
	}
} else {
	echo "0 Results";
}
$conn->close();
?>
	<tr>
	<td><?php echo $row['idcountry'] ?></td>
	</tr>



</tbody>
</table>
</div>
</body>
</html>