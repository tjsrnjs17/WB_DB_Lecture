<?php
	$con = mysqli_connect("localhost", "root", "", "io");//db불러오기
	$sql = "SELECT * FROM testd";//testd에서 사용가능한 필드 선택하기
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	while($row = mysqli_fetch_array($result)){//결과 행을 연관 배열, 숫자 배열로 가져오기
		echo '<p>'; //문단띄우기
		echo $row['content'];//저장
		echo '<br>';//줄띄우기
		echo $row['content2'];//
		}
?>



