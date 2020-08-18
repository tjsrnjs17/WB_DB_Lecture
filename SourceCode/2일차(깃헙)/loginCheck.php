
<?php
	$con = mysqli_connect("localhost", "root", "", "setest"); //db연결

if($_POST['user_id'] && $_POST['user_pw']){ //양식으로 전송된 데이터 받기
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//쿼리문 전송, REST api 사용하기 
	$num = mysqli_num_rows( $resource ); //문자열 숫자로 변환
	if($num>0) {
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/'); //아이디 쿠키 저장
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/'); //비밀번호 쿠키 저장
		echo "<meta http-equiv='refresh' content='0;url=main.html'>"; // 페이지 메인으로 넘기기
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>"; //문자열 출력, 이전페이지로 돌리기
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>"; // 경고창 띄우기, 이전페이지로 돌아가기
	exit;
}
?>
