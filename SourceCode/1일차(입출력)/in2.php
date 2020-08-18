<html>
<body>
<form action = "in2.php" method= "post"> //in2.php파일을 불러옴
input: <input type = "text" name="content"/> //입력 받을 수 있는 창을 만듦
input2: <input type = "text" name="content2"/> //입력 받을 수 있는 창을 만듦
<input type = "submit"/>//제출 버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io"); //db불러오기
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')"; //testd라는 칼럼에 입력받은 데이터를 삽입시키는 쿼리문 
	$result = mysqli_query( $con, $sql ); //쿼리문 전송
	
?>
