<?php
//connection
$conn = Mysqli_connect(
"127.0.0.1",
"root",
"root",
"SuperSST"
);

//check connection
if(!$conn){
	echo "failed";
}
else {
	echo "success";
}

//Perform query
if ($result = mysqli_query($conn, "SELECT * FROM login")) {
	echo "Returned rows are: " . mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
var_dump($row);
	//Free result set
mysqli_free_result($result);

}
mysqli_close($conn);
?>