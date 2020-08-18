<html>
<body>
<form action = "in2.php" method= "post"> //post형식으로 값 넘김, 버튼 눌리면 action = in.php 재귀 함수 처럼 자기 자신 부름 
input: <input type = "text" name="content"/> //텍스트 박스 
input2: <input type = "text" name="content2"/> //텍스트 박스 
<input type = "submit"/> //제출버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io"); //db와 table 생성
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";
	$result = mysqli_query( $con, $sql );
	
?>
