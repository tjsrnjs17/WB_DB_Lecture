<html> // html 태그 시작
<body> // body 태그 시작
<form action = "in2.php" method= "post"> // form 태그 시작
input: <input type = "text" name="content"/> // 문서 내용 "input:"과 "content라는 이름의 속성을 가진 input 태그
input2: <input type = "text" name="content2"/> // 문서 내ㅑ용 "input2:"과 content2라는 이름의 속성을 가진 input 태그
<input type = "submit"/> // submit 타입의 속성을 가진 input 태그
</form> // form 태그 닫기
</body> // body 태그 닫기
</html> // html 태그 닫기

<?php // php 언어 시작
	$con = mysqli_connect("localhost", "root", "", "io"); // sql에 연결
	$sql = "INSERT INTO testd (content,content2) VALUES('$_POST[content]','$_POST[content2]')"; // 클라이언트로부터 받은 변수를 sql에 생성하기
	$result = mysqli_query( $con, $sql ); // 결과를 con과 sql을 파라미터로 실행시킨 mysql_query의 함숫값으로 정하기
	
?> // php 언어 끝
