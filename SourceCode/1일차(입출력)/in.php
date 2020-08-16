<html>
<body>
<form action = "in.php" method= "post">
input: <input type = "text" name="content"/>
<input type = "submit"/>
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");
	$sql = "INSERT INTO test (content) VALUES('$_POST[content]')";
	$result = mysqli_query( $con, $sql );
?>