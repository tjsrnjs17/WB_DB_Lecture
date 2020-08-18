<?php
	$con = mysqli_connect("localhost", "root", "", "io"); //DB연결
	$sql = "SELECT * FROM testd"; //쿼리문 요청
	$result = mysqli_query( $con, $sql ); //쿼리문 전송
	while($row = mysqli_fetch_array($result)){
		echo '<p>'; //문단 띄우기
		echo $row['content'];  
		echo '<br>'; //줄 
		echo $row['content2'];
		} //$row 출력 
?>



