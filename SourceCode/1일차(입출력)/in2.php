<html>
<body>
<form action = "in2.php" method= "post">
input: <input type = "text" name="content"/>
input2: <input type = "text" name="content2"/>
<input type = "submit"/>
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";
	$result = mysqli_query( $con, $sql );
	
?>