
<?php
	$con = mysqli_connect("localhost", "root", "", "setest"); //서버와 DB연결

if($_POST['user_id'] && $_POST['user_pw']){ //user id, user pw 정보 전달 
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" ); // user id, user pw 데이터를 가져온다. 
	$num = mysqli_num_rows( $resource ); // 결과 집합에서 행 수를 검색함
	if($num>0) { // 만약 num변수가 양수라면 
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/'); // 쿠키명이 user id이고 쿠키값, 만료기간, 경로, 도메인, 보안을 나타냄
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/'); // 쿠키명이 user pw이고 쿠키값, 만료기간, 경로, 도메인, 보안을 나타냄
		echo "<meta http-equiv='refresh' content='0;url=main.html'>"; // 출력
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>"; // 아이디나 패스워드가 잘못되었다는 문자열 출력
		exit; // 나감 
	}	

}
else{ // 아니라면 

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";  // 아이디 또는 패스워드가 잘못되었다는 문자열 출력 
	exit; // 나감 
}
?>
