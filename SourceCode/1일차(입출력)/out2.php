<?php // php 언어 시작
	$con = mysqli_connect("localhost", "root", "", "io"); // sql에 연결하기
	$sql = "SELECT * FROM testd"; // sql변수를 testd로부터 모두 선택
	$result = mysqli_query( $con, $sql ); // 결과를 정하기
	while($row = mysqli_fetch_array($result)){ // 반복문
		echo '<p>'; // p 태그 작성
		echo $row['content']; // 변수를 html 문서에 작성
		echo '<br>'; // br 태그를 html 문서에 작성
		echo $row['content2']; // 변수를 html 문서에 작성
		}
?> // php 언서 끝



