<?php
	$con = mysqli_connect("localhost", "root", "", "io");//DB연결
	$sql = "SELECT * FROM testd";//쿼리문
	$result = mysqli_query( $con, $sql );//쿼리문 전송
	while($row = mysqli_fetch_array($result)){//쿼리 실행으로 얻은 set 에서 레코드 1개씩 리턴

		echo '<p>'; //문자열출력
		echo $row['content'];//POST방식으로 저장
		echo '<br>';//문자열출력
		echo $row['content2'];//POST방식으로 저장
		}
?>



