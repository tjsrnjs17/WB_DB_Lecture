<html>
<body>
<form action = "in2.php" method= "post">//post형식으로 값 넘김
input: <input type = "text" name="content"/>//텍스트박스
input2: <input type = "text" name="content2"/>//텍스트박스
<input type = "submit"/>//제출버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");//DB연결
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";//쿼리문
	$result = mysqli_query( $con, $sql );//쿼리문전송
	
?>
