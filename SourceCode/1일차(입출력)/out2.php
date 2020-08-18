<?php
	$con = mysqli_connect("localhost", "root", "", "io");
	$sql = "SELECT * FROM testd";//쿼리문
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	while($row = mysqli_fetch_array($result)){
		echo '<p>'; //문단 띄우기
		echo $row['content'];//수동으로 입력 한 문자열
		echo '<br>';//줄 띄우기
		echo $row['content2'];//수동으로 입력 한 문자열
		}
?>



