<?php
	$user = 'user';
	$password = 'redhat';
	$host = 'localhost';
	$db = 'albums';
	$dbh = mysqli_connect($host,$user,$password,$db);
	echo "Connected to $host <br><br>";
	$query = "SELECT * FROM artists"; 
	$result = mysqli_query($dbh,$query);
	while ( $row = mysqli_fetch_array( $result,MYSQL_ASSOC ) ) {
		echo $row["artist_id"] . " " . $row["artist_name"]."<br>";
	}

?>
