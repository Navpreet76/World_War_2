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
		echo $row["idcountry"] . " - Name: " . $row["name"] . " " . $row["allegiance"] . " " . $row["army"] . 
		" " . $row["airforce"] . " " . $row["navy"] . "<br>" ;
	}
} else {
	echo "0 Results";
}
$conn->close();
?>