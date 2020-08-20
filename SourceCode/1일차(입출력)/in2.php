<html>
<body>
<form action = "in2.php" method= "post">//post방법으로 in2.php만듦
input: <input type = "text" name="content"/>//입력받는 창 만듦
input2: <input type = "text" name="content2"/>//입력받는 창2 만듦
<input type = "submit"/>//제출버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");//db불러오기
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";//testd 테이블에 새 레코드 삽입
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	
?>
