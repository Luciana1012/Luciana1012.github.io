<?php
//connection
$conn = Mysqli_connect(
"127.0.0.1",
"root",
"root"

);

//check connection
if(!$conn){
	echo "failed";
}
else {
	echo "success";
}

$dbName = "CREATE DATABASE myDB";

//Create database

if (mysqli_query ($conn, $dbName)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
	}	
	
$conn = Mysqli_connect(
"127.0.0.1",
"root",
"root", "myDB"

);
//sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query ($conn, $sql)) {
	echo "Database created succesfully";
	} else {
	echo "Error creating database: " . mysqli_error ($conn);
	}	

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Diane', 'Didi', 'diane@example.com'), ('Ben', 'Benny', 'ben@example.com')";



if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
/*
//Perform query
if ($result = mysqli_query($conn, "SELECT * FROM login")) {
	echo "Returned rows are: " . mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
var_dump($row);
}
	//Free result set
mysqli_free_result($result);

}
mysqli_close($conn);
*/
?>