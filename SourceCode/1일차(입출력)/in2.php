<html>
<body>
<form action = "in2.php" method= "post">//버튼 눌리면 action = in.php 재귀 함수 처럼 자기 자신 부름 

input: <input type = "text" name="content"/>//입력받은 text값을 content에 넣는다
input2: <input type = "text" name="content2"/>//입력받은 text값을 content2에 넣는다
<input type = "submit"/>//제출버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");//db를 불러옴
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";//칼럼 content에 '$_POST[content]에 저장된 값 삽입 시키는 쿼리문
(요청문)
 
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	
?>
