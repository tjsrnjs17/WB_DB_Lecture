<?php
	$con = mysqli_connect("localhost", "root", "", "io");//db연결
	$sql = "SELECT * FROM testd";
	$result = mysqli_query( $con, $sql );//쿼리문 전송

	while($row = mysqli_fetch_array($result)){
		echo '<p>'; 
		echo $row['content'];//$row['content']에 전에 입력한 값이 들어가있다 a를 입력하고 제출을 누르면 POST방식으로 in.php로 넘어가 $row['content’]에 저장되있다
		echo '<br>';
		echo $row['content2'];//$row['content2']에 전에 입력한 값이 들어가있다 a를 입력하고 제출을 누르면 POST방식으로 in.php로 넘어가 $row['content2’]에 저장되있다

		}
?>



