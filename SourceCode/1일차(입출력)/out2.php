<?php
	$con = mysqli_connect("localhost", "root", "", "io");
	$sql = "SELECT * FROM testd";
	$result = mysqli_query( $con, $sql );
	while($row = mysqli_fetch_array($result)){
		echo '<p>'; 
		echo $row['content'];
		echo '<br>';
		echo $row['content2'];
		}
?>



