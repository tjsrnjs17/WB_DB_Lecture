
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");//DB연결

if($_POST['user_id'] && $_POST['user_pw']){//쿼리문
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//쿼리문 전송
	$num = mysqli_num_rows( $resource );//쿼리 실행으로 얻은 set의 총 레코드 수 반복
	if($num>0) {
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');//쿠키설정
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');//쿠키설정
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";//문자열 출력
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";//문자열 출력
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//문자열 출력
	exit;
}
?>
