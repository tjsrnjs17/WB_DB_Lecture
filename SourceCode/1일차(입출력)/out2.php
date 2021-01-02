<?php
	$con = mysqli_connect("localhost", "root", "", "io");//DB연결
	$sql = "SELECT * FROM testd";//쿼리문
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	while($row = mysqli_fetch_array($result)){//데이터가 있다면 반복
		echo '<p>'; //문단 띄우기
		echo $row['content'];//content값 출력
		echo '<br>';//줄띄우기
		echo $row['content2'];//content2값 출력
		}
?>



