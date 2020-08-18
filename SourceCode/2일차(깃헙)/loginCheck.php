
<?php
	$con = mysqli_connect("localhost", "root", "", "setest"); //DB연결

if($_POST['user_id'] && $_POST['user_pw']){ //ID와 비밀번호가 입력됨
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" ); //ID와 비밀번호를 요청하는 쿼리문
	$num = mysqli_num_rows( $resource ); //해당하는 데이터의 수를 반환
	if($num>0){ //해당하는 데이터의 수가 0보다 큰 경우
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/'); //ID를 입력된 ID로 설정후 쿠키로 저장
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/'); //비밀번호를 입력된 비밀번호로 설정후 쿠키로 저장
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";  //main.html로 출력
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>"; //문자열 출력 후 돌아가기
		exit; //조건문 탈출
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>"; //문자열 출력
	exit;//조건문 탈출
}
?>
