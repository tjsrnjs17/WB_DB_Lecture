<html>
<body>
<form action = "in2.php" method= "post">//post형식으로 값 넘기기
input: <input type = "text" name="content"/>//content에 값을 넣을 텍스트 박스
input2: <input type = "text" name="content2"/>//content2에 값을 넣을 텍스트 박스
<input type = "submit"/>//제출버튼
</form>
</body>
</html>

<?php
	$con = mysqli_connect("localhost", "root", "", "io");//DB연결
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')";//칼럼 content와 content2에 각각 $_POST[content],$_POST[content2]에 저장된 값 삽입시키는 쿼리문
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	
?>
