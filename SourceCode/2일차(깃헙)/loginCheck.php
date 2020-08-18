
<?php // php 언어 시작
	$con = mysqli_connect("localhost", "root", "", "setest"); // mysql에 접근

if($_POST['user_id'] && $_POST['user_pw']){ // mysql 접근2
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" ); // mysql에 검색
	$num = mysqli_num_rows( $resource ); // php 변수 만들기
	if($num>0) { //변수값이 0보다 크다면
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/'); // 쿠키를 정하기1
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/'); // 쿠키를 정하기2
		echo "<meta http-equiv='refresh' content='0;url=main.html'>"; // html 문서에 메타태그 쓰기
		}
	else{ // 변수값이 0보다 작거나 같다면
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>"; // html문서에 스크립트 태그 쓰기
		exit; // 나가기
	}	

}
else{ // mysql 접근이 안될때

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>"; // 스크립트 태그 쓰기
	exit; // 나가기
}
?> // php 언어 끝
