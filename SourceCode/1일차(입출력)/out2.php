<?php
	$con = mysqli_connect("localhost", "root", "", "io"); //db연결
	$sql = "SELECT * FROM testd"; //쿼리문
	$result = mysqli_query( $con, $sql ); //쿼리문 전송
	while($row = mysqli_fetch_array($result)){//결과 행을 연관 배열, 숫자 배열로 가져오기
		echo '<p>'; //문단 띄우기
		echo $row['content']; //row값에 저장된 값을 출력
		echo '<br>'; //줄 띄우기
		echo $row['content2']; //row값에 저장된 값을 출력
		}
?>



